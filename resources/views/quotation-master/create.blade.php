@extends('layout.app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add Quatation</h1>
                <!--end::Title-->

            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Contacts App- Add New Contact-->
            <div class="row g-7">


                <!--begin::Content-->
                <div class="col-xl-12">
                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div style="display:none" class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div style="display:none" class="card-title">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                <!-- <span class="svg-icon svg-icon-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                    </svg>
                                </span> -->
                                <!--end::Svg Icon-->
                                <h2>Add Quotation</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            {{-- AA --}}
                            <form class="form" >
                                @method('POST')
                                @csrf
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Company</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select name="company" id="company" aria-label="Select a company" data-control="select2" data-placeholder="Select a company..."  class="form-select form-select-solid lh-1 py-3">
                                                        <option value="">Select</option>
                                                        @foreach ($company as $item)
                                                            <option value="{{$item->id}}" @if (old('company') == "{{$item->id}}") {{ 'selected' }} @endif>{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Sales Person</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select name="sale_person" id="sale_person" aria-label="Select a Sale Person" data-control="select2" data-placeholder="Select a sale Person..."  class="form-select form-select-solid lh-1 py-3">
                                                       @if (\  auth()->id()
 != 35)
                                                            <option value="">Select</option>
                                                       @endif

                                                        @foreach ($sales as $sale)
                                                            <option value="{{$sale->userid}}" @if ($auth_user_id == $sale->userid) selected @endif> {{$sale->fullname}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">The Customer is</span>
                                            </label>
                                            <input type="radio" class="form-check-input" name="customer_is" value="0" @if(old('customer_is')) checked @endif id="option1" style="margin-top: 2%;margin-left: 4%;">
                                            <label class="form-check-label" for="option1">Existing</label>
                                            <input type="radio" class="form-check-input" name="customer_is" value="1" @if(old('customer_is')) checked @endif id="option2" style="margin-top: 2%;margin-left:4%;">
                                            <label class="form-check-label" for="option2">New</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">

                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Customer Name</span>
                                            </label><br>
                                            <a href="{{URL::to('customeraddedit/0/general')}}" target="_blank" id="link_new_customer">Add New Customer</a>
                                            <div class="w-100"  id="dropdown_customer">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select name="customer_name" id="customer_name" aria-label="Select a Customer Name" data-control="select2" data-placeholder="Select a Customer Name..."  class="form-select form-select-solid lh-1 py-3">
                                                    <option value="">Select</option>
                                                    {{-- @foreach ($customer as $item)
                                                        <option value="{{$item->id}}" @if (old('customer_name') == "{{$item->id}}") {{ 'selected' }} @endif>{{$item->customer_name}}</option>
                                                    @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Prospect Name</span>
                                            </label><br>
                                            <a href="{{route('prospect-master-create')}}" target="_blank" id="link_new_prospect">Add New Prospect</a>
                                            <div class="w-100" id="dropdown_prospect">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select name="prospect_name" id="prospect_name" aria-label="Select a Prospect Name" data-control="select2" data-placeholder="Select a Prospect Name..."  class="form-select form-select-solid lh-1 py-3">
                                                    <option value="">Select</option>
                                                    {{-- @foreach ($prospect as $item)
                                                        <option value="{{$item->id}}">{{$item->company}}</option>
                                                    @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Quotation Date</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="quotation_date" id="quotation_date" value="">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Attention of</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="attention_of" id="attention_of" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Subject</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="subject" id="subject" value="">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Reference</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="reference" id="rederence" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="border border-light p-3 mb-4">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h3 class="mb-0">{{ __('Product') }}<span class="required"></span></h3>
                                                </div>
                                            </div>
                                            <div id="main-div">
                                                <input type="hidden" name="material_count" id="material_count" value="1" />
                                                <div id="div1" order-id="1">
                                                    <select name="product[]" class="product form-control custom-select-dropdown form-control-cst" searchable="Search here.." id="select-product_0" data="1">
                                                        <option value="" selected>Select Product</option>
                                                        @foreach ($product as $item)
                                                            <option value="{{$item->id}}">{{$item->product_type}}</option>
                                                        @endforeach
                                                    </select>
                                                    <textarea name="" id="desc_hide_1_1" cols="32" rows="2" class="w-90 desc" hidden></textarea>
                                                    <div class="table-responsive">
                                                        <table class="table table-flus" id="productTable1">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    {{-- <th>Sr No</th> --}}
                                                                    <th>Description<span class="required"></span></th>
                                                                    <th>Quantity<span class="required"></span></th>
                                                                    <th>Unit<span class="required"></span></th>
                                                                    <th>Rate per unit<span class="required"></span></th>
                                                                    <th>Total<span class="required"></span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list">
                                                                <tr>
                                                                    {{-- <td></td> --}}

                                                                    <td >
                                                                        <textarea name="item1[desc][1][]" id="desc_hide_1" cols="32" rows="2" class="w-90 desc"></textarea>
                                                                        {{-- <input type="text" name="item1[desc][]" id="desc_hide_1_1" value="" placeholder="Please Enter Desciption" class="w-90"> --}}
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="item1[qty][1][]" class="qty w-90 qtyKeyUp" id="qty_hide_1_1" value="" placeholder="Please Enter Quantity" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="item1[unit][1][]" step=".01"  step="any" id="unit_1_1" value="" placeholder="Please Enter unit" class="w-90">
                                                                    </td>
                                                                    <td>
                                                                    <input type="number" name="item1[rate][1][]" step=".01" step="any" id="rate_1_1" value="" placeholder="Please Enter Rate Per Unit" class="w-90 rateKeyUp">

                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="item1[sub_total][1][]" step=".01" step="any" id="total_1_1" value="" placeholder="Please Enter total" class="w-90 subTotalKeyUp" readonly>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        {{-- <div class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input display_total_value" type="checkbox" style="background-color: #BBBCBD;" value="1" data-id="1" id="display_total_value" name="display_total_value[]"/>
                                                            <label class="form-check-label" for="display_total_value">
                                                                Want to display Total Value
                                                            </label>
                                                        </div><br> --}}
                                                        <div class="d-flex justify-content-end">
                                                            <div class="hide-show" id="gst_1" style="display: none;">
                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">Sub Total</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="number" class="form-control subtotalVal" id="subTotal1" name="sub_total[]" readonly/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">Discount</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="number" class="form-control discountVal" name="discount[]" id="discount1"/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">CGST</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select class="form-select cgst" name="cgst_id[]">
                                                                            <option value="" selected>Select Cgst</option>
                                                                            @foreach ($cgst_id as $cgst)
                                                                                <option value="{{$cgst->id}}">{{$cgst->cgst}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="number" class="form-control cgstVal" name="cgst[]" id="cgst1" readonly/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">SGST</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select class="form-select sgst" name="sgst_id[]">
                                                                            <option value="" selected>Select Sgst</option>
                                                                            @foreach ($sgst_id as $sgst)
                                                                                <option value="{{$sgst->id}}">{{$sgst->sgst}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" class="form-control sgstVal" name="sgst[]" id="sgst1" readonly/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">IGST</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select class="form-select igst" name="igst_id[]" >
                                                                            <option value="" selected>Select Igst</option>
                                                                            @foreach ($igst_id as $igst)
                                                                                <option value="{{$igst->id}}">{{$igst->igst}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" class="form-control igstVal" name="igst[]" id="igst1" readonly/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">Grand Total</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" class="form-control grandTotalVal" name="grand_total[]" id="grandTotal1" readonly/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a id="add-more-qty" class="add-more-qty" data-id="1" data-index="1"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Qty and Rate</a><br>
                                                <a id="add-more" class="add-more" data-id="1" data-index="1"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Items</a>
                                            </div>
                                            <a href="javascript:void(0);" id="add_material" class="waves-effect"><i class="fa fa-plus-circle" aria-hidden="true" style="color: rgb(1, 41, 80);"></i>Add More Products</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator mb-6"></div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2" id="features_dev" style="display: none;">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Advance Pre Printing Security Features</span>
                                            </label>
                                            <input type="radio" class="form-check-input" name="features_is" value="1" @if(old('features_is')) checked @endif id="option1" style="margin-top: 2%;margin-left: 4%;">
                                            <label class="form-check-label" for="option1">Yes</label>
                                            <input type="radio" class="form-check-input" name="features_is" value="0" @if(old('features_is')) checked @endif id="option2" style="margin-top: 2%;margin-left:4%;">
                                            <label class="form-check-label" for="option2">No</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">

                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1" id="features_table" style="display: none;">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <!--begin::Table row-->
                                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                            <th >Sr.No</th>
                                                            <th >Advanced Printing Security Features</th>
                                                            <th >Price</th>
                                                        </tr>
                                                        <!--end::Table row-->
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody class="fw-bold text-gray-600">

                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Quotation Category</span>
                                            </label>
                                            <select name="quotation_category" id="quotation_category" aria-label="Select a Quotation Category" data-control="select2" data-placeholder="Select a Quotation Category"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                <option value='1'>Regular</option>
                                                <option value='2'>Export</option>
                                                <option value='3'>Local</option>
                                                <option value='4'>AMC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Currency</span>
                                            </label>
											<select name="currency" id="currency" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a Currency..."  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                @foreach ($currency as $item)
                                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Terms and Condition</span>
                                </label><br>

                                <input type="text" id="storeval" size="100" name="seq_term_title" hidden/>

                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="term"  style="width: 50%;" >
                                    <tbody class="fw-bold text-gray-600">

                                    </tbody>
                                </table>
                                    {{-- <select id="post-select" class="select2">
                                        <option value="">Select a Post</option>
                                    </select> --}}
                                {{-- </div> --}}
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">To Email</span>
                                                {{-- <span class=""></span>This mail id's consider as CC --}}
                                            </label><br>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="to_email">
                                                <input type="text" class="form-control form-control-solid" name="email_to" id="email_to" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                        </div>
                                    </div>
                                </div>
                                <div class="separator mb-6"></div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" id="cancel_btn" onclick="history.back()" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                    {{-- <button type="submit" id="prev_btn" data-kt-contacts-type="prev" value="preview" name="preview" formtarget="_blank" class="btn btn-info me-3">Preview</button> --}}
                                    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary" id="submit">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- Add New Contact-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
@push('js')
<script>
    $( window ).on('load',function()  {
        var customer_is = $("input[name='customer_is']").val();
        if(customer_is == 1){
            $("#link_new_customer").show();
            $("#link_new_prospect").show();
            $("#dropdown_customer").hide();
            $("#dropdown_prospect").hide();
        }else{
            $("#link_new_customer").hide();
            $("#link_new_prospect").hide();
            $("#dropdown_customer").show();
            $("#dropdown_prospect").show();
        }

        $("#customer_name").change(function(){
            var selectedcustomer = $(this).children("option:selected").val();
            console.log('Selected customer_name: '+selectedcustomer);
            jQuery.ajax({
                url: "{{route('get-customer-attention')}}",
                data: {
                    id: selectedcustomer
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#attention_of').val();
                    $.each(data, function(key, value) {
                        $('#attention_of').val(value.attention);
                    });
                }
            });
        });
    });

    $( document ).ready(function() {
        var max_fields_limit = 5; //set limit for maximum input fields
        var x = 1; //initialize counter for text box
        var z = 1;

        console.log("create Quotation Blade" );

        $("#company").change(function(){
            var selectedCompany = $(this).children("option:selected").val();
            console.log('Selected Terms Company: '+selectedCompany);
            if (selectedCompany == 49) {
                $('#features_dev').show();
            } else {
                $('#features_dev').hide();
            }
            $("input[name$='features_is']").click(function() {
                var value = $(this).val();
                if(value == 1){
                    jQuery.ajax({
                        url: "{{route('get-advance-feature')}}",
                        type: 'GET',
                        success: function(response) {
                            console.log(response);
                            $('#kt_customers_table').find("tr:gt(0)").remove();
                            let i=1;
                            $.each(response, function (key, input) {

                                console.log('respose'+input.id);
                                $('#kt_customers_table').append('<tr><td>'+i+'</td><td><div class="form-check"><input class="form-check-input" type="checkbox" value="'+input.name+'" name="feature['+input.id+']" /><label class="form-check-label" for="">'+input.name+'</label></div></td><td><input class="form-control form-control-solid" type="number" value="'+input.price+'" name="feature_price['+input.id+']" /></td></tr>');
                                i++;
                            });
                        }
                    });
                    $('#features_table').show();
                }else{
                    $('#features_table').hide();
                }
            });
        });

        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
        var form_success = $('.alert-success', frm_user);
        $(".form").validate({
            rules: {
                company: {
                    required: true,
                },
                sale_person: {
                    required: true,
                },
                quotation_date: {
                    required: true,
                },
                attention_of: {
                    required: true,
                },
                subject: {
                    required: true,
                },
                reference: {
                    required: true,
                },
                "product[]": {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Select Company",
                },
                sale_person: {
                    required: "Please Select Sale Person",
                },
                quotation_date: {
                    required: "Please Select Quotation Date.",
                },
                attention_of: {
                    required: "Please Enter Attention of.",
                },
                subject: {
                    required: "Please Enter subject.",
                },
                reference: {
                    required: "Please Enter Reference.",
                },
                "product[]": {
                    required: "Please Select Product.",
                },
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit").attr("disabled", true);
                $.ajax({
                    url: "{{route('quotation-master-store')}}",
                    type: "POST",
                    data: frm_user.serialize(),
                    success: function( response ) {
                        console.log(response);
                        if(response == 1){
                            swal.fire({
                                title: "success!",
                                text: "Record has been submitted successfully",
                                type: "success"
                            }).then(function() {
                                window.location = "{{route('quotation-master')}}";
                            });
                        }else if(response == 2 ){
                            swal.fire({
                                title: "Empty Entry of Product",
                                text: "You can't entry empty Value",
                                type: "info"
                            });
                        }else{
                            swal.fire({
                                title: "Error",
                                text: "Please Check the record",
                                type: "error"
                            });
                            $('#submit').html('submit');
                            $("#submit").attr("disabled", false);
                        }
                    }
                });
            }
        });

        $("input[name$='customer_is']").click(function() {
            var customer_is = $(this).val();
            if(customer_is == 1){
                $("#link_new_customer").show();
                $("#link_new_prospect").show();
                $("#dropdown_customer").hide();
                $("#dropdown_prospect").hide();
            }else{
                $("#link_new_customer").hide();
                $("#link_new_prospect").hide();
                jQuery.ajax({
                    url: "{{route('get-customer')}}",
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#customer_name').empty();
                        $('#customer_name').append('<option value="">Select customer name</option>');
                        $.each(data, function(key, value) {
                            $('#customer_name').append('<option value="'+value.id+'">'+value.customer_name+'</option>');
                        });
                    }
                });
                jQuery.ajax({
                    url: "{{route('get-prospect')}}",
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#prospect_name').empty();
                        // $('#attention_of').val();
                        $('#prospect_name').append('<option value="">Select Prospect Name</option>');
                        $.each(data, function(key, value) {
                            $('#prospect_name').append('<option value="'+value.id+'">'+value.company+'</option>');
                        });
                    }
                });
                $("#dropdown_customer").show();
                $("#dropdown_prospect").show();
            }
        });

        $("#quotation_category").change(function(){
            var selectedCategory = $(this).children("option:selected").val();
            console.log('Selected Terms category: '+selectedCategory);
            jQuery.ajax({
                url: '{{route('terms-condition-title')}}',
                data: {
                    id: selectedCategory
                },
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var tableBody = $('#term tbody');
                    tableBody.empty();
                    $.each(data, function(index, title) {
                        var row = '<tr>' +
                            '<td><div class="form-check"><input class="form-check-input" data-name="ss"  type="checkbox" value="'+title.id+'" name="term_title[]" /><label class="form-check-label" for="">'+title.name+'</label></div></td>' +
                            '<td>';

                        if (title.title.length > 0) {
                            row += '<select name="term_value[]"  aria-label="Select a Term value" data-control="select2" data-placeholder="Select a Term value..."  class="term_value_dropdown form-select form-select-solid lh-1 py-3" multiple data-title-id="' + title.id + '">' +
                                '<option value="">Select</option>';

                            $.each(title.title, function(index, Value) {
                                row += '<option value="' + Value.id + '">' + Value.term_value + '</option>';
                            });

                            row += '</select>';
                        } else {
                            row += '<span>No Value available</span>';
                        }

                        row += '</td>' +
                            '</tr>';

                        tableBody.append(row);
                    });
                    // Initialize select2 for each dynamically added dropdown
                    $('.term_value_dropdown').select2();
                    $(".term_value_dropdown").on("select2:select", function (evt) {
                        var element = evt.params.data.element;
                        var $element = $(element);

                        $element.detach();
                        $(this).append($element);
                        $(this).trigger("change");
                    });
                    var gh = [];
                    $('input[data-name=ss]').on('change', function() {
                        var id = $(this).val(); // this gives me null
                        var index = gh.indexOf(id);

                        if ($(this).is(':checked')) {
                            gh.push(id);
                            // document.getElementById("demo").innerHTML = '[' + gh + ']';
                            $('#storeval').val(gh);
                        } else
                        {
                            if (index > -1) {
                            gh.splice(index, 1);
                            // document.getElementById("demo").innerHTML = '[' + gh + ']';
                            $('#storeval').val(gh);
                            }
                        }
                        console.log(gh);
                    });
                }
            });
        });

        $("#quotation_date").daterangepicker({
            locale: {
                        format: 'DD-MM-YYYY',
                    },
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 2015,
            minDate: new Date(),
            maxDate: new Date()
        });



        // $('.add-more').click(function(){
        $(document).on("click",".add-more",function(e){
            var current_num = $(this).attr("data-id");
            console.log('Number Of Item'+current_num);
            var tableID = '#productTable'+current_num;
            var desc = $('#desc_hide_'+current_num+'_'+current_num).val();
            console.log('Desc: '+desc   );
            var tbody = $(tableID).children('tbody');
            var table = tbody.length ? tbody : $(tableID);
            if(x < max_fields_limit){ //check conditions
                x++; //counter increment
                z = x;
                table.append(`<tr class="input_fields_container">
                    <td >
                        <textarea name="item${current_num}[desc][${x}][]" id="desc_hide_${current_num}_${x}" cols="32
                        " rows="2" class="w-90 desc">${desc}</textarea>
                    </td>
                    <td>
                        <input type="number" name="item${current_num}[qty][${x}][]" class="qty w-90 qtyKeyUp" id="qty_hide_${current_num}_${x}" value="" placeholder="Please Enter Quantity">
                    </td>
                    <td>
                        <input type="text" class="w-90" name="item${current_num}[unit][${x}][]" step=".01"  step="any" id="unit_'+current_num+'_'+ x +'" value="" placeholder="Please Enter unit">
                    </td>
                    <td>
                        <input type="number" class="w-90 rateKeyUp" name="item${current_num}[rate][${x}][]"  step=".01" step="any" id="rate_${current_num}_${x}" value="" placeholder="Please Enter Rate Per Unit">
                    </td>
                    <td>
                        <input type="number" class="w-90 subTotalKeyUp" readonly name="item${current_num}[sub_total][${x}][]" step=".01" step="any" id="total_${current_num}_${x}" value="" placeholder="Please Enter total">
                    </td>
                    <td valign="middle">
                        <a class="remove">
                            <i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i>
                        </a>
                    </td>
                </tr>`);
            }
        });

        $(document).on("click",".add-more-qty",function(e){
            var current_num = $(this).attr("data-id");
            console.log('Number Of Item'+current_num);
            var tableID = '#productTable'+current_num;
            var desc = $('#desc_hide_'+current_num+'_'+current_num).val();
            console.log('Desc: '+desc   );
            var tbody = $(tableID).children('tbody');
            var table = tbody.length ? tbody : $(tableID);
            if(z < max_fields_limit){ //check conditions
                // z++; //counter increment
                table.append(`<tr class="input_fields_container">
                    <td >

                    </td>
                    <td>
                        <input type="number" name="item${current_num}[qty][${z}][]" class="qty w-90 qtyKeyUp" id="qty_hide_${current_num}_${z}" value="" placeholder="Please Enter Quantity">
                    </td>
                    <td>
                    </td>
                    <td>
                        <input type="number" class="w-90 rateKeyUp" name="item${current_num}[rate][${z}][]"  step=".01" step="any" id="rate_${current_num}_${z}" value="" placeholder="Please Enter Rate Per Unit">
                    </td>
                    <td>
                        <input type="number" class="w-90 subTotalKeyUp" readonly name="item${current_num}[sub_total][${z}][]" step=".01" step="any" id="total_${current_num}_${z}" value="" placeholder="Please Enter total">
                    </td>
                    <td valign="middle">
                        <a class="remove">
                            <i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i>
                        </a>
                    </td>
                </tr>`);
            }
        });

        $(document).on('click','.remove',function() {
            $(this).closest("tr").remove();
            console.log("X-- value "+x);
            x--;
        });

        $(document).on('change','.cgst, .sgst, .igst',function() {
           var selectedOption = $(this).find('option:selected').text();
           var className = $(this).attr("class");
           $(this).closest('.cgstVal').val(selectedOption)
           if(className == "form-select cgst" ){
                $('.cgstVal').closest("input[name='cgst[]']").val(selectedOption)
           }else if(className == "form-select sgst" ){
                $('.sgstVal').closest("input[name='sgst[]']").val(selectedOption)
           }else if(className == "form-select igst" ){
                $('.igstVal').closest("input[name='igst[]']").val(selectedOption)
           }else{
                $('.cgstVal').closest("input[name='cgst[]']").val(0)
                $('.sgstVal').closest("input[name='sgst[]']").val(0)
                $('.igstVal').closest("input[name='igst[]']").val(0)
           }
            let current_toggle = $(this).closest('.table-responsive').find('.display_total_value').attr("data-id");
            let subTotalVal = parseFloat($('#subTotal'+current_toggle).val());
            let discountVal = parseFloat($('#discount'+current_toggle).val());
            let cgstVal = parseFloat($('#cgst'+current_toggle).val());
            let sgstVal = parseFloat($('#sgst'+current_toggle).val());
            let igstVal = parseFloat($('#igst'+current_toggle).val());
            if(isNaN(subTotalVal)){ subTotalVal = 0; }
            if(isNaN(discountVal)){ discountVal = 0; }
            if(isNaN(cgstVal)){ cgstVal = 0; }
            if(isNaN(sgstVal)){ sgstVal = 0; }
            if(isNaN(igstVal)){ igstVal = 0; }
            $('#grandTotal'+current_toggle).val(subTotalVal - discountVal + cgstVal + sgstVal + igstVal );
        });

        $(document).on('click','.display_total_value',function() {
            var current_toggle = $(this).attr("data-id");
            if($(this).is(':checked')){
                $('#gst_'+current_toggle).removeAttr("style").show();
                $(this).val(1);
            }else{
                $('#gst_'+current_toggle).hide();
                $(this).val(0);
            }
        })

        $(document).on('keyup','.rateKeyUp, .qtyKeyUp', function() {
            let rate = parseFloat($(this).closest('tr').find('.rateKeyUp').val()).toFixed(2);
            let qty = parseFloat($(this).closest('tr').find('.qtyKeyUp').val()).toFixed(2);
            let mult = rate*qty
            $(this).closest('tr').find('.subTotalKeyUp').val((mult).toFixed(2));
            let current_toggle = $(this).closest('.table-responsive').find('.display_total_value').attr("data-id");
            let subTotal = 0;
            $(this).closest('.table-responsive').find('[name="item'+current_toggle+'[sub_total][]"]').each(function(){
                if($(this).val() != ""){
                    subTotal = parseFloat(subTotal) + parseFloat($(this).val());
                }
            });
            if(isNaN(subTotal)){
                subTotal = 0;
            }

            $('#subTotal'+current_toggle).val(subTotal);
            let subTotalVal = parseFloat($('#subTotal'+current_toggle).val());
            let discountVal = parseFloat($('#discount'+current_toggle).val());
            let cgstVal = parseFloat($('#cgst'+current_toggle).val());
            let sgstVal = parseFloat($('#sgst'+current_toggle).val());
            let igstVal = parseFloat($('#igst'+current_toggle).val());
            if(isNaN(subTotalVal)){ subTotalVal = 0; }
            if(isNaN(discountVal)){ discountVal = 0; }
            if(isNaN(cgstVal)){ cgstVal = 0; }
            if(isNaN(sgstVal)){ sgstVal = 0; }
            if(isNaN(igstVal)){ igstVal = 0; }
            $('#grandTotal'+current_toggle).val(subTotalVal - discountVal + cgstVal + sgstVal + igstVal );
        })

        $(document).on('keyup','.subTotalVal, .discountVal, .cgstVal, .sgstVal, .igstVal', function() {
            let subTotal = parseFloat($(this).closest('.hide-show').find('.subTotalVal').val());
            if(isNaN(subTotal)){ subTotal = 0; }
            let discount = parseFloat($(this).closest('.hide-show').find('.discountVal').val());
            if(isNaN(discount)){ discount = 0; }
            let cgst = parseFloat($(this).closest('.hide-show').find('.cgstVal').val());
            if(isNaN(cgst)){ cgst = 0; }
            let sgst = parseFloat($(this).closest('.hide-show').find('.sgstVal').val());
            if(isNaN(sgst)){ sgst = 0; }
            let igst = parseFloat($(this).closest('.hide-show').find('.igstVal').val());
            if(isNaN(igst)){ igst = 0; }

            let grandTotal = parseFloat(subTotal) -  parseFloat(discount) + parseFloat(cgst) +  parseFloat(igst) +  parseFloat(sgst);
            $(this).closest('.hide-show').find('.grandTotalVal').val(grandTotal);
        });


        $(document).on( 'change', '.product', function(e){
        // $('.product').on('change',function(e){
            data_id = $(this).attr('data')
            desc_id = "desc_hide_" + data_id;
            desc_id_hide = "desc_hide_" + data_id+"_"+data_id;
            $("#"+desc_id).val();
            $("#"+desc_id_hide).val();
            var product = $(this).children("option:selected").val();
            console.log("product_id: "+product);
            $.ajax({
                url:" {{route('description')}}",
                data: {
                    id: product
                },
                dataType: 'html',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $("#"+desc_id).val(data);
                    $("#"+desc_id_hide).val(data);
                }
            });
        });

        $(document).on("click", "#add_material",function(e){
            var id = $("#material_count").val();
            // x=1;
            var main_div_num =  parseFloat($("#material_count").val()) + parseFloat(1) ;
            $("#material_count").val(main_div_num);
            let html = `
            <div id="div${main_div_num}" order-id="${main_div_num}">
            <hr><br>
                <select name="product[]" class="product form-control custom-select-dropdown form-control-cst" searchable="Search here.." id="select-product_`+main_div_num+`" data="`+main_div_num+`">
                    <option value="" selected >Select Product</option>
                    @foreach ($product as $item)
                        <option value="{{$item->id}}">{{$item->product_type}}</option>
                    @endforeach
                </select>
                <textarea name="" id="desc_hide_${main_div_num}_${main_div_num}" cols="32
                " rows="2" class="w-90 desc" hidden></textarea>
                <div class="table-responsive">
                    <table class="table table-flus" id="productTable${main_div_num}">
                        <thead class="thead-light">
                            <tr>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Rate per unit</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td >
                                    <textarea name="item${main_div_num}[desc][${x
                                    }][]" id="desc_hide_`+main_div_num+`" cols="32
                                    " rows="2" class="w-90 desc"></textarea>
                                </td>
                                <td>
                                    <input type="number" placeholder="Please Enter Quantity" name="item${main_div_num}[qty][${x
                                    }][]" class="qty w-90 qtyKeyUp" id="qty_hide_0" value="">
                                </td>
                                <td>
                                    <input type="text" class="w-90" name="item${main_div_num}[unit][${x
                                    }][]" step=".01"  step="any" id="unit_0" value="" placeholder="Please Enter Unit">
                                </td>
                                <td>
                                    <input type="number" class="w-90 rateKeyUp" name="item${main_div_num}[rate][${x
                                    }][]" step=".01" step="any" id="rate_0" value="" placeholder="Please Enter Rate">
                                </td>
                                <td>
                                    <input class="w-90 subTotalKeyUp" readonly type="number" name="item${main_div_num}[sub_total][${x
                                    }][]" step=".01" step="any" id="total_0" value="" placeholder="Please Enter total">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end">
                                                            <div class="hide-show" id="gst_${main_div_num}" style="display: none;">
                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">Sub Total</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="number" readonly class="form-control subTotalVal" id="subTotal${main_div_num}" name="sub_total[]" />
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">Discount</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="number" class="form-control discountVal" name="discount[]" id="discount${main_div_num}"/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">CGST</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select class="form-select cgst" name="cgst_id[]">
                                                                            <option value="" selected>Select Cgst</option>
                                                                            @foreach ($cgst_id as $cgst)
                                                                                <option value="{{$cgst->id}}">{{$cgst->cgst}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="number" readonly class="form-control cgstVal" name="cgst[]" id="cgst${main_div_num}"/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">SGST</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select class="form-select sgst" name="sgst_id[]">
                                                                            <option value="" selected>Select Sgst</option>
                                                                            @foreach ($sgst_id as $sgst)
                                                                                <option value="{{$sgst->id}}">{{$sgst->sgst}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" readonly class="form-control sgstVal" name="sgst[]" id="sgst${main_div_num}"/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">IGST</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select class="form-select igst" name="igst_id[]" >
                                                                            <option value="" selected>Select I</option>
                                                                            @foreach ($igst_id as $igst)
                                                                                <option value="{{$igst->id}}">{{$igst->igst}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" readonly class="form-control igstVal" name="igst[]" id="igst${main_div_num}"/>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-3">
                                                                        <label for="">GRAND Total</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" readonly class="form-control grandTotalVal" name="grand_total[]" id="grandTotal${main_div_num}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                </div>
                <a id="add-more-qty" class="add-more-qty" data-id="${main_div_num}" data-index="1"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Qty and Rate</a><br>

                <a id="add-more" class="add-more" data-index="1"  data-id="${main_div_num}">
                    <i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>
                    Add More Items
                </a>
                <br>
                <a href="javascript:void(0);" data-id="${main_div_num}" class="remove-div waves-effect" style="color: red;"><i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i> Remove Product</a><hr>
            </div>`;
            $("#main-div").append(html);
            var totalCount=$("#main-div > div").length;
            console.log('total_main_div '+totalCount);
        });

        $(document).on('click','.remove-div',function() {
            var current_num = $(this).attr("data-id");
            var remId = '#div'+current_num;
            console.log(remId+' main-div remove id');
            $(remId).remove();
        });
    });
</script>
@endpush
