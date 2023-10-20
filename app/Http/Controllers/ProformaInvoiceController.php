<?php

namespace App\Http\Controllers;

use Helper;
use App\Models\ProformaInvoice;
use App\Models\ProformaLocal;
use App\Models\ProformaOversis;
use App\Models\ProformaProducts;
use Illuminate\Http\Request;
use DB;
use PDF;
use Exception;
use Illuminate\Support\Facades\Log;
use Redirect;

class ProformaInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $list = \Helper::getPermission('pi-list') ? 1 : 0;
        if($list == 1){
            $pi = ProformaInvoice::orderBy('id','desc')->get();
            return view('proforma-invoice.index',['pi' => $pi]);
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
        $create = \Helper::getPermission('pi-create') ? 1 : 0;
        if($create == 1){
            $id_count = ProformaInvoice::count() + 1;
            $year = date("m") >= 4 ? date("Y"). '-' . (date("Y")+1) : (date("Y") - 1). '-' . date("Y");
            $uq = '';
            if($id_count < 10){
                $uq = "0".$id_count;
            }else {
                $uq = $id_count;
            }
            $prefix = "PI/".$year."/".$uq;
            $sales = \Helper::getAllSalesPerson();
            $companies = \Helper::getCompanies();
            $customers = \Helper::getCustomers();
            $countries = \Helper::getCountry();
            $cities = \Helper::getcity();
            $currency = \Helper::getAllCurrency();
            $payment_terms = \Helper::getPaymentTermsValue();
            $delivery = \Helper::getDeliveryValue();
            $quotations = \Helper::getQuotations();
            $product_category = \Helper::getProductCategory();
            $size = \Helper::getProductSize();
            $unit = \Helper::getUnit();
            $tax = \Helper::getTax();
            return view('proforma-invoice.addEdit',[
                'prefix' => $prefix,
                'sales' => $sales,
                'companies' => $companies,
                'customers' => $customers,
                'countries' => $countries,
                'cities' => $cities,
                'currency' => $currency,
                'payment_terms' => $payment_terms,
                'delivery' => $delivery,
                'quotations' => $quotations,
                'product_category' => $product_category,
                'units' => $unit,
                'size' => $size,
                'tax' => $tax,
                'proformaInvoice' => $proformaInvoice ?? null,
                'proformaOversis' => $proformaOversis ?? null,
                'proformaLocal' => $proformaLocal ?? null,
                'delivery_terms' => $delivery_terms ?? null,
                'paymentTerms' => $paymentTerms ?? null,
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
        if(count($request->all()) < 0){
            return 3;
        }else{
            DB::beginTransaction();
            try {
                $user_id = \Session::get('userdata')['user_id'];

                if($request->terms_of_payment!= null){
                    $terms_of_payment = implode(",", $request->terms_of_payment) ?? null;
                }else{
                    $terms_of_payment = '';
                }

                if($request->terms_of_delivery){
                    $terms_of_delivery = implode(",", $request->terms_of_delivery) ?? null;
                }else{
                    $terms_of_delivery = '';
                }

                $proformaInvoice = new ProformaInvoice();
                $proformaInvoice->invoice_no = $request->invoice_no;
                $proformaInvoice->quotation_id = $request->quotation;
                $proformaInvoice->type = $request->type;
                $proformaInvoice->date = date('Y-m-d',strtotime($request->date)) ?? '1994-01-01';
                $proformaInvoice->sales_person_id = $request->sale_person;
                $proformaInvoice->consigner_id = $request->consigner;
                $proformaInvoice->consignee_id = $request->consignee;
                $proformaInvoice->delivery_address_id = $request->delivery_address;
                $proformaInvoice->company_bank_id = $request->company_bank;
                // $proformaInvoice->quotation_reference = $request->quotation_reference;
                // $proformaInvoice->quotation_date = $request->quotation_date;
                $proformaInvoice->po_no = $request->po_number;
                $proformaInvoice->po_date = date('Y-m-d',strtotime($request->po_date)) ?? '1994-01-01';
                $proformaInvoice->mode_of_dispatch = $request->mode_of_dispatch;
                $proformaInvoice->product_count = count($request->product_category);
                $proformaInvoice->total = $request->total;
                $proformaInvoice->currency_id = $request->currency;
                $proformaInvoice->total_amount = $request->total_amount;
                $proformaInvoice->rounded_total_amount = $request->rounded_total_amount;
                $proformaInvoice->term_payments = $terms_of_payment;
                $proformaInvoice->term_delivey = $terms_of_delivery;
                $proformaInvoice->created_by = $user_id;
                $proformaInvoice->save();
                $id = $proformaInvoice->id;
                if ($request->type == '1') {
                    $proformaOversis = new ProformaOversis();
                    $proformaOversis->proforma_invoices_id = $id;
                    $proformaOversis->notify_party = $request->notify_party;
                    $proformaOversis->country_origin = $request->country_of_origin;
                    $proformaOversis->country_destination = $request->country_of_destination;
                    $proformaOversis->precarriage = $request->precarriage_by;
                    $proformaOversis->place_of_receipt = $request->place_of_receipt;
                    $proformaOversis->vessel = $request->vessel;
                    $proformaOversis->port_loading = $request->port_of_loading;
                    $proformaOversis->port_discharge = $request->port_of_discharge;
                    $proformaOversis->final_destination = $request->final_destination;
                    $proformaOversis->air_freight = $request->air_freight;
                    $proformaOversis->sea_freight = $request->sea_freight;
                    $proformaOversis->admin_cost = $request->admin_cost;
                    $proformaOversis->bank_charges = $request->bank_charges;
                    $proformaOversis->correspondent_bank = $request->correspondent_bank;
                    $proformaOversis->account_no = $request->account_no;
                    $proformaOversis->location = $request->location;
                    $proformaOversis->swift = $request->bic_code;
                    $proformaOversis->created_by = $user_id;
                    $proformaOversis->save();
                } elseif ($request->type == '2') {
                    $proformaLocal = new ProformaLocal();
                    $proformaLocal->proforma_invoices_id = $id;
                    $proformaLocal->buyer = $request->buyer;
                    $proformaLocal->is_paid = $request->to_paid;
                    $proformaLocal->paid_text = $request->paid;
                    $proformaLocal->tax_id = $request->tax_name;
                    $proformaLocal->tax_amount = $request->tax_amount;
                    $proformaLocal->created_by = $user_id;
                    $proformaLocal->save();
                }
                $product_category = $request->product_category ?? 0;
                $items = $request->item ?? 0;
                $size = $request->size ?? 0;
                $desc = $request->desc ?? 0;
                $hsc_code = $request->hsn_code ?? 0;
                $qty = $request->qty ?? 0;
                $rate = $request->rate ?? 0;
                $unit = $request->unit ?? 0;
                $amount = $request->amount ?? 0;
                foreach($request->product_category as $key => $item){
                    $product = new ProformaProducts();
                    $product->proforma_invoices_id = $id;
                    $product->category_id = $product_category[$key] ?? 0;
                    $product->product_id = $items[$key] ?? 0;
                    $product->size_id = $size[$key] ?? 0;
                    $product->description = $desc[$key] ?? 0;
                    $product->hsn_code = $hsc_code[$key] ?? 0;
                    $product->qty = $qty[$key] ?? 0;
                    $product->rate = $rate[$key] ?? 0;
                    $product->unit_id = $unit[$key] ?? 0;
                    $product->amount = $amount[$key] ?? 0;
                    $product->created_by = $user_id;
                    $product->save();
                }
            } catch(Exception $e){
                DB::rollback();
                Log::info("ProformaInvoiceController::Store");
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
            // If we reach here, then
            // data is valid and working.
            // Commit the queries!
            DB::commit();
            return 1;
        }
        return 0;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $view = \Helper::getPermission('pi-view') ? 1 : 0;
        if($view == 1){
            $proformaInvoice = ProformaInvoice::find($request->id);
            $proformaOversis = ProformaOversis::where('proforma_invoices_id',$request->id)->get();
            $proformaLocal = ProformaLocal::where('proforma_invoices_id',$request->id)->get();
            $products = ProformaProducts::where('proforma_invoices_id',$request->id)->get();
            $delivery_terms_id = explode(',',$proformaInvoice->term_delivey) ?? 0;
            $paymentTerms_id = explode(',',$proformaInvoice->term_payments) ?? 0;
            if (isset($delivery_terms_id) || isset($paymentTerms_id)) {
                $delivery_terms = \DB::table("terms_conditions")->whereIn('id',$delivery_terms_id)->select('id','term_value')->get();
                $paymentTerms = \DB::table("terms_conditions")->whereIn('id',$paymentTerms_id)->select('id','term_value')->get();
            } else {
                $delivery_terms = 0;
                $paymentTerms = 0;
            }
            $pdf = PDF::loadView('proforma-invoice.show',[
                'pi' => $proformaInvoice ?? ' ',
                'oversis' => $proformaOversis ?? ' ',
                'local' => $proformaLocal ?? ' ',
                'products' => $products ?? ' ',
                'delivery_terms' => $delivery_terms ?? ' ',
                'paymentTerms' => $paymentTerms ?? ' ',
            ]);
            return $pdf->stream();
            return view('proforma-invoice.show',[
                'pi' => $proformaInvoice ?? ' ',
                'oversis' => $proformaOversis ?? ' ',
                'local' => $proformaLocal ?? ' ',
                'products' => $products ?? ' ',
                'delivery_terms' => $delivery_terms ?? ' ',
                'paymentTerms' => $paymentTerms ?? ' ',
            ]);

        }else{
            return redirect('/dashbard');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $edit = \Helper::getPermission('pi-edit') ? 1 : 0;
        if($edit == 1){
            $proformaInvoice = ProformaInvoice::find($request->id);
            $delivery_terms = explode(',',$proformaInvoice->term_delivey);
            $paymentTerms = explode(',',$proformaInvoice->term_payments);
            $proformaOversis = ProformaOversis::where('proforma_invoices_id',$request->id)->get();
            $proformaLocal = ProformaLocal::where('proforma_invoices_id',$request->id)->get();
            $products = ProformaProducts::where('proforma_invoices_id',$request->id)->get();
            $sales = Helper::getAllSalesPerson();
            $companies = Helper::getCompanies();
            $customers = Helper::getCustomers();
            $countries = Helper::getCountry();
            $cities = Helper::getcity();
            $currency = Helper::getAllCurrency();
            $payment_terms = Helper::getPaymentTermsValue();
            $delivery = Helper::getDeliveryValue();
            $quotations = Helper::getQuotations();
            $product_category = Helper::getProductCategory();
            $size = Helper::getProductSize();
            $unit = Helper::getUnit();
            $tax = Helper::getTax();
            return view('proforma-invoice.addEdit',[
                'proformaInvoice' => $proformaInvoice,
                'proformaOversis' => $proformaOversis,
                'proformaLocal' => $proformaLocal,
                'delivery_terms' => $delivery_terms,
                'paymentTerms' => $paymentTerms,
                'products' => $products,
                'sales' => $sales,
                'companies' => $companies,
                'customers' => $customers,
                'countries' => $countries,
                'cities' => $cities,
                'currency' => $currency,
                'payment_terms' => $payment_terms,
                'delivery' => $delivery,
                'quotations' => $quotations,
                'product_category' => $product_category,
                'units' => $unit,
                'size' => $size,
                'tax' => $tax,
            ]);
        }else{
            return redirect('/dashboard');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        if(count($request->all()) < 0){
            return 3;
        }else{
            DB::beginTransaction();
            try {
                if($request->terms_of_payment!= null){
                    $terms_of_payment = implode(",", $request->terms_of_payment) ?? null;
                }else{
                    $terms_of_payment = '';
                }

                if($request->terms_of_delivery){
                    $terms_of_delivery = implode(",", $request->terms_of_delivery) ?? null;
                }else{
                    $terms_of_delivery = '';
                }

                $user_id = \Session::get('userdata')['user_id'];
                $proformaInvoice = ProformaInvoice::find($request->id);
                $proformaInvoice->invoice_no = $request->invoice_no;
                $proformaInvoice->quotation_id = $request->quotation;
                $proformaInvoice->type = $request->type;
                $proformaInvoice->date = date('Y-m-d',strtotime($request->date)) ?? '1994-01-01';
                $proformaInvoice->sales_person_id = $request->sale_person;
                $proformaInvoice->consigner_id = $request->consigner;
                $proformaInvoice->consignee_id = $request->consignee;
                $proformaInvoice->delivery_address_id = $request->delivery_address;
                $proformaInvoice->company_bank_id = $request->company_bank;
                // $proformaInvoice->quotation_reference = $request->quotation_reference;
                // $proformaInvoice->quotation_date = $request->quotation_date;
                $proformaInvoice->po_no = $request->po_number;
                $proformaInvoice->po_date = date('Y-m-d',strtotime($request->po_date)) ?? '1994-01-01';
                $proformaInvoice->mode_of_dispatch = $request->mode_of_dispatch;
                $proformaInvoice->product_count = count($request->product_category);
                $proformaInvoice->total = $request->total;
                $proformaInvoice->currency_id = $request->currency;
                $proformaInvoice->total_amount = $request->total_amount;
                $proformaInvoice->rounded_total_amount = $request->rounded_total_amount;
                $proformaInvoice->term_payments = $terms_of_payment;
                $proformaInvoice->term_delivey = $terms_of_delivery;
                $proformaInvoice->updated_by = $user_id;
                $proformaInvoice->save();
                $id = $proformaInvoice->id;
                if ($request->type == 1) {
                    $proformaOversis = ProformaOversis::where('proforma_invoices_id',$request->id)->update([
                        // $proformaOversis->proforma_invoices_id = $id;
                        'notify_party' => $request->notify_party,
                        'country_origin' => $request->country_of_origin,
                        'country_destination' => $request->country_of_destination,
                        'precarriage' => $request->precarriage_by,
                        'place_of_receipt' => $request->place_of_receipt,
                        'vessel' => $request->vessel,
                        'port_loading' => $request->port_of_loading,
                        'port_discharge' => $request->port_of_discharge,
                        'final_destination' => $request->final_destination,
                        'air_freight' => $request->air_freight,
                        'sea_freight' => $request->sea_freight,
                        'admin_cost' => $request->admin_cost,
                        'bank_charges' => $request->bank_charges,
                        'correspondent_bank' => $request->correspondent_bank,
                        'account_no' => $request->account_no,
                        'location' => $request->location,
                        'swift' => $request->bic_code,
                        'updated_by' => $user_id,
                    ]);
                    // $proformaOversis->save();
                } elseif ($request->type == 2) {
                    $proformaLocal = ProformaLocal::where('proforma_invoices_id',$request->id)->update([
                        'proforma_invoices_id' => $id,
                        'buyer' => $request->buyer,
                        'is_paid' => $request->to_paid,
                        'paid_text' => $request->paid,
                        'tax_id' => $request->tax_name,
                        'tax_amount' => $request->tax_amount,
                        'updated_by' => $user_id,
                    ]);
                }
                $product_category = $request->product_category ?? 0;
                $items = $request->item ?? 0;
                $size = $request->size ?? 0;
                $desc = $request->desc ?? 0;
                $hsc_code = $request->hsn_code ?? 0;
                $qty = $request->qty ?? 0;
                $rate = $request->rate ?? 0;
                $unit = $request->unit ?? 0;
                $amount = $request->amount ?? 0;

                //Delete
                ProformaProducts::where('proforma_invoices_id',$request->id)->update(['deleted_by' => $user_id]);
                ProformaProducts::where('proforma_invoices_id',$request->id)->delete();

                foreach($request->product_category as $key => $item){
                    $product = new ProformaProducts();
                    $product->proforma_invoices_id = $id;
                    $product->category_id = $product_category[$key] ?? 0;
                    $product->product_id = $items[$key] ?? 0;
                    $product->size_id = $size[$key] ?? 0;
                    $product->description = $desc[$key] ?? 0;
                    $product->hsn_code = $hsc_code[$key] ?? 0;
                    $product->qty = $qty[$key] ?? 0;
                    $product->rate = $rate[$key] ?? 0;
                    $product->unit_id = $unit[$key] ?? 0;
                    $product->amount = $amount[$key] ?? 0;
                    $product->created_by = $user_id;
                    $product->save();
                }
            } catch(Exception $e){
                DB::rollback();
                Log::info("ProformaInvoiceController::Store");
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
            DB::commit();
            return 1;
        }
        return 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $user_id = \Session::get('userdata')['user_id'];
        $pi = ProformaInvoice::where('id',$request->id)->update(['deleted_by' => $user_id]);
        $proformaInvoice = ProformaInvoice::find($request->id);
        if($proformaInvoice->type == 1){
            ProformaOversis::where('proforma_invoices_id',$request->id)->update(['deleted_by' => $user_id]);
            ProformaOversis::where('proforma_invoices_id',$request->id)->delete();
        }elseif ($proformaInvoice->type == 2) {
            ProformaLocal::where('proforma_invoices_id',$request->id)->update(['deleted_by' => $user_id]);
            ProformaLocal::where('proforma_invoices_id',$request->id)->delete();
        }
        ProformaProducts::where('proforma_invoices_id',$request->id)->update(['deleted_by' => $user_id]);
        ProformaProducts::where('proforma_invoices_id',$request->id)->delete();
        ProformaInvoice::find($request->id)->delete();

        return 1;
    }

    public function companyBankDetail(Request $request){
       $bankDetail = \DB::table("tbl_rtgs_neft")->where('company_id',$request->id)->get();
       return $bankDetail;
    }

    public function customerDelivery(Request $request){
        $customerDelivery = \DB::table("tbl_customer_delivery_location")->where('customer_id',$request->id)->select('id','delivery_location')->get();
        return $customerDelivery;
     }

    public function categoryWiseProduct(Request $request){
        $customerDelivery = \DB::table("tbl_product")->where('product_category',$request->id)->select('id','product_type')->get();
        return $customerDelivery;
    }

    public function categoryHSN(Request $request){
        $hsn = \DB::table("product_size_masters")->where('product_id',$request->id)->select('id','item_code')->get();
        return $hsn[0]->item_code;
     }

     public function getTaxName(Request $request){
        $tax = \DB::table("tbl_tax")->where('id',$request->id)->get();
        return $tax[0]->tax_value;
     }

     public function categoryProductSize(Request $request){
        $size = \DB::table("product_size_masters")->where('product_id',$request->product_id)->select('id','product_size')->get();
        return $size;

    }
}
