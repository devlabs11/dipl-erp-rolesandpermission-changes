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
	$module_id="24.0";
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Company</h1>
									<?php
									}
									else
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Company</h1>
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
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4 active" id="general_link" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">General</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" id="neft_link" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">RTGS / NEFT Master</a>
														</li>
														<!--end:::Tab item-->

													</ul>
													<!--end:::Tabs-->

													<!--begin:::Tab content-->
													<div class="tab-content" id="myTabContent">
														<!--begin:::Tab pane-->
														<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">

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
											$header_image="";
											$footer_image="";
                                            $stamp_image = "";
											$swift_bic_code="";
											$plants_count=0;
											$neft_count=0;

											//$edit_id="0";

											  if(is_array($tbl_company))
											  {
												  foreach($tbl_company as $tbl_company)
												  {
													  //var_dump($tbl_process);die;
														$id=$tbl_company->id;
														$name=$tbl_company->name;
														$registered_address=$tbl_company->registered_address;
														$corresponding_address=$tbl_company->corresponding_address;
														$phone_number=$tbl_company->phone_number;
														$fax_no=$tbl_company->fax_no;
														$vat_regs_no=$tbl_company->vat_regs_no;
														$grio_no=$tbl_company->grio_no;
														$bank=$tbl_company->bank;
														$branch=$tbl_company->branch;
														$account_no=$tbl_company->account_no;
														$sales_tax_declaration=$tbl_company->sales_tax_declaration;
														$terms_condition=$tbl_company->terms_condition;
														$company_prefix=$tbl_company->company_prefix;
														$service_reg_no=$tbl_company->service_reg_no;
														$service_reg_no_dated=$tbl_company->service_reg_no_dated;
														$tin_no=$tbl_company->tin_no;
														$pan_no=$tbl_company->pan_no;
														$ecc_no=$tbl_company->ecc_no;
														$ecc_dated=$tbl_company->ecc_dated;
														$excise_rabge=$tbl_company->excise_rabge;
														$excise_division=$tbl_company->excise_division;
														$commissioner_rate=$tbl_company->commissioner_rate;
														$gst_no=$tbl_company->gst_no;
														$arn_no=$tbl_company->arn_no;
														$it_tds=$tbl_company->it_tds;
														$cin_no=$tbl_company->cin_no;
														$correspondant_bank=$tbl_company->correspondant_bank;
														$correspondant_account_no=$tbl_company->correspondant_account_no;
														$location=$tbl_company->location;
														$swift_bic_code=$tbl_company->swift_bic_code;
														$header_image=$tbl_company->header_image;
														$footer_image=$tbl_company->footer_image;
                                                        $stamp_image=$tbl_company->stamp_image;
												  }
											  }

											  //echo $id;die;


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
																	<span class="required">Name</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the company name."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="company_name" id="company_name" value="{{$name}}" />
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
																	<span class="required">Registered Address</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the registered address."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<textarea class="form-control form-control-solid" name="registered_address" id="registered_address">{{$registered_address}}</textarea>
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
																	<span >Corresponding Address</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the corresponding address."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<textarea class="form-control form-control-solid" name="corresponding_address" id="corresponding_address">{{$corresponding_address}}</textarea>
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
																	<span>Phone No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the phone number."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="phone_number" id="phone_number" value="{{$phone_number}}" />
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
																	<span>Fax No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the fax no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="fax_no" id="fax_no" value="{{$fax_no}}" />
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
																	<span >Vat Regs No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the vat regs no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="vat_regs_no" id="vat_regs_no" value="{{$vat_regs_no}}" />
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
																	<span>Grio No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the grio no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="grio_no" id="grio_no" value="{{$grio_no}}"  />
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
																	<span>Bank</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Bank."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="bank" id="bank" value="{{$bank}}"  />
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
																	<span>Branch</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the branch."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="branch" id="branch" value="{{$branch}}"  />
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
																	<span>Account No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the account no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="account_no" id="account_no" value="{{$account_no}}"  />
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
																		<span >Sales Tax Declaration</span>
																		<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the sales tax declaration."></i>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<textarea class="form-control form-control-solid" name="sales_tax_declaration" id="sales_tax_declaration">{{$sales_tax_declaration}}</textarea>
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
																		<span >Terms & Condition</span>
																		<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the terms & condition."></i>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<textarea class="form-control form-control-solid" name="terms_condition" id="terms_condition">{{$terms_condition}}</textarea>
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
																	<span class="required">Company Prefix</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the company prefix."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="company_prefix" id="company_prefix" value="{{$company_prefix}}"  />
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
																	<span>Service Reg No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the service reg no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="service_reg_no" id="service_reg_no" value="{{$service_reg_no}}"  />
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
																	<span>Service Reg No Dated</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the service_reg_no_dated."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="service_reg_no_dated" id="service_reg_no_dated" value="{{$service_reg_no_dated}}"  />
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
																	<span>TIN No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the tin no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="tin_no" id="tin_no" value="{{$tin_no}}"  />
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
																	<span>PAN No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the pan no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="pan_no" id="pan_no" value="{{$pan_no}}"  />
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
																	<span>ECC No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the ecc no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="ecc_no" id="ecc_no" value="{{$ecc_no}}"  />
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
																	<span>ECC Dated</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the ecc dated."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="ecc_dated" id="ecc_dated" value="{{$ecc_dated}}"  />
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
																	<span>Excise Range</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the excise rabge."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="excise_rabge" id="excise_rabge" value="{{$excise_rabge}}"  />
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
																	<span>Excise Division</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the excise division."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="excise_division" id="excise_division" value="{{$excise_division}}"  />
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
																	<span>Commissioner Rate</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the commissioner rate."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="commissioner_rate" id="commissioner_rate" value="{{$commissioner_rate}}"  />
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
																	<span>GST No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the gst_no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="gst_no" id="gst_no" value="{{$gst_no}}"  />
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
																	<span>ARN No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the arn no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="arn_no" id="arn_no" value="{{$arn_no}}"  />
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
																	<span>IT TDS</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the it tds."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="it_tds" id="it_tds" value="{{$it_tds}}"  />
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
																	<span>CIN NO</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the cin no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="cin_no" id="cin_no" value="{{$cin_no}}"  />
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
																	<span>Correspondant Bank</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the correspondant bank."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="correspondant_bank" id="correspondant_bank" value="{{$correspondant_bank}}"  />
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
																	<span>Correspondant Account No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the correspondant account no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="correspondant_account_no" id="correspondant_account_no" value="{{$correspondant_account_no}}"  />
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
																	<span>Location</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the location."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="location" id="location" value="{{$location}}"  />
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
																	<span>Swift/BIC Code</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the swift bic code."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="swift_bic_code" id="swift_bic_code" value="{{$swift_bic_code}}"  />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->


													</div>
													<!--end::Row-->

													<h2>Upload Images</h2>

													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Header Image</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Header Image."></i>

																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control" type="file" name="header_image" placeholder="Choose File" id="header_image" value="{{ $header_image }}">
																<p>(allowed file types are jpg, jpeg, png)</p>
																<!--end::Input-->

															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

														<!--begin::Col-->
														<div class="col">
															<div class="avatar-image effect8" style="width:65%;height:60%">
															<?php
															//var_dump($header_image);die;
															if($header_image=="")
															{
															?>
															<img class="avatar-snap" id="avatar_image1" style="width:100% !important;padding:20px;padding-top:0px" src="{{ URL::asset('assets/uploadimage/no_image.png') }}"/>
															<?php
															}
															else
															{
															?>
															<img class="avatar-snap" id="avatar_image1" style="width:100% !important;padding:20px" src="<?php echo URL::asset('assets/uploadimage/company/')."/".$header_image; ?>"/>
															<?php
															}
															?>


															</div>
															<span class="image_error"></span>
														</div>
														<!--end::Col-->
													</div>


													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Footer Image</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Footer Image."></i>

																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control" type="file" name="footer_image" placeholder="Choose File" id="footer_image" value="{{ $footer_image }}">
																<p>(allowed file types are jpg, jpeg, png)</p>
																<!--end::Input-->

															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

														<!--begin::Col-->
														<div class="col">
															<div class="avatar-image effect8" style="width:65%;height:60%">
															<?php
															if($footer_image=="")
															{
															?>
															<img class="avatar-snap" id="avatar_image2" style="width:100% !important;padding:20px;padding-top:0px" src="{{ URL::asset('assets/uploadimage/no_image.png') }}"/>
															<?php
															}
															else
															{
															?>
															<img class="avatar-snap" id="avatar_image2" style="width:100% !important;padding:20px" src="<?php echo URL::asset('assets/uploadimage/company/')."/".$footer_image; ?>"/>
															<?php
															}
															?>


															</div>
															<span class="image_error"></span>
														</div>
														<!--end::Col-->
                                                        <!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Stamp Image</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Stamp Image."></i>

																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control" type="file" name="stamp_image" placeholder="Choose File" id="stamp_image" value="{{ $stamp_image }}">
																<p>(allowed file types are jpg, jpeg, png)</p>
																<!--end::Input-->

															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

														<!--begin::Col-->
														<div class="col">
															<div class="avatar-image effect8" style="width:65%;height:60%">
															<?php
															if($stamp_image=="")
															{
															?>
															<img class="avatar-snap" id="avatar_stamp" style="width:100% !important;padding:20px;padding-top:0px" src="{{ URL::asset('assets/uploadimage/no_image.png') }}"/>
															<?php
															}
															else
															{
															?>
															<img class="avatar-snap" id="avatar_stamp" style="width:100% !important;padding:20px" src="<?php echo URL::asset('assets/uploadimage/company/')."/".$stamp_image; ?>"/>
															<?php
															}
															?>


															</div>
															<span class="image_error"></span>
														</div>
														<!--end::Col-->
													</div>


													<h2>Add Plants</h2>


													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
													<?php
													if($id=="0")
													{
													?>
														<table id='widthtable' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
															<!-- <div class=""> -->
															<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
															<div class="row"> -->
																<tr>
																	<th>
																		ECC No
																	</th>
																	<th>
																		Sales Tax Regs No
																	</th>
																	<th>
																		ECC No Dated
																	</th>
																	<th>
																	Sales Tax Regs No Dated
																	</th>
																	<th>
																		<div style="text-align:right"><a href="javascript:void(0);" class="add_button" title="Add field">Add</a></div>
																	</th>
																</tr>
																<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="plants[plants_id][1]" value="0"/>
																		<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no][1]" value=""/>
																	</td>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="text" name="plants[sales_tax_regs_no][1]" value=""/>
																	</td>
																	<td>
																		<input class="form-control form-control-solid ecc_no_dated required_validation" type="text" name="plants[ecc_no_dated][1]" value=""/>
																	</td>
																	<td>
																		<input class="form-control form-control-solid sales_tax_regs_no_dated required_validation" type="text" name="plants[sales_tax_regs_no_dated][1]" value=""/>
																	</td>
																	 <td>

																	</td>
																</tr>
															<!-- </div> -->
															<!-- </div> -->
															<!-- </div> -->
														</table>
													<?php
													}
													else
													{
														?>
														<table id='widthtable' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
														<tr>
																	<th>
																		ECC No
																	</th>
																	<th>
																		Sales Tax Regs No
																	</th>
																	<th>
																		ECC No Dated
																	</th>
																	<th>
																	Sales Tax Regs No Dated
																	</th>
																	<th>
																		<div style="text-align:right"><a href="javascript:void(0);" class="add_button" title="Add field">Add</a></div>
																	</th>
																</tr>
														<?php
														//echo $id;die;
														$tbl_plants_count = DB::select("select count(*) as totalcount from tbl_plants where company_id='".$id."'");
														//var_dump($tbl_plants_count);die;
														foreach($tbl_plants_count as $tbl_plants_count)
														{
															//var_dump($tbl_plants_count);die;
															$plant_count=$tbl_plants_count->totalcount;
														}
														$tbl_plants = DB::select("select * from tbl_plants where company_id='".$id."'");

														$j=0;
														foreach($tbl_plants as $tbl_plants)
														{
															$j++;
															$plants_count++;
															$plants_id=$tbl_plants->id;
															$ecc_no=$tbl_plants->ecc_no;
															$sales_tax_regs_no=$tbl_plants->sales_tax_regs_no;
															$ecc_no_dated=$tbl_plants->ecc_no_dated;
															$sales_tax_regs_no_dated=$tbl_plants->sales_tax_regs_no_dated;


													?>

															<!-- <div class=""> -->
															<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
															<div class="row"> -->

																<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="plants[plants_id][<?php echo $j; ?>]" value="<?php echo $plants_id; ?>"/>
																		<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no][<?php echo $j; ?>]" value="<?php echo $ecc_no; ?>"/>
																	</td>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="text" name="plants[sales_tax_regs_no][<?php echo $j; ?>]" value="<?php echo $sales_tax_regs_no; ?>"/>
																	</td>
																	<td>
																		<input class="form-control form-control-solid ecc_no_dated required_validation" type="text" name="plants[ecc_no_dated][<?php echo $j; ?>]" value="<?php echo $ecc_no_dated; ?>"/>
																	</td>
																	<td>
																		<input class="form-control form-control-solid sales_tax_regs_no_dated required_validation" type="text" name="plants[sales_tax_regs_no_dated][<?php echo $j; ?>]" value="<?php echo $sales_tax_regs_no_dated; ?>"/>
																	</td>
																	<td>
																		<?php
																		if($j==1)
																		{

																		}
																		else
																		{
																		?>
																			<a href="javascript:void(0);" class="remove_button" delete-id="<?php echo $plants_id; ?>">Delete</a>
																		<?php
																		}
																		?>

																	</td>
																</tr>
															<!-- </div> -->
															<!-- </div> -->
															<!-- </div> -->

													<?php
													}
													}
													?>
													</table>
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
														<div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<div class="separator mb-6"></div>

																<div style="text-align:right;padding-bottom:10px"><a href="javascript:void(0);" class="add_neft" title="Add RTGS NEFT">Add</a></div>

																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_rtgs_neft"  id="frm_rtgs_neft">
																	{{@csrf_field()}}

																	<input type="hidden" name="edit_id" id="edit_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">
																	<input type="hidden" name="company_id" id="company_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">

																	<?php
																	if($id=="0")
																	{
																	?>
																	<div class="neft_field_wrapper" style="padding-top:30px">
																		<div class="rtgs_neft_master">
																			<input type="hidden" name="neft[neft_id][1]" value="0">
																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

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
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the company name."></i>
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
																			</div>

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
																		<th>ID</th>
																		<th>Bank Name</th>
																		<th>Branch Name</th>
																		<th>Ac No</th>
																		<th>Cost Center</th>
																		<th>Edit</th>
																		<th>Delete</th>
																	</tr>

																	<?php
																	$neft_count=0;
																	$tbl_rtgs_neft_count = DB::select("select count(*) as totalcount from tbl_rtgs_neft where company_id='".$id."'");
																	foreach($tbl_rtgs_neft_count as $tbl_rtgs_neft_count)
																	{
																		//var_dump($tbl_plants_count);die;
																		$neft_count=$tbl_rtgs_neft_count->totalcount;
																	}

																	if($neft_count==0)
																	{
																	?>
																	<tr>
																		<td colspan="6" style="text-align:center">No data available</td>
																	</tr>
																	<?php
																	}
																	else
																	{
																		$tbl_rtgs_neft = DB::select("select * from tbl_rtgs_neft where company_id='".$id."'");

																		//$k=0;
																		foreach($tbl_rtgs_neft as $tbl_rtgs_neft)
																		{
																			//$k++;
																			//$neft_count++;
																			$neft_id=$tbl_rtgs_neft->id;
																			$neft_unique_id=$tbl_rtgs_neft->unique_id;
																			$neft_company_id=$tbl_rtgs_neft->company_id;
																			$bank_name=$tbl_rtgs_neft->bank_name;
																			$account_no=$tbl_rtgs_neft->account_no;
																			$branch_name=$tbl_rtgs_neft->branch_name;
																			$cost_center=$tbl_rtgs_neft->cost_center;

																			$tbl_cost_center   = DB::select("select * from tbl_cost_center where id='".$cost_center."'");

																			$cost_center_name="";
																			foreach($tbl_cost_center as $tbl_cost_center)
																			{
																				$cost_center_name=$tbl_cost_center->description;
																			}
																			$account_name=$tbl_rtgs_neft->account_name;
																			$email_id=$tbl_rtgs_neft->email_id;
																			$mobile_number=$tbl_rtgs_neft->mobile_number;
																			$ifsc_code=$tbl_rtgs_neft->ifsc_code;
																			$account_type=$tbl_rtgs_neft->account_type;
																			$address_of_remitter=$tbl_rtgs_neft->address_of_remitter;
																			$template=$tbl_rtgs_neft->template;
																			?>
																			<tr>
																			<td><?php echo $neft_unique_id; ?></td>
																			<td><?php echo $bank_name; ?></td>
																			<td><?php echo $branch_name; ?></td>
																			<td><?php echo $account_no; ?></td>
																			<td><?php echo $cost_center_name; ?></td>
																			<td><a href=""><a href="javascript:void(0);" class="edit_neft" edit-id="<?php echo $neft_id; ?>">Edit</a></a></td>
																			<td><a href="javascript:void(0);" class="remove_neft" delete-id="<?php echo $neft_id; ?>">Delete</a></td>
																			</tr>
																			<?php
																		}
																		?>

																		<?php
																	}
																	?>

																</table>
																	<?php
																		echo '<div class="neft_field_wrapper" style="padding-top:30px">';
																		$tbl_rtgs_neft_count = DB::select("select count(*) as totalcount from tbl_rtgs_neft where company_id='".$id."'");
																		foreach($tbl_rtgs_neft_count as $tbl_rtgs_neft_count)
																		{
																			//var_dump($tbl_plants_count);die;
																			$neft_count=$tbl_rtgs_neft_count->totalcount;
																		}



																			//$neft_count++;
																			?>
																			<div class="rtgs_neft_master">
																			<input type="hidden" name="neft[neft_id][1]" id="neft_id" value="0">
																			<input type="hidden" name="neft[neft_company_id][1]" id="neft_company_id" value="<?php echo $id; ?>">
																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

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
																						<input type="text" class="neft_required required_field form-control form-control-solid bank_name" id="bank_name" name="neft[bank_name][1]"  value="" />
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
																						<input type="text" id="account_no" class="neft_required required_field form-control form-control-solid" name="neft[account_no][1]"  value="" />
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
																							<span >Branch Name</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the company name."></i>
																						</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input type="text" id="branch_name" class="required_field form-control form-control-solid" name="neft[branch_name][1]"  value="" />
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
																						<select name="neft[cost_center][1]" id="cost_center"  aria-label="Select a cost center" data-control="select2" data-placeholder="Select a cost center..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
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
																						<input type="text" id="account_name" class="required_field form-control form-control-solid" name="neft[account_name][1]" value="" />
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
																						<input type="text" class="required_field form-control form-control-solid" id="email_id" name="neft[email_id][1]"  value="" />
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
																						<input type="text" class="required_field form-control form-control-solid" name="neft[mobile_number][1]" id="mobile_number"  value="" />
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
																						<input type="text" class="required_field form-control form-control-solid" name="neft[ifsc_code][1]" id="ifsc_code"  value="" />
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
																						<select name="neft[account_type][1]" id="account_type"  aria-label="Select a account type" data-control="select2" data-placeholder="Select a account type..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
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
																						<input type="text" class="required_field form-control form-control-solid" id="address_of_remitter" name="neft[address_of_remitter][1]"  value="" />
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
																						<select name="neft[template][1]" id="template"  aria-label="Select a template" data-control="select2" data-placeholder="Select a template..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">
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
																		<button type="reset" id="neft_cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="button" id="neft_submit_btn" name="neft_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="neft_ajax_submit();">
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
		var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);

		$(document).ready(function() {


			$("input[id='header_image']").on('change', function (e) {
					//alert("here");
                    var tmppath = URL.createObjectURL(e.target.files[0]);
                    //alert(tmppath);
                    //var fileName = e.target.files[0].mozFullPath;
                    //alert('The file "' + fileName +  '" has been selected.');
                    $("#avatar_image1").attr("src",tmppath);
                });

			$("input[id='footer_image']").on('change', function (e) {
				//alert("there");
				var tmppath = URL.createObjectURL(e.target.files[0]);
				//alert(tmppath);
				//var fileName = e.target.files[0].mozFullPath;
				//alert('The file "' + fileName +  '" has been selected.');
				$("#avatar_image2").attr("src",tmppath);
			});
            $("input[id='stamp_image']").on('change', function (e) {
				//alert("there");
				var tmppath = URL.createObjectURL(e.target.files[0]);
				//alert(tmppath);
				//var fileName = e.target.files[0].mozFullPath;
				//alert('The file "' + fileName +  '" has been selected.');
				$("#avatar_stamp").attr("src",tmppath);
			});


			var edit_id=$("#edit_id").val();
			var maxField = 1000; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var neft_wrapper = $('.neft_field_wrapper'); //Input field wrapper

			//var wrapper = $('.field_wrapper'); //Input field wrapper
			// <td><a href="javascript:void(0);" class="remove_button">Delete</a></td>
			if(edit_id==0)
			{
				var x = 1; //Initial field counter is 1
				var neft_x=1;
				//alert("here");
				//$('#neft_link').click(function () {return false;});
				//$('#neft_link').attr("disabled","disabled");
			}
			else
			{
				var x="<?php echo $plants_count; ?>";
				var neft_x="<?php echo $neft_count; ?>";
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

			$(addButton).click(function(){

				//Check maximum number of input fields
				if(x < maxField){
					x++; //Increment field counter
					var fieldHTML = '<tr><td><input class="form-control form-control-solid required_validation" type="hidden" name="plants[plants_id]['+x+']" value="0"/><input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/></td><td><input class="form-control form-control-solid required_validation" type="text" name="plants[sales_tax_regs_no]['+x+']" value=""/></td><td><input class="form-control form-control-solid ecc_no_dated required_validation" type="text" name="plants[ecc_no_dated]['+x+']" value=""/></td><td><input class="form-control form-control-solid sales_tax_regs_no_dated required_validation" type="text" name="plants[sales_tax_regs_no_dated]['+x+']" value=""/></td><td><a href="javascript:void(0);" class="remove_button" delete-id="0">Delete</a></td></tr>';
					$(wrapper).append(fieldHTML); //Add field html
				}
			});


			$(".add_neft").click(function(){
				//alert("here");
				//alert(neft_x);
				//var fieldHTML="";
				//Check maximum number of input fields
				if(neft_x < maxField){
					neft_x++; //Increment field counter
					var neft_fieldHTML= '<div class="rtgs_neft_master">';
					neft_fieldHTML+='<input type="hidden" name="neft[neft_id]['+neft_x+']" value="0">';

					neft_fieldHTML+='<div style="text-align:right"><a  href="javascript:void(0);" class="remove_neft" delete-id="0">Delete</a></div>';

					//start

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Bank Name</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the bank name."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="neft_required required_field form-control form-control-solid" name="neft[bank_name]['+neft_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">A/C No</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the account number."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="neft_required required_field form-control form-control-solid" name="neft[account_no]['+neft_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';



					///2nd

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Branch Name</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the company name."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="neft[branch_name]['+neft_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Cost Center</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the cost center."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="neft[cost_center]['+neft_x+']"  aria-label="Select a cost center" data-control="select2" data-placeholder="Select a cost center..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_cost_center = DB::select("select * from tbl_cost_center");
						$tbl_cost_center_option="";
						foreach($tbl_cost_center as $tbl_cost_center)
						{
							$cost_center_id=$tbl_cost_center->id;
							$cost_center_description=$tbl_cost_center->description;
							$tbl_cost_center_option.="<option value='".$cost_center_id."'>$cost_center_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_cost_center_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';

					//third


					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>A/C Name</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the A/C name."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="neft[account_name]['+neft_x+']" value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Email ID</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the email id."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="neft[email_id]['+neft_x+']"  value="" />';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';


					//forth

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Mobile No.</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the mobile no."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="neft[mobile_number]['+neft_x+']"  value="" />';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>IFSC Code</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the IFSC Code."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="neft[ifsc_code]['+neft_x+']"  value="" />';


					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';


					//fifth

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">A/C Type</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the A/C Type."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="neft[account_type]['+neft_x+']"  aria-label="Select a account type" data-control="select2" data-placeholder="Select a account type..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_ac_type = DB::select("select * from tbl_ac_type");
						$tbl_ac_type_option="";
						foreach($tbl_ac_type as $tbl_ac_type)
						{
							$ac_type_id=$tbl_ac_type->id;
							$ac_type_description=$tbl_ac_type->description;
							$tbl_ac_type_option.="<option  value='".$ac_type_id."'>$ac_type_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_ac_type_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//account number

					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Address Of Remitter</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the address of remitter."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="required_field form-control form-control-solid" name="neft[address_of_remitter]['+neft_x+']"  value="" />';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';

					//six

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//bank name
					neft_fieldHTML+='<div class="col">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span class="required">Template</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the template."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="neft[template]['+neft_x+']"  aria-label="Select a template" data-control="select2" data-placeholder="Select a template..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_template = DB::select("select * from tbl_template");
						$tbl_template_option="";
						foreach($tbl_template as $tbl_template)
						{
							$template_id=$tbl_template->id;
							$template_description=$tbl_template->description;
							$tbl_template_option.="<option  value='".$template_id."'>$template_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_template_option ?>";
					neft_fieldHTML+='</select>';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//finish
					neft_fieldHTML+='<div class="separator mx-1 my-4"></div>';
					neft_fieldHTML+='</div>';

					$(neft_wrapper).append(neft_fieldHTML); //Add field html
				}
			});




			$(".edit_neft").click(function()
			{
				var edit_id=$(this).attr('edit-id');
				$.ajax({
							type: "POST",
							data: "edit_id="+edit_id,
							url: "{{ URL::to('editneft') }}",
							success: function (response_json) {
								var response= JSON.parse(response_json);
								//alert(response.message);
								if (response.message=='')
								{
									$('#neft_id').val(response.neft_id);
									$('#bank_name').val(response.bank_name);
									$('input[name="neft[account_no][1]"]').val(response.account_no);

									//$('#account_no').val(response.account_no);
									$('#branch_name').val(response.branch_name);
									$('#account_name').val(response.account_name);
									$('#email_id').val(response.email_id);
									$('#mobile_number').val(response.mobile_number);
									$('#ifsc_code').val(response.ifsc_code);
									$('#address_of_remitter').val(response.address_of_remitter);
									$('#cost_center').val(response.cost_center).trigger('change');
									$('#account_type').val(response.account_type).trigger('change');
									$('#template').val(response.template).trigger('change');
								}else{
									//alert("else part");
									//ShowAlret(response.message,response.alert_type);
								}
							}
						});
			});


			$(".remove_neft").click(function()
			{
				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);
				$(this).closest('tr').remove();
				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deleteneft') }}",
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
			$(neft_wrapper).on('click', '.remove_neft', function(e){
			e.preventDefault();

			var delete_id=$(this).attr('delete-id');
			//alert(delete_id);

			if(delete_id==0)
			{
				$(this).closest('.rtgs_neft_master').remove(); //Remove field html
			}
			else
			{
				//alert("here");
				//return false;

			}

			});

			//Once remove button is clicked
			$(wrapper).on('click', '.remove_button', function(e){
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
						company_name: {
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
						phone_number: {
										number: true,
										//minlength: 10,
										maxlength: 13
									},
						registered_address: {
							required: true
                        },
						company_prefix:{
							required: true,
							//minlength: 3,
							maxlength: 3
                        },
						header_image:{
							required: true,
                            extension: "jpg|jpeg|png",
                        },
						footer_image:{
							required: true,
                            extension: "jpg|jpeg|png",
                        },
                        stamp_image:{
							required: true,
                            extension: "jpg|jpeg|png",
                        },
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
						},
						header_image: {
							required: "This field is required",
                            extension:"select valid input file format"
                            //remote: "This state already exists. Please try another state.",
                        },
						footer_image: {
							required: "This field is required",
                            extension:"select valid input file format"
                            //remote: "This state already exists. Please try another state.",
                        },
                        Stamp_image: {
							required: "This field is required",
                            extension:"select valid input file format"
                            //remote: "This state already exists. Please try another state.",
                        },
                    }
                });
		});



		function ajax_submit() {

				//alert("here");

				$('input.required_validation').each(function(event) {
					 //alert($(this).val());
					 //alert($(this).attr('name'));

					if($(this).val()=="")
					{
						//alert("Please enter value in plans details.");
						//return false;
						Swal.fire('Please enter value in plans details.', '', 'error');
						event.preventDefault();
						return false;
					}
            	});

				var ajax_url = "{{ URL::to('submitcompany') }}";
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

				if($('#header_image').prop('files') !=undefined){
					//alert("here");
                    var file_data = $('#header_image').prop('files')[0];
                    temp_form_data.append('header_image', file_data);
                }

				if($('#footer_image').prop('files') !=undefined){
					//alert("here");
                    var file_data = $('#footer_image').prop('files')[0];
                    temp_form_data.append('footer_image', file_data);
                }
                if($('#stamp_image').prop('files') !=undefined){
					//alert("here");
                    var file_data = $('#stamp_image').prop('files')[0];
                    temp_form_data.append('stamp_image', file_data);
                }


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
								$("#company_id").val(data.company_id);
								//alert($("#company_id").val());
                                if (data.mode=='add'){

									$("#edit_id").val('');
									//$('#neft_link').removeAttr("disabled");
									//document.getElementById('neft_link').click();

									//alert("add");


									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														document.getElementById('neft_link').click();
														//$('#neft_link').trigger('click');
														//window.location.href = "{{ URL::to('company') }}";
													}
													);


								}
								else{
									//alert("edit");
									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('company') }}";
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
														//window.location.href = "{{ URL::to('company') }}";
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//window.location.href = "{{ URL::to('company') }}";
													}
													);


								}
							}

                    }
                });
            }


