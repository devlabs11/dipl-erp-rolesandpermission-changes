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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Sales Work Order</h1>
									<?php
									}
									else
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Sales Work Order</h1>
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
													<h2>Add New Sales Work Order</h2>
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
															<a class="nav-link text-active-primary pb-4 active" id="general_link" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">General Details</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" id="labeling_link" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Labeling Details</a>
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
												<form class="form" method="POST" enctype="multipart/form-data"  name="frm_sales_work_order"  id="frm_sales_work_order">
												{{@csrf_field()}}


											<?php


											$order_no="";
											$order_name="";
											$customer_name="";
											$sales_order_date="";
											$target_delivery_date="";
											$transport_option="";
											$transport_mode="";
											$transporter_location="";
											$tax_structure="";
											$tax_structure_arr =array();
											$freight_charges_before_tax="0";
											$freight_charges="";
											$loading_packing_charge="";
											$loading_packing_charge_before_tax="0";
											$insurance_charge="";
											$insurance_charge_before_tax="0";
											$other_charges="0";
											$sales_order_date="";
											$target_delivery_date="";
											$po_no="";
											$po_date="";
											$transaction_category="";
											$job_card_no="";
											$job_instruction="";
											$quantity="";
											$quantity_unit="";
											$po_qty_unit_diff_frm_so="";
											$job_card_no="";

											$po_quantity="";
											$po_quantity_unit="";
											$width="";
											$width_unit="";
											$height_length="";
											$height_length_unit="";
											$unit_price="";
											$unit_price_unit="";
											$numbers_from="";
                                            $discount= "";
											$numbers_to="";

											$customer_order_email_po_copy="";
											$open="";
											$dispatch_invoice_instructions="";
											$delivery_location="";
											$transport_debit_note="";
											$trasport_debit_note="";
											$other_charge_txt1="";
											$other_charge_txt2="";
											$other_charge_before_tax="";
											$job_card_type="";
											//$edit_id="0";
											  if(is_array($tbl_salesworkorder))
											  {
												  foreach($tbl_salesworkorder as $tbl_salesworkorder)
												  {
													    //var_dump($tbl_salesworkorder);die;
														$id=$tbl_salesworkorder->id;
														$order_no=$tbl_salesworkorder->order_no;
														$order_name=$tbl_salesworkorder->order_name;
														$customer_name=$tbl_salesworkorder->customer_name;
														$sales_order_date=$tbl_salesworkorder->delivery_location;




														$transport_option=$tbl_salesworkorder->transporter_option;
														$transport_mode=$tbl_salesworkorder->transporter_mode;
														$transporter_location=$tbl_salesworkorder->transporter_location;
														$tax_structure=$tbl_salesworkorder->tax_structure;

														$tax_structure_arr = explode(",",$tax_structure);
														$freight_charges_before_tax=$tbl_salesworkorder->freight_charges_before_tax;
														$freight_charges=$tbl_salesworkorder->freight_charges;
														$loading_packing_charge=$tbl_salesworkorder->loading_packing_charges;
														$loading_packing_charge_before_tax=$tbl_salesworkorder->loading_packing_charges_before_tax;
														$insurance_charge=$tbl_salesworkorder->insurance_charges;
														$insurance_charge_before_tax=$tbl_salesworkorder->insurance_charges_before_tax;
														$other_charges=$tbl_salesworkorder->other_charges;

														$other_charge_txt1=$tbl_salesworkorder->other_charge_txt1;
														$other_charge_txt2=$tbl_salesworkorder->other_charge_txt2;


														$other_charge_before_tax=$tbl_salesworkorder->other_charge_before_tax;

														$sales_order_date=$tbl_salesworkorder->sales_order_date;
														$target_delivery_date=$tbl_salesworkorder->target_delivery_date;
														$po_no=$tbl_salesworkorder->po_no;
														$po_date=$tbl_salesworkorder->po_date;
														$transaction_category=$tbl_salesworkorder->transaction_category;
														$job_card_no=$tbl_salesworkorder->job_card_no;

														$tbl_job_cart = DB::select("select * from tbl_job_cart where id='$job_card_no'");

														foreach($tbl_job_cart as $tbl_job_cart){
															$job_card_type=$tbl_job_cart->type;
														}

														$job_instruction=$tbl_salesworkorder->job_instruction;
														$quantity=$tbl_salesworkorder->quantity;
														$quantity_unit=$tbl_salesworkorder->quantity_unit;
														$po_qty_unit_diff_frm_so=$tbl_salesworkorder->po_qty_unit_diff_frm_so;

														$po_quantity=$tbl_salesworkorder->po_quantity;
														$po_quantity_unit=$tbl_salesworkorder->po_quantity_unit;
														$width=$tbl_salesworkorder->width;
														$width_unit=$tbl_salesworkorder->width_unit;
														$height_length=$tbl_salesworkorder->height_length;
														$height_length_unit=$tbl_salesworkorder->height_length_unit;
														$unit_price=$tbl_salesworkorder->unit_price;
														$unit_price_unit=$tbl_salesworkorder->unit_price_unit;
														$numbers_from=$tbl_salesworkorder->numbers_from;
														$numbers_to=$tbl_salesworkorder->numbers_to;
                                                        $discount=$tbl_salesworkorder->discount;

														$customer_order_email_po_copy=$tbl_salesworkorder->customer_order_email;
														$open=$tbl_salesworkorder->open;
														$dispatch_invoice_instructions=$tbl_salesworkorder->dispatch_invoice_instructions;
														$delivery_location=$tbl_salesworkorder->delivery_location;

														$transport_debit_note=$tbl_salesworkorder->transport_debit_note;
												  }



											  }

											  //echo $id;


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
																	<span class="required">Work/Sales Order No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Work/Sales Order No."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="order_no" id="order_no" value="{{$order_no}}" />
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
																	<span class="required">Work/Sales Order Name</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Work/Sales Order Name."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->


																<input type="text" class="form-control form-control-solid" name="order_name" id="order_name" value="{{$order_name}}" />
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
																	<span class="required">Sales Order Customer Name</span>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="customer_name" id="customer_name" aria-label="Select Customer Name" data-control="select2" data-placeholder="Select Customer Name..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php
																			$tbl_customer_general = DB::select("select * from tbl_customer_general");

																			foreach($tbl_customer_general as $tbl_customer_general){
																				$name=$tbl_customer_general->customer_name;
																				$customer_id=$tbl_customer_general->id;
																				$selected="";
																				if($customer_name==$customer_id)
																				{
																					$selected="selected='selected'";
																				}
																				echo "<option $selected value='".$customer_id."'>$name</option>";
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
                                                        <script>
                                                            $(document).ready(function(){
                                                               console.log('salesworkorderaddedit.blade.php');
                                                                $('#customer_name').change(function() {
                                                                    let selectedValue = $(this).val();
                                                                    console.log("Selected Value: " + selectedValue);
                                                                    jQuery.ajax({
                                                                        url: "{{route('get-customer-delivery')}}",
                                                                        data: {
                                                                            id: selectedValue
                                                                        },
                                                                        type: 'GET',
                                                                        success: function(data) {
                                                                            console.log(data);
                                                                            $('#delivery_location').empty();
                                                                            $.each(data, function(key, value) {
                                                                                $('#delivery_location').append('<option selected value="'+value.id+'">'+value.delivery_location+'</option>');
                                                                            });
                                                                        }
                                                                    });
                                                                });
                                                                $('#customer_name').trigger("change");
                                                            //    var SelectedCustomer = $('#customer_name').val();

                                                            });
                                                        </script>


														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Delivery Location</span>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="delivery_location" id="delivery_location" aria-label="Select Delivery Location" data-control="select2" data-placeholder="Select Delivery Location..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>


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
																	<span>Transporter Option</span>
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	&nbsp;&nbsp;&nbsp;
																	<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add Transporter</button>
																</label>

																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="transport_option" id="transport_option" aria-label="Select Transporter Option" data-control="select2" data-placeholder="Select Transporter Option..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php
																			$tbl_transport = DB::select("select * from tbl_transport");

																			foreach($tbl_transport as $tbl_transport){
																				$transport_name=$tbl_transport->transport_name;
																				$transport_id=$tbl_transport->id;
																				$selected="";
																				if($transport_option==$transport_id)
																				{
																					$selected="selected='selected'";
																				}
																				echo "<option $selected value='".$transport_id."'>$transport_name</option>";
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
																	<span>Transporter Location</span>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="transporter_location" id="transporter_location" aria-label="Select Transporter Location" data-control="select2" data-placeholder="Select Transporter Location..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php
																			$tbl_transport_location = DB::select("select * from tbl_transport_location");

																			foreach($tbl_transport_location as $tbl_transport_location){
																				$location_name=$tbl_transport_location->location_name;
																				$location_id=$tbl_transport_location->id;
																				$selected="";
																				if($transporter_location==$location_id)
																				{
																					$selected="selected='selected'";
																				}
																				echo "<option $selected value='".$location_id."'>$location_name</option>";
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
																	<span>Transport Mode</span>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="transport_mode" id="transport_mode" aria-label="Select Transport Mode" data-control="select2" data-placeholder="Select Transport Mode..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php
																			$tbl_transport_mode = DB::select("select * from tbl_transport_mode");

																			foreach($tbl_transport_mode as $tbl_transport_mode){
																				$transport_description=$tbl_transport_mode->description;
																				$transport_id=$tbl_transport_mode->id;
																				$selected="";
																				if($transport_mode==$transport_id)
																				{
																					$selected="selected='selected'";
																				}
																				echo "<option $selected value='".$transport_id."'>$transport_description</option>";
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
																	<span>Tax Structure</span>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select multiple name="tax_structure[]" id="tax_structure" aria-label="Select Tax Structure" data-control="select2" data-placeholder="Select Tax Structure..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php
																			$tbl_tax_structure = DB::select("select * from tax_structure_masters");

																			foreach($tbl_tax_structure as $tbl_tax_structure){
																				$tax_structure_name=$tbl_tax_structure->name;
																				$tax_structure_id=$tbl_tax_structure->id;
																				$selected="";
																				// if($tax_structure==$tax_structure_name)
																				// {
																				// 	$selected="selected='selected'";
																				// }

																				if(in_array("$tax_structure_id", $tax_structure_arr))
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$tax_structure_id."'>$tax_structure_name</option>";
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
																	<span >Freight Charges</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Freight Charges."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="freight_charges" id="freight_charges" value="{{$freight_charges}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<label class="fs-6 fw-bold form-label mt-3">
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
																<input class="form-check-input is_fixed_process" {{$checked}} txt_name="freight_charges_before_tax" type="checkbox" value="1" id="is_fixed_process" name="freight_charges_before_tax" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Freight Charges Before Tax ? please enter charges in Rs, only if applicable</span>
																	</label>
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
																	<span >Loading and Packing Charges</span>

																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Loading and Packing Charges."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="loading_packing_charge" id="loading_packing_charge" value="{{$loading_packing_charge}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<label class="fs-6 fw-bold form-label mt-3">
																	<span>&nbsp;</span>
															</label>
															<div class="w-100">
															<div class="fv-row mb-7">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																//echo $is_fixed_process;die;
																	if($loading_packing_charge_before_tax=="1")
																	{
																		$checked="checked";
																	}
																	else
																	{
																		$checked="";
																	}
																?>
																<input class="form-check-input is_fixed_process" {{$checked}} txt_name="loading_packing_charge_before_tax" type="checkbox" value="1" id="loading_packing_charge_before_tax" name="loading_packing_charge_before_tax" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Loading Packing Charge Before Tax ? please enter charges in Rs, only if</span></label>
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
																	<span>Insurance Charges</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Insurance Charges."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="insurance_charge" id="insurance_charge" value="{{$insurance_charge}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<label class="fs-6 fw-bold form-label mt-3">
																	<span>&nbsp;</span>
															</label>
															<div class="w-100">
															<div class="fv-row mb-7">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																//echo $is_fixed_process;die;
																	if($insurance_charge_before_tax=="1")
																	{
																		$checked="checked";
																	}
																	else
																	{
																		$checked="";
																	}
																?>
																<input class="form-check-input is_fixed_process" {{$checked}} txt_name="insurance_charge_before_tax" type="checkbox" value="1" id="insurance_charge_before_tax" name="insurance_charge_before_tax" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Insurance Charge Before Tax ? please enter charges in Rs, only if applicable</span></label>
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
															<label class="fs-6 fw-bold form-label mt-3" style="display:none">
																	<span>&nbsp;</span>
															</label>
															<div class="w-100">
															<div class="fv-row mb-7">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																//echo $is_fixed_process;die;
																	if($other_charges=="1")
																	{
																		$checked="checked";
																	}
																	else
																	{
																		$checked="";
																	}
																?>
																<input class="form-check-input is_fixed_process" {{$checked}} txt_name="other_charges" type="checkbox" value="1" id="other_charges" name="other_charges" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Other Charges</span></label>
															</div>
															</div>
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->


													</div>
													<!--end::Row-->


													<!--begin::Row-->
													<div id="other_charges_div1" class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">


														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3" style="display:none">
																	<span >&nbsp;</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="other_charge_txt1" id="other_charge_txt1" value="{{$other_charge_txt1}}" />
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
																<label class="fs-6 fw-bold form-label mt-3" style="display:none">
																	<span >&nbsp;</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="number" class="form-control form-control-solid" name="other_charge_txt2" id="other_charge_txt2" value="{{$other_charge_txt2}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->

													</div>
													<!--end::Row-->


													<!--begin::Row-->
													<div id="other_charges_div2" class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">



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
																	if($other_charge_before_tax=="1")
																	{
																		$checked="checked";
																	}
																	else
																	{
																		$checked="";
																	}
																?>
																<input class="form-check-input is_fixed_process" {{$checked}} txt_name="other_charge_before_tax" type="checkbox" value="1" id="other_charge_before_tax" name="other_charge_before_tax" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Other Charges Before tax ? please enter charges in Rs, only if applicable</span></label>
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
																<label class="fs-6 fw-bold form-label mt-3">Transport Debit Note</label>
																<!--end::Label-->
																<!--begin::Input row-->
																<div class="d-flex flex-column fv-row">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid mb-5">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" <?php if($transport_debit_note=="1"){ echo "checked";  } ?> name="transport_debit_note" type="radio" value="1" id="transport_debit_note_yes" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold form-label mt-3"><span>Yes</span></label>
																		<!--end::Label-->
																	</div>
																	<!--end::Radio-->
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid mb-5">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" <?php if($transport_debit_note=="0"){ echo "checked";  } ?> name="transport_debit_note" type="radio" value="0" id="transport_debit_note_no" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold form-label mt-3"><span>No</span></label>
																		<!--end::Label-->
																	</div>
																	<!--end::Radio-->

																</div>
																<!--end::Input row-->
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
																	<span>Sales Order Date</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the slaes order date."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="sales_order_date" id="sales_order_date" value="{{$sales_order_date}}"  />
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
																	<span>Target Delivery Date</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the target delivery date."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="target_delivery_date" id="target_delivery_date" value="{{$target_delivery_date}}"  />
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
																	<span>PO No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the po no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="po_no" id="po_no" value="{{$po_no}}"  />
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
																	<span>PO Date</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the po date."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="po_date" id="po_date" value="{{$po_date}}"  />
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
																	<span>Transaction Category</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Transaction Category."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="transaction_category" id="transaction_category" aria-label="Select a Transaction Category" data-control="select2" data-placeholder="Select a Transaction Category..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			$tbl_transaction_category = DB::select("select * from tbl_transaction_category");

																			foreach($tbl_transaction_category as $tbl_transaction_category){
																				$transaction_category_name=$tbl_transaction_category->description;
																				$transaction_category_id=$tbl_transaction_category->id;
																				$selected="";
																				if($transaction_category==$transaction_category_id)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$transaction_category_id."'>$transaction_category_name</option>";
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
																	<span class="required">Job Card No</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Job Card No."></i>
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

																	<?php
																	if($id=="0")
																	{
																		?>
																		<p style="color:blue;display:inline">Open Job Card</p>
																		<?php
																	}
																	else
																	{
																		if($job_card_type=="Thermal")
																		{
																			$edit_url  = url("/thermal_jobcardaddedit/{$job_card_no}/general");
																		}
																		else if($job_card_type=="Computer Stationary")
																		{
																			$edit_url  = url("/computer_stationary_jobcardaddedit/{$job_card_no}/general");
																		}
																		else if($job_card_type=="Check")
																		{
																			$edit_url  = url("/checkjobcardaddedit/{$job_card_no}/general");
																		}
																		else
																		{
																			$edit_url  = url("/jobcardaddedit/{$job_card_no}/general");
																		}

																	?>
																	<a href="<?php echo $edit_url; ?>" name="open_job_card" id="open_job_card">Open Job Card</a>
																	<?php
																	}
																	?>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="job_card_no" id="job_card_no" aria-label="Select Job Card No" data-control="select2" data-placeholder="Select Job Card No..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			$tbl_job_cart = DB::select("select * from tbl_job_cart");

																			foreach($tbl_job_cart as $tbl_job_cart){
																				$job_card_no_db=$tbl_job_cart->job_card_no;
																				$job_card_id=$tbl_job_cart->id;
																				$selected="";
																				if($job_card_no==$job_card_id)
																				{
																					$selected="selected='selected'";
																				}
																				echo "<option $selected value='".$job_card_id."'>$job_card_no_db</option>";
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
																	<span>Job Instruction</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the job instruction."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<textarea   class="form-control form-control-solid" name="job_instructions" id="job_instructions" ><?php echo $job_instruction ?></textarea>
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
																	<span >Quantity</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Quantity."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="quantity" id="quantity" value="{{$quantity}}" />
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
																	<span>Quantity Unit</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Quantity Unit."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="quantity_unit" id="quantity_unit" aria-label="Select a quantity unit" data-control="select2" data-placeholder="Select a quantity unit..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			$mst_unit = DB::select("select * from mst_unit");

																			foreach($mst_unit as $mst_unit){
																				$description=$mst_unit->description;
																				$unit_id=$mst_unit->id;
																				$selected="";
																				if($quantity_unit==$unit_id)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$unit_id."'>$description</option>";
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
															<label class="fs-6 fw-bold form-label mt-3" style="display:none">
																	<span>&nbsp;</span>
															</label>
															<div class="w-100">
															<div class="fv-row mb-7">
															<div class="form-check form-check-custom form-check-solid mt-2 ">
																<?php
																//echo $is_fixed_process;die;
																	if($po_qty_unit_diff_frm_so=="1")
																	{
																		$checked="checked";
																	}
																	else
																	{
																		$checked="";
																	}
																?>
																<input class="form-check-input is_fixed_process" {{$checked}} txt_name="other_charges" type="checkbox" value="1" id="po_qty_unit_diff_frm_so" name="po_qty_unit_diff_frm_so" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>PO Quantity Unit is Diffrent from SO</span></label>
															</div>
															</div>
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->





													</div>
													<!--end::Row-->


													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2" id="po_row">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Po Quantity</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Po Quantity."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="po_quantity" id="po_quantity" value="{{$po_quantity}}" />
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
																	<span>Po Quantity Unit</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Po Quantity Unit."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="po_quantity_unit" id="po_quantity_unit" aria-label="Select a po quantity unit" data-control="select2" data-placeholder="Select a po quantity unit..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			$mst_unit = DB::select("select * from mst_unit");

																			foreach($mst_unit as $mst_unit){
																				$description=$mst_unit->description;
																				$unit_id=$mst_unit->id;
																				$selected="";
																				if($po_quantity_unit==$unit_id)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$unit_id."'>$description</option>";
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




													<h2>PO Size</h2>

													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Width</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Width."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="width" id="width" value="{{$width}}" />
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
																	<span>Width Unit</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Width Unit."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="width_unit" id="width_unit" aria-label="Select a width unit" data-control="select2" data-placeholder="Select a width unit..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			$mst_unit = DB::select("select * from mst_unit");

																			foreach($mst_unit as $mst_unit){
																				$description=$mst_unit->description;
																				$unit_id=$mst_unit->id;
																				$selected="";
																				if($width_unit==$unit_id)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$unit_id."'>$description</option>";
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
																	<span >height / length </span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height / length ."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="height_length" id="height_length" value="{{$height_length}}" />
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
																	<span>height / length  Unit</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select height / length  Unit."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="height_lenght_unit" id="height_lenght_unit" aria-label="Select a height / length  unit" data-control="select2" data-placeholder="Select a height / length  unit..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			$mst_unit = DB::select("select * from mst_unit");

																			foreach($mst_unit as $mst_unit){
																				$description=$mst_unit->description;
																				$unit_id=$mst_unit->id;
																				$selected="";
																				if($height_length_unit==$unit_id)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$unit_id."'>$description</option>";
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

													<div class="separator mb-6"></div>

													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span class="required">Unit Price </span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the unit price ."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="unit_price" id="unit_price" value="{{$unit_price}}" />
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
																	<span>Unit</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="unit_price_unit" id="unit_price_unit" aria-label="Select a unit" data-control="select2" data-placeholder="Select a unit..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php

																			$tbl_sales_work_order_unit = DB::select("select * from tbl_currency");

																			foreach($tbl_sales_work_order_unit as $tbl_sales_work_order_unit){
																				$description=$tbl_sales_work_order_unit->description;
																				$unit_id=$tbl_sales_work_order_unit->id;
																				$selected="";
																				if($unit_price_unit==$unit_id)
																				{
																					$selected="selected='selected'";
																				}

																				echo "<option $selected value='".$unit_id."'>$description</option>";
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
                                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                                        <div class="col">
                                                            <div class="fv-row mb-7">
                                                                <label class="fs-6 fw-bold form-label mt-3">
                                                                    <span >Discount </span>
                                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Discount"></i>
                                                                </label>
                                                                <div class="input-group mb-5">
                                                                    <input type="number" class="form-control form-control-solid" name="discount" id="discount" value="{{$discount}}">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="fv-row mb-7">

                                                            </div>
                                                        </div>
                                                    </div>


													<h2>Numbers</h2>


													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >From </span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the From ."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="numbers_from" id="numbers_from" value="{{$numbers_from}}" />
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
																	<span >To </span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the To ."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="numbers_to" id="numbers_to" value="{{$numbers_to}}" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->





													</div>
													<!--end::Row-->

													<div class="separator mb-6"></div>

													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">


														<!--begin::Col-->
														<div class="col" style="width:45% !important">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Customer Order Email/PO copy</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Customer Order Email/PO copy."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control" type="file" name="img" placeholder="Choose File" id="img">
																<p>(allowed file types are jpg, jpeg, png, pdf)</p>
																<?php
																if($id!="0" && $customer_order_email_po_copy!="" && $customer_order_email_po_copy!=null)
																{
																?>
																<p>

																	<?php
																		//$file ="/assets/uploadimage/specific_details/$customer_order_email_po_copy";
																	?>
																	<a href="assets/uploadimage/salesworkorder/<?php echo $customer_order_email_po_copy; ?>" download >  Download</a>

																</p>
																<?php
																}
																?>

																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->



													</div>




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
																			if($open=="1")
																			{
																				$checked="checked";
																			}
																			else
																			{
																				$checked="";
																			}
																		?>
																		<input class="form-check-input is_fixed_process" {{$checked}} txt_name="other_charges" type="checkbox" value="1" id="open" name="open" />&nbsp;&nbsp;<label class="fs-6 fw-bold form-label mt-3"><span>Open</span></label>
																	</div>
																</div>
															</div>
															<!--end::Input group-->
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
																	<span>Dispatch & Invoice Instructions</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Dispatch & Invoice Instructions."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<textarea   class="form-control form-control-solid" name="dispatch_invoice_instructions" id="dispatch_invoice_instructions" ><?php echo $dispatch_invoice_instructions ?></textarea>
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
														<button type="reset" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3 cancel_btn">Cancel</button>
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


																<!--begin::Modals-->
								<!--begin::Modal - Customers - Add-->

								<div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form"  name="frm_create_master" onsubmit="return false;" id="frm_create_master">
												{{@csrf_field()}}

												<input type="hidden" name="edit_id" id="edit_id" class="form-control input-sm" autocomplete="off" value="">
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_add_customer_header">
													<!--begin::Modal title-->
													<h2 class="fw-bolder"><p style="display:inline" id="titleid">Add</p> Transporter</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Scroll-->
													<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">


														<!--begin::Input group-->
															<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-bold mb-2">Transpoter Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" autocomplete="off" class="form-control form-control-solid" placeholder="" name="transporter_name" id="transporter_name" />
															<!--end::Input-->
														    </div>
														<!--end::Input group-->

														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-bold mb-2">Transpoter Phone No.</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" autocomplete="off" class="form-control form-control-solid" placeholder="" name="transporter_phone_no" id="transporter_phone_no" />
															<!--end::Input-->
														    </div>
														<!--end::Input group-->


														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class=" fs-6 fw-bold mb-2">Transpoter Add.</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea autocomplete="off" class="form-control form-control-solid" placeholder="" name="trasporter_address" id="trasporter_address" ></textarea>
															<!--end::Input-->
														</div>
														<!--end::Input group-->


														 <!--begin::Input group-->
														 <div class="fv-row mb-7">
															<!--begin::Label-->
															<label class=" fs-6 fw-bold mb-2">Location</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="location" id="location" aria-label="Select a Location" data-control="select2" data-placeholder="Select a location..." data-dropdown-parent="#kt_modal_add_customer" class="form-select form-select-solid fw-bolder">
																<option value="">Select</option>
																<?php

                                                                    $tbl_transport_location = DB::select("select * from tbl_transport_location");

																	foreach($tbl_transport_location as $tbl_transport_location){
                                                                        $name=$tbl_transport_location->location_name;
																		$location_id=$tbl_transport_location->id;
																		echo "<option value='".$location_id."'>$name</option>";
																	}

																?>
															</select>
															<!--end::Input-->
														</div>
														<!--end::Input group-->





													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="button" id="master_create_btn" class="btn btn-primary" name="master_create_btn" onclick="transporter_submit()">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - Customers - Add-->

								<!--end::Modals-->


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


																<?php
																$company_name="";
																$print_for="";
																$item="";
																$inline_text="";
																$special_instruction="";
																$salesworkorder_labeling_id="0";

																//echo $id;

																$tbl_salesworkorder_labeling = DB::select("select * from tbl_salesworkorder_labeling where general_id=$id");
																//var_dump($tbl_customer_delivery_location);die;
																foreach($tbl_salesworkorder_labeling as $tbl_salesworkorder_labeling){

																	$salesworkorder_labeling_id=$tbl_salesworkorder_labeling->id;
																	$company_name=$tbl_salesworkorder_labeling->company_name;
																	$print_for=$tbl_salesworkorder_labeling->print_for;
																	$item=$tbl_salesworkorder_labeling->item;
																	$inline_text=$tbl_salesworkorder_labeling->inline_text;
																	$special_instruction=$tbl_salesworkorder_labeling->special_instruction;
																}
																?>
																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_labeling_details"  id="frm_labeling_details">
																	{{@csrf_field()}}

																	<input type="hidden" name="edit_id" id="edit_id" class="form-control input-sm" autocomplete="off" value="{{$salesworkorder_labeling_id}}">
																	<input type="hidden" name="general_id" id="general_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">


																	<!--begin::Row-->
																	<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Input group-->
																			<div class="fv-row mb-7">
																				<!--begin::Label-->
																				<label class="fs-6 fw-bold form-label mt-3">
																					<span >Comapny Name </span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the company name ."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="form-control form-control-solid" name="company_name" id="company_name" value="{{$company_name}}" />
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
																					<span>Print For</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select print for."></i>
																				</label>
																				<!--end::Label-->
																				<div class="w-100">
																					<div class="form-floating border rounded">
																						<!--begin::Select2-->
																						<select name="print_for" id="print_for" aria-label="Select a print for" data-control="select2" data-placeholder="Select a print for..."  class="form-select form-select-solid lh-1 py-3">
																						<option value="">Select</option>
																						<?php

																							$tbl_salesworkoreder_labeling_printfor = DB::select("select * from tbl_salesworkoreder_labeling_printfor");

																							foreach($tbl_salesworkoreder_labeling_printfor as $tbl_salesworkoreder_labeling_printfor){
																								$description=$tbl_salesworkoreder_labeling_printfor->description;
																								$salesworkoreder_labeling_printfor_id=$tbl_salesworkoreder_labeling_printfor->id;
																								$selected="";
																								if($print_for==$salesworkoreder_labeling_printfor_id)
																								{
																									$selected="selected='selected'";
																								}

																								echo "<option $selected value='".$salesworkoreder_labeling_printfor_id."'>$description</option>";
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
																					<span >Item </span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the item ."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="form-control form-control-solid" name="item" id="item" value="{{$item}}" />
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
																					<span >Inline Text </span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the inline text."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="form-control form-control-solid" name="inline_text" id="inline_text" value="{{$inline_text}}" />
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
																					<span>Special Instruction</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Special Instruction."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<textarea   class="form-control form-control-solid" name="special_instruction" id="special_instruction" ><?php echo $special_instruction ?></textarea>
																				<!--end::Input-->
																			</div>
																			<!--end::Input group-->
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Row-->

																	<!-- begin::Separator-->
																	<!-- <div class="separator mb-6"></div> -->
																	<!--end::Separator -->
																	<!--begin::Action buttons-->
																	<div class="d-flex justify-content-end">
																		<!--begin::Button-->
																		<button type="reset" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3 cancel_btn">Cancel</button>
																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="button" id="neft_submit_btn" name="neft_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="labeling_details_ajax_submit();">
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
		var frm_sales_work_order = $('#frm_sales_work_order');
		var frm_labeling_details = $('#frm_labeling_details');
		var frm_create_master = $('#frm_create_master');


		var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);

		i=new bootstrap.Modal(document.querySelector("#kt_modal_add_customer"));
				r=document.querySelector("#frm_create_master");
				t=r.querySelector("#master_create_btn");

		$(document).ready(function() {



			// $('#open_job_card').change(function()
			// {
			// 	alert("here");
			// });
			var other_charges="<?php echo $other_charges ?>";
			var po_qty_unit_diff_frm_so="<?php echo $po_qty_unit_diff_frm_so; ?>";

			if(po_qty_unit_diff_frm_so=="1")
			{
				$("#po_row").show();
			}
			else
			{
				$("#po_row").hide();
			}

			if(other_charges=="1")
			{
				$("#other_charges_div1").show();
				$("#other_charges_div2").show();
			}
			else
			{
				$("#other_charges_div1").hide();
				$("#other_charges_div2").hide();
			}





			$('#po_qty_unit_diff_frm_so').change(function()
			{
				if(this.checked)
				{
					$("#po_row").show();
				}
				else
				{
					$("#po_row").hide();
				}
			});

			$('#other_charges').change(function()
			{
				if(this.checked)
				{
					$("#other_charges_div1").show();
					$("#other_charges_div2").show();
				}
				else
				{
					$("#other_charges_div1").hide();
					$("#other_charges_div2").hide();
				}
			});

			var tab="<?php echo $tab; ?>";
			if(tab=="general")
			{
				document.getElementById('general_link').click();
			}
			else
			{
				document.getElementById('labeling_link').click();
			}


			var edit_id=$("#edit_id").val();
			var maxField = 1000; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var neft_wrapper = $('.neft_field_wrapper'); //Input field wrapper

			//var wrapper = $('.field_wrapper'); //Input field wrapper
			// <td><a href="javascript:void(0);" class="remove_button">Delete</a></td>


			//Once add button is clicked

			$(document).on('focus',".sales_order_date", function(){
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

			$(document).on('focus',".target_delivery_date", function(){
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


			$(document).on('focus',".po_date", function(){
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

				$("#sales_order_date").daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				});

				$("#target_delivery_date").daterangepicker({
					locale: {
								format: 'YYYY-MM-DD',
							},
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 2015,
					maxYear: 2025,
				});

				$("#po_date").daterangepicker({
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

				var sales_order_date="<?php echo $sales_order_date; ?>";
				var target_delivery_date="<?php echo $target_delivery_date; ?>";
				var po_date="<?php echo $po_date; ?>";

				if(sales_order_date=="")
				{
					$("#sales_order_date").daterangepicker({
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

					$("#sales_order_date").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						startDate: "<?php echo $sales_order_date; ?>",
					});
				}


				if(target_delivery_date=="")
				{
					$("#target_delivery_date").daterangepicker({
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
					$("#target_delivery_date").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						startDate: "<?php echo $target_delivery_date; ?>",
					});
				}

				if(po_date=="")
				{
					$("#po_date").daterangepicker({
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
					$("#po_date").daterangepicker({
							locale: {
										format: 'YYYY-MM-DD',
									},
							singleDatePicker: true,
							showDropdowns: true,
							minYear: 2015,
							maxYear: 2025,
						startDate: "<?php echo $po_date; ?>",
					});
				}



		}




		$("#kt_modal_add_customer_cancel").click(function()
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
						t.value?(r.reset(),i.hide()):"cancel"===t.dismiss&&Swal.fire({
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
				$("#kt_modal_add_customer_close").click(function()
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
						t.value?(r.reset(),i.hide()):"cancel"===t.dismiss&&Swal.fire({
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


				$('#kt_modal_add_customer').on('hidden.bs.modal', function ()
				{
					$(this).find('form').trigger('reset');
					$("#transporter_name-error").html('');
					$("#transporter_phone_no-error").html('');
					$('#location').val('').trigger('change');
				})




			$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

			$(".cancel_btn").click(function()
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
					t.value?(window.location.href = "{{ URL::to('salesworkorder') }}"):"cancel"===t.dismiss&&Swal.fire({
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



			frm_create_master.validate({
                    errorElement: 'span',
                    errorClass: 'help-block help-block-error',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
						transporter_name: {
                            required: true,
                        },
						transporter_phone_no: {
										required: true,
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


                    },
                    messages: {
                        transporter_name: {
                            required: "This field is required",
                            //remote: "This state already exists. Please try another state.",
                        },
						transporter_phone_no: {
                            required: "This field is required",
                            //remote: "This state already exists. Please try another state.",
                        },
                    }
                });


		frm_sales_work_order.validate({
                    errorElement: 'span',
                    errorClass: 'help-block help-block-error',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
						order_no: {
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
						order_name: {
										required: true
										//minlength: 10,
									},
						customer_name: {
							required: true
                        },
						delivery_location:{
							required: true,
                        }
						,
						unit_price:{
							required: true,
                        },
						// img:{
						// 	//required: true,
                        //     extension: "jpg|jpeg|png",
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









		function ajax_submit()
		{


				var ajax_url = "{{ URL::to('submitsalesworkorder') }}";
                $("#lns-error").hide();
                $('#lns-error').css('display', 'none');

                if (!frm_sales_work_order.valid()) {
                    //btncs.stop();
                    //$.unblockUI();
					//alert("here there");
                    return false;
                }


                var temp_form_data = new FormData();
                // temp_form_data.append('field_name', field_data);
                var form_data = frm_sales_work_order.serializeArray();
                $.each(form_data, function (key, input) {
                    temp_form_data.append(input.name, input.value);
                });


				if($('#img').prop('files') !=undefined){
							//alert("here");
							var file_data = $('#img').prop('files')[0];
							temp_form_data.append('img', file_data);
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
								//$("#company_id").val(data.company_id);
								//alert($("#company_id").val());
                                if (data.mode=='add'){

									$("#edit_id").val('');
									//$('#neft_link').removeAttr("disabled");
									//document.getElementById('neft_link').click();

									//alert("add");


									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//$("#general_id").val(data.general_id);
														window.location.href = "<?php echo url("/salesworkorderaddedit/"); ?>"+"/"+data.general_id+"/labeling";
														//document.getElementById('labeling_link').click();
														//$('#neft_link').trigger('click');
														//window.location.href = "{{ URL::to('company') }}";
													}
													);


								}
								else{
									//alert("edit");
									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//$("#general_id").val(data.general_id);
														window.location.href = "<?php echo url("/salesworkorderaddedit/"); ?>"+"/"+data.general_id+"/labeling";
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
														//$("#general_id").val(data.general_id);
														window.location.href = "<?php echo url("/salesworkorderaddedit/"); ?>"+"/"+data.general_id+"/labeling";
														//window.location.href = "{{ URL::to('company') }}";
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//$("#general_id").val(data.general_id);
														window.location.href = "<?php echo url("/salesworkorderaddedit/"); ?>"+"/"+data.general_id+"/labeling";
														//window.location.href = "{{ URL::to('company') }}";
													}
													);


								}
							}

                    }
                });
        }










function labeling_details_ajax_submit(event)
{


	if($("#general_id").val()=="0")
	{
		Swal.fire('You can not add Labeling details before adding general details', '', 'error');
		event.preventDefault();
		return false;
	}





	var ajax_url = "{{ URL::to('submitlabeling') }}";
	var new_inserted_comp_id=$("#general_id").val();
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
	var neft_form_data = frm_labeling_details.serializeArray();
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
											window.location.href = "<?php echo url("/salesworkorder"); ?>";
										}
										);


					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/salesworkorder"); ?>";
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
											window.location.href = "<?php echo url("/salesworkorder"); ?>";
										}
										);

					}
					else{

						swal.fire({ text: data.message}).then(function(){
											$("#edit_id").val('');
											window.location.href = "<?php echo url("/salesworkorder"); ?>";
										}
										);


					}
				}

		}
	});
}



function transporter_submit()
		{

				if (!frm_create_master.valid()) {
                    //btncs.stop();
                    //$.unblockUI();
					//alert("here there");
                    return false;
                }



				//var transporter_name=$('#transporter_name').val();
				//var transporter_phone_no=$('#transporter_phone_no').val();



				var neft_temp_form_data = new FormData();
				// temp_form_data.append('field_name', field_data);
				var neft_form_data = frm_create_master.serializeArray();
				$.each(neft_form_data, function (key, input) {
					//alert("here there");
					neft_temp_form_data.append(input.name, input.value);
				});

				var ajax_url = "{{ URL::to('submittransporter') }}";


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
						//alert(data.inserted_transporter_id);
						//alert($("#transporter_name").val());


						var newOption2 = new Option($("#transporter_name").val(),data.inserted_transporter_id);
						$('#transport_option').append(newOption2).trigger('change');

						$("#transporter_name").val('');
						$("#transporter_phone_no").val('');
						//window.location.href = "{{ URL::to('transport') }}";
						//location.reload();





						swal.fire({ text: "Record Inserted Successfully.", type:
													"Success"}).then(function(){
														r.reset(),i.hide()


														//$("#edit_id").val('');
														//datatablerefresh();
													}
													);

					}
				});



		}





		</script>
	</body>
	<!--end::Body-->
</html>
