@extends('layout.app')
@section('content')
<style>
    .error{
        padding-top: 70px !important;
    }
    #term_value-error {
        padding: 2% !important;
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add Terms Conditions</h1>
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
                                <h2>Add Terms Conditions</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <form class="form">
                                @method('POST')
                                @csrf
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Category</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select name="category" id="terms_category" aria-label="Select a Category" data-control="select2" data-placeholder="Select a Category..."  class="form-select form-select-solid lh-1 py-3">
                                                        <option value="">Select</option>
                                                        @foreach ($category as $item )
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Term Title</span>
                                            </label>
                                            <div class="w-100">
                                                <div class="form-floating border rounded">
                                                    <!--begin::Select2-->
                                                    <select name="term_title" id="term_title" aria-label="Select a Term Title" data-control="select2" data-placeholder="Select a Term Title..."  class="form-select form-select-solid lh-1 py-3">
                                                        <option value="">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" id="myModalId"> <i class="fa fa-plus" aria-hidden="true"></i> Add New Term Title</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-2">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Term Value</span>
                                            </label>
                                            <input name="term_value" id="term_value" type="text"  class="form-control form-control-solid">
                                        </div>
                                    </div>
                                </div>

                                <div class="separator mb-6"></div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" onclick="history.back()" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
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
<div class="modal" id="myModal">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
           <div class="modal-body">
                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                    <div class="col">
                        <div class="fv-row mb-2">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">Term Title</span>
                            </label>
                            <div class="w-100">
                                <small id="emailHelp" class="form-text text-muted">Note: Please select the Category</small>
                                <div class="form-floating border rounded">
                                    <input type="text" name="name" required id="term_titleName" class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save">Save changes</button>
           </div>
        </div>
   </div>
 </div>
@endsection
@push('js')
<script>
    $( document ).ready(function() {
        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);
        $(".form").validate({
            rules: {
                category: {
                    required: true,
                },
                term_title: {
                    required: true,
                },
                term_value: {
                    required: true,
                },
            },
            messages: {
                category: {
                    required: "Please Select Category",
                },
                term_title: {
                    required: "Please Select Term Title",
                },
                term_value: {
                    required: "Please Enter Term Value",
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
                    url: "{{route('terms-condition-master-store')}}",
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
                                window.location = "{{route('terms-condition-master')}}";
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
        $("#terms_category").change(function(){
            var selectedCategory = $(this).children("option:selected").val();
            console.log('Selected Terms category: '+selectedCategory);
            jQuery.ajax({
                url: '{{route("terms-condition-title")}}',
                data: {
                    id: selectedCategory
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#term_title').empty();
                    $.each(data, function(key, value) {
                        $('#term_title').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                }
            });
        });
        $('#terms_category').trigger("change");
        $("#myModalId").click(function(e){
            $('#myModal').modal('toggle');
        });
        $("#save").click(function(e){
            e.preventDefault();
            var selectedCat = $('#terms_category').find(":selected").val();
            var title = $('#term_titleName').val();
            if(selectedCat === null || selectedCat === undefined || selectedCat === ""){
                swal.fire('please select the Category first.');
            }
            $.ajax({
                method: 'GET',
                url:"{{route('add-term-title')}}",
                data:{ name: title, category: selectedCat},
                success:function(respose) {
                    console.log(respose);
                    if(respose){
                        Swal.fire('Term Title added successfully')
                        jQuery.ajax({
                            url: '{{route("terms-condition-title")}}',
                            data: {
                                id: selectedCat
                            },
                            type: 'GET',
                            success: function(data) {
                                console.log(data);
                                $('#term_title').empty();
                                $.each(data, function(key, value) {
                                    $('#term_title').append('<option value="'+value.id+'">'+value.name+'</option>');
                                });
                            }
                        });
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
        $(".btn").click(function(){
            $("#myModal").modal('hide');
        });
        $(".close").click(function(){
            $("#myModal").modal('hide');
        });
    });
</script>
@endpush
