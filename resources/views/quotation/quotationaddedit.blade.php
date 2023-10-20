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
		$module_id="11.0";


	?>
	<?php
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Quotation</h1>
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
												<!--begin::Form-->
												<form class="form"  name="frm_user" onsubmit="return false;" id="frm_user">

												{{@csrf_field()}}


											<?php

												$id="0";
												$user="";
												$company="";
												$comp_name_add="";
												$unique_reference="";
												$max_id_result=DB::table('tbl_quotation')->max('id');
												$max_id_result=$max_id_result+1;
												$unique_reference="CUS/RS/".$max_id_result."/PR";
												$attention_of="";
												$quotation_date="";
												$subject="";
												$reference="";
												$quote_type="";


												$discharge_point_term="";
												$installation_charge="";
												$warranty="";
												$training="";
												$bank_charges="";
												$sampling_charges="";
												$lchandling_charges="";
												$cancellation_of_order_charge="";
												$delivery_point="";
												$packing="";
												$payment_term="";
												$validity_of_quotation="";
												$documents="";
												$jurisdiction="";
												$statutory_clause="";
												$tax="";
												$excise="";
												$lbt="";
												$freight="";
												$delivery="";
												$prices="";
												$othercharges="";
												$tds="";

												$discharge_point_term_checkbox="";
												$installation_charge_checkbox="";
												$warranty_checkbox="";
												$training_checkbox="";
												$bank_charges_checkbox="";
												$sampling_charges_checkbox="";
												$lchandling_charges_checkbox="";
												$cancellation_of_order_charge_checkbox="";
												$delivery_point_checkbox="";
												$packing_checkbox="";
												$payment_term_checkbox="";
												$validity_of_quotation_checkbox="";
												$documents_checkbox="";
												$jurisdiction_checkbox ="";
												$statutory_clause_checkbox="";
												$tax_checkbox="";
												$excise_checkbox="";
												$lbt_checkbox="";
												$freight_checkbox="";
												$delivery_checkbox="";
												$prices_checkbox="";
												$othercharges_checkbox="";
												$tds_checkbox="";

												$note="";
												$rows=0;
												$columns=0;


												if(is_array($tbl_quotation))
												{
													foreach($tbl_quotation as $tbl_quotation)
													{
														$id=$tbl_quotation->id;
														$user=$tbl_quotation->sales_person;
														$company=$tbl_quotation->company;
														$comp_name_add=$tbl_quotation->comp_name_add;

														$unique_reference=$tbl_quotation->unique_reference;
														$attention_of=$tbl_quotation->attention_of;
														$quotation_date=$tbl_quotation->quotation_date;
														$reference=$tbl_quotation->reference;
														$quote_type=$tbl_quotation->quote_type;


														$discharge_point_term=$tbl_quotation->discharge_point_term;
														$installation_charge=$tbl_quotation->installation_charge;
														$warranty=$tbl_quotation->warranty;
														$training=$tbl_quotation->training;
														$bank_charges=$tbl_quotation->bank_charges;
														$sampling_charges=$tbl_quotation->sampling_charges;
														$lchandling_charges=$tbl_quotation->lchandling_charges;
														$cancellation_of_order_charge=$tbl_quotation->cancellation_of_order_charge;
														$delivery_point=$tbl_quotation->delivery_point;


														$packing=$tbl_quotation->packing;
														$payment_term=$tbl_quotation->payment_term;
														$validity_of_quotation=$tbl_quotation->validity_of_quotation;
														$documents=$tbl_quotation->documents;
														$jurisdiction =$tbl_quotation->jurisdiction;
														$statutory_clause=$tbl_quotation->statutory_clause;
														$tax=$tbl_quotation->tax;
														$excise=$tbl_quotation->excise;
														$lbt=$tbl_quotation->lbt;
														$freight=$tbl_quotation->freight;
														$delivery=$tbl_quotation->delivery;
														$prices=$tbl_quotation->prices;
														$othercharges=$tbl_quotation->othercharges;
														$tds=$tbl_quotation->tds;




														$discharge_point_term_checkbox=$tbl_quotation->discharge_point_term_checkbox;
														$installation_charge_checkbox=$tbl_quotation->installation_charge_checkbox;
														$warranty_checkbox=$tbl_quotation->warranty_checkbox;
														$training_checkbox=$tbl_quotation->training_checkbox;
														$bank_charges_checkbox=$tbl_quotation->bank_charges_checkbox;
														$sampling_charges_checkbox=$tbl_quotation->sampling_charges_checkbox;
														$lchandling_charges_checkbox=$tbl_quotation->lchandling_charges_checkbox;
														$cancellation_of_order_charge_checkbox=$tbl_quotation->cancellation_of_order_charge_checkbox;
														$delivery_point_checkbox=$tbl_quotation->delivery_point_checkbox;

														$packing_checkbox=$tbl_quotation->packing_checkbox;
														$payment_term_checkbox=$tbl_quotation->payment_term_checkbox;
														$validity_of_quotation_checkbox=$tbl_quotation->validity_of_quotation_checkbox;
														$documents_checkbox=$tbl_quotation->documents_checkbox;
														$jurisdiction_checkbox =$tbl_quotation->jurisdiction_checkbox;
														$statutory_clause_checkbox=$tbl_quotation->statutory_clause_checkbox;
														$tax_checkbox=$tbl_quotation->tax_checkbox;
														$excise_checkbox=$tbl_quotation->excise_checkbox;
														$lbt_checkbox=$tbl_quotation->lbt_checkbox;
														$freight_checkbox=$tbl_quotation->freight_checkbox;
														$delivery_checkbox=$tbl_quotation->delivery_checkbox;
														$prices_checkbox=$tbl_quotation->prices_checkbox;

														$othercharges_checkbox=$tbl_quotation->othercharges_checkbox;
														$tds_checkbox=$tbl_quotation->tds_checkbox;





														$note=$tbl_quotation->note;
														$subject=$tbl_quotation->subject;

														$rows=$tbl_quotation->rows;
														$columns=$tbl_quotation->columns;

													}
												}


												// for ($i = 0; $i < $columns; $i++)
            									// {
												// 	${"td_width_" . $i} = "";
												// }

												if(is_array($quotation_width_mapping))
												{
													//var_dump($quotation_width_mapping);die;
													foreach($quotation_width_mapping as $quotation_width_mapping)
													{
														$mapping_id=$quotation_width_mapping->id;
														$quotation_id=$quotation_width_mapping->quotation_id;
														$column_id=$quotation_width_mapping->column_id;
														$width=$quotation_width_mapping->width;

														${"td_width_" . $column_id} = $width;
														${"td_mapping_id_".$column_id}=$mapping_id;
													}
												}


												/*if(is_array($quotation_invoice_details))
												{
													//var_dump($quotation_width_mapping);die;
													foreach($quotation_invoice_details as $quotation_invoice_details)
													{
														//var_dump($quotation_invoice_details);die;
														$details_id=$quotation_invoice_details->id;
														$quotation_id=$quotation_invoice_details->quotation_id;
														$column_id=$quotation_invoice_details->column_id;
														$row_id=$quotation_invoice_details->row_id;
														$description=$quotation_invoice_details->description;

														${"data_" . $row_id.$column_id} = $description;
														${"data_id_" . $row_id.$column_id} = $details_id;
													}
												}*/

											?>

												<input type="hidden" name="edit_id" id="edit_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">
												<input type="hidden" name="nooftr" id="nooftr" value="{{$rows}}">


												<!--begin::Row-->
												<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Company</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Company."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="company" id="company" aria-label="Select a company" data-control="select2" data-placeholder="Select a company..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			//$tbl_user = DB::select("select md.description as designationname,tu.username as username,tu.fullname as fullname,tu.id as userid from tbl_user tu left join mst_designation md on md.id=tu.designation");
																			$tbl_company = DB::select("select * from tbl_company");
																			//var_dump($tbl_user);die;
																			foreach($tbl_company as $tbl_company){
																				$company_id=$tbl_company->id;
																				$company_name=$tbl_company->name;


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
																	<span class="required">Sales Person</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select sales person name."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="sales_person" id="sales_person" aria-label="Select a role" data-control="select2" data-placeholder="Select a sales person..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			//$tbl_user = DB::select("select md.description as designationname,tu.username as username,tu.fullname as fullname,tu.id as userid from tbl_user tu left join mst_designation md on md.id=tu.designation");
																			$tbl_user = DB::select("select md.description as designationname,tu.username as username,tu.fullname as fullname,tu.id as userid from tbl_user tu left join mst_designation md on md.id=tu.designation where md.description='Sales'");
																			//var_dump($tbl_user);die;
																			$name="";
																			foreach($tbl_user as $tbl_user){
																				$fullname=$tbl_user->fullname;
																				$username=$tbl_user->username;
																				$designationname=$tbl_user->designationname;

																				if($designationname=="Sales")
																				{
																					$name=$fullname;
																				}
																				else
																				{
																					$name=$username;
																				}
																				$userid=$tbl_user->userid;
																				$selected="";
																				if($user==$userid)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$userid."'>$name</option>";
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
																	<span class="required">Company Name & Address</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the first name."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<textarea class="form-control form-control-solid" name="comp_name_add" id="comp_name_add">{{$comp_name_add}}</textarea>
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
																	<span class="required">Attention Of</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the attention of."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input  class="form-control form-control-solid" name="attention_of" id="attention_of" value="{{$attention_of}}" />
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
																	<span class="required">Quotation Date</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the quotation date."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="quotation_date" id="quotation_date" value="{{$quotation_date}}" />
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
																	<span class="required">Subject</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the subject."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="subject" id="subject" value="{{$subject}}" />
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
																	<span class="required">Reference</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the reference"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="reference" id="reference" value="{{$reference}}" />
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
																	<span class="required">Quotation Type</span>
																</label>
																<!--end::Label-->


																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="quote_type" id="quote_type" aria-label="Select a quote type" data-control="select2" data-placeholder="Select a quote type..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<option <?php if($quote_type=="5"){ echo "selected='selected'"; } ?> value='5'>Regular</option>
																		<!-- <option <?php if($quote_type=="1"){ echo "selected='selected'"; } ?> value='1'>OLD</option> -->
																		<option <?php if($quote_type=="2"){ echo "selected='selected'"; } ?> value='2'>Export</option>
																		<option <?php if($quote_type=="3"){ echo "selected='selected'"; } ?> value='3'>Local</option>
																		<option <?php if($quote_type=="4"){ echo "selected='selected'"; } ?> value='4'>AMC</option>
																		<?php

																			/*$quote_type_data = DB::select("select * from mst_quote_type");


																			//var_dump($quote_type);die;

																			foreach($quote_type_data as $quote_type_data){
																				$description=$quote_type_data->description;
																				$quote_type_id=$quote_type_data->id;
																				$selected="";
																				if($quote_type==$quote_type_id)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$quote_type_id."'>$description</option>";
																			}*/
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
														<div class="col" style="display:none">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Unique Reference</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the unique reference"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input readonly type="text" class="form-control form-control-solid" name="unique_reference" id="unique_reference" value="{{$unique_reference}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->




													</div>
													<!--end::row-->








												<!--begin::Separator-->
												<div class="separator mb-6"></div>
												<!--end::Separator-->

												<h3>Generate Table</h3>

												<!--begin::Row-->
												<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

													<!--begin::Col-->
													<div class="col" style="width:40%">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Number of Rows</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the rows."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="rows" id="rows" value="{{$rows}}"  />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
													</div>
													<!--end::Col-->
													<?php
													if($id=="0")
													{
													?>
														<!--begin::Col-->
														<div class="col" style="width:40%" id="columns_div">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Number Of Columns</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the number of columns."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="columns" id="columns" value="{{$columns}}"  />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->
													<?php
													}
													else
													{
														?>
														<!--begin::Col-->
														<div class="col" style="width:40%" id="columns_div">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Number Of Columns</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the number of columns."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="columns" id="columns" value="{{$columns}}"  />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->
														<!-- <input type="text" class="form-control form-control-solid" name="columns" id="columns" value="{{$columns}}"  /> -->
														<?php
													}
													?>


													<!--begin::Col-->
													<div class="col" style="width:20%">

													<!--begin::Input group-->
													<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold form-label mt-3">
																<span>&nbsp;</span>

															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div class="d-flex justify-content-end">
															<input type="button" id="generate_tbl" tbl_val="1"  class="btn btn-primary btn-light me-3 generate_tbl" value="Add Table">
														</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->

													</div>
													<!--end::Col-->

												</div>
												<!--end::Row-->

												<!--begin::Row-->
												<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2" id="dvTable1">
													<div id="widthtableerror1" style="color:red"></div>
												<table id='widthtable' class='table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
												<tbody>
												<?php
												if($id!="0")
													{
													?>
													<tr>
													<?php


													for ($i = 0; $i < $columns; $i++)
													{

													?>
															<td>
															<input type='text' class='form-control form-control-solid width_txt' name="td_width_<?php echo $i; ?>" value="<?php echo ${"td_width_" . $i}; ?>">
															<input type='hidden' class='form-control form-control-solid' name="td_mapping_id_<?php echo $i; ?>" value="<?php echo ${"td_mapping_id_" . $i}; ?>">
															</td>
													<?php

													}

													?>
													<!-- <td>test</td> -->
													</tr>
												</tbody>

													<?php
													}
													?>
												</table>

												<table id='maintable' class='table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important'>
												<tbody>
												<?php


													if($id!="0")
													{
														//die("here");
													?>
													<tr>
													<?php
													$max_per_row = $columns;
													$item_count = 0;
													$delete_id_list = "";
													$row_no=0;

													//var_dump($quotation_invoice_details);die;

													if(is_array($quotation_invoice_details))
													{
														//var_dump($quotation_width_mapping);die;
														foreach($quotation_invoice_details as $quotation_invoice_details)
														{
															$details_id=$quotation_invoice_details->id;
															$quotation_id=$quotation_invoice_details->quotation_id;
															$column_id=$quotation_invoice_details->column_id;
															$row_id=$quotation_invoice_details->row_id;
															$description=$quotation_invoice_details->description;



															if ($item_count == $max_per_row)
															{
																//die("here there");
																//echo $row_no;die;
																if($row_no=="0")
																{
																	echo '<td></td></tr><tr>';
																}
																else
																{
																	echo '<td><a href="javascript:void(0);" class="remove_tbl_row" delete-id="'.$delete_id_list.'">Delete</a></td></tr><tr>';
																}
																$item_count = 0;
																$delete_id_list = "";
																$row_no++;
															}


															${"data_" . $row_id.$column_id} = $description;
															${"data_id_" . $row_id.$column_id} = $details_id;

															?>
															<td>
															<textarea class='form-control form-control-solid' name="data['<?php echo $row_id; ?>']['<?php echo $column_id; ?>']" id="data_<?php echo $row_id; ?><?php echo $column_id; ?>" ><?php echo $description; ?></textarea>
															<input type='hidden' class='form-control form-control-solid' name="data_id['<?php echo $row_id; ?>']['<?php echo $column_id; ?>']" value="<?php echo $details_id; ?>">
															</td>
															<?php
															$item_count++;
															$delete_id_list.=$details_id.",";
														}

														?>

														<td><a href="javascript:void(0);" class="remove_tbl_row" delete-id="<?php echo $delete_id_list; ?>">Delete</a></td>
														<?php
													}


													//echo $rows;die;

													//old logic here

													?>
													</tr>
												</tbody>

													<?php
													}
													?>
												</table>

												</div>
												<!--end::Row-->


												<!--begin::Separator-->
												<div class="separator mb-6"></div>
												<!--end::Separator-->

												<h3>Terms & Conditions</h3>


												<div class="form-group" id="discharge_point_term_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($discharge_point_term_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} txt_name="discharge_point_term" type="checkbox" value="1" id="discharge_point_term_checkbox" name="discharge_point_term_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Discharge Point Term</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the discharge point term."></i>
															</label>
														</div>
														<div class="col-md-3">
															<input style="margin-bottom:10px;" type="text" {{$readonly}} class="form-control form-control-solid" name="discharge_point_term" id="discharge_point_term" value="{{$discharge_point_term}}"  />
														</div>
													</div>
												</div>





												<div class="form-group" id="installation_charge_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($installation_charge_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="installation_charge" value="1" id="installation_charge_checkbox" name="installation_charge_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Installation Charge</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the installation charge."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="installation_charge" id="installation_charge" value="{{$installation_charge}}"  />
														</div>
													</div>
												</div>



												<div class="form-group" id="warranty_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
															<?php
																	if($warranty_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="warranty" value="1" id="warranty_checkbox" name="warranty_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Warranty</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the warranty."></i>
															</label>
														</div>
														<div class="col-md-3">
															<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="warranty" id="warranty" value="{{$warranty}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="training_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
															<?php
																	if($training_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="training" value="1" id="training_checkbox" name="training_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Training</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the training."></i>
																</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="training" id="training" value="{{$training}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="bank_charges_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
															<?php
																	if($bank_charges_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="bank_charges" value="1" id="bank_charges_checkbox" name="bank_charges_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Bank Charges</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the bank charges."></i>
																</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="bank_charges" id="bank_charges" value="{{$bank_charges}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="sampling_charges_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
															<?php
																	if($sampling_charges_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="sampling_charges" value="1" id="sampling_charges_checkbox" name="sampling_charges_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Sampling Charges</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the sampling charges."></i>
																</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="sampling_charges" id="sampling_charges" value="{{$sampling_charges}}"  />
														</div>
													</div>
												</div>

												<div class="form-group" id="lchandling_charges_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
															<?php
																	if($lchandling_charges_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="lchandling_charges" value="1" id="lchandling_charges_checkbox" name="lchandling_charges_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>LChandling Charges</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the lchandling charges."></i>
																</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="lchandling_charges" id="lchandling_charges" value="{{$lchandling_charges}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="cancellation_of_order_charge_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($cancellation_of_order_charge_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
															<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="cancellation_of_order_charge" value="1" id="cancellation_of_order_charge_checkbox" name="cancellation_of_order_charge_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Cancellation Of Order Charge</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the cancellation of order charge."></i>
																</label>
														</div>
														<div class="col-md-3">
															<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="cancellation_of_order_charge" id="cancellation_of_order_charge" value="{{$cancellation_of_order_charge}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="delivery_point_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($delivery_point_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="delivery_point" value="1" id="delivery_point_checkbox" name="delivery_point_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Delivery Point</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the delivery point."></i>
																</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="delivery_point" id="delivery_point" value="{{$delivery_point}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="packing_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($packing_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="packing" value="1" id="packing_checkbox" name="packing_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Packing</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the packing."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="packing" id="packing" value="{{$packing}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="payment_term_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($payment_term_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="payment_term" value="1" id="payment_term_checkbox" name="payment_term_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Payment Term</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the payment term."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="payment_term" id="payment_term" value="{{$payment_term}}"  />
														</div>
													</div>
												</div>

												<div class="form-group" id="validity_of_quotation_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($validity_of_quotation_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="validity_of_quotation" value="1" id="validity_of_quotation_checkbox" name="validity_of_quotation_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
														<label class="fs-6 fw-bold form-label mt-3">
																<span>Validity Of Quotation</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the validity of quotation."></i>
															</label>
														</div>
														<div class="col-md-3">
															<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="validity_of_quotation" id="validity_of_quotation" value="{{$validity_of_quotation}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="documents_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($documents_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="documents" value="1" id="documents_checkbox" name="documents_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Documents</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the documents."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="documents" id="documents" value="{{$documents}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="jurisdiction_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($jurisdiction_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="jurisdiction" value="1" id="jurisdiction_checkbox" name="jurisdiction_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Jurisdlction</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the jurisdiction."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="jurisdiction" id="jurisdiction" value="{{$jurisdiction}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="statutory_clause_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($statutory_clause_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="statutory_clause" value="1" id="statutory_clause_checkbox" name="statutory_clause_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Statutory Clause</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the statutory_clause."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="statutory_clause" id="statutory_clause" value="{{$statutory_clause}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="tax_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($tax_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="tax" value="1" id="tax_checkbox" name="tax_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Tax</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the tax."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="tax" id="tax" value="{{$tax}}"  />
														</div>
													</div>
												</div>



												<div class="form-group" id="excise_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($excise_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="excise" value="1" id="excise_checkbox" name="excise_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Excise</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the excise."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="excise" id="excise" value="{{$excise}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="lbt_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($lbt_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="lbt" value="1" id="lbt_checkbox" name="lbt_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Lbt</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the lbt."></i>
															</label>
														</div>
														<div class="col-md-3">
															<input type="text" style="margin-bottom:10px;" {{$readonly}} readonly="readonly" class="form-control form-control-solid" name="lbt" id="lbt" value="{{$lbt}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="freight_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($freight_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox" txt_name="freight" value="1" id="freight_checkbox" name="freight_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Freight</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the freight."></i>
															</label>
														</div>
														<div class="col-md-3">
															<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="freight" id="freight" value="{{$freight}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="delivery_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($delivery_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} type="checkbox"  txt_name="delivery" value="1" id="delivery_checkbox" name="delivery_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Delivery</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the delivery."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}} class="form-control form-control-solid" name="delivery" id="delivery" value="{{$delivery}}"  />
														</div>
													</div>
												</div>


												<div class="form-group" id="prices_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($prices_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} txt_name="prices" type="checkbox" value="1" id="prices_checkbox" name="prices_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Prices</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the prices."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}}  class="form-control form-control-solid" name="prices" id="prices" value="{{$prices}}"  />
														</div>
													</div>
												</div>

												<div class="form-group" id="othercharges_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($othercharges_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} txt_name="othercharges" type="checkbox" value="1" id="othercharges_checkbox" name="othercharges_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Other Charges</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the other charges."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}}  class="form-control form-control-solid" name="othercharges" id="othercharges" value="{{$othercharges}}"  />
														</div>
													</div>
												</div>

												<div class="form-group" id="tds_div">
													<div class="form-group row">
														<div class="col-md-1">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																	if($tds_checkbox=="1")
																	{
																		$checked="checked";
																		$readonly="";
																	}
																	else
																	{
																		$checked="";
																		$readonly="readonly";
																	}
																?>
																<input class="form-check-input terms_checkbox" {{$checked}} txt_name="tds" type="checkbox" value="1" id="tds_checkbox" name="tds_checkbox" />
															</div>
														</div>
														<div class="col-md-3">
															<label class="fs-6 fw-bold form-label mt-3">
																<span>TDS</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the TDS."></i>
															</label>
														</div>
														<div class="col-md-3">
														<input type="text" style="margin-bottom:10px;" {{$readonly}}  class="form-control form-control-solid" name="tds" id="tds" value="{{$tds}}"  />
														</div>
													</div>
												</div>


													<!--begin::Separator-->
													<div class="separator mb-6"></div>
													<!--end::Separator-->

														<!--begin::Row-->
												<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">



													<!--begin::Col-->
													<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Note</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the note."></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea  class="form-control form-control-solid" name="note" id="note">{{$note}}  </textarea>
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
														<button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
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

		// $("textarea").focusout(function()
		// {
		// 	alert('textarea focusout');
		// });

		$(document).ready(function()
		{


			//var total_tbl="0";
			$("#maintable textarea").focusout(function()
			{
				var columns=$("#columns").val();

				//alert(columns);

				width_total=0;
				for(i=0;i<columns;i++)
				{
					//alert($('input[name=td_width_'+i+']').val());
					width_total=width_total+parseInt($('input[name=td_width_'+i+']').val());
				}

				if(width_total>100)
				{
					//Swal.fire('Column width can to be greater than 100', '', 'error');
					err_total=parseInt(width_total)-100;
					$("#widthtableerror").text("Sum of values must not exceed 100. Exceeding by -"+err_total+"%");
					return false;
				}
				else
				{
					$("#widthtableerror").text("");
				}
			});


			$(document).on('focusout','#maintable textarea',function() {

				var columns=$("#columns").val();

				//alert(columns);

				width_total=0;
				for(i=0;i<columns;i++)
				{
					//alert($('input[name=td_width_'+i+']').val());
					width_total=width_total+parseInt($('input[name=td_width_'+i+']').val());
				}

				if(width_total>100)
				{
					//Swal.fire('Column width can to be greater than 100', '', 'error');
					//$("#widthtableerror").text("Column width can to be greater than 100");
					err_total=parseInt(width_total)-100;
					$("#widthtableerror").text("Sum of values must not exceed 100. Exceeding by -"+err_total+"%");
					return false;
				}
				else
				{
					$("#widthtableerror").text("");
				}
				//alert("here");
			});





			//$("#columns").val("6");
			$("#columns_div").hide();

			$(document).on('change','.width_txt', function()
			{
				var intRegex = /^\d+$/;
				//var floatRegex = /^((\d+(\.\d *)?)|((\d*\.)?\d+))$/;
				var txt_val=$(this).val();
				//if(intRegex.test(txt_val) || floatRegex.test(txt_val))
				if(intRegex.test(txt_val) )
				{

				}
				else
				{
					Swal.fire('Please enter correct value for column width', '', 'error')
				}
			});



			var edit_id=$("#edit_id").val();
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

				$("#quotation_date").daterangepicker({
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

				$("#quotation_date").daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				startDate: "<?php echo $quotation_date; ?>",
			});

			var quotation_type="<?php echo $quote_type; ?>";

			//alert(quotation_type);



				if(quotation_type=="1")
				{
					//old
					//alert("OLD");
					$("#discharge_point_term_div").hide();
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#cancellation_of_order_charge_div").hide();
					$("#delivery_point_div").hide();
					$("#packing_div").hide();
					$("#statutory_clause_div").hide();

					$("#excise_div").hide();
					$("#lbt_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();

					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#tax_div").show();

					$("#freight_div").show();
					$("#delivery_div").show();
					$("#prices_div").show();


				}

				if(quotation_type=="2")
				{
					//export
					//alert("EXPORT");
					$("#tax_div").hide();
					$("#excise_div").hide();
					$("#lbt_div").hide();
					$("#freight_div").hide();
					$("#prices_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();


					$("#discharge_point_term_div").show();
					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#bank_charges_div").show();
					$("#sampling_charges_div").show();
					$("#lchandling_charges_div").show();
					$("#cancellation_of_order_charge_div").show();
					$("#delivery_point_div").show();
					$("#packing_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#statutory_clause_div").show();
					$("#delivery_point_div").show();


				}

				if(quotation_type=="3")
				{

					//local
					//alert("local");
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#delivery_point_div").hide();
					$("#excise_div").hide();
					$("#lbt_div").hide();
					$("#freight_div").hide();
					$("#prices_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").show();



					$("#discharge_point_term_div").show();
					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#cancellation_of_order_charge_div").show();
					$("#packing_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#statutory_clause_div").show();
					$("#tax_div").show();
					$("#delivery_div").show();

				}

				if(quotation_type=="4")
				{
					//AMC
					//alert("amc");
					$("#discharge_point_term_div").hide();
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#delivery_point_div").hide();
					$("#packing_div").hide();
					$("#lbt_div").hide();
					$("#freight_div").hide();
					$("#delivery_div").hide();
					$("#prices_div").hide();
					$("#excise_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();


					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#cancellation_of_order_charge_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#statutory_clause_div").show();
					$("#tax_div").show();

				}

				if(quotation_type=="5")
				{
					//regular
					//alert("regular");
					$("#columns_div").show();
					$("#discharge_point_term_div").hide();
					$("#installation_charge_div").hide();
					$("#warranty_div").hide();
					$("#training_div").hide();
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#cancellation_of_order_charge_div").hide();
					$("#delivery_point_div").hide();
					$("#packing_div").hide();
					$("#statutory_clause_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();

					$("#excise_div").hide();
					$("#lbt_div").hide();



					$("#payment_term_div").show();

					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#tax_div").show();

					$("#freight_div").show();
					$("#delivery_div").show();
					$("#prices_div").show();

				}
			}


			$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});


			$('.terms_checkbox').change(function()
			{
				var txt_name=$(this).attr('txt_name');

				if(this.checked)
				{

					$("#"+txt_name).removeAttr( "readonly" );
				}
				else
				{
					$("#"+txt_name).attr('readonly', 'false');
					$("#"+txt_name).val('');
				}
				//$('#prices').val(this.checked);
			});

			$('#quote_type').change(function() {

				//alert("here");

				var edit_id=$("#edit_id").val();
				var column_val=$("#columns").val();
				//alert(edit_id);
				//alert(column_val);
				if(edit_id=="0")
				{
					//alert("here");
					$("#rows").val("0");
					$("#columns").val("0");
					$("#nooftr").val("0");

					$('#widthtable tr').remove();

					$('#maintable tr').remove();
				}

				//alert($("#columns").val());

				var item=$(this);
				var item_val=item.val();

				//alert(item_val);

				if(item_val=="1")
				{
					//old
					//alert("OLD");
					if(edit_id=="0")
					{
						$("#columns").val("6");
					}

					$("#columns_div").hide();

					$("#discharge_point_term_div").hide();
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#cancellation_of_order_charge_div").hide();
					$("#delivery_point_div").hide();
					$("#packing_div").hide();
					$("#statutory_clause_div").hide();

					$("#excise_div").hide();
					$("#lbt_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();

					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#tax_div").show();

					$("#freight_div").show();
					$("#delivery_div").show();
					$("#prices_div").show();


				}

				if(item_val=="2")
				{
					//export
					//alert("EXPORT");
					//$("#columns").val("6");
					if(edit_id=="0")
					{
						$("#columns").val("6");
					}
					$("#columns_div").hide();
					$("#tax_div").hide();
					$("#excise_div").hide();
					$("#lbt_div").hide();
					$("#freight_div").hide();
					$("#prices_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();


					$("#discharge_point_term_div").show();
					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#bank_charges_div").show();
					$("#sampling_charges_div").show();
					$("#lchandling_charges_div").show();
					$("#cancellation_of_order_charge_div").show();
					$("#delivery_point_div").show();
					$("#packing_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#statutory_clause_div").show();
					$("#delivery_point_div").show();


				}

				if(item_val=="3")
				{

					//local
					//alert("local");
					//$("#columns").val("6");
					if(edit_id=="0")
					{
						//alert("edit");
						$("#columns").val("6");
					}
					$("#columns_div").hide();
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#delivery_point_div").hide();
					$("#excise_div").hide();
					$("#lbt_div").hide();
					$("#freight_div").hide();
					$("#prices_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").show();



					$("#discharge_point_term_div").show();
					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#cancellation_of_order_charge_div").show();
					$("#packing_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#statutory_clause_div").show();
					$("#tax_div").show();
					$("#delivery_div").show();

				}

				if(item_val=="4")
				{
					//AMC
					//alert("amc");
					//$("#columns").val("6");
					if(edit_id=="0")
					{
						$("#columns").val("6");
					}
					$("#columns_div").hide();
					$("#discharge_point_term_div").hide();
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#delivery_point_div").hide();
					$("#packing_div").hide();
					$("#lbt_div").hide();
					$("#freight_div").hide();
					$("#delivery_div").hide();
					$("#prices_div").hide();
					$("#excise_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();


					$("#installation_charge_div").show();
					$("#warranty_div").show();
					$("#training_div").show();
					$("#cancellation_of_order_charge_div").show();
					$("#payment_term_div").show();
					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#statutory_clause_div").show();
					$("#tax_div").show();

				}

				if(item_val=="5")
				{
					//regular
					//alert("regular");
					if(edit_id=="0")
					{
						$("#columns").val("0");
					}
					//$("#columns").val("");
					$("#columns_div").show();
					$("#discharge_point_term_div").hide();
					$("#installation_charge_div").hide();
					$("#warranty_div").hide();
					$("#training_div").hide();
					$("#bank_charges_div").hide();
					$("#sampling_charges_div").hide();
					$("#lchandling_charges_div").hide();
					$("#cancellation_of_order_charge_div").hide();
					$("#delivery_point_div").hide();
					$("#packing_div").hide();
					$("#statutory_clause_div").hide();

					$("#tds_div").hide();
					$("#othercharges_div").hide();

					$("#excise_div").hide();
					$("#lbt_div").hide();



					$("#payment_term_div").show();

					$("#validity_of_quotation_div").show();
					$("#documents_div").show();
					$("#jurisdiction_div").show();
					$("#tax_div").show();

					$("#freight_div").show();
					$("#delivery_div").show();
					$("#prices_div").show();

				}
				//alert(item.val());

			});

			/*$("#rows").change(function()
			{
				var rows=$("#rows").val();
				var nooftr=$("#nooftr").val();

				if(parseInt(rows)<parseInt(nooftr))
				{
					Swal.fire('Please enter value greater than '+nooftr+'.', '', 'info')
				}

			});*/


			$(document).on("click", ".generate_tbl", function(){

				//alert("here there");

			//$(".generate_tbl").click(function(){
				//total_tbl++;
				//alert(total_tbl);
				//alert($('#data[0][0]').val());

				//var total_tbl=parseInt($(this).attr("tbl_val"));
				//alert(total_tbl);
				//var new_tbl=total_tbl+1;

				var edit_id=$("#edit_id").val();

				//for multiple table code
				/*var rows = $("#rows"+total_tbl).val();
				var columns = $("#columns"+total_tbl).val();*/


				var rows = $("#rows").val();
				var columns = $("#columns").val();


				var quote_type=$('#quote_type').val();
				if(quote_type=="5")
				{
					var vars = {};

					for (var i = 0; i < rows; i++)
					{
						for (var j = 0; j < columns; j++)
						{

							//alert(values);
							//$('#data[0][0]').val()
							if($('#data_'+i+j).length)
							{
								vars['data[' + i+']['+j+']'] =$('#data_'+i+j).val();
							}
							else
							{
								vars['data[' + i+']['+j+']'] ="";
							}

							//vars['data[' + i+']['+j+']'] =$('#data_'+i+j).val();
						}
					}



					//$('#maintable'+total_tbl+' tr').remove();
					//$('#widthtable'+total_tbl+' tr').remove();

					$('#maintable'+' tr').remove();
					$('#widthtable'+' tr').remove();

					$("#nooftr").val('0');
					//alert($("#nooftr").val());
				}


				//alert(edit_id);

				if(edit_id==0)
				{
					var quote_type=$('#quote_type').val();
					//alert(quote_type);
					if(quote_type=="5")
					{
						var vars = {};

						for (var i = 0; i < rows; i++)
						{
							for (var j = 0; j < columns; j++)
							{

								//alert(values);
								//$('#data[0][0]').val()
								if($('#data_'+i+j).length)
								{
									vars['data[' + i+']['+j+']'] =$('#data_'+i+j).val();
								}
								else
								{
									vars['data[' + i+']['+j+']'] ="";
								}

								//vars['data[' + i+']['+j+']'] =$('#data_'+i+j).val();
							}
						}



						//$('#maintable'+total_tbl+' tr').remove();
						//$('#widthtable'+total_tbl+' tr').remove();

						$('#maintable'+' tr').remove();
						$('#widthtable'+' tr').remove();

						$("#nooftr").val('0');
						//alert($("#nooftr").val());
					}
				}

				var nooftr=$("#nooftr").val();

				//alert(rows);
				//alert(columns);
				//alert(nooftr);

				/*if(rows==0)
				{
					Swal.fire('Please enter number of rows greater than 0.', '', 'error');
					return false;
				}
				if(columns==0)
				{
					Swal.fire('Please enter number of columns greater than 0.', '', 'error');
					return false;
				}*/


				//var columns = <?php //echo $columns; ?>;

				var quote_type=$('#quote_type').val();

				if(quote_type==5)
				{
					//alert("here there");
					if(rows!=0 && columns!=0)
					{
						if(nooftr==0)
						{
							//alert("here");

							var quote_type=$('#quote_type').val();
							if(quote_type=="")
							{
								Swal.fire('Please select quotation type first.', '', 'error');
								return false;
							}

							var widthtabledata="";
							widthtabledata="<tr>";

							for (var i = 0; i < columns; i++) {
								var header_name="td_width_"+i;
								if(quote_type!=5)
								{
									alert("here there");
									if(i==0)
									{
										var width_val="5";
									}
									else if(i==1)
									{
										var width_val="15";
									}
									else if(i==2)
									{
										var width_val="30";
									}
									else if(i==3)
									{
										var width_val="15";
									}
									else if(i==4)
									{
										var width_val="15";
									}
									else if(i==5)
									{
										var width_val="20";
									}
									else
									{
										var width_val="";
									}
									widthtabledata=widthtabledata+"<td><input type='text' class='form-control form-control-solid width_txt' name='"+header_name+"' value='"+width_val+"' ></td>";
								}
								else
								{
									//alert("there");
									width_val=100/parseInt(columns);
									//alert(width_val);
									width_val=Math.floor(width_val);
									widthtabledata=widthtabledata+"<td><input type='text' class='form-control form-control-solid width_txt' name='"+header_name+"' value='"+width_val+"' ></td>";
								}

								//$("#widthtable").append(widthtabledata);
							}


							widthtabledata=widthtabledata+"</tr>";
							//$("#widthtable"+total_tbl).append(widthtabledata);

							$("#widthtable").append(widthtabledata);



							for (var i = 0; i < rows; i++)
							{
								var maintabledata="";
								maintabledata=maintabledata+"<tr>";
								for (var j = 0; j < columns; j++)
								{
									var data_name="data_"+i+j;
									var data_id="data_id_"+i+j;
									if(quote_type!=5)
									{
										if(i==0 && j==0)
										{
											var details_val="Sr. No.";
										}
										else if(i==0 && j==1)
										{
											var details_val="Item Code";
										}
										else if(i==0 && j==2)
										{
											var details_val="Item Description";
										}
										else if(i==0 && j==3)
										{
											var details_val="Quantity";
										}
										else if(i==0 && j==4)
										{
											var details_val="Price";
										}
										else if(i==0 && j==5)
										{
											var details_val="Remark";
										}
										else
										{
											var details_val="";
										}
										//$('#data['+i+']['+j+']').val("ddd");
										//alert($('#data['+i+']['+j+']').val());
										// $('[id^=data]').each(function(i, item) {
										// 	var grade =  $('#data['+i+']['+j+']').val();

										// 	alert(grade);
										// });
										//alert($("#data["+i+"]["+j+"]").val());
										maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='data["+i+"]["+j+"]' id='data["+i+"]["+j+"]'>"+details_val+"</textarea><input type='hidden' class='form-control form-control-solid' name='data_id["+i+"]["+j+"]' value='0'></td>";
										//maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='"+data_name+"'>"+details_val+"</textarea><input type='hidden' class='form-control form-control-solid' name='"+data_id+"' value='0'></td>";
									}
									else
									{
										//var value=$('#jhnnn').val();
										//$('#data['+i+']['+j+']').val("ddd");
										//alert($('#data['+i+']['+j+']').val());

										// $('[id^=data]').each(function(i, item) {
										// 	var grade =  $('#data['+i+']['+j+']').val();

										// 	alert(grade);
										// });
										var dataval=vars['data['+i+']['+j+']'];


										//maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='"+data_name+"'></textarea><input type='hidden' class='form-control form-control-solid' name='"+data_id+"' value='0'></td>";
										//alert($("#data["+i+"]["+j+"]").val());
										maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='data["+i+"]["+j+"]' id='data_"+i+j+"' >"+dataval+" </textarea><input type='hidden' class='form-control form-control-solid' name='data_id["+i+"]["+j+"]' value='0'></td>";
									}
									//$("#maintable").append(maintabledata);

								}

								if(i!=0)
								{
									maintabledata=maintabledata+'<td><a href="javascript:void(0);" class="remove_tbl_row" delete-id="0">Delete</a></td>';
								}
								else
								{
									maintabledata=maintabledata+"<td>&nbsp;</td>";
								}
								maintabledata=maintabledata+"</tr>";
								//alert(maintabledata);
								//$("#maintable"+total_tbl).append(maintabledata);
								//$("maintable"+total_tbl).empty();

								$("#maintable").append(maintabledata);
								$("maintable").empty();



								nooftr++;
							}


							//var div_content='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2" id="dvTable2">';
							//mutple table code

							/*var div_content='<h3>Generate Table</h3>';

							div_content=div_content+'<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

									div_content=div_content+'<div class="col" style="width:40%">';
										div_content=div_content+'<div class="fv-row mb-7">';
											div_content=div_content+'<label class="fs-6 fw-bold form-label mt-3">';
											div_content=div_content+'<span>Number of Rows</span><i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the rows."></i>';
											div_content=div_content+'</label>';
											div_content=div_content+'<input type="text" class="form-control form-control-solid" name="rows" id="rows'+new_tbl+'" value="{{$rows}}"  />';
										div_content=div_content+'</div>';
									div_content=div_content+'</div>';



									var id_val="<?php //echo $id; ?>";

								if(id_val==0)
								{
									div_content=div_content+'<div class="col" style="width:40%" id="columns_div">';
										div_content=div_content+'<div class="fv-row mb-7">';
											div_content=div_content+'<label class="fs-6 fw-bold form-label mt-3">';
											div_content=div_content+'<span>Number Of Columns</span>';
											div_content=div_content+'<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the number of columns."></i>';
											div_content=div_content+'</label>';
											div_content=div_content+'<input type="text" class="form-control form-control-solid" name="columns" id="columns'+new_tbl+'" value="{{$columns}}"  />';
										div_content=div_content+'</div>';
									div_content=div_content+'</div>';
								}
								else
								{
									div_content=div_content+'<div class="col" style="width:40%" id="columns_div">';
										div_content=div_content+'<div class="fv-row mb-7">';
											div_content=div_content+'<label class="fs-6 fw-bold form-label mt-3">';
											div_content=div_content+'<span>Number Of Columns</span>';
											div_content=div_content+'<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the number of columns."></i>';
											div_content=div_content+'</label>';
											div_content=div_content+'<input type="text" class="form-control form-control-solid" name="columns" id="columns'+new_tbl+'" value="{{$columns}}"  />';
										div_content=div_content+'</div>';
									div_content=div_content+'</div>';
								}

									div_content=div_content+'<div class="col" style="width:20%">';
										div_content=div_content+'<div class="fv-row mb-7">';
											div_content=div_content+'<label class="fs-6 fw-bold form-label mt-3">';
											div_content=div_content+'<span>&nbsp;</span>';
											div_content=div_content+'</label>';
											div_content=div_content+'<div class="d-flex justify-content-end">';
												div_content=div_content+'<input type="button" id="generate_tbl" tbl_val="'+new_tbl+'"  class="btn btn-primary btn-light me-3 generate_tbl" value="Add Table">';
											div_content=div_content+'</div>';
										div_content=div_content+'</div>';
									div_content=div_content+'</div>';

							div_content=div_content+'</div>';


							div_content=div_content+'<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2" id="dvTable'+new_tbl+'">';

								div_content=div_content+'<div id="widthtableerror'+new_tbl+'" style="color:red"></div>';

								div_content=div_content+'<table id="widthtable'+new_tbl+'" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" style="border: none;width:100% !important;min-width:100% !important;">';
									div_content=div_content+'<tbody>';
									div_content=div_content+'</tbody>';
								div_content=div_content+'</table>';

								div_content=div_content+'<table id="maintable'+new_tbl+'" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" style="border: none;width:100% !important;min-width:100% !important">';
									div_content=div_content+'<tbody>';
									div_content=div_content+'</tbody>';
								div_content=div_content+'</table>';

							div_content=div_content+'</div>';


							var div=$(div_content);
							var sopra=$('#dvTable'+total_tbl);
							$( div ).insertAfter( sopra );*/


							//$("#dvTable").append(div_content);
							$("#nooftr").val(nooftr);
							$("#rows").val(nooftr);

						}
						else
						{


							var widthtabledata="";
							widthtabledata="<tr>";


							for (var i = 0; i < columns; i++) {

									//alert("there");
									width_val=100/parseInt(columns);
									//alert(width_val);
									width_val=Math.floor(width_val);
									widthtabledata=widthtabledata+"<td><input type='text' class='form-control form-control-solid width_txt' name='"+header_name+"' value='"+width_val+"' ></td>";


								//$("#widthtable").append(widthtabledata);
							}


							widthtabledata=widthtabledata+"</tr>";
							$("#widthtable").empty();
							$("#widthtable").append(widthtabledata);



								$("#maintable").empty();
								for (var i = 0; i < rows; i++)
								{
									//alert(i);
									var maintabledata="";
									maintabledata=maintabledata+"<tbody><tr>";
									for (var j = 0; j < columns; j++)
									{
										//alert("there");
										//var data_name="data_"+i+j;
										//var data_id="data_id_"+i+j;
										//$('#data['+i+']['+j+']').val("ddd");
										//alert($('#data['+i+']['+j+']').val());
										var maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='data["+i+"]["+j+"]' id='data["+i+"]["+j+"]'></textarea><input type='hidden' class='form-control form-control-solid' name='data_id["+i+"]["+j+"]' value='0'></td>";
										//$("#maintable tr:last").after(maintabledata);

									}
									//if(i!=0 && i!=1)
									//{
										maintabledata=maintabledata+'<td><a href="javascript:void(0);" class="remove_tbl_row" delete-id="0">Delete</a></td>';
									// }
									// else
									// {
									// 	maintabledata=maintabledata+"<td>blank</td>";
									// }
									maintabledata=maintabledata+"</tr></tbody>";
									//alert(maintabledata);

									$("#maintable").append(maintabledata);
									nooftr++;
								}

								$("#nooftr").val(rows);
								$("#rows").val(rows);
							////}
							/*else
							{
								Swal.fire('Enter correct number', '', 'error');
							}*/

						}
					}
				}
				else
				{
					//alert("else part");
					if(rows!=0 )
					{
						//alert(nooftr);
						if(nooftr==0)
						{
							//alert("here");

							var quote_type=$('#quote_type').val();
							if(quote_type=="")
							{
								Swal.fire('Please select quotation type first.', '', 'error');
								return false;
							}

							var widthtabledata="";
							widthtabledata="<tr>";

							for (var i = 0; i < columns; i++) {
								var header_name="td_width_"+i;
								if(quote_type!=5)
								{
									if(i==0)
									{
										var width_val="5";
									}
									else if(i==1)
									{
										var width_val="15";
									}
									else if(i==2)
									{
										var width_val="30";
									}
									else if(i==3)
									{
										var width_val="15";
									}
									else if(i==4)
									{
										var width_val="15";
									}
									else if(i==5)
									{
										var width_val="20";
									}
									else
									{
										var width_val="";
									}
									widthtabledata=widthtabledata+"<td><input type='text' class='form-control form-control-solid width_txt' name='"+header_name+"' value='"+width_val+"' ></td>";
								}
								else
								{
									width_val=100/parseInt(columns);
									width_val=Math.floor(width_val);
									widthtabledata=widthtabledata+"<td><input type='text' class='form-control form-control-solid width_txt' name='"+header_name+"' value='"+width_val+"' ></td>";
								}

								//$("#widthtable").append(widthtabledata);
							}

							//widthtabledata=widthtabledata+"<td>Test</td>";

							widthtabledata=widthtabledata+"</tr>";
							//$("#widthtable"+total_tbl).append(widthtabledata);
							$("#widthtable").append(widthtabledata);



							for (var i = 0; i < rows; i++)
							{
								var maintabledata="";
								maintabledata=maintabledata+"<tr>";
								for (var j = 0; j < columns; j++)
								{
									var data_name="data_"+i+j;
									var data_id="data_id_"+i+j;
									if(quote_type!=5)
									{
										if(i==0 && j==0)
										{
											var details_val="Sr. No.";
										}
										else if(i==0 && j==1)
										{
											var details_val="Item Code";
										}
										else if(i==0 && j==2)
										{
											var details_val="Item Description";
										}
										else if(i==0 && j==3)
										{
											var details_val="Quantity";
										}
										else if(i==0 && j==4)
										{
											var details_val="Price";
										}
										else if(i==0 && j==5)
										{
											var details_val="Remark";
										}
										else
										{
											var details_val="";
										}
										//$('#data['+i+']['+j+']').val("ddd");
										//alert($('#data['+i+']['+j+']').val());
										// $('[id^=data]').each(function(i, item) {
										// 	var grade =  $('#data['+i+']['+j+']').val();

										// 	alert(grade);
										// });
										//alert($("#data["+i+"]["+j+"]").val());
										maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='data["+i+"]["+j+"]' id='data["+i+"]["+j+"]'>"+details_val+"</textarea><input type='hidden' class='form-control form-control-solid' name='data_id["+i+"]["+j+"]' value='0'></td>";
										//maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='"+data_name+"'>"+details_val+"</textarea><input type='hidden' class='form-control form-control-solid' name='"+data_id+"' value='0'></td>";
									}
									else
									{
										//var value=$('#jhnnn').val();
										//$('#data['+i+']['+j+']').val("ddd");
										//alert($('#data['+i+']['+j+']').val());

										// $('[id^=data]').each(function(i, item) {
										// 	var grade =  $('#data['+i+']['+j+']').val();

										// 	alert(grade);
										// });
										var dataval=vars['data['+i+']['+j+']'];


										//maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='"+data_name+"'></textarea><input type='hidden' class='form-control form-control-solid' name='"+data_id+"' value='0'></td>";
										//alert($("#data["+i+"]["+j+"]").val());
										maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='data["+i+"]["+j+"]' id='data_"+i+j+"' >"+dataval+" </textarea><input type='hidden' class='form-control form-control-solid' name='data_id["+i+"]["+j+"]' value='0'></td>";
									}
									//$("#maintable").append(maintabledata);

								}

								if(i!=0)
								{
									maintabledata=maintabledata+'<td><a href="javascript:void(0);" class="remove_tbl_row" delete-id="0">Delete</a></td>';
								}
								else
								{
									maintabledata=maintabledata+"<td>&nbsp;</td>";
								}
								maintabledata=maintabledata+"</tr>";
								//$("#maintable"+total_tbl).append(maintabledata);
								//$("maintable"+total_tbl).empty();

								$("#maintable").append(maintabledata);
								$("maintable").empty();
								nooftr++;
							}
							$("#nooftr").val(nooftr);
							$("#rows").val(nooftr);

						}
						else
						{

							//rowscount=(+nooftr) + (+rows);
							//rowscount=(rows) - (nooftr);

							if(rows > nooftr)
							{
								//alert("here");
								for (var i = nooftr; i < rows; i++)
								{
									//alert(i);
									var maintabledata="";
									maintabledata=maintabledata+"<tbody><tr>";
									for (var j = 0; j < columns; j++)
									{
										//alert("there");
										var data_name="data_"+i+j;
										var data_id="data_id_"+i+j;
										//$('#data['+i+']['+j+']').val("ddd");
										//alert($('#data['+i+']['+j+']').val());
										var maintabledata=maintabledata+ "<td><textarea class='form-control form-control-solid' name='data["+i+"]["+j+"]' id='data["+i+"]["+j+"]'></textarea><input type='hidden' class='form-control form-control-solid' name='data_id["+i+"]["+j+"]' value='0'></td>";
										//$("#maintable tr:last").after(maintabledata);

									}
									//if(i!=0 && i!=1)
									//{
										maintabledata=maintabledata+'<td><a href="javascript:void(0);" class="remove_tbl_row" delete-id="0">Delete</a></td>';
									// }
									// else
									// {
									// 	maintabledata=maintabledata+"<td>blank</td>";
									// }
									maintabledata=maintabledata+"</tr></tbody>";
									//alert(maintabledata);
									//$("#maintable"+total_tbl+":last").append(maintabledata);
									$("#maintable"+":last").append(maintabledata);
									nooftr++;
								}

								$("#nooftr").val(rows);
								$("#rows").val(rows);
							}
							/*else
							{
								Swal.fire('Enter correct number', '', 'error');
							}*/

						}
					}
				}

			});


			//Once remove button is clicked
			$("#maintable").on('click', '.remove_tbl_row', function(e){
			//e.preventDefault();

			var delete_id=$(this).attr('delete-id');

			if(delete_id==0)
			{
				var rows_val = $("#rows").val();
				rows_val=parseInt(rows_val)-1;
				//alert(rows_val);
				$("#rows").val(rows_val);
				$("#nooftr").val(rows_val);
				$(this).closest('tr').remove();

				//$(this).closest('.rtgs_neft_master').remove(); //Remove field html
			}
			else
			{
				//alert("here");
				//return false;
				//alert("else part");
				var rows_val = $("#rows").val();
				rows_val=parseInt(rows_val)-1;
				//alert(rows_val);
				$("#rows").val(rows_val);
				$("#nooftr").val(rows_val);
				$(this).closest('tr').remove();

				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deletetbldata') }}",
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
					t.value?(window.location.href = "{{ URL::to('quotation') }}"):"cancel"===t.dismiss&&Swal.fire({
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

			jQuery.validator.addMethod("validatecheckboxfield", function(fieldvalue, element) {
					//alert(element.name);
					//alert($("#"+element.name+"_checkbox").val());
					// if($("#"+element.name+"_checkbox").prop('checked')==true)
					// {
					// 	alert("here");
					// }
					// else
					// {
					// 	alert("there");
					// }
                    // contact_number = contact_number.replace(/\s+/g, "");
                     return $("#"+element.name+"_checkbox").prop('checked')!=true || fieldvalue!=""
                    // contact_number.match(/^[0-9]*$/);
                }, "Please enter value in this field");

			frm_user.validate({
                    errorElement: 'span',
                    errorClass: 'help-block help-block-error',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
						rows: {
                            required: true
                        },
						column: {
                            required: true
                        },
						sales_person: {
                            required: true
                        },
						comp_name_add:{
							required: true
						},
						quotation_date:{
							required: true
						},
						// note: {
                        //     required: true
                        // },
						subject: {
                            required: true
                        },
						reference: {
                            required: true
                        },
						quote_type:{
							required: true
						},
						attention_of:{
							required: true
						},
						discharge_point_term:{
							validatecheckboxfield:true
						},
						installation_charge:{
							validatecheckboxfield:true
						},
						warranty:{
							validatecheckboxfield:true
						},
						training:{
							validatecheckboxfield:true
						},
						bank_charges:{
							validatecheckboxfield:true
						},
						sampling_charges:{
							validatecheckboxfield:true
						},
						lchandling_charges:{
							validatecheckboxfield:true
						},
						cancellation_of_order_charge:{
							validatecheckboxfield:true
						},
						delivery_point:{
							validatecheckboxfield:true
						},
						packing:{
							validatecheckboxfield:true
						},
						payment_term:{
							validatecheckboxfield:true
						},
						validity_of_quotation:{
							validatecheckboxfield:true
						},
						documents:{
							validatecheckboxfield:true
						},
						jurisdiction:{
							validatecheckboxfield:true
						},
						statutory_clause:{
							validatecheckboxfield:true
						},
						tax:{
							validatecheckboxfield:true
						},
						excise:{
							validatecheckboxfield:true
						},
						lbt:{
							validatecheckboxfield:true
						},
						freight:{
							validatecheckboxfield:true
						},
						delivery:{
							validatecheckboxfield:true
						},
						prices:{
							validatecheckboxfield:true
						},
						company:{
							required:true
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
                            //error.insertAfter(element.next('.select2-container'));
							error.insertAfter(element.closest(".form-floating"));
							//error.insertAfter(element.next('span'));

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

						//alert("here");
                        //mcs.start();

						var rows=$("#rows").val();
						var columns=$("#columns").val();
						//alert(rows);

						//alert(rows);
						//alert(columns);

						/*if(rows==0 || columns==0)
						{
							Swal.fire('Please enter row and column', '', 'error');
							return false;
						}
						var checktd=$('input[name=td_width_0]').val();
						//alert(checktd);
						if(typeof checktd=="undefined")
						{
							Swal.fire('Please enter row and column', '', 'error');
							return false;
						}*/

						width_total=0;
						for(i=0;i<columns;i++)
						{
							//alert($('input[name=td_width_'+i+']').val());
							width_total=width_total+parseInt($('input[name=td_width_'+i+']').val());
						}

						//alert(width_total);

						if(width_total>100)
						{
							err_total=parseInt(width_total)-100;
							//$("#widthtableerror").text("Sum of values must not exceed 100. Exceeding by -"+err_total+"%");
							Swal.fire("Sum of values must not exceed 100. Exceeding by -"+err_total+"%", '', 'error');
							return false;
						}
						//alert(width_total);




                        form_success.show();
                        form_error.hide();
                        // $.blockUI({
                        //     centerY: 0,
                        //     css: {
                        //         'z-index':'10052',padding: '11px', height: '45px',top: '60px', left: '', right: '10px',
                        //     }
                        // });

                        $.post("{{ URL::to('submitquotation') }}", $("#frm_user").serialize(), function (data) {
							//alert(data.alert_type);
							//alert(data.mode);
							if (data.alert_type == "succ") {
                                if (data.mode=='add')
								{


									swal.fire({ text: data.message}).then(function(){
														//r.reset(),i.hide()
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('quotation') }}";
													}
													);


								}
								else
								{

									swal.fire({ text: data.message}).then(function(){
														//r.reset(),i.hide()
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('quotation') }}";
														//datatablerefresh();
													}
													);

								}
							}
							else
							{
								if (data.mode=='add'){

									swal.fire({ text: data.message}).then(function(){
														//r.reset(),i.hide()
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('quotation') }}";
														//datatablerefresh();
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){
														//r.reset(),i.hide()
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('quotation') }}";
														//datatablerefresh();
													}
													);


								}
							}
                            // if (data.alert_type == "error") {
                            //     document.getElementById('dsk').innerHTML = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>' + data.message + '</div>';
                            //     document.getElementById('dsk').style.display = "block";
                            // }
                            //mcs.stop();
                            //$.unblockUI();
                        }, "json");
                    },
                    messages: {
                        name: {
                            required: "This field is required",
                            //remote: "This state already exists. Please try another state.",
                        }
                    }
                });
		});
		</script>
	</body>
	<!--end::Body-->
</html>
