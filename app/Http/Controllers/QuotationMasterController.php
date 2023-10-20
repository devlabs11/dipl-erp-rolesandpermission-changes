<?php

namespace App\Http\Controllers;

use PDF;
use Helper;
use App\Models\Tax;
use App\Models\Users;
use App\Models\TermsTitle;
use Illuminate\Http\Request;
use App\Models\ProspectMaster;
use App\Models\QuotationMaster;
use App\Models\QuotationProduct;
use App\Models\QuotationProductItem;
use App\Models\TermsCondition;
use DB;
use Carbon\Carbon;
use Mail;
use App\Mail\QuotationMail;
use App\Mail\ExceptionOccured;
use Exception;
use App\Models\DescriptionMaster;
use App\Models\SubMenu;
use App\Models\MenuItem;
use App\Models\QuotationAdvaceFeature;
use App\Models\AdvanceFeatureMaster;
use App\Models\QuotationProductItemMultipeQtyRate;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Rap2hpoutre\FastExcel\FastExcel;
use OpenSpout\Common\Entity\Style\Style;
use Redirect;

class QuotationMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $user_id = auth()->id();
        $permission = 'quotations-list';
        $listPermission = \Helper::getPermission($permission);
        if($listPermission == 1){
            // $user_id = \Session::get('userdata')['user_id'];
            // $user_role = $user_id['role'];
            $user_role = auth()->user()->role;
            if($user_role == 25){ //Admin
                $quotationMaster = QuotationMaster::orderBy('id','desc')->get();
            }elseif($user_role == 35){ //Sales Person
                $quotationMaster = QuotationMaster::orderBy('id','desc')->where('created_by',$user_id)->get();
            }else{
                $quotationMaster = QuotationMaster::orderBy('id','desc')->where('created_by',$user_id)->get();
            }
            $sales = Helper::getAllSalesPerson();
            $customers = Helper::getCustomers();
            $quotations = Helper::getQuotations();
            $company = \DB::table("tbl_company")->get();

            return view('quotation-master.index',compact('company','quotationMaster','sales','customers','quotations'));
        }else{
            return redirect('/dashboard');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $create = \Helper::getPermission('quotations-create') ? 1 : 0;
        if($create == 1){
            $company = \DB::table("tbl_company")->get();
            $sales = \DB::select("select md.description as designationname,tu.username as username,tu.fullname as fullname,tu.id as userid from tbl_user tu left join mst_designation md on md.id=tu.designation where md.description='Sales'");
            $product =  \DB::table("tbl_product")->get();
            $customer = \DB::table("tbl_customer_general")->select('id','customer_name')->get();
            $prospect = ProspectMaster::all();
            $term_title = TermsTitle::all();
            $sgst_id = Tax::get(['id','sgst']);
            $cgst_id = Tax::get(['id','cgst']);
            $igst_id = Tax::get(['id','igst']);
            // $auth_user_id = \Session::get('userdata')['user_id'];
            $auth_user_id = auth()->id();
            $currency = Helper::getAllCurrency();
            return view('quotation-master.create',compact('currency','company','sales','product','customer','prospect','term_title','sgst_id','cgst_id','igst_id','auth_user_id'));
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
        $price = $request->feature_price;
        $feature = $request->feature;
        Log::info('QuotationMasterController::store : '.$request);
        $no = 1;
        $productItem = $_POST['item'.$no];
        try {
            $year = date("m") >= 4 ? date("Y"). '-' . (date("Y")+1) : (date("Y") - 1). '-' . date("Y");
            $id_count = QuotationMaster::where('company_id',$request->company)->count() + 1;
            $uq = '';
            if($id_count < 10){
                $uq = "0".$id_count;
            }else {
                $uq = $id_count;
            }
            if($request->company == 47){
                $prefix = "QU/".$year."/DIPL/".$uq;
                $company_name = "Devharsh Infotech Pvt Ltd";
            }else if($request->company == 49){
                $prefix = "QU/".$year."/SSSL/".$uq;
                $company_name = "Scube";
            }else{
                $prefix = "QU/".$year."/OTH/".$uq;
                $company_name = "Other";
            }

            if($request->term_value != null){
                $title_value = implode(",", $request->term_value) ?? null;
            }else{
                $title_value = '';
            }

            if($request->term_title){
                // $title = implode(",", $request->term_title) ?? null;
                $title = $request->seq_term_title ?? null;
            }else{
                $title ='';
            }

            $sales = \DB::table('tbl_user')->where('id',$request->sale_person)->get(['fullname']);
            $sale_person = $sales[0]->fullname;
            $subject = $request->subject;
            $created_by = \Session::get('userdata')['fullname'];

            if($request->preview == "preview"){
                $preview = $request;
                $company = DB::table('tbl_company')->select('header_image', 'footer_image')
                        ->where('id', $request->company)
                        ->first();
                $action = "preview";
                $pdf = PDF::loadView('quotation-master.preview', compact('preview', 'company','action'));
                return $pdf->stream();
            }else{
                $user_id = \Session::get('userdata')['user_id'];
                $qm = new QuotationMaster();
                $qm->unique_id = $prefix;
                $qm->company_id = $request->company ?? null;
                $qm->sales_person_id = $request->sale_person ?? null;
                $qm->customer_id = $request->customer_name ?? null;
                $qm->customer_is = $request->customer_is ?? null;
                $qm->prospect_id = $request->prospect_name ?? null;
                $qm->date =date('Y-m-d',strtotime($request->quotation_date)) ?? '1994-01-01';
                $qm->attention_of = $request->attention_of ?? null;
                $qm->subject = $request->subject ?? null;
                $qm->reference = $request->reference ?? null;
                $qm->product_count = $request->material_count ?? null;
                $qm->currency_id = $request->currency ?? 0;
                $qm->features_is = $request->features_is ?? 0;
                $qm->quotation_category = $request->quotation_category ?? null;
                $qm->term_title = $title ?? null;
                $qm->email_to = $request->to_email ?? null;
                $qm->email_ids = $request->email_to ?? null;
                $qm->pdf = $request->pdf ?? 'No PDF';
                $qm->term_value = $title_value;
                $qm->product_count = count($request->product);
                $qm->created_by = $user_id;
                $resp = $qm->save();
                $quotation_id = $qm->id;
                if($request->company == 49 &&  $request->features_is==1){
                    if(count($price) > 0 && count($feature) > 0){
                        foreach($request->feature as $key => $item){
                            $featureData = new QuotationAdvaceFeature();
                            $featureData->quotation_id = $quotation_id;
                            $featureData->advance_feature_id = $key;
                            $featureData->price = $price[$key];
                            $featureData->created_by = \Helper::getAuthUser();
                            $featureData->save();
                        }
                    }
                }
                $no = 1;
                $y=1;
                $display =  $request->display_total_value ?? null;
                $sub_total  = $request->sub_total ?? null;
                $discount  = $request->discount ?? null;
                $cgst_id  = $request->cgst_id ?? null;
                $cgst  = $request->cgst ?? null;
                $sgst_id  = $request->sgst_id ?? null;
                $sgst  = $request->sgst ?? null;
                $igst_id  = $request->igst_id ?? null;
                $igst  = $request->igst ?? null;
                $grand_total  = $request->grand_total ?? null;
                foreach($request->product as $key => $item){
                    $product = new QuotationProduct();
                    $product->quotation_id = $quotation_id;
                    $product->product_id = $item;
                    $productItem = $_POST['item'.$no];
                    $product->itmes_count = count($request['item' . $no]['desc']);
                    $count_qty = count($productItem['qty']);
                    $display_value = 0;
                    // if($discount[$key] == null && $cgst_id[$key] == null && $sgst_id[$key] == null && $igst_id[$key] == null){
                    //     $display_value = 0;
                    // }else{
                    //     $display_value = 1;
                    // }
                    $product->display_total = $display_value ?? 0;
                    $product->sub_total = $sub_total[$key] ?? null;
                    $product->discount = $discount[$key] ?? null;
                    $product->cgst_id = $cgst_id[$key] ?? null;
                    $product->cgst = $cgst[$key] ?? null;
                    $product->sgst_id = $sgst_id[$key] ?? null;
                    $product->sgst = $sgst[$key] ?? null;
                    $product->igst_id = $igst_id[$key] ?? null;
                    $product->igst = $igst[$key] ?? null;
                    $product->grand_total = $grand_total[$key] ?? null;
                    $product->created_by = $user_id;
                    $respProduct = $product->save();
                    $product_id = $product->id;
                    $productItemId = '';
                    $descArray = $request['item' . $no]['desc'];
                    $qtyArray = $request['item' . $no]['qty'];
                    $unitArray = $request['item' . $no]['unit'];
                    $rateArray = $request['item' . $no]['rate'];
                    $subTotalArray = $request['item' . $no]['sub_total'];
                    $no++;
                    foreach ($descArray as $key => $desc) {
                        $item = new QuotationProductItem;
                        $item->quotation_product_id = $product->id; // Set the foreign key to link with the product
                        $item->description = $desc[0];
                        $item->unit = $unitArray[$key][0];
                        $item->qty = $qtyArray[$key][0];
                        $item->ppu = $rateArray[$key][0];
                        $item->total = $subTotalArray[$key][0];
                        $item->save();

                        // Check if the item has multiple quantities, rates, and subtotals
                        if (count($qtyArray[$key]) > 1 && count($rateArray[$key]) > 1 && count($subTotalArray[$key]) > 1) {
                            $i=0;
                            foreach ($qtyArray[$key] as $qtyKey => $qtyValue) {
                                if($i>0){
                                    $itemMultipleQtyRate = new QuotationProductItemMultipeQtyRate;
                                    $itemMultipleQtyRate->quotation_id = $quotation_id ?? null;
                                    $itemMultipleQtyRate->quotation_product_item_id = $item->id; // Set the foreign key to link with the item
                                    $itemMultipleQtyRate->qty = $qtyValue;
                                    $itemMultipleQtyRate->ppu = $rateArray[$key][$qtyKey];
                                    $itemMultipleQtyRate->total = $subTotalArray[$key][$qtyKey];
                                    $itemMultipleQtyRate->save();
                                }
                                $i++;
                            }
                        } else {

                        }
                    }
                }
            }
            $sales_email = \DB::table('tbl_user')->where('id',$request->sale_person)->get();
            $to = $sales_email[0]->emailid;
            $cc = '';
            if(!empty($request->email_to)){
                $email_cc = 'ceo@devharshinfotech.com,rakeshshah900@gmail.com'.','.$request->email_to;
                $cc = explode(',', $email_cc);
            }else{
                $email_cc = 'ceo@devharshinfotech.com,rakeshshah900@gmail.com';
                $cc = explode(',', $email_cc);
            }

            $data = array([
                'uniqid' => $prefix,
                'company'  => $company_name,
                'subject' => $request->subject,
                'sales_person'	=> $sale_person,
                'generated_by'	=> $created_by,
                'view' => $quotation_id,
            ]);


            if(config('app.env') == 'testing'){
                $cc = $request->email_to;
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->bcc('tester2@scube.net.in')->cc($cc)->send(new QuotationMail($data));
            }else if(config('app.env') == 'prod'){
                // \Mail::mailer('smtp')->to($to)->cc($cc)->send(new QuotationMail($data));
            }else{
                $cc = $request->email_to;
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->bcc('tester2@scube.net.in')->cc($cc)->send(new QuotationMail($data));
            }
            return 1;
            // if($respProduct && $resp){
            //     return 1;
            // }else{
            //     return 0;
            // }
        }catch (Exception $e) {
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

            $subject = 'An error occurred during Quotation creation on Local';
            $data = array([
                'subject' => $subject,
                'message' => $message,
                'code'  => $code,
                'string' => $string,
                'file'	=> $file,
                'trace'	=> $trace,
                // 'view' => $quotation_id,
            ]);

            if(config('app.env') == 'testing'){
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new ExceptionOccured($data));
            }else if(config('app.env') == 'prod'){
                $email_cc = 'software@scube.net.in,tester2@scube.net.in';
                $cc = explode(',', $email_cc);
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc($cc)->send(new ExceptionOccured($data));
            }else{
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new ExceptionOccured($data));
            }
        }
        // return redirect('quotation-master');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuotationMaster  $quotationMaster
     * @return \Illuminate\Http\Response
     */
    public function show(QuotationMaster $quotationMaster,Request $request){
        $duplicate = \Helper::getPermission('quotations-duplicate') ? 1 : 0;
        $alter = \Helper::getPermission('quotations-alter') ? 1 : 0;
        $view = \Helper::getPermission('quotations-view') ? 1 : 0;
        $pdf = \Helper::getPermission('quotations-pdf') ? 1 : 0;

        if($alter != 0 || $view != 0 || $pdf != 0 || $duplicate != 0){
            $id = $request->id;
            $action = $request->action;
            $preview = QuotationMaster::find($request->id);
            $quotationMaster = QuotationMaster::find($request->id);
            $advanceFeature = QuotationAdvaceFeature::where('quotation_id',$request->id)->get();
            if($preview == null || $quotationMaster == null ){
                echo "<h3>Quotation has been deleted</h3>";
                exit;
            }
            $multipleQty = QuotationProductItemMultipeQtyRate::where('quotation_id',$request->id)->get();

            $productId = QuotationProduct::where('quotation_id',$request->id)->pluck('id')->toArray();
            $productItems = QuotationProductItem::whereIn('quotation_product_id',$productId)->get();
            $quotationProducts = QuotationProduct::where('quotation_id',$request->id)->get();
            $term_value_id = explode(',',$quotationMaster->term_value);
            $term_value =  TermsCondition::whereIn('id',$term_value_id)->select('term_value')->get();
            $company = DB::table('tbl_company')->select('header_image', 'footer_image','stamp_image')
                        ->where('id', $quotationMaster->company_id)
                        ->first();
            if ($action == 'without') {

            } else if ($action == 'with')  {

            }else if ($action == 'duplicate')  {
                $quotationMaster = QuotationMaster::find($request->id);
                $id_count = QuotationMaster::where('company_id',$quotationMaster->company_id)->count() + 1;
                if($id_count < 10){
                    $uq_id = "0".$id_count;
                }else {
                    $uq_id = $id_count;
                }
                $unique_id = $quotationMaster->unique_id;
                $uq = substr($unique_id, strrpos($unique_id, '/' )+1);
                $prefix = str_replace($uq,$uq_id,$unique_id);

                $productId = QuotationProduct::where('quotation_id',$request->id)->pluck('id')->toArray();
                $productItems = QuotationProductItem::whereIn('quotation_product_id',$productId)->get();
                $quotationProducts = QuotationProduct::where('quotation_id',$request->id)->get();
                $newQuotationMaster = $quotationMaster->replicate()->fill([
                    'unique_id' => $prefix,
                    'created_at' => Carbon::now()
                ]);
                $newQuotationMaster->save();
                $quotation_id = $newQuotationMaster->id;
                foreach($quotationProducts as $entries){
                    $newQuotationProducts = $entries->replicate()->fill([
                        'quotation_id' => $quotation_id,
                        'created_at' => Carbon::now()
                    ]);
                    $newQuotationProducts->save();
                    $product_id = $newQuotationProducts->id;
                    $productItems = QuotationProductItem::where('quotation_product_id',$entries->id)->get();
                    foreach($productItems as $items){
                        $productItem = $items->replicate()->fill([
                            'quotation_product_id' => $product_id,
                            'created_at' => Carbon::now()
                        ]);
                        $productItem->save();
                        $newProductItemId = $productItem->id;
                        $multipleQty = QuotationProductItemMultipeQtyRate::where('quotation_id',$request->id)->where('quotation_product_item_id',$items->id)->get();
                        if($multipleQty){
                            foreach($multipleQty as $qty){
                                // echo 'Q';
                                $newMultipleQty = $qty->replicate()->fill([
                                    'quotation_id' => $quotation_id,
                                    'quotation_product_item_id' => $newProductItemId,
                                    'created_at' => Carbon::now()
                                ]);
                                $newMultipleQty->save();
                            }
                        }
                    }
                }
                $featureSelected = QuotationAdvaceFeature::where('quotation_id',$request->id)->get();
                if($featureSelected){
                    foreach($featureSelected as $feature){
                        $newFeatureSelected = $feature->replicate()->fill([
                            'quotation_id' => $quotation_id,
                            'created_at' => Carbon::now()
                        ]);
                        $newFeatureSelected->save();
                    }
                }
                return redirect('quotation-master');
            }

            // return view('quotation-master.pdf',compact('multipleQty','advanceFeature','company','preview','action', 'quotationMaster','productItems','quotationProducts','term_value'));
            $pdf = PDF::loadView('quotation-master.pdf', compact('multipleQty','advanceFeature','company','preview','action', 'quotationMaster','productItems','quotationProducts','term_value'));
            return $pdf->stream();
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuotationMaster  $quotationMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(QuotationMaster $quotationMaster,Request $request){
        $edit = \Helper::getPermission('quotations-edit') ? 1 : 0;
        if($edit == 1){
            $quotationMaster = QuotationMaster::find($request->id);
            if(!$quotationMaster){
                return redirect('quotation-master');
            }
            $company = \DB::table("tbl_company")->get();
            $sales = \DB::select("select md.description as designationname,tu.username as username,tu.fullname as fullname,tu.id as userid from tbl_user tu left join mst_designation md on md.id=tu.designation where md.description='Sales'");
            $product =  \DB::table("tbl_product")->get();
            $customer = \DB::table("tbl_customer_general")->select('id','customer_name')->get();
            $prospect = ProspectMaster::all();
            $term_title = TermsTitle::all();
            $sgst_id = Tax::get(['id','sgst']);
            $cgst_id = Tax::get(['id','cgst']);
            $igst_id = Tax::get(['id','igst']);
            $productId = QuotationProduct::where('quotation_id',$request->id)->pluck('id')->toArray();
            $productItems = QuotationProductItem::whereIn('quotation_product_id',$productId)->get();
            $quotationProducts = QuotationProduct::where('quotation_id',$request->id)->get();
            $multipleQty = QuotationProductItemMultipeQtyRate::where('quotation_id',$request->id)->get();
            $currency = \Helper::getAllCurrency();
            $feature = AdvanceFeatureMaster::get();
            $featureSelected = QuotationAdvaceFeature::where('quotation_id',$request->id)->select('advance_feature_id','price')->get();
            $arrFeature = array();
            foreach($featureSelected as $selected){
                $arrFeature[$selected->advance_feature_id] = $selected->price;
            }
            return view('quotation-master.edit',compact('multipleQty','arrFeature','feature','featureSelected','currency','quotationProducts','productItems','quotationMaster','company','sales','product','customer','prospect','term_title','sgst_id','cgst_id','igst_id'));
        }else{
            return redirect('/dashboard');
        }

    }
    public function alter(QuotationMaster $quotationMaster,Request $request)  {
        $alter = \Helper::getPermission('quotations-alter') ? 1 : 0;
        if($alter == 1){
            $quotationMaster = QuotationMaster::find($request->id);
            if(!$quotationMaster){
                return redirect('quotation-master');
            }
            $company = \DB::table("tbl_company")->get();
            $sales = \DB::select("select md.description as designationname,tu.username as username,tu.fullname as fullname,tu.id as userid from tbl_user tu left join mst_designation md on md.id=tu.designation where md.description='Sales'");
            $product =  \DB::table("tbl_product")->get();
            $customer = \DB::table("tbl_customer_general")->select('id','customer_name')->get();
            $prospect = ProspectMaster::all();
            $term_title = TermsTitle::all();
            $sgst_id = Tax::get(['id','sgst']);
            $cgst_id = Tax::get(['id','cgst']);
            $igst_id = Tax::get(['id','igst']);
            $productId = QuotationProduct::where('quotation_id',$request->id)->pluck('id')->toArray();
            $productItems = QuotationProductItem::whereIn('quotation_product_id',$productId)->get();
            $quotationProducts = QuotationProduct::where('quotation_id',$request->id)->get();
            $currency = \Helper::getAllCurrency();
            $feature = AdvanceFeatureMaster::get();
            $featureSelected = QuotationAdvaceFeature::where('quotation_id',$request->id)->select('advance_feature_id','price')->get();
            $multipleQty = QuotationProductItemMultipeQtyRate::where('quotation_id',$request->id)->get();
            $arrFeature = array();
            foreach($featureSelected as $selected){
                $arrFeature[$selected->advance_feature_id] = $selected->price;
            }
            return view('quotation-master.alter',compact('multipleQty','arrFeature','feature','featureSelected','currency','quotationProducts','productItems','quotationMaster','company','sales','product','customer','prospect','term_title','sgst_id','cgst_id','igst_id'));
        }else{
            return redirect('/dashboard');
        }
    }

    public function alterUpdate(Request $request){
        $price = $request->feature_price;
        $feature = $request->feature;
        Log::info('QuotationMasterController::alterUpdate : '.$request);
        try {
            if($request->company == 47){
                // $prefix = "QU/".$year."/DIPL/".$uq;
                $company_name = "Devharsh Infotech Pvt Ltd";
            }else if($request->company == 49){
                // $prefix = "QU/".$year."/SSSL/".$uq;
                $company_name = "Scube";
            }else{
                // $prefix = "QU/".$year."/OTH/".$uq;
                $company_name = "Other";
            }

            if($request->term_value != null){
                $title_value = implode(",", $request->term_value) ?? null;
            }else{
                $title_value = '';
            }

            if($request->term_title){
                $title = $request->seq_term_title ?? null;
            }else{
                $title = '';
            }
            $sales = \DB::table('tbl_user')->where('id',$request->sale_person)->get(['fullname']);
            $sale_person = $sales[0]->fullname;
            $subject = $request->subject;
            $created_by = \Session::get('userdata')['fullname'];

            if($request->preview == "preview"){
                $preview = $request;
                $company = DB::table('tbl_company')->select('header_image', 'footer_image')
                        ->where('id', $request->company)
                        ->first();
                $action = "preview";
                $pdf = PDF::loadView('quotation-master.preview', compact('preview', 'company','action'));
                return $pdf->stream();
            }else{
                $user_id = \Session::get('userdata')['user_id'];
                $count = $request->count + 1;
                $prefix = $request->unique_id.'-'.$count ?? 0;

                $updateAlterCount = QuotationMaster::find($request->id);
                $updateAlterCount->alter_count = $count;
                $updateAlterCount->update();

                $qm = new QuotationMaster();
                $qm->unique_id = $prefix;
                $qm->alter_count = 0;
                $qm->company_id = $request->company ?? null;
                $qm->sales_person_id = $request->sale_person ?? null;
                $qm->customer_id = $request->customer_name ?? null;
                $qm->customer_is = $request->customer_is ?? null;
                $qm->prospect_id = $request->prospect_name ?? null;
                $qm->date =date('Y-m-d',strtotime($request->quotation_date)) ?? '1994-01-01';
                $qm->attention_of = $request->attention_of ?? null;
                $qm->subject = $request->subject ?? null;
                $qm->reference = $request->reference ?? null;
                $qm->product_count = $request->material_count ?? null;
                $qm->currency_id = $request->currency ?? 0;
                $qm->features_is = $request->features_is ?? 0;
                $qm->quotation_category = $request->quotation_category ?? null;
                $qm->term_title = $title ?? null;
                $qm->email_to = $request->to_email ?? null;
                $qm->email_ids = $request->email_to ?? null;
                $qm->pdf = $request->pdf ?? 'No PDF';
                $qm->term_value = $title_value;
                $qm->product_count = count($request->product);
                $qm->created_by = $user_id;
                $resp = $qm->save();
                $quotation_id = $qm->id;
                if($request->company == 49 &&  $request->features_is==1 ){
                    if(count($price) > 0 && count($feature) > 0){
                        foreach($request->feature as $key => $item){
                            $featureData = new QuotationAdvaceFeature();
                            $featureData->quotation_id = $quotation_id;
                            $featureData->advance_feature_id = $key;
                            $featureData->price = $price[$key];
                            $featureData->created_by = \Helper::getAuthUser();
                            $featureData->save();
                        }
                    }
                }
                $no = 1;
                $display =  $request->display_total_value ?? null;
                $sub_total  = $request->sub_total ?? null;
                $discount  = $request->discount ?? null;
                $cgst_id  = $request->cgst_id ?? null;
                $cgst  = $request->cgst ?? null;
                $sgst_id  = $request->sgst_id ?? null;
                $sgst  = $request->sgst ?? null;
                $igst_id  = $request->igst_id ?? null;
                $igst  = $request->igst ?? null;
                $grand_total  = $request->grand_total ?? null;
                foreach($request->product as $key => $item){
                    $product = new QuotationProduct();
                    $product->quotation_id = $quotation_id;
                    $product->product_id = $item;
                    $productItem = $_POST['item'.$no];
                    $product->itmes_count = count($productItem['desc']);
                    // if($discount[$key] == null && $cgst_id[$key] == null && $sgst_id[$key] == null && $igst_id[$key] == null){
                    //     $display_value = 0;
                    // }else{
                    //     $display_value = 1;
                    // }
                    $display_value = 0;
                    $product->display_total = $display_value ?? 0;
                    $product->sub_total = $sub_total[$key] ?? null;
                    $product->discount = $discount[$key] ?? null;
                    $product->cgst_id = $cgst_id[$key] ?? null;
                    $product->cgst = $cgst[$key] ?? null;
                    $product->sgst_id = $sgst_id[$key] ?? null;
                    $product->sgst = $sgst[$key] ?? null;
                    $product->igst_id = $igst_id[$key] ?? null;
                    $product->igst = $igst[$key] ?? null;
                    $product->grand_total = $grand_total[$key] ?? null;
                    $product->created_by = $user_id;
                    $respProduct = $product->save();
                    $product_id = $product->id;
                    $descArray = $request['item' . $no]['desc'];
                    $qtyArray = $request['item' . $no]['qty'];
                    $unitArray = $request['item' . $no]['unit'];
                    $rateArray = $request['item' . $no]['rate'];
                    $subTotalArray = $request['item' . $no]['sub_total'];
                    $no++;
                    foreach ($descArray as $key => $desc) {
                        $item = new QuotationProductItem;
                        $item->quotation_product_id = $product->id; // Set the foreign key to link with the product
                        $item->description = $desc[0];
                        $item->unit = $unitArray[$key][0];
                        $item->qty = $qtyArray[$key][0];
                        $item->ppu = $rateArray[$key][0];
                        $item->total = $subTotalArray[$key][0];
                        $item->save();

                        // Check if the item has multiple quantities, rates, and subtotals
                        if (count($qtyArray[$key]) > 1 && count($rateArray[$key]) > 1 && count($subTotalArray[$key]) > 1) {
                            $i=0;
                            foreach ($qtyArray[$key] as $qtyKey => $qtyValue) {
                                if($i>0){
                                    $itemMultipleQtyRate = new QuotationProductItemMultipeQtyRate;
                                    $itemMultipleQtyRate->quotation_id = $quotation_id ?? null;
                                    $itemMultipleQtyRate->quotation_product_item_id = $item->id; // Set the foreign key to link with the item
                                    $itemMultipleQtyRate->qty = $qtyValue;
                                    $itemMultipleQtyRate->ppu = $rateArray[$key][$qtyKey];
                                    $itemMultipleQtyRate->total = $subTotalArray[$key][$qtyKey];
                                    $itemMultipleQtyRate->save();
                                }
                                $i++;
                            }
                        } else {

                        }
                    }
                    // for ($i=0; $i < count($productItem['qty']) ; $i++) {
                    //    $productItemId = '';
                    //     if($i == 0){
                    //         $productItems = new QuotationProductItem();
                    //         $productItems->quotation_product_id = $product_id;
                    //         $productItems->description = $productItem['desc'][$i] ?? null;
                    //         $productItems->qty = $productItem['qty'][$i] ?? null;
                    //         $productItems->ppu = $productItem['rate'][$i] ?? null;
                    //         $productItems->unit = $productItem['unit'][$i] ?? null;
                    //         $productItems->total = $productItem['sub_total'][$i] ?? null;
                    //         $productItems->created_by = $user_id;
                    //         $productItems->save();
                    //     }
                    //     $productItemId = $productItems->id;
                    //     if($i != 0){
                    //         $multipleQty = new QuotationProductItemMultipeQtyRate();
                    //         $multipleQty->quotation_id = $quotation_id ?? null;
                    //         $multipleQty->quotation_product_item_id = $productItemId ?? null;
                    //         $multipleQty->qty = $productItem['qty'][$i] ?? null;
                    //         $multipleQty->ppu = $productItem['rate'][$i] ?? null;
                    //         $multipleQty->unit = $productItem['unit'][$i] ?? null;
                    //         $multipleQty->total = $productItem['sub_total'][$i] ?? null;
                    //         $multipleQty->created_by = $user_id;
                    //         $multipleQty->save();
                    //     }
                    // }
                    // $no++;
                }
            }

            $sales_email = \DB::table('tbl_user')->where('id',$request->sale_person)->get();
            $to = $sales_email[0]->emailid;

            if(!empty($request->email_to)){
            $email_cc = 'ceo@devharshinfotech.com,rakeshshah900@gmail.com'.','.$request->email_to;
            $cc = explode(',', $email_cc);
            }else{
                $email_cc = 'ceo@devharshinfotech.com,rakeshshah900@gmail.com';
                $cc = explode(',', $email_cc);
            }

            $data = array([
                'uniqid' => $prefix,
                'company'  => $company_name,
                'subject' => $request->subject,
                'sales_person'	=> $sale_person,
                'generated_by'	=> $created_by,
                'view' => $quotation_id,
            ]);

            if(config('app.env') == 'testing'){
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new QuotationMail($data));
            }else if(config('app.env') == 'prod'){
                // \Mail::mailer('smtp')->to($to)->cc($cc)->send(new QuotationMail($data));
            }else{
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new ExceptionOccured($data));
            }
            return 1;
            if($respProduct && $resp){
                return 1;
            }else{
                return 0;
            }
        }catch (Exception $e) {
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

            $subject = 'An error occurred during Quotation creation on Local';
            $data = array([
                'subject' => $subject,
                'message' => $message,
                'code'  => $code,
                'string' => $string,
                'file'	=> $file,
                'trace'	=> $trace,
                // 'view' => $quotation_id,
            ]);

            if(config('app.env') == 'testing'){
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new ExceptionOccured($data));
            }else if(config('app.env') == 'testing'){
                $email_cc = 'software@scube.net.in,tester2@scube.net.in';
                $cc = explode(',', $email_cc);
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc($cc)->send(new ExceptionOccured($data));
            }else{
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new ExceptionOccured($data));
            }
        }
        // return redirect('quotation-master');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuotationMaster  $quotationMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $termTitles = $request->input('term_title', []);
        $termValues = $request->input('term_value', []);
        $no = 1;
        $productItem = $_POST['item'.$no];
        if($request->preview == "preview"){
            $preview = $request;
            $pdf = PDF::loadView('quotation-master.pdf', compact('preview'));
            return $pdf->stream();
        }else{
            if($request->term_value != null){
                $title_value = implode(",", $request->term_value) ?? null;
            }else{
                $title_value = '';
            }

            if($request->term_title){
                $title = $request->seq_term_title ?? null;
            }else{
                $title = "";
            }
            $user_id = \Session::get('userdata')['user_id'];
            $qm = QuotationMaster::find($request->id);
            $qm->company_id = $request->company ?? null;
            $qm->sales_person_id = $request->sale_person ?? null;
            $qm->customer_id = $request->customer_name ?? null;
            $qm->customer_is = $request->customer_is ?? null;
            $qm->prospect_id = $request->prospect_name ?? null;
            $qm->date =date('Y-m-d',strtotime($request->quotation_date)) ?? '1999-01-01';
            $qm->attention_of = $request->attention_of ?? null;
            $qm->subject = $request->subject ?? null;
            $qm->reference = $request->reference ?? null;
            $qm->product_count = $request->material_count ?? null;
            $qm->currency_id = $request->currency ?? 0;
            $qm->features_is = $request->features_is ?? 0;
            $qm->quotation_category = $request->quotation_category ?? null;
            $qm->term_title = $title ?? null;
            $qm->email_to = $request->to_email ?? null;
            $qm->email_ids = $request->email_to ?? null;
            $qm->pdf = $request->pdf ?? 'asb';
            $qm->term_value = $title_value ?? null;
            $qm->product_count = count($request->product);
            $qm->updated_by = $user_id;
            $resp = $qm->save();
            $quotation_id = $request->id;
            $price = $request->feature_price;
            $feature = $request->feature;
            QuotationAdvaceFeature::where('quotation_id',$quotation_id)->delete();
            if($request->company == 49 &&  $request->features_is==1){
                if(count($price) > 0 && count($feature) > 0){
                    foreach($request->feature as $key => $item){
                        $featureData = new QuotationAdvaceFeature();
                        $featureData->quotation_id = $quotation_id;
                        $featureData->advance_feature_id = $key;
                        $featureData->price = $price[$key];
                        $featureData->created_by = \Helper::getAuthUser();
                        $featureData->save();
                    }
                }
            }

            //Hard Delete
            $product_delete_id = QuotationProduct::where('quotation_id',$request->id)->pluck('id')->toArray();
            // QuotationProductItem::whereIn('quotation_product_id',$product_delete_id)->forceDelete();
            // QuotationProduct::where('quotation_id',$request->id)->forceDelete();

            QuotationProductItem::whereIn('quotation_product_id',$product_delete_id)->delete();
            QuotationProduct::where('quotation_id',$request->id)->delete();
            QuotationProductItemMultipeQtyRate::where('quotation_id',$request->id)->delete();

            $no = 1;
            $display =  $request->display_total_value ?? null;
            $sub_total  = $request->sub_total ?? null;
            $discount  = $request->discount ?? null;
            $cgst_id  = $request->cgst_id ?? null;
            $cgst  = $request->cgst ?? null;
            $sgst_id  = $request->sgst_id ?? null;
            $sgst  = $request->sgst ?? null;
            $igst_id  = $request->igst_id ?? null;
            $igst  = $request->igst ?? null;
            $grand_total  = $request->grand_total ?? null;
            foreach($request->product as $key => $item){
                $product = new QuotationProduct();
                $product->quotation_id = $quotation_id;
                $product->product_id = $item;
                $productItem = $_POST['item'.$no];
                $product->itmes_count = count($productItem['desc']);
                $display_value = 0;
                // if($discount[$key] == null && $cgst_id[$key] == null && $sgst_id[$key] == null && $igst_id[$key] == null){
                //     $display_value = 0;
                // }else{
                //     $display_value = 1;
                // }
                $product->display_total = $display_value ?? 0;
                $product->sub_total = $sub_total[$key] ?? null;
                $product->discount = $discount[$key] ?? null;
                $product->cgst_id = $cgst_id[$key] ?? null;
                $product->cgst = $cgst[$key] ?? null;
                $product->sgst_id = $sgst_id[$key] ?? null;
                $product->sgst = $sgst[$key] ?? null;
                $product->igst_id = $igst_id[$key] ?? null;
                $product->igst = $igst[$key] ?? null;
                $product->grand_total = $grand_total[$key] ?? null;
                $product->updated_by = $user_id;
                $respProduct = $product->save();
                $product_id = $product->id;
                $descArray = $request['item' . $no]['desc'];
                    $qtyArray = $request['item' . $no]['qty'];
                    $unitArray = $request['item' . $no]['unit'];
                    $rateArray = $request['item' . $no]['rate'];
                    $subTotalArray = $request['item' . $no]['sub_total'];
                    $no++;
                    foreach ($descArray as $key => $desc) {
                        $item = new QuotationProductItem;
                        $item->quotation_product_id = $product->id; // Set the foreign key to link with the product
                        $item->description = $desc[0];
                        $item->unit = $unitArray[$key][0];
                        $item->qty = $qtyArray[$key][0];
                        $item->ppu = $rateArray[$key][0];
                        $item->total = $subTotalArray[$key][0];
                        $item->save();

                        // Check if the item has multiple quantities, rates, and subtotals
                        if (count($qtyArray[$key]) > 1 && count($rateArray[$key]) > 1 && count($subTotalArray[$key]) > 1) {
                            $i=0;
                            foreach ($qtyArray[$key] as $qtyKey => $qtyValue) {
                                if($i>0){
                                    $itemMultipleQtyRate = new QuotationProductItemMultipeQtyRate;
                                    $itemMultipleQtyRate->quotation_id = $quotation_id ?? null;
                                    $itemMultipleQtyRate->quotation_product_item_id = $item->id; // Set the foreign key to link with the item
                                    $itemMultipleQtyRate->qty = $qtyValue;
                                    $itemMultipleQtyRate->ppu = $rateArray[$key][$qtyKey];
                                    $itemMultipleQtyRate->total = $subTotalArray[$key][$qtyKey];
                                    $itemMultipleQtyRate->save();
                                }
                                $i++;
                            }
                        } else {

                        }
                    }
                // for ($i=0; $i < count($productItem['qty']) ; $i++) {
                //     $productItemId = '';
                //     if($i == 0){
                //         $productItems = new QuotationProductItem();
                //         $productItems->quotation_product_id = $product_id;
                //         $productItems->description = $productItem['desc'][$i] ?? null;
                //         $productItems->qty = $productItem['qty'][$i] ?? null;
                //         $productItems->ppu = $productItem['rate'][$i] ?? null;
                //         $productItems->unit = $productItem['unit'][$i] ?? null;
                //         $productItems->total = $productItem['sub_total'][$i] ?? null;
                //         $productItems->created_by = $user_id;
                //         $productItems->save();
                //     }
                //     $productItemId = $productItems->id;
                //     if($i != 0){
                //         $multipleQty = new QuotationProductItemMultipeQtyRate();
                //         $multipleQty->quotation_id = $quotation_id ?? null;
                //         $multipleQty->quotation_product_item_id = $productItemId ?? null;
                //         $multipleQty->qty = $productItem['qty'][$i] ?? null;
                //         $multipleQty->ppu = $productItem['rate'][$i] ?? null;
                //         $multipleQty->unit = $productItem['unit'][$i] ?? null;
                //         $multipleQty->total = $productItem['sub_total'][$i] ?? null;
                //         $multipleQty->created_by = $user_id;
                //         $multipleQty->save();
                //     }
                // }
                // $no++;
            }
        }
        if($respProduct && $resp){
            return 1;
        }else{
            return 0;
        }
        return redirect('quotation-master');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuotationMaster  $quotationMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $delete = \Helper::getPermission('quotations-delete') ? 1 : 0;
        if($delete == 0){
            $user_id = \Session::get('userdata')['user_id'];
            $product = QuotationProduct::where('quotation_id',$request->id)->pluck('id')->toArray();
            QuotationProductItem::whereIn('quotation_product_id',$product)->update(['deleted_by' => $user_id]);
            QuotationProduct::where('quotation_id',$request->id)->update(['deleted_by' => $user_id]);
            QuotationMaster::find($request->id)->update(['deleted_by' => $user_id]);

            QuotationProductItem::whereIn('quotation_product_id',$product)->delete();
            QuotationProduct::where('quotation_id',$request->id)->delete();
            QuotationMaster::find($request->id)->delete();
            QuotationAdvaceFeature::where('quotation_id',$request->id)->update(['deleted_by' => $user_id]);
            QuotationProductItemMultipeQtyRate::where('quotation_id',$request->id)->update(['deleted_by' => $user_id]);
            QuotationAdvaceFeature::where('quotation_id',$request->id)->delete();
            QuotationProductItemMultipeQtyRate::where('quotation_id',$request->id)->delete();
            return 1;
        }else{
            return redirect('/dashboard');
        }

    }

    public function testMail()
    {
        $mail = 'dev5@scube.net.in';
        $data = array([
            'uniqid' => 1,
            'company'  => "sssl",
            'subject' => "sssl",
            'sales_person'	=> "sssl",
            'generated_by'	=> "sssl",
            'view' => "sssl",
        ]);

        // \Mail::mailer('smtp')->to($mail)->cc('deepalikolhe4@gmail.com')->send(new QuotationMail($data));

        dd('Mail Send Successfully !!');
    }

    public function customer(){
        $customer = \DB::table("tbl_customer_general")->select('id','customer_name')->get();
        return $customer;
    }

    public function prospect(){
        $prospect = ProspectMaster::all();
        return $prospect;
    }

    public function customerAttention(Request $request){
        $attention = \DB::table("tbl_customer_general")->where('id',$request->id)->select('attention')->get();
        return $attention;
    }

    public function quotationDetail(Request $request){
        $quotation = QuotationMaster::find($request->id);
        return $quotation;
    }

    public function productWiseDesc(Request $request){
            $desc = DB::table('tbl_product')->where('id', $request->id)->select('description_id')->get();
            $desc_id = explode(",", $desc[0]->description_id);
            $description = DescriptionMaster::whereIn('id', $desc_id)->select('id', 'text')->orderByRaw('FIELD(id, '.implode("," , $desc_id).')')->get();
            $result = array();
            $content = "";
            foreach($description as $key => $item){
                $sub_menu = SubMenu::where('menu_id', $item->id)->select('id', 'menu_id', 'text')->get();
                $count = $key + 1;
                $content .= $count . ". " . $item->text . " <br>\n";

                if ($sub_menu->count()) {
                    foreach($sub_menu as $key1 =>  $item1){
                        $menu_item = MenuItem::where('sub_menu_id', $item1->id)->select('id', 'sub_menu_id', 'text')->get();
                        $count1 = $key1 + 1;
                        $content .= " $count.$count1. " . $item1->text . " <br>\n";
                        if ($menu_item->count()) {
                            foreach($menu_item as $key2 => $item2){
                                $count2 = $key2 + 1;
                                $content .= "  $count.$count1.$count2. " . $item2->text . " <br>\n";
                                $value = $item2->text;
                                $result[$key][$key1][$key2]['item']=$value;
                            }
                        }
                    }
                }
            }
            return $content;
        }
        public function featureQuotation(Request $request){
            $featureData = QuotationAdvaceFeature::where('quotation_id',$request->id)->select('id','advance_feature_id','price')->get();
            dd($featureData);
        }

        public function search(Request $request){
            if($request->id != null || $request->customer != null || $request->sale != null || $request->company != null){
                $query = '';
                if($request->id != null && ($request->customer == null || $request->sale == null || $request->company == null) ){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson'])
                    ->where('id','=',$request->id )
                    ->get();
                }elseif($request->customer != null && ($request->id == null || $request->sale == null || $request->company == null)){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson'])
                    ->where('customer_id','=',$request->customer )
                    ->get();
                }elseif($request->sale != null && ($request->id == null || $request->customer == null || $request->company == null)){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson'])
                   ->where('sales_person_id','=',$request->sale )
                    ->get();
                }elseif($request->company != null && ($request->id == null || $request->customer == null || $request->sale == null)){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson'])
                   ->where('company_id','=',$request->company )
                    ->get();
                }else{
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson'])
                    ->where('id','=',$request->id )
                    ->orWhere('company_id','=',$request->company )
                    ->orWhere('sales_person_id','=',$request->sale)
                    ->orWhere('customer_id','=',$request->customer )
                    ->get();
                }
                return $query;
            }else{
                return 2;
            }
        }

        public function export(Request $request){
            $query = '';
            if($request->id != null || $request->customer != null || $request->sale != null || $request->company != null){
                if($request->id != null && ($request->customer == null || $request->sale == null || $request->company == null) ){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson','getCustomer','getProspect'])
                    ->where('id','=',$request->id )
                    ->get();
                }elseif($request->customer != null && ($request->id == null || $request->sale == null || $request->company == null)){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson','getCustomer','getProspect'])
                    ->where('customer_id','=',$request->customer )
                    ->get();
                }elseif($request->sale != null && ($request->id == null || $request->customer == null || $request->company == null)){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson','getCustomer','getProspect'])
                   ->where('sales_person_id','=',$request->sale )
                    ->get();
                }elseif($request->company != null && ($request->id == null || $request->customer == null || $request->sale == null)){
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson','getCustomer','getProspect'])
                   ->where('company_id','=',$request->company )
                    ->get();
                }else{
                    $query = QuotationMaster::with(['getComanyName','getSalesPerson','getCustomer','getProspect'])
                    ->where('id','=',$request->id )
                    ->orWhere('company_id','=',$request->company )
                    ->orWhere('sales_person_id','=',$request->sale)
                    ->orWhere('customer_id','=',$request->customer )
                    ->get();
                }
            }else{
                $query = QuotationMaster::with(['getComanyName','getSalesPerson','getCustomer','getProspect'])->get();
            }
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
            $file_name = 'QuotationReport'.date('YmdHis').'.xlsx';
            // return (new FastExcel($result))->download($file_name);
            $header_style = (new Style())->setFontBold();

            $rows_style = (new Style())
                ->setFontSize(10);
                // ->setShouldWrapText();
                // ->setBackgroundColor("EDEDED");

            return (new FastExcel($result))
                ->headerStyle($header_style)
                ->rowsStyle($rows_style)
                ->download($file_name);
        }

}
