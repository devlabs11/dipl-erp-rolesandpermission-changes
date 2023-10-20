<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="../../../">
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/style.bundle.css') }} " rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
    .help-block-error {
        color: red;
    }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">


                        <form method="POST" onsubmit="return validateForm();" action="{{ route('login') }}">



                            <?php

								if(isset($id))
								{
									$is_id="yes";
								}
								else
								{
									$is_id="no";
									$id="00";
								}

							
								?>


                            <style>
                            .help-block-error {
                                color: red;
                                font-size: 14px;
                                margin-top: 5px;
                            }
                            </style>


                            <script>
                            function validateForm() {
                              
                                clearErrorMessages();

                                var username = document.getElementById('username').value;
                                var password = document.getElementById('password').value;
                                var isValid = true;

                                if (username.trim() === '') {
                                    displayErrorMessage('username-error', 'Username is required');
                                    isValid = false;
                                }

                                if (password.trim() === '') {
                                    displayErrorMessage('password-error', 'Password is required');
                                    isValid = false;
                                }

                                return isValid;
                            }

                            function displayErrorMessage(elementId, message) {
                                var errorElement = document.getElementById(elementId);
                                errorElement.innerHTML = message;
                            }

                            function clearErrorMessages() {
                                document.getElementById('username-error').innerHTML = '';
                                document.getElementById('password-error').innerHTML = '';
                            }
                            </script>

                            @csrf
                          
                            <div class="text-center mb-10">
                                {{-- <a href="../../demo1/dist/index.html" class="py-9 mb-5" > --}}
                                <img alt="Logo" src="{{ URL::asset('assets/media/logos/logo-2.jpg') }} " class="h-60px"
                                    style="margin-bottom:30px" />
                                {{-- </a> --}}
                              
                                <h1 class="text-dark mb-3">Sign In to PMS ERP</h1>

                            </div>

                            <div class="alert alert-danger alert-block" id="err_msg" style="display:none">
                                <strong>Wrong Login Details</strong>
                            </div>

                            <div class="fv-row mb-10">

                                <label class="form-label fs-6 fw-bolder text-dark">{{ __('Username') }}</label>
                                <input id="username" type="text"
                                    class="form-control form-control-lg form-control-solid   @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                <div id="username-error" class="help-block-error"></div>


                            </div>




                            <div class="fv-row mb-10">

                                <label class="form-label fs-6 fw-bolder text-dark">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                    name="password" autocomplete="current-password">
                                <div id="password-error" class="help-block-error"></div>



                            </div>


                            <div class="text-center">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Continue</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-image: url('{{ URL::asset('assets/media/logos/backgroundimage.jpg') }}');">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20" style="margin-top:40%">
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #ffffff;">Welcome to PMS ERP</h1>
                        {{-- <p class="fw-bold fs-2" style="color: #ffffff;">
                                Discover Amazing PMS ERP<br />with great build tools
                            </p> --}}
                        <p class="fw-bold fs-2" style="color: #ffffff;">
                            A Gateway to<br />
                            <span style="font-style: italic;">Better</span> Production Management System
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog"
        aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Please contact project co-ordinator Mr. Anil Yadav</h6>
                    <p>on <strong>+91 95610 36224</strong> or email him on <strong>it@devharshinfotech.com</strong> for
                        request to reset password.</p>
                    <form>
                        <!-- Input fields, labels, etc. -->
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    var hostUrl = "assets/";
    </script>
    <script src="{{ URL::asset('assets/plugins/global/plugins.bundle.js') }} "></script>
    <script src="{{ URL::asset('assets/js/scripts.bundle.js') }} "></script>
    <script src="{{ URL::asset('assets/js/custom/authentication/sign-in/general.js') }} "></script>
    <script src="{{ URL::asset('assets/js/jquery.validate.min.js') }} "></script>

</body>


</html>