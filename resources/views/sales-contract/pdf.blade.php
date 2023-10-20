<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales Contract</title>
    <link rel="stylesheet" href="{{ public_path('assets/css/bootstrap.min.css') }}" />
</head>
  {{-- <style>
    body{
        font-family: 'Times New Roman',Georgia, Times, serif;
        font-size: 12px;
    }
    .font{
        font-size: 12px;
    }
    .table-cust td,th{
        border: 1px solid black;
    }
    .bolded { font-weight: bold; }
  </style> --}}
  <style>
    @page {
        margin: 35px 0px;
    }

    body {
        margin-top: 3cm;
        margin-left: 1cm;
        margin-right: 1cm;
        margin-bottom: 2cm;
        color: #000;
        font-family: 'Times New Roman', Times, serif;
        /* font-size: 1em; */
        /* text-transform: capitalize; */
    }

    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 3cm;
    }

    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
    }

    .font-family{
        font-family: 'Times New Roman';
        font-size: 12px;
        line-height: 100%;
    }

    .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
        border: 1px solid #000;
    }

    .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th {
        padding: 1px 1px 1px 1px;
    }

    .img1 {
        z-index: 1;
        top:-50px;
        position: absolute;
    }

    .img2 {
        position: absolute;
        z-index: 2;
    }

