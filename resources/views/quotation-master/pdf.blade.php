@php
    $displayGst = '';
    function formatNumber($number) {
        return preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $number);
    }
@endphp
<html>
    <head>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
    </head>
    <body>
        @php
            $sum =0;
            $currency = $preview->currency_id;
            if($currency == 2 || $currency == 2){ //EUR
                $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&euro;</span>';
                $word = 'Euro';
            }elseif($currency == 5){ //USD
                $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#36;</span>';
                $word = 'Dollars';
            }elseif($currency == 103){ //INR
                $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
                $word = 'Rupees';
            }else{
                $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
                $word = 'Dollars';
            }

            if($company->stamp_image){
                $stamp_image = public_path()."/assets/uploadimage/company/".$company->stamp_image;
            }else{
                $stamp_image = 0;
            }
            $sales_person_Details = \DB::table('tbl_user')->where('id',$preview->sales_person_id)->get();
            $sales_person_name = $sales_person_Details[0]->fullname;
            if ($sales_person_Details[0]->sign) {
                $sales_sign =  public_path()."/user_sign/".$sales_person_Details[0]->sign;
            } else {
                $sales_sign = 0;
            }
            if($quotationMaster->company_id == 47){
                $company_name = "Devharsh InfoTech (P) Ltd";
            }else if($quotationMaster->company_id == 49){
                $company_name = "Security Software and Solutions LLP";
            }else{
                $company_name = "Other";
            }
        @endphp
        @if($action == "preview" || $action == "with")
            @if($company->header_image)
                @php $headerImage = public_path()."/assets/uploadimage/company/".$company->header_image; @endphp
            @else
                @php $headerImage = public_path()."/assets/uploadimage/company/default_header.png"; @endphp
            @endif

            <header>
                @if($quotationMaster->company_id == 49)
                    <img src="{{$headerImage}}" width="380px" height="90px" style="float: right;"/>
                @else
                    <center>
                        <img src="{{$headerImage}}" width="491px" height="90px"/>
                    </center>
                @endif

            </header>

            @if($company->footer_image)
                @php $footerImage = public_path()."/assets/uploadimage/company/".$company->footer_image; @endphp
            @else
                @php $footerImage = public_path()."/assets/uploadimage/company/default_footer.png"; @endphp
            @endif

            <footer>
                <center>
                    <img src="{{$footerImage}}" width="703px" height="76px"/>
                </center>
            </footer>

        @endif

        <!-- Wrap the content of your PDF inside a main tag -->
        <main class="font-family">
            @if($action == "preview") <p style="position: absolute;top:88px;left:40px;color: #808080">DRAFT {{date('d-m-Y h:i:s')}}</p>@endif
        	<h5 class="text-center" style="font-size: 18px"><b>Quotation</b></h5>
    		<p style="float: left;">Ref. No : {{$preview->unique_id}}</p>
    		<p style="float: right;">Date : {{date('d-m-Y', strtotime($preview->date))}}</p>
    		<div style="clear:both;"></div>

    		<p>To,<br>
                @php
                    $customer = \DB::table("tbl_customer_general")->where('id',$preview->customer_id)->get();
                    if(!$customer){
                        $city = \DB::table("tbl_city")->where('id',$customer[0]->city)->get();
                        $state = \DB::table("tbl_state")->where('id',$customer[0]->state_code)->get();
                    }else{
                        $city = 0;
                        $state = 0;
                    }

                @endphp
                @if ($preview->customer_id)
                    {{$customer[0]->customer_name ?? ''}},<br>
                    {!! nl2br(e($customer[0]->customer_address), false) ?? '' !!}<br>
                @else
                    {{ $preview->getProspect->company ?? ''}}
                @endif
            </p>
    		<p><b><u>Kind attn : {{$preview->attention_of}}</b><u></p>
			<p>Reference : {{$preview->reference}}</p>
			<p class="text-center" style="font-size: 16px"><b>Subject : {{$preview->subject}} </b></p>
			<p>Dear Sir/Madam,</p>
			<p>We would like to thank you for your enquiry!!<br>With the reference to the above subject, please find below quotation,</p>

            @foreach ($quotationProducts as $key => $quotationProduct)
                <p>Product Name: <span><b>{{$quotationProduct->getProductName->product_type ?? 'N/A'}}</b></span></p>
                @if ( $quotationMaster->quotation_category != 2)
                    @php
                        $gst = $quotationProduct->getProductName->gst ?? '0';
                        if($gst!=0){
                            $displayGst = '<span><br>+ GST: </span>'.$gst.'%';
                        }
                    @endphp
                @else
                    @php
                        $gst = $quotationProduct->getProductName->gst ?? '0';
                        if($gst==0){
                            $displayGst = '0';
                        }
                    @endphp
                @endif
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Item Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($productItems as $keyi => $productItem)
                                @if($productItem->quotation_product_id == $quotationProduct->id)
                                    @if (count($multipleQty) > 0)
                                        @php
                                            $rowCount = \DB::table('quotation_product_item_multipe_qty_rates')->where('quotation_product_item_id',$productItem->id)->count();
                                        @endphp
                                        <tr>
                                            <td style="text-align: center;" rowspan="{{ $rowCount+1 }}">{{ $no++ }}</td>
                                            <td rowspan="{{ $rowCount+1 }}">
                                                {!! $productItem->description !!}
                                            </td>
                                            <td  style="text-align: right;">{{formatNumber($productItem->qty)}} {{ $productItem->unit }}</td>
                                            <td style="text-align: right;"> {!! $symbol !!}
                                                {{$productItem->ppu}} per {{ $productItem->unit }}</td>
                                            <td style="text-align: right;">
                                                {!! $symbol !!} {{formatNumber($productItem->total)}} {!! $displayGst !!}
                                                @php
                                                    $sum = $sum + $productItem->total;
                                                @endphp
                                            </td>
                                        </tr>
                                        @foreach ($multipleQty as $item)
                                            @if ($item->quotation_product_item_id == $productItem->id)
                                            <tr>
                                                <td style="text-align: right;">{{formatNumber($item->qty)}} {{ $productItem->unit }}</td>
                                                <td style="text-align: right;"> {!! $symbol !!}
                                                    {{$item->ppu}} per {{ $productItem->unit }}</td>
                                                <td style="text-align: right;">
                                                    {!! $symbol !!} {{formatNumber($item->total)}} {!! $displayGst !!}
                                                    @php
                                                        $sum = $sum + $item->total;
                                                    @endphp
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td style="text-align: center;">{{ $no++ }}</td>
                                            <td>
                                                {!! $productItem->description !!}
                                            </td>
                                            <td  style="text-align: right;">{{formatNumber($productItem->qty)}} {{ $productItem->unit }}</td>
                                            <td style="text-align: right;"> {!! $symbol !!}
                                                {{$productItem->ppu}} per {{ $productItem->unit }}</td>
                                            <td style="text-align: right;">
                                                {!! $symbol !!} {{formatNumber($productItem->total)}} {!! $displayGst !!}
                                                @php
                                                    $sum = $sum + $productItem->total;
                                                @endphp
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                    </tbody>
                </table>
            @endforeach
            <br>
            @if ($quotationMaster->features_is == 1 && $quotationMaster->company_id == 49)
                <span class=""><b>Advance Pre Printing Security Features</b></span>
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr class="fw-semibold fs-4 text-gray-800">
                            <th scope="col">Sr.No</th>
                            <th scope="col">Advanced Printing Security Features</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($advanceFeature as $item)
                            <tr>
                                <td style="text-align: center;">{{ $loop->iteration }}</td>
                                <td> {{ $item->getFeatureName->name ?? '' }}</td>
                                <td style="text-align: right;">
                                    @php
                                        $curSymbol = \Helper::currencySymbol($item->getFeatureName->currency_id);
                                    @endphp
                                    {!! $curSymbol ?? $symbol !!}{{ formatNumber($item->price) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <div>
                <span class=""><b>Terms & Conditions:</b></span>
                @php

                    $title_id = explode(',',$quotationMaster->term_title);
                    $value_id = explode(',',$quotationMaster->term_value);
                    $titles = \DB::table('terms_titles')->whereIn('id',$title_id)->get();
                    $values = \DB::table('terms_conditions')->whereIn('id',$value_id)->get();

                    // $titleValuePairs = [];
                    // foreach ($titles as $title) {
                    //     foreach ($values as $value) {
                    //         if ($value->title_value_id == $title->id) {
                    //             $titleValuePairs[$title->id][] = $value->term_value;
                    //         }
                    //     }
                    // }
                @endphp
                <p>
                    <ol>
                        @foreach ($title_id as $id)
                            @php
                                $title =  \DB::table('terms_titles')->where('id', $id)->first();
                                $value = \DB::table('terms_conditions')->where('title_value_id', $id)->whereIn('id',$value_id)->first();
                            @endphp

                            @if ($title && $value)
                                <li><b>{{ $title->name }}:</b> {{ $value->term_value }}</li>
                            @endif
                        @endforeach
                    </ol>
                </p>

            </div>

			<p style="font-size: 14px"><b>For {{ $company_name??'' }} </b></p>
            <div style="position:absolute;">
                @if ($stamp_image)
                    <img class="img2" src="{{$stamp_image}}" width="100px" height="50px">
                @endif
                @if ($sales_sign)
                    <img class="img2" src="{{$sales_sign}}" width="100px" height="50px">
                @endif
            </div>
            <br><br><br><br>
			<p style="font-size: 14px"><b>{{$sales_person_name}} </b></p>
        </main>
    </body>
</html>
