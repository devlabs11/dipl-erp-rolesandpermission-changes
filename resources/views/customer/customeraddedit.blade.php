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

	<style>
.notfound{
  display: none;
}
</style>
	<head>
	@include('layout.inc_header')
	<style>


		label span
		{
			/* font-weight: 400px !important; */
			/* font-size: 1.075rem !important; */
			/* color:black !important; */
			/* font-family: Helvetica,sans-serif !important; */
		}

		.form-control
		{
			font-weight:normal !important;
		}
		.select2-selection__placeholder
		{
			font-weight:normal !important;
		}
		.form-select
		{
			font-weight:normal !important;
		}

	</style>
	<?php
	$module_id="60.0";
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

									//echo $id;die;
									if($id=="0")
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Customer</h1>
									<?php
									}
									else
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Customer</h1>
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
													<h2>Add New Company</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->






											<div class="card-body pt-5">



											<!--begin tab ::Content-->
											<div class="flex-lg-row-fluid ms-lg-15">
													<!--begin:::Tabs-->
													<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4 active" id="general_link" data-bs-toggle="tab" href="#kt_customer_view_general_tab">General</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="delivery_location_link" data-bs-toggle="tab" href="#kt_customer_view_delivery_location_tab">Delivery Location</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="communication_link" data-bs-toggle="tab" href="#kt_customer_view_communication_tab">Communication</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="invoicing_link" data-bs-toggle="tab" href="#kt_customer_view_invoicing_tab">Invoicing</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="payment_link" data-bs-toggle="tab" href="#kt_customer_view_payment_tab">Payment</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="shipping_link" data-bs-toggle="tab" href="#kt_customer_view_shipping_tab">Shipping</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="shipping_agent_link" data-bs-toggle="tab" href="#kt_customer_view_shipping_agent_tab">Shipping Agent</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="export_trade_link" data-bs-toggle="tab" href="#kt_customer_view_export_trade_tab">Export Trade</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item" style="font-size:14px !important;">
															<a style="margin-right:2px !important;" class="nav-link text-active-primary pb-4" id="tax_information_link" data-bs-toggle="tab" href="#kt_customer_view_tax_information_tab">Tax Information</a>
														</li>
														<!--end:::Tab item-->

													</ul>
													<!--end:::Tabs-->

													<!--begin:::Tab content-->
													<div class="tab-content" id="myTabContent">
														<!--begin:::Tab pane-->
														<div class="tab-pane fade show active" id="kt_customer_view_general_tab" role="tabpanel">

															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div id="kt_customer_view_payment_method" class="card-body pt-0">
																	<!--begin::Form-->
																	<!-- <form class="form" method="POST" enctype="multipart/form-data"  name="frm_user" onsubmit="return false;" id="frm_user"> -->
																	<div class="separator mb-6"></div>
																	<form class="form" method="POST" enctype="multipart/form-data"  name="frm_user"  id="frm_user">
																		{{@csrf_field()}}


																		<?php


																		$customer_name="";
																		$customer_no="";
																		$company="";
																		$vender_code="";
																		$customer_address="";
																		$city_code="";
																		$post_box_no="";
																		$state_code="";
																		$country_code="";
																		$sales_person="";
																		$office_assistant="";
																		$co_ordinator="";




																		$order_no="";
																		$order_name="";
																		$customer_name="";
																		$freight_charges_before_tax="0";
																		$freight_charges="";





																		$id="0";
																		$name="";
																		$registered_address="";
																		$corresponding_address="";
																		$phone_number="";
																		$fax_no="";
																		$vat_regs_no="";
																		$grio_no="";
																		$bank="";
																		$branch="";
																		$account_no="";
																		$sales_tax_declaration="";
																		$terms_condition="";
																		$company_prefix="";
																		$service_reg_no="";
																		$service_reg_no_dated="";
																		$tin_no="";
																		$pan_no="";
																		$ecc_no="";
																		$ecc_dated="";
																		$excise_rabge="";
																		$excise_division="";
																		$commissioner_rate="";
																		$gst_no="";
																		$arn_no="";
																		$it_tds="";
																		$cin_no="";
																		$correspondant_bank="";
																		$correspondant_account_no="";
																		$location="";
																		$swift_bic_code="";
																		$plants_count=0;
																		$neft_count=0;

																		//$edit_id="0";

																		if(is_array($tbl_customer_general))
																		{
                                                                            // print_r($tbl_customer_general);
																			foreach($tbl_customer_general as $tbl_customer_general)
																			{

																					$id=$tbl_customer_general->id;
																					$customer_name=$tbl_customer_general->customer_name;
																					$customer_no=$tbl_customer_general->customer_no;
																					$company=$tbl_customer_general->company;
																					$vender_code=$tbl_customer_general->vender_code	;
																					$customer_address=$tbl_customer_general->customer_address;
																					$city_code=$tbl_customer_general->city;
																					$post_box_no=$tbl_customer_general->post_box_no;
																					$state_code=$tbl_customer_general->state_code;
																					$country_code=$tbl_customer_general->country_code;
																					$sales_person=$tbl_customer_general->sales_person;
																					$office_assistant=$tbl_customer_general->office_assistant;
																					$co_ordinator=$tbl_customer_general->co_ordinator;
                                                                                    $attention = $tbl_customer_general->attention;




																			}



																		}

																		// echo $id;die;


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
																						<span class="required">Customer Name</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Customer Name."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="customer_name" id="customer_name" value="{{$customer_name}}" />
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
																						<span class="required">Customer No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Customer No."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->


																					<input type="text" class="form-control form-control-solid" name="customer_no" id="customer_no" value="{{$customer_no}}" />
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
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span class="required">Company</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="company" id="company" aria-label="Select Company" data-control="select2" data-placeholder="Select Company..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_company = DB::select("select * from tbl_company");

																								foreach($tbl_company as $tbl_company){
																									$company_name=$tbl_company->name;
																									$company_id=$tbl_company->id;
																									$selected="";
																									if($company==$company_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$company_id."'>$company_name</option>";
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


																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span>Vender Code</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Vender Code."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->


																					<input type="text" class="form-control form-control-solid" name="vender_code" id="vender_code" value="{{$vender_code}}" />
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
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Customer Address</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Customer Address."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->


																					<textarea class='form-control form-control-solid' name="customer_address" ><?php echo $customer_address; ?></textarea>
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
																						<span>City</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="city" id="city" aria-label="Select City" data-control="select2" data-placeholder="Select City..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_city = DB::select("select * from tbl_city");

																								foreach($tbl_city as $tbl_city){
																									$city=$tbl_city->description;
																									$city_id=$tbl_city->id;
																									$selected="";
																									if($city_code==$city_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$city_id."'>$city</option>";
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



																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">


																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span>Post Box No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Post Box No."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="post_box_no" id="post_box_no" value="{{$post_box_no}}" />
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
																						<span>State Code</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="state_code" id="state_code" aria-label="Select State Code" data-control="select2" data-placeholder="Select State Code..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_state = DB::select("select * from tbl_state");

																								foreach($tbl_state as $tbl_state){
																									$state=$tbl_state->description;
																									$state_id=$tbl_state->id;
																									$selected="";
																									if($state_code==$state_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$state_id."'>$state</option>";
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



																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span>Country Code</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="country_code" id="country_code" aria-label="Select Country Code" data-control="select2" data-placeholder="Select Country Code..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$mst_country = DB::select("select * from mst_country");

																								foreach($mst_country as $mst_country){
																									$country=$mst_country->description;
																									$country_id=$mst_country->id;
																									$selected="";
																									if($country_code==$country_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$country_id."'>$country</option>";
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


																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span>Sales Person</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="sales_person" id="sales_person" aria-label="Select Sales Person" data-control="select2" data-placeholder="Select Sales Person..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_user = DB::select("select * from tbl_user");

																								foreach($tbl_user as $tbl_user){
																									$fullname=$tbl_user->fullname;
																									$user_id=$tbl_user->id;
																									$selected="";
																									if($sales_person==$user_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$user_id."'>$fullname</option>";
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



																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span>Office Assistant</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Office Assistant."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="office_assistant" id="office_assistant" value="{{$office_assistant}}"  />
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
																						<span>Co Ordinator</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Co Ordinator."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="co_ordinator" id="co_ordinator" value="{{$co_ordinator}}"  />
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
                                                                                <div class="fv-row mb-7">
                                                                                    <!--begin::Label-->
                                                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                                                        <span>Attention </span>
                                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Attention ."></i>
                                                                                    </label>
                                                                                    <!--end::Label-->
                                                                                    <!--begin::Input-->
                                                                                    <input type="text" class="form-control form-control-solid" name="attention" id="attention " value="{{$attention?? ''}}"  />
                                                                                    <!--end::Input-->
                                                                                </div>
                                                                                <!--end::Input group-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>





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
															<!--end::Card-->


														</div>
														<!--end:::Tab pane-->

														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_delivery_location_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<div class="separator mb-6"></div>

																<?php
																$delivery_location="";

																$delivery_location_edit_id="0";
																$delivery_location_gst_no="";
																$delivery_location_status="1";

																$tbl_customer_delivery_location = DB::select("select * from tbl_customer_delivery_location where customer_id=$id");

																foreach($tbl_customer_delivery_location as $tbl_customer_delivery_location){

																	$delivery_location_edit_id=$tbl_customer_delivery_location->id;
																	$delivery_location=$tbl_customer_delivery_location->delivery_location;
																	$delivery_location_gst_no=$tbl_customer_delivery_location->delivery_location_gst_no;
																	$delivery_location_status=$tbl_customer_delivery_location->delivery_location_status;

																}

																?>


																<!--begin::Row-->
																<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																	<!--begin::Col-->
																	<div class="col">
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">

																			<!--begin::Input-->


																			<input type='text' style="width:50% !important;" id='txt_searchall' class="form-control input-sm" placeholder='Enter delivery location'>
																			<!-- <input type='text' id='txt_name' placeholder='Enter search name'> -->
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->





																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_delivery_location"  id="frm_delivery_location">
																		{{@csrf_field()}}


																		<?php
																		if($id=="0")
																		{
																		?>
																			<!-- kt_customer_view_delivery_location_tab -->
																			<input type="hidden" name="delivery_location_id" id="delivery_location_id" class="form-control input-sm" autocomplete="off" value="{{$delivery_location_edit_id}}">
																			<input type="hidden" name="delivery_location_general_id" id="delivery_location_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">


																			<!--begin::Row-->
																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span >Delivery Location</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Delivery Location."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->


																						<textarea class='form-control form-control-solid' name="delivery_location" ><?php echo $delivery_location; ?></textarea>
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
																							<span>Delivery Location GST NO</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Delivery Location GST NO."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="form-control form-control-solid" name="delivery_location_gst_no" id="delivery_location_gst_no" value="{{$delivery_location_gst_no}}"  />
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
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span>Active/In-active</span>
																						</label>
																						<!--end::Label-->
																						<div class="w-100">
																							<div class="form-floating border rounded">
																								<!--begin::Select2-->


																								<select name="delivery_location_status" id="delivery_location_status" aria-label="Select Active/In-active" data-control="select2" data-placeholder="Select Active/In-active..."  class="form-select form-select-solid lh-1 py-3">
																								<option <?php if($delivery_location_status=="1") echo "selected='selected'"; ?> value="1">Active</option>
																								<option <?php if($delivery_location_status=="0") echo "selected='selected'"; ?> value="0">In-active</option>


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
																		<?php
																		}
																		else
																		{
																		?>
																		<table id='' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border:1px solid;padding-left:15px;border-bottom:0px !important;'>
																			<tr>
																				<th style="width:10%">Sr No.</th>
																				<th style="width:20%">Delivery Location</th>
																				<th style="width:20%">Delivery GST No</th>
																				<th style="width:10%">Active/Inactive</th>
																				<th style="width:10%">Edit</th>
																				<th style="width:10%">Delete</th>
																			</tr>
																		</table>

																		<table id='delivery_location_tbl' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border:1px solid;padding-left:15px;'>

																			<?php
																			$delivery_location_count=0;


																			$tbl_customer_delivery_location_count = DB::select("select count(*) as totalcount from tbl_customer_delivery_location where customer_id='".$id."' ");
																			foreach($tbl_customer_delivery_location_count as $tbl_customer_delivery_location_count)
																			{
																				//var_dump($tbl_plants_count);die;
																				$delivery_location_count=$tbl_customer_delivery_location_count->totalcount;
																			}

																			if($delivery_location_count==0)
																			{
																				?>
																				<tr>
																					<td colspan="6" style="text-align:center">No data available</td>
																				</tr>
																				<?php
																			}
																			else
																			{
																				$tbl_customer_delivery_location = DB::select("select * from tbl_customer_delivery_location where customer_id='".$id."'");

																				//$k=0;
																				foreach($tbl_customer_delivery_location as $tbl_customer_delivery_location)
																				{
																					//$k++;
																					//$neft_count++;
																					$delivery_location_id=$tbl_customer_delivery_location->id;
																					$delivery_location=$tbl_customer_delivery_location->delivery_location;
																					$delivery_location_gst_no=$tbl_customer_delivery_location->delivery_location_gst_no;
																					$delivery_location_status=$tbl_customer_delivery_location->delivery_location_status;

																					if($delivery_location_status==1)
																					{
																						$delivery_location_status="Active";
																					}
																					else
																					{
																						$delivery_location_status="In Active";
																					}


																					?>
																					<tr>
																					<td style="width:10%"><?php echo $delivery_location_id; ?></td>
																					<td style="width:20%"><?php echo $delivery_location; ?></td>
																					<td style="width:20%"><?php echo $delivery_location_gst_no; ?></td>
																					<td style="width:10%"><?php echo $delivery_location_status; ?></td>
																					<td style="width:10%"><a href=""><a href="javascript:void(0);" class="edit_delivery_location" edit-id="<?php echo $delivery_location_id; ?>">Edit</a></a></td>
																					<td style="width:10%"><a href="javascript:void(0);" class="remove_delivery_location" delete-id="<?php echo $delivery_location_id; ?>">Delete</a></td>
																					</tr>
																					<?php
																				}
																			?>

																			<?php
																			}
																			?>
																			<tr class='notfound'>
																				<td colspan='4'>No record found</td>
																			</tr>
																			</table>
																			<br/>
																			<br/>

																			<!-- kt_customer_view_delivery_location_tab -->
																			<input type="hidden" name="delivery_location_id" id="delivery_location_id" class="form-control input-sm" autocomplete="off" value="0">
																			<input type="hidden" name="delivery_location_general_id" id="delivery_location_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">


																			<!--begin::Row-->
																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span >Delivery Location</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Delivery Location."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->


																						<textarea class='form-control form-control-solid' name="delivery_location" id="delivery_location" ></textarea>
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
																							<span>Delivery Location GST NO</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Delivery Location GST NO."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="form-control form-control-solid" name="delivery_location_gst_no" id="delivery_location_gst_no"  />
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
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span>Active/In-active</span>
																						</label>
																						<!--end::Label-->
																						<div class="w-100">
																							<div class="form-floating border rounded">
																								<!--begin::Select2-->


																								<select name="delivery_location_status" id="delivery_location_status" aria-label="Select Active/In-active" data-control="select2" data-placeholder="Select Active/In-active..."  class="form-select form-select-solid lh-1 py-3">
																								<option  value="1">Active</option>
																								<option  value="0">In-active</option>


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
																		<?php
																		}
																		?>


																	<!-- begin::Separator-->
																	<!-- <div class="separator mb-6"></div> -->
																	<!--end::Separator -->
																	<!--begin::Action buttons-->
																	<div class="d-flex justify-content-end">
																		<?php
																			$pdf_url  = url("/export/xlsx/$id");

																			//echo $pdf_url;die;
																		?>
																		{{-- <a href="<?php echo $pdf_url; ?>" class="btn btn-light me-3" title="Export" style="font-weight:500 !important;">Export</a> --}}

																		<!--begin::Button-->
																		<button type="reset" id="neft_cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>

																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="button" id="neft_submit_btn" name="neft_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="delivery_location_ajax_submit();">
																			<span class="indicator-label">Save</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																		<!--end::Button-->
																	</div>
																	<!--end::Action buttons-->
																</form>

																</div>
																<!--end::Card body-->
															</div>
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->


														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_communication_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<div class="separator mb-6"></div>

																<div style="text-align:right;padding-bottom:10px"><a href="javascript:void(0);" class="add_communication" title="Add Communication">Add</a></div>

																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_communication"  id="frm_communication">
																	{{@csrf_field()}}

																	<input type="hidden" name="communication_id" id="communication_id" class="form-control input-sm" autocomplete="off" value="0">
																	<input type="hidden" name="communication_general_id" id="communication_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">

																	<?php
																	if($id=="0")
																	{
																	?>
																	<div class="communication_field_wrapper" style="padding-top:30px">
																		<div class="communication_master">
																			<input type="hidden" name="neft[neft_id][1]" value="0">
                                                                            <div class="communication_master">
                                                                                <input type="hidden" name="communication[communication_id][1]" id="communication_id" value="0">
                                                                                <input type="hidden" name="communication[communication_general_id][1]" id="communication_general_id" value="<?php echo $id; ?>">
                                                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                                                                                    <!--begin::Col-->
                                                                                    <div class="col">
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-7">
                                                                                            <!--begin::Label-->
                                                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                                                <span >Name</span>
                                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the communication name."></i>
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input-->
                                                                                            <input type="text" class="neft_required required_field form-control form-control-solid bank_name" id="communication_name" name="communication[communication_name][1]"  value="" />
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
                                                                                                <span >Phone No</span>
                                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the phone number."></i>
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input-->
                                                                                            <input type="text" id="communication_phone_no" class="neft_required required_field form-control form-control-solid" name="communication[communication_phone_no][1]"  value="" />
                                                                                            <!--end::Input-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                    </div>
                                                                                    <!--end::Col-->

                                                                                </div>

                                                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                                                                                    <!--begin::Col-->
                                                                                    <div class="col">
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-7">
                                                                                            <!--begin::Label-->
                                                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                                                <span >Email</span>
                                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email."></i>
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input-->
                                                                                            <input type="text" id="communication_email" class="required_field form-control form-control-solid" name="communication[communication_email][1]"  value="" />
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
                                                                                                <span >Fax No.</span>
                                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the fax no."></i>
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input-->
                                                                                            <input type="text" id="communication_fax_no" class="required_field form-control form-control-solid" name="communication[communication_fax_no][1]"  value="" />
                                                                                            <!--end::Input-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                    </div>
                                                                                    <!--end::Col-->

                                                                                </div>

                                                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                                                                                    <!--begin::Col-->
                                                                                    <div class="col">
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-7">
                                                                                            <!--begin::Label-->
                                                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                                                <span >Set As Default</span>
                                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the set as default."></i>
                                                                                            </label>
                                                                                            <!--end::Label-->

                                                                                            <!--begin::Select2-->
                                                                                            <select name="communication[communication_set_as_default][1]" id="communication_set_as_default"  aria-label="Select a set as default" data-control="select2" data-placeholder="Select a set as default..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
                                                                                            <option value="1">Yes</option>
                                                                                            <option value="0">No</option>
                                                                                            </select>
                                                                                            <!--end::Select2-->

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
                                                                                                <span>Designation</span>
                                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the designation."></i>
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input-->
                                                                                            <input type="text" class="required_field form-control form-control-solid" id="communication_designation" name="communication[communication_designation][1]"  value="" />
                                                                                            <!--end::Input-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                    </div>
                                                                                    <!--end::Col-->

                                                                                </div>

                                                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                                                                                    <!--begin::Col-->
                                                                                    <div class="col">
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-7">
                                                                                            <!--begin::Label-->
                                                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                                                <span >Department</span>
                                                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the department."></i>
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Select2-->
                                                                                            <select name="communication[communication_department][1]" id="communication_department"  aria-label="Select a department" data-control="select2" data-placeholder="Select a department..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
                                                                                            <option value="">Select</option>
                                                                                            <?php

                                                                                                $tbl_department = DB::select("select * from tbl_department");

                                                                                                foreach($tbl_department as $tbl_department){
                                                                                                    $department_id=$tbl_department->id;
                                                                                                    $department_description=$tbl_department->description;
                                                                                                    $selected="";
                                                                                                    /*if($user==$userid)
                                                                                                    {
                                                                                                        $selected="selected='selected'";
                                                                                                    }*/

                                                                                                    echo "<option $selected value='".$department_id."'>$department_description</option>";
                                                                                                }
                                                                                            ?>
                                                                                            </select>
                                                                                            <!--end::Select2-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>

                                                                            </div>
																			{{-- <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span class="required">Bank Name</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the bank name."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="neft_required form-control form-control-solid required_field" name="neft[bank_name][1]"  value="" />
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
																							<span class="required">A/C No</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the account number."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="neft_required required_field form-control form-control-solid" name="neft[account_no][1]"  value="" />
																						<!--end::Input-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->

																			</div>

																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span>Branch Name</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the branch name."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="neft[branch_name][1]"  value="" />
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
																							<span class="required">Cost Center</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the cost center."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Select2-->
																						<select name="neft[cost_center][1]"  aria-label="Select a cost center" data-control="select2" data-placeholder="Select a cost center..."  class="neft_required form-select form-select-solid lh-1 py-3 required_field">
																						<option value="">Select</option>
																						<?php

																							$tbl_cost_center = DB::select("select * from tbl_cost_center");

																							foreach($tbl_cost_center as $tbl_cost_center){
																								$cost_center_id=$tbl_cost_center->id;
																								$cost_center_description=$tbl_cost_center->description;
																								$selected="";
																								/*if($user==$userid)
																								{
																									$selected="selected='selected'";
																								}*/

																								echo "<option $selected value='".$cost_center_id."'>$cost_center_description</option>";
																							}
																						?>
																						</select>
																						<!--end::Select2-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->

																			</div>

																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span>A/C Name</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the A/C name."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="neft[account_name][1]" value="" />
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
																							<span>Email ID</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email id."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="neft[email_id][1]"  value="" />
																						<!--end::Input-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->

																			</div>


																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span>Mobile No.</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the mobile no."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="neft[mobile_number][1]"  value="" />
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
																							<span>IFSC Code</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the IFSC Code."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="neft[ifsc_code][1]"  value="" />
																						<!--end::Input-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->

																			</div>


																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span class="required">A/C Type</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the A/C Type."></i>
																						</label>
																						<!--end::Label-->

																						<!--begin::Select2-->
																						<select name="neft[account_type][1]"  aria-label="Select a account type" data-control="select2" data-placeholder="Select a account type..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
																						<option value="">Select</option>
																						<?php

																							$tbl_ac_type = DB::select("select * from tbl_ac_type");

																							foreach($tbl_ac_type as $tbl_ac_type){
																								$ac_type_id=$tbl_ac_type->id;
																								$ac_type_description=$tbl_ac_type->description;
																								$selected="";
																								/*if($user==$userid)
																								{
																									$selected="selected='selected'";
																								}*/

																								echo "<option $selected value='".$ac_type_id."'>$ac_type_description</option>";
																							}
																						?>
																						</select>
																						<!--end::Select2-->

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
																							<span>Address Of Remitter</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the address of remitter."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="neft[address_of_remitter][1]"  value="" />
																						<!--end::Input-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->

																			</div>

																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span class="required">Template</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the template."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Select2-->
																						<select name="neft[template][1]"  aria-label="Select a template" data-control="select2" data-placeholder="Select a template..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
																						<option value="">Select</option>
																						<?php

																							$tbl_template = DB::select("select * from tbl_template");

																							foreach($tbl_template as $tbl_template){
																								$template_id=$tbl_template->id;
																								$template_description=$tbl_template->description;
																								$selected="";
																								/*if($user==$userid)
																								{
																									$selected="selected='selected'";
																								}*/

																								echo "<option $selected value='".$template_id."'>$template_description</option>";
																							}
																						?>
																						</select>
																						<!--end::Select2-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->
																			</div> --}}

																		</div>

																		<div class="separator mx-1 my-4"></div>
																	</div>
																	<?php
																	}
																	else
																	{
																			?>

																			<table id='neft_data_tbl' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border:1px solid;padding-left:15px;'>
																				<tr>
																					<th>Sr No.</th>
																					<th>Person Name</th>
																					<th>Phone No</th>
																					<th>Fax No</th>
																					<th>Email ID</th>
																					<th>Set As Default</th>
																					<th>Designation</th>
																					<th>Department</th>
																					<th>Edit</th>
																					<th>Delete</th>
																				</tr>

																				<?php
																				$communication_count=0;
																				$tbl_customer_communication_count = DB::select("select count(*) as totalcount from tbl_customer_communication where customer_id='".$id."'");
																				foreach($tbl_customer_communication_count as $tbl_customer_communication_count)
																				{
																					//var_dump($tbl_plants_count);die;
																					$communication_count=$tbl_customer_communication_count->totalcount;
																				}

																				if($communication_count==0)
																				{
																					?>
																					<tr>
																						<td colspan="9" style="text-align:center">No data available</td>
																					</tr>
																					<?php
																				}
																				else
																				{
																					$tbl_customer_communication = DB::select("select * from tbl_customer_communication where customer_id='".$id."'");

																					//$k=0;
																					foreach($tbl_customer_communication as $tbl_customer_communication)
																					{
																						//$k++;
																						//$neft_count++;
																						$communication_id=$tbl_customer_communication->id;
																						$communication_name=$tbl_customer_communication->communication_name;
																						$communication_phone_no=$tbl_customer_communication->communication_phone_no;
																						$communication_email=$tbl_customer_communication->communication_email;
																						$communication_fax_no=$tbl_customer_communication->communication_fax_no;
																						$communication_set_as_default=$tbl_customer_communication->communication_set_as_default;
																						$communication_designation=$tbl_customer_communication->communication_designation;
																						$communication_department=$tbl_customer_communication->communication_department;


																						$tbl_department   = DB::select("select * from tbl_department where id='".$communication_department."'");

																						$communication_department_name="";
																						foreach($tbl_department as $tbl_department)
																						{
																							$communication_department_name=$tbl_department->description;
																						}


																						if($communication_set_as_default=="1")
																						{
																							$communication_set_as_default="Yes";
																						}
																						else
																						{
																							$communication_set_as_default="No";
																						}
																						?>
																						<tr>
																						<td><?php echo $communication_id; ?></td>
																						<td><?php echo $communication_name; ?></td>
																						<td><?php echo $communication_phone_no; ?></td>
																						<td><?php echo $communication_fax_no; ?></td>
																						<td><?php echo $communication_email; ?></td>
																						<td><?php echo $communication_set_as_default; ?></td>
																						<td><?php echo $communication_designation; ?></td>
																						<td><?php echo $communication_department_name; ?></td>
																						<td><a href=""><a href="javascript:void(0);" class="edit_communication" edit-id="<?php echo $communication_id; ?>">Edit</a></a></td>
																						<td><a href="javascript:void(0);" class="remove_communication" delete-id="<?php echo $communication_id; ?>">Delete</a></td>
																						</tr>
																						<?php
																					}
																					?>

																					<?php
																				}
																				?>

																			</table>
																			<?php
																			echo '<div class="communication_field_wrapper" style="padding-top:30px">';

																				$tbl_rtgs_neft_count = DB::select("select count(*) as totalcount from tbl_rtgs_neft where company_id='".$id."'");
																				foreach($tbl_rtgs_neft_count as $tbl_rtgs_neft_count)
																				{
																					//var_dump($tbl_plants_count);die;
																					$neft_count=$tbl_rtgs_neft_count->totalcount;
																				}



																				//$neft_count++;
																				?>
																				<div class="communication_master">
																					<input type="hidden" name="communication[communication_id][1]" id="communication_id" value="0">
																					<input type="hidden" name="communication[communication_general_id][1]" id="communication_general_id" value="<?php echo $id; ?>">
																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Name</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the communication name."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" class="neft_required required_field form-control form-control-solid bank_name" id="communication_name" name="communication[communication_name][1]"  value="" />
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
																									<span >Phone No</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the phone number."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="communication_phone_no" class="neft_required required_field form-control form-control-solid" name="communication[communication_phone_no][1]"  value="" />
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->

																					</div>

																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Email</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="communication_email" class="required_field form-control form-control-solid" name="communication[communication_email][1]"  value="" />
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
																									<span >Fax No.</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the fax no."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="communication_fax_no" class="required_field form-control form-control-solid" name="communication[communication_fax_no][1]"  value="" />
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->

																					</div>

																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Set As Default</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the set as default."></i>
																								</label>
																								<!--end::Label-->

																								<!--begin::Select2-->
																								<select name="communication[communication_set_as_default][1]" id="communication_set_as_default"  aria-label="Select a set as default" data-control="select2" data-placeholder="Select a set as default..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
																								<option value="1">Yes</option>
																								<option value="0">No</option>
																								</select>
																								<!--end::Select2-->

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
																									<span>Designation</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the designation."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" class="required_field form-control form-control-solid" id="communication_designation" name="communication[communication_designation][1]"  value="" />
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->

																					</div>

																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Department</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the department."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Select2-->
																								<select name="communication[communication_department][1]" id="communication_department"  aria-label="Select a department" data-control="select2" data-placeholder="Select a department..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
																								<option value="">Select</option>
																								<?php

																									$tbl_department = DB::select("select * from tbl_department");

																									foreach($tbl_department as $tbl_department){
																										$department_id=$tbl_department->id;
																										$department_description=$tbl_department->description;
																										$selected="";
																										/*if($user==$userid)
																										{
																											$selected="selected='selected'";
																										}*/

																										echo "<option $selected value='".$department_id."'>$department_description</option>";
																									}
																								?>
																								</select>
																								<!--end::Select2-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->
																					</div>

																				</div>

																				<div class="separator mx-1 my-4"></div>
																				<?php



																			echo '</div>';

																	}

																	?>


																	<!-- begin::Separator-->
																	<!-- <div class="separator mb-6"></div> -->
																	<!--end::Separator -->
																	<!--begin::Action buttons-->
																	<div class="d-flex justify-content-end">
																		<!--begin::Button-->
																		<button type="reset" id="communication_cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="button" id="communication_submit_btn" name="communication_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="communication_ajax_submit();">
																			<span class="indicator-label">Save</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																		<!--end::Button-->
																	</div>
																	<!--end::Action buttons-->
																</form>

																</div>
																<!--end::Card body-->
															</div>
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->




														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_invoicing_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																	<!--begin::Form-->
																	<!-- <form class="form" method="POST" enctype="multipart/form-data"  name="frm_user" onsubmit="return false;" id="frm_user"> -->
																	<div class="separator mb-6"></div>
																	<form class="form" method="POST" enctype="multipart/form-data"  name="frm_invoicing"  id="frm_invoicing">
																		{{@csrf_field()}}


																		<?php

																		$invoicing_edit_id="0";
																		$bill_to_customer_no="";
																		$gen_bus_posting_group="";
																		$vat_bus_posting_group="";
																		$excise_bus_posting_group="";
																		$customer_posting_group="";





																		$tbl_customer_invoicing = DB::select("select * from tbl_customer_invoicing where customer_id='".$id."'");

																		//$k=0;
																		foreach($tbl_customer_invoicing as $tbl_customer_invoicing)
																		{

																					$invoicing_edit_id=$tbl_customer_invoicing->id;
																					$bill_to_customer_no=$tbl_customer_invoicing->bill_to_customer_no;
																					$gen_bus_posting_group=$tbl_customer_invoicing->gen_bus_posting_group;
																					$vat_bus_posting_group=$tbl_customer_invoicing->vat_bus_posting_group;
																					$excise_bus_posting_group=$tbl_customer_invoicing->excise_bus_posting_group	;
																					$customer_posting_group=$tbl_customer_invoicing->customer_posting_group;

																		}






																		?>

																		<input type="hidden" name="invoicing_edit_id" id="invoicing_edit_id" class="form-control input-sm" autocomplete="off" value="{{$invoicing_edit_id}}">
																		<input type="hidden" name="invoicing_general_id" id="invoicing_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">




																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">





																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Bill To Customer No</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="bill_to_customer_no" id="bill_to_customer_no" aria-label="Select Bill To Customer No" data-control="select2" data-placeholder="Select Bill To Customer No..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_customer_general = DB::select("select * from tbl_customer_general");

																								foreach($tbl_customer_general as $tbl_customer_general){
																									$customer_name=$tbl_customer_general->customer_name;
																									$customer_id=$tbl_customer_general->id;
																									$selected="";
																									if($bill_to_customer_no==$customer_id)
																									{
																										$selected="selected='selected'";
																									}
																									elseif($id==$customer_id)
																									{
																										$selected="selected='selected'";
																									}

																									echo "<option $selected value='".$customer_id."'>$customer_name</option>";
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


																		<!--begin::Col-->
																		<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Gen. Bus. Posting Group</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="gen_bus_posting_group" id="gen_bus_posting_group" aria-label="Select Gen. Bus. Posting Group" data-control="select2" data-placeholder="Select Gen. Bus. Posting Group..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_customer_gen_bus_posting_group = DB::select("select * from tbl_customer_gen_bus_posting_group");

																								foreach($tbl_customer_gen_bus_posting_group as $tbl_customer_gen_bus_posting_group){
																									$gen_bus_posting_group_name=$tbl_customer_gen_bus_posting_group->description;
																									$gen_bus_posting_group_id=$tbl_customer_gen_bus_posting_group->id;
																									$selected="";
																									if($gen_bus_posting_group==$gen_bus_posting_group_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$gen_bus_posting_group_id."'>$gen_bus_posting_group_name</option>";
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


																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">






																		<!--begin::Col-->
																		<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Vat. Bus. Posting Group</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="vat_bus_posting_group" id="vat_bus_posting_group" aria-label="Select Vat. Bus. Posting Group" data-control="select2" data-placeholder="Select Vat. Bus. Posting Group..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_customer_vat_bus_posting_group = DB::select("select * from tbl_customer_vat_bus_posting_group");

																								foreach($tbl_customer_vat_bus_posting_group as $tbl_customer_vat_bus_posting_group){
																									$vat_bus_posting_group_name=$tbl_customer_vat_bus_posting_group->description;
																									$vat_bus_posting_group_id=$tbl_customer_vat_bus_posting_group->id;
																									$selected="";
																									if($vat_bus_posting_group==$vat_bus_posting_group_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$vat_bus_posting_group_id."'>$vat_bus_posting_group_name</option>";
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


																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Excise. Bus. Posting Group</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="excise_bus_posting_group" id="excise_bus_posting_group" aria-label="Select Excise. Bus. Posting Group" data-control="select2" data-placeholder="Select Excise. Bus. Posting Group..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_customer_excise_bus_posting_group = DB::select("select * from tbl_customer_excise_bus_posting_group");

																								foreach($tbl_customer_excise_bus_posting_group as $tbl_customer_excise_bus_posting_group){
																									$excise_bus_posting_group_name=$tbl_customer_excise_bus_posting_group->description;
																									$excise_bus_posting_group_id=$tbl_customer_excise_bus_posting_group->id;
																									$selected="";
																									if($excise_bus_posting_group==$excise_bus_posting_group_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$excise_bus_posting_group_id."'>$excise_bus_posting_group_name</option>";
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



																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Customer Posting Group</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="customer_posting_group" id="customer_posting_group" aria-label="Select Customer Posting Group" data-control="select2" data-placeholder="Select Customer Posting Group..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_customer_posting_group = DB::select("select * from tbl_customer_posting_group");

																								foreach($tbl_customer_posting_group as $tbl_customer_posting_group){
																									$customer_posting_group_name=$tbl_customer_posting_group->description;
																									$customer_posting_group_id=$tbl_customer_posting_group->id;
																									$selected="";
																									if($customer_posting_group==$customer_posting_group_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$customer_posting_group_id."'>$customer_posting_group_name</option>";
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
																			<button type="button" id="submit_btn" name="submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="invoicing_ajax_submit();">
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
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->





														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_payment_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																	<!--begin::Form-->
																	<!-- <form class="form" method="POST" enctype="multipart/form-data"  name="frm_user" onsubmit="return false;" id="frm_user"> -->
																	<div class="separator mb-6"></div>
																	<form class="form" method="POST" enctype="multipart/form-data"  name="frm_payment"  id="frm_payment">
																		{{@csrf_field()}}


																		<?php

																		$payment_edit_id="0";
																		$payment_term_code="";
																		$payment_method_code="";
																		$credit_limit="";
																		$bank_name="";
																		$bank_branch="";
																		$bank_acc_no="";





																		$tbl_customer_payment = DB::select("select * from tbl_customer_payment where customer_id='".$id."'");

																		//$k=0;
																		foreach($tbl_customer_payment as $tbl_customer_payment)
																		{

																					$payment_edit_id=$tbl_customer_payment->id;
																					$payment_term_code=$tbl_customer_payment->payment_term_code;
																					$payment_method_code=$tbl_customer_payment->payment_method_code;
																					$credit_limit=$tbl_customer_payment->credit_limit;
																					$bank_name=$tbl_customer_payment->bank_name	;
																					$bank_branch=$tbl_customer_payment->bank_branch;
																					$bank_acc_no=$tbl_customer_payment->bank_acc_no;

																		}






																		?>

																		<input type="hidden" name="payment_edit_id" id="payment_edit_id" class="form-control input-sm" autocomplete="off" value="{{$payment_edit_id}}">
																		<input type="hidden" name="payment_general_id" id="payment_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">




																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">





																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Payment Term Code</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Payment Term Code."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="payment_term_code" id="payment_term_code" value="{{$payment_term_code}}" />
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
																						<span >Payment Method Code</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="payment_method_code" id="payment_method_code" aria-label="Select Payment Method Code" data-control="select2" data-placeholder="Select Payment Method Code..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_customer_payment_method = DB::select("select * from tbl_customer_payment_method");

																								foreach($tbl_customer_payment_method as $tbl_customer_payment_method){
																									$payment_method_name=$tbl_customer_payment_method->description;
																									$payment_method_id=$tbl_customer_payment_method->id;
																									$selected="";
																									if($payment_method_code==$payment_method_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$payment_method_id."'>$payment_method_name</option>";
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


																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Credit Limit (Rs)</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Credit Limit."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="credit_limit" id="credit_limit" value="{{$credit_limit}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->

																		</div>
																		<!--end::Row-->

																		<h2>Bank Details</h2>

																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Name</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Name."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="bank_name" id="bank_name" value="{{$bank_name}}" />
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
																						<span >Branch</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Branch."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="bank_branch" id="bank_branch" value="{{$bank_branch}}" />
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
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Acc. No.</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Acc. No.."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="bank_acc_no" id="bank_acc_no" value="{{$bank_acc_no}}" />
																					<!--end::Input-->
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
																			<button type="button" id="submit_btn" name="submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="payment_ajax_submit();">
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
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->




														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_shipping_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<div class="separator mb-6"></div>



																	<form class="form" method="POST" enctype="multipart/form-data"  name="frm_shipping"  id="frm_shipping">
																		{{@csrf_field()}}


																		<?php

																		$shipping_edit_id="0";
																		$shipping_method_code="";

																		$tbl_customer_shipping = DB::select("select * from tbl_customer_shipping where customer_id='".$id."'");

																		//$k=0;
																		foreach($tbl_customer_shipping as $tbl_customer_shipping)
																		{

																					$shipping_edit_id=$tbl_customer_shipping->id;
																					$shipping_method_code=$tbl_customer_shipping->shipping_method_code;

																		}

																		?>

																		<input type="hidden" name="shipping_edit_id" id="shipping_edit_id" class="form-control input-sm" autocomplete="off" value="{{$shipping_edit_id}}">
																		<input type="hidden" name="shipping_general_id" id="shipping_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">




																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">




																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Shipping Method Code</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="shipping_method_code" id="shipping_method_code" aria-label="Select Shipping Method Code" data-control="select2" data-placeholder="Select Shipping Method Code..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_customer_shipping_method = DB::select("select * from tbl_customer_shipping_method");

																								foreach($tbl_customer_shipping_method as $tbl_customer_shipping_method){
																									$shipping_method_name=$tbl_customer_shipping_method->description;
																									$shipping_method_id=$tbl_customer_shipping_method->id;
																									$selected="";
																									if($shipping_method_code==$shipping_method_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$shipping_method_id."'>$shipping_method_name</option>";
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
																			<button type="button" id="submit_btn" name="submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="shipping_ajax_submit();">
																				<span class="indicator-label">Save</span>
																				<span class="indicator-progress">Please wait...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																			<!--end::Button-->
																		</div>
																		<!--end::Action buttons-->
																	</form>

																</div>
																<!--end::Card body-->
															</div>
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->



														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_shipping_agent_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<div class="separator mb-6"></div>


																<?php


																$shipping_agent_edit_id="0";
																$shipping_agent_name="";
																$shipping_agent_address="";

																$tbl_customer_shipping_agent = DB::select("select * from tbl_customer_shipping_agent where customer_id='".$id."'");

																//$k=0;
																$shipping_agent_edit_id="0";
																$shipping_agent_name="";
																$shipping_agent_address="";

																foreach($tbl_customer_shipping_agent as $tbl_customer_shipping_agent)
																{

																			$shipping_agent_edit_id=$tbl_customer_shipping_agent->id;
																			$shipping_agent_name=$tbl_customer_shipping_agent->shipping_agent_name;
																			$shipping_agent_address=$tbl_customer_shipping_agent->shipping_agent_address;

																}

																?>

																<div style="text-align:right;padding-bottom:10px"><a href="javascript:void(0);" class="add_contact" title="Add Contact">Add</a></div>

																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_shipping_agent"  id="frm_shipping_agent">
																	{{@csrf_field()}}

																	<input type="hidden" name="shipping_agent_id" id="shipping_agent_id" class="form-control input-sm" autocomplete="off" value="{{$shipping_agent_edit_id}}">
																	<input type="hidden" name="shipping_agent_general_id" id="shipping_agent_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">

																	<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Input group-->
																			<div class="fv-row mb-7">
																				<!--begin::Label-->
																				<label class="fs-6 fw-bold form-label mt-3">
																					<span>Agent Name</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the agent name."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="neft_required form-control form-control-solid required_field" name="shipping_agent_name"  value="<?php echo $shipping_agent_name; ?>" />
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
																					<span>Address</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the address."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<textarea class="neft_required form-control form-control-solid required_field" name="shipping_agent_address" ><?php echo $shipping_agent_address; ?></textarea>
																				<!--end::Input-->
																			</div>
																			<!--end::Input group-->
																		</div>
																		<!--end::Col-->

																	</div>

																	<h2>Contact detail</h2>

																	<?php
																	if($id=="0")
																	{
																	?>
																	<div class="contact_field_wrapper" style="padding-top:30px">
																		<div class="contact_master">
																			<input type="hidden" name="neft[neft_id][1]" value="0">
																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span class="required">Person Name</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the person name."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="neft_required form-control form-control-solid required_field" name="contact[contact_person_name][1]"  value="" />
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
																							<span class="required">Position</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Position."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="neft_required required_field form-control form-control-solid" name="contact[contact_position][1]"  value="" />
																						<!--end::Input-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->

																			</div>

																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span>Email</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="contact[contact_email][1]"  value="" />
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
																							<span>Mobile</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the mobile."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" class="required_field form-control form-control-solid" name="contact[contact_mobile][1]"  value="" />
																						<!--end::Input-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->



																			</div>


																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Set As Default</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the set as default."></i>
																								</label>
																								<!--end::Label-->

																								<!--begin::Select2-->
																								<select name="contact[contact_set_as_default][1]" id="contact_set_as_default"  aria-label="Select a set as default" data-control="select2" data-placeholder="Select a set as default..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
																								<option value="1">Yes</option>
																								<option value="0">No</option>
																								</select>
																								<!--end::Select2-->

																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->



																					</div>


																		</div>

																		<div class="separator mx-1 my-4"></div>
																	</div>
																	<?php
																	}
																	else
																	{
																			?>
																			<br>
																			<table id='neft_data_tbl' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border:1px solid;padding-left:15px;'>
																				<tr>
																					<th>Id</th>
																					<th>Contact Person</th>
																					<th>Position</th>
																					<th>Email</th>
																					<th>Mobile</th>
																					<th>Is Default</th>
																					<th>Edit</th>
																					<th>Delete</th>
																				</tr>

																				<?php

																				//$contact_id=0;
																				$shipping_agent_contact_count=0;
																				$tbl_customer_shipping_agent_contact_count = DB::select("select count(*) as totalcount from tbl_customer_shipping_agent_contact where customer_id='".$id."'");
																				foreach($tbl_customer_shipping_agent_contact_count as $tbl_customer_shipping_agent_contact_count)
																				{
																					//var_dump($tbl_plants_count);die;
																					$shipping_agent_contact_count=$tbl_customer_shipping_agent_contact_count->totalcount;
																				}

																				if($shipping_agent_contact_count==0)
																				{
																					?>
																					<tr>
																						<td colspan="9" style="text-align:center">No data available</td>
																					</tr>
																					<?php
																				}
																				else
																				{
																					$tbl_customer_shipping_agent_contact = DB::select("select * from tbl_customer_shipping_agent_contact where customer_id='".$id."'");

																					//$k=0;
																					foreach($tbl_customer_shipping_agent_contact as $tbl_customer_shipping_agent_contact)
																					{
																						//$k++;
																						//$neft_count++;
																						$contact_id=$tbl_customer_shipping_agent_contact->id;
																						$contact_person_name=$tbl_customer_shipping_agent_contact->contact_person_name;
																						$contact_position=$tbl_customer_shipping_agent_contact->contact_position;
																						$contact_email=$tbl_customer_shipping_agent_contact->contact_email;
																						$contact_mobile=$tbl_customer_shipping_agent_contact->contact_mobile;
																						$contact_is_default=$tbl_customer_shipping_agent_contact->contact_is_default;





																						if($contact_is_default=="1")
																						{
																							$contact_is_default="Yes";
																						}
																						else
																						{
																							$contact_is_default="No";
																						}
																						?>
																						<tr>
																						<td><?php echo $contact_id; ?></td>
																						<td><?php echo $contact_person_name; ?></td>
																						<td><?php echo $contact_position; ?></td>
																						<td><?php echo $contact_email; ?></td>
																						<td><?php echo $contact_mobile; ?></td>
																						<td><?php echo $contact_is_default; ?></td>
																						<td><a href=""><a href="javascript:void(0);" class="edit_contact" edit-id="<?php echo $contact_id; ?>">Edit</a></a></td>
																						<td><a href="javascript:void(0);" class="remove_contact" delete-id="<?php echo $contact_id; ?>">Delete</a></td>
																						</tr>
																						<?php
																					}
																					?>

																					<?php
																				}
																				?>

																			</table>
																			<?php
																			echo '<div class="contact_field_wrapper" style="padding-top:30px">';

																				$tbl_customer_shipping_agent_contact_count = DB::select("select count(*) as totalcount from tbl_customer_shipping_agent_contact where customer_id='".$id."'");
																				foreach($tbl_customer_shipping_agent_contact_count as $tbl_customer_shipping_agent_contact_count)
																				{
																					//var_dump($tbl_plants_count);die;
																					$contact_count=$tbl_customer_shipping_agent_contact_count->totalcount;
																				}



																				//$neft_count++;
																				?>
																				<div class="contact_master">
																					<input type="hidden" name="contact[contact_id][1]" id="contact_id" value="0">
																					<input type="hidden" name="contact[contact_general_id][1]" id="contact_general_id" value="<?php echo $id; ?>">
																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Person Name</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Person Name."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" class="neft_required required_field form-control form-control-solid bank_name" id="contact_person_name" name="contact[contact_person_name][1]"  value="" />
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
																									<span >Position</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Position."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="contact_position" class="neft_required required_field form-control form-control-solid" name="contact[contact_position][1]"  value="" />
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->

																					</div>

																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Email</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="contact_email" class="required_field form-control form-control-solid" name="contact[contact_email][1]"  value="" />
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
																									<span >Mobile</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Mobile."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="contact_mobile" class="required_field form-control form-control-solid" name="contact[contact_mobile][1]"  value="" />
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->

																					</div>

																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Set As Default</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the set as default."></i>
																								</label>
																								<!--end::Label-->

																								<!--begin::Select2-->
																								<select name="contact[contact_set_as_default][1]" id="contact_set_as_default"  aria-label="Select a set as default" data-control="select2" data-placeholder="Select a set as default..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
																								<option value="1">Yes</option>
																								<option value="0">No</option>
																								</select>
																								<!--end::Select2-->

																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->



																					</div>



																				</div>

																				<div class="separator mx-1 my-4"></div>
																				<?php



																			echo '</div>';

																	}

																	?>


																	<!-- begin::Separator-->
																	<!-- <div class="separator mb-6"></div> -->
																	<!--end::Separator -->
																	<!--begin::Action buttons-->
																	<div class="d-flex justify-content-end">
																		<!--begin::Button-->
																		<button type="reset" id="shipping_agent_cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="button" id="shipping_agent_submit_btn" name="shipping_agent_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="shipping_agent_ajax_submit();">
																			<span class="indicator-label">Save</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																		<!--end::Button-->
																	</div>
																	<!--end::Action buttons-->
																</form>
																</div>
																<!--end::Card body-->
															</div>
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->




														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_export_trade_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<div class="separator mb-6"></div>


																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_export_trade"  id="frm_export_trade">
																		{{@csrf_field()}}


																		<?php

																		$export_trade_edit_id="0";
																		$currency_code="";
																		$vat_registration_no="";
																		$export_trade_company_name="";
																		$name_of_party="";
																		$product="";
																		$box_no="";
																		$size="";
																		$country="";

																		$tbl_customer_export_trade = DB::select("select * from tbl_customer_export_trade where customer_id='".$id."'");

																		//$k=0;
																		foreach($tbl_customer_export_trade as $tbl_customer_export_trade)
																		{

																					$export_trade_edit_id=$tbl_customer_export_trade->id;
																					$currency_code=$tbl_customer_export_trade->currency_code;
																					$vat_registration_no=$tbl_customer_export_trade->vat_registration_no;
																					$export_trade_company_name=$tbl_customer_export_trade->company_name;
																					$name_of_party=$tbl_customer_export_trade->name_of_party;
																					$product=$tbl_customer_export_trade->product;
																					$box_no=$tbl_customer_export_trade->box_no;
																					$size=$tbl_customer_export_trade->size;
																					$country=$tbl_customer_export_trade->country;

																		}

																		?>

																		<input type="hidden" name="export_trade_edit_id" id="export_trade_edit_id" class="form-control input-sm" autocomplete="off" value="{{$export_trade_edit_id}}">
																		<input type="hidden" name="export_trade_general_id" id="export_trade_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">




																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">


																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Currency Code</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="currency_code" id="currency_code" aria-label="Select Currency Code" data-control="select2" data-placeholder="Select Currency Code..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$tbl_currency = DB::select("select * from tbl_currency");

																								foreach($tbl_currency as $tbl_currency){
																									$currency_name=$tbl_currency->description;
																									$currency_id=$tbl_currency->id;
																									$selected="";
																									if($currency_code==$currency_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$currency_id."'>$currency_name</option>";
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


																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Vat Registration No.</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Vat Registration No.."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="vat_registration_no" id="vat_registration_no" value="{{$vat_registration_no}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->

																		</div>
																		<!--end::Row-->

																		<h2>Shipping Mark</h2>

																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Company Name.</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Company Name.."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="company_name" id="company_name" value="{{$export_trade_company_name}}" />
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
																						<span >Name Of Party</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Name Of Party."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="name_of_party" id="name_of_party" value="{{$name_of_party}}" />
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
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Product</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Product"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="product" id="product" value="{{$product}}" />
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
																						<span >Box No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Box No."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="box_no" id="box_no" value="{{$box_no}}" />
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
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Size</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Size"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="size" id="size" value="{{$size}}" />
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
																						<span >Country</span>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="country" id="country" aria-label="Select Country" data-control="select2" data-placeholder="Select Country..."  class="form-select form-select-solid lh-1 py-3">
																							<option value="">Select</option>
																							<?php
																								$mst_country = DB::select("select * from mst_country");

																								foreach($mst_country as $mst_country){
																									$country_name=$mst_country->description;
																									$country_id=$mst_country->id;
																									$selected="";
																									if($country==$country_id)
																									{
																										$selected="selected='selected'";
																									}
																									echo "<option $selected value='".$country_id."'>$country_name</option>";
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
																			<button type="button" id="submit_btn" name="submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="export_trade_ajax_submit();">
																				<span class="indicator-label">Save</span>
																				<span class="indicator-progress">Please wait...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																			<!--end::Button-->
																		</div>
																		<!--end::Action buttons-->
																	</form>

																</div>
																<!--end::Card body-->
															</div>
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->





														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="kt_customer_view_tax_information_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<div class="separator mb-6"></div>


																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_tax_information"  id="frm_tax_information">
																		{{@csrf_field()}}


																		<?php

																		$tax_information_edit_id="0";

																		$gst_no="";
																		$arn_no="";
																		$lst_no="";
																		$lst_no_dated="";
																		$cst_no="";
																		$cst_no_dated="";
																		$lbt_no="";
																		$lbt_no_dated="";

																		$ecc_no="";
																		$range="";
																		$collectorate="";

																		$pan_no="";
																		$pan_status="";
																		$pan_references_no="";

																		$vat_no="";
																		$vat_no_dated="";
																		$tin_no="";
																		$export_or_deemed_export="";
																		$vat_exempted="";

																		$nature_of_service="";


																		$tbl_customer_tax_information = DB::select("select * from tbl_customer_tax_information where customer_id='".$id."'");

																		//$k=0;
																		foreach($tbl_customer_tax_information as $tbl_customer_tax_information)
																		{
																				$gst_no=$tbl_customer_tax_information->gst_no;
																				$arn_no=$tbl_customer_tax_information->arn_no;
																				$lst_no=$tbl_customer_tax_information->lst_no;
																				$lst_no_dated=$tbl_customer_tax_information->lst_no_dated;
																				$cst_no=$tbl_customer_tax_information->cst_no;
																				$cst_no_dated=$tbl_customer_tax_information->cst_no_dated;
																				$lbt_no=$tbl_customer_tax_information->lbt_no;
																				$lbt_no_dated=$tbl_customer_tax_information->lbt_no_dated;
																				$ecc_no=$tbl_customer_tax_information->ecc_no;
																				$range=$tbl_customer_tax_information->range;
																				$collectorate=$tbl_customer_tax_information->collectorate;
																				$pan_no=$tbl_customer_tax_information->pan_no;
																				$pan_status=$tbl_customer_tax_information->pan_status;
																				$pan_references_no=$tbl_customer_tax_information->pan_references_no;
																				$vat_no=$tbl_customer_tax_information->vat_no;
																				$vat_no_dated=$tbl_customer_tax_information->vat_no_dated;
																				$tin_no=$tbl_customer_tax_information->tin_no;
																				$export_or_deemed_export=$tbl_customer_tax_information->export_or_deemed_export;
																				$vat_exempted=$tbl_customer_tax_information->vat_exempted;
																				$nature_of_service=$tbl_customer_tax_information->nature_of_service;
																		}

																		?>

																		<input type="hidden" name="tax_information_edit_id" id="tax_information_edit_id" class="form-control input-sm" autocomplete="off" value="{{$tax_information_edit_id}}">
																		<input type="hidden" name="tax_information_general_id" id="tax_information_general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">




																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">


																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span>GST No.</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the GST No."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="gst_no" id="gst_no" value="{{$gst_no}}" />
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
																						<span >ARN No.</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the ARN No..."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="arn_no" id="arn_no" value="{{$arn_no}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->

																		</div>
																		<!--end::Row-->

																		<h2>Tax</h2>

																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >L.S.T. No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the L.S.T. No"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="lst_no" id="lst_no" value="{{$lst_no}}" />
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
																						<span >L.S.T. No. dated</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the L.S.T. No. dated."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="lst_no_dated" id="lst_no_dated" value="{{$lst_no_dated}}" />
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
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >C.S.T. No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the C.S.T. No"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="cst_no" id="cst_no" value="{{$cst_no}}" />
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
																						<span >C.S.T. No. dated</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the C.S.T. No. dated."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="cst_no_dated" id="cst_no_dated" value="{{$cst_no_dated}}" />
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
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >LBT No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the LBT No"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="lbt_no" id="lbt_no" value="{{$lbt_no}}" />
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
																						<span >L.B.T. No. dated</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the L.B.T. No. datedo"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="lbt_no_dated" id="lbt_no_dated" value="{{$lbt_no_dated}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->

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
																							if($freight_charges_before_tax=="1")
																							{
																								$checked="checked";
																							}
																							else
																							{
																								$checked="";
																							}
																						?>
																						<input class="form-check-input tax_liable" {{$checked}} txt_name="tax_liable" type="checkbox" value="1" id="tax_liable" name="tax_liable" />&nbsp;&nbsp;<label  class="fs-6 fw-bold form-label mt-3"><span>Tax Liable</span></label>
																					</div>
																					</div>
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->


																		</div>
																		<!--end::Row-->

																		<h2>Excise</h2>

																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >E.C.C No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the E.C.C No"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="ecc_no" id="ecc_no" value="{{$ecc_no}}" />
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
																						<span >Range</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Range"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="range" id="range" value="{{$range}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->

																		</div>

																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Collectorate</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Collectorate"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="collectorate" id="collectorate" value="{{$collectorate}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->



																		</div>

																		<h2>Income Tax</h2>

																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >Pan No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Pan No"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="pan_no" id="pan_no" value="{{$pan_no}}" />
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
																							<span >Pan Status</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Pan Status."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Select2-->
																						<select name="pan_status"  aria-label="Select a Pan Status" data-control="select2" data-placeholder="Select a Pan Status..."  class="neft_required form-select form-select-solid lh-1 py-3 required_field">
																						<option value="">Select</option>
																						<?php

																							$tbl_customer_pan_status = DB::select("select * from tbl_customer_pan_status");

																							foreach($tbl_customer_pan_status as $tbl_customer_pan_status){
																								$pan_status_id=$tbl_customer_pan_status->id;
																								$pan_status_name=$tbl_customer_pan_status->description;
																								$selected="";
																								/*if($user==$userid)
																								{
																									$selected="selected='selected'";
																								}*/

																								echo "<option $selected value='".$pan_status_id."'>$pan_status_name</option>";
																							}
																						?>
																						</select>
																						<!--end::Select2-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->

																		</div>

																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span class="required">Pan References No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Pan References No	"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="pan_references_no" id="pan_references_no" value="{{$pan_references_no}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->



																		</div>

																		<h2>Vat</h2>

																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >VAT No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the VAT No"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="vat_no" id="vat_no" value="{{$vat_no}}" />
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
																						<span >V.A.T. No. dated</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the V.A.T. No. dated"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="vat_no_dated" id="vat_no_dated" value="{{$vat_no_dated}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->

																		</div>

																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span >T.I.N. No</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the T.I.N. No"></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="tin_no" id="tin_no" value="{{$tin_no}}" />
																					<!--end::Input-->
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->




																		</div>

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
																						if($export_or_deemed_export=="1")
																						{
																							$checked="checked";
																						}
																						else
																						{
																							$checked="";
																						}
																					?>
																					<input class="form-check-input tax_liable" {{$checked}} txt_name="tax_liable" type="checkbox" value="1" id="export_or_deemed_export" name="export_or_deemed_export" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Export Or Deemed Export</span></label>
																				</div>
																				</div>
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->


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
																						if($vat_exempted=="1")
																						{
																							$checked="checked";
																						}
																						else
																						{
																							$checked="";
																						}
																					?>
																					<input class="form-check-input tax_liable" {{$checked}} txt_name="tax_liable" type="checkbox" value="1" id="vat_exempted" name="vat_exempted" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Vat Exempted</span></label>
																				</div>
																				</div>
																				</div>
																				<!--end::Input group-->
																			</div>
																			<!--end::Col-->



																		</div>

																		<h2>Service Tax</h2>

																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span >Nature Of Service</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Nature Of Service."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Select2-->
																						<select name="nature_of_service"  aria-label="Select a Nature Of Service" data-control="select2" data-placeholder="Select a Nature Of Service..."  class="neft_required form-select form-select-solid lh-1 py-3 required_field">
																						<option value="">Select</option>
																						<?php

																							$tbl_customer_nature_of_service = DB::select("select * from tbl_customer_nature_of_service");

																							foreach($tbl_customer_nature_of_service as $tbl_customer_nature_of_service){
																								$nature_of_service_id=$tbl_customer_nature_of_service->id;
																								$nature_of_service_name=$tbl_customer_nature_of_service->description;
																								$selected="";
																								if($nature_of_service==$nature_of_service_id)
																								{
																									$selected="selected='selected'";
																								}

																								echo "<option $selected value='".$nature_of_service_id."'>$nature_of_service_name</option>";
																							}
																						?>
																						</select>
																						<!--end::Select2-->
																					</div>
																					<!--end::Input group-->
																				</div>
																				<!--end::Col-->



																		</div>





																		<!--begin::Separator-->
																		<div class="separator mb-6"></div>
																		<!--end::Separator-->
																		<!--begin::Action buttons-->
																		<div class="d-flex justify-content-end">
																			<!--begin::Button-->
																			<button type="reset" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
																			<!--end::Button-->
																			<!--begin::Button-->
																			<button type="button" id="submit_btn" name="submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="tax_information_ajax_submit();">
																				<span class="indicator-label">Save</span>
																				<span class="indicator-progress">Please wait...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																			<!--end::Button-->
																		</div>
																		<!--end::Action buttons-->
																	</form>

																</div>
																<!--end::Card body-->
															</div>
															<!--end::Card-->

														</div>
														<!--end:::Tab pane-->

													</div>
													<!--end:::Tab content-->
												</div>
												<!--end::Content-->



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
		var frm_rtgs_neft = $('#frm_rtgs_neft');
		var frm_delivery_location = $('#frm_delivery_location');
		var frm_communication = $('#frm_communication');
		var frm_invoicing = $('#frm_invoicing');
		var frm_payment = $('#frm_payment');
		var frm_shipping = $('#frm_shipping');
		var frm_shipping_agent = $('#frm_shipping_agent');
		var frm_export_trade = $('#frm_export_trade');
		var frm_tax_information = $('#frm_tax_information');






		var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);

		$(document).ready(function() {



  // Search all columns
  $('#txt_searchall').keyup(function(){
    // Search Text
    var search = $(this).val();

    // Hide all table tbody rows
    $('#delivery_location_tbl tbody tr').hide();

    // Count total search result
    var len = $('#delivery_location_tbl tbody tr:not(.notfound) td:contains("'+search+'")').length;

    if(len > 0){
      // Searching text in columns and show match row
      $('#delivery_location_tbl tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
        $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
    }

  });


  // Case-insensitive searching (Note - remove the below script for Case sensitive search )
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
});
			var tab="<?php echo $tab; ?>";
			if(tab=="general")
			{
				document.getElementById('general_link').click();
			}
			else if(tab=="deliverylocation")
			{
				document.getElementById('delivery_location_link').click();
			}
			else if(tab=="communication")
			{
				document.getElementById('communication_link').click();
			}
			else if(tab=="invoicing")
			{
				document.getElementById('invoicing_link').click();
			}
			else if(tab=="payment")
			{
				document.getElementById('payment_link').click();
			}
			else if(tab=="shipping")
			{
				document.getElementById('shipping_link').click();
			}
			else if(tab=="shipping_agent")
			{
				document.getElementById('shipping_agent_link').click();
			}
			else if(tab=="export_trade")
			{
				document.getElementById('export_trade_link').click();
			}
			else if(tab=="tax_information")
			{
				document.getElementById('tax_information_link').click();
			}
			else
			{
				document.getElementById('general_link').click();
			}


			var edit_id=$("#edit_id").val();
			var maxField = 1000; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var communication_wrapper = $('.communication_field_wrapper'); //Input field wrapper
			var contact_wrapper = $('.contact_field_wrapper'); //Input field wrapper

			//var wrapper = $('.field_wrapper'); //Input field wrapper
			// <td><a href="javascript:void(0);" class="remove_button">Delete</a></td>
			if(edit_id==0)
			{
				var x = 1; //Initial field counter is 1
				var communication_x=2;
				var contact_x=2;
				//alert("here");
				//$('#neft_link').click(function () {return false;});
				//$('#neft_link').attr("disabled","disabled");
			}
			else
			{
				var x="<?php echo $plants_count; ?>";
				//var neft_x="<?php //echo $neft_count; ?>";
				var communication_x=2;
				var contact_x=2;
				//var k="<?php //echo $k; ?>";
				//alert(x);
				//alert(neft_x);
				//alert(k);
				//var plants_count="<?php //echo $plants_count; ?>";
			}

			//Once add button is clicked

			$(document).on('focus',".ecc_no_dated", function(){
				$(this).daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				});
			});

			$(document).on('focus',".sales_tax_regs_no_dated", function(){
				$(this).daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				});
			});

			var edit_id=$("#edit_id").val();
			if(edit_id=="0")
			{


				$("#lst_no_dated").daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				});

				$("#cst_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
				});

				$("#lbt_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
				});

				$("#vat_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						});
			}
			else
			{
					var lst_no_dated="<?php echo $lst_no_dated; ?>";
					if(lst_no_dated=="")
					{
						$("#lst_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						});
					}
					else
					{
						$("#lst_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
							startDate: "<?php echo $lst_no_dated; ?>",
						});
					}



					var cst_no_dated="<?php echo $cst_no_dated; ?>";
					if(cst_no_dated=="")
					{
						$("#cst_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						});
					}
					else
					{
						$("#cst_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
							startDate: "<?php echo $cst_no_dated; ?>",
						});
					}


					var lbt_no_dated="<?php echo $lbt_no_dated; ?>";
					if(lbt_no_dated=="")
					{
						$("#lbt_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						});
					}
					else
					{
						$("#lbt_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
							startDate: "<?php echo $lbt_no_dated; ?>",
						});
					}

					var vat_no_dated="<?php echo $vat_no_dated; ?>";
					if(vat_no_dated=="")
					{
						$("#vat_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						});
					}
					else
					{
						$("#vat_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
							startDate: "<?php echo $vat_no_dated; ?>",
						});
					}
			}

			$(addButton).click(function(){

				//Check maximum number of input fields
				if(x < maxField){
					x++; //Increment field counter
					var fieldHTML = '<tr><td><input class="form-control form-control-solid required_validation" type="hidden" name="plants[plants_id]['+x+']" value="0"/><input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/></td><td><input class="form-control form-control-solid required_validation" type="text" name="plants[sales_tax_regs_no]['+x+']" value=""/></td><td><input class="form-control form-control-solid ecc_no_dated required_validation" type="text" name="plants[ecc_no_dated]['+x+']" value=""/></td><td><input class="form-control form-control-solid sales_tax_regs_no_dated required_validation" type="text" name="plants[sales_tax_regs_no_dated]['+x+']" value=""/></td><td><a href="javascript:void(0);" class="remove_button" delete-id="0">Delete</a></td></tr>';
					$(wrapper).append(fieldHTML); //Add field html
				}
			});


			$(".add_communication").click(function(){
				//alert("here");
				//alert(communication_x);
				//var fieldHTML="";
				//Check maximum number of input fields
				if(communication_x < maxField){
					communication_x++; //Increment field counter
					var neft_fieldHTML= '<div class="communication_master">';
					neft_fieldHTML+='<input type="hidden" name="communication[communication_id]['+communication_x+']" value="0">';

					neft_fieldHTML+='<div style="text-align:right"><a  href="javascript:void(0);" class="remove_communication" delete-id="0">Delete</a></div>';

					//start

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Name</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the communication name."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="neft_required required_field form-control form-control-solid" name="communication[communication_name]['+communication_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Phone Number</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the phone number."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="neft_required required_field form-control form-control-solid" name="communication[communication_phone_no]['+communication_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';



					///2nd

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Email</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="communication[communication_email]['+communication_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Fax No</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the fax no."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="communication[communication_fax_no]['+communication_x+']" value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';





					neft_fieldHTML+='</div>';

					//third


					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Set As Default</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the set as default."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="communication[communication_set_as_default]['+communication_x+']"  aria-label="Select a default" data-control="select2" data-placeholder="Select a set as default..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
					neft_fieldHTML+='<option value="1">Yes</option>';
					neft_fieldHTML+='<option value="0">No</option>';

					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';


					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Designation</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the designation."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="communication[communication_designation]['+communication_x+']"  value="" />';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';





					//fifth

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Department</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the department."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="communication[communication_department]['+communication_x+']"  aria-label="Select a department" data-control="select2" data-placeholder="Select a department..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_department = DB::select("select * from tbl_department");
						$tbl_department_option="";
						foreach($tbl_department as $tbl_department)
						{
							$department_id=$tbl_department->id;
							$department_description=$tbl_department->description;
							$tbl_department_option.="<option  value='".$department_id."'>$department_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_department_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number





					neft_fieldHTML+='</div>';



					//finish
					neft_fieldHTML+='<div class="separator mx-1 my-4"></div>';
					neft_fieldHTML+='</div>';

					$(communication_wrapper).append(neft_fieldHTML); //Add field html
				}
			});




			$(".add_contact").click(function(){
				//alert("here");
				//alert(communication_x);
				//var fieldHTML="";
				//Check maximum number of input fields
				if(contact_x < maxField){
					communication_x++; //Increment field counter
					var neft_fieldHTML= '<div class="contact_master">';
					neft_fieldHTML+='<input type="hidden" name="contact[contact_id]['+contact_x+']" value="0">';

					neft_fieldHTML+='<div style="text-align:right"><a  href="javascript:void(0);" class="remove_contact" delete-id="0">Delete</a></div>';

					//start

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Person Name</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the person name."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="neft_required required_field form-control form-control-solid" name="contact[contact_person_name]['+contact_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Position</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the position."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="neft_required required_field form-control form-control-solid" name="contact[contact_position]['+contact_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';



					///2nd

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Email</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="contact[contact_email]['+contact_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Mobile</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the mobile."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="contact[contact_mobile]['+contact_x+']" value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';





					neft_fieldHTML+='</div>';

					//third


					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Set As Default</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the set as default."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="contact[contact_set_as_default]['+contact_x+']"  aria-label="Select a default" data-control="select2" data-placeholder="Select a set as default..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
					neft_fieldHTML+='<option value="1">Yes</option>';
					neft_fieldHTML+='<option value="0">No</option>';

					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';






					neft_fieldHTML+='</div>';









					//finish
					neft_fieldHTML+='<div class="separator mx-1 my-4"></div>';
					neft_fieldHTML+='</div>';

					$(contact_wrapper).append(neft_fieldHTML); //Add field html
				}
			});



			$(".edit_delivery_location").click(function()
			{
				var edit_id=$(this).attr('edit-id');
				$.ajax({
							type: "POST",
							data: "edit_id="+edit_id,
							url: "{{ URL::to('editdeliverylocation') }}",
							success: function (response_json) {
								var response= JSON.parse(response_json);
								//alert(response.message);
								if (response.message=='')
								{
									$('#delivery_location_id').val(response.delivery_location_id);
									$('#delivery_location').val(response.delivery_location);
									$('#delivery_location_gst_no').val(response.delivery_location_gst_no);

									$('#delivery_location_status').val(response.delivery_location_status).trigger('change');
								}else{
									//alert("else part");
									//ShowAlret(response.message,response.alert_type);
								}
							}
						});
			});

			$(".edit_communication").click(function()
			{
				var edit_id=$(this).attr('edit-id');
				$.ajax({
							type: "POST",
							data: "edit_id="+edit_id,
							url: "{{ URL::to('editdcommunication') }}",
							success: function (response_json) {
								var response= JSON.parse(response_json);
								//alert(response.message);
								if (response.message=='')
								{

									$('input[name="communication[communication_id][1]').val(response.communication_id);
									//$('#communication_id').val(response.communication_id);
									$('#communication_name').val(response.communication_name);
									$('#communication_phone_no').val(response.communication_phone_no);

									$('#communication_email').val(response.communication_email);
									$('#communication_fax_no').val(response.communication_fax_no);
									//$('#communication_set_as_default').val(response.communication_set_as_default);
									$('#communication_designation').val(response.communication_designation);
									//$('#communication_department').val(response.communication_department);
									//$('#communication_department').val(response.communication_department).trigger('change');
									//alert(response.communication_department);
									$('#communication_department').val(response.communication_department).trigger('change');
									$('#communication_set_as_default').val(response.communication_set_as_default).trigger('change');
								}else{
									//alert("else part");
									//ShowAlret(response.message,response.alert_type);
								}
							}
						});
			});



			$(".edit_contact").click(function()
			{
				var edit_id=$(this).attr('edit-id');
				$.ajax({
							type: "POST",
							data: "edit_id="+edit_id,
							url: "{{ URL::to('editdcontact') }}",
							success: function (response_json) {
								var response= JSON.parse(response_json);
								//alert(response.message);
								if (response.message=='')
								{

									$('#contact_id').val(response.contact_id);
									$('#contact_person_name').val(response.contact_person_name);
									$('#contact_position').val(response.contact_position);
									$('#contact_email').val(response.contact_email);
									$('#contact_mobile').val(response.contact_mobile);

									//alert(response.contact_is_default);

									$('#contact_set_as_default').val(response.contact_is_default).trigger('change');
								}else{
									//alert("else part");
									//ShowAlret(response.message,response.alert_type);
								}
							}
						});
			});


			$(".remove_delivery_location").click(function()
			{
				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);
				$(this).closest('tr').remove();
				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deletedeliverylocation') }}",
					data : {'id' : delete_id},
							success: function (response_json)
							{
								var response= JSON.parse(response_json);
								//alert(response.alert_type);
								if(response.alert_type=="error")
								{
									swal.fire({ text: response.message}).then(function(){
												//location.reload();
												//datatablerefresh();
											}
											);

								}
								else
								{
									swal.fire({ text: response.message}).then(function(){
											//location.reload();
											//datatablerefresh();
											 //Remove field html

										}
										);
								}

								}
                    });

   			});

			//Once remove button is clicked
			$(communication_wrapper).on('click', '.remove_communication', function(e)
			{
				e.preventDefault();

				//alert("my data");

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('.communication_master').remove(); //Remove field html
				}
				else
				{
					//alert("here");
					//return false;

				}

			});



			$(wrapper).on('click', '.remove_communication', function(e)
			{
				e.preventDefault();

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('tr').remove(); //Remove field html
				}
				else
				{
					//alert("here");
					//return false;
					$(this).closest('tr').remove();
					$.ajax({
						type: "POST",
						//data: $('#master_frm').serialize()+ "&opt="+opt,
						url : "{{ URL::to('deletecommunication') }}",
						data : {'id' : delete_id},
								success: function (response_json)
								{
									var response= JSON.parse(response_json);
									//alert(response.alert_type);
									if(response.alert_type=="error")
									{
										swal.fire({ text: response.message}).then(function(){
													//location.reload();
													//datatablerefresh();
												}
												);

									}
									else
									{
										swal.fire({ text: response.message}).then(function(){
												//location.reload();
												//datatablerefresh();
												//Remove field html

											}
											);
									}

									}
						});
				}

			});


			$(contact_wrapper).on('click', '.remove_contact', function(e)
			{
				e.preventDefault();

				//alert("my data");

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('.contact_master').remove(); //Remove field html
				}
				else
				{
					//alert("here");
					//return false;

				}

			});


			$(wrapper).on('click', '.remove_contact', function(e)
			{
				e.preventDefault();

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('tr').remove(); //Remove field html
				}
				else
				{
					//alert("here");
					//return false;
					$(this).closest('tr').remove();
					$.ajax({
						type: "POST",
						//data: $('#master_frm').serialize()+ "&opt="+opt,
						url : "{{ URL::to('deletecontact') }}",
						data : {'id' : delete_id},
								success: function (response_json)
								{
									var response= JSON.parse(response_json);
									//alert(response.alert_type);
									if(response.alert_type=="error")
									{
										swal.fire({ text: response.message}).then(function(){
													//location.reload();
													//datatablerefresh();
												}
												);

									}
									else
									{
										swal.fire({ text: response.message}).then(function(){
												//location.reload();
												//datatablerefresh();
												//Remove field html

											}
											);
									}

									}
						});
				}

			});

			//Once remove button is clicked
			$(wrapper).on('click', '.remove_button', function(e)
			{
				e.preventDefault();

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('tr').remove(); //Remove field html
				}
				else
				{
					//alert("here");
					//return false;
					$(this).closest('tr').remove();
					$.ajax({
						type: "POST",
						//data: $('#master_frm').serialize()+ "&opt="+opt,
						url : "{{ URL::to('deleteplants') }}",
						data : {'id' : delete_id},
								success: function (response_json)
								{
									var response= JSON.parse(response_json);
									//alert(response.alert_type);
									if(response.alert_type=="error")
									{
										swal.fire({ text: response.message}).then(function(){
													//location.reload();
													//datatablerefresh();
												}
												);

									}
									else
									{
										swal.fire({ text: response.message}).then(function(){
												//location.reload();
												//datatablerefresh();
												//Remove field html

											}
											);
									}

									}
						});
				}

			});


			if(edit_id=="0")
			{
				/*$("#attention_of").daterangepicker({
				locale: {
							format: 'YYYY-MM-DD',
						},
				singleDatePicker: true,
				showDropdowns: true,
				minYear: 2015,
				maxYear: 2025,
				});*/

				$("#ecc_dated").daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				});

				$("#service_reg_no_dated").daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				});
			}
			else
			{

				/*$("#attention_of").daterangepicker({
				locale: {
							format: 'YYYY-MM-DD',
						},
				singleDatePicker: true,
				showDropdowns: true,
				minYear: 2015,
				maxYear: 2025,
				startDate: "<?php //echo $attention_of; ?>",
				});*/

				var ecc_dated="<?php echo $ecc_dated; ?>";
				var service_reg_no_dated="<?php echo $service_reg_no_dated; ?>";

				if(ecc_dated=="")
				{
					$("#ecc_dated").daterangepicker({
						locale: {
									format: 'YYYY-MM-DD',
								},
						singleDatePicker: true,
						showDropdowns: true,
						minYear: 2015,
						maxYear: 2025,
					});
				}
				else
				{

					$("#ecc_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						startDate: "<?php echo $ecc_dated; ?>",
					});
				}


				if(service_reg_no_dated=="")
				{
					$("#service_reg_no_dated").daterangepicker({
						locale: {
									format: 'YYYY-MM-DD',
								},
						singleDatePicker: true,
						showDropdowns: true,
						minYear: 2015,
						maxYear: 2025,
					});
				}
				else
				{
					$("#service_reg_no_dated").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						startDate: "<?php echo $service_reg_no_dated; ?>",
					});
				}



		}
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
					t.value?(window.location.href = "{{ URL::to('company') }}"):"cancel"===t.dismiss&&Swal.fire({
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
						customer_name: {
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
						customer_no: {
										required: true,
										//number: true,
										//minlength: 10,
										//maxlength: 13
									},
						company: {
							required: true
                        }
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
                        company_name: {
                            required: "This field is required",
                            //remote: "This state already exists. Please try another state.",
                        },
						company_prefix:{
							minlength: "Prefix length should be 3 character.",
							minlength: "Prefix length should be 3 character.",
						}
                    }
                });
		});



		function ajax_submit() {

				//alert("here");

				// $('input.required_validation').each(function(event) {
				// 	 //alert($(this).val());
				// 	 //alert($(this).attr('name'));

				// 	if($(this).val()=="")
				// 	{
				// 		//alert("Please enter value in plans details.");
				// 		//return false;
				// 		Swal.fire('Please enter value in plans details.', '', 'error');
				// 		event.preventDefault();
				// 		return false;
				// 	}
            	// });

				var ajax_url = "{{ URL::to('submitcustomer') }}";
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
								//alert(data.company_id);
								//alert($("#company_id").val());
								//var inserted_company_id=data.company_id;
								//alert(inserted_company_id);
								//alert(data.general_id);
								$("#general_id").val(data.general_id);
								//alert($("#company_id").val());
                                if (data.mode=='add'){

									$("#edit_id").val('');
									//$('#neft_link').removeAttr("disabled");
									//document.getElementById('neft_link').click();

									//alert("add");


									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//document.getElementById('delivery_location_link').click();
														window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/deliverylocation";
														//$('#neft_link').trigger('click');
														//window.location.href = "{{ URL::to('company') }}";
													}
													);


								}
								else{
									//alert("edit");
									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/deliverylocation";
														//document.getElementById('delivery_location_link').click();
														//window.location.href = "{{ URL::to('company') }}";
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
														//window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+$("#edit_id").val()+"/deliverylocation";
														//window.location.href = "{{ URL::to('company') }}";
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+$("#edit_id").val()+"/deliverylocation";
														//window.location.href = "{{ URL::to('company') }}";
													}
													);


								}
							}

                    }
                });
            }


function delivery_location_ajax_submit(event)
{


	if($("#delivery_location_general_id").val()=="0")
	{
		Swal.fire('You can not add delivery location details befor adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submitdeliverylocation') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_delivery_location.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/communication";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/communication";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);


					}
				}

		}
	});
}