</style>
  <body>
    @if($salesContract->getCompany->header_image)
        @php $headerImage = public_path()."/assets/uploadimage/company/".$salesContract->getCompany->header_image; @endphp
    @else
        @php $headerImage = public_path()."/assets/uploadimage/company/default_header.png"; @endphp
    @endif

    <header>
        <center>
            <img src="{{$headerImage}}" width="491px" height="90px"/>
        </center>
    </header>

    @if($salesContract->getCompany->footer_image)
        @php $footerImage = public_path()."/assets/uploadimage/company/".$salesContract->getCompany->footer_image; @endphp
    @else
        @php $footerImage = public_path()."/assets/uploadimage/company/default_footer.png"; @endphp
    @endif

    <footer>
        <center>
            <img src="{{$footerImage}}" width="703px" height="76px"/>
        </center>
    </footer>
        <center><h6><u style="color: #000;">Sales Contract</u></h6></center>
        @php
        $currency = $salesContract->currency_id;
       if($currency == 2 || $currency == 2){ //EUR
           $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&euro;</span>';
           $word = 'Euro';
       }elseif($currency == 5){ //USD
           $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#36;</span>';
           $word = 'Dollars';
       }elseif($currency == 103){ //INR
           $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
           // $word = 'Rupees';
           $word = 'INR';
       }else{
           $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
           $word = 'Dollars';
       }
       if($salesContract->getCompany->stamp_image){
            $stamp_image = public_path()."/assets/uploadimage/company/".$salesContract->getCompany->stamp_image;
        }else{
            $stamp_image = 0;
        }
        if($salesContract->getSalesPerson->sign){
            $sales_sign =  public_path()."/user_sign/".$salesContract->getSalesPerson->sign;
        }else{
            $sales_sign =  0;
        }

   @endphp
        <main class="font-family">
            <table  style="width: 100%">
                <tr>
                    <td style="width: 70%"></td>
                    <td style="text-align: left;">
                        Contract No : {{ $salesContract->uq_no ?? '' }}<br>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%"></td>
                    <td style="text-align: left;">
                        Date : {{ date('d.m.Y',strtotime($salesContract->date)) ?? '' }}
                    </td>
                </tr>
            </table>
            @php
                $customer = \DB::table("tbl_customer_delivery_location")->where('id',$salesContract->delivery_address_id)->get();
            @endphp

            <p>
                <span>To,</span><br><br>
                {{ $salesContract->getCustomer->customer_name ?? '' }}<br>
                @if (count($customer) > 0)
                    {!! nl2br(e($customer[0]->delivery_location), false) ?? '' !!}<br>
                @endif
                {{-- Plot M 231, Meera Investment<br>
                Ntinda Industrial Area<br>
                Nakawa Division, P.O. 31672<br>
                Kampala,Uganda<br> --}}
            </p>

            <p>We are pleased to sale the goods as per the below details</p>
            <table class="table table-bordered border-dark" width="100%">
                <thead>
                    <tr>
                        <th width="1%">SR.NO.</th>
                        <th >ITEM </th>
                        <th width="10%">QTY</th>
                        <th width="20%">PRICE PER UNIT</th>
                        <th width="10%">TOTAL VALUE</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $items = json_decode($salesContract->product, true) ?? [];
                        $hsn = json_decode($salesContract->hsn, true) ?? [];
                        $description = json_decode($salesContract->description, true) ?? [];
                        $qty = json_decode($salesContract->quantity, true) ?? [];
                        $rate = json_decode($salesContract->rate, true) ?? [];
                        $unit = json_decode($salesContract->unit, true) ?? [];
                    @endphp
                    @foreach ($items as $key => $value )
                        <tr>
                            <td style='border-bottom:none;border-top:none;text-align: center;'>{{ $key }}</td>
                            <td style='border-bottom:none;border-top:none'>
                                @php
                                        $product_name = \DB::table("tbl_product")->where('id',$value)->select('id','product_type')->get();
                                        $unit_name = \DB::table("mst_unit")->where('id',$unit[$key])->select('id','description')->get();
                                        if (count($unit_name) > 0) {
                                            $unitName = $unit_name[0]->description;
                                        } else {
                                            $unitName = '';
                                        }

                                @endphp
                                @if (count($product_name) > 0)
                                    {{ $product_name[0]->product_type ?? '' }} - <br>
                                @endif
                                {{  $description[$key] ?? ''}}
                            </td style='border-bottom:none;border-top:none'>
                            <td style='border-bottom:none;border-top:none'>{{ $qty[$key] ?? '' }} {{ $unitName ?? '' }}</td>
                            <td style='border-bottom:none;border-top:none'>{!! $symbol ?? '' !!}{{ number_format((float)$rate[$key], 2, '.', '') ?? ''}} PER {{ $unitName ?? ''}}</td>
                            <td style="text-align: right;border-bottom:none;border-top:none">{!! $symbol ?? '' !!}
                                @php
                                    $mult = $qty[$key] * $rate[$key];
                                    $show_mult = number_format((float)$mult, 2, '.', '');
                                @endphp
                                {{ $show_mult ?? '0' }}
                            </td>
                        </tr>
                    @endforeach
                    @if (!empty($salesContract->sgs) && !empty($salesContract->bank_charges))
                        <tr>
                            <td style='border-bottom:none;border-top:none'></td>
                            <td style='border-bottom:none;border-top:none'><b>
                                ADD: SGS CHARGES<br>
                                BANK CHARGES</b>
                            </td>
                            <td style='border-bottom:none;border-top:none'></td>
                            <td style='border-bottom:none;border-top:none'></td>
                            <td style="text-align: right;border-bottom:none;border-top:none">
                                {!! $symbol ?? '' !!} {{ number_format((float)$salesContract->sgs, 2, '.', '')  ?? ''}}<br>
                                {!! $symbol ?? '' !!} {{ number_format((float)$salesContract->bank_charges, 2, '.', '')  ?? ''}}
                            </td>
                        </tr>
                    @endif

                    <tr>
                        <td style='border-top:none'></td>
                        <td style='border-top:none'></td>
                        <td style='border-top:none'></td>
                        <td style='border-top:none'></td>
                        <td style="text-align: right;border-top:none"><hr><b>{!! $symbol ?? '' !!} {{ $salesContract->grand_total ?? '0.00' }}</b></td>
                    </tr>
                </tbody>
            </table>
            {{-- <b>QUANTITY VARIATION TOLERANCE IS +/- 5%</b><br><br> --}}
            <b>Quantity variation tolerance is +/- 5%</b><br><br>

            <span style="background-color: gray">Terms and Conditions:</span>
            @php
                $port_of_discharge_selected = json_decode($salesContract->port_of_discharge, true) ?? [];
                $payment_terms_selected = json_decode($salesContract->payment_terms_id, true) ?? [];
                $delivery_terms_selected = json_decode($salesContract->delivery_terms_id, true) ?? [];
                $destination_selected = json_decode($salesContract->destination, true) ?? [];
                $jurisdiction_selected = json_decode($salesContract->jurisdiction_id, true) ?? [];
                $other_selected = json_decode($salesContract->other, true) ?? [];

                $payment_terms = \DB::table('terms_conditions')->whereIn('id',$payment_terms_selected)->get();
                $delivery_terms =  \DB::table('terms_conditions')->whereIn('id',$delivery_terms_selected)->get();
                $port_of_discharge = \DB::table('terms_conditions')->whereIn('id',$port_of_discharge_selected)->get();
                $final_destination =  \DB::table('terms_conditions')->whereIn('id',$destination_selected)->get();
                $jurisdiction = \DB::table('terms_conditions')->whereIn('id',$jurisdiction_selected)->get();
                $other =  \DB::table('terms_conditions')->whereIn('id',$other_selected)->get();

                    // dd(
                    //     $payment_terms_selected,$payment_terms,
                    //     $delivery_terms_selected,$delivery_terms,
                    //     $port_of_discharge_selected,$port_of_discharge,
                    //     $destination_selected,$final_destination,
                    //     $jurisdiction_selected,$jurisdiction,
                    //     $other_selected,$other
                    // );
            @endphp
            <ol>
            @if (count($payment_terms) > 0)
                    <li>
                        Payment Terms:
                        @foreach ($payment_terms as $value2 )
                        {{ $value2->term_value }}<br>
                        @endforeach
                    </li>
                @endif
                @if (count($delivery_terms) > 0)
                    <li>
                        Delivery Terms:
                        @foreach ($delivery_terms as $value1 )
                        {{ $value1->term_value }}<br>
                        @endforeach
                    </li>
                @endif
                @if (count($port_of_discharge) > 0)
                    <li>
                        Port of Discharge:
                        @foreach ($port_of_discharge as $value3 )
                            {{ $value3->term_value }}<br>
                        @endforeach
                    </li>
                @endif
                @if (count($final_destination) > 0)
                    <li>
                        Final Destination:
                        @foreach ($final_destination as $value4 )
                        {{ $value4->term_value }} <br>
                        @endforeach
                    </li>
                @endif
                @if (count($jurisdiction) > 0)
                    <li>
                        Jurisdiction:
                        @foreach ($jurisdiction as $value5 )
                        {{ $value5->term_value }}<br>
                        @endforeach
                    </li>
                @endif
                @if (count($other) > 0)
                    <li>
                        @foreach ($other as $value6 )
                            {{ $value6->term_value }} <br>
                        @endforeach
                    </li>
                @endif
            </ol>
            <table class="table table-bordered border-dark">
                <tr>
                    {{-- {{ dd($salesContract->company_bank_id) }} --}}
                    <td>
                        <span style="background-color: gray">BENEFICIRY BANK DETAILS:</span><br>
                        <span>{{ $salesContract->getCompanyBankDetails->account_name ?? '' }}</span><br>
                        <span>{{ $salesContract->getCompanyBankDetails->bank_name ?? '' }}</span><br>
                        <span>ACCOUNT NUMBER: {{ $salesContract->getCompanyBankDetails->account_no ?? ''  }}</span><br>
                        <span>LOCATION: {{ $salesContract->getCompanyBankDetails->branch_name ?? ''  }}</span><br>
                        <span>SWIFT CODE: <span style="background-color: gray">{{ $salesContract->getCompanyBankDetails->ifsc_code ?? ''  }}</span></span><br>
                    </td>

                    <td>
                        <span style="background-color: gray">CORRESPONDENT BANK DETAILS:</span><br>
                        <span>{{ $salesContract->getCompany->correspondant_bank ?? '' }}</span><br>
                        <span>ACCOUNT NUMBER: {{ $salesContract->getCompany->correspondant_account_no ?? ''  }}</span><br>
                        <span>LOCATION: {{ $salesContract->getCompany->location ?? ''  }}</span><br>
                        <span  style="background-color: gray">SWIFT CODE{{ $salesContract->getCompany->swift_bic_code ?? ''  }}</span><br>
                    </td>
                </tr>
            </table>
            <p>kindly sign/stamp this Sale Contract and return copy to us.</p>

            <div style="float: left;">
                {{-- <span >FOR DEVHARSH INFOTECH (P) LTD</span><br> --}}
                {{-- <span >FOR {{  $salesContract->getCompany->name ?? 'OTHER' }} </span><br>
                {{-- <img src="{{ public_path('Sign.png') }}" alt="Sign.png" width="55px" height="50px"><br> --}}
                {{-- <div style="position:absolute;"> --}}
                    {{-- {{ DD }} --}}
                    {{-- @if ($stamp_image)
                        <img class="img2" src="{{$stamp_image}}" width="100px" height="50px">
                    @endif --}}
                    {{-- @if ($sales_sign)
                        <img class="img2" src="{{$sales_sign}}" width="100px" height="50px">
                    @endif --}}
                {{-- </div> --}}
                <p style="font-size: 14px"><b>For {{  $salesContract->getCompany->name ?? 'OTHER' }} </b></p>
                    <div style="position:absolute;">
                        @if ($stamp_image)
                            <img class="img2" src="{{$stamp_image}}" width="100px" height="50px">
                        @endif
                        @if ($sales_sign)
                            <img class="img2" src="{{$sales_sign}}" width="100px" height="50px">
                        @endif
                    </div>
                    <br><br><br><br>
                <br>
                (AUTHORISED SIGNATORY)

            </div>
            <div style="margin-left: 70%">
                <span >ORDER CONFIRMED</span><br>
                <span >For  {{ $salesContract->getCustomer->customer_name ?? '' }}</span><br> <br><br><br><br>
                <span>Name:</span><br>
                <span style="margin-right: 30%">Designation:</span> <span> Sign/Co's Seal </span><br>
            </div>
        </main>
  </body>
</html>
