
@extends('layout.app')
@section('content')
<style>
    .nav-tabs li
    {
        font-size: 14px !important;
    }
    .ms-lg-15
    {
        margin-left:0px !important;
    }
</style>
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" style="" class="header align-items-stretch">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Aside mobile toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
            </div>
            <!--end::Aside mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="../../demo1/dist/index.html" class="d-lg-none">
                    <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
                </a>
            </div>
            <!--end::Mobile logo-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                <!--begin::Navbar-->
                <div class="d-flex align-items-stretch" id="kt_header_nav">

                </div>
                <!--end::Navbar-->
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-stretch flex-shrink-0">


                @include('layout.inc_topbar')
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        console.log('Proforma-Invoice-Add/Edit Blade');
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
        $("#quotation_date").daterangepicker({
            locale: {
                        format: 'DD-MM-YYYY',
                    },
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 2015,
            // minDate: new Date(),
            // maxDate: new Date()
        });
        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);
        $(".form").validate({
            // rules: {
            //     company: {
            //         : true,
            //     },
            //     contact_person: {
            //         required: true,
            //     },
            //     phone: {
            //         required: true,
            //         number: true
            //     },
            //     email: {
            //         required: true,
            //         email: true
            //     },
            // },
            // messages: {
            //     name: {
            //         required: "Please Enter Company",
            //     },
            //     contact_person: {
            //         required: "Please Enter Contact Person Name",
            //     },
            //     phone: {
            //         required: "Please Enter Phone number.",
            //         number: "Please Enter Number Only."
            //     },
            //     messages: {
            //         required: "Please Enter Email Address.",
            //         email: "Please enter a valid email address"
            //     },
            // },
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
                    url = "{{route('product-size-master-store')}}";
                }else{
                    url = "{{route('product-size-master-update')}}";
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
                                window.location = "{{route('product-size-master')}}";
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
                        }
                    }
                });
            }
        });
    });
</script>
@endpush