function communication_ajax_submit(event)
{


	if($("#communication_general_id").val()=="0")
	{
		Swal.fire('You can not add communication details befor adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submitcommunication') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_communication.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/invoicing";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php //echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/invoicing";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);


					}
				}

		}
	});
}


function invoicing_ajax_submit(event)
{


	if($("#invoicing_general_id").val()=="0")
	{
		Swal.fire('You can not add invoicing details befor adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submitinvoicing') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_invoicing.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/payment";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php //echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/payment";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);


					}
				}

		}
	});
}


function payment_ajax_submit(event)
{


	if($("#payment_general_id").val()=="0")
	{
		Swal.fire('You can not add payment details befor adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submitpayment') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_payment.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/shipping";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php //echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/shipping";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);


					}
				}

		}
	});
}

function shipping_ajax_submit(event)
{


	if($("#shipping_general_id").val()=="0")
	{
		Swal.fire('You can not add shipping details befor adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submitshipping') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_shipping.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/shipping_agent";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php //echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/shipping_agent";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);


					}
				}

		}
	});
}


function shipping_agent_ajax_submit(event)
{


	if($("#shipping_agent_general_id").val()=="0")
	{
		Swal.fire('You can not add shipping agent details befor adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submitshippingagent') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_shipping_agent.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/export_trade";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php //echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/export_trade";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);


					}
				}

		}
	});
}


