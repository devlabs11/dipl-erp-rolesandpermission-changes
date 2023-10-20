@extends('layout.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Alter Quotation</h1>
                    <!--end::Title-->

                </div>
                <!--end::Page title-->

            </div>
            <!--end::Container-->
        </div>

        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-fluid">
                <div class="row g-7">
                    <div class="col-xl-12">
                        <!--begin::Contacts-->
                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
                            <!--begin::Card header-->
                            <div style="display:none" class="card-header pt-7" id="kt_chat_contacts_header">
                                <!--begin::Card title-->
                                <div style="display:none" class="card-title">
                                    <h2>Alter Quotation</h2>
                                </div>
                            </div>
                            <div class="card-body pt-5">
                                <form class="form">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="unique_id" value="{{ $quotationMaster->unique_id }}">
                                    <input type="hidden" name="id" value="{{ $quotationMaster->id }}"
                                        id="quotation_id">
                                    <input type="hidden" name="count" value="{{ $quotationMaster->alter_count }}">
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Company</span>
                                                </label>
                                                <div class="w-100">
                                                    <div class="form-floating border rounded">
                                                        <!--begin::Select2-->
                                                        <select name="company" id="company" aria-label="Select a company"
                                                            data-control="select2" data-placeholder="Select a company..."
                                                            class="form-select form-select-solid lh-1 py-3">
                                                            <option value="">Select</option>
                                                            @foreach ($company as $item)
                                                                <option value="{{ $item->id }}"
                                                                    @if ($quotationMaster->company_id == $item->id) {{ 'selected' }} @endif>
                                                                    {{ $item->name }}</option>
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
                                                        <select name="sale_person" id="sale_person"
                                                            aria-label="Select a Sale Person" data-control="select2"
                                                            data-placeholder="Select a sale Person..."
                                                            class="form-select form-select-solid lh-1 py-3">
                                                            <option value="">Select</option>
                                                            @foreach ($sales as $sale)
                                                                <option
                                                                    value="{{ $sale->userid }}"@if ($quotationMaster->sales_person_id == $sale->userid) {{ 'selected' }} @endif>
                                                                    {{ $sale->fullname }}</option>
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
                                                <input type="radio" class="form-check-input" name="customer_is"
                                                    value="0" @if (!$quotationMaster->customer_is) checked @endif
                                                    id="option1" autocomplete="off" checked
                                                    style="margin-top: 2%;margin-left: 4%;">
                                                <label class="form-check-label" for="option1">Existing</label>

                                                <input type="radio" class="form-check-input" name="customer_is"
                                                    value="1" @if ($quotationMaster->customer_is) checked @endif
                                                    id="option2" autocomplete="off"
                                                    style="margin-top: 2%;margin-left:4%;">
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
                                                <div class="w-100" id="dropdown_customer">
                                                    <div class="form-floating border rounded">
                                                        <!--begin::Select2-->
                                                        <select name="customer_name" id="customer_name"
                                                            aria-label="Select a Customer Name" data-control="select2"
                                                            data-placeholder="Select a Customer Name..."
                                                            class="form-select form-select-solid lh-1 py-3">
                                                            <option value="">Select</option>
                                                            {{-- @foreach ($customer as $item)
                                                        <option value="{{$item->id}}" @if ($quotationMaster->customer_id == $item->id) {{ 'selected' }} @endif>{{$item->customer_name}}</option>
                                                    @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="customer_name_value"
                                            value="{{ $quotationMaster->customer_id }}">
                                        <input type="hidden" id="prospect_name_value"
                                            value="{{ $quotationMaster->prospect_id }}">
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="">Prospect Name</span>
                                                </label><br>
                                                {{-- <a href="{{route('prospect-master-create')}}" target="_blank" id="link_new_prospect">Add New Prospect</a> --}}
                                                <div class="w-100" id="dropdown_prospect">
                                                    <div class="form-floating border rounded">
                                                        <!--begin::Select2-->
                                                        <select name="prospect_name" id="prospect_name"
                                                            aria-label="Select a Prospect Name" data-control="select2"
                                                            data-placeholder="Select a Prospect Name..."
                                                            class="form-select form-select-solid lh-1 py-3">
                                                            <option value="">Select</option>
                                                            {{-- @if ($quotationMaster->prospect_id != 0)
                                                        @foreach ($prospect as $item)
                                                            <option value="{{$item->id}}"@if ($quotationMaster->prospect_id == $item->id) {{ 'selected' }} @endif>{{$item->company}}</option>
                                                        @endforeach
                                                    @endif --}}

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
                                                <input type="text" class="form-control form-control-solid"
                                                    name="quotation_date" id="quotation_date"
                                                    value="{{ $quotationMaster->date }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Attention of</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="attention_of" id="attention_of"
                                                    value="{{ $quotationMaster->attention_of }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Subject</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="subject" id="subject"
                                                    value="{{ $quotationMaster->subject }}">

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Reference</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="reference" id="rederence"
                                                    value="{{ $quotationMaster->reference }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="border border-light p-3 mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h3 class="mb-0">{{ __('Product') }}</h3>
                                                    </div>
                                                </div>
                                                <div id="main-div">
                                                    <input type="hidden" name="material_count" id="material_count"
                                                        value="{{ count($quotationProducts) }}" />
                                                    @foreach ($quotationProducts as $key => $quotationProduct)
                                                        <div id="div{{ $key + 1 }}" order-id="{{ $key + 1 }}">
                                                            <select name="product[]"
                                                                class="form-control custom-select-dropdown form-control-cst"
                                                                searchable="Search here.." id="select-product_0">
                                                                @foreach ($product as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        @if ($quotationProduct->product_id == $item->id) {{ 'selected' }} @endif>
                                                                        {{ $item->product_type }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="table-responsive">
                                                                <table class="table table-flus"
                                                                    id="productTable{{ $key + 1 }}">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            {{-- <th>Sr No</th> --}}
                                                                            <th>Description</th>
                                                                            <th>Quantity</th>
                                                                            <th>Unit</th>
                                                                            <th>Rate per unit</th>
                                                                            <th>Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list">
                                                                        @foreach ($productItems as $keyi => $productItem)
                                                                            @if ($productItem->quotation_product_id == $quotationProduct->id)
                                                                                <tr class="input_fields_container">
                                                                                    {{-- <td>{{$keyi+1}}</td> --}}
                                                                                    <td>
                                                                                        <textarea name=""
                                                                                            id="desc_hide_{{ $key + 1 }}_{{ $keyi + 1 }}" cols="30" rows="1"
                                                                                            class="w-90 desc_{{ $key + 1 }}" hidden>{{ $productItem->description }}</textarea>
                                                                                        <textarea name="item{{ $key + 1 }}[desc][{{ $keyi + 1 }}][]"
                                                                                            id="desc_hide_{{ $key + 1 }}_{{ $keyi + 1 }}" cols="30" rows="1" class="w-90">{{ $productItem->description }}</textarea>
                                                                                        {{-- <input type="text" name="item{{$key+1}}[desc][{{$keyi+1}}][]" id="desc_hide_{{$key+1}}_{{$keyi+1}}" value="{{$productItem->description}}" placeholder="Please Enter Desciption" class="w-90"> --}}
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="number"
                                                                                            name="item{{ $key + 1 }}[qty][{{ $keyi + 1 }}][]"
                                                                                            class="qty w-90 qtyKeyUp"
                                                                                            id="qty_hide_{{ $key + 1 }}_{{ $keyi + 1 }}"
                                                                                            value="{{ $productItem->qty }}"
                                                                                            placeholder="Please Enter Quantity">
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text"
                                                                                            name="item{{ $key + 1 }}[unit][{{ $keyi + 1 }}][]"
                                                                                            step=".01" step="any"
                                                                                            id="unit_{{ $key + 1 }}_{{ $keyi + 1 }}"
                                                                                            value="{{ $productItem->unit }}"
                                                                                            placeholder="Please Enter unit"
                                                                                            class="w-90">
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="number"
                                                                                            name="item{{ $key + 1 }}[rate][{{ $keyi + 1 }}][]"
                                                                                            step=".01" step="any"
                                                                                            id="rate_{{ $key + 1 }}_{{ $keyi + 1 }}"
                                                                                            value="{{ $productItem->ppu }}"
                                                                                            placeholder="Please Enter Rate Per Unit"
                                                                                            class="w-90 rateKeyUp">

                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="number"
                                                                                            name="item{{ $key + 1 }}[sub_total][{{ $keyi + 1 }}][]"
                                                                                            step=".01" step="any"
                                                                                            id="total_{{ $key + 1 }}_{{ $keyi + 1 }}"
                                                                                            value="{{ $productItem->total }}"
                                                                                            placeholder="Please Enter total"
                                                                                            class="w-90 subTotalKeyUp"
                                                                                            readonly>
                                                                                    </td>
                                                                                    @if ($keyi > 0)
                                                                                        <td valign="middle">
                                                                                            <a class="remove">
                                                                                                <i class="fa fa-minus-circle"
                                                                                                    aria-hidden="true"
                                                                                                    style="color: red;"></i>
                                                                                            </a>
                                                                                        </td>
                                                                                    @endif
                                                                                </tr>
                                                                                @if ($multipleQty)
                                                                                    @foreach ($multipleQty as $item)
                                                                                        @if ($item->quotation_product_item_id == $productItem->id)
                                                                                            <tr>
                                                                                                <td>

                                                                                                </td>
                                                                                                <td>
                                                                                                    <input type="number"
                                                                                                        name="item{{ $key + 1 }}[qty][{{ $keyi + 1 }}][]"
                                                                                                        class="qty w-90 qtyKeyUp"
                                                                                                        id="qty_hide_{{ $key + 1 }}_{{ $keyi + 1 }}"
                                                                                                        value="{{ $item->qty }}"
                                                                                                        placeholder="Please Enter Quantity">
                                                                                                </td>
                                                                                                <td>
                                                                                                    {{-- <input type="text" name="item{{$key+1}}[unit][{{$keyi+1}}][]" step=".01"  step="any" id="unit_{{$key+1}}_{{$keyi+1}}" value="{{$item->unit}}" placeholder="Please Enter unit" class="w-90"> --}}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <input type="number"
                                                                                                        name="item{{ $key + 1 }}[rate][{{ $keyi + 1 }}][]"
                                                                                                        step=".01"
                                                                                                        step="any"
                                                                                                        id="rate_{{ $key + 1 }}_{{ $keyi + 1 }}"
                                                                                                        value="{{ $item->ppu }}"
                                                                                                        placeholder="Please Enter Rate Per Unit"
                                                                                                        class="w-90 rateKeyUp">

                                                                                                </td>
                                                                                                <td>
                                                                                                    <input type="number"
                                                                                                        name="item{{ $key + 1 }}[sub_total][{{ $keyi + 1 }}][]"
                                                                                                        step=".01"
                                                                                                        step="any"
                                                                                                        id="total_{{ $key + 1 }}_{{ $keyi + 1 }}"
                                                                                                        value="{{ $item->total }}"
                                                                                                        placeholder="Please Enter total"
                                                                                                        class="w-90 subTotalKeyUp"
                                                                                                        readonly>
                                                                                                </td>
                                                                                                <td valign="middle">
                                                                                                    <a class="remove">
                                                                                                        <i class="fa fa-minus-circle"
                                                                                                            aria-hidden="true"
                                                                                                            style="color: red;"></i>
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endif
                                                                                    @endforeach
                                                                                @endif
                                                                                <tr>
                                                                                    <td>
                                                                                        <a id="add-more-qty"
                                                                                            class="add-more-qty"
                                                                                            data-id="{{ $key + 1 }}"
                                                                                            data-index="{{ $keyi + 1 }}"><i
                                                                                                class="fa fa-plus-circle"
                                                                                                aria-hidden="true"
                                                                                                style="color: dodgerblue;"></i>Add
                                                                                            More Qty and Rate</a><br>
                                                                                    </td>
                                                                                </tr>
                                                                            @else
                                                                            @endif
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="hide-show" id="gst_{{ $key + 1 }}"
                                                                        @if ($quotationProduct->display_total == 0) style="display: none;" @endif>
                                                                        <div class="row mb-3">
                                                                            <div class="col-3">
                                                                                <label for="">Sub Total</label>
                                                                            </div>
                                                                            <div class="col-4">
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="number"
                                                                                    class="form-control subtotalVal"
                                                                                    id="subTotal{{ $key + 1 }}"
                                                                                    name="sub_total[]"
                                                                                    value="{{ $quotationProduct->sub_total }}"
                                                                                    readonly />
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-3">
                                                                                <label for="">Discount</label>
                                                                            </div>
                                                                            <div class="col-4">
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="number"
                                                                                    class="form-control discountVal"
                                                                                    name="discount[]"
                                                                                    id="discount{{ $key + 1 }}"
                                                                                    value="{{ $quotationProduct->discount }}" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-3">
                                                                                <label for="">CGST</label>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <select class="form-select cgst"
                                                                                    name="cgst_id[]">
                                                                                    <option value="" selected>Select
                                                                                        Cgst</option>
                                                                                    @foreach ($cgst_id as $cgst)
                                                                                        <option
                                                                                            value="{{ $cgst->id }}"
                                                                                            @if ($quotationProduct->cgst_id == $cgst->id) {{ 'selected' }} @endif>
                                                                                            {{ $cgst->cgst }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="number"
                                                                                    class="form-control cgstVal"
                                                                                    value="{{ $quotationProduct->cgst }}"
                                                                                    name="cgst[]"
                                                                                    id="cgst{{ $key + 1 }}"
                                                                                    readonly />
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-3">
                                                                                <label for="">SGST</label>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <select class="form-select sgst"
                                                                                    name="sgst_id[]">
                                                                                    <option value="" selected>Select
                                                                                        Sgst</option>
                                                                                    @foreach ($sgst_id as $sgst)
                                                                                        <option
                                                                                            value="{{ $sgst->id }}"
                                                                                            @if ($quotationProduct->sgst_id == $sgst->id) {{ 'selected' }} @endif>
                                                                                            {{ $sgst->sgst }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="text"
                                                                                    class="form-control sgstVal"
                                                                                    value="{{ $quotationProduct->sgst }}"
                                                                                    name="sgst[]"
                                                                                    id="sgst{{ $key + 1 }}"
                                                                                    readonly />
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-3">
                                                                                <label for="">IGST</label>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <select class="form-select igst"
                                                                                    name="igst_id[]">
                                                                                    <option value="" selected>Select
                                                                                        Igst</option>
                                                                                    @foreach ($igst_id as $igst)
                                                                                        <option
                                                                                            value="{{ $igst->id }}"
                                                                                            @if ($quotationProduct->igst_id == $igst->id) {{ 'selected' }} @endif>
                                                                                            {{ $igst->igst }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="text"
                                                                                    class="form-control igstVal"
                                                                                    value="{{ $quotationProduct->igst }}"
                                                                                    name="igst[]"
                                                                                    id="igst{{ $key + 1 }}"
                                                                                    readonly />
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-3">
                                                                                <label for="">Grand Total</label>
                                                                            </div>
                                                                            <div class="col-4">
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <input type="text"
                                                                                    class="form-control grandTotalVal"
                                                                                    name="grand_total[]"
                                                                                    id="grandTotal{{ $key + 1 }}"
                                                                                    value="{{ $quotationProduct->grand_total }}"
                                                                                    readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a id="add-more" class="add-more"
                                                                data-id="{{ $key + 1 }}"
                                                                data-index="{{ $key + 1 }}"><i
                                                                    class="fa fa-plus-circle" aria-hidden="true"
                                                                    style="color: dodgerblue;"></i>Add More Items</a>
                                                                    <br>
                                                        <a href="javascript:void(0);" data-id="{{ $key + 1 }}" class="remove-div waves-effect" style="color: red;"><i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i> Remove Product</a><hr>

                                                        </div>
                                                </div>
                                                <hr>
                                                @endforeach
                                                <a href="javascript:void(0);" id="add_material" class="waves-effect"><i
                                                        class="fa fa-plus-circle" aria-hidden="true"
                                                        style="color: rgb(1, 41, 80);"></i>Add More Products</a>

                                                        <div class="separator mb-6"></div>

                                    <div class="">
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2" id="features_dev"
                                            style="display: none;">
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Advance Pre Printing Security Features</span>
                                                    </label>
                                                    <input type="radio" class="form-check-input" name="features_is"
                                                        value="1" @if ($quotationMaster->features_is == 1) checked @endif
                                                        id="option1" style="margin-top: 2%;margin-left: 4%;">
                                                    <label class="form-check-label" for="option1">Yes</label>
                                                    <input type="radio" class="form-check-input" name="features_is"
                                                        value="0" @if ($quotationMaster->features_is == 0) checked @endif
                                                        id="option2" style="margin-top: 2%;margin-left:4%;">
                                                    <label class="form-check-label" for="option2">No</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1" id="features_table"
                                            @isset($quotationMaster)
                                            @if ($quotationMaster->features_is == 0) style="display: none;" @endif
                                            @endisset>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <div class="table-responsive">
                                                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                                                            id="kt_customers_table">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                                <!--begin::Table row-->
                                                                <tr
                                                                    class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th>Sr.No</th>
                                                                    <th>Advanced Printing Security Features</th>
                                                                    <th>Price</th>
                                                                </tr>
                                                                <!--end::Table row-->
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody class="fw-bold text-gray-600">
                                                                @foreach ($feature as $item)
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>
                                                                            <div class="form-check"><input
                                                                                    class="form-check-input" type="checkbox"
                                                                                    value="{{ $item->name }}"
                                                                                    @if (array_key_exists($item->id, $arrFeature)) checked @endif
                                                                                    name="feature[{{ $item->id }}]" /><label
                                                                                    class="form-check-label"
                                                                                    for="">{{ $item->name }} </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control form-control-solid"
                                                                                type="number"
                                                                                @if (array_key_exists($item->id, $arrFeature)) value="{{ $arrFeature[$item->id] }}"
                                                                                    @else
                                                                                        value="{{ $item->price }}" @endif
                                                                                name="feature_price[{{ $item->id }}]" />
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body pt-5">
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Quotation Category</span>
                                                    </label><br>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <select name="quotation_category" id="quotation_category"
                                                                aria-label="Select a quote type" data-control="select2"
                                                                data-placeholder="Select a quote type..."
                                                                class="form-select form-select-solid lh-1 py-3">
                                                                <option value="">Select</option>
                                                                <option value='1'
                                                                    @if ($quotationMaster->quotation_category == 1) {{ 'selected' }} @endif>
                                                                    Regular</option>
                                                                <option value='2'
                                                                    @if ($quotationMaster->quotation_category == 2) {{ 'selected' }} @endif>
                                                                    Export</option>
                                                                <option value='3'
                                                                    @if ($quotationMaster->quotation_category == 3) {{ 'selected' }} @endif>
                                                                    Local</option>
                                                                <option value='4'
                                                                    @if ($quotationMaster->quotation_category == 4) {{ 'selected' }} @endif>
                                                                    AMC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Currency</span>
                                                    </label><br>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <select name="currency" id="currency" aria-label="Select a Currency"
                                                                data-control="select2" data-placeholder="Select a Currency..."
                                                                class="form-select form-select-solid lh-1 py-3">
                                                                <option value="">Select</option>
                                                                @foreach ($currency as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        @if ($quotationMaster->currency_id == $item->id) {{ 'selected' }} @endif>
                                                                        {{ $item->description }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="title_id" id="title_id" value="{{ $quotationMaster->term_title }}">
                                        <input type="hidden" name="values_id" id="values_id" value="{{ $quotationMaster->term_value }}">

                                        <div class="card-body pt-5">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Terms and Condition</span>
                                            </label><br>

                                            <input type="text" id="storeval" size="100" name="seq_term_title" value="{{ $quotationMaster->term_title }}" hidden/>

                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="term" style="width: 50%;">
                                                <tbody class="fw-bold text-gray-600">
                                                    @php
                                                        $cat_term = \DB::table('terms_titles')
                                                            ->where('categories_id', $quotationMaster->quotation_category)
                                                            ->get();
                                                        $title = explode(',', $quotationMaster->term_title);
                                                        $value = explode(',', $quotationMaster->term_value);
                                                    @endphp
                                                    @foreach ($cat_term as $item)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" data-name="ss" type="checkbox"
                                                                        name="term_title[]" value="{{ $item->id }}"
                                                                        @if (in_array($item->id, $title)) checked @endif>
                                                                    <label class="form-check-label"
                                                                        for="">{{ $item->name }}</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                @php
                                                                    $valueData = \DB::table('terms_conditions')
                                                                        ->where('title_value_id', $item->id)
                                                                        ->get();
                                                                @endphp
                                                                <select name="term_value[]" aria-label="Select a Term Value"
                                                                    data-control="select2"
                                                                    data-placeholder="Select a Term value..."
                                                                    class="form-select form-select-solid lh-1 py-3" multiple
                                                                    data-title-id="{{ $item->name }}">
                                                                    @foreach ($valueData as $item1)
                                                                        <option value="{{ $item1->id }}"
                                                                            @if (in_array($item1->id, $value)) selected @endif>
                                                                            {{ $item1->term_value }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                                <div class="col">
                                                    <div class="fv-row mb-7">
                                                        <label class="fs-6 fw-bold form-label mt-3">
                                                            <span class="">To Email</span>
                                                        </label><br>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="1"
                                                                id="flexCheckDefault" name="to_email"
                                                                @if ($quotationMaster->email_to == 1) checked @endif>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="email_to" id="email_to"
                                                                value="{{ $quotationMaster->email_ids }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="fv-row mb-7">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="separator mb-6"></div>

                                        <div class="d-flex justify-content-end">
                                            <button type="reset" id="cancel_btn" onclick="history.back()" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                            <button type="submit" id="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">Save</span>
                                                <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </div>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(window).on('load', function() {
            $('#term_title').trigger("change");

            var customer_is = $("input[name='customer_is']").val();
            var customer_name_value = $("#customer_name_value").val();
            var prospect_name_value = $("#prospect_name_value").val();
            console.log("id of c and p" + customer_name_value + prospect_name_value);
            if (customer_is == 1) {
                $("#link_new_customer").show();
                $("#link_new_prospect").show();
                $("#dropdown_customer").hide();
                $("#dropdown_prospect").hide();
            } else {
                $("#link_new_customer").hide();
                $("#link_new_prospect").hide();
                jQuery.ajax({
                    url: "{{ route('get-customer') }}",
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#customer_name').empty();
                        $('#attention_of').val();
                        $('#customer_name').append('<option value="">Select customer name</option>');
                        $.each(data, function(key, value) {
                            if (customer_name_value == value.id) {
                                $('#customer_name').append('<option selected value="' + value
                                    .id + '">' + value.customer_name + '</option>');
                            } else {
                                $('#customer_name').append('<option value="' + value.id + '">' +
                                    value.customer_name + '</option>');
                            }
                        });
                    }
                });
                jQuery.ajax({
                    url: "{{ route('get-prospect') }}",
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#prospect_name').empty();
                        $('#prospect_name').append('<option value="">Select Prospect Name</option>');
                        $.each(data, function(key, value) {
                            if (prospect_name_value == value.id) {
                                $('#prospect_name').append('<option selected value="' + value
                                    .id + '">' + value.company + '</option>');
                            } else {
                                $('#prospect_name').append('<option value="' + value.id + '">' +
                                    value.company + '</option>');
                            }
                        });
                    }
                });
                $("#dropdown_customer").show();
                $("#dropdown_prospect").show();
            }
            $("#customer_name").change(function() {
                var selectedcustomer = $(this).children("option:selected").val();
                console.log('Selected customer_name: ' + selectedcustomer);
                jQuery.ajax({
                    url: "{{ route('get-customer-attention') }}",
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

        $(document).ready(function() {
            console.log("Edit Quotation Blade");

            var gh = {!! json_encode($quotationMaster->term_title) !!}; // Initialize gh with the pre-checked values
            if (gh == null) {
                gh = [];
            } else if (typeof gh === 'string') {
                gh = gh.split(',').map(Number); // Convert a comma-separated string to an array of numbers
            }

            $('input[data-name=ss]').on('change', function() {
                var id = parseInt($(this).val());
                var index = gh.indexOf(id);

                if ($(this).is(':checked')) {
                    gh.push(id);
                } else {
                    if (index > -1) {
                        gh.splice(index, 1);
                    }
                }

                $('#storeval').val(gh.join(',')); // Update the input field value
            });

            $("#company").change(function() {
                var selectedCompany = $(this).children("option:selected").val();
                console.log('Selected Terms Company: ' + selectedCompany);
                if (selectedCompany == 49) {
                    $('#features_dev').show();
                } else {
                    $('#features_table').hide();
                    $('#features_dev').hide();
                }
                $("input[name$='features_is']").click(function() {
                    var value = $(this).val();
                    if (value == 1) {
                        jQuery.ajax({
                            url: "{{ route('get-advance-feature') }}",
                            type: 'GET',
                            success: function(response) {
                                console.log(response);
                                $('#kt_customers_table').find("tr:gt(0)").remove();
                                let i = 1;
                                $.each(response, function(key, input) {
                                    console.log('respose' + input.id);
                                    $('#kt_customers_table').append('<tr><td>' +
                                        i +
                                        '</td><td><div class="form-check"><input class="form-check-input" type="checkbox" value="' +
                                        input.name + '" name="feature[' +
                                        input.id +
                                        ']" /><label class="form-check-label" for="">' +
                                        input.name +
                                        '</label></div></td><td><input class="form-control form-control-solid" type="number" value="' +
                                        input.price +
                                        '" name="feature_price[' + input
                                        .id + ']" /></td></tr>');
                                    i++;
                                });
                            }
                        });
                        $('#features_table').show();
                    } else {
                        $('#features_table').hide();
                    }
                });
            });
            $('#company').trigger("change");

            $("input[name$='customer_is']").click(function() {
                var customer_is = $(this).val();
                if (customer_is == 1) {
                    $("#link_new_customer").show();
                    $("#link_new_prospect").show();
                    $("#dropdown_customer").hide();
                    $("#dropdown_prospect").hide();
                } else {
                    $("#link_new_customer").hide();
                    $("#link_new_prospect").hide();
                    jQuery.ajax({
                        url: "{{ route('get-customer') }}",
                        type: 'GET',
                        success: function(data) {
                            console.log(data);
                            $('#customer_name').empty();
                            $('#attention_of').val();
                            $.each(data, function(key, value) {
                                $('#customer_name').append('<option selected value="' +
                                    value.id + '">' + value.customer_name +
                                    '</option>');
                            });
                        }
                    });
                    jQuery.ajax({
                        url: "{{ route('get-prospect') }}",
                        type: 'GET',
                        success: function(data) {
                            console.log(data);
                            $('#prospect_name').empty();
                            $.each(data, function(key, value) {
                                $('#prospect_name').append('<option selected value="' +
                                    value.id + '">' + value.company + '</option>');
                            });
                        }
                    });
                    $("#dropdown_customer").show();
                    $("#dropdown_prospect").show();
                }
            });

            $("#quotation_category").change(function() {
                var selectedCategory = $(this).children("option:selected").val();

                var title_ids = $('#title_id').val();
                var values_ids = $('#values_id').val();

                console.log('title_ids selected: ' + title_ids);
                console.log('value selected: ' + values_ids);

                var titles_array = title_ids.split(",");
                var values_array = values_ids.split(",");

                console.log('title_ids array: ' + titles_array);
                console.log('values_array: ' + values_array);

                console.log('title_ids array length: ' + titles_array.length);
                console.log('values_array length: ' + values_array.length);

                console.log('Selected Terms category: ' + selectedCategory);

                jQuery.ajax({
                    url: '{{ route('terms-condition-title') }}',
                    data: {
                        id: selectedCategory
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        var tableBody = $('#term tbody');
                        tableBody.empty();
                        if (values_array.length == 0 && titles_array.length == 0) {
                            console.log("if");
                            $.each(data, function(index, title) {
                                var row = '<tr>' +
                                    '<td><div class="form-check"><input class="form-check-input" data-name="ss" type="checkbox" value="' +
                                    title.id +
                                    '" name="term_title[]" /><label class="form-check-label" for="">' +
                                    title.name + '</label></div></td>' +
                                    '<td>';

                                if (title.title.length > 0) {
                                    row +=
                                        '<select name="term_value[]"  aria-label="Select a Term Value" data-control="select2" data-placeholder="Select a Term value..."  class="term_value_dropdown form-select form-select-solid lh-1 py-3" multiple data-title-id="' +
                                        title.id + '">' +
                                        '<option value="">Select</option>';

                                    $.each(title.title, function(index, Value) {
                                        row += '<option value="' + Value.id +
                                            '">' + Value.term_value +
                                            '</option>';
                                    });

                                    row += '</select>';
                                } else {
                                    row += '<span>No Value available</span>';
                                }

                                row += '</td>' +
                                    '</tr>';

                                tableBody.append(row);
                            });
                        } else {
                            console.log("else");
                            $.each(data, function(index, title) {
                                var checked = titles_array.includes(title.id
                                .toString()) ? 'checked' : '';
                                var row = '<tr>' +
                                    '<td><div class="form-check"><input class="form-check-input" data-name="ss" type="checkbox" value="' +
                                    title.id + '" name="term_title[]" ' + checked +
                                    ' /><label class="form-check-label" for="">' + title
                                    .name + '</label></div></td>' +
                                    '<td>';

                                if (title.title.length > 0) {
                                    row +=
                                        '<select name="term_value[]"  aria-label="Select a Term Value" data-control="select2" data-placeholder="Select a Term value..."  class="term_value_dropdown form-select form-select-solid lh-1 py-3" multiple data-title-id="' +
                                        title.id + '">' +
                                        '<option value="">Select</option>';

                                    $.each(title.title, function(index, Value) {
                                        var selected = values_array.includes(
                                                Value.id.toString()) ?
                                            'selected' : '';
                                        row += '<option value="' + Value.id +
                                            '" ' + selected + '>' + Value
                                            .term_value + '</option>';
                                    });

                                    row += '</select>';
                                } else {
                                    row += '<span>No Value available</span>';
                                }

                                row += '</td>' +
                                    '</tr>';

                                tableBody.append(row);
                            });
                        }
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
            // $('#quotation_category').trigger("change");

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

            var max_fields_limit = 40; //set limit for maximum input fields
            var x = 1; //initialize counter for text box
            var z = 1;

            // Add More Product Item
            $(document).on("click", ".add-more", function(e) {
                var current_num = $(this).attr("data-id");
                console.log('Number Of Item' + current_num);
                var tableID = '#productTable' + current_num;
                var desc = $('#desc_hide_' + current_num + '_' + current_num).val();
                console.log('Desc: ' + desc);
                desc = $('.desc_' + current_num).val();
                console.log('New Console+Desc' + desc);
                var tbody = $(tableID).children('tbody');
                var table = tbody.length ? tbody : $(tableID);
                if (x < max_fields_limit) { // check conditions
                    x++; // counter increment
                    z = x;
                    table.append(`<tr class="input_fields_container">
                    <td>
                    <textarea name="item${current_num}[desc][${x}][]" id="desc_hide_${current_num}_${x}" cols="32" rows="2" class="w-90 desc">${desc}</textarea>
                    </td>
                    <td>
                    <input type="number" name="item${current_num}[qty][${x}][]" class="qty w-90 qtyKeyUp" id="qty_hide_${current_num}_${x}" value="" placeholder="Please Enter Quantity">
                    </td>
                    <td>
                    <input type="text" class="w-90" name="item${current_num}[unit][${x}][]" step=".01" step="any" id="unit_${current_num}_${x}" value="" placeholder="Please Enter unit">
                    </td>
                    <td>
                    <input type="number" class="w-90 rateKeyUp" name="item${current_num}[rate][${x}][]" step=".01" step="any" id="rate_${current_num}_${x}" value="" placeholder="Please Enter Rate Per Unit">
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

                var addMoreQtyLink = `<tr>
                <td>
                <a id="add-more-qty" class="add-more-qty" data-id="${current_num}" data-index="${x}">
                    <i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Qty and Rate
                </a>
                </td>
            </tr>`;

                table.append(addMoreQtyLink);
            });

            // Function to handle the "Add More Qty and Rate" click event
            function handleAddMoreQty(event) {

                event.preventDefault();
                var current_num = $(this).attr("data-id");
                var tableID = '#productTable' + current_num;
                var desc = $('#desc_hide_' + current_num + '_' + current_num).val();
                var z = parseInt($(this).attr("data-index"));
                var tbody = $(tableID).children('tbody');
                var table = tbody.length ? tbody : $(tableID);
                console.log('current_num: ' + current_num + 'tableID: ' + tableID + 'desc :' + desc + 'z :' + z +
                    'max_fields_limit: ' + max_fields_limit);

                if (z < max_fields_limit) { // Check conditions
                    // z++; // Counter increment
                    var row = '<tr>' +
                        '<td></td>' +
                        '<td>' +
                        '<input type="number" name="item' + current_num + '[qty][' + z +
                        '][]" class="qty w-90 qtyKeyUp" id="qty_hide_' + current_num + '_' + z +
                        '" value="" placeholder="Please Enter Quantity">' +
                        '</td>' +
                        '<td></td>' +
                        '<td>' +
                        '<input type="number" class="w-90 rateKeyUp" name="item' + current_num + '[rate][' + z +
                        '][]" step=".01" step="any" id="rate_' + current_num + '_' + z +
                        '" value="" placeholder="Please Enter Rate Per Unit">' +
                        '</td>' +
                        '<td>' +
                        '<input type="number" class="w-90 subTotalKeyUp" readonly name="item' + current_num +
                        '[sub_total][' + z + '][]" step=".01" step="any" id="total_' + current_num + '_' + z +
                        '" value="" placeholder="Please Enter total">' +
                        '</td>' +
                        '<td valign="middle">' +
                        '<a class="remove">' +
                        '<i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i>' +
                        '</a>' +
                        '</td>' +
                        '</tr>';
                    var $currentButton = $(this);
                    var withTableName = tableID + ' .input_fields_container';
                    var trLength = $(withTableName).length;
                    console.log('trLength: ' + trLength);

                    if (trLength > 0) {
                        console.log('if');
                        if (trLength == 1) {
                            table.append(row);
                        } else {
                            $currentButton.closest('tr').before(row);
                        }
                    } else {
                        console.log('else');
                        table.append(row);
                    }

                } // IF close
            }


            // Event handler for dynamically added "Add More Qty and Rate" buttons within existing products
            $(document).on("click", ".add-more-qty", handleAddMoreQty);

            // Event handler for adding new products
            $(document).on("click", "#add_material", function(e) {
                e.preventDefault();
                var id = $("#material_count").val();
                var main_div_num = parseFloat($("#material_count").val()) + parseFloat(1);
                $("#material_count").val(main_div_num);
                let html =
                    `<hr><br>
                            <div id="div${main_div_num}" order-id="${main_div_num}">
                                <select name="product[]" class="product form-control custom-select-dropdown form-control-cst" searchable="Search here.." id="select-product_` +
                    main_div_num + `" data="` + main_div_num + `">
                                    <option value="" selected >Select Product</option>
                                    @foreach ($product as $item)
                                        <option value="{{ $item->id }}">{{ $item->product_type }}</option>
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
                                            <tr class="input_fields_container">
                                                <td >
                                                    <textarea name="item${main_div_num}[desc][${x
                                                    }][]" id="desc_hide_${main_div_num}_[${x
                                                    }]" cols="30" rows="1" class="w-90 desc_${main_div_num}" hidden></textarea>

                                                    <textarea name="item${main_div_num}[desc][${x
                                                    }][]" id="desc_hide_` + main_div_num + `" cols="32
                                                    " rows="2" class="w-90 desc"></textarea>
                                                </td>
                                                <td>
                                                    <input type="number" placeholder="Please Enter Quantity" name="item${main_div_num}[qty][${x
                                                    }][]" class="qty w-90 qtyKeyUp" id="qty_hide_` + main_div_num + `" value="">
                                                </td>
                                                <td>
                                                    <input type="text" class="w-90" name="item${main_div_num}[unit][${x
                                                    }][]" step=".01"  step="any" id="unit_` + main_div_num + `" value="" placeholder="Please Enter Unit">
                                                </td>
                                                <td>
                                                    <input type="number" class="w-90 rateKeyUp" name="item${main_div_num}[rate][${x
                                                    }][]" step=".01" step="any" id="rate_` + main_div_num + `" value="" placeholder="Please Enter Rate">
                                                </td>
                                                <td>
                                                    <input class="w-90 subTotalKeyUp" readonly type="number" name="item${main_div_num}[sub_total][${x
                                                    }][]" step=".01" step="any" id="total_` + main_div_num + `" value="" placeholder="Please Enter total">
                                                </td>
                                            </tr>
                                            <tr><td>  <a id="add-more-qty" class="add-more-qty" data-id="${main_div_num}" data-index="${x}"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Qty and Rate</a><br></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a id="add-more" class="add-more" data-index="${x}"  data-id="${main_div_num}">
                                    <i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>
                                    Add More Items
                                </a>
                                <br>
                                <a href="javascript:void(0);" data-id="${main_div_num}" class="remove-div waves-effect" style="color: red;"><i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i> Remove Product</a><hr>
                            </div>`;
                $('#div' + id).append(html);

                // Bind the event handler to the newly added "Add More Qty and Rate" button
                // $('#div' + main_div_num).on("click", ".add-more-qty", handleAddMoreQty);
            });

            $(document).on('click', '.remove', function() {
                $(this).closest("tr").remove();
                console.log("X-- value " + x);
                x--;
            });

            $(document).on('change', '.cgst, .sgst, .igst', function() {
                var selectedOption = $(this).find('option:selected').text();
                var className = $(this).attr("class");
                $(this).closest('.cgstVal').val(selectedOption)
                if (className == "form-select cgst") {
                    $('.cgstVal').closest("input[name='cgst[]']").val(selectedOption)
                } else if (className == "form-select sgst") {
                    $('.sgstVal').closest("input[name='sgst[]']").val(selectedOption)
                } else if (className == "form-select igst") {
                    $('.igstVal').closest("input[name='igst[]']").val(selectedOption)
                } else {
                    $('.cgstVal').closest("input[name='cgst[]']").val(0)
                    $('.sgstVal').closest("input[name='sgst[]']").val(0)
                    $('.igstVal').closest("input[name='igst[]']").val(0)
                }
                let current_toggle = $(this).closest('.table-responsive').find('.display_total_value').attr(
                    "data-id");
                let subTotalVal = parseFloat($('#subTotal' + current_toggle).val());
                let discountVal = parseFloat($('#discount' + current_toggle).val());
                let cgstVal = parseFloat($('#cgst' + current_toggle).val());
                let sgstVal = parseFloat($('#sgst' + current_toggle).val());
                let igstVal = parseFloat($('#igst' + current_toggle).val());
                if (isNaN(subTotalVal)) {
                    subTotalVal = 0;
                }
                if (isNaN(discountVal)) {
                    discountVal = 0;
                }
                if (isNaN(cgstVal)) {
                    cgstVal = 0;
                }
                if (isNaN(sgstVal)) {
                    sgstVal = 0;
                }
                if (isNaN(igstVal)) {
                    igstVal = 0;
                }
                $('#grandTotal' + current_toggle).val(subTotalVal - discountVal + cgstVal + sgstVal +
                    igstVal);
            });

            $(document).on('click', '.display_total_value', function() {
                var current_toggle = $(this).attr("data-id");
                if ($(this).is(':checked')) {
                    $('#gst_' + current_toggle).removeAttr("style").show();
                    $(this).val(1);
                } else {
                    $('#gst_' + current_toggle).hide();
                    $(this).val(0);
                }
            })
            $(document).on('keyup', '.rateKeyUp, .qtyKeyUp', function() {
                // let rate = parseFloat($(this).closest('tr').find('.rateKeyUp').val())
                // let qty = parseFloat($(this).closest('tr').find('.qtyKeyUp').val())
                // $(this).closest('tr').find('.subTotalKeyUp').val(rate * qty);
                let rate = parseFloat($(this).closest('tr').find('.rateKeyUp').val()).toFixed(2);
                let qty = parseFloat($(this).closest('tr').find('.qtyKeyUp').val()).toFixed(2);
                let mult = rate*qty
                $(this).closest('tr').find('.subTotalKeyUp').val((mult).toFixed(2));
                let current_toggle = $(this).closest('.table-responsive').find('.display_total_value').attr(
                    "data-id");
                let subTotal = 0;
                $(this).closest('.table-responsive').find('[name="item' + current_toggle +
                    '[sub_total][]"]').each(function() {
                    if ($(this).val() != "") {
                        subTotal = parseFloat(subTotal) + parseFloat($(this).val());
                    }
                });
                if (isNaN(subTotal)) {
                    subTotal = 0;
                }
                $('#subTotal' + current_toggle).val(subTotal);
                let subTotalVal = parseFloat($('#subTotal' + current_toggle).val());
                let discountVal = parseFloat($('#discount' + current_toggle).val());
                let cgstVal = parseFloat($('#cgst' + current_toggle).val());
                let sgstVal = parseFloat($('#sgst' + current_toggle).val());
                let igstVal = parseFloat($('#igst' + current_toggle).val());
                if (isNaN(subTotalVal)) {
                    subTotalVal = 0;
                }
                if (isNaN(discountVal)) {
                    discountVal = 0;
                }
                if (isNaN(cgstVal)) {
                    cgstVal = 0;
                }
                if (isNaN(sgstVal)) {
                    sgstVal = 0;
                }
                if (isNaN(igstVal)) {
                    igstVal = 0;
                }
                $('#grandTotal' + current_toggle).val(subTotalVal - discountVal + cgstVal + sgstVal +
                    igstVal);
            })

            $(document).on('keyup', '.subTotalVal, .discountVal, .cgstVal, .sgstVal, .igstVal', function() {
                let subTotal = parseFloat($(this).closest('.hide-show').find('.subTotalVal').val());
                if (isNaN(subTotal)) {
                    subTotal = 0;
                }
                let discount = parseFloat($(this).closest('.hide-show').find('.discountVal').val());
                if (isNaN(discount)) {
                    discount = 0;
                }
                let cgst = parseFloat($(this).closest('.hide-show').find('.cgstVal').val());
                if (isNaN(cgst)) {
                    cgst = 0;
                }
                let sgst = parseFloat($(this).closest('.hide-show').find('.sgstVal').val());
                if (isNaN(sgst)) {
                    sgst = 0;
                }
                let igst = parseFloat($(this).closest('.hide-show').find('.igstVal').val());
                if (isNaN(igst)) {
                    igst = 0;
                }

                let grandTotal = parseFloat(subTotal) - parseFloat(discount) + parseFloat(cgst) +
                    parseFloat(igst) + parseFloat(sgst);
                $(this).closest('.hide-show').find('.grandTotalVal').val(grandTotal);
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
                        url: "{{ route('quotation-master-alterUpdate') }}",
                        type: "POST",
                        data: frm_user.serialize(),
                        success: function(response) {
                            console.log(response);
                            if (response == 1) {
                                swal.fire({
                                    title: "success!",
                                    text: "Record has been altered successfully",
                                    type: "success"
                                }).then(function() {
                                    window.location =
                                        "{{ route('quotation-master') }}";
                                });
                            } else if (response == 2) {
                                swal.fire({
                                    title: "Empty Entry of Product",
                                    text: "You can't entry empty Value",
                                    type: "info"
                                });
                            } else {
                                swal.fire({
                                    title: "Error",
                                    text: "Please Check the record",
                                    type: "error"
                                });
                            }
                        }
                    });
                }
            });

            $(document).on('change', '.product', function(e) {
                data_id = $(this).attr('data')
                desc_id = "desc_hide_" + data_id;
                desc_id_hide = "desc_hide_" + data_id + "_" + data_id;

                $("#" + desc_id).val();
                $("#" + desc_id_hide).val();
                var product = $(this).children("option:selected").val();
                console.log("product_id: " + product);
                console.log("data_id: " + data_id);
                $.ajax({
                    url: " {{ route('description') }}",
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
                        $('.desc_' + data_id).val(data);
                        $("#" + desc_id).val(data);
                        $("#" + desc_id_hide).val(data);

                    }
                });
            });

            // $(document).on("click", "#add_material",function(e){
            //    e.preventDefault();
            //     var id = $("#material_count").val();
            //     var main_div_num =  parseFloat($("#material_count").val()) + parseFloat(1) ;
            //     $("#material_count").val(main_div_num);
            //     let html = `
        //             <hr><br>
        //             <div id="div${main_div_num}" order-id="${main_div_num}">
        //                 <select name="product[]" class="product form-control custom-select-dropdown form-control-cst" searchable="Search here.." id="select-product_`+main_div_num+`" data="`+main_div_num+`">
        //                     <option value="" selected >Select Product</option>
        //                     @foreach ($product as $item)
        //                         <option value="{{ $item->id }}">{{ $item->product_type }}</option>
        //                     @endforeach
        //                 </select>
        //                 <textarea name="" id="desc_hide_${main_div_num}_${main_div_num}" cols="32
        //                 " rows="2" class="w-90 desc" hidden></textarea>
        //                 <div class="table-responsive">
        //                     <table class="table table-flus" id="productTable${main_div_num}">
        //                         <thead class="thead-light">
        //                             <tr>
        //                                 <th>Description</th>
        //                                 <th>Quantity</th>
        //                                 <th>Unit</th>
        //                                 <th>Rate per unit</th>
        //                                 <th>Total</th>
        //                             </tr>
        //                         </thead>
        //                         <tbody class="list">
        //                             <tr>
        //                                 <td >
        //                                     <textarea name="item${main_div_num}[desc][${x
        //                                     }][]" id="desc_hide_${main_div_num}_[${x
        //                                     }]" cols="30" rows="1" class="w-90 desc_${main_div_num}" hidden></textarea>

        //                                     <textarea name="item${main_div_num}[desc][${x
        //                                     }][]" id="desc_hide_`+main_div_num+`" cols="32
        //                                     " rows="2" class="w-90 desc"></textarea>
        //                                 </td>
        //                                 <td>
        //                                     <input type="number" placeholder="Please Enter Quantity" name="item${main_div_num}[qty][${x
        //                                     }][]" class="qty w-90 qtyKeyUp" id="qty_hide_0" value="">
        //                                 </td>
        //                                 <td>
        //                                     <input type="text" class="w-90" name="item${main_div_num}[unit][${x
        //                                     }][]" step=".01"  step="any" id="unit_0" value="" placeholder="Please Enter Unit">
        //                                 </td>
        //                                 <td>
        //                                     <input type="number" class="w-90 rateKeyUp" name="item${main_div_num}[rate][${x
        //                                     }][]" step=".01" step="any" id="rate_0" value="" placeholder="Please Enter Rate">
        //                                 </td>
        //                                 <td>
        //                                     <input class="w-90 subTotalKeyUp" readonly type="number" name="item${main_div_num}[sub_total][${x
        //                                     }][]" step=".01" step="any" id="total_0" value="" placeholder="Please Enter total">
        //                                 </td>
        //                             </tr>
        //                         </tbody>
        //                     </table>
        //                     <a id="add-more-qty" class="add-more-qty" data-id="${main_div_num}" data-index="${x}"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Qty and Rate</a><br>
        //                 </div>
        //                 <a id="add-more" class="add-more" data-index="${x}"  data-id="${main_div_num}">
        //                     <i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>
        //                     Add More Items
        //                 </a>
        //                 <br>
        //                 <a href="javascript:void(0);" data-id="${main_div_num}" class="remove-div waves-effect" style="color: red;"><i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i> Remove Product</a><hr>
        //             </div>`;

            //         $('#div'+id).append(html);
            //         var totalCount=$("#main-div > div").length;
            //         console.log('total_main_div '+totalCount);
            // });

            $(document).on('click', '.remove-div', function() {
                var current_num = $(this).attr("data-id");
                var remId = '#div' + current_num;
                console.log(remId + ' main-div remove id');
                $(remId).remove();
            });

        });
    </script>
@endpush
