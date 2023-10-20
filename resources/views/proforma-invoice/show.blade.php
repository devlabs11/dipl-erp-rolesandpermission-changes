<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proforma Invoice</title>
    <link rel="stylesheet" href="{{ public_path('assets/css/bootstrap.min.css') }}" />
</head>
  <style>
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
        <center><h6>PROFORMA INVOICE</h6></center>
        @php
             $currency = $pi->currency_id;
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
            $company = DB::table('tbl_company')->select('header_image', 'footer_image','stamp_image')
                        ->where('id', $pi->consigner_id)
                        ->first();

            if($company->stamp_image){
                $stamp_image = public_path()."/assets/uploadimage/company/".$company->stamp_image;
            }else{
                $stamp_image = 0;
            }

            $sales_person_Details = \DB::table('tbl_user')->where('id',$pi->sales_person_id)->first();
            $sales_person_name = $sales_person_Details->fullname;
            if ($sales_person_Details->sign) {
                $sales_sign =  public_path()."/user_sign/".$sales_person_Details->sign;
            } else {
                $sales_sign = 0;
            }

            if($pi->consigner_id == 47){
                $company_name = "Devharsh InfoTech (P) Ltd";
            }else if($pi->consigner_id == 49){
                $company_name = "Security Software and Solutions LLP";
            }else{
                $company_name = "Other";
            }

        @endphp
        <table style="width:100%" class="table-cust">
            <tbody>
                @if ($pi->type == 1)
                    <tr>
                        <td scope="col" rowspan="3"><span class="bolded"><u>CONSIGNER</u> :<br>
                            {{ $pi->getCompanyDetails->name  ?? ''}}</span><br>
                            {{ $pi->getCompanyDetails->registered_address ?? ''}}
                        </td>
                        <td scope="col">
                            PI NO.:  <span class="bolded">{{ $pi->invoice_no }}</span>
                        </td>
                        <td scope="col">
                            DATE : <span class="bolded">{{ date('d-m-Y',strtotime($pi->date)) }}</span>
                        </td>
                    </tr>
                    <tr>
                        @if (!empty($pi->quotation_id))
                            <td scope="col">QUOTATION REF. : <span class="bolded">{{ $pi->getQuotationDetails->reference  ?? ''}}</span><br>
                                QUOTATION DATE : <span class="bolded">{{ date('d-m-Y',strtotime($pi->getQuotationDetails->date ?? '')) }}</span>
                            </td>
                            <td>
                        @else
                            <td colspan="2">
                        @endif
                            I.E.C. NO :
                            <span class="bolded"> 0317513095</span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">CIN NO :
                            <span class="bolded">U30007MH2004PTC146993</span>
                        </td>
                        <td scope="col">
                            PO NUMBER :<span class="bolded"> @if (!empty($pi->po_no))
                                {{ $pi->po_no }}
                            @endif</span> <br>
                            PO DATE : <span class="bolded">@if (!empty($pi->po_no)) {{ date('d-m-Y',strtotime($pi->po_date)) }}@endif</span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <span class="bolded"><u>CONSIGNEE: </u><br>{{ $pi->getCustomerName->customer_name ?? '' }}<br></span>{{ $pi->getCustomerName->customer_address ?? '' }}
                        </td>
                        <td scope="col">
                            TERMS OF PAYMENT :<br>
                            <span class="bolded">
                                @isset($paymentTerms)
                                    <ol>
                                    @foreach ($paymentTerms as $paymentTerm)
                                        <li>{{ $paymentTerm->term_value }}</li>
                                    @endforeach
                                    </ol>
                                @endisset
                            </span>
                        </td>
                        <td scope="col">
                            DISPATCH MODE :
                            <span class="bolded">
                                @if ($pi->mode_of_dispatch == 1)
                                    Road
                                @elseif ($pi->mode_of_dispatch == 2)
                                    Air
                                @elseif ($pi->mode_of_dispatch == 3)
                                    Sea
                                @else
                                    N/A
                                @endif
                            </span>
                        </td>
                    </tr>
                    @if ($oversis != null && $oversis == ' ')
                        <tr>
                            <td scope="col">
                                <span class="bolded"><u>NOTIFY FOR BUYER : </u><br>{{ $oversis[0]->getBuyerDetails->customer_name ?? '' }}<br></span>{{ $oversis[0]->getBuyerDetails->customer_address ?? '' }}
                            </td>
                            <td scope="col">
                                COUNTRY OF ORIGIN : <br>
                                <span class="bolded">{{ $oversis[0]->getOrigin->description ?? '' }}</span>
                            </td>
                            <td scope="col">
                                COUNTRY OF FINAL DESTINATION : <br>
                                <span class="bolded">{{ $oversis[0]->getFinalCountryDestination->description ?? '' }}</span>
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td scope="col" @if ($oversis != null && $oversis == ' ' )   @elseif(count($delivery_terms) > 0) colspan="1" @else  colspan="3" @endif>
                            PRE-CARRIAGE BY :   <span class="bolded">@if ($pi->mode_of_dispatch == 1)
                                Road
                            @elseif ($pi->mode_of_dispatch == 2)
                                Air
                            @elseif ($pi->mode_of_dispatch == 3)
                                Sea
                            @else
                                N/A
                            @endif</span>
                        </td>
                        @if ($oversis != null && $oversis == ' ')
                            <td scope="col">
                                PLACE OF RECEIPT BY PRE CARRIER :  <span class="bolded">
                                    {{ $oversis[0]->getPlaceofReceipt->description ?? '' }}
                                </span>
                            </td>
                        @endif
                        @if (count($delivery_terms) > 0)
                            <td scope="col" @if ($oversis != null && $oversis == ' ')  colspan="1"  @else colspan="2"  @endif>TERMS OF DELIVERY : <br>
                                <span class="bolded">@isset($delivery_terms)
                                    <ol>
                                    @foreach ($delivery_terms as $delivery_term)
                                        <li>{{ $delivery_term->term_value }}</li>
                                    @endforeach
                                    </ol>
                                @endisset</span>
                            </td>
                        @endif

                    </tr>
                    @if ($oversis != null && $oversis == ' ')
                        <tr>
                            <td scope="col">
                                VESSEL/FLIGHT NO. :   <span class="bolded">{{ $oversis[0]->vessel ?? '' }}</span>
                            </td>
                            <td scope="col">
                                PORT OF LOADING : <span class="bolded">{{ $oversis[0]->getPortLoading->description ?? '' }}</span>
                            </td>

                        </tr>
                        <tr>
                            <td scope="col">
                                PORT OF DISCHARGE:  <span class="bolded">{{ $oversis[0]->getPortDischarge->description ?? '' }}</span>
                            </td>
                            <td scope="col">
                                FINAL DESTINATION : <span class="bolded">{{ $oversis[0]->getFinalDestination->description ?? '' }}</span>
                            </td>
                        </tr>
                    @endif
                @elseif ($pi->type == 2)
                    <tr>
                        <td scope="col"><span class="bolded"><u>CONSIGNER</u> :<br>
                            {{ $pi->getCompanyDetails->name ?? '' }}</span><br>
                            {{ $pi->getCompanyDetails->registered_address ?? ''}}
                        </td>
                        <td scope="col">
                            PI NO.:  <span class="bolded">{{ $pi->invoice_no }}</span>
                        </td>
                        <td scope="col">
                            DATE : <span class="bolded">{{ date('d-m-Y',strtotime($pi->date)) }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <span class="bolded"><u>CONSIGNEE: </u><br>{{ $pi->getCustomerName->customer_name ?? '' }}<br></span>{{ $pi->getCustomerName->customer_address ?? '' }} <br>
                            GST NUMBER :  <span class="bolded">{{ $pi->getCustomerName->getTaxInfo[0]->gst_no ?? '' }} </span>
                        </td>
                        @if (!empty($pi->quotation_id))
                            <td scope="col">QUOTATION NO. : <span class="bolded">{{ $pi->getQuotationDetails->unique_id ?? '' }}</span><br>
                                QUOTATION DATE : <span class="bolded">{{ date('d-m-Y',strtotime($pi->getQuotationDetails->date ?? '')) }}</span>
                            </td>
                            <td scope="col">
                        @else
                            <td colspan="2">
                        @endif
                            DISPATCH MODE :
                            <span class="bolded">
                                @if ($pi->mode_of_dispatch == 1)
                                    Road
                                @elseif ($pi->mode_of_dispatch == 2)
                                    Air
                                @elseif ($pi->mode_of_dispatch == 3)
                                    Sea
                                @else
                                    N/A
                                @endif
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            PO NUMBER :<span class="bolded"> @if (!empty($pi->po_no))
                                {{ $pi->po_no }}
                            @endif</span> <br>
                            PO DATE : <span class="bolded">@if (!empty($pi->po_no)) {{ date('d-m-Y',strtotime($pi->po_date)) }}@endif</span>
                        </td>
                        <td scope="col" >
                            TERMS OF PAYMENT :<br>
                            <span class="bolded">
                                @isset($paymentTerms)
                                    <ol>
                                    @foreach ($paymentTerms as $paymentTerm)
                                        <li>{{ $paymentTerm->term_value }}</li>
                                    @endforeach
                                    </ol>
                                @endisset
                            </span>
                        </td>
                        <td scope="col">TERMS OF DELIVERY : <br>
                            <span class="bolded">@isset($delivery_terms)
                                <ol>
                                @foreach ($delivery_terms as $delivery_term)
                                    <li>{{ $delivery_term->term_value }}</li>
                                @endforeach
                                </ol>
                            @endisset</span>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
        <table style="width:100%" class="table-cust">
            <tbody>
                <tr>
                    @if ($local != null && $local != ' ')
                        <td>
                            <span class="bolded"><u>BUYER (IF OTHER THAN CONSIGNEE) : </u><br>
                            {{ $local[0]->getBuyerDetails->customer_name ?? '' }}
                        </td>
                    @endif

                    <td>
                        SALES PERSON : <br>
                        <span class="bolded"> {{ $pi->getSaleName->fullname ?? ''  }}</span><br>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Product Table --}}
        <table style="width:100%" class="table-cust">
            <tr>
                <th scope="col" class="bolded">Sr.No</th>
                <th scope="col" class="bolded">Item Description</th>
                <th scope="col" class="bolded">HSN Code</th>
                <th scope="col" class="bolded">Quantity</th>
                <th scope="col" class="bolded">Rate</th>
                <th scope="col" class="bolded">Unit</th>
                <th scope="col" class="bolded">Amount</th>

            </tr>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td scope="col">{{$loop->iteration}}</td>
                        <td scope="col">
                            @if ($product->category_id)
                                CATEGORY - {{ $product->getProductCategoryName->product_category ?? '' }}<br>
                            @endif
                            @if ($product->product_id)
                                PRODUCT ITEM - {{ $product->productNamePI->product_type ?? '' }},<br>
                            @endif
                            @if ($product->size_id)
                                ITEM SIZE - {{ $product->productSizeName->product_size ?? '' }},<br>
                            @endif
                           {{$product->description}}
                        </td>
                        <td scope="col">{{ $product->hsn_code }}</td>
                        <td scope="col">{{ $product->qty }}</td>
                        <td scope="col">{!! $symbol !!} {{ $product->rate }}</td>
                        <td scope="col">{{ $product->getUnitName->description ?? '' }}</td>
                        <td scope="col">{{ $product->amount }}</td>
                    </tr>
                @endforeach

                @if ($pi->type == 1)
                    <tr>
                        <td colspan="6" style="text-align:right;" class="bolded">TOTAL</td>
                        <td > {!! $symbol !!} {{ $pi->total }}</td>
                    </tr>
                    @if (count($oversis) > 0)
                        @if ($oversis[0]->air_freight > 0 && $oversis[0]->air_freight != null)
                            <tr>
                                <td colspan="6" style="text-align:right;" class="bolded">Air freight</td>
                                <td > {!! $symbol !!} {{ $oversis[0]->air_freight ?? '0.0' }}</td>
                            </tr>
                        @endif
                        @if ($oversis[0]->sea_freight > 0 && $oversis[0]->sea_freight != null )
                            <tr>
                                <td colspan="6" style="text-align:right;" class="bolded">Sea Freight</td>
                                <td > {!! $symbol !!} {{ $oversis[0]->sea_freight ?? '0.0' }}</td>
                            </tr>
                        @endif
                        @if ($oversis[0]->admin_cost > 0 && $oversis[0]->admin_cost != null)
                            <tr>
                                <td colspan="6" style="text-align:right;" class="bolded">Admin Cost</td>
                                <td > {!! $symbol !!} {{ $oversis[0]->admin_cost ?? '0.0' }}</td>
                            </tr>
                        @endif
                        @if ($oversis[0]->bank_charges > 0 && $oversis[0]->bank_charges != null)
                            <tr>
                                <td colspan="6" style="text-align:right;" class="bolded">Bank Charges</td>
                                <td > {!! $symbol !!} {{$oversis[0]->bank_charges ?? '0.0' }}</td>
                            </tr>
                        @endif
                    @endif
                    <tr>
                        <td colspan="6" style="text-align:right;" class="bolded">TOTAL AMOUNT</td>
                        <td > {!! $symbol !!} {{ $pi->total_amount }}</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right;" class="bolded">ROUNDED TO	</td>
                        <td > {!! $symbol !!} {{ $pi->rounded_total_amount }}</td>
                    </tr>
                @elseif ($pi->type == 2)
                    <tr>
                        <td colspan="6" style="text-align:right;" class="bolded">TOTAL</td>
                        <td > {!! $symbol !!} {{ $pi->total }}</td>
                    </tr>
                    @if ($local != null && $local != ' ')
                        @if (!empty($local[0]->paid_text))
                            <tr>
                                <td colspan="6" style="text-align:right;" class="bolded">Extra Charges</td>
                                <td >{!! $symbol !!} {{ $local[0]->paid_text ?? ''}}</td>
                            </tr>
                        @endif
                    @endif
                    @php
                        $taxValue = 0;
                        $taxtAmount = 0;
                    @endphp
                    @if ($local != null && $local != ' ')
                        <tr>
                            @php
                                $tax = \DB::table("tbl_tax")->where('id',$local[0]->tax_id)->select('id','tax_name','tax_value')->get();
                                if($tax[0]){
                                    $tax_name = $tax[0]->tax_name;
                                    $tax_value = $tax[0]->tax_value;
                                }else{
                                    $tax_name = '';
                                    $tax_value = '';
                                }
                                $taxValue = $tax_value/100;
                                if (!empty($local[0]->paid_text)){
                                    $cal = $pi->total + $local[0]->paid_text;
                                }else{
                                    $cal = $pi->total;
                                }

                                $taxtAmount = ($cal*$taxValue);
                            @endphp
                            <td colspan="6" style="text-align:right;" class="bolded">{{ $tax_name ?? '' }}</td>
                            <td > {!! $symbol !!} {{ $taxtAmount ?? '0.00' }} </td>
                        </tr>
                    @endif
                    <tr>
                        <td colspan="6" style="text-align:right;" class="bolded">TOTAL AMOUNT</td>
                        <td > {!! $symbol !!} {{ $pi->total_amount }}</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right;" class="bolded">ROUNDED TO </td>
                        <td > {!! $symbol !!} {{ $pi->rounded_total_amount }}</td>
                    </tr>
                @endif
                <tr>
                    <td colspan="7">Amount Chargeable (in words) :<br> <span class="bolded">{{ strtoupper($word) }} {{ strtoupper(Helper::numberToWord($pi->rounded_total_amount)) }}</span></td>
                </tr>
            </tbody>
        </table>

        <table style="width:100%" class="table-cust">
            <tbody>
                @if ($pi->type == 1)
                <tr>
                    <td scope="col"><span class="bolded">DECLARATION :<br>
                        WE DECLARE THAT THE INVOICE SHOWS FOR <br> ACTUAL PRICE OF  THE GOODS DESCRIBED AND <br> THAT ALL PARTICULARS ARE TRUE AND CORRECT.</span>
                    </td>
                    <td scope="col" style="text-align:right;height:105px;"  class="bolded">
                        <div style="position:absolute;float:right;clear: both;"><span >FOR {{ $company_name }}</span></div>
                        <div style="position:relative;top:25px;right:-80px;float:right;clear: both;">
                            @if ($stamp_image)
                                <img class="img2" src="{{$stamp_image}}" width="100px" height="50px">
                            @endif
                            @if ($sales_sign)
                                <img class="img2" src="{{$sales_sign}}" width="100px" height="50px">
                            @endif
                        </div><br><br>
                        <div style="position:relative;top:50px;float:right;clear: both;bottom:0;">(AUTHORISED SIGNATORY)</div>
                    </td>
                </tr>
                    <tr>
                        <td scope="col">
                            <span class="bolded">BENEFICIARY BANK DETAILS :</span><br>
                            <span class="bolded">{{ $pi->getCustomerName->getPayment[0]->bank_name ?? '' }} </span> <br>
                            <span class="bolded">A/C NO.</span>{{ $pi->getCustomerName->getPayment[0]->bank_acc_no ?? '' }}<br>
                            <span class="bolded">BRANCH ADDRESS :</span> {{ $pi->getCustomerName->getPayment[0]->bank_branch ?? '' }}<br>
                            <span class="bolded">IFSC CODE OF THE BANK BRANCH :</span> NA<br>
                        </td>
                        @if ($oversis != null && $oversis != ' ')
                            <td scope="col">
                                <span class="bolded">CORRESPONDENT BANK :</span><br>
                                <span class="bolded">{{ $oversis[0]->correspondent_bank ?? ''}} </span> <br>
                                <span class="bolded">ACCOUNT NO. </span> {{ $oversis[0]->account_no ?? '' }}<br>
                                <span class="bolded">LOCATION :</span> {{ $oversis[0]->location ?? '' }}<br>
                                <span class="bolded">SWIFT / BIC CODE :</span> {{ $oversis[0]->swift ?? '' }}<br>
                            </td>
                        @endif
                    </tr>
                @elseif ($pi->type == 2)
                    {{-- @if ($local != null && $local) --}}
                        <tr>
                            <td scope="col"><span class="bolded">GST :</span>{{ $pi->getCompanyDetails->gst_no ?? '' }}</td>
                            <td scope="col"><span class="bolded">CIN NO: </span>{{ $pi->getCompanyDetails->cin_no ?? ''  }}</td>
                        </tr>
                    {{-- @endif --}}

                    <tr>
                        <td scope="col">
                            <span class="bolded">BANK DETAILS :</span><br>
                            <span class="bolded">{{ $pi->getCompanyRTGSDetails->bank_name ?? ''}} </span> <br>
                            <span class="bolded">A/C NO.</span>{{ $pi->getCompanyRTGSDetails->account_no ?? ''}}<br>
                            <span class="bolded">BRANCH :</span> {{ $pi->getCompanyRTGSDetails->branch_name ?? ''}}<br>
                            <span class="bolded">BRANCH ADDRESS :</span> {{  $pi->getCompanyRTGSDetails->address_of_remitter ?? ''  }}<br>
                            <span class="bolded">IFSC CODE OF THE BANK BRANCH :</span>{{ $pi->getCompanyRTGSDetails->ifsc_code ?? ''}}<br>
                        </td>
                        <td scope="col" style="text-align:right;"  class="bolded">
                            <div style="position:absolute;float:right;clear: both;"><span >FOR {{ $company_name }}</span></div>
                            <div style="position:relative;top:25px;right:-80px;float:right;clear: both;">
                                @if ($stamp_image)
                                    <img class="img2" src="{{$stamp_image}}" width="100px" height="50px">
                                @endif
                                @if ($sales_sign)
                                    <img class="img2" src="{{$sales_sign}}" width="100px" height="50px">
                                @endif
                            </div>
                            <div style="position:relative;top:80px;float:right;clear: both;">(AUTHORISED SIGNATORY)</div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
        <span><center>Subject to Mumbai Jurisdiction</center></span>
  </body>
</html>