function export_trade_ajax_submit(event)
{


	if($("#export_trade_general_id").val()=="0")
	{
		Swal.fire('You can not add export trade details before adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submitexporttrade') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_export_trade.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/tax_information";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php //echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customeraddedit/"); ?>"+"/"+data.general_id+"/tax_information";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
										}
										);


					}
				}

		}
	});
}



function tax_information_ajax_submit(event)
{


	if($("#tax_information_general_id").val()=="0")
	{
		Swal.fire('You can not add tax information details before adding general details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {



	var ajax_url = "{{ URL::to('submittaxinformation') }}";
	//var new_inserted_comp_id=$("#company_id").val();
	$("#lns-error").hide();
	$('#lns-error').css('display', 'none');

	/*if (!frm_rtgs_neft.valid()) {
		//btncs.stop();
		//$.unblockUI();
		return false;
	}*/

	//alert("here");





	var neft_temp_form_data = new FormData();
	// temp_form_data.append('field_name', field_data);
	var neft_form_data = frm_tax_information.serializeArray();
	$.each(neft_form_data, function (key, input) {
		//alert("here there");
		neft_temp_form_data.append(input.name, input.value);
	});


	$.ajax({
		url: ajax_url,
		type: 'POST',
		data: neft_temp_form_data,
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

											window.location.href = "<?php echo url("/customer/"); ?>";
											//document.getElementById('communication_link').click();

											//window.location.href = "<?php //echo url("/customeraddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customer/"); ?>";
											//document.getElementById('communication_link').click();
											//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
											window.location.href = "<?php echo url("/customer/"); ?>";
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/customer/"); ?>";
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