function neft_ajax_submit(event)
{


	if($("#company_id").val()=="0")
	{
		Swal.fire('You can not add RTGS/NEFT details befor adding company details', '', 'error');
		event.preventDefault();
		return false;
	}

	//alert("here");

	//$('input.required_field').each(function(event) {

	//$('.neft_required').each(function(event) {
	$('input.neft_required').each(function(event) {
		//alert("here");
		//alert($(this).val());
		//alert($(this).attr('name'));

		if($(this).val()=="")
		{
			//alert("Please enter value in plans details.");
			//return false;
			Swal.fire('Please enter value in RTGS / NEFT details.', '', 'error');
			event.preventDefault();
			return false;
		}
		/*else
		{
			alert($(this).attr("name"));
			event.preventDefault();
			return false;
		}*/
	});

	$('select.neft_required').each(function(event) {
		//alert("here");
		//alert($(this:option:selected).val());
		//alert($(this).attr('name'));

		if($(this).val()=="")
		{
			//alert("Please enter value in plans details.");
			//return false;
			Swal.fire('Please enter value in RTGS / NEFT details.', '', 'error');
			event.preventDefault();
			return false;
		}
		/*else
		{
			alert($(this).attr("name"));
			event.preventDefault();
			return false;
		}*/
	});

	var ajax_url = "{{ URL::to('submitneft') }}";
	var new_inserted_comp_id=$("#company_id").val();
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
	var neft_form_data = frm_rtgs_neft.serializeArray();
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

											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/companyaddedit/"); ?>"+"/"+data.new_inserted_comp_id;
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
		</script>
	</body>
	<!--end::Body-->
</html>
