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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Terms Conditions</h1>
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
                                <h2>Edit Terms Conditions</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            {{-- AA --}}
                            <form class="form" action="{{route('terms-condition-master-update',['id' => $termsCondition->id])}}" method="POST">
                                @method('POST')
                                @csrf

                                @if ($errors->any())
                                {{-- ssdsdsd --}}
                                    <div class="alert alert-danger">

                                        <ul>
                                            @foreach ($errors->all() as $message)
                                                <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{-- @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                                @endif --}}
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Category</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select name="category" id="terms_category" aria-label="Select a Category" data-control="select2" data-placeholder="Select a Category..."  class="form-select form-select-solid lh-1 py-3">
                                                        <option value="">Select</option>
                                                        @foreach ($category as $item )
                                                            <option value="{{$item->id}}" @if ($item->id == $termsCondition->categories_id)
                                                                selected
                                                            @endif>{{$item->name}}</option>
                                                        @endforeach
                                                        {{-- <option value="1">Regular</option>
                                                        <option value="2">Export</option>
                                                        <option value="3">Local</option>
                                                        <option value="4">CPS ---AMC</option> --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Term Title</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <input type="hidden" name="dfdf" id="term_title_hidden" value="{{$termsCondition->title_value_id}}">
                                                    <select name="term_title" id="term_title" aria-label="Select a Term Title" data-control="select2" data-placeholder="Select a Term Title..."  class="form-select form-select-solid lh-1 py-3">
                                                        <option value="">Select</option>
                                                        {{-- @foreach ($sales as $sale)
                                                            <option value="{{$sale->userid}}">{{$sale->fullname}}</option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-2">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Term Value</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                   <textarea name="term_value" id="term_value" cols="75" rows="5">{{$termsCondition->term_value}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator mb-6"></div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" id="cancel_btn" onclick="history.back()" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" id="submit" data-kt-contacts-type="submit" class="btn btn-primary">
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
