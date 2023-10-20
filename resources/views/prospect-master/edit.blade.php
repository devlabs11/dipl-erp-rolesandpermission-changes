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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add Prospect Master</h1>
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
                                <h2>Add New User</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <form class="form">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="id" value="{{$prospectMaster->id}}">
                                <div class="col">
                                    <div class="fv-row mb-7">
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="required">Company</span>
                                        </label>
                                        <input type="text" value="{{$prospectMaster->company}}" name="company" id="company" class="form-control form-control-solid">
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Contact Person Name</span>
                                            </label>
                                            <input type="text" value="{{$prospectMaster->contact_person}}" name="contact_person" id="contact-person" class="form-control form-control-solid">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Phone No</span>
                                            </label>
                                            <input type="number" value="{{$prospectMaster->phone}}" name="phone" id="phone" class="form-control form-control-solid" maxlength="10">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Email</span>
                                            </label>
                                            <input type="text" value="{{$prospectMaster->email}}" name="email" id="email" class="form-control form-control-solid">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Department</span>
                                            </label>
                                            <input type="text" value="{{$prospectMaster->department}}" name="department" id="department" class="form-control form-control-solid">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Designation</span>
                                            </label>
                                            <input type="text" value="{{$prospectMaster->designation}}" name="designation" id="designation" class="form-control form-control-solid">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Quotation Attention of</span>
                                            </label>
                                            <input type="text" value="{{$prospectMaster->quotation_attention}}" name="quotation_attention" id="quotation_attention" class="form-control form-control-solid">
                                        </div>
                                    </div>
                                </div>
                                <div class="separator mb-6"></div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" onclick="history.back()" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" id="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Update</span>
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
        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);
        $(".form").validate({
            rules: {
                company: {
                    required: true,
                },
                contact_person: {
                    required: true,
                },
                phone: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10,
                },
                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                name: {
                    required: "Please Enter Company",
                },
                contact_person: {
                    required: "Please Enter Contact Person Name",
                },
                phone: {
                    required: "Please Enter Phone number.",
                    number: "Please Enter Number Only.",
                    minlength: "Please Enter 10 digit number",
                    maxlength: "Please Enter 10 digit number",
                },
                messages: {
                    required: "Please Enter Email Address.",
                    email: "Please enter a valid email address"
                },
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit"). attr("disabled", true);
                $.ajax({
                    url: "{{route('prospect-master-update')}}",
                    type: "POST",
                    data: frm_user.serialize(),
                    success: function( response ) {
                        console.log(response);
                        if(response == 1){
                            swal.fire({
                                title: "success!",
                                text: "Record has been Updated successfully",
                                type: "success"
                            }).then(function() {
                                window.location = "{{route('prospect-master')}}";
                            });
                        }else{
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
    });
</script>
@endpush
