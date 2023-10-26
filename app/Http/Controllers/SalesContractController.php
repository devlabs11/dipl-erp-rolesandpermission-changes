<?php

namespace App\Http\Controllers;

use App\Models\SalesContract;
use App\Models\QuotationMaster;
use Illuminate\Http\Request;
use DB;
use PDF;
use Exception;
use Illuminate\Support\Facades\Log;
use Rap2hpoutre\FastExcel\FastExcel;
use OpenSpout\Common\Entity\Style\Style;
use Redirect;

class SalesContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       
            $salesContracts = SalesContract::select('id','quotation_id','sales_person_id','date','company_id')->orderBy('id','desc')->get();
            return view('sales-contract.index',['salesContracts' => $salesContracts]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $create = \Helper::getPermission('pi-create') ? 1 : 0;
        if($create == 1){
            $quotations = \Helper::getQuotations();
            $sales = \Helper::getAllSalesPerson();
            $companies = \Helper::getCompanies();
            $customers = \Helper::getCustomers();
            $currency = \Helper::getAllCurrency();
            $unit = \Helper::getUnit();
            $products = \DB::table("tbl_product")->select('id','product_type')->get();

            $payment_terms_id = \DB::table('terms_titles')->where('name','LIKE','%Payment%')->pluck('id')->toArray();
            $delivery_terms_id =  \DB::table('terms_titles')->where('name','LIKE','%delivery%')->pluck('id')->toArray();
            $port_of_discharge_id = \DB::table('terms_titles')->where('name','LIKE','%port_of_discharge%')->pluck('id')->toArray();
            $final_destination_id =  \DB::table('terms_titles')->where('name','LIKE','%final_destination%')->pluck('id')->toArray();
            $jurisdiction_id = \DB::table('terms_titles')->where('name','LIKE','%jurisdiction%')->pluck('id')->toArray();
            $other_id =  \DB::table('terms_titles')->where('name','LIKE','%other%')->pluck('id')->toArray();

            $payment_terms = \DB::table('terms_conditions')->whereIn('title_value_id',$payment_terms_id)->get();
            $delivery_terms =  \DB::table('terms_conditions')->whereIn('title_value_id',$delivery_terms_id)->get();
            $port_of_discharge = \DB::table('terms_conditions')->whereIn('title_value_id',$port_of_discharge_id)->get();
            $final_destination =  \DB::table('terms_conditions')->whereIn('title_value_id',$final_destination_id)->get();
            $jurisdiction = \DB::table('terms_conditions')->whereIn('title_value_id',$jurisdiction_id)->get();
            $other =  \DB::table('terms_conditions')->whereIn('title_value_id',$other_id)->get();

            return view('sales-contract.addEdit',[
                'salesContract' => $salesContract ?? null,
                'sales' => $sales ?? null,
                'companies' => $companies ?? null,
                'customers' => $customers ?? null,
                'currency' => $currency ?? null,
                'quotations' => $quotations ?? null,
                'units' => $unit ?? null,
                'payment_terms' => $payment_terms ?? null,
                'delivery' => $delivery_terms ?? null,
                'port_of_discharge' => $port_of_discharge ?? null,
                'final_destination' => $final_destination ?? null,
                'jurisdiction' => $jurisdiction ?? null,
                'other' => $other ?? null,
                'products' => $products ?? null,
            ]);
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
    DB::beginTransaction();
    try {
       $year = \Helper::currentFincYear();
       $lastId = SalesContract::count() + 1;
        if($lastId < 10){
            $uq = "0".$lastId;
        }else {
            $uq = $lastId;
        }
        $prefix = '';
        if($request->company == 47){
            $prefix = $uq."/DIPL/".$year;
            $company_name = "Devharsh Infotech Pvt Ltd";
        }else if($request->company == 49){
            $prefix = $uq."/SSSL/".$year;
            $company_name = "Scube";
        }else{
            $prefix = $uq."/OTH/".$year;
            $company_name = "Other";
        }
       $user_id = \Session::get('userdata')['user_id'];
       $salesContract = new SalesContract();
       $salesContract->uq_no = $prefix;
       $salesContract->quotation_id = $request->input('quotation');
       $salesContract->company_id = $request->input('company');
       $salesContract->sales_person_id = $request->input('sale_person');
       $salesContract->date =  date('Y-m-d',strtotime($request->input('date')));
       $salesContract->customer_id = $request->input('customer');
       $salesContract->delivery_address_id = $request->input('delivery_address');
       $salesContract->currency_id = $request->input('currency');
       $salesContract->company_bank_id = $request->input('company_bank');
       $salesContract->product = json_encode($request->input('item'));
       $salesContract->hsn = json_encode($request->input('hsn_code'));
       $salesContract->description = json_encode($request->input('description'));
       $salesContract->quantity = json_encode($request->input('quantity'));
       $salesContract->rate = json_encode($request->input('unit_rate'));
       $salesContract->unit = json_encode($request->input('unit'));
       $salesContract->total =  $request->input('grand_total');
       $salesContract->bank_charges = $request->input('bank_charges');
       $salesContract->sgs = $request->input('sgs');
       $salesContract->grand_total = ( ((float)$request->input('grand_total')) + ((float)$request->input('sgs')) +  ((float)$request->input('bank_charges')));
       $salesContract->delivery_terms_id =  json_encode($request->input('delivery_terms'));
       $salesContract->payment_terms_id =  json_encode($request->input('payment_terms'));
       $salesContract->port_of_discharge =  json_encode($request->input('port_of_discharge'));
       $salesContract->destination =  json_encode($request->input('destination'));
       $salesContract->jurisdiction_id =  json_encode($request->input('jurisdiction'));
       $salesContract->other =  json_encode($request->input('other'));
       $salesContract->created_by = $user_id;
       // Save the data to the database
       $resp = $salesContract->save();
    } catch(Exception $e){
        DB::rollback();
        Log::info("SalesContractController::Store");
        $message = $e->getMessage();
        Log::error('Exception Message: '. $message);

        $code = $e->getCode();
        Log::error('Exception Code: '. $code);

        $string = $e->__toString();
        Log::error('Exception String: '. $string);
        $file = $e->getFile();
        Log::error('Exception file: '. $file);
        $trace = $e->getTrace();
        Log::error('Exception trace: '. var_dump($trace));

        return 0;
    }
       if($resp){
        DB::commit();
            return 1;
       }else{
            return;
       }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesContract  $salesContract
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $view = \Helper::getPermission('pi-view') ? 1 : 0;
        if($view == 1){
            $salesContract = SalesContract::find($request->id);
            // return view('sales-contract.pdf',['salesContract' => $salesContract]);
            $pdf = \PDF::loadView('sales-contract.pdf',['salesContract' => $salesContract]);
            return $pdf->stream();
        }else{
            return redirect('/dashbard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesContract  $salesContract
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $edit = \Helper::getPermission('pi-edit') ? 1 : 0;
        if($edit == 1){
            $salesContract = SalesContract::find($request->id);
            $quotations = \Helper::getQuotations();
            $sales = \Helper::getAllSalesPerson();
            $companies = \Helper::getCompanies();
            $customers = \Helper::getCustomers();
            $currency = \Helper::getAllCurrency();
            $unit = \Helper::getUnit();
            $products = \DB::table("tbl_product")->select('id','product_type')->get();


            $payment_terms_id = \DB::table('terms_titles')->where('name','LIKE','%Payment%')->pluck('id')->toArray();
            $delivery_terms_id =  \DB::table('terms_titles')->where('name','LIKE','%delivery%')->pluck('id')->toArray();
            $port_of_discharge_id = \DB::table('terms_titles')->where('name','LIKE','%port_of_discharge%')->pluck('id')->toArray();
            $final_destination_id =  \DB::table('terms_titles')->where('name','LIKE','%final_destination%')->pluck('id')->toArray();
            $jurisdiction_id = \DB::table('terms_titles')->where('name','LIKE','%jurisdiction%')->pluck('id')->toArray();
            $other_id =  \DB::table('terms_titles')->where('name','LIKE','%other%')->pluck('id')->toArray();

            $payment_terms = \DB::table('terms_conditions')->whereIn('title_value_id',$payment_terms_id)->get();
            $delivery_terms =  \DB::table('terms_conditions')->whereIn('title_value_id',$delivery_terms_id)->get();
            $port_of_discharge = \DB::table('terms_conditions')->whereIn('title_value_id',$port_of_discharge_id)->get();
            $final_destination =  \DB::table('terms_conditions')->whereIn('title_value_id',$final_destination_id)->get();
            $jurisdiction = \DB::table('terms_conditions')->whereIn('title_value_id',$jurisdiction_id)->get();
            $other =  \DB::table('terms_conditions')->whereIn('title_value_id',$other_id)->get();

            return view('sales-contract.addEdit',[
                'salesContract' => $salesContract ?? null,
                'sales' => $sales ?? null,
                'companies' => $companies ?? null,
                'customers' => $customers ?? null,
                'currency' => $currency ?? null,
                'payment_terms' => $payment_terms ?? null,
                'delivery' => $delivery_terms ?? null,
                'quotations' => $quotations ?? null,
                'units' => $unit ?? null,
                'port_of_discharge' => $port_of_discharge ?? null,
                'final_destination' => $final_destination ?? null,
                'jurisdiction' => $jurisdiction ?? null,
                'other' => $other ?? null,
                'products' => $products ?? null,
            ]);
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesContract  $salesContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        DB::beginTransaction();
        try {
        $user_id = \Session::get('userdata')['user_id'];
        $salesContract = SalesContract::find($request->id);
        $salesContract->quotation_id = $request->input('quotation');
        $salesContract->company_id = $request->input('company');
        $salesContract->sales_person_id = $request->input('sale_person');
        $salesContract->date =  date('Y-m-d',strtotime($request->input('date')));
        $salesContract->customer_id = $request->input('customer');
        $salesContract->delivery_address_id = $request->input('delivery_address');
        $salesContract->currency_id = $request->input('currency');
        $salesContract->company_bank_id = $request->input('company_bank');
        $salesContract->product = json_encode($request->input('item'));
        $salesContract->hsn = json_encode($request->input('hsn_code'));
        $salesContract->description = json_encode($request->input('description'));
        $salesContract->quantity = json_encode($request->input('quantity'));
        $salesContract->rate = json_encode($request->input('unit_rate'));
        $salesContract->unit = json_encode($request->input('unit'));
        $salesContract->total = $request->input('grand_total');
        $salesContract->bank_charges = $request->input('bank_charges');
        $salesContract->sgs = $request->input('sgs');
        $salesContract->grand_total = (((float)$request->input('grand_total')) + ((float)$request->input('sgs')) +  ((float)$request->input('bank_charges')));
        $salesContract->delivery_terms_id =  json_encode($request->input('delivery_terms'));
        $salesContract->payment_terms_id =  json_encode($request->input('payment_terms'));
        $salesContract->port_of_discharge =  json_encode($request->input('port_of_discharge'));
        $salesContract->destination =  json_encode($request->input('destination'));
        $salesContract->jurisdiction_id =  json_encode($request->input('jurisdiction'));
        $salesContract->other =  json_encode($request->input('other'));
        $salesContract->updated_by = $user_id;
        $resp = $salesContract->save();
    } catch(Exception $e){
        DB::rollback();
        Log::info("SalesContractController::update");
        $message = $e->getMessage();
        Log::error('Exception Message: '. $message);

        $code = $e->getCode();
        Log::error('Exception Code: '. $code);

        $string = $e->__toString();
        Log::error('Exception String: '. $string);
        $file = $e->getFile();
        Log::error('Exception file: '. $file);
        $trace = $e->getTrace();
        Log::error('Exception trace: '. var_dump($trace));

        return 0;
    }
        if($resp){
            DB::commit();
                return 1;
        }else{
                return;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesContract  $salesContract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $user_id = \Session::get('userdata')['user_id'];
        $salesContract = SalesContract::where('id',$request->id)->update(['deleted_by' => $user_id]);
        SalesContract::find($request->id)->delete();
        return 1;
    }


    public function productHSN(Request $request){
        $hsn = \DB::table("tbl_product")->leftjoin('tbl_product_category','tbl_product_category.id','=','tbl_product.product_category')->where('tbl_product.id',$request->id)->select('tbl_product.id','tbl_product_category.hs_code')->get();
        return $hsn[0]->hs_code;
    }

    public function quotationDetail(Request $request){
        $quotation = $quotationMaster = QuotationMaster::with([
            'quotationProducts.quotationProductItems.quotationProductItemMultipleQtyRates'
        ])->find($request->id);
        // dd($quotation);
        return $quotation;
    }

    public function export(Request $request){
        $query = '';
        $query = QuotationMaster::with(['getComanyName','getSalesPerson','getCustomer','getProspect'])->get();
        $result = collect();
        $rowData = collect();
        $count = 1;
        if (count($query) > 0) {
           foreach($query as $item){
            $rowData = [
                'Sr.No' => $count ?? 'NA',
                'Unique id' => $item->unique_id ?? 'NA',
                'Company' => $item->getComanyName->name ?? 'NA',
                'Sales Person' => $item->getSalesPerson->fullname ?? 'NA',
                'Subject' => $item->subject ?? 'NA',
                'Customer' => $item->getCustomer->customer_name ?? 'NA',
                'Prospect Name' => $item->getProspect->company ?? 'NA',
                'Date' => date('d-m-Y',strtotime( $item->date)) ?? 'NA',
            ];
            $result->push($rowData);
            $count++;
           }
        }
    // getQuotation getCompany getSalesPerson getCustomer getCompanyBankDetails

        $file_name = 'SalesContractReport'.date('YmdHis').'.xlsx';
        $header_style = (new Style())->setFontBold();

        $rows_style = (new Style())
            ->setFontSize(10);

        return (new FastExcel($result))
            ->headerStyle($header_style)
            ->rowsStyle($rows_style)
            ->download($file_name);
    }
}
