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
                    Edit Profile
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
                            <form class="form" data-id="@isset($user){{ $user->id }}@endisset" action="{{route('update-profile')}}" method="post" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="id" value="@isset($user){{ $user->id }}@endisset">
                                {{-- <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Tax Structure Name</span>
                                            </label>
                                            <input type="text" name="name" id="name" class="form-control form-control-solid" value="{{ old('name', $user->name ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Select Tax</span>
                                            </label>
                                            <select name="tax_id" id="tax_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                @foreach ($taxs as $item)
                                                    <option value="{{$item->id}}" @isset($user)@if($item->id == $user->tax_id) selected @endif @endisset >{{$item->tax_value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Full Name</span>
                                            </label>
                                            <input type="text" name="full_name" id="full_name" class="form-control form-control-solid" value="{{ old('full_name', $user->fullname ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Username</span>
                                            </label>
                                            <input type="text" name="username" id="username" class="form-control form-control-solid" value="{{ old('username', $user->username ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Contact Number</span>
                                            </label>
                                            <input type="text" name="contact_number" id="contact_number" class="form-control form-control-solid" value="{{ old('contact_number', $user->mobile ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Password</span>
                                            </label>
                                            <input type="password" name="password" id="password" class="form-control form-control-solid" value="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Confirm Password</span>
                                            </label>
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-solid" value="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Email</span>
                                            </label>
                                            <input type="email" name="email" id="email" class="form-control form-control-solid" value="{{ old('email', $user->emailid ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Avatar</span>
                                            </label>
                                            <input type="file" name="avatar" id="avatar" class="form-control form-control-solid" value="{{ $user->avatar ?? '' }}">
                                        </div>
                                        @if ($user->avatar != null)
                                            <img src="{{ URL::asset('avatar/' . $user->avatar) }}" alt="Profile Picture" width="200" height="100">
                                        @else
                                            <img src="{{ URL::asset('media/avatars/blank.png') }}" alt="Profile Picture">
                                        @endif
                                    </div>

                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">sign</span>
                                            </label>
                                            <input type="file" name="sign" id="sign" class="form-control form-control-solid" value="{{ $user->sign }}">
                                        </div>
                                        @if ($user->sign != null)
                                            <img src="{{ URL::asset('user_sign/' . $user->sign) }}" alt="Profile Picture" width="200" height="100">
                                        @else
                                            <img src="{{ URL::asset('media/avatars/blank.png') }}" alt="Profile Picture" >
                                        @endif
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
        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);

        $(".form").validate({
            rules: {
                full_name: {
                    required: true,
                },
                username: {
                    required: true,
                },
                contact_number: {
                    required: true,
                    maxlength: 10,
                    number: true,
                },
                password: {
                    required: true,
                },
                confirm_password: {
                    required: true,
                    equalTo: "#password",
                },
                email: {
                    required: true,
                    email: true,
                },
                // avatar: {
                //     accept: "jpg|jpeg|png|ico|bmp"
                // },
                // sign: {
                //     accept: "image/jpeg,image/jpg,image/png",
                // },
            },
            messages: {
                full_name: {
                    required: "Please enter your full name.",
                },
                username: {
                    required: "Please enter a username.",
                },
                contact_number: {
                    required: "Please enter your contact number.",
                    maxlength: "Contact number must be 10 digits.",
                    number: "Please enter a valid number.",
                },
                password: {
                    required: "Please enter a password.",
                },
                confirm_password: {
                    required: "Please confirm your password.",
                    equalTo: "Passwords do not match.",
                },
                email: {
                    required: "Please enter your email address.",
                    email: "Please enter a valid email address.",
                },
                // avatar: {
                //     accept: "Please upload a valid image file (jpg, jpeg, or png).",
                // },
                // sign: {
                //     accept: "Please upload a valid image file (jpg, jpeg, or png).",
                // },
            },
            // submitHandler: function(form) {
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //     $('#submit').html('Please Wait...');
            //     $("#submit"). attr("disabled", true);

            //     var formData = new FormData();
            //     formData.append('full_name', document.getElementById('full_name').value);
            //     formData.append('username', document.getElementById('username').value);
            //     formData.append('email', document.getElementById('email').value);
            //     formData.append('contact_number', document.getElementById('contact_number').value);
            //     formData.append('password', document.getElementById('password').value);
            //     // formData.append('avatar', document.getElementById('avatar').value);
            //     // formData.append('sign', document.getElementById('sign').value);
            //     formData.append('avatar', $('#avatar')[0].files[0]);
            //     formData.append('sign', $('#sign')[0].files[0]);

            //     $.ajax({
            //         url: "{{route('update-profile')}}",
            //         type: "POST",
            //         data: formData,
            //         success: function( response ) {
            //             console.log(response);
            //             if(response == 1){
            //                 swal.fire({
            //                     title: "success!",
            //                     text: "Profile successfully updated",
            //                     type: "success"
            //                 }).then(function() {
            //                     location.reload();
            //                 });
            //             } else if(response == 3 ){
            //                 swal.fire({
            //                     title: "Empty Entry",
            //                     text: "You can't entry empty Value",
            //                     type: "info"
            //                 });
            //             }else{
            //                 swal.fire({
            //                     title: "Error",
            //                     text: "Please Check the record",
            //                     type: "error"
            //                 });
            //             }
            //         }
            //     });
            // }
        });
    });
</script>
@endpush
