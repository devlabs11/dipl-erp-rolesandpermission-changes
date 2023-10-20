<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sale Work Order Costing</title>

    <link rel="stylesheet" href="{{ public_path('assets/css/bootstrap.min.css') }}" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
  </head>
  <style>
    body{
        font-family: 'Times New Roman',Georgia, Times, serif;
    }
    .font{
        font-size: 12px;
    }
    #table-cust td,th{
        border: 1px solid black;
    }
  </style>
  <body>
        <center><h3>Order Confirmation</h3></center>
        @php
            $tbl_salesworkorder = DB::select("select * from tbl_salesworkorder where id='".$sales_work_order."'");
            $id="0";
            $order_no="";
            $order_name="";
            $customer_name="";
            $job_card_no="";
            $po_quantity="";
            $po_quantity_unit="";
            $po_quantity_unit_name="";
            $job_card_no="";
            $job_card_title="";
            $customer_name_description="";

            //Company
            $unique_id = "";
            $customer_name = "";
            $customer_no = "";
            $company = "";
            $company_name = "";
            $company_address = "";
            $vender_code = "";
            $customer_address = "";
            $city = "";
            $post_box_no = "";
            $state_code = "";
            $country_code = "";
            $sales_person = "";
            $office_assistant = "";
            $co_ordinator = "";
            $attention = "";
            $company_phone  = "";
            $company_fax  = "";
            $company_grio  = "";
            $company_gst  = "";
            $company_pan  = "";
            $company_account  = "";
            $company_arn = "";

            $sales_order_date = "";
            $target_delivery_date = "";
            $po_date = "";
            $po_no = "";
            $sale_person = "";
            $tax_structure = "";
            $width = "";
            $width_unit = "";
            $height_length = "";
            $height_length_unit = "";
            $transporter_option = "";
            $transporter_location = "";
            $cust_gst = "";
            $cust_arn = "";
            $cust_pan = "";
            $contact_name = "";
            $contact_phone = "";
            $unit_price_unit = "";
            $discount = $discount_value = "";
            if(is_array($tbl_salesworkorder)){
                foreach($tbl_salesworkorder as $tbl_salesworkorder){
                    $id=$tbl_salesworkorder->id;
                    // dd($tbl_salesworkorder);
                    $order_no=$tbl_salesworkorder->order_no;
                    $order_name=$tbl_salesworkorder->order_name;
                    $customer_name=$tbl_salesworkorder->customer_name;
                    $sales_order_date = $tbl_salesworkorder->sales_order_date;
                    $target_delivery_date = $tbl_salesworkorder->target_delivery_date;
                    $po_date = $tbl_salesworkorder->po_date;
                    $po_no = $tbl_salesworkorder->po_no;
                    $job_instructions = $tbl_salesworkorder->job_instruction;
                    $tax_structure = $tbl_salesworkorder->tax_structure;
                    $width = $tbl_salesworkorder->width;
                    $width_unit = $tbl_salesworkorder->width_unit;
                    $height_length = $tbl_salesworkorder->height_length;
                    $height_length_unit = $tbl_salesworkorder->height_length_unit;
                    $transporter_option = $tbl_salesworkorder->transporter_option;
                    $transporter_location = $tbl_salesworkorder->transporter_location;
                    $transport_mode = $tbl_salesworkorder->transporter_mode;
                    $unit_price_unit=$tbl_salesworkorder->unit_price_unit;
                    if($unit_price_unit == 2 || $unit_price_unit == 2){ //EUR
                        $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&euro;</span>';
                        $word = 'Euro';
                    }elseif($unit_price_unit == 5){ //USD
                        $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#36;</span>';
                        $word = 'Dollars';
                    }elseif($unit_price_unit == 103){ //INR
                        $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
                        $word = 'Rupees';
                    }else{
                        $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
                        $word = 'Dollars';
                    }
                    // dd($transport_mode);
                    $transport_mode_detail = DB::table('tbl_transport_mode')->where('id',$transport_mode)->first();
                    $transport_mode_name = $transport_mode_detail->description;
                    $discount_value = $tbl_salesworkorder->discount;
                    $delivery_location = $tbl_salesworkorder->delivery_location;
                    $delivery = DB::table('tbl_customer_delivery_location')->where('id',$delivery_location)->first();



                    $gst_details = DB::table('tax_structure_masters')->leftjoin('tbl_tax','tbl_tax.id','=','tax_structure_masters.tax_id')->whereIn('tax_structure_masters.id',explode(',',$tax_structure))->get();
                    // dd($gst_details);
                    // if($tax_structure != null || $tax_structure !=0){
                    //     $tax = $tax_structure/2;
                    // }else{
                    //     $tax = 0;
                    // }
                    $tbl_transport = DB::table('tbl_transport')->where('id',$transporter_option)->get();
					$transporter_option = $tbl_transport[0]->transport_name ?? '-';
                    $tbl_transport_location = DB::table("tbl_transport_location")->where('id',$transporter_location)->get();
                    $transporter_location = $tbl_transport_location[0]->location_name ?? '-';
                    $tbl_customer_general = DB::select("select * from tbl_customer_general where id='$customer_name'");

                    $customer_name_description="";
                    $payment_terms = "";
                    foreach($tbl_customer_general as $tbl_customer_general){
                        $customer_details = DB::table('tbl_customer_tax_information')->where('customer_id',$tbl_customer_general->id)->get();
                        $cust_gst = $customer_details[0]->gst_no ?? '-';
                        $cust_arn = $customer_details[0]->arn_no ?? '-';
                        $cust_pan = $customer_details[0]->pan_no ?? '-';

                        $contact_person_details = DB::table('tbl_customer_communication')->where('customer_id',$tbl_customer_general->id)->get();
                        $contact_name = $contact_person_details[0]->communication_name ?? '-';
                        $contact_phone = $contact_person_details[0]->communication_phone_no ?? '-';

                        $contact_payment_term_details = DB::table('tbl_customer_payment')->where('customer_id',$tbl_customer_general->id)->get();
                        $payment_terms = $contact_payment_term_details[0]->payment_term_code ?? '-';

                        $customer_name_description=$tbl_customer_general->customer_name;
                        $unique_id = $tbl_customer_general->unique_id;
                        $customer_name = $tbl_customer_general->customer_name;
                        $customer_no = $tbl_customer_general->customer_no;
                        $company = $tbl_customer_general->company;
                        $sale_person_id = $tbl_customer_general->sales_person;
                        $sale_person_detail = DB::table('tbl_user')->where('id',$sale_person_id)->get();
                        $sale_person = $sale_person_detail[0]->fullname ?? '-';
                        $company_detail = DB::table('tbl_company')->where('id',$company)->get();

                        $company_name = $company_detail[0]->name ?? '-';
                        $company_address = $company_detail[0]->registered_address ?? '-';
                        $company_phone = $company_detail[0]->phone_number ?? '-';
                        $company_fax = $company_detail[0]->fax_no ?? '-';
                        $company_grio = $company_detail[0]->grio_no ?? '-';
                        $company_gst = $company_detail[0]->gst_no ?? '-';
                        $company_pan = $company_detail[0]->pan_no ?? '-';
                        $company_account = $company_detail[0]->account_no ?? '-';
                        $company_arn = $company_detail[0]->arn_no ?? '-';


                        $vender_code = $tbl_customer_general->vender_code;
                        $customer_address = $tbl_customer_general->customer_address;
                        $city = $tbl_customer_general->city;
                        $post_box_no = $tbl_customer_general->post_box_no;
                        $state_code = $tbl_customer_general->state_code;
                        $country_code = $tbl_customer_general->country_code;
                        $sales_person = $tbl_customer_general->sales_person;
                        $office_assistant = $tbl_customer_general->office_assistant;
                        $co_ordinator = $tbl_customer_general->co_ordinator;
                        $attention = $tbl_customer_general->attention;
                    }

                    $job_card_id=$tbl_salesworkorder->job_card_no;
                    $po_quantity=$tbl_salesworkorder->quantity;
                    $po_quantity_unit=$tbl_salesworkorder->quantity_unit;
                    $po_quantity_unit_name="";
                    $unit_price = "";
                    $unit_price = $tbl_salesworkorder->unit_price;
                    $mst_unit = DB::select("select * from mst_unit where id='$po_quantity_unit'");
                    $assessable_value = $po_quantity * $unit_price;
                    foreach($mst_unit as $mst_unit){
                        $po_quantity_unit_name=$mst_unit->description;
                    }

                    $tbl_job_cart = DB::table('tbl_job_cart')->where('id',$job_card_id)->get();
                    // select("select * from tbl_job_cart where id=$job_card_id");
                    $job_card_no="";
                    $job_card_title="";
                    $ply = "";
                    foreach($tbl_job_cart as $tbl_job_cart)
                    {
                        $job_card_no=$tbl_job_cart->job_card_no;
                        $job_card_title=$tbl_job_cart->job_card_title;
                        $ply = $tbl_job_cart->part_ply;
                    }
                }
            }
        @endphp
        <table style="width:100%">
          <tbody>
            <tr>
              <td style="text-align:left;"><b>{{$company_name}}</b></td>
              <td style="text-align:left;"><b>Sale Order No.: </b>{{$order_no}}</td>
            </tr>
            <tr>
                  <td style="width:50%;text-align:left;" rowspan="2">{{$company_address}}</td>
                  <td style="text-align:left;"><b>SO Date: </b>{{ date("d-m-Y", strtotime($sales_order_date))}}</td>
            </tr>
            <tr>
              {{-- <td style="text-align:left;"><b>GST No.: {{$company_gst}}</td> --}}
              <td style="text-align:left;"><b>Sales Person: </b> {{$sale_person}}</td>
            </tr>
            <tr>
              <td style="text-align:left;"><b>GST No.:</b> {{$company_gst}}</td>
              <td style="text-align:left;"><b>Delivery Date: </b>{{date("d-m-Y", strtotime($target_delivery_date))}}</td>
            </tr>
            <tr>
              <td style="text-align:left;"><b> ARN No.: </b>{{$company_arn}}</td>
              <td style="text-align:left;"><b>Phone No.: </b>{{$company_phone}}</td>
            </tr>
            <tr>

              <td style="text-align:left;"><b>PAN No.:</b> {{$company_pan}}</td>
              <td style="text-align:left;"><b>Fax No.: </b>{{$company_fax}}</td>
            </tr>
            <tr>
              <td style="text-align:left;"><b>Vendor Code: </b>{{$vender_code}}</td>
              <td style="text-align:left;"><b>Grio No.: </b>{{$company_grio}} </td>
            </tr>
            <tr>
              <td style="text-align:left;"><b>P.O.No.: </b>{{$po_no}}</td>
              <td style="text-align:left;"><b>Bank Account No.:</b> {{$company_account}}</td>
            </tr>
            <tr>
              <td style="text-align:left;"><b></b></td>
              <td style="text-align:left;"><b>P.O Date: </b>{{date("d-m-Y", strtotime($po_date))}} </td>
            </tr>
          </tbody>
        </table>
        <div style="border: 0.5px solid;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px;">
                <table class="" style="width:100%">
                    <tr>
                        <td style="text-align:left;"><b>Customer Details</b></td>
                        <td style="text-align:left;">Contact Person: {{$contact_name}} ({{$contact_phone}})</td>
                    </tr>
                    <tr>
                        <td style="text-align:left;">{{$customer_name}}{{$customer_no}}</td>
                        <td style="text-align:left;"></td>
                    </tr>
                    <tr>
                        <td style="text-align:left;">{{$customer_address}}</td>
                        <td style="text-align:left;"></td>
                    </tr>
                </table>
                <style>


                </style>
                <table id="table-cust" style="width:100%;">
                    <thead>
                        <tr>
                        <th scope="col">Job Card No</th>
                        <th scope="col">Description</th>
                        <th scope="col">Size</th>
                        <th scope="col">Ply</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">UOM</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Disc</th>
                        <th scope="col">Assessable Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">{{$job_card_no}}</td>
                            <td scope="col">{{$job_card_title}}</td>
                            <td scope="col">
                                @php
                                    $width_unit_name = DB::table('mst_unit')->where('id',$width_unit)->pluck('description');
                                    $height_unit_name = DB::table('mst_unit')->where('id',$height_length_unit)->pluck('description');
                                @endphp
                                {{$width}}  {{ $width_unit_name[0] ?? '' }}
                                x {{$height_length}} {{ $height_unit_name[0] ?? '' }}
                            </td>
                            <td scope="col">{{$ply ?? '-'}}</td>
                            <td scope="col">{{ $po_quantity ?? '-'}}</td>
                            <td scope="col">{{ $po_quantity_unit_name ?? '-'}}</td>
                            <td scope="col">{{$unit_price ?? '-'}}</td>
                            <td scope="col">
                                @php
                                    if($discount_value){
                                        $discount = $assessable_value*($discount_value/100);
                                    }else{
                                        $discount = 0;
                                    }
                                    $inr = $assessable_value -$discount;
                                @endphp
                                {{ $discount_value }} % <br>
                                {{ $discount }}
                            </td>
                            <td scope="col">{{$assessable_value ?? 'NA'}}</td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <table style="width:100%">
            <tr>
                <td scope="col" style="width:50%"><b>Customer</b></td>
                <td scope="col"><b>Total {{  $word ?? '' }}:</b></td>
                <td scope="col"><b> {{$inr ?? 'NA'}}</b></td>
            </tr>
            <tr>
                <td scope="col">GST No.: {{$cust_gst}}</td>
                <td scope="col"></td>
                <td scope="col"></td>
            </tr>
            <tr>
                <td scope="col">ARN No.: {{$cust_arn}}</td>
                <td scope="col"></td>
                <td scope="col"></td>
            </tr>
            <tr>
                <td scope="col">PAN No.: {{$cust_pan}}</td>
                <td scope="col"></td>
                <td scope="col"></td>
            </tr>
            @php
                $tax_sum = 0;
                $tax_amount = 0;
            @endphp
            @foreach ($gst_details as $item)
                @php
                    $tax_sum += ($inr) * ($item->tax_value/100);
                    // $tax_amount += ($assessable_value) * ($item->tax_value/100)
                @endphp
                <tr>
                    <td scope="col" style="width:50%"><b></b></td>
                    <td scope="col">{{ $item->name ?? '' }}</td>
                    <td scope="col">{{ $tax_sum ?? ''}}</td>
                </tr>
            @endforeach
            @php
                $show_total = ($inr)+ $tax_sum;
            @endphp

            <tr>
                <td scope="col" style="width:50%"><b></b></td>
                <td scope="col"><b>Total  {{  $word ?? '' }} Incl. Taxes</b></td>
                <td scope="col"><b>{{$show_total ?? 0}}</b></td>
            </tr>
        </table>

        <div><b>SO Instruction: </b>{{$job_instructions ?? 'NA'}}</div>
        <div><b>Payment Terms: </b>{{$payment_terms ?? 'NA'}} Days</div>   {{-- not found --}}
        <div style="border: 0.5px solid;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px;">
            <div style="border: 0.5px solid;margin-bottom:0.7px;margin-top:0.7px;margin-right:0.7px;margin-left:0.7px;"><b>Ship-to Address<b></div>
            <div style="border: 0.5px solid;margin-bottom:0.9px;margin-top:0.9px;margin-right:0.7px;margin-left:0.7px;">{{$delivery->delivery_location ?? '-' }}</div>
        </div>
        <div><b>Transport Mode: </b> {{ $transport_mode_name ?? '-' }}</div>
        <div>Transporter Name: {{$transporter_option ?? '-'}} </div>
        <div>Transporter Location: {{$transporter_location ?? '-'}} </div>
  </body>
</html>
