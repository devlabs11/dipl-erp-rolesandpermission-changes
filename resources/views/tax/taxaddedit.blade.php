<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
	@include('layout.inc_header')
	<?php
	$module_id="61.0";
	if (!Session::has('userdata')){
		//die("here");
		//return redirect('/login');
		Redirect::to('login')->send();
	}
	?>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="../../demo1/dist/index.html">
							<!-- <img alt="Logo" src="assets/media/logos/logo-1-dark.svg" class="h-25px logo" /> -->
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
						<!--begin::Menu-->
						@include('layout.inc_sidebar')
						<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
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
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<?php
									if($id=="0")
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Tax</h1>
									<?php
									}
									else
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Tax</h1>
									<?php
									}
									?>
									
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
													<h2>Add New Tax</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5">
												<!--begin::Form-->
												
												<!-- <form class="form" method="POST" enctype="multipart/form-data"  name="frm_user" onsubmit="return false;" id="frm_user"> -->
												
												<form class="form" method="POST" enctype="multipart/form-data"  name="frm_user"  id="frm_user">											
												{{@csrf_field()}}


											<?php

											$id="0";
											


											$tax_name="";
											$tax_value="";
											$flate_value="";
											$base_price="";
											$taxes="";
											$taxes_arr=array();

											  if(is_array($tbl_tax))
											  {
												  foreach($tbl_tax as $tbl_tax)
												  {
													  //var_dump($tbl_process);die;
														$id=$tbl_tax->id;
														

														$tax_name=$tbl_tax->tax_name;
														$tax_value=$tbl_tax->tax_value;
														$flate_value=$tbl_tax->flate_value;
														$base_price=$tbl_tax->based_on;
														$taxes=$tbl_tax->taxes;
														$taxes_arr = explode(",",$taxes);
														

												  }
											  }

											  
											?>

												<input type="hidden" name="edit_id" id="edit_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">
												
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														
														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Tax Name</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the tax name."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="tax_name" id="tax_name" value="{{$tax_name}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required"> Tax Value (%)</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the tax value."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="tax_value" id="tax_value" value="{{$tax_value}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->


													</div>
													<!--end::Row-->



													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<label class="fs-6 fw-bold form-label mt-3" style="display:none">
																	<span>&nbsp;</span>
															</label>
															<div class="w-100">
															<div class="fv-row mb-7">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php 
																//echo $is_fixed_process;die;
																	if($flate_value=="1")
																	{
																		$checked="checked";
																	}
																	else
																	{
																		$checked="";
																	}
																?>
																<input class="form-check-input flate_value" {{$checked}} txt_name="flate_value" type="checkbox" value="1" id="flate_value" name="flate_value" />&nbsp;&nbsp;<label  class="fs-6 fw-bold form-label mt-3"><span>Flate Value</span></label>												
															</div>
															</div>
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->


														<!--begin::Col-->
														<div class="col" id="based_on_div">
															<!--begin::Input group-->
															<label class="fs-6 fw-bold form-label mt-3">
																	<span>Based On</span>
															</label>
															<div class="w-100">
															<div class="fv-row mb-7">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php 
																//echo $is_fixed_process;die;
																	if($base_price=="1")
																	{
																		$checked="checked";
																	}
																	else
																	{
																		$checked="";
																	}
																?>
																<input class="form-check-input base_price" {{$checked}} txt_name="base_price" type="checkbox" value="1" id="base_price" name="base_price" />&nbsp;&nbsp;<label  class="fs-6 fw-bold form-label mt-3"><span>Base Price</span></label>												
															</div>
															</div>
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->


														
														

													</div>
													<!--end::Row-->



													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														
														

														
														<!--begin::Col-->
														<div class="col" style="width:30% !important;" id="taxes_div">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-bold form-label mt-3">
																		<?php 
																		if($id==0)
																		{
																			?>
																			<span>Select One Or More Taxes</span>
																			<?php
																		}
																		else
																		{
																			?>
																			<span>Select One Or More Taxes <br/> ((Base Product Value )*<?php echo $tax_value; ?>/100)</span>
																			<?php
																		}
																		?>
																		

																		
																		<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select One Or More Taxes."></i>
																	</label>
																	<!--end::Label-->
																	<div class="w-100">
																		<div class="form-floating border rounded">
																			<!--begin::Select2-->
																			<select  multiple name="taxes[]" id="taxes" aria-label="Select One Or More Taxes" data-control="select2" data-placeholder="Select One Or More Taxes..."  class="form-select form-select-solid lh-1 py-3">
																				<option value="">Select</option>
																				<?php
																					
																					$tbl_tax = DB::select("select * from tbl_tax");

																					foreach($tbl_tax as $tbl_tax){
																						$tax_name=$tbl_tax->tax_name;
																						$id=$tbl_tax->id;
																						$selected="";


																						if(in_array("$id", $taxes_arr))
																						{
																							$selected="selected='selected'";
																						}
																						// if($taxes==$id)
																						// {
																						// 	$selected="selected='selected'";
																						// }

																						echo "<option $selected value='".$id."'>$tax_name</option>";
																					}
																				?>
																			</select>
																			<!--end::Select2-->
																			</div>
																		</div>
																	</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->
																				



													</div>
													<!--end::Row-->


													

													

													




												




													
													<!--begin::Separator-->
													<div class="separator mb-6"></div>
													<!--end::Separator-->
													<!--begin::Action buttons-->
													<div class="d-flex justify-content-end">
														<!--begin::Button-->
														<button type="reset" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="button" id="submit_btn" name="submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="ajax_submit();">
															<span class="indicator-label">Save</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Action buttons-->
												</form>
												<!--end::Form-->
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
					<!--end::Content-->
					
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		<!--end::Main-->
		
	
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
	
		@include('layout.inc_footer')

		<script src="{{ URL::asset('assets/js/custom/apps/contacts/edit-contact.js') }} "></script>


		<script>

		var frm_user = $('#frm_user');
		var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);

		$(document).ready(function() {

			var flate_value="<?php echo $flate_value; ?>";

			if(flate_value=="1")
			{
				$("#based_on_div").hide();
				$("#taxes_div").hide();
			}


			$('#flate_value').change(function() {
				if(this.checked) {
					$("#based_on_div").hide();
					$("#taxes_div").hide();
				}
				else
				{
					$("#based_on_div").show();
					$("#taxes_div").show();
				}      
			});

			$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					 
			$("#cancel_btn").click(function()
			{					
				///t.preventDefault(),
				Swal.fire({
					text:"Are you sure you would like to cancel?",
					icon:"warning",
					showCancelButton:!0,
					buttonsStyling:!1,
					confirmButtonText:"Yes, cancel it!",
					cancelButtonText:"No, return",
					customClass:{
						confirmButton:"btn btn-primary",
						cancelButton:"btn btn-active-light"
					}
				}).then((function(t){
					t.value?(window.location.href = "{{ URL::to('tax') }}"):"cancel"===t.dismiss&&Swal.fire({
						text:"Your form has not been cancelled!.",
						icon:"error",
						buttonsStyling:!1,
						confirmButtonText:"Ok, got it!",
						customClass:{
							confirmButton:"btn btn-primary"
						}
					})
				}))
			});


			frm_user.validate({
                    errorElement: 'span',
                    errorClass: 'help-block help-block-error',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
                        tax_name: {
                            required: true,
							// remote: {
                            //     url: "{{ URL::to('validateuniqueid') }}",
                            //     type: "post",
                            //     data: {
                            //         id: function () {
                            //             return $("#edit_id").val();
                            //         },
							// 		unique_id: function () {
                            //             return $("#unique_id").val();
                            //         },
                            //     }
                            // }
                        },
						tax_value: {
                            required: true,
							/*remote: {
                                url: "{{ URL::to('validateprocessname') }}",
                                type: "post",
                                data: {
                                    id: function () {
                                        return $("#edit_id").val();
                                    }
                                }
                            }*/
                        },
						// flate_value:{
						// 	required: true,
                        // },
                    },
                    invalidHandler: function (event, validator) {             
                        form_success.hide();
                        form_error.show();
						//alert("here");
                        //App.scrollTo(form_error, -200);
                    },
                    errorPlacement: function (error, element) {
                        if (element.is(':checkbox')) {
                            error.insertAfter(element.closest(".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
                        } else if (element.is(':radio')) {
                            error.insertAfter(element.closest(".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
                        }  else if (element.hasClass('form-select')) {     
                            //error.insertAfter(element.next('span'));
							error.insertAfter(element.closest(".form-floating"));
                        } else {
                            error.insertAfter(element);
                        }                        
                    },  
                    highlight: function (element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function (element) {
                        $(element).closest('.form-group').removeClass('has-error');
                    },
                    success: function (label) {
                        label.closest('.form-group').removeClass('has-error');
                    },
                    submitHandler: function (form) {

                        /*form_success.show();
                        form_error.hide();
                        
						var fd = new FormData();

						var files = $('#file')[0].files;
						fd.append('file',files[0]);

                        $.post("{{ URL::to('submitprocess') }}", $("#frm_user").serialize()+"&filedata="+fd, function (data) {
							
							if (data.alert_type == "succ") {
                                if (data.mode=='add'){
									
									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('process') }}";
													}
													);

									
								}
								else{

									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('process') }}";
														//datatablerefresh();
													}
													);
										
								}
							}                           
							else
							{
								if (data.mode=='add'){
									
									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('process') }}";
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('process') }}";
													}
													);

									
								}
							}
                        }, "json");*/
                    },
                    messages: {
                        tax_name: {
                            required: "This field is required",
                            //remote: "This state already exists. Please try another state.",
                        },
						tax_value: {
                            required: "This field is required",
                            //remote: "This state already exists. Please try another state.",
                        },
						base_price: {
                            required: "This field is required",
                            //remote: "This state already exists. Please try another state.",
                        },
						img: {
                            extension:"select valid input file format"
                            //remote: "This state already exists. Please try another state.",
                        },
						img1: {
                            extension:"select valid input file format"
                            //remote: "This state already exists. Please try another state.",
                        },
						img2: {
                            extension:"select valid input file format"
                            //remote: "This state already exists. Please try another state.",
                        },
                        status: "This field is required."
                    }
                });
		});



		function ajax_submit() {

				//alert("here");
                
				var ajax_url = "{{ URL::to('submittax') }}";
                $("#lns-error").hide();
                $('#lns-error').css('display', 'none');

                if (!frm_user.valid()) {
                    //btncs.stop();
                    //$.unblockUI();
                    return false;
                }

               
                var temp_form_data = new FormData();
                // temp_form_data.append('field_name', field_data);
                var form_data = frm_user.serializeArray();
                $.each(form_data, function (key, input) {
                    temp_form_data.append(input.name, input.value);
                });
                // for(var pair of temp_form_data.entries()) {
                // 	console.log(pair[0]+ ', '+ pair[1]); 
                // }    
                /*if($('#img').prop('files') !=undefined){
					//alert("here");
                    var file_data = $('#img').prop('files')[0];
                    temp_form_data.append('img', file_data);
                }

				if($('#img1').prop('files') !=undefined){
					//alert("here");
                    var file_data = $('#img1').prop('files')[0];
                    temp_form_data.append('img1', file_data);
                }

				if($('#img2').prop('files') !=undefined){
					//alert("here");
                    var file_data = $('#img2').prop('files')[0];
                    temp_form_data.append('img2', file_data);
                }*/
                
                $.ajax({
                    url: ajax_url,
                    type: 'POST',
                    data: temp_form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        //btncs.start();
                        /*$.blockUI({
                            centerY: 0,
                            css: {
                                'z-index': '10052', padding: '11px', height: '45px', top: '60px', left: '', right: '10px',
                            }
                        });*/

                    },
                    success: function (json) {

						var data = $.parseJSON(json);
						if (data.alert_type == "succ") {
                                if (data.mode=='add'){
									
									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('tax') }}";
													}
													);

									
								}
								else{

									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('tax') }}";
														//datatablerefresh();
													}
													);
										
								}
							}                           
							else
							{
								if (data.mode=='add'){
									
									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('tax') }}";
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){ 
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('tax') }}";
													}
													);

									
								}
							}
                       
                    }
                });
            }
		</script>
	</body>
	<!--end::Body-->
</html>