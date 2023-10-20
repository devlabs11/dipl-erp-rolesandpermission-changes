@extends('layout.app')
@section('content')
<style>
/* Apply scrollbar styles for WebKit browsers (Chrome, Safari) */
.table-responsive {
    max-height: 300px; /* Adjust this value as needed */
    overflow-y: auto; /* Enable vertical scrolling */
    border: 1px solid #ccc; /* Add a border for visibility */
    scrollbar-width: thin; /* Set the width of the scrollbar */
    scrollbar-color: #006dab darkgray; /* Customize the colors (thumb color and track color) */
}

/* Customize the scrollbar thumb (drag handle) color */
.table-responsive::-webkit-scrollbar-thumb {
    background-color: 006dab; /* Change to dark gray */
}

/* Customize the scrollbar track (background) color */
.table-responsive::-webkit-scrollbar-track {
    background-color: darkgray;
}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
                    @if(isset($proformaInvoice))
                         Edit
                    @else
                         Add
                    @endif
                    Proforma Invoice
                </h1>
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
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <form class="form" data-id="@isset($proformaInvoice){{ $proformaInvoice->id }}@endisset">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="id" value="@isset($proformaInvoice){{ $proformaInvoice->id }}@endisset">
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Proforma Invoice NO.</span>
                                            </label>
                                            <input type="text" name="invoice_no" id="invoice_no" class="form-control form-control-solid" value="@isset($proformaInvoice) {{$proformaInvoice->invoice_no}}
                                                 @endisset @empty($proformaInvoice) {{ $prefix }} @endempty
                                            " readonly>
                                        </div>
                                    </div>
                                    <div class="col" style="margin-top: 40px;">
                                        <div class="row mw-500px mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                                            <div class="col-4">
                                                <label class="form-check-image">
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" value="1" @isset($proformaInvoice) @if ($proformaInvoice->type == 1)
                                                            checked
                                                        @endif
                                                        @endisset name="type"/>
                                                        <div class="form-check-label">
                                                            Overseas
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label class="form-check-image">
                                                    <div class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input" type="radio" value="2" @isset($proformaInvoice) @if ($proformaInvoice->type == 2)
                                                        checked
                                                    @endif
                                                    @endisset  name="type"/>
                                                        <div class="form-check-label">
                                                            Local
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Quotation Id</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="quotation" id="quotation" aria-label="Select a Quotation Id" data-control="select2" data-placeholder="Select a Quotation Id..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($quotations as $quotation)
                                                            <option value="{{$quotation->id}}" @isset($proformaInvoice)
                                                                @if ($proformaInvoice->quotation_id == $quotation->id)
                                                                    selected
                                                                 @endif
                                                            @endisset>{{$quotation->unique_id}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Date</span>
                                                <div class="error-message" style="color: red;"></div>
                                            </label>
											<input type="text" readonly  class="form-control form-control-solid" name="date" id="date" value="{{ old('date', $proformaInvoice->date ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Sales Person</span>
                                                <div class="error-message" style="color: red;"></div>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="sale_person" id="sale_person" aria-label="Select a Sale Person" data-control="select2" data-placeholder="Select a sale Person..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($sales as $sale)
                                                            <option value="{{$sale->userid}}"
                                                                @isset($proformaInvoice)
                                                                    @if ($proformaInvoice->sales_person_id == $sale->userid)
                                                                        selected
                                                                    @endif
                                                                @endisset
                                                                @if (old('sale_person') == "{{$sale->userid}}") {{ 'selected' }} @endif>{{$sale->fullname}}
                                                            </option>
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
                                                <span class="required">Consigner</span>
                                                <div class="error-message" style="color: red;"></div>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="consigner" id="consigner" aria-label="Select a Consigner" data-control="select2" data-placeholder="Select a Consigner..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($companies as $item)
                                                            <option value="{{$item->id}}"
                                                                @isset($proformaInvoice)
                                                                    @if ($proformaInvoice->consigner_id == $item->id)
                                                                        selected
                                                                    @endif
                                                                @endisset
                                                                @if (old('consigner') == "{{$item->id}}") {{ 'selected' }} @endif>{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Consignee</span>
                                                <div class="error-message" style="color: red;"></div>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="consignee" id="consignee" aria-label="Select a Consignee" data-control="select2" data-placeholder="Select a Consignee..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($customers as $customer)
                                                            <option value="{{$customer->id}}"
                                                                @isset($proformaInvoice)
                                                                    @if ($proformaInvoice->consignee_id == $customer->id)
                                                                        selected
                                                                    @endif
                                                                @endisset
                                                                @if (old('consignee') == "{{$customer->id}}") {{ 'selected' }} @endif>{{$customer->customer_name}}</option>
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
                                                <span class="required">Delivery Address</span>
                                                <div class="error-message" style="color: red;"></div>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="delivery_address" id="delivery_address" aria-label="Select a Delivery Address" data-control="select2" data-placeholder="Select a Delivery Address..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="selected_company_bank" @if ($proformaInvoice) value="{{$proformaInvoice->company_bank_id}}"
                                    @endif>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Company Bank</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="company_bank" id="company_bank" aria-label="Select a Company Bank" data-control="select2" data-placeholder="Select a Company Bank..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
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
                                                <span class="">Quotation Reference</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="quotation_reference" id="quotation_reference" readonly value="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Quotation Date</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="quotation_date" id="quotation_date" readonly value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">PO Number</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="po_number" id="po_number" value="{{ old('po_number', $proformaInvoice->po_no ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">PO Date</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="po_date" id="po_date" value="{{ old('po_date', $proformaInvoice->po_date ?? '') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Mode of Dispatch</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="mode_of_dispatch" id="mode_of_dispatch" aria-label="Select a Mode of Dispatch" data-control="select2" data-placeholder="Select a Mode of Dispatch..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        <option value="1"
                                                            @isset($proformaInvoice)
                                                                @if ($proformaInvoice->mode_of_dispatch == 1)
                                                                    selected
                                                                @endif
                                                            @endisset>Road
                                                        </option>
                                                        <option value="2" @isset($proformaInvoice)
                                                        @if ($proformaInvoice->mode_of_dispatch == 2)
                                                            selected
                                                        @endif
                                                    @endisset>Air</option>
                                                        <option value="3" @isset($proformaInvoice)
                                                        @if ($proformaInvoice->mode_of_dispatch == 3)
                                                            selected
                                                        @endif
                                                    @endisset>Sea</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">

                                        </div>
                                    </div>
                                </div>
                                <div class="separator mb-6"></div>

                                <div class="local" style="display:none;">
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Buyer(If other than consignee) </span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <!--begin::Select2-->
                                                            <select name="buyer" id="buyer" aria-label="Select a Buyer" data-control="select2" data-placeholder="Select a Buyer..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($customers as $customer)
                                                                    <option value="{{$customer->id}}"
                                                                             @isset($proformaLocal) @if(count($proformaLocal) != 0)  @if ($proformaLocal[0]->buyer == $customer->id)
                                                                                selected
                                                                            @endif @endif  @endisset
                                                                        @if (old('buyer') == "{{$customer->id}}") {{ 'selected' }} @endif>{{$customer->customer_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>

                                <div class="oversis" style="display:none;">
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Notify Party</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <!--begin::Select2-->
                                                            <select name="notify_party" id="notify_party" aria-label="Select a Notify Party" data-control="select2" data-placeholder="Select a Notify Party..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($customers as $customer)
                                                                    <option value="{{$customer->id}}"  @isset($proformaOversis) @if(count($proformaOversis) != 0) @if ($proformaOversis[0]->notify_party == $customer->id)
                                                                            selected
                                                                        @endif @endif @endisset
                                                                        @if (old('consign e') == "{{$customer->id}}") {{ 'selected' }} @endif>{{$customer->customer_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Country Of Origin</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <!--begin::Select2-->
                                                            <select name="country_of_origin" id="country_of_origin" aria-label="Select a Country Of Origin" data-control="select2" data-placeholder="Select a Country Of Origin..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{$country->id}}"   @isset($proformaOversis) @if(count($proformaOversis) != 0) @if ($proformaOversis[0]->country_origin == $country->id)
                                                                        selected
                                                                    @endif @endif @endisset >{{$country->description}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Country Of Destination</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <select name="country_of_destination" id="country_of_destination" aria-label="Select a Country Of Destination" data-control="select2" data-placeholder="Select a Country Of Destination..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{$country->id}}"  @isset($proformaOversis) @if(count($proformaOversis) != 0)  @if ($proformaOversis[0]->country_destination == $country->id)
                                                                        selected
                                                                    @endif @endif @endisset>{{$country->description}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Precarriage By</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <select name="precarriage_by" id="precarriage_by" aria-label="Select a Precarriage By" data-control="select2" data-placeholder="Select a Precarriage By..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                <option value="1"  @isset($proformaOversis) @if(count($proformaOversis) != 0) @if ($proformaOversis[0]->precarriage == 1)
                                                                    selected
                                                                @endif  @endif @endisset>Road</option>
                                                                <option value="2"  @isset($proformaOversis)  @if(count($proformaOversis) != 0) @if ($proformaOversis[0]->precarriage == 2)
                                                                    selected
                                                                @endif @endif  @endisset>Air</option>
                                                                <option value="3"  @isset($proformaOversis) @if(count($proformaOversis) != 0) @if ($proformaOversis[0]->precarriage == 3)
                                                                    selected
                                                                @endif @endif  @endisset>Sea</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Place Of Receipt</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <!--begin::Select2-->
                                                            <select name="place_of_receipt" id="place_of_receipt" aria-label="Select a Place Of Receipt" data-control="select2" data-placeholder="Select a Place Of Receipt..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($cities as $city)
                                                                    <option value="{{$city->id}}"  @isset($proformaOversis) @if(count($proformaOversis) != 0)  @if ($proformaOversis[0]->place_of_receipt == $city->id)
                                                                        selected
                                                                    @endif @endif @endisset>{{$city->description}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Vessel/FI No.</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-solid" name="vessel" id="vessel" value="{{ old('vessel', $proformaOversis[0]->vessel ?? '') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Port Of Loading</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <!--begin::Select2-->
                                                            <select name="port_of_loading" id="port_of_loading" aria-label="Select a Port Of Loading" data-control="select2" data-placeholder="Select a Port Of Loading..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($cities as $city)
                                                                    <option value="{{$city->id}}"  @isset($proformaOversis) @if(count($proformaOversis) != 0)  @if ($proformaOversis[0]->port_loading == $city->id)
                                                                        selected
                                                                    @endif @endif @endisset>{{$city->description}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Port Of Discharge</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <select name="port_of_discharge" id="port_of_discharge" aria-label="Select a Port Of Discharge" data-control="select2" data-placeholder="Select a Port Of Discharge..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($cities as $city)
                                                                    <option value="{{$city->id}}"  @isset($proformaOversis) @if(count($proformaOversis) != 0)  @if ($proformaOversis[0]->port_discharge == $city->id)
                                                                        selected
                                                                    @endif @endif @endisset>{{$city->description}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span class="">Final Destination</span>
                                                    </label>
                                                    <div class="w-100">
                                                        <div class="form-floating border rounded">
                                                            <select name="final_destination" id="final_destination" aria-label="Select a Final Destination" data-control="select2" data-placeholder="Select a Final Destination..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($cities as $city)
                                                                    <option value="{{$city->id}}"  @isset($proformaOversis) @if(count($proformaOversis) != 0)   @if ($proformaOversis[0]->final_destination == $city->id)
                                                                        selected
                                                                    @endif @endif @endisset>{{$city->description}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- @endisset --}}
                                </div>

                                <div class="separator mb-6"></div>

                                <div class="field_wrapper">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table" id="table" >
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-gray-800">
                                                        <th>Sr.No.</th>
                                                        <th><span>Product Category</span></th>
                                                        <th><span>Item</span></th>
                                                        <th><span>Size</span></th>
                                                        <th>Description</th>
                                                        <th>HSN Code</th>
                                                        <th><span>Quantity</span></th>
                                                        <th><span>Unit</span></th>
                                                        <th><span>Rate</span></th>
                                                        <th><span>Amount</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($products)
                                                            @foreach ($products as $key => $product)
                                                            @php
                                                                $key = $key+1
                                                            @endphp
                                                            <tr>
                                                                <td>{{ $key }}</td>
                                                                <td>
                                                                    <select name="product_category[]" data-id="{{ $key }}" id="product_category_{{ $key }}" aria-label="Select a Product Category" data-control="select2" data-placeholder="Select a Product Category..."  class="product_category form-select form-select-solid lh-1 py-3 select2-dropdown w-90"  data-selected-category="{{ $product->category_id }}">
                                                                        <option value="">Select</option>
                                                                        @foreach ($product_category as $category)
                                                                            <option value="{{ $category->id }}" @if ($product->category_id == $category->id)
                                                                                selected
                                                                            @endif>{{ $category->product_category }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" name="" id="product_item_{{ $key }}" data-id="{{ $key }}" value="{{ $product->product_id }}" >
                                                                    <select name="item[]" id="item_{{ $key }}" data-id="{{ $key }}" aria-label="Select a Item" data-control="select2" data-placeholder="Select a Item..."  class="item form-select form-select-solid lh-1 py-3 select2-dropdown w-90" data-selected-item="{{ $product->product_id }}">
                                                                        <option value="">Select</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" name="" id="product_size_{{ $key }}" data-id="{{ $key }}" value="{{ $product->size_id }}">

                                                                    <select name="size[]" id="size_{{ $key }}" data-id="{{ $key }}" aria-label="Select a Size" data-control="select2" data-placeholder="Select a Size..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown" data-selected-size="{{ $product->size_id }}">
                                                                        <option value="">Select</option>
                                                                    </select>
                                                                </td>
                                                                <td> <textarea name="desc[]" id="desc_{{ $key }}" cols="32" rows="2" class= desc">{{ $product->description }}</textarea></td>
                                                                <td><input type="text" name="hsn_code[]" step=".01"  step="any" id="hsn_code_{{ $key }}" value="" placeholder="Please Enter HSN Code" class="hsn"></td>
                                                                <td><input type="number" name="qty[]" class="qty" step=".01"  data-id="{{ $key }}" step="any" id="qty_{{ $key }}" value="{{ $product->qty }}" placeholder="Please Enter Quantity"></td>
                                                                <td><input type="number" name="rate[]" class="rate" step=".01" data-id="{{ $key }}"  step="any" id="rate_{{ $key }}" value="{{ $product->rate }}" placeholder="Please Enter Rate"></td>
                                                                <td>
                                                                    <select name="unit[]" id="unit_{{ $key }}" aria-label="Select a Unit" data-control="select2" data-placeholder="Select a Unit..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                        <option value="">Select</option>
                                                                        @foreach ($units as $item)
                                                                            <option value="{{ $item->id }}" @if ($product->unit_id == $item->id)
                                                                                selected
                                                                            @endif>{{ $item->description }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td><input type="number" name="amount[]" class="amount" data-id="{{ $key }}" step=".01"  step="any" id="amount_{{ $key }}" value="{{ $product->amount }}" placeholder="Please Enter amount" readonly></td>
                                                            </tr>
                                                            @endforeach
                                                    @endisset
                                                    @empty($products)
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <select name="product_category[]" data-id="1" id="product_category_1" aria-label="Select a Product Category" data-control="select2" data-placeholder="Select a Product Category..."  class=" product_category form-select form-select-solid lh-1 py-3 select2-dropdown w-90">
                                                                    <option value="">Select</option>
                                                                    @foreach ($product_category as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->product_category }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="item[]" id="item_1" data-id="1" aria-label="Select a Item" data-control="select2" data-placeholder="Select a Item..."  class="item form-select form-select-solid lh-1 py-3 select2-dropdown w-90">
                                                                    <option value="">Select</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="size[]" id="size_1" data-id="1" aria-label="Select a Size" data-control="select2" data-placeholder="Select a Size..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                    <option value="">Select</option>
                                                                </select>
                                                            </td>
                                                            <td> <textarea name="desc[]" id="desc_1" cols="32" rows="2" class= desc"></textarea></td>
                                                            <td><input type="text" name="hsn_code[]" step=".01"  step="any" id="hsn_code_1" value="" placeholder="Please Enter HSN Code" class="hsn"></td>
                                                            <td><input type="number" name="qty[]" class="qty" step=".01" data-id="1"  step="any" id="qty_1" value="" placeholder="Please Enter Quantity"></td>
                                                            <td>
                                                                <select name="unit[]" id="unit_1" aria-label="Select a Unit" data-control="select2" data-placeholder="Select a Unit..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                    <option value="">Select</option>
                                                                    @foreach ($units as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->description }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td><input type="number" name="rate[]" class="rate" step=".01" data-id="1" step="any" id="rate_1" value="" placeholder="Please Enter Rate"></td>
                                                            <td><input type="number" name="amount[]" class="amount"  step=".01" data-id="1"  step="any" id="amount_1" value="" placeholder="Please Enter amount" readonly></td>
                                                        </tr>
                                                    @endempty
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-circle" style="color:#21a7f8 " aria-hidden="true" ></i> Add More</a>
                                    </div>
                                </div>

                                <div class="separator mb-6"></div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Total</span>
                                            </label>
											<input type="number" class="form-control form-control-solid" name="total" id="total" value="{{ old('total', $proformaInvoice->total ?? '') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Currency</span>
                                            </label>
											<select name="currency" id="currency" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a Currency..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                <option value="">Select</option>
                                                @foreach ($currency as $item)
                                                    <option value="{{$item->id}}"  @isset($proformaInvoice)
                                                        @if ($proformaInvoice->currency_id == $item->id)
                                                            selected
                                                        @endif
                                                    @endisset>{{$item->description}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator mb-6"></div>

                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3 class="card-title">Tax Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="oversis" style="display:none;">
                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">Air Freight</span>
                                                            </label>
                                                            <input type="number" class="form-control form-control-solid" name="air_freight" id="air_freight" value="{{ old('air_freight',   $proformaOversis[0]->air_freight ?? '') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">Sea Freight</span>
                                                            </label>
                                                            <input type="number" class="form-control form-control-solid" name="sea_freight" id="sea_freight" value="{{ old('sea_freight',   $proformaOversis[0]->sea_freight ?? '') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">Admin Cost</span>
                                                            </label>
                                                            <input type="number" class="form-control form-control-solid" name="admin_cost" id="admin_cost" value="{{ old('admin_cost',   $proformaOversis[0]->admin_cost ?? '') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">Bank Charges</span>
                                                            </label>
                                                            <input type="number" class="form-control form-control-solid" name="bank_charges" id="bank_charges" value="{{ old('bank_charges',   $proformaOversis[0]->bank_charges ?? '') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">Correspondent Bank</span>
                                                            </label>
                                                            <input type="text" class="form-control form-control-solid" name="correspondent_bank" id="correspondent_bank" value="{{ old('correspondent_bank',   $proformaOversis[0]->correspondent_bank ?? '') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">Account No</span>
                                                            </label>
                                                            <input type="text" class="form-control form-control-solid" name="account_no" id="account_no" value="{{ old('account_no',   $proformaOversis[0]->account_no ?? '') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">Location</span>
                                                            </label>
                                                            <input type="text" class="form-control form-control-solid" name="location" id="location" value="{{ old('location',  $proformaOversis[0]->location ?? '') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="fv-row mb-7">
                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                <span class="">SWIFT/BIC CODE</span>
                                                            </label>
                                                            <input type="text" class="form-control form-control-solid" name="bic_code" id="bic_code" value="{{ old('bic_code',   $proformaOversis[0]->swift ?? '') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- @endisset --}}
                                        </div>
                                        <div class="local" style="display:none;">
                                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                                                <div class="col">
                                                    <div class="fv-row mb-7">
                                                        <div class="row mw-500px mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio" value="1"  @isset($proformaLocal) @if(count($proformaLocal) != 0) @if ($proformaLocal[0]->is_paid == 1)
                                                                            checked
                                                                        @endif @endif  @endisset  name="to_paid"/>
                                                                        <div class="form-check-label">
                                                                            Paid
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>

                                                            <div class="col-4">
                                                                <label class="form-check-image">
                                                                    <div class="form-check form-check-custom form-check-solid me-10">
                                                                        <input class="form-check-input" type="radio" value="2"  @isset($proformaLocal) @if(count($proformaLocal) != 0) @if ($proformaLocal[0]->is_paid == 2)
                                                                        checked
                                                                    @endif @endif @endisset name="to_paid" />
                                                                        <div class="form-check-label">
                                                                            To Pay
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col" style="display:none;" id="paid_div">
                                                    <div class="fv-row mb-7">
                                                        <label class="fs-6 fw-bold form-label mt-3">
                                                            <span class="">Paid</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" name="paid" id="paid_text" value="{{ old('paid',$proformaLocal[0]->paid_text ?? '') }}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="fv-row mb-7">
                                                        <label class="fs-6 fw-bold form-label mt-3">
                                                            <span class="">Tax Name</span>
                                                        </label>
                                                        <select name="tax_name" id="tax_name" aria-label="Select a Tax Name" data-control="select2" data-placeholder="Select a Tax Name..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                            @foreach ($tax as $item)
                                                                <option value="{{$item->id}}"
                                                                     @isset($proformaLocal) @if(count($proformaLocal) != 0) @if ($proformaLocal[0]->tax_id == $item->id)
                                                                        selected
                                                                    @endif @endif @endisset>{{$item->tax_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="fv-row mb-7">
                                                        <label class="fs-6 fw-bold form-label mt-3">
                                                            <span class="">Tax Amount</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" name="tax_amount" id="tax_amount" readonly value="{{ old('total', $proformaLocal[0]->tax_amount ?? '') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @endisset --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="separator mb-6"></div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Total Amount</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="total_amount" id="total_amount" value="{{ old('total_amount', $proformaInvoice->total_amount ?? '') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Rounded Total Amount</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="rounded_total_amount" id="rounded_total_amount" value="{{ old('total_amount', $proformaInvoice->rounded_total_amount ?? '') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <button id="cal_button" style="margin-top: 35px;" class="btn btn-info"><i class="fa fa-calculator" aria-hidden="true"></i>Calculate</button>

                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Terms of Payment</span>
                                            </label>
                                            <select name="terms_of_payment[]" id="terms_of_payment" aria-label="Select a Terms of Payment" data-control="select2" data-placeholder="Select a Terms of Payment..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown w-90" multiple>
                                                <option value="">Select</option>
                                                @foreach ($payment_terms as $item)
                                                    <option value="{{$item->id}}" @isset($paymentTerms)
                                                        @if (in_array($item->id, $paymentTerms))
                                                            selected
                                                        @endif
                                                    @endisset>{{$item->term_value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Terms of Delivery</span>
                                            </label>
                                            <select name="terms_of_delivery[]" id="terms_of_delivery" aria-label="Select a Terms of Delivery" data-control="select2" data-placeholder="Select a Terms of Delivery..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown w-90" multiple>
                                                <option value="">Select</option>
                                                @foreach ($delivery as $item)
                                                    <option value="{{$item->id}}" @isset($delivery_terms)
                                                        @if (in_array($item->id, $delivery_terms))
                                                            selected
                                                        @endif
                                                    @endisset>{{$item->term_value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="error-messages-container"></div>
                                <div class="separator mb-6"></div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset"  onclick="history.back()" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" data-kt-contacts-type="submit" id="submit" class="btn btn-primary">
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
    $(document).ready(function() {
        console.log('Proforma-Invoice-Add/Edit Blade');

        $('.select2-dropdown').select2();

        // Radio button whether it's Oversis or Local
        $('input[name="type"]').on('click',function(e){
            var typeVal = $(this).val();
            console.log('Selected Type: '+ typeVal);
            if(typeVal == 1){
                $('.oversis').show();
                $('.local').hide();
            }else if(typeVal == 2){
                $('.local').show();
                $('.oversis').hide();
            }
        });
        var type = $("[name='type'][checked]").attr("value");
        if(type == 1){
            $('.oversis').show();
            $('.local').hide();
        }else if(type == 2){
            $('.local').show();
            $('.oversis').hide();
        }

        $('input[name="to_paid"]').on('click',function(e){
            var paidVal = $(this).val();
            console.log('Selected Paid Type: '+ paidVal);
            if(paidVal == 1){
                $('#paid_div').show();
            }else if(paidVal == 2){
                $('#paid_div').hide();
            }
        });
        var paidVal = $("[name='to_paid'][checked]").attr("value");
        if(paidVal == 1){
            $('#paid_div').show();
        }else if(paidVal == 2){
            $('#paid_div').hide();
        }

        $('#consigner').on('change',function(e){
            var id = $(this).val();
            var selected_bank = $('#selected_company_bank').val();
            console.log("consigner Selected: "+id);
            jQuery.ajax({
                url: "{{route('get-company-bank-detail')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#company_bank').empty();
                    $('#company_bank').append('<option selected value="">Please Select Bank</option>');
                    $.each(data, function(key, value) {
                        if(selected_bank == value.id){
                            $('#company_bank').append('<option selected value="'+value.id+'">'+value.bank_name+'</option>');
                        }else{
                            $('#company_bank').append('<option value="'+value.id+'">'+value.bank_name+'</option>');
                        }
                    });
                }
            });
        });
        $('#consigner').trigger("change");

        $('#quotation').on('change',function(e){
            var id = $(this).val();
            $('#quotation_reference').val('');
            $('#quotation_date').val('');
            console.log("quotation Selected: "+id);
            jQuery.ajax({
                url: "{{route('get-quotation-detail')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data.reference);
                    console.log(data.date);
                    $('#quotation_reference').val(data.reference);
                    $('#quotation_date').val(data.date);
                    $("#quotation_date").daterangepicker({
                        locale: {
                                    format: 'DD-MM-YYYY',
                                },
                        singleDatePicker: true,
                        showDropdowns: true,
                        autoUpdateInput: false,
                        minYear: 2015,
                    });
                }
            });
        });
        $('#quotation').trigger("change");

        $('#consignee').on('change',function(e){
            var id = $(this).val();
            console.log("consignee Selected: "+id);
            jQuery.ajax({
                url: "{{route('get-customer-delivery')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#delivery_address').empty();
                    $.each(data, function(key, value) {
                        $('#delivery_address').append('<option selected value="'+value.id+'">'+value.delivery_location+'</option>');
                    });
                }
            });
        });
        $('#consignee').trigger("change");

        $('#tax_name').on('change',function(e){
            var id = $(this).val();
            console.log("tax_name Selected: "+id);
            jQuery.ajax({
                url: "{{route('get-tax-value')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    let total =  parseFloat($('#total').val()) || 0;
                    let paid =  parseFloat($("#paid_text").val()) || 0;
                    let tax_amount =  parseFloat(data)/100;
                    let cal = total + paid;
                    let show_tax_amount = ((cal) * (parseFloat(data)/100));
                    $('#tax_amount').val(show_tax_amount.toFixed(2));
                }
            });
        });
        $('#tax_name').trigger("change");

        $(document).on('change', '.product_category', function() {
            var id = $(this).val();
            var dataId = $(this).data('id');
            var selectedProduct = $('#product_item_' + dataId).val();

            jQuery.ajax({
                url: "{{route('get-product-category-items')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#item_' + dataId).empty();
                    if (!selectedProduct) {
                        $('#item_' + dataId).append('<option value="">Please Select</option>');
                    }
                    $.each(data, function(key, value) {
                        if (selectedProduct == value.id) {
                            $('#item_' + dataId).append('<option selected value="' + value.id + '">' + value.product_type + '</option>');
                            console.log('Check ' + dataId);
                        } else {
                            $('#item_' + dataId).append('<option value="' + value.id + '">' + value.product_type + '</option>');
                        }
                    });

                    // Trigger the change event on item element
                    $('#item_' + dataId).trigger("change");
                }
            });
        });

        $(document).on('change', '.item', function() {
            var id = $(this).val();
            var dataId = $(this).data('id');
            var selectedSize = $('#product_size_' + dataId).val();
            var cat_id = $('#product_category_' + dataId).val();
            console.log('Selected_size: ' + selectedSize + ' dataId: ' + dataId);

            jQuery.ajax({
                url: "{{route('get-product-category-size')}}",
                data: {
                    'product_id': id,
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#size_' + dataId).empty();
                    $.each(data, function(key, value) {
                        if (selectedSize == value.id) {
                            $('#size_' + dataId).append('<option selected value="' + value.id + '">' + value.product_size + '</option>');
                        } else {
                            $('#size_' + dataId).append('<option value="' + value.id + '">' + value.product_size + '</option>');
                        }
                    });
                }
            });

            jQuery.ajax({
                url: "{{route('get-product-category-hsn')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#hsn_code_' + dataId).val(data);
                }
            });
        });

        // Trigger the change event on product_category elements
        $('.product_category').trigger("change");

        function calculateSum() {
            var product_amount = $('.amount');
            var value1 = product_amount.eq(0).val();
            var sum = 0;
            product_amount.each(function() {
                var value = $(this).val();
                if (value !== '') {
                    sum += parseFloat(value);
                }
            });
            console.log('The sum of all product amount: ' + sum);
            $('#total').val(parseFloat(sum));
        }

        let calId = total = cal = '';
        $(document).on('keyup','.qty',function() {
            calId = $(this).data('id');
            let qty = parseFloat($('#qty_'+calId).val());
            let rate = parseFloat($('#rate_'+calId).val());
            cal = parseFloat(rate) * parseFloat(qty);
            console.log('Key Up of qty: '+calId+'rate: '+rate+'qty: '+qty+'amount:'+cal+'total:'+total);
            $('#amount_'+calId).val(parseFloat(cal));
            calculateSum();
        });
        $('.qty').keyup();

        $(document).on('keyup','.rate',function() {
            calId = $(this).data('id');
            let qty = parseFloat($('#qty_'+calId).val());
            let rate = parseFloat($('#rate_'+calId).val());
            cal = parseFloat(rate) * parseFloat(qty);
            console.log('Key Up of Rate: '+calId+'rate: '+rate+'qty: '+qty+'amount:'+cal+'total:'+total);
            $('#amount_'+calId).val(parseFloat(cal));
            calculateSum();
        });
        $('.rate').keyup();

        //Calculate Button
        $('#cal_button').click(function(e) {
            e.preventDefault();
            let sum = 0;
            let type = $("input[name='type']:checked").val();

            if (type == 1) {
                let product_total = parseFloat($("#total").val()) || 0;
                let air_freight = parseFloat($("#air_freight").val()) || 0;
                let sea_freight = parseFloat($("#sea_freight").val()) || 0;
                let admin_cost = parseFloat($("#admin_cost").val()) || 0;
                let bank_charges = parseFloat($("#bank_charges").val()) || 0;

                sum = product_total + air_freight + sea_freight + admin_cost + bank_charges;
            } else if (type == 2) {
                let paid = parseFloat($("#paid_text").val()) || 0;
                let tax_amount = parseFloat($("#tax_amount").val()) || 0;
                let product_total = parseFloat($("#total").val()) || 0;

                let tax = tax_amount;
                if (paid) {
                    sum = product_total + paid + tax;
                } else {
                    sum = product_total + tax;
                }
            }

            $('#total_amount').val(sum.toFixed(2));
            let round = Math.ceil(sum);
            $('#rounded_total_amount').val(round);
            console.log("Type: " + type + " Total Amount: " + sum + " Rounded Total Amount: " + round);
        });

        // Trigger the calculation when the page loads
        $("#cal_button").click();


        //Add more
        var x = 1; //Initial field counter is 1
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.table'); //Input field wrapper
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                var fieldHTML = `<tr>
                                    <td>${ x }</td>
                                    <td>
                                        <select name="product_category[]" data-id="${x}" id="product_category_${x}" aria-label="Select a Product Category" data-control="select2" data-placeholder="Select a Product Category..."  class=" product_category form-select form-select-solid lh-1 py-3 select2-dropdown w-90">
                                                                    <option value="">Select</option>
                                                                    @foreach ($product_category as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->product_category }}</option>
                                                                    @endforeach
                                                                </select>
                                                        </td>
                                                        <td>
                                                            <select name="item[]" id="item_${x}" data-id="${x}" aria-label="Select a Item" data-control="select2" data-placeholder="Select a Item..."  class="item form-select form-select-solid lh-1 py-3 select2-dropdown w-90">
                                                                    <option value="">Select</option>
                                                                </select>
                                                        </td>
                                                        <td>
                                                            <select name="size[]" id="size_${ x }" data-id="${x}" aria-label="Select a Size" data-control="select2" data-placeholder="Select a Size..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                // @foreach ($size as $item)
                                                                //     <option value="{{ $item->id }}">{{ $item->product_size }}</option>
                                                                // @endforeach
                                                            </select>
                                                        </td>
                                                        <td> <textarea name="desc[]" id="desc_${ x }" cols="32" rows="2" class= desc"></textarea></td>
                                                        <td><input type="text" name="hsn_code[]" step=".01"  step="any" id="hsn_code_${ x }" value="" placeholder="Please Enter HSN Code"></td>
                                                        <td><input type="number" name="qty[]" class="qty" step=".01" data-id="${x}" step="any" id="qty_${x}" value="" placeholder="Please Enter Quantity"></td>
                                                        <td>
                                                            <select name="unit[]" id="unit_${ x }" aria-label="Select a Unit" data-control="select2" data-placeholder="Select a Unit..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                <option value="">Select</option>
                                                                @foreach ($units as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->description }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="rate[]" class="rate" step=".01" data-id="${x}" step="any" id="rate_${x}" value="" placeholder="Please Enter Rate"></td>
                                                        <td><input type="number" name="amount[]" class="amount"  step=".01" data-id="${x}"  step="any" id="amount_${ x }" value="" placeholder="Please Enter amount" readonly></td>
                                    <td><a href="javascript:void(0);" class="remove_button" style="coloe:red;"><i class="fa fa-minus-circle" aria-hidden="true" style="color: red;"></i></a></td>
                                </tr>`;
                $(wrapper).append(fieldHTML);
                 //Add field html
                 $('.select2-dropdown').select2();
            }
        });


        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).closest('tr').remove(); //Remove field html
            x--; //Decrement field counter
        });

        $("#date").daterangepicker({
            locale: {
                        format: 'DD-MM-YYYY',
                    },
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 2015,
            minDate: new Date(),
            maxDate: new Date()
        });

        $("#po_date").daterangepicker({
            locale: {
                        format: 'DD-MM-YYYY',
                    },
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 2015,
            autoUpdateInput: false,
            // minDate: new Date(),
            // maxDate: new Date()
        });

        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);

        $('.product_category').each(function(index) {
            const dataId = $(this).data('id');
        });
        $(".form").validate({
            rules: {
                consigner: {
                    required: true,
                },
                date: {
                    required: true,
                },
                sale_person: {
                    required: true,
                },
                consignee: {
                    required: true,
                },
                delivery_address: {
                    required: true,
                },
                // company_bank: {
                //     required: true,
                // },
                // "product_category[]": {
                //     required: true,
                // },
                // "item[]": {
                //     required: true,
                // },
                // "size[]": {
                //     required: true,
                // },
                // "qty[]": {
                //     required: true,
                // },
                // "rate[]": {
                //     required: true,
                // },
                // "unit[]": {
                //     required: true,
                // },
                // "amount[]": {
                //     required: true,
                // },
            },
            messages: {
                consigner: {
                    required: "Please Select Consigner",
                },
                date: {
                    required: "Please Select the Date",
                },
                sale_person: {
                    required: "Please Select the Sales Person",
                },
                consignee: {
                    required: "Please Select consignee",
                },
                delivery_address: {
                    required: "Please Select Delivery Address",
                },
            //     "product_category[]": {
            //         required: {
            //         depends: function(element) {
            //             return isEmpty($(element).data("id"));
            //         },
            //         param: true,
            //         // Use the function to set the custom message for array fields
            //         // Pass the element and the label name as arguments
            //         // {0} will be replaced with the index number
            //         fn: function(element, label) {
            //             const index = $(element).data("id");
            //             return label + " is required for item " + index + ".";
            //         }
            //     }
            // },
            // "product_category[]": {
            //     required: "Product category is required for item {0}.",
            // },
            // "product_category[]": {
            //     required: function(element) {
            //         const index = $(element).data("id");
            //         return "Product category is required for item " + index + ".";
            //     },
            // },
            // "product_category[]": {
            //     required: function(element) {
            //         const index = $(element).data("id");
            //         return "Product category is required for item " + index + ".";
            //     },
            // },
                // "product_category[]": {
                //     required: "Product Category is required",
                // },
                // "item[]": {
                //     required: "Item is required",
                // },
                // "size[]": {
                //     required: "Size is required",
                // },
                // "qty[]": {
                //     required: "Quantity is required",
                // },
                // "rate[]": {
                //     required: "Rate is required",
                // },
                // "unit[]": {
                //     required: "Unit is required",
                // },
                // "amount[]": {
                //     required: "Amount is required",
                // },
            },
        //     errorPlacement: function(error, element) {
        //     if (element.is("[name*='[]']")) {
        //         const index = element.data("id");
        //         error.appendTo($('.error-messages-container')).text(error.text().replace(index + ".", ""));
        //     } else {
        //         error.insertAfter(element);
        //     }
        // },
            errorLabelContainer: '.error-messages-container',
            wrapper: 'div',
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit"). attr("disabled", true);
                var url ="";
                var record_id = frm_user.attr('data-id');
                if (!record_id) {
                    url = "{{route('proforma-invoice-store')}}";
                }else{
                    url = "{{route('proforma-invoice-update')}}";
                }
                console.log(record_id);
                $.ajax({
                    url: url,
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
                                window.location = "{{route('proforma-invoice')}}";
                            });
                        } else if(response == 3 ){
                            swal.fire({
                                title: "Empty Entry",
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
    });
</script>
@endpush
