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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
                    @if ($userOperator == null)
                        Create
                    @else
                        Edit
                    @endif
                     User Operator
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
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <form class="form" data-id="@if ($userOperator != null) {{ $userOperator->id }} @endif">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="id" value="@if ($userOperator != null) {{ $userOperator->id }} @endif">
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Username</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="name" id="name" value="{{ old('name', $userOperator->name ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Full Name</span>
                                            </label>
											<input type="text" class="form-control form-control-solid" name="full_name" id="full_name" value="{{ old('full_name', $userOperator->fullname ?? '') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Password</span>
                                            </label>
                                            <input type="password" class="form-control form-control-solid" name="password" id="password" value="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Confirm Password</span>
                                            </label>
											<input type="password" class="form-control form-control-solid" name="confirm_password" id="confirm_password" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Site</span>
                                            </label>
                                            <select name="site_id" id="site_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                @foreach ($sites as $site)
                                                    <option value="{{ $site->id }}"@isset($userOperator) @if($userOperator->site_id == $site->id) selected @endif @endisset>{{ $site->description }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Email Id</span>
                                            </label>
                                            <input type="email" class="form-control form-control-solid" name="email" id="email" value="{{ old('email', $userOperator->email ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Employee Code</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="emp_code" value="{{ old('emp_code', $userOperator->emp_code ?? '') }}" @isset($userOperator) readonly  @endisset>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Status</span>
                                            </label>
                                            <select name="status" id="status" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                <option value="1" @isset($userOperator) @if($userOperator->status == 1) selected @endif @endisset>Active</option>
                                                <option value="2" @isset($userOperator) @if($userOperator->status == 2) selected @endif @endisset>In-Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="separator mb-6"></div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset"  onclick="history.back()" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
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
@push('js')
<script>
    $(document).ready(function() {
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
        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);
        $(".form").validate({
             rules: {
                 status: {
                    required: true,
                 },
                 emp_code: {
                    required: true,
                 },
                 site_id: {
                    required: true,
                 },
                 full_name: {
                    required: true,
                 },
                name: {
                    required: true,
                 },
                 password: {
                    required: true,
                    minlength: 6,
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                }
             },
             messages: {
                status: {
                    required: 'Please Select Status',
                 },
                 emp_code: {
                    required: 'Please Enter Employee Code',
                 },
                 site_id: {
                    required: 'Please select site'
                 },
                 full_name: {
                    required: 'Please Enter Full Name',
                 },
                name: {
                    required: 'Please Enter Name',
                 },
                 password: {
                    minlength: 'Enter at least 6 digit Password ',
                },
                confirm_password: {
                    equalTo: "These passwords don't match"
                }
             },
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
                    url = "{{route('user-operator-store')}}";
                }else{
                    url = "{{route('user-operator-update')}}";
                }
                console.log(record_id);
                $.ajax({
                    url: url,
                    type: "POST",
                    data: frm_user.serialize(),
                    success: function( response ) {
                        $('#submit').html('Submit');
                        $("#submit"). attr("disabled", false);
                        console.log(response);
                        if(response == 1){
                            swal.fire({
                                title: "success!",
                                text: "Record has been submitted successfully",
                                type: "success"
                            }).then(function() {
                                window.location = "{{route('user-operator')}}";
                            });
                        } else if(response == 2 ){
                            swal.fire({
                                title: "Duplicate Employee code",
                                text: "Please check",
                                type: "info"
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
