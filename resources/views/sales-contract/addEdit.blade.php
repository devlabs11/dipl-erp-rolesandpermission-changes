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
                    Sales Contract
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
                            {{-- <form class="form">
                                @method('POST')
                                @csrf --}}
                                <form class="form" data-id="@isset($salesContract){{ $salesContract->id }}@endisset">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="id" id="sales_id" value="@isset($salesContract){{ $salesContract->id }}@endisset">
                                {{-- {{ $salesContract }} --}}
                                @isset($salesContract)
                                    {{-- <input type="hidden" name="id" value="{{$salesContract->id}}"> --}}
                                    <input type="hidden" name="" id="quotation_id" value="{{ $salesContract->quotation_id }}">
                                    <input type="hidden" name="" id="sales_person_id" value="{{ $salesContract->sales_person_id }}">
                                    <input type="hidden" name="" id="company_id" value="{{ $salesContract->company_id }}">
                                    <input type="hidden" name="" id="customer_id" value="{{ $salesContract->customer_id }}">
                                    <input type="hidden" name="" id="currency_id" value="{{ $salesContract->currency_id }}">
                                    <input type="hidden" name="" id="delivery_address_id" value="{{ $salesContract->delivery_address_id }}">
                                @endisset

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Quotation</span>
                                            </label>
                                            <select name="quotation" id="quotation" aria-label="Select a quotation" data-control="select2" data-placeholder="Select a quotation..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                <option value="">Select</option>
                                                @foreach ($quotations as $quotation)
                                                    <option value="{{$quotation->id}}"
                                                    @isset($salesContract)
                                                        @if ($salesContract->quotation_id == $quotation->id)
                                                            selected
                                                         @endif
                                                    @endisset
                                                    @if (old('quotation') == "{{$quotation->id}}") {{ 'selected' }} @endif
                                                    >{{$quotation->unique_id}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Company</span>
                                            </label>
                                            <select name="company" id="company" aria-label="Select a company" data-control="select2" data-placeholder="Select a company..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                <option value="">Select</option>
                                                @foreach ($companies as $item)
                                                    <option value="{{$item->id}}"
                                                        @if (old('company') == "{{$item->id}}") {{ 'selected' }} @endif>{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Sales Person</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="sale_person" id="sale_person" aria-label="Select a Sale Person" data-control="select2" data-placeholder="Select a sale Person..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($sales as $sale)
                                                            <option value="{{$sale->userid}}"
                                                                @if (old('sale_person') == "{{$sale->userid}}") {{ 'selected' }} @endif>{{$sale->fullname}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Date</span>
                                            </label>
											<input type="text" readonly  class="form-control form-control-solid" name="date" id="date" value="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Customer Name</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="customer" id="customer" aria-label="Select a Customer" data-control="select2" data-placeholder="Select a Customer..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($customers as $customer)
                                                            <option value="{{$customer->id}}"
                                                                @if (old('customer') == "{{$customer->id}}") {{ 'selected' }} @endif>{{$customer->customer_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Customer Delivery Address</span>
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
                                </div>
                                @isset($salesContract)
                                    <div class="field_wrapper">
                                        <div class="table-responsive">
                                            <table class="table" id="table">
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-gray-800">
                                                        <th>Sr.No.</th>
                                                        <th>Product</th>
                                                        <th>HSN</th>
                                                        <th>Description</th>
                                                        <th><span>Quantity</span></th>
                                                        <th><span>Rate Per Unit</span></th>
                                                        <th><span>Unit</span></th>
                                                        <th><span>Amount</span></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $items = json_decode($salesContract->product, true);
                                                        $hsn = json_decode($salesContract->hsn, true);
                                                        $description = json_decode($salesContract->description, true);
                                                        $qty = json_decode($salesContract->quantity, true);
                                                        $rate = json_decode($salesContract->rate, true);
                                                        $unit = json_decode($salesContract->unit, true);
                                                    @endphp
                                                    @foreach ($items as $key => $value)
                                                        <tr data-product-row="{{ $key }}">
                                                            <td>{{ $key }}</td>
                                                            <td>
                                                                <select name="item[{{ $key }}]" id="item_{{ $key }}" data-id="{{ $key }}" aria-label="Select a Item" data-control="select2" data-placeholder="Select a Item..."  class="item form-select form-select-solid lh-1 py-3 select2-dropdown w-90">
                                                                    <option value="">Select</option>
                                                                    @foreach ($products as $product)
                                                                        <option value="{{ $product->id }}" @if ($value == $product->id)
                                                                            {{ 'selected' }}
                                                                        @endif>{{ $product->product_type }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td><input type="text" name="hsn_code[{{ $key }}]" stid="hsn_code_{{ $key }}" value="{{ $hsn[$key] }}" placeholder="Please Enter HSN Code" class="hsn"></td>
                                                            <td><textarea name="description[{{ $key }}]" placeholder="Description" value="{{ $description[$key] }}"></textarea></td>
                                                            <td><input type="number" name="quantity[{{ $key }}]" placeholder="Quantity" value="{{ $qty[$key] }}" onchange="updateAmount({{ $key }})"></td>
                                                            <td><input type="number" name="unit_rate[{{ $key }}]" placeholder="Unit Rate" value="{{ $rate[$key] }}" onchange="updateAmount({{ $key }})"></td>
                                                            <td>
                                                                <div class="w-100">
                                                                    <div class="form-floating border rounded">
                                                                        <select name="unit[{{ $key }}]" id="unit{{ $key }}" aria-label="Select a unit" data-control="select2" data-placeholder="Select a unit..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                            <option value="">Select</option>
                                                                            @foreach ($units as $item)
                                                                                <option value="{{ $item->id }}" @if ($unit[$key] == $item->id)
                                                                                    {{ 'selected' }}
                                                                                @endif>{{ $item->description }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="amount">0.00</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4">Grand Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" name="grand_total" id="grandSum" value="0.00" readonly></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <a onclick="addProduct()" style="color: dodgerblue;"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add Product</a>

                                        </div>
                                    </div>
                                @endisset
                                @empty($salesContract)
                                    <div class="field_wrapper">
                                        <div class="table-responsive">
                                            <table class="table" id="table">
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-gray-800">
                                                        <th>Sr.No.</th>
                                                        <th>Product</th>
                                                        <th>HSN</th>
                                                        <th>Description</th>
                                                        <th><span>Quantity</span></th>
                                                        <th><span>Rate Per Unit</span></th>
                                                        <th><span>Unit</span></th>
                                                        <th><span>Amount</span></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-product-row="1">
                                                        <td>1</td>
                                                        <td>
                                                            <select name="item[1]" id="item_1" data-id="1" aria-label="Select a Item" data-control="select2" data-placeholder="Select a Item..."  class="item form-select form-select-solid lh-1 py-3 select2-dropdown w-90">
                                                                <option value="">Select</option>
                                                                @foreach ($products as $product)
                                                                    <option value="{{ $product->id }}">{{ $product->product_type }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input type="text" name="hsn_code[1]" step=".01"  step="any" id="hsn_code_1" value="" placeholder="Please Enter HSN Code" class="hsn"></td>
                                                        <td><textarea name="description[1]" placeholder="Description"></textarea></td>
                                                        <td><input type="number" name="quantity[1]" placeholder="Quantity" onchange="updateAmount(1)"></td>
                                                        <td><input type="number" name="unit_rate[1]" placeholder="Unit Rate" onchange="updateAmount(1)"></td>
                                                        <td>
                                                            <div class="w-100">
                                                                <div class="form-floating border rounded">
                                                                    <select name="unit[1]" id="unit" aria-label="Select a unit" data-control="select2" data-placeholder="Select a unit..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                                        <option value="">Select</option>
                                                                        @foreach ($units as $item)
                                                                            <option value="{{ $item->id }}">{{ $item->description }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="amount">0.00</td>
                                                        <td>
                                                            <a onclick="addMoreItemToProduct(1)" style="color: dodgerblue;"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Item</a> ||
                                                            <a onclick="addMoreToProduct(1)" style="color: dodgerblue;"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Quabtity/Rate</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4">Grand Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" name="grand_total" id="grandSum" value="0.00" readonly></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <a onclick="addProduct()" style="color: dodgerblue;"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add Product</a>
                                        </div>
                                    </div>
                                @endempty


                                <div class="separator mb-6"></div>
                                <input type="hidden" name="" id="company_bank_id" @isset($salesContract)
                                value="{{ $salesContract->company_bank_id }}"
                                @endisset >
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                                    <div class="col">
                                        <div class="fv-row mb-4">
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
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Bank Charges</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="bank_charges" id="bank_charges" @isset($salesContract)
                                                value="{{ $salesContract->bank_charges }}"
                                            @endisset >
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">SGS</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="sgs" id="sgs" @isset($salesContract)
                                                value="{{ $salesContract->sgs }}"
                                            @endisset >
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Currency</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select name="currency" id="currency" aria-label="Select a currency" data-control="select2" data-placeholder="Select a currency..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($currency as $item)
                                                                @if (old('currency') == "{{$item->id}}") {{ 'selected' }} @endif>{{$sale->fullname}}
                                                                <option value="{{$item->id}}"
                                                            >{{$item->description}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator mb-6"></div>
                                <div class="mb-10">
                                    <label for="" class=" form-label">Terms and Condition</label>
                                </div>
                                @isset($salesContract)
                                @php
                                    $port_of_discharge_selected = json_decode($salesContract->port_of_discharge, true) ?? [];
                                    $payment_terms_selected = json_decode($salesContract->payment_terms_id, true) ?? [];
                                    $delivery_terms_selected = json_decode($salesContract->delivery_terms_id, true) ?? [];
                                    $destination_selected = json_decode($salesContract->destination, true) ?? [];
                                    $jurisdiction_selected = json_decode($salesContract->jurisdiction_id, true) ?? [];
                                    $other_selected = json_decode($salesContract->other, true) ?? [];
                                @endphp
                                 @endisset
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Delivery Terms</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select multiple name="delivery_terms[]" id="delivery_terms" aria-label="Select a Customer" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($delivery as $item)
                                                            <option value="{{$item->id}}"
                                                                @isset($salesContract)
                                                                    @if (is_array($delivery_terms_selected) && in_array($item->id, $delivery_terms_selected)) {{ 'selected' }} @endif
                                                                @endisset
                                                                @if (old('delivery_terms') == "{{$item->id}}") {{ 'selected' }} @endif>{{$item->term_value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Payment Terms</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select multiple name="payment_terms[]" id="payment_terms" aria-label="Select a Customer" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($payment_terms as $payment)
                                                            <option value="{{$payment->id}}"  @isset($salesContract)
                                                                @if (is_array($payment_terms_selected) && in_array($payment->id, $payment_terms_selected)) {{ 'selected' }} @endif
                                                            @endisset @if (old('payment_terms') == "{{$payment->id}}") {{ 'selected' }} @endif>{{$payment->term_value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Port of Discharge</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select multiple name="port_of_discharge[]" id="port_of_discharge" aria-label="Select a Customer" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($port_of_discharge as $port)
                                                            <option value="{{$port->id}}" @isset($salesContract)
                                                                @if (is_array($port_of_discharge_selected) && in_array($port->id, $port_of_discharge_selected)) {{ 'selected' }} @endif
                                                                @endisset
                                                                @if (old('port_of_discharge') == "{{$port->id}}") {{ 'selected' }} @endif>{{$port->term_value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Final Destination</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select multiple name="destination[]" id="destination" aria-label="Select a Customer" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($final_destination as $final)
                                                            <option value="{{$final->id}}" @isset($salesContract)
                                                                @if (is_array($destination_selected) && in_array($final->id, $destination_selected)) {{ 'selected' }} @endif
                                                                @endisset
                                                                @if (old('destination') == "{{$final->id}}") {{ 'selected' }} @endif>{{$final->term_value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Jurisdiction</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select multiple name="jurisdiction[]" id="jurisdiction" aria-label="Select a Customer" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($jurisdiction as $item)
                                                            <option value="{{$item->id}}" @isset($salesContract)
                                                                @if (is_array($jurisdiction_selected) && in_array($item->id, $jurisdiction_selected)) {{ 'selected' }} @endif
                                                                @endisset
                                                                @if (old('jurisdiction') == "{{$item->id}}") {{ 'selected' }} @endif>{{$item->term_value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Other</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <select multiple name="other[]" id="other" aria-label="Select a other" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                                                        <option value="">Select</option>
                                                        @foreach ($other as $item)
                                                            <option value="{{$item->id}}" @isset($salesContract)
                                                                @if (is_array($other_selected) && in_array($item->id, $other_selected)) {{ 'selected' }} @endif
                                                                @endisset
                                                                @if (old('other') == "{{$item->id}}") {{ 'selected' }} @endif> {{$item->term_value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
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

function initializeSelect2() {
  $('[data-control="select2"]').select2();
}

  function updateAmount() {
    let grandSum = 0;
    let count = 1;
    $('#table tbody tr').each(function () {
      const productRow = $(this).data('product-row');
      const quantity = parseFloat($(this).find(`input[name="quantity[${productRow}]"]`).val()) || 0;
      const unitRate = parseFloat($(this).find(`input[name="unit_rate[${productRow}]"]`).val()) || 0;
      const amount = quantity * unitRate;
      grandSum += isNaN(amount) ? 0 : amount;
      $(this).find('.amount').text(amount.toFixed(2));
    });
    $('#grandSum').val(grandSum.toFixed(2));
  }

  function addMoreToProduct(productRow) {
    const newRow = `
      <tr data-product-row="${productRow}">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="number" name="quantity[${productRow}]" placeholder="Quantity" onchange="updateAmount()"></td>
        <td><input type="number" name="unit_rate[${productRow}]" placeholder="Unit Rate" onchange="updateAmount()"></td>
        <td></td>
        <td class="amount">0.00</td>
        <td><a onclick="removeProduct(this)"><i class="fa fa-minus-circle" aria-hidden="true" style="color: red;">Remove</i></a></td>
      </tr>
    `;
    $(`[data-product-row="${productRow}"]:last`).after(newRow);
    updateAmount();
  }

  function removeProduct(button) {
    const row = $(button).closest('tr');
    if ($('#table tbody tr').length > 1) {
      row.remove();
      updateAmount();
    }
  }
  let count = 1;
  function removeProduct1(productRow) {
    $(`[data-product-row="${productRow}"]`).remove();
    updateAmount();
    count--;
  }
  function addProduct() {
    const productRow = $('#table tbody tr').length + 1;
    const newRow = `
      <tr data-product-row="${productRow}">
        <td>${++count}</td>
        <td>
            <select name="item[${productRow}]" id="item_${productRow}" data-id="${productRow}" aria-label="Select an Item" data-control="select2" data-placeholder="Select an Item..." class="item form-select form-select-solid lh-1 py-3 select2-dropdown w-90">
                <option value="">Select</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_type }}</option>
                @endforeach
            </select>
        </td>
        <td><input type="text" name="hsn_code[${productRow}]" id="hsn_code_${productRow}" value="" placeholder="Please Enter HSN Code" class="hsn"></td>
        <td><textarea name="description[${productRow}]" placeholder="Description"></textarea></td>
        <td><input type="number" name="quantity[${productRow}]" placeholder="Quantity" onchange="updateAmount()"></td>
        <td><input type="number" name="unit_rate[${productRow}]" placeholder="Unit Rate" onchange="updateAmount()"></td>
        <td>
            <div class="w-100">
                <div class="form-floating border rounded">
                    <select name="unit[${productRow}]" id="unit_${productRow}" aria-label="Select a unit" data-control="select2" data-placeholder="Select a unit..."  class="form-select form-select-solid lh-1 py-3 select2-dropdown">
                        <option value="">Select</option>
                        @foreach ($units as $item)
                            <option value="{{ $item->id }}">{{ $item->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </td>
        <td class="amount">0.00</td>

        <td>
            <a onclick="removeProduct1(${productRow})"><i class="fa fa-minus-circle" aria-hidden="true" style="color: red;">Remove</i></a></td>
      </tr>
    `;
    $('#table tbody').append(newRow);
    $('#unit_'+`${productRow}`).select2();
    updateAmount();
    initializeSelect2();
  }


$(document).ready(function () {
    updateAmount();
    $('.select2-dropdown').select2();

    $("#date").daterangepicker({
        locale: {
            format: 'DD-MM-YYYY',
        },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 2015,
        maxDate: new Date(),
    });

    $(document).on('change', 'select.item', function() {
        var selectedValue = $(this).val(); // Get the selected value
        var productRow = $(this).data('id');
        console.log('Selected Value:', selectedValue+' productRow: '+productRow);
        jQuery.ajax({
            url: "{{route('get-product-hsn')}}",
            data: {
                id: selectedValue
            },
            type: 'GET',
            success: function(data) {
                console.log(data);
                $('#hsn_code_'+productRow).empty();
                console.log('#hsn_code_'+productRow);
                $('#hsn_code_'+productRow).val(data);
                // selectedValue = 0;
            }
        });
    });
    // $('select.item').trigger('change');

    $('#quotation').on('change',function(e){
        var id = $(this).val();
        var selected_company = '';
        var selected_currency = '';
        var selected_customer = '';
        var selected_sale = '';
        var salesContractId= $('#sales_id').val();

       selected_company = $("#company_id").val();
       selected_currency = $("#currency_id").val();
       selected_customer = $("#customer_id").val();
       selected_sale = $("#sales_person_id").val();

        console.log("quotation Selected: "+id);
        console.log("salesContractId Selected: "+salesContractId);
        jQuery.ajax({
            url: "{{route('get-quotation-detail-SC')}}",
            data: {
                id: id
            },
            type: 'GET',
            success: function(data) {
                console.log(data);
                data.quotation_products.forEach(function(product) {
                    console.log('Product ID:', product.id);
                    console.log('Product Description:', product.quotation_product_items[0].description);

                    // Loop through quotation product items
                    product.quotation_product_items.forEach(function(item) {
                        console.log('Item ID:', item.id);
                        console.log('Item Quantity:', item.qty);

                        // Loop through quotation product item multiple qty rates
                        item.quotation_product_item_multiple_qty_rates.forEach(function(rate) {
                            console.log('Rate ID:', rate.id);
                            console.log('Rate Quantity:', rate.qty);
                            console.log('Rate Price Per Unit:', rate.ppu);
                            console.log('Rate Total:', rate.total);
                        });
                    });
                });


                console.log(data.company_id+' -- company_id');
                console.log(data.currency_id+' -- currency_id');
                console.log(data.customer_id+' -- customer_id');
                console.log(data.sales_person_id+' -- sales_person_id');
                console.log(data.term_value+' -- term value');

                if(!salesContractId){
                    var selectedQuotationTermsValue = data.term_value;
                    var termsValueArray;
                    if (selectedQuotationTermsValue.includes(',')) {
                        termsValueArray = selectedQuotationTermsValue.split(',');
                    } else {
                        termsValueArray = [selectedQuotationTermsValue];
                    }
                    console.log('Terms Value JS Array: '+termsValueArray);

                    var dropdownIds = ['delivery_terms', 'payment_terms', 'port_of_discharge', 'destination', 'jurisdiction', 'other'];

                    dropdownIds.forEach(function(dropdownId) {
                        var dropdown = document.getElementById(dropdownId);
                        console.log(dropdownId+': dropdownId');

                        if (dropdown) {
                            Array.from(dropdown.options).forEach(function(option) {
                                if (termsValueArray.includes(parseInt(option.value))) {
                                    console.log('value: '+option.value);
                                    option.selected = true;
                                }
                            });
                            $('#'+dropdownId).select2().val(termsValueArray).trigger('change')
                        }
                    });
                }


                if(selected_currency){
                    $('#currency').val(selected_currency);
                }else{
                    $('#currency').val(data.currency_id);
                }

                if(selected_company){
                    $('#company').val(selected_company);
                }else{
                      $('#company').val(data.company_id);
                }

                if(selected_sale) {
                    $('#sale_person').val(selected_sale);
                }else{
                      $('#sale_person').val(data.sales_person_id);
                }

                if(selected_customer){
                    $('#customer').val(selected_customer);
                }else{
                      $('#customer').val(data.customer_id);
                }

                $('#currency').trigger("change");
                $('#company').trigger("change");
                $('#sale_person').trigger("change");
                $('#customer').trigger("change");

            }
        });
    });
    $('#quotation').trigger("change");

    $('#customer').on('change',function(e){
        var id = $(this).val();
        var selectedAddress = $('#delivery_address_id').val();
        console.log("customer Selected: "+id);
        jQuery.ajax({
            url: "{{route('get-customer-delivery')}}",
            data: {
                id: id
            },
            type: 'GET',
            success: function(data) {
                console.log(data);
                $('#delivery_address').empty();
                $('#delivery_address').append('<option selected value="">Please Select Delivery Address</option>');
                $.each(data, function(key, value) {
                    if(selectedAddress == value.id){
                        $('#delivery_address').append('<option selected value="'+value.id+'">'+value.delivery_location+'</option>');
                    }else{
                        $('#delivery_address').append('<option value="'+value.id+'">'+value.delivery_location+'</option>');
                    }
                });
            }
        });
    });
    $('#consignee').trigger("change");

    $('#company').on('change',function(e){
        var id = $(this).val();
        var selected_bank_id = $('#company_bank_id').val();
        console.log("company Selected: "+id);
        console.log("company selected_bank_id: "+selected_bank_id);

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
                    if (value.id == selected_bank_id) {
                        $('#company_bank').empty();
                        $('#company_bank').append('<option value="'+value.id+'">'+value.bank_name+'</option>');
                    } else {
                        $('#company_bank').append('<option value="'+value.id+'">'+value.bank_name+'</option>');
                    }

                });
            }
        });
    });
    $('#company').trigger("change");

    var sales_contract_form = $('.form');
    var form_error = $('.alert-danger', sales_contract_form);
    var form_success = $('.alert-success', sales_contract_form);

    $(".form").validate({
        submitHandler: function(form) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#submit').html('Please Wait...');
            $("#submit").attr("disabled", true);
            var url ="";
            var record_id = sales_contract_form.attr('data-id');
            if (!record_id) {
                url = "{{route('sales-contract-store')}}";
            }else{
                url = "{{route('sales-contract-update')}}";
            }
            $.ajax({
                url: url,
                type: "POST",
                data: sales_contract_form.serialize(),
                success: function( response ) {
                    console.log(response);
                    if(response == 1){
                        swal.fire({
                            title: "success!",
                            text: "Record has been submitted successfully",
                            type: "success"
                        }).then(function() {
                            window.location = "{{route('sales-contract')}}";
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
                    }
                    $('#submit').html('submit');
                    $("#submit").attr("disabled", false);
                }
            });
        }
    });
});
</script>
@endpush
{{-- <td>
    <a onclick="addMoreToProduct(${productRow})" style="color: dodgerblue;"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Quabtity/Rate</a>
</td> --}}
{{-- <td>
    <a onclick="addMoreToProduct(${productRow})" style="color: dodgerblue;"><i class="fa fa-plus-circle" aria-hidden="true" style="color: dodgerblue;"></i>Add More Quabtity/Rate</a></td>
<td> --}}
