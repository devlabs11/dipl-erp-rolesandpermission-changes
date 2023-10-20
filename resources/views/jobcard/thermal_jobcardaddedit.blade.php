<!DOCTYPE html>
<html lang="en">
	<head>
	@include('layout.inc_header')
	<?php
	$module_id="40.0";
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Job card</h1>
									<?php
									}
									else
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Job Card</h1>
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
													<!--begin:::Tabs-->
													<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8" >

														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4 active" id="general_link" data-bs-toggle="tab" href="#general_tab">General Details</a>
														</li>
														<!--end:::Tab item-->


														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" id="pre_press_link" data-bs-toggle="tab" href="#pre_press_tab">Pre-Press</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" id="press_link" data-bs-toggle="tab" href="#press_tab">Press</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" id="post_press_link" data-bs-toggle="tab" href="#post_press_tab">Post-Press</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" id="process_selection_link" data-bs-toggle="tab" href="#process_selection_tab">Process-Selection</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" id="material_requirement_link" data-bs-toggle="tab" href="#material_requirement_tab">Material Requirement</a>
														</li>
														<!--end:::Tab item-->

													</ul>
													<!--end:::Tabs-->

													<!--begin:::Tab content-->
													<div class="tab-content" id="myTabContent">
														<!--begin:::Tab pane-->
														<div class="tab-pane fade show active" id="general_tab" role="tabpanel">

															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">


																<!--begin::Card body-->
																<div id="kt_customer_view_payment_method" class="card-body pt-0">

																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_user"  id="frm_user">
																	{{@csrf_field()}}


																	<?php
																		$id=0;
																		$job_product_category="";
																		$job_product_type="";
																		$job_card_no="";
																		$job_card_title="";
																		$company_product_no="";
																		$product_name_by_customer="";
																		$width="";
																		$height="";
																		$width_unit="";
																		$height_unit="";
																		$part_ply="1";
																		$item_type="";
																		$special_instructions="";
																		$perforation="";
																		$job_card_position_count=0;
																		$job_card_paper_count=0;

																		if(is_array($tbl_jobcard))
																		{
																			foreach($tbl_jobcard as $tbl_jobcard)
																			{
																				$id=$tbl_jobcard->id;
																				$job_product_category=$tbl_jobcard->product_category;
																				$job_product_type=$tbl_jobcard->product_type;
																				$job_card_no=$tbl_jobcard->job_card_no;
																				$job_card_title=$tbl_jobcard->job_card_title;
																				$company_product_no=$tbl_jobcard->company_product_no;
																				$product_name_by_customer=$tbl_jobcard->product_name_by_customer;
																				$width=$tbl_jobcard->width;
																				$height=$tbl_jobcard->height;
																				$width_unit=$tbl_jobcard->width_unit;
																				$height_unit=$tbl_jobcard->height_unit;
																				$part_ply=$tbl_jobcard->part_ply;

																				//echo $part_ply;die;
																				$item_type=$tbl_jobcard->item_type;
																				$special_instructions=$tbl_jobcard->special_instructions;
																				$perforation=$tbl_jobcard->perforation;

																				//echo $perforation;die;

																				/*$tbl_rm_category = DB::select("select * from tbl_rm_category where id='".$rm_category."'");
																				//var_dump($tbl_rm_category);die;


																				foreach($tbl_rm_category as $tbl_rm_category){
																					$rm_category_name_check=$tbl_rm_category->name;

																					//echo $rm_category_name;die;
																				}*/


																			}

																		}
                                                                        $tbl_job_card_paper_count_ply = DB::table('tbl_job_card_paper')->where('job_card_id',$id)->count();
                                                                    if(($part_ply != $tbl_job_card_paper_count_ply)){
                                                                        $part_ply = $tbl_job_card_paper_count_ply;
                                                                        if($part_ply == 0){
                                                                            $part_ply = 1;
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
																					<span class="required">Product Category</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Product Category."></i>
																				</label>
																				<!--end::Label-->
																				<div class="w-100">
																					<div class="form-floating border rounded">
																						<!--begin::Select2-->
																						<select name="product_category" id="product_category" aria-label="Select Product Category" data-control="select2" data-placeholder="Select Product Category..."  class="form-select form-select-solid lh-1 py-3">
																						<option value="">Select</option>
																						<?php

																							$tbl_product_category = DB::select("select * from tbl_product_category where job_card_type_id = 1");

																							foreach($tbl_product_category as $tbl_product_category){
																								$product_category=$tbl_product_category->product_category;
																								$product_id=$tbl_product_category->id;
																								$selected="";
																								if($job_product_category==$product_id)
																								{
																									$selected="selected='selected'";
																								}



																								echo "<option $selected value='".$product_id."'>$product_category</option>";
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
																					<span>Product Type</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Product Category."></i>
																				</label>
																				<!--end::Label-->
																				<div class="w-100">
																					<div class="form-floating border rounded">
																						<!--begin::Select2-->
																						<select name="product_type" id="product_type" aria-label="Select Product Type" data-control="select2" data-placeholder="Select Product Type..."  class="form-select form-select-solid lh-1 py-3">
																						<option value="">Select</option>
																						<?php

																							$tbl_product = DB::select("select * from tbl_product");

																							foreach($tbl_product as $tbl_product){
																								$product_type=$tbl_product->product_type;
																								$product_id=$tbl_product->id;
																								$selected="";
																								if($job_product_type==$product_id)
																								{
																									$selected="selected='selected'";
																								}



																								echo "<option $selected value='".$product_id."'>$product_type</option>";
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
																					<span class="required">Job Card No</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the job card no."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="form-control form-control-solid" name="job_card_no" id="job_card_no" value="<?php echo $job_card_no; ?>" />

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
																					<span class="required">Job Card Title</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the job card title."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="form-control form-control-solid" name="job_card_title" id="job_card_title" value="<?php echo $job_card_title; ?>" />

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
																					<span>Company's Product No</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the company's product no."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="form-control form-control-solid" name="company_product_no" id="company_product_no" value="<?php echo $company_product_no; ?>" />

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
																					<span class="">Product Name By Customer</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the product name by customer."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" class="form-control form-control-solid" name="product_name_by_customer" id="product_name_by_customer" value="<?php echo $product_name_by_customer; ?>" />

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

																	<h2>Size</h2>
																	<!--begin::Row-->
																	<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Input group-->
																			<div class="fv-row mb-7">
																				<!--begin::Label-->
																				<label class="fs-6 fw-bold form-label mt-3">
																					<span>Width</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text"  class="form-control form-control-solid" name="width" id="width" value="<?php echo $width; ?>" />
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
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																						    <select name="width_unit" id="width_unit" aria-label="Select unit" data-control="select2" data-placeholder="Select unit..."  class="form-select form-select-solid lh-1 py-3">
																								<option value="">Select</option>
																								<?php

																									$mst_unit = DB::select("select * from mst_unit");

																									foreach($mst_unit as $mst_unit){
																										$unit_description=$mst_unit->description;
																										$unit_id=$mst_unit->id;
																										$selected="";
																										if($width_unit==$unit_id)
																										{
																											$selected="selected='selected'";
																										}

																										echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
																					<span >height / length</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text"  class="form-control form-control-solid" name="height" id="height" value="<?php echo $height; ?>" />
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
																						<span>height / length Unit</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->
																							<select name="height_unit" id="height_unit" aria-label="Select unit" data-control="select2" data-placeholder="Select unit..."  class="form-select form-select-solid lh-1 py-3">
																								<option value="">Select</option>
																								<?php

																									$mst_unit = DB::select("select * from mst_unit");

																									foreach($mst_unit as $mst_unit){
																										$unit_description=$mst_unit->description;
																										$unit_id=$mst_unit->id;
																										$selected="";
																										if($height_unit==$unit_id)
																										{
																											$selected="selected='selected'";
																										}

																										echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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



																	<!--begin::Row-->
																	<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Input group-->
																			<div class="fv-row mb-7">
																				<!--begin::Label-->
																				<label class="fs-6 fw-bold form-label mt-3">
																					<span>Part / Ply</span>
																					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the part / ply."></i>
																				</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input type="text" readonly  class="form-control form-control-solid" name="part_ply" id="part_ply" value="<?php echo $part_ply; ?>" />
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
																						<span>Item Type</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																					</label>
																					<!--end::Label-->
																					<div class="w-100">
																						<div class="form-floating border rounded">
																							<!--begin::Select2-->

																							<select name="item_type" id="item_type" aria-label="Select item type" data-control="select2" data-placeholder="Select item type..."  class="form-select form-select-solid lh-1 py-3">
																								<option value="">Select</option>
																								<?php

																									$tbl_item_type = DB::select("select * from tbl_item_type");

																									foreach($tbl_item_type as $tbl_item_type){
																										$item_type_description=$tbl_item_type->description;
																										$item_type_id=$tbl_item_type->id;
																										$selected="";
																										if($item_type==$item_type_id)
																										{
																											$selected="selected='selected'";
																										}

																										echo "<option $selected value='".$item_type_id."'>$item_type_description</option>";
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


																	<div style="text-align:right;margin-bottom:15px">
																		<a href="javascript:void(0);" class="add_paper" title="Add Paper">Add</a>
																	</div>

																	<?php
																	if($id=="0")
																	{
																	?>
																		<div class="paper_wrapper" style="padding-top:30px">
																			<div class="paper">

																				<!--begin::Row-->
																				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">



																					<!--begin::Col-->
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="fs-6 fw-bold form-label mt-3">
																								<span>Paper Thick (GSM)</span>
																								<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper thick."></i>
																							</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="hidden" name="paper[paper_id][1]" value="0">
																							<input type="text" class="form-control form-control-solid" name="paper[paper_thick][1]" id="paper[paper_thick][1]" value="">
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->
																					</div>
																					<!--end::Col-->


																					       <!--begin::Col-->
																						   <div class="col"
                                                                                    style="width:30% !important;">
                                                                                    <!--begin::Input group-->
                                                                                    <div class="fv-row mb-7">
                                                                                        <!--begin::Label-->
                                                                                        <label
                                                                                            class="fs-6 fw-bold form-label mt-3">
                                                                                            <span>Width</span>
                                                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                data-bs-toggle="tooltip"
                                                                                                title="Enter the Width."></i>
                                                                                        </label>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input-->
                                                                                        <input type="hidden"
                                                                                            name="paper[paper_width][1]"
                                                                                            value="0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-solid"
                                                                                            name="paper[paper_width][1]"
                                                                                            id="paper[paper_width][1]"
                                                                                            value="">
                                                                                        <!--end::Input-->
                                                                                    </div>
                                                                                    <!--end::Input group-->
                                                                                </div>
                                                                                <!--end::Col-->



                                                                                <!--begin::Col-->
                                                                                <div class="col"
                                                                                    style="width:30% !important;">
                                                                                    <!--begin::Input group-->
                                                                                    <div class="fv-row mb-7">
                                                                                        <!--begin::Label-->
                                                                                        <label
                                                                                            class="fs-6 fw-bold form-label mt-3">
                                                                                            <span>Unit</span>
                                                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                data-bs-toggle="tooltip"
                                                                                                title="Select paper make."></i>
                                                                                        </label>
                                                                                        <!--end::Label-->
                                                                                        <div class="w-100">
                                                                                            <div
                                                                                                class="form-floating border rounded">
                                                                                                <!--begin::Select2-->
                                                                                                <select
                                                                                                    name="paper[unit][1]"
                                                                                                    id="paper[unit][1]"
                                                                                                    aria-label="Select paper make"
                                                                                                    data-control="select2"
                                                                                                    data-placeholder="Select paper make..."
                                                                                                    class="form-select form-select-solid lh-1 py-3">
                                                                                                    <option
                                                                                                        value="">
                                                                                                        Select</option>
                                                                                                    <?php

                                                                                                    $mst_unit = DB::select('select * from mst_unit');

                                                                                                    foreach ($mst_unit as $mst_unit) {
                                                                                                        $mst_unit_description = $mst_unit->description;
                                                                                                        $mst_unit_id = $mst_unit->id;
                                                                                                        $selected = '';
                                                                                                        // if($perforation==$perforation_id)
                                                                                                        // {
                                                                                                        // 	$selected="selected='selected'";
                                                                                                        // }

                                                                                                        echo "<option $selected value='" . $mst_unit_id . "'>$mst_unit_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Paper Make</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select paper make."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[paper_make][1]" id="paper[paper_make][1]" aria-label="Select paper make" data-control="select2" data-placeholder="Select paper make..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_paper_make = DB::select("select * from mst_paper_make");

																												foreach($mst_paper_make as $mst_paper_make){
																													$paper_make_description=$mst_paper_make->description;
																													$paper_make_id=$mst_paper_make->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$paper_make_id."'>$paper_make_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Color Shade</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Color Shade."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[color_shade][1]" id="paper[color_shade][1]" aria-label="Select color shade" data-control="select2" data-placeholder="Select color shade..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_paper_color_shade = DB::select("select * from mst_paper_color_shade");

																												foreach($mst_paper_color_shade as $mst_paper_color_shade){
																													$paper_color_shade_description=$mst_paper_color_shade->description;
																													$paper_color_shade_id=$mst_paper_color_shade->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$paper_color_shade_id."'>$paper_color_shade_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Coating Side Color</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Coating Side Color."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select  multiple name="paper[front_side_color][1][]" id="paper[front_side_color][1]" aria-label="Select Coating Side Color" data-control="select2" data-placeholder="Select Coating Side Color..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_color_master = DB::select("select * from mst_color_master");

																												foreach($mst_color_master as $mst_color_master){
																													$front_side_color_description=$mst_color_master->description;
																													$front_side_color_id=$mst_color_master->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$front_side_color_id."'>$front_side_color_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Non Coating Side Color</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Non Coating Side Color."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select multiple name="paper[back_side_color][1][]" id="paper[back_side_color][1]" aria-label="Select Non Coating Side Color" data-control="select2" data-placeholder="Select Non Coating Side Color..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_color_master = DB::select("select * from mst_color_master");

																												foreach($mst_color_master as $mst_color_master){
																													$back_side_color_description=$mst_color_master->description;
																													$back_side_color_id=$mst_color_master->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$back_side_color_id."'>$back_side_color_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Coating Side</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Coating Side."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[front_side_coating][1]" id="paper[front_side_coating][1]" aria-label="Select Coating Side" data-control="select2" data-placeholder="Select Coating Side..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$tbl_fron_side_color_coating = DB::select("select * from tbl_coating_thermal");

																												foreach($tbl_fron_side_color_coating as $tbl_fron_side_color_coating){
																													$front_side_color_coating_description=$tbl_fron_side_color_coating->description;
																													$front_side_color_coating_id=$tbl_fron_side_color_coating->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$front_side_color_coating_id."'>$front_side_color_coating_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Non Coating Side</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Non Coating Side."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[back_side_coating][1]" id="paper[back_side_coating][1]" aria-label="Select Non Coating Side" data-control="select2" data-placeholder="Select Non Coating Side..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$tbl_back_side_color_coating = DB::select("select * from tbl_coating_thermal");

																												foreach($tbl_back_side_color_coating as $tbl_back_side_color_coating){
																													$back_side_color_coating_description=$tbl_back_side_color_coating->description;
																													$back_side_color_coating_id=$tbl_back_side_color_coating->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$back_side_color_coating_id."'>$back_side_color_coating_description</option>";
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
																					<!-- copy mark div -->
																					<!--end::Col-->

																					<!--begin::Col-->
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="fs-6 fw-bold form-label mt-3">
																								<span>Remark</span>
																								<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the remark."></i>
																							</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" class="form-control form-control-solid" name="paper[remark][1]" id="paper[remark][1]" value="">
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->
																					</div>
																					<!--end::Col-->



																				</div>
																				<!--end::Row-->

																			</div>
																		</div>
																	<?php
																	}
																	else
																	{
																		?>
																		<table id='paper_data_tbl' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border:1px solid;padding-left:15px;'>
																			<tr>
																				<th>ID</th>
																				
																				<th>Paper Thick</th>
																				<th>Paper Size</th>
																				<th>Paper Make</th>
																				<th>Color Shade</th>
																				<th>Coating Color</th>
																				<th>Non Coating Color</th>
																				<th>Coating Side</th>
																				<th>Non Coating Side</th>
																				<!-- <th>Copy Mark</th> -->
																				<th>Remark</th>
																				<th>Edit</th>
																				<th style='padding-right:10px'>Delete</th>
																			</tr>

																			<?php
																			$job_card_paper_count=0;
																			$tbl_job_card_paper_count = DB::select("select count(*) as totalcount from tbl_job_card_paper where job_card_id='".$id."'");
																			foreach($tbl_job_card_paper_count as $tbl_job_card_paper_count)
																			{
																				//var_dump($tbl_plants_count);die;
																				$job_card_paper_count=$tbl_job_card_paper_count->totalcount;
																			}

																			if($job_card_paper_count==0)
																			{
																			?>
																			<tr>
																				<td colspan="12" style="text-align:center">No data available</td>
																			</tr>
																			<?php
																			}
																			else
																			{

																				$tbl_job_card_paper = DB::select("select * from tbl_job_card_paper where job_card_id='".$id."'");

																				//$k=0;
																				foreach($tbl_job_card_paper as $tbl_job_card_paper)
																				{
																					//$k++;
																					//$neft_count++;
																					$paper_id=$tbl_job_card_paper->id;
																					$paper_thick=$tbl_job_card_paper->paper_thick;
																					$paper_make=$tbl_job_card_paper->paper_make;
																					$paper_width=$tbl_job_card_paper->width;
                                                                                    $paper_unit=$tbl_job_card_paper->unit;
                                                                                    if($paper_unit){
                                                                                        $mst_unit = DB::table('mst_unit')->where('id',$paper_unit)->first();
                                                                                        $paper_unit_name = $mst_unit->description ?? '';
                                                                                    }else{
                                                                                        $paper_unit_name = '';
                                                                                    }

																					$mst_paper_make   = DB::select("select * from mst_paper_make where id='".$paper_make."'");

																					$paper_make_name="";
																					foreach($mst_paper_make as $mst_paper_make)
																					{
																						$paper_make_name=$mst_paper_make->description;
																					}

																					$color_shade=$tbl_job_card_paper->color_shade;

																					$mst_paper_color_shade   = DB::select("select * from mst_paper_color_shade where id='".$color_shade."'");

																					$mst_color_shade_name="";
																					foreach($mst_paper_color_shade as $mst_paper_color_shade)
																					{
																						$mst_color_shade_name=$mst_paper_color_shade->description;
																					}


																					$front_side_color=$tbl_job_card_paper->front_side_color;
																					$front_side_color_arr = explode(",",$front_side_color);

																					//var_dump($front_side_color_arr);die;

																					//echo sizeof($front_side_color_arr);die;
																					$front_side_color_name="";
																					if(sizeof($front_side_color_arr)>0)
																					{
																						foreach ($front_side_color_arr as $key => $title) {


																							$mst_color_master   = DB::select("select * from mst_color_master where id='".$title."'");

																							//$front_side_color_name="";
																							foreach($mst_color_master as $mst_color_master)
																							{
																								$front_side_color_name.=$mst_color_master->description." ";
																							}
																						 }

																					}




																					$back_side_color=$tbl_job_card_paper->back_side_color;
																					$back_side_color_arr = explode(",",$back_side_color);
																					//var_dump($back_side_color_arr);die;

																					$back_side_color_name="";
																					if(sizeof($back_side_color_arr)>0)
																					{
																						foreach ($back_side_color_arr as $key => $title) {

																							//echo $title;
																							$mst_color_master = DB::select("select * from mst_color_master where id='".$title."'");

																							//$front_side_color_name="";
																							foreach($mst_color_master as $mst_color_master)
																							{
																								$back_side_color_name.=$mst_color_master->description." ";

																								//echo $back_side_color_name;
																							}
																						 }


																					}






																					$front_side_coating=$tbl_job_card_paper->front_side_coating;


																					$tbl_fron_side_color_coating   = DB::select("select * from tbl_coating_thermal where id='".$front_side_coating."'");

																					$front_side_coating_name="";
																					foreach($tbl_fron_side_color_coating as $tbl_fron_side_color_coating)
																					{
																						$front_side_coating_name=$tbl_fron_side_color_coating->description;
																					}


																					$back_side_coating=$tbl_job_card_paper->back_side_coating;

																					$tbl_back_side_color_coating   = DB::select("select * from tbl_coating_thermal where id='".$back_side_coating."'");

																					$back_side_coating_name="";
																					foreach($tbl_back_side_color_coating as $tbl_back_side_color_coating)
																					{
																						$back_side_coating_name=$tbl_back_side_color_coating->description;
																					}

																					$copy_mark=$tbl_job_card_paper->copy_mark;
																					$remark=$tbl_job_card_paper->remark;
																					?>
																					<tr>
																					<td><?php echo $paper_id; ?></td>
																					<td><?php echo $paper_thick; ?></td>
																					<td>{{$paper_width}} {{$paper_unit_name}}</td>
																					<td><?php echo $paper_make_name; ?></td>
																					<td><?php echo $mst_color_shade_name; ?></td>
																					<td><?php echo $front_side_color_name; ?></td>
																					<td><?php echo $back_side_color_name; ?></td>
																					<td><?php echo $front_side_coating_name; ?></td>
																					<td><?php echo $back_side_coating_name; ?></td>
																					<!-- <td><?php echo $copy_mark; ?></td> -->
																					<td><?php echo $remark; ?></td>
																					<td><a href=""><a href="javascript:void(0);" class="edit_paper" edit-id="<?php echo $paper_id; ?>">Edit</a></a></td>
																					<td><a href="javascript:void(0);" class="remove_paper" delete-id="<?php echo $paper_id; ?>">Delete</a></td>
																					</tr>
																					<?php
																				}

																			}


																			?>


																		</table>
																		<?php
																		$tbl_job_card_paper_count = DB::select("select count(*) as totalcount from tbl_job_card_paper where job_card_id='".$id."'");
																		foreach($tbl_job_card_paper_count as $tbl_job_card_paper_count)
																		{
																			//var_dump($tbl_plants_count);die;
																			$tbl_job_card_paper_count=$tbl_job_card_paper_count->totalcount;
																		}

																		//echo $tbl_job_card_paper_count;die;
																		?>

																			<div class="paper_wrapper" style="padding-top:30px">
																			<div class="paper">

																				<!--begin::Row-->
																				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">



																					<!--begin::Col-->
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="fs-6 fw-bold form-label mt-3">
																								<span>Paper Thick (GSM)</span>
																								<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper thick."></i>
																							</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="hidden" name="paper[paper_id][1]" value="0">
																							<input type="text" class="form-control form-control-solid" name="paper[paper_thick][1]" id="paper_thick" value="">
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->
																					</div>
																					<!--end::Col-->


																					 <!--begin::Col-->
																					 <div class="col"
                                                                                    style="width:30% !important;">
                                                                                    <!--begin::Input group-->
                                                                                    <div class="fv-row mb-7">
                                                                                        <!--begin::Label-->
                                                                                        <label
                                                                                            class="fs-6 fw-bold form-label mt-3">
                                                                                            <span>Width</span>
                                                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                data-bs-toggle="tooltip"
                                                                                                title="Enter the paper thick."></i>
                                                                                        </label>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input-->
                                                                                        <input type="hidden"
                                                                                            name="paper[paper_id][1]"
                                                                                            value="0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-solid"
                                                                                            name="paper[paper_width][1]"
                                                                                            id="paper_width"
                                                                                            value="">
                                                                                        <!--end::Input-->
                                                                                    </div>
                                                                                    <!--end::Input group-->
                                                                                </div>
                                                                                <!--end::Col-->


                                                                                <!--begin::Col-->
                                                                                <div class="col"
                                                                                    style="width:30% !important;">
                                                                                    <!--begin::Input group-->
                                                                                    <div class="fv-row mb-7">
                                                                                        <!--begin::Label-->
                                                                                        <label
                                                                                            class="fs-6 fw-bold form-label mt-3">
                                                                                            <span>Paper Make</span>
                                                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                data-bs-toggle="tooltip"
                                                                                                title="Select paper make."></i>
                                                                                        </label>
                                                                                        <!--end::Label-->
                                                                                        <div class="w-100">
                                                                                            <div
                                                                                                class="form-floating border rounded">
                                                                                                <!--begin::Select2-->
                                                                                                <select
                                                                                                    name="paper[unit][1]"
                                                                                                    id="unit"
                                                                                                    aria-label="Select paper make"
                                                                                                    data-control="select2"
                                                                                                    data-placeholder="Select paper make..."
                                                                                                    class="form-select form-select-solid lh-1 py-3">
                                                                                                    <option
                                                                                                        value="">
                                                                                                        Select</option>
                                                                                                    <?php

                                                                                                    $mst_unit = DB::select('select * from mst_unit');

                                                                                                    foreach ($mst_unit as $mst_unit) {
                                                                                                        $mst_unit_description = $mst_unit->description;
                                                                                                        $mst_unit_id = $mst_unit->id;
                                                                                                        $selected = '';
                                                                                                        // if($perforation==$perforation_id)
                                                                                                        // {
                                                                                                        // 	$selected="selected='selected'";
                                                                                                        // }

                                                                                                        echo "<option $selected value='" . $mst_unit_id . "'>$mst_unit_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Paper Make</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select paper make."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[paper_make][1]" id="paper_make" aria-label="Select paper make" data-control="select2" data-placeholder="Select paper make..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_paper_make = DB::select("select * from mst_paper_make");

																												foreach($mst_paper_make as $mst_paper_make){
																													$paper_make_description=$mst_paper_make->description;
																													$paper_make_id=$mst_paper_make->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$paper_make_id."'>$paper_make_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Color Shade</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Color Shade."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[color_shade][1]" id="color_shade" aria-label="Select color shade" data-control="select2" data-placeholder="Select color shade..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_paper_color_shade = DB::select("select * from mst_paper_color_shade");

																												foreach($mst_paper_color_shade as $mst_paper_color_shade){
																													$paper_color_shade_description=$mst_paper_color_shade->description;
																													$paper_color_shade_id=$mst_paper_color_shade->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$paper_color_shade_id."'>$paper_color_shade_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Coating Side Color</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select front side color."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select multiple name="paper[front_side_color][1][]" id="front_side_color" aria-label="Select front side color" data-control="select2" data-placeholder="Select front side color..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_color_master = DB::select("select * from mst_color_master");

																												foreach($mst_color_master as $mst_color_master){
																													$front_side_color_description=$mst_color_master->description;
																													$front_side_color_id=$mst_color_master->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$front_side_color_id."'>$front_side_color_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Non Coating Side Color</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Non Coating Side Color."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select multiple name="paper[back_side_color][1][]" id="back_side_color" aria-label="Select Non Coating Side Color" data-control="select2" data-placeholder="Select Non Coating Side Color..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_color_master = DB::select("select * from mst_color_master");

																												foreach($mst_color_master as $mst_color_master){
																													$back_side_color_description=$mst_color_master->description;
																													$back_side_color_id=$mst_color_master->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$back_side_color_id."'>$back_side_color_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Coating Side</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Coating Side."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[front_side_coating][1]" id="front_side_coating" aria-label="Select Coating Side" data-control="select2" data-placeholder="Select Coating Side..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$tbl_fron_side_color_coating = DB::select("select * from tbl_coating_thermal");

																												foreach($tbl_fron_side_color_coating as $tbl_fron_side_color_coating){
																													$front_side_color_coating_description=$tbl_fron_side_color_coating->description;
																													$front_side_color_coating_id=$tbl_fron_side_color_coating->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$front_side_color_coating_id."'>$front_side_color_coating_description</option>";
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
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Non Coating Side</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Non Coating Side."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="paper[back_side_coating][1]" id="back_side_coating" aria-label="Select Non Coating Side" data-control="select2" data-placeholder="Select Non Coating Side..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$tbl_back_side_color_coating = DB::select("select * from tbl_coating_thermal");

																												foreach($tbl_back_side_color_coating as $tbl_back_side_color_coating){
																													$back_side_color_coating_description=$tbl_back_side_color_coating->description;
																													$back_side_color_coating_id=$tbl_back_side_color_coating->id;
																													$selected="";
																													// if($perforation==$perforation_id)
																													// {
																													// 	$selected="selected='selected'";
																													// }

																													echo "<option $selected value='".$back_side_color_coating_id."'>$back_side_color_coating_description</option>";
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
																						<!-- copy mark div -->
																					<!--end::Col-->

																					<!--begin::Col-->
																					<div class="col" style="width:30% !important;">
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="fs-6 fw-bold form-label mt-3">
																								<span>Remark</span>
																								<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the remark."></i>
																							</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" class="form-control form-control-solid" name="paper[remark][1]" id="remark" value="">
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->
																					</div>
																					<!--end::Col-->



																				</div>
																				<!--end::Row-->

																			</div>
																		</div>

																		<?php

																		?>
																		<?php
																	}
																	?>



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
																			<span>Special Instructions</span>
																			<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the part / ply."></i>
																		</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<textarea style="text-transform: uppercase"   class="form-control form-control-solid" name="special_instructions" id="special_instructions" value="1"><?php echo $special_instructions ?></textarea>
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
																				<span>Perforation</span>
																				<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select perforation."></i>
																			</label>
																			<!--end::Label-->
																			<div class="w-100">
																				<div class="form-floating border rounded">
																					<!--begin::Select2-->
																					<select name="perforation" id="perforation" aria-label="Select perforation" data-control="select2" data-placeholder="Select perforation..."  class="form-select form-select-solid lh-1 py-3">
																						<option value="">Select</option>
																						<?php

																							$tbl_perforation = DB::select("select * from tbl_perforation");

																							foreach($tbl_perforation as $tbl_perforation){
																								$perforation_description=$tbl_perforation->description;
																								$perforation_id=$tbl_perforation->id;
																								$selected="";
																								if($perforation==$perforation_id)
																								{
																									$selected="selected='selected'";
																								}

																								echo "<option $selected value='".$perforation_id."'>$perforation_description</option>";
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





<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
<?php
if($id=="0")
{
?>
	<table id='widthtable' class='position_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
		<!-- <div class=""> -->
		<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
		<div class="row"> -->
			<tr>
				<th>
					Position
				</th>
				<th>
					Direction
				</th>
				<th>
					<div style="text-align:right"><a href="javascript:void(0);" class="add_position" title="Add Position">Add</a></div>
				</th>
			</tr>
			<tr>
				<td>
					<input class="form-control form-control-solid required_validation" type="hidden" name="position[position_id][1]" value="0"/>
					<input class="form-control form-control-solid required_validation" type="text" name="position[position_name][1]" value=""/>
				</td>
				<td>
					<select name="position[direction][1]" id="position[direction][1]" aria-label="Select Direction" data-control="select2" data-placeholder="Select Direction..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-direction" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_direction = DB::select("select * from tbl_direction");

							foreach($tbl_direction as $tbl_direction){
								$direction_description=$tbl_direction->description;
								$direction_id=$tbl_direction->id;
								$selected="";
								echo "<option $selected value='".$direction_id."'>$direction_description</option>";
							}
						?>
					</select>
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
<table id='widthtable' class='position_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
	<tr>
				<th>
					Position
				</th>
				<th>
					Direction
				</th>
				<th>
				<div style="text-align:right"><a href="javascript:void(0);" class="add_position" title="Add Position">Add</a></div>
				</th>
			</tr>
	<?php
	//echo $id;die;
	$tbl_job_card_position_count = DB::select("select count(*) as totalcount from tbl_job_card_position where job_card_id='".$id."'");
	//var_dump($tbl_plants_count);die;
	foreach($tbl_job_card_position_count as $tbl_job_card_position_count)
	{
		//var_dump($tbl_plants_count);die;
		$job_card_position_count=$tbl_job_card_position_count->totalcount;
	}
	$tbl_job_card_position = DB::select("select * from tbl_job_card_position where job_card_id='".$id."'");

	$position_j=0;
	foreach($tbl_job_card_position as $tbl_job_card_position)
	{
		$position_j++;
		//$pre_press_product_count++;
		$job_card_id=$tbl_job_card_position->job_card_id;
		$position_id=$tbl_job_card_position->id;
		$position_name=$tbl_job_card_position->position;
		$direction=$tbl_job_card_position->direction;


?>

			<tr>
				<td>
					<input class="form-control form-control-solid required_validation" type="hidden" name="position[position_id][<?php echo $position_j; ?>]" value="<?php echo $position_id; ?>"/>
					<input class="form-control form-control-solid required_validation" type="text" name="position[position_name][<?php echo $position_j; ?>]" value="<?php echo $position_name; ?>"/>

				</td>
				<td>
				<select name="position[direction][<?php echo $position_j; ?>]" id="position[direction][<?php echo $position_j; ?>]" aria-label="Select Direction" data-control="select2" data-placeholder="Select Direction..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-basicmachine" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_direction = DB::select("select * from tbl_direction");

							foreach($tbl_direction as $tbl_direction){
								$direction_description=$tbl_direction->description;
								$direction_id=$tbl_direction->id;
								$selected="";
								if($direction==$direction_id)
								{
									$selected="selected='selected'";
								}



								echo "<option $selected value='".$direction_id."'>$direction_description</option>";
							}
						?>
					</select>
				</td>


				<td>
					<?php
					if($position_j==1)
					{

					}
					else
					{
					?>
						<a href="javascript:void(0);" class="remove_position" delete-id="<?php echo $position_id; ?>">Delete</a>
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
																		<button type="button" id="submit_btn" name="submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="ajax_submit();">
																			<span class="indicator-label">Save</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="reset" id="cancel_btn"  data-kt-contacts-type="cancel" class="cancel_btn btn btn-light me-3">Exit</button>
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
														<div class="tab-pane fade" id="pre_press_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">
																<!--begin::Card body-->
																<div id="kt_customer_view_payment_method" class="card-body pt-0">


																	<form class="form" method="POST" enctype="multipart/form-data"  name="frm_pre_press"  id="frm_pre_press">
																		{{@csrf_field()}}
																		<?php
																			$columns="";
																			$rows="";
																			$length="";
																			$length_unit="";
																			$pre_press_width="";
																			$pre_press_width_unit="";
																			$thickness="";
																			$thickness_unit="";
																			$pree_press_width_unit="";



																			$pre_press_edit_id=0;
																			$pre_press_color_j=1;



																			$tbl_job_card_pre_press = DB::select("select * from tbl_job_card_pre_press where job_card_id=$id");
																			//var_dump($tbl_job_card_pre_press);
																			foreach($tbl_job_card_pre_press as $tbl_job_card_pre_press){

																				//var_dump($tbl_job_card_pre_press);
																				$columns=$tbl_job_card_pre_press->columns;
																				$pre_press_edit_id=$tbl_job_card_pre_press->id;

																				//echo $pre_press_edit_id;
																				$rows=$tbl_job_card_pre_press->rows;
																				$length=$tbl_job_card_pre_press->length;
																				$length_unit=$tbl_job_card_pre_press->length_unit;
																				$pre_press_width=$tbl_job_card_pre_press->width;
																				$pree_press_width_unit=$tbl_job_card_pre_press->width_unit;

																				//echo $pree_press_width_unit;
																				$thickness=$tbl_job_card_pre_press->thickness;
																				$thickness_unit=$tbl_job_card_pre_press->thickness_unit;

																			}
																		?>

																		<input type="hidden" name="pre_press_edit_id" id="pre_press_edit_id" class="form-control input-sm" autocomplete="off" value="{{$pre_press_edit_id}}">
																		<input type="hidden" name="pre_press_general_details_id" id="pre_press_general_details_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">
																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span class="required">Columns</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the columns."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="columns" id="columns" value="<?php echo $columns; ?>" />

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
																						<span class="required">Rows</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the rows."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" name="rows" id="rows" value="<?php echo $rows; ?>" />

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

																		<?php

																		//echo $pree_press_width_unit;
																		?>

																		<h2 class="required">Size Of Plates</h2>
																		<!--begin::Row-->
																		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																			<!--begin::Col-->
																			<div class="col">
																				<!--begin::Input group-->
																				<div class="fv-row mb-7">
																					<!--begin::Label-->
																					<label class="fs-6 fw-bold form-label mt-3">
																						<span>Length</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the length."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text"  class="form-control form-control-solid" name="length" id="length" value="<?php echo $length; ?>" />
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
																							<span>Length Unit</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																						</label>
																						<!--end::Label-->
																						<div class="w-100">
																							<div class="form-floating border rounded">
																								<!--begin::Select2-->
																								<select name="length_unit" id="length_unit" aria-label="Select unit" data-control="select2" data-placeholder="Select unit..."  class="form-select form-select-solid lh-1 py-3">
																									<option value="">Select</option>
																									<?php

																										$mst_unit = DB::select("select * from mst_unit");

																										foreach($mst_unit as $mst_unit){
																											$unit_description=$mst_unit->description;
																											$plate_length_unit=$mst_unit->id;
																											$selected="";
																											if($plate_length_unit==$length_unit)
																											{
																												$selected="selected='selected'";
																											}

																											echo "<option $selected value='".$plate_length_unit."'>$unit_description</option>";
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
																						<span >Width</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text"  class="form-control form-control-solid" name="pre_press_width" id="pre_press_width" value="<?php echo $pre_press_width; ?>" />
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
																							<span>Width Unit </span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																						</label>
																						<!--end::Label-->
																						<div class="w-100">
																							<div class="form-floating border rounded">
																								<!--begin::Select2-->


																								<select name="pre_press_width_unit" id="pre_press_width_unit" aria-label="Select unit" data-control="select2" data-placeholder="Select unit..."  class="form-select form-select-solid lh-1 py-3">
																									<option value="">Select</option>
																									<?php

																										$mst_unit = DB::select("select * from mst_unit");

																										foreach($mst_unit as $mst_unit){
																											$unit_description=$mst_unit->description;
																											$database_pre_press_width_unit=$mst_unit->id;
																											$selected="";
																											if($pree_press_width_unit==$database_pre_press_width_unit)
																											{
																												$selected="selected='selected'";
																											}

																											echo "<option $selected value='".$database_pre_press_width_unit."'>$unit_description</option>";
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
																						<span>Thickness</span>
																						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the thickness."></i>
																					</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text"  class="form-control form-control-solid" name="thickness" id="thickness" value="<?php echo $thickness; ?>" />
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
																							<span>Thickness Unit</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																						</label>
																						<!--end::Label-->
																						<div class="w-100">
																							<div class="form-floating border rounded">
																								<!--begin::Select2-->
																								<select name="thickness_unit" id="thickness_unit" aria-label="Select unit" data-control="select2" data-placeholder="Select unit..."  class="form-select form-select-solid lh-1 py-3">
																									<option value="">Select</option>
																									<?php

																										$mst_unit = DB::select("select * from mst_unit");

																										foreach($mst_unit as $mst_unit){
																											$unit_description=$mst_unit->description;
																											$database_thickness_unit=$mst_unit->id;
																											$selected="";
																											if($database_thickness_unit==$thickness_unit)
																											{
																												$selected="selected='selected'";
																											}

																											echo "<option $selected value='".$database_thickness_unit."'>$unit_description</option>";
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




																		<!--begin::Accordion-->
																		<div class="accordion" id="kt_accordion_3">

																			<div class="accordion-item">
																				<h2 class="accordion-header" id="kt_accordion_1_header_3">
																					<button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3" aria-expanded="false" aria-controls="kt_accordion_1_body_3">
																					Colour Details
																					</button>
																				</h2>
																				<div id="kt_accordion_1_body_3" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
																					<div class="accordion-body">
																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
<?php

//echo $id;
if($id=="0")
{
?>
	<table id='widthtable' class='color_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
		<!-- <div class=""> -->
		<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
		<div class="row"> -->
			<tr>
				<th>
					Color
				</th>
				<th>
					Film Type
				</th>
				<th>
					Ply
				</th>
				<th>
					Plate Type
				</th>
				<th>
					<div style="text-align:right"><a href="javascript:void(0);" class="add_color" title="Add Color">Add</a></div>
				</th>
			</tr>
			<tr>
				<td>
					<input class="form-control form-control-solid required_validation" type="hidden" name="color[color_id][1]" value="0"/>
					<select multiple name="color[color][1][]" id="color[color][1]" aria-label="Select color" data-control="select2" data-placeholder="Select color..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-color<?php echo $pre_press_color_j; ?>" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$mst_color_master = DB::select("select * from mst_color_master");

							foreach($mst_color_master as $mst_color_master){
								$color_description=$mst_color_master->description;
								$color_id=$mst_color_master->id;
								$selected="";
								echo "<option $selected value='".$color_id."'>$color_description</option>";
							}
						?>
					</select>
				</td>
				<td>
					<select name="color[film_type][1]" id="color[film_type][1]" aria-label="Select film type" data-control="select2" data-placeholder="Select film type..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-film_type" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_film_type = DB::select("select * from tbl_film_type");

							foreach($tbl_film_type as $tbl_film_type){
								$film_type_description=$tbl_film_type->description;
								$film_type_id=$tbl_film_type->id;
								$selected="";
								echo "<option $selected value='".$film_type_id."'>$film_type_description</option>";
							}
						?>
					</select>
				</td>
				<td>
					<input class="form-control form-control-solid required_validation" type="text" name="color[ply][1]" value=""/>
				</td>
				<td>
					<select name="color[plate_type][1]" id="color[plate_type][1]" aria-label="Select plate type" data-control="select2" data-placeholder="Select plate type..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-palte_type" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_plate_type = DB::select("select * from tbl_plate_type");

							foreach($tbl_plate_type as $tbl_plate_type){
								$plate_type_description=$tbl_plate_type->description;
								$plate_type_id=$tbl_plate_type->id;
								$selected="";
								echo "<option $selected value='".$plate_type_id."'>$plate_type_description</option>";
							}
						?>
					</select>
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
<table id='widthtable' class='color_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
	<tr>
				<th>
					Color
				</th>
				<th>
					Film type
				</th>
				<th>
					Ply
				</th>
				<th>
					Plate type
				</th>
				<th>
				<div style="text-align:right"><a href="javascript:void(0);" class="add_color" title="Add Color">Add</a></div>
				</th>
			</tr>
	<?php
	//echo $pre_press_edit_id;
	$tbl_job_card_pre_press_color_count = DB::select("select count(*) as totalcount from tbl_job_card_pre_press_color where pre_press_id='".$pre_press_edit_id."'");
	//var_dump($tbl_plants_count);die;
	foreach($tbl_job_card_pre_press_color_count as $tbl_job_card_pre_press_color_count)
	{
		//var_dump($tbl_job_card_pre_press_color_count);
		$job_card_pre_press_color_count=$tbl_job_card_pre_press_color_count->totalcount;
	}

	//echo $job_card_pre_press_color_count;

	if($job_card_pre_press_color_count==0)
	{
		?>
				<tr>
				<td>
					<input class="form-control form-control-solid required_validation" type="hidden" name="color[color_id][1]" value="0"/>
					<select multiple name="color[color][1][]" id="color[color][1]" aria-label="Select color" data-control="select2" data-placeholder="Select color..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-color<?php echo $pre_press_color_j; ?>" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$mst_color_master = DB::select("select * from mst_color_master");

							foreach($mst_color_master as $mst_color_master){
								$color_description=$mst_color_master->description;
								$color_id=$mst_color_master->id;
								$selected="";
								echo "<option $selected value='".$color_id."'>$color_description</option>";
							}
						?>
					</select>
				</td>
				<td>
					<select name="color[film_type][1]" id="color[film_type][1]" aria-label="Select film type" data-control="select2" data-placeholder="Select film type..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-film_type" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_film_type = DB::select("select * from tbl_film_type");

							foreach($tbl_film_type as $tbl_film_type){
								$film_type_description=$tbl_film_type->description;
								$film_type_id=$tbl_film_type->id;
								$selected="";
								echo "<option $selected value='".$film_type_id."'>$film_type_description</option>";
							}
						?>
					</select>
				</td>
				<td>
					<input class="form-control form-control-solid required_validation" type="text" name="color[ply][1]" value=""/>
				</td>
				<td>
					<select name="color[plate_type][1]" id="color[plate_type][1]" aria-label="Select plate type" data-control="select2" data-placeholder="Select plate type..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-palte_type" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_plate_type = DB::select("select * from tbl_plate_type");

							foreach($tbl_plate_type as $tbl_plate_type){
								$plate_type_description=$tbl_plate_type->description;
								$plate_type_id=$tbl_plate_type->id;
								$selected="";
								echo "<option $selected value='".$plate_type_id."'>$plate_type_description</option>";
							}
						?>
					</select>
				</td>
				 <td>

				</td>
			</tr>
		<?php
	}
	else
	{
	$tbl_job_card_pre_press_color = DB::select("select * from tbl_job_card_pre_press_color where pre_press_id='".$pre_press_edit_id."'");



	foreach($tbl_job_card_pre_press_color as $tbl_job_card_pre_press_color)
	{
		$pre_press_color_j++;
		//echo $pre_press_color_j;
		//$pre_press_product_count++;
		$color=$tbl_job_card_pre_press_color->color;
		$color_arr = explode(",",$color);
		$db_color_id=$tbl_job_card_pre_press_color->id;
		$film_type=$tbl_job_card_pre_press_color->film_type;
		$ply=$tbl_job_card_pre_press_color->ply;
		$plate_type=$tbl_job_card_pre_press_color->plate_type;
		//echo $pre_press_edit_id;


?>

			<tr>
				<td>
					<input class="form-control form-control-solid required_validation" type="hidden" name="color[color_id][<?php echo $pre_press_color_j; ?>]" value="{{$db_color_id}}"/>
					<select multiple name="color[color][<?php echo $pre_press_color_j; ?>][]" id="color[color][<?php echo $pre_press_color_j; ?>]" aria-label="Select color" data-control="select2" data-placeholder="Select color..." class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">
						<option value="">Select</option>
						<?php

							$mst_color_master = DB::select("select * from mst_color_master");

							foreach($mst_color_master as $mst_color_master){
								$color_description=$mst_color_master->description;
								$color_id=$mst_color_master->id;
								$selected="";

								if(in_array("$color_id", $color_arr))
								{
									$selected="selected='selected'";
								}

								/*if($color_id==$color)
								{
									$selected="selected='selected'";
								}*/
								echo "<option $selected value='".$color_id."'>$color_description</option>";
							}
						?>
					</select>
				</td>

				<td>
					<select name="color[film_type][<?php echo $pre_press_color_j; ?>]" id="color[film_type][<?php echo $pre_press_color_j; ?>]" aria-label="Select film type" data-control="select2" data-placeholder="Select film type..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-film_type<?php echo $pre_press_color_j; ?>" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_film_type = DB::select("select * from tbl_film_type");

							foreach($tbl_film_type as $tbl_film_type){
								$film_type_description=$tbl_film_type->description;
								$film_type_id=$tbl_film_type->id;
								$selected="";
								if($film_type_id==$film_type)
								{
									$selected="selected='selected'";
								}
								echo "<option $selected value='".$film_type_id."'>$film_type_description</option>";
							}
						?>
					</select>
				</td>
				<td>
					<input class="form-control form-control-solid required_validation" type="text" name="color[ply][<?php echo $pre_press_color_j; ?>]" value="{{$ply}}"/>
				</td>
				<td>
					<select name="color[plate_type][<?php echo $pre_press_color_j; ?>]" id="color[plate_type][<?php echo $pre_press_color_j; ?>]" aria-label="Select plate type" data-control="select2" data-placeholder="Select plate type..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-palte_type<?php echo $pre_press_color_j; ?>" tabindex="-1" aria-hidden="true">
						<option value="">Select</option>
						<?php

							$tbl_plate_type = DB::select("select * from tbl_plate_type");

							foreach($tbl_plate_type as $tbl_plate_type){
								$plate_type_description=$tbl_plate_type->description;
								$plate_type_id=$tbl_plate_type->id;
								$selected="";

								if($plate_type_id==$plate_type)
								{
									$selected="selected='selected'";
								}

								echo "<option $selected value='".$plate_type_id."'>$plate_type_description</option>";
							}
						?>
					</select>
				</td>



				<td>
					<?php
					if($pre_press_color_j==1)
					{

					}
					else
					{
					?>
						<a href="javascript:void(0);" class="remove_pre_press_color" delete-id="<?php echo $db_color_id; ?>">Delete</a>
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
}
?>
</table>
</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<!--end::Accordion-->




																		<!--begin::Separator-->
																		<div class="separator mb-6"></div>
																		<!--end::Separator-->

																		<!--begin::Action buttons-->
																		<div class="d-flex justify-content-end">

																			<!--begin::Button-->
																			<button type="button" id="pre_press_submit_btn" name="pre_press_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="pre_press_ajax_submit();">
																				<span class="indicator-label">Save & Continue</span>
																				<span class="indicator-progress">Please wait...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																			<!--end::Button-->
																			<!--begin::Button-->
																			<button type="reset" id="cancel_btn" data-kt-contacts-type="cancel" class="cancel_btn btn btn-light me-3">Exit</button>
																			<!--end::Button-->
																		</div>
																		<!--end::Action buttons-->

																	</form>

																</div>
															</div>
														</div>
														<!--end:::Tab pane-->

														<!--begin:::Tab pane-->
														<div class="tab-pane fade" id="press_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_press"  id="frm_press">
																		{{@csrf_field()}}
																		<?php
																			$paper_thickness_proposed="";
																			$press_gsm_make="";
																			$paper_thickness_used="";
																			$press_unit="GSM";
																			$quantity="";
																			$papers="";


																			$ink_color="";
																			$ink_shade="";
																			$ink_company="";
																			$ink_quantity="";
																			$ink_units="";

																			$printing="";
																			$coating="";

																			$spare="";
																			$spare_quantity="";

																			$press_coating_details_j=0;
																			$press_spare_to_use_j=1;




																			$press_edit_id=0;
																			$press_color_j=0;
																			$job_card_press_j=0;
																			$press_id=0;

																			$tbl_job_card_press = DB::select("select * from tbl_job_card_press where job_card_id=$id");

																			foreach($tbl_job_card_press as $tbl_job_card_press){
																				/*$paper_thickness_proposed=$tbl_job_card_press->paper_thickness_proposed;
																				$press_edit_id=$tbl_job_card_press->id;
																				$press_gsm_make=$tbl_job_card_press->gsm_make;
																				$paper_thickness_used=$tbl_job_card_press->paper_thickness_used;
																				$press_unit=$tbl_job_card_press->unit;
																				$quantity=$tbl_job_card_press->quantity;
																				$papers=$tbl_job_card_press->papers;*/

																				$press_id=$tbl_job_card_press->id;

																				/*$ink_color=$tbl_job_card_press->ink_color;
																				$ink_shade=$tbl_job_card_press->ink_shade;
																				$ink_company=$tbl_job_card_press->ink_company;
																				$ink_quantity=$tbl_job_card_press->ink_quantity;
																				$ink_units=$tbl_job_card_press->ink_units;*/

																				//$spare=$tbl_job_card_press->spare;
																				//$spare_quantity=$tbl_job_card_press->spare_quantity;

																				$printing=$tbl_job_card_press->printing;
																				$coating=$tbl_job_card_press->coating;



																			}
																		?>

																		<input type="hidden" name="press_edit_id" id="press_edit_id" class="form-control input-sm" autocomplete="off" value="{{$press_edit_id}}">
																		<input type="hidden" name="press_general_details_id" id="press_general_details_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">




																<!--begin::Accordion-->
																<div class="accordion" id="kt_accordion_1">
																	<div class="accordion-item">
																		<h2 class="accordion-header" id="paper_details">
																			<button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#paper_details_body" aria-expanded="true" aria-controls="kt_accordion_1_body_1">
																			PAPER DETAILS
																			</button>
																		</h2>
																		<div id="paper_details_body" class="accordion-collapse collapse show" aria-labelledby="paper_details" data-bs-parent="#kt_accordion_1">
																			<div class="accordion-body">


																				<?php





																					$job_card_paper_count=0;
																					$tbl_job_card_paper_count = DB::select("select count(*) as totalcount from tbl_job_card_paper where job_card_id='".$id."'");
																					//var_dump($tbl_plants_count);die;
																					foreach($tbl_job_card_paper_count as $tbl_job_card_paper_count)
																					{
																						//var_dump($tbl_job_card_pre_press_color_count);
																						$job_card_paper_count=$tbl_job_card_paper_count->totalcount;
																					}

																					if($job_card_paper_count==0)
																					{
																					?>
																						<!--begin::Row-->
																						<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																							<!--begin::Col-->
																							<div class="col">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span >Paper Thickness Proposed</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper thickness proposed."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->
																									<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press[paper_id][<?php echo $job_card_press_j; ?>]" value="0"/>
																									<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press[general_paper_id][<?php echo $job_card_press_j; ?>]" value="0"/>
																									<input type="text" class="form-control form-control-solid" name="job_card_press[paper_thickness_proposed][1]" id="job_card_press[paper_thickness_proposed][1]" value="<?php echo $paper_thickness_proposed; ?>" />

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
																										<span >GSM Make</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select GSM Make."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="job_card_press[press_gsm_make][1]" id="job_card_press[press_gsm_make][1]" aria-label="Select GSM Make" data-control="select2" data-placeholder="Select GSM Make..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_paper_make = DB::select("select * from mst_paper_make");

																												foreach($mst_paper_make as $mst_paper_make){
																													$paper_make_name=$mst_paper_make->description;
																													$paper_make_id=$mst_paper_make->id;
																													$selected="";
																													if($press_gsm_make==$paper_make_id)
																													{
																														$selected="selected='selected'";
																													}



																													echo "<option $selected value='".$paper_make_id."'>$paper_make_name</option>";
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
																										<span >Paper Thickness Used</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper thickness used."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->
																									<input type="text" class="form-control form-control-solid" name="job_card_press[paper_thickness_used][1]" id="job_card_press[paper_thickness_used][1]" value="<?php echo $paper_thickness_used; ?>" />

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
																										<span >Unit</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																									</label>
																									<!--end::Label-->
																									<input type="text" readonly class="form-control form-control-solid" name="job_card_press[press_unit][1]" id="job_card_press[press_unit][1]" value="GSM" />
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
																										<span >GSM Make</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select GSM Make."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="job_card_press[press_gsm_make_1][1]" id="job_card_press[press_gsm_make_1][1]" aria-label="Select GSM Make" data-control="select2" data-placeholder="Select GSM Make..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_paper_make = DB::select("select * from mst_paper_make");

																												foreach($mst_paper_make as $mst_paper_make){
																													$paper_make_name=$mst_paper_make->description;
																													$paper_make_id=$mst_paper_make->id;
																													$selected="";
																													if($press_gsm_make==$paper_make_id)
																													{
																														$selected="selected='selected'";
																													}



																													echo "<option $selected value='".$paper_make_id."'>$paper_make_name</option>";
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
																										<span >Quantity for 1 Piece (KG)</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the quantity."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->
																									<input type="text" class="form-control form-control-solid" name="job_card_press[quantity][1]" id="job_card_press[quantity][1]" value="<?php echo $quantity; ?>" />

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
																										<span >Papers</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Papers."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="job_card_press[papers][1]" id="job_card_press[papers][1]" aria-label="Select papers" data-control="select2" data-placeholder="Select papers..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$tbl_material = DB::select("select * from tbl_material");

																												foreach($tbl_material as $tbl_material){
																													$material_name=$tbl_material->name;
                                                                                                                    $material_name = str_replace('"', '\"', $material_name);
																													$material_id=$tbl_material->id;
																													$selected="";
																													if($papers==$material_id)
																													{
																														$selected="selected='selected'";
																													}
																													echo "<option $selected value='".$material_id."'>$material_name</option>";
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
																					<?php
																					}
																					else
																					{
																						$tbl_job_card_paper = DB::select("select * from tbl_job_card_paper where job_card_id='$id'");
																						$job_card_press_j=0;
																						foreach($tbl_job_card_paper as $tbl_job_card_paper)
																						{
																							$job_card_press_j++;
																							$paper_thick=$tbl_job_card_paper->paper_thick;
																							$paper_make=$tbl_job_card_paper->paper_make;
																							$general_paper_id=$tbl_job_card_paper->id;

																							$tbl_job_card_press_paper = DB::select("select * from tbl_job_card_press_paper where general_paper_id='$general_paper_id'");
																							//var_dump($tbl_job_card_press_paper);
																							//echo $general_paper_id;
																							$paper_thickness_used="";
																							$press_unit="";
																							$gsm_make="";
																							$press_gsm_make="";
																							$quantity="";
																							$papers="";

																							if (empty($tbl_job_card_press_paper))
																							{
																							}
																							else
																							{
																								//var_dump($tbl_job_card_press_paper);
																								foreach($tbl_job_card_press_paper as $tbl_job_card_press_paper)
																								{
																									//var_dump($tbl_job_card_paper);
																									$paper_thickness_used=$tbl_job_card_press_paper->paper_thickness_used;
																									$press_unit=$tbl_job_card_press_paper->unit;
																									$press_gsm_make=$tbl_job_card_press_paper->gsm_make_1;
																									$quantity=$tbl_job_card_press_paper->quantity;
																									$papers=$tbl_job_card_press_paper->papers;
																								}
																							}
																							if($job_card_press_j!=1)
																							{
																								?>
																								<div class="separator mx-1 my-4"></div>
																								<?php
																							}



																						?>
																							<!--begin::Row-->
																							<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 row_<?php echo $general_paper_id; ?>">

																								<!--begin::Col-->
																								<div class="col">
																									<!--begin::Input group-->
																									<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span >Paper Thickness Proposed</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper thickness proposed."></i>
																										</label>
																										<!--end::Label-->
																										<!--begin::Input-->
																										<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press[paper_id][<?php echo $job_card_press_j; ?>]" value="0"/>
																										<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press[general_paper_id][<?php echo $job_card_press_j; ?>]" value="<?php echo $general_paper_id; ?>"/>
																										<input type="text" class="form-control form-control-solid" name="job_card_press[paper_thickness_proposed][<?php echo $job_card_press_j; ?>]" id="job_card_press[paper_thickness_proposed][<?php echo $job_card_press_j; ?>]" value="<?php echo $paper_thick; ?>" />

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
																											<span >GSM Make</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select GSM Make."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select readonly name="job_card_press[press_gsm_make][<?php echo $job_card_press_j; ?>]" id="job_card_press[press_gsm_make][<?php echo $job_card_press_j; ?>]" aria-label="Select GSM Make" data-control="select2" data-placeholder="Select GSM Make..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$mst_paper_make = DB::select("select * from mst_paper_make");

																													foreach($mst_paper_make as $mst_paper_make){
																														$paper_make_name=$mst_paper_make->description;
																														$paper_make_id=$mst_paper_make->id;
																														$selected="";
																														if($paper_make==$paper_make_id)
																														{
																															$selected="selected='selected'";
																														}



																														echo "<option $selected value='".$paper_make_id."'>$paper_make_name</option>";
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
																							<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 row_<?php echo $general_paper_id; ?>">

																								<!--begin::Col-->
																								<div class="col">
																									<!--begin::Input group-->
																									<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span >Paper Thickness Used</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper thickness used."></i>
																										</label>
																										<!--end::Label-->
																										<!--begin::Input-->
																										<input type="text" class="form-control form-control-solid" name="job_card_press[paper_thickness_used][<?php echo $job_card_press_j; ?>]" id="job_card_press[paper_thickness_used][<?php echo $job_card_press_j; ?>]" value="<?php echo $paper_thickness_used; ?>" />

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
																											<span >Unit</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																										</label>
																										<!--end::Label-->
																										<input type="text" readonly class="form-control form-control-solid" name="job_card_press[press_unit][<?php echo $job_card_press_j; ?>]" id="job_card_press[press_unit][<?php echo $job_card_press_j; ?>]" value="GSM" />
																									</div>
																									<!--end::Input group-->
																								</div>
																								<!--end::Col-->

																							</div>
																							<!--end::Row-->

																							<!--begin::Row-->
																							<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 row_<?php echo $general_paper_id; ?>">


																								<!--begin::Col-->
																								<div class="col">
																									<!--begin::Input group-->
																									<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span >GSM Make</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select GSM Make."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="job_card_press[press_gsm_make_1][<?php echo $job_card_press_j; ?>]" id="job_card_press[press_gsm_make_1][<?php echo $job_card_press_j; ?>]" aria-label="Select GSM Make" data-control="select2" data-placeholder="Select GSM Make..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$mst_paper_make = DB::select("select * from mst_paper_make");

																													foreach($mst_paper_make as $mst_paper_make){
																														$paper_make_name=$mst_paper_make->description;
																														$paper_make_id=$mst_paper_make->id;
																														$selected="";
																														if($press_gsm_make==$paper_make_id)
																														{
																															$selected="selected='selected'";
																														}



																														echo "<option $selected value='".$paper_make_id."'>$paper_make_name</option>";
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
																											<span >Quantity for 1 Piece (KG)</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the quantity."></i>
																										</label>
																										<!--end::Label-->
																										<!--begin::Input-->
																										<input type="text" class="form-control form-control-solid" name="job_card_press[quantity][<?php echo $job_card_press_j; ?>]" id="job_card_press[quantity][<?php echo $job_card_press_j; ?>]" value="<?php echo $quantity; ?>" />

																										<!--end::Input-->
																									</div>
																									<!--end::Input group-->
																								</div>
																								<!--end::Col-->

																							</div>
																							<!--end::Row-->


																							<!--begin::Row-->
																							<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 row_<?php echo $general_paper_id; ?>">



																								<!--begin::Col-->
																								<div class="col">
																									<!--begin::Input group-->
																									<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span >Papers</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Papers."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="job_card_press[papers][<?php echo $job_card_press_j; ?>]" id="job_card_press[papers][<?php echo $job_card_press_j; ?>]" aria-label="Select papers" data-control="select2" data-placeholder="Select papers..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$tbl_material = DB::select("select * from tbl_material");

																													foreach($tbl_material as $tbl_material){
																														$material_name=$tbl_material->name;
                                                                                                                        $material_name = str_replace('"', '\"', $material_name);
																														$material_id=$tbl_material->id;
																														$selected="";
																														if($papers==$material_id)
																														{
																															$selected="selected='selected'";
																														}
																														echo "<option $selected value='".$material_id."'>$material_name</option>";
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
																						<?php
																						}
																					}

																					?>
																				<?php


																				?>




																			</div>
																		</div>
																	</div>

																	<div class="accordion-item">
																		<h2 class="accordion-header" id="ink_details">
																			<button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ink_details_body" aria-expanded="false" aria-controls="kt_accordion_1_body_2">
																			INK DETAILS
																			</button>
																		</h2>
																		<div id="ink_details_body" class="accordion-collapse collapse" aria-labelledby="ink_details" data-bs-parent="#kt_accordion_1">
																			<div class="accordion-body">

																				<?php
																				$job_card_pre_press_color_count=0;
																				$tbl_job_card_pre_press_color_count = DB::select("select count(*) as totalcount from tbl_job_card_pre_press_color where pre_press_id='".$pre_press_edit_id."'");
																				//var_dump($tbl_plants_count);die;
																				foreach($tbl_job_card_pre_press_color_count as $tbl_job_card_pre_press_color_count)
																				{
																					//var_dump($tbl_job_card_pre_press_color_count);
																					$job_card_pre_press_color_count=$tbl_job_card_pre_press_color_count->totalcount;
																				}
																				?>
																				<?php
																				if($job_card_pre_press_color_count==0)
																				{
																				?>

																					<!--begin::Row-->
																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																						<!--begin::Col-->
																						<div class="col">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span >Color</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the color."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press_ink_details[color_id][1]" value="0"/>
																								<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press_ink_details[pre_press_color_id][1]" value="0"/>
																								<input type="text" class="form-control form-control-solid" name="job_card_press_ink_details[ink_color][1]" id="job_card_press_ink_details[ink_color][1]" value="<?php echo $ink_color; ?>" readonly/>

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
																									<span >Shade</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Shade."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="job_card_press_ink_details[ink_shade][1]" id="job_card_press_ink_details[ink_shade][1]" aria-label="Select shade" data-control="select2" data-placeholder="Select shade..."  class="form-select form-select-solid lh-1 py-3">
																										<option value="">Select</option>
																										<?php

																											$mst_color_shade = DB::select("select * from mst_color_shade");

																											foreach($mst_color_shade as $mst_color_shade){
																												$shade_name=$mst_color_shade->description;
																												$shade_id=$mst_color_shade->id;
																												$selected="";
																												if($ink_shade==$shade_id)
																												{
																													$selected="selected='selected'";
																												}



																												echo "<option $selected value='".$shade_id."'>$shade_name</option>";
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
																									<span >Company</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Company."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="job_card_press_ink_details[ink_company][1]" id="job_card_press_ink_details[ink_company][1]" aria-label="Select Company" data-control="select2" data-placeholder="Select Company..."  class="form-select form-select-solid lh-1 py-3">
																										<option value="">Select</option>
																										<?php

																											$mst_ink_make = DB::select("select * from mst_ink_make");

																											foreach($mst_ink_make as $mst_ink_make){
																												$ink_name=$mst_ink_make->description;
																												$ink_id=$mst_ink_make->id;
																												$selected="";
																												if($ink_company==$ink_id)
																												{
																													$selected="selected='selected'";
																												}



																												echo "<option $selected value='".$ink_id."'>$ink_name</option>";
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
																									<span >Quantity Per 1000 PC</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the quantity."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" class="form-control form-control-solid" name="job_card_press_ink_details[ink_quantity][1]" id="job_card_press_ink_details[ink_quantity][1]" value="<?php echo $ink_quantity; ?>" />

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
																									<span >Units</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>
																								</label>
																								<!--end::Label-->
																								<div class="w-100">
																									<div class="form-floating border rounded">
																										<!--begin::Select2-->
																										<select name="job_card_press_ink_details[ink_units][1]" id="job_card_press_ink_details[ink_units][1]" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3">
																										<option value="">Select</option>
																										<?php

																											$mst_unit = DB::select("select * from mst_unit");

																											foreach($mst_unit as $mst_unit){
																												$unit_name=$mst_unit->description;
																												$unit_id=$mst_unit->id;
																												$selected="";
																												if($ink_units==$unit_id)
																												{
																													$selected="selected='selected'";
																												}



																												echo "<option $selected value='".$unit_id."'>$unit_name</option>";
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

																				<?php
																				}
																				else
																				{
																					$tbl_job_card_pre_press_color = DB::select("select * from tbl_job_card_pre_press_color where pre_press_id='$pre_press_edit_id'");
																					$job_card_pre_press_color_j=0;
																					$pre_press_color_id=0;
																					foreach($tbl_job_card_pre_press_color as $tbl_job_card_pre_press_color)
																					{

																						$color=$tbl_job_card_pre_press_color->color;


																						$pre_press_color_id=$tbl_job_card_pre_press_color->id;



																						$color_arr = explode(",",$color);

																						$ink_color="";
																						if(sizeof($color_arr)>0)
																						{
																							foreach ($color_arr as $key => $title) {
																								$job_card_pre_press_color_j++;

																								//$ink_color="";
																								$mst_color_master   = DB::select("select * from mst_color_master where id='".$title."'");

																								//$front_side_color_name="";
																								foreach($mst_color_master as $mst_color_master)
																								{
																									$ink_color.=$mst_color_master->description.",";
																								}

																								?>

																								<?php
																							}

																						}
																						$ink_color=trim($ink_color,",");


																						$tbl_job_card_press_ink_details = DB::select("select * from tbl_job_card_press_ink_details where pre_press_color_id='$pre_press_color_id'");

																						$ink_shade="";
																						$ink_company="";
																						$ink_quantity="";
																						$ink_units="";
																						$color_id=0;

																						if (empty($tbl_job_card_press_ink_details))
																						{
																						}
																						else
																						{
																							//var_dump($tbl_job_card_press_paper);
																							foreach($tbl_job_card_press_ink_details as $tbl_job_card_press_ink_details)
																							{
																								//var_dump($tbl_job_card_paper);
																								$ink_shade=$tbl_job_card_press_ink_details->ink_shade;
																								$ink_company=$tbl_job_card_press_ink_details->ink_company;
																								$ink_quantity=$tbl_job_card_press_ink_details->ink_quantity;
																								$ink_units=$tbl_job_card_press_ink_details->ink_units;
																								$color_id=$tbl_job_card_press_ink_details->id;
																							}
																						}
																						if($job_card_pre_press_color_j!=1 && $job_card_pre_press_color_j!=2)
																						{
																							?>
																							<div class="separator mx-1 my-4"></div>
																							<?php
																						}


																						?>
																						<!--begin::Row-->
																						<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 ink_row_<?php echo $pre_press_color_id; ?>">

																							<!--begin::Col-->
																							<div class="col">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span >Color</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the color."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->
																									<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press_ink_details[color_id][<?php echo $job_card_pre_press_color_j; ?>]" value="<?php echo $color_id; ?>"/>
																									<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press_ink_details[pre_press_color_id][<?php echo $job_card_pre_press_color_j; ?>]" value="<?php echo $pre_press_color_id; ?>"/>
																									<input class="form-control form-control-solid required_validation" type="hidden" name="job_card_press_ink_details[my_color_id][<?php echo $job_card_pre_press_color_j; ?>]" value="<?php echo $title; ?>"/>
																									<input type="text" class="form-control form-control-solid" name="job_card_press_ink_details[ink_color][<?php echo $job_card_pre_press_color_j; ?>]" id="job_card_press_ink_details[ink_color][<?php echo $job_card_pre_press_color_j; ?>]" value="<?php echo $ink_color; ?>" readonly/>

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
																										<span >Shade</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Shade."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="job_card_press_ink_details[ink_shade][<?php echo $job_card_pre_press_color_j; ?>]" id="job_card_press_ink_details[ink_shade][<?php echo $job_card_pre_press_color_j; ?>]" aria-label="Select shade" data-control="select2" data-placeholder="Select shade..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_color_shade = DB::select("select * from mst_color_shade");

																												foreach($mst_color_shade as $mst_color_shade){
																													$shade_name=$mst_color_shade->description;
																													$shade_id=$mst_color_shade->id;
																													$selected="";
																													if($ink_shade==$shade_id)
																													{
																														$selected="selected='selected'";
																													}



																													echo "<option $selected value='".$shade_id."'>$shade_name</option>";
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
																						<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 ink_row_<?php echo $pre_press_color_id; ?>">



																							<!--begin::Col-->
																							<div class="col">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span >Company</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Company."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="job_card_press_ink_details[ink_company][<?php echo $job_card_pre_press_color_j; ?>]" id="job_card_press_ink_details[ink_company][<?php echo $job_card_pre_press_color_j; ?>]" aria-label="Select Company" data-control="select2" data-placeholder="Select Company..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_ink_make = DB::select("select * from mst_ink_make");

																												foreach($mst_ink_make as $mst_ink_make){
																													$ink_name=$mst_ink_make->description;
																													$ink_id=$mst_ink_make->id;
																													$selected="";
																													if($ink_company==$ink_id)
																													{
																														$selected="selected='selected'";
																													}



																													echo "<option $selected value='".$ink_id."'>$ink_name</option>";
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
																										<span >Quantity Per 1000 PC</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the quantity."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->
																									<input type="text" class="form-control form-control-solid" name="job_card_press_ink_details[ink_quantity][<?php echo $job_card_pre_press_color_j; ?>]" id="job_card_press_ink_details[ink_quantity][<?php echo $job_card_pre_press_color_j; ?>]" value="<?php echo $ink_quantity; ?>" />

																									<!--end::Input-->
																								</div>
																								<!--end::Input group-->
																							</div>
																							<!--end::Col-->


																						</div>
																						<!--end::Row-->

																						<!--begin::Row-->
																						<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 ink_row_<?php echo $pre_press_color_id; ?>">


																							<!--begin::Col-->
																							<div class="col">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span >Units</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="job_card_press_ink_details[ink_units][<?php echo $job_card_pre_press_color_j; ?>]" id="job_card_press_ink_details[ink_units][<?php echo $job_card_pre_press_color_j; ?>]" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3">
																											<option value="">Select</option>
																											<?php

																												$mst_unit = DB::select("select * from mst_unit");

																												foreach($mst_unit as $mst_unit){
																													$unit_name=$mst_unit->description;
																													$unit_id=$mst_unit->id;
																													$selected="";
																													if($ink_units==$unit_id)
																													{
																														$selected="selected='selected'";
																													}



																													echo "<option $selected value='".$unit_id."'>$unit_name</option>";
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


																						<?php


																					?>

																					<?php
																					}
																				}
																				?>

																			</div>
																		</div>
																	</div>

																	<div class="accordion-item">
																		<h2 class="accordion-header" id="spare_to_use">
																			<button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spare_to_use_body" aria-expanded="false" aria-controls="kt_accordion_1_body_3">
																			SPARE TO USE
																			</button>
																		</h2>
																		<div id="spare_to_use_body" class="accordion-collapse collapse" aria-labelledby="spare_to_use" data-bs-parent="#kt_accordion_1">


																			<div class="accordion-body">
																				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																					<?php

																					//echo $id;
																					if($id=="0")
																					{
																					?>
																						<table id='widthtable' class='press_spare_to_use_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																							<!-- <div class=""> -->
																							<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																							<div class="row"> -->
																								<tr>
																									<th>
																									Spare
																									</th>
																									<th>
																									Quantity
																									</th>
																									<th>
																										<div style="text-align:right"><a href="javascript:void(0);" class="add_spare_to_use" title="Add Spare To Use">Add</a></div>
																									</th>
																								</tr>
																								<tr>
																									<td>
																										<input class="form-control form-control-solid required_validation" type="hidden" name="sparetouse[spare_id][1]" value="0"/>
																										<select name="sparetouse[spare][1]" id="sparetouse[spare][1]" aria-label="Select Spare" data-control="select2" data-placeholder="Select Spare..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-color" tabindex="-1" aria-hidden="true">
																											<option value="">Select</option>
																											<?php

																												$tbl_spare = DB::select("select * from tbl_spare");

																												foreach($tbl_spare as $tbl_spare){
																													$spare_name=$tbl_spare->name;
																													$spare_id=$tbl_spare->id;
																													$selected="";
																													echo "<option $selected value='".$spare_id."'>$spare_name</option>";
																												}
																											?>
																										</select>
																									</td>
																									<td>
																										<input type="text" class="form-control form-control-solid" name="sparetouse[spare_quantity][1]" id="sparetouse[spare_quantity][1]" value="" />
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
																					<table id='widthtable' class='press_spare_to_use_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																						<tr>
																									<th>
																									Spare
																									</th>
																									<th>
																									Quantity
																									</th>
																									<th>
																									<div style="text-align:right"><a href="javascript:void(0);" class="add_spare_to_use" title="Add Coating Details">Add</a></div>
																									</th>
																								</tr>
																						<?php
																						//echo $press_id;
																						$tbl_job_card_press_spare_to_use_count = DB::select("select count(*) as totalcount from tbl_job_card_press_spare_to_use where press_id='".$press_id."'");
																						//var_dump($tbl_job_card_press_spare_to_use_count);
																						foreach($tbl_job_card_press_spare_to_use_count as $tbl_job_card_press_spare_to_use_count)
																						{
																							//var_dump($tbl_job_card_pre_press_color_count);
																							$tbl_job_card_press_spare_to_use_count=$tbl_job_card_press_spare_to_use_count->totalcount;
																						}

																						if($tbl_job_card_press_spare_to_use_count==0)
																						{
																							?>
																							<tr>
																									<td>
																										<input class="form-control form-control-solid required_validation" type="hidden" name="sparetouse[spare_id][1]" value="0"/>
																										<select name="sparetouse[spare][1]" id="sparetouse[spare][1]" aria-label="Select Spare" data-control="select2" data-placeholder="Select Spare..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-color" tabindex="-1" aria-hidden="true">
																											<option value="">Select</option>
																											<?php

																												$tbl_spare = DB::select("select * from tbl_spare");

																												foreach($tbl_spare as $tbl_spare){
																													$spare_name=$tbl_spare->name;
																													$spare_id=$tbl_spare->id;
																													$selected="";
																													echo "<option $selected value='".$spare_id."'>$spare_name</option>";
																												}
																											?>
																										</select>
																									</td>
																									<td>
																										<input type="text" class="form-control form-control-solid" name="sparetouse[spare_quantity][1]" id="sparetouse[spare_quantity][1]" value="" />
																									</td>


																									<td>

																									</td>
																								</tr>
																							<?php
																						}
																						else
																						{
																						$tbl_job_card_press_spare_to_use = DB::select("select * from tbl_job_card_press_spare_to_use where press_id='".$press_id."'");
																						//var_dump($tbl_job_card_press_coating);

																						foreach($tbl_job_card_press_spare_to_use as $tbl_job_card_press_spare_to_use)
																						{
																							$press_spare_to_use_j++;
																							//$pre_press_product_count++;
																							$spare_quantity=$tbl_job_card_press_spare_to_use->spare_quantity;
																							$spare=$tbl_job_card_press_spare_to_use->spare;
																							$db_spare_id=$tbl_job_card_press_spare_to_use->id;


																					?>

																					<tr>

																					<td>
																										<input class="form-control form-control-solid required_validation" type="hidden" name="sparetouse[spare_id][<?php echo $press_spare_to_use_j; ?>]" value="<?php echo $db_spare_id; ?>"/>
																										<select name="sparetouse[spare][<?php echo $press_spare_to_use_j; ?>]" id="sparetouse[spare][<?php echo $press_spare_to_use_j; ?>]" aria-label="Select Spare" data-control="select2" data-placeholder="Select Spare..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-color<?php echo $press_spare_to_use_j; ?>" tabindex="-1" aria-hidden="true">
																											<option value="">Select</option>
																											<?php

																												$tbl_spare = DB::select("select * from tbl_spare");

																												foreach($tbl_spare as $tbl_spare){
																													$spare_name=$tbl_spare->name;
																													$spare_id=$tbl_spare->id;
																													$selected="";

																													if($spare==$spare_id)
																													{
																														$selected="selected='selected'";
																													}

																													echo "<option $selected value='".$spare_id."'>$spare_name</option>";
																												}
																											?>
																										</select>
																									</td>
																									<td>
																										<input type="text" class="form-control form-control-solid" name="sparetouse[spare_quantity][<?php echo $press_spare_to_use_j; ?>]" id="sparetouse[spare_quantity][<?php echo $press_spare_to_use_j; ?>]" value="<?php echo $spare_quantity; ?>" />
																									</td>


																									<td>


																									<?php
																										if($press_spare_to_use_j==1)
																										{

																										}
																										else
																										{
																										?>
																											<a href="javascript:void(0);" class="remove_press_spare_to_use" delete-id="<?php echo $db_spare_id; ?>">Delete</a>
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
																					}
																					?>
																					</table>
																				</div>
																			</div>


																		</div>
																	</div>

																	<div class="accordion-item">
																		<h2 class="accordion-header" id="coating_details">
																			<button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coating_details_body" aria-expanded="false" aria-controls="kt_accordion_1_body_3">
																			COATING DETAILS
																			</button>
																		</h2>
																		<div id="coating_details_body" class="accordion-collapse collapse" aria-labelledby="coating_details" data-bs-parent="#kt_accordion_1">
																			<div class="accordion-body">


																			<!--begin::Row-->
																			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

																				<!--begin::Col-->
																				<div class="col">
																					<!--begin::Input group-->
																					<div class="fv-row mb-7">
																						<!--begin::Label-->
																						<label class="fs-6 fw-bold form-label mt-3">
																							<span >Printing</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Printing."></i>
																						</label>
																						<!--end::Label-->
																						<div class="w-100">
																							<div class="form-floating border rounded">
																								<!--begin::Select2-->
																								<select name="printing" id="printing" aria-label="Select Printing" data-control="select2" data-placeholder="Select Printing..."  class="form-select form-select-solid lh-1 py-3">
																								<option value="">Select</option>
																								<?php

																									$tbl_printing = DB::select("select * from tbl_printing");

																									foreach($tbl_printing as $tbl_printing){
																										$printing_description=$tbl_printing->description;
																										$printing_id=$tbl_printing->id;
																										$selected="";
																										if($printing==$printing_id)
																										{
																											$selected="selected='selected'";
																										}



																										echo "<option $selected value='".$printing_id."'>$printing_description</option>";
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
																							<span >Coating</span>
																							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Coating."></i>
																						</label>
																						<!--end::Label-->
																						<div class="w-100">
																							<div class="form-floating border rounded">
																								<!--begin::Select2-->
																								<select name="coating" id="coating" aria-label="Select Coating" data-control="select2" data-placeholder="Select Coating..."  class="form-select form-select-solid lh-1 py-3">
																								<option value="">Select</option>
																								<?php

																									$tbl_coating = DB::select("select * from tbl_coating");

																									foreach($tbl_coating as $tbl_coating){
																										$coating_description=$tbl_coating->description;
																										$coating_id=$tbl_coating->id;
																										$selected="";
																										if($coating==$coating_id)
																										{
																											$selected="selected='selected'";
																										}



																										echo "<option $selected value='".$coating_id."'>$coating_description</option>";
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


																			</div>
																		</div>
																	</div>
																</div>
																<!--end::Accordion-->


																<!--begin::Separator-->
																	<div class="separator mb-6"></div>
																<!--end::Separator-->

																<!--begin::Action buttons-->
																<div class="d-flex justify-content-end">

																	<!--begin::Button-->
																	<button type="button" id="press_submit_btn" name="press_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="press_ajax_submit();">
																		<span class="indicator-label">Save & Continue</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="reset" id="cancel_btn"  data-kt-contacts-type="cancel" class="cancel_btn btn btn-light me-3">Exit</button>
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
														<div class="tab-pane fade" id="post_press_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">
																<!--begin::Card body-->
																<div class="card-body py-0">

																	<form class="form" method="POST" enctype="multipart/form-data"  name="frm_post_press"  id="frm_post_press">
																			{{@csrf_field()}}
																			<?php

																				$collating_width="";
																				$collating_type="";
																				$collating_between_ply="";
																				$collating_carbon_option="";

																				$numbering_position="";
																				$numbering_style="";
																				$numbering_skip="";
																				$numbering_sequence="";
																				$numbering_orientation="";

																				$gumming_position="";
																				$gumming_gum_make="";
																				$gumming_between="";
																				$gumming_quantity="";

																				$hotspot_carbon_width="";
																				$hotspot_carbon_height="";
																				$hotspot_carbon_behind_ply_no="";

																				$cutting_width="";
																				$cutting_width_unit="";
																				$cutting_length="";
																				$cutting_length_unit="";
																				$cutting_core_size="";

																				$barcode_type="";
																				$barcode_height="";
																				$barcode_width="";
																				$barcode_orientation="";
																				$barcode_human_readable_text_to_show="";

																				$baby_roll_making_coating_side="";






																				//$press_coating_details_j=0;
																				$packaging_details_count=1;



																				$post_press_edit_id=0;
																				//$press_color_j=0;


																				//echo "select * from tbl_job_card_post_press where job_card_id=$id";
																				$tbl_job_card_post_press = DB::select("select * from tbl_job_card_post_press where job_card_id=$id");

																				foreach($tbl_job_card_post_press as $tbl_job_card_post_press){

                                                                                    $post_press_id = $tbl_job_card_post_press->id;
																					$post_press_edit_id=$id;

																					//var_dump($tbl_job_card_post_press);

																					$collating_width=$tbl_job_card_post_press->collating_width;
																					$collating_type=$tbl_job_card_post_press->collating_type;
																					$collating_between_ply=$tbl_job_card_post_press->collating_between_ply;
																					$collating_carbon_option=$tbl_job_card_post_press->collating_carbon_option;

																					$numbering_position=$tbl_job_card_post_press->numbering_position;
																					$numbering_style=$tbl_job_card_post_press->numbering_style;
																					$numbering_skip=$tbl_job_card_post_press->numbering_skip;
																					$numbering_sequence=$tbl_job_card_post_press->numbering_sequence;
																					$numbering_orientation=$tbl_job_card_post_press->numbering_orientation;


																					$gumming_position=$tbl_job_card_post_press->gumming_position;
																					$gumming_gum_make=$tbl_job_card_post_press->gumming_gum_make;
																					$gumming_between=$tbl_job_card_post_press->gumming_between;
																					$gumming_quantity=$tbl_job_card_post_press->gumming_quantity;


																					$hotspot_carbon_width=$tbl_job_card_post_press->hotspot_carbon_width;
																					$hotspot_carbon_height=$tbl_job_card_post_press->hotspot_carbon_height;
																					$hotspot_carbon_behind_ply_no=$tbl_job_card_post_press->hotspot_carbon_behind_ply_no;

																					$cutting_width=$tbl_job_card_post_press->cutting_width;
																					$cutting_width_unit=$tbl_job_card_post_press->cutting_width_unit;
																					$cutting_length=$tbl_job_card_post_press->cutting_length;
																					$cutting_length_unit=$tbl_job_card_post_press->cutting_length_unit;
																					$cutting_core_size=$tbl_job_card_post_press->cutting_core_size;

																					$barcode_type=$tbl_job_card_post_press->barcode_type;
																					$barcode_height=$tbl_job_card_post_press->barcode_height;
																					$barcode_width=$tbl_job_card_post_press->barcode_width;
																					$barcode_orientation=$tbl_job_card_post_press->barcode_orientation;
																					$barcode_human_readable_text_to_show=$tbl_job_card_post_press->barcode_human_readable_text_to_show;

																					$baby_roll_making_coating_side=$tbl_job_card_post_press->baby_roll_making_coating_side;



																				}
																			?>
																			<input type="hidden" name="post_press_id" id="post_press_id" class="form-control input-sm" autocomplete="off" value="{{$post_press_id ?? '0'}}">

																			<input type="hidden" name="post_press_edit_id" id="post_press_edit_id" class="form-control input-sm" autocomplete="off" value="{{$post_press_edit_id}}">
																			<input type="hidden" name="post_press_general_details_id" id="post_press_general_details_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">




																			<div class="accordion" id="accordionExample">


																				<div class="accordion-item">
																					<h2 class="accordion-header" id="numbering_details">
																						<button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#numbering_details_body" aria-expanded="true" aria-controls="numbering_details_body">
																							Numbering Details
																						</button>
																					</h2>
																					<div id="numbering_details_body" class="accordion-collapse collapse" aria-labelledby="numbering_details" data-bs-parent="#accordionExample">
																						<div class="accordion-body">
																						<h3>Numbering Details</h3>
																							<!--begin::Row-->
																							<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																								<!--begin::Col-->
																								<div class="col">
																									<!--begin::Input group-->
																									<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span class="">Position</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the position ."></i>
																										</label>
																										<!--end::Label-->
																										<!--begin::Input-->
																										<input type="text" class="form-control form-control-solid" name="numbering_position" id="numbering_position" value="<?php echo $numbering_position; ?>" />

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
																											<span class="">Style</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Style."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="numbering_style" id="numbering_style" aria-label="Select Style" data-control="select2" data-placeholder="Select Style..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$tbl_style = DB::select("select * from tbl_style");

																													foreach($tbl_style as $tbl_style){
																														$style_name=$tbl_style->description;
																														$style_id=$tbl_style->id;
																														$selected="";
																														if($numbering_style==$style_id)
																														{
																															$selected="selected='selected'";
																														}



																														echo "<option $selected value='".$style_id."'>$style_name</option>";
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
																											<span class="">Skip</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Skip."></i>
																										</label>
																										<!--end::Label-->
																										<!--begin::Input-->
																										<input type="text" class="form-control form-control-solid" name="numbering_skip" id="numbering_skip" value="<?php echo $numbering_skip; ?>" />

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
																											<span class="">Sequence</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Sequence."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="numbering_sequence" id="numbering_sequence" aria-label="Select Sequence" data-control="select2" data-placeholder="Select Sequence..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$tbl_sequence = DB::select("select * from tbl_sequence");

																													foreach($tbl_sequence as $tbl_sequence){
																														$sequence_option_name=$tbl_sequence->description;
																														$sequence_option_id=$tbl_sequence->id;
																														$selected="";
																														if($sequence_option_id==$numbering_sequence)
																														{
																															$selected="selected='selected'";
																														}



																														echo "<option $selected value='".$sequence_option_id."'>$sequence_option_name</option>";
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
																											<span class="">Orientation</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Orientation."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="numbering_orientation" id="numbering_orientation" aria-label="Select Orientation" data-control="select2" data-placeholder="Select Orientation..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$tbl_orientation = DB::select("select * from tbl_orientation");

																													foreach($tbl_orientation as $tbl_orientation){
																														$orientation_name=$tbl_orientation->description;
																														$orientation_id=$tbl_orientation->id;
																														$selected="";
																														if($orientation_id==$numbering_orientation)
																														{
																															$selected="selected='selected'";
																														}



																														echo "<option $selected value='".$orientation_id."'>$orientation_name</option>";
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

																						</div>
																					</div>
																				</div>



																				<div class="accordion-item">
																					<h2 class="accordion-header" id="packaging_details">
																						<button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#packaging_details_body" aria-expanded="true" aria-controls="packaging_details_body">
																						Packaging Details
																						</button>
																					</h2>
																					<div id="packaging_details_body" class="accordion-collapse collapse" aria-labelledby="packaging_details" data-bs-parent="#accordionExample">
																						<div class="accordion-body">
																						<h3>Packaging Details</h3>
																							<div style="text-align:right;margin-bottom:15px">
																								<a href="javascript:void(0);" class="add_packaging_details" title="Add Packaging Details">Add</a>
																							</div>

																							<?php
																							if($id=="0")
																							{
																							?>
																								<div class="packaging_details_wrapper" style="padding-top:30px">
																									<div class="packaging_details">

																										<!--begin::Row-->
																										<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">



																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>PCs</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the PCs."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="hidden" name="packaging_details[packaging_details_id][1]" value="0">
																													<input type="text" class="form-control form-control-solid" name="packaging_details[pcs][1]" id="packaging_details[pcs][1]" value="">
																													<!--end::Input-->
																												</div>
																												<!--end::Input group-->
																											</div>
																											<!--end::Col-->



																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																														<!--begin::Label-->
																														<label class="fs-6 fw-bold form-label mt-3">
																															<span>Items</span>
																															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Items."></i>
																														</label>
																														<!--end::Label-->
																														<div class="w-100">
																															<div class="form-floating border rounded">
																																<!--begin::Select2-->
																																<select name="packaging_details[item][1]" id="packaging_details[item][1]" aria-label="Select Items" data-control="select2" data-placeholder="Select Items..."  class="form-select form-select-solid lh-1 py-3">
																																	<option value="">Select</option>
																																	<?php

																																		$tbl_items = DB::select("select * from tbl_items");

																																		foreach($tbl_items as $tbl_items){
																																			$item_description=$tbl_items->description;
																																			$item_id=$tbl_items->id;
																																			$selected="";
																																			// if($perforation==$perforation_id)
																																			// {
																																			// 	$selected="selected='selected'";
																																			// }

																																			echo "<option $selected value='".$item_id."'>$item_description</option>";
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
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>Length</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Length."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="text" class="form-control form-control-solid" name="packaging_details[length][1]" id="packaging_details[length][1]" value="">
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
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>Width</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Width."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="text" class="form-control form-control-solid" name="packaging_details[width][1]" id="packaging_details[width][1]" value="">
																													<!--end::Input-->
																												</div>
																												<!--end::Input group-->
																											</div>
																											<!--end::Col-->

																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>height</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="text" class="form-control form-control-solid" name="packaging_details[height][1]" id="packaging_details[height][1]" value="">
																													<!--end::Input-->
																												</div>
																												<!--end::Input group-->
																											</div>
																											<!--end::Col-->


																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																														<!--begin::Label-->
																														<label class="fs-6 fw-bold form-label mt-3">
																															<span>Units</span>
																															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>
																														</label>
																														<!--end::Label-->
																														<div class="w-100">
																															<div class="form-floating border rounded">
																																<!--begin::Select2-->

																																<select name="packaging_details[units][1]" id="packaging_details[units][1]" data-select2-id="select2-packing_details_units_1" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3">
																																	<option value="">Select</option>
																																	<?php

																																		$mst_unit = DB::select("select * from mst_unit");

																																		foreach($mst_unit as $mst_unit){
																																			$unit_description=$mst_unit->description;
																																			$unit_id=$mst_unit->id;
																																			$selected="";
																																			// if($perforation==$perforation_id)
																																			// {
																																			// 	$selected="selected='selected'";
																																			// }

																																			echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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



																									</div>
																								</div>
																							<?php
																							}
																							else
																							{
																								?>
																								<table id='packaging_details_tbl' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border:1px solid;padding-left:15px;'>
																									<tr>
																										<th>PCs</th>
																										<th>Items</th>
																										<th>Length</th>
																										<th>Width</th>
																										<th>height</th>
																										<th>Units</th>
																										<th>Edit</th>
																										<th style='padding-right:10px'>Delete</th>
																									</tr>

																									<?php

																									$tbl_job_card_post_press_packaging_details_count = DB::select("select count(*) as totalcount from tbl_job_card_post_press_packaging_details where job_card_id='".$id."'");
																									//var_dump($tbl_job_card_post_press_packaging_details_count);
																									foreach($tbl_job_card_post_press_packaging_details_count as $tbl_job_card_post_press_packaging_details_count)
																									{
																										//var_dump($tbl_plants_count);die;
																										$packaging_details_count=$tbl_job_card_post_press_packaging_details_count->totalcount;
																									}

																									if($packaging_details_count==0)
																									{
																										$packaging_details_count=1;
																									?>
																									<tr>
																										<td colspan="6" style="text-align:center">No data available</td>
																									</tr>
																									<?php
																									}
																									else
																									{

																										$tbl_job_card_post_press_packaging_details = DB::select("select * from tbl_job_card_post_press_packaging_details where job_card_id='".$id."'");

																										//$k=0;
																										foreach($tbl_job_card_post_press_packaging_details as $tbl_job_card_post_press_packaging_details)
																										{
																											//$k++;
																											//$neft_count++;
																											$packaging_details_id=$tbl_job_card_post_press_packaging_details->id;
																											$pcs=$tbl_job_card_post_press_packaging_details->pcs;
																											$item=$tbl_job_card_post_press_packaging_details->item;
																											$length=$tbl_job_card_post_press_packaging_details->length;
																											$width=$tbl_job_card_post_press_packaging_details->width;
																											$height=$tbl_job_card_post_press_packaging_details->height;
																											$units=$tbl_job_card_post_press_packaging_details->units;

																											$tbl_items   = DB::select("select * from tbl_items where id='".$item."'");

																											$item_name="";
																											foreach($tbl_items as $tbl_items)
																											{
																												$item_name=$tbl_items->description;
																											}



																											$mst_unit   = DB::select("select * from mst_unit where id='".$units."'");

																											$unit_name="";
																											foreach($mst_unit as $mst_unit)
																											{
																												$unit_name=$mst_unit->description;
																											}

																											?>
																											<tr>
																											<td><?php echo $pcs; ?></td>
																											<td><?php echo $item_name; ?></td>
																											<td><?php echo $length; ?></td>
																											<td><?php echo $width; ?></td>
																											<td><?php echo $height; ?></td>
																											<td><?php echo $unit_name; ?></td>

																											<td><a href=""><a href="javascript:void(0);" class="edit_packaging_details" edit-id="<?php echo $packaging_details_id; ?>">Edit</a></a></td>
																											<td><a href="javascript:void(0);" class="remove_packaging_details" delete-id="<?php echo $packaging_details_id; ?>">Delete</a></td>
																											</tr>
																											<?php
																										}

																									}


																									?>


																								</table>
																								<?php
																								$tbl_job_card_post_press_packaging_details_count=0;
																								$tbl_job_card_post_press_packaging_details_count = DB::select("select count(*) as totalcount from tbl_job_card_post_press_packaging_details where job_card_id='".$id."'");
																								foreach($tbl_job_card_post_press_packaging_details_count as $tbl_job_card_post_press_packaging_details_count)
																								{
																									//var_dump($tbl_plants_count);die;
																									$tbl_job_card_post_press_packaging_details_count=$tbl_job_card_post_press_packaging_details_count->totalcount;
																								}

																								//$packaging_details_count

																								//echo $tbl_job_card_post_press_packaging_details_count;
																								?>

																									<div class="packaging_details_wrapper" style="padding-top:30px">
																									<div class="packaging_details">

																										<!--begin::Row-->
																										<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">



																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>PCs</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the PCs."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="hidden" name="packaging_details[packaging_details_id][1]"  id="packaging_details_id" value="0">
																													<input type="text" class="form-control form-control-solid" name="packaging_details[pcs][1]" id="pcs" value="">
																													<!--end::Input-->
																												</div>
																												<!--end::Input group-->
																											</div>
																											<!--end::Col-->



																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																														<!--begin::Label-->
																														<label class="fs-6 fw-bold form-label mt-3">
																															<span>Items</span>
																															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Items."></i>
																														</label>
																														<!--end::Label-->
																														<div class="w-100">
																															<div class="form-floating border rounded">
																																<!--begin::Select2-->
																																<select name="packaging_details[item][1]" id="item" aria-label="Select Items" data-control="select2" data-placeholder="Select Items..."  class="form-select form-select-solid lh-1 py-3">
																																	<option value="">Select</option>
																																	<?php

																																		$tbl_items = DB::select("select * from tbl_items");

																																		foreach($tbl_items as $tbl_items){
																																			$item_description=$tbl_items->description;
																																			$item_id=$tbl_items->id;
																																			$selected="";
																																			// if($perforation==$perforation_id)
																																			// {
																																			// 	$selected="selected='selected'";
																																			// }

																																			echo "<option $selected value='".$item_id."'>$item_description</option>";
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
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>Length</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Length."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="text" class="form-control form-control-solid" name="packaging_details[length][1]" id="length" value="">
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
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>Width</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Width."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="text" class="form-control form-control-solid" name="packaging_details[width][1]" id="width" value="">
																													<!--end::Input-->
																												</div>
																												<!--end::Input group-->
																											</div>
																											<!--end::Col-->

																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																													<!--begin::Label-->
																													<label class="fs-6 fw-bold form-label mt-3">
																														<span>height</span>
																														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>
																													</label>
																													<!--end::Label-->
																													<!--begin::Input-->
																													<input type="text" class="form-control form-control-solid" name="packaging_details[height][1]" id="height" value="">
																													<!--end::Input-->
																												</div>
																												<!--end::Input group-->
																											</div>
																											<!--end::Col-->


																											<!--begin::Col-->
																											<div class="col" style="width:30% !important;">
																												<!--begin::Input group-->
																												<div class="fv-row mb-7">
																														<!--begin::Label-->
																														<label class="fs-6 fw-bold form-label mt-3">
																															<span>Units</span>
																															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>
																														</label>
																														<!--end::Label-->
																														<div class="w-100">
																															<div class="form-floating border rounded">
																																<!--begin::Select2-->
																																<select name="packaging_details[units][1]" id="units" data-select2-id="select2-packing_details_units_1" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3">
																																	<option value="">Select</option>
																																	<?php

																																		$mst_unit = DB::select("select * from mst_unit");

																																		foreach($mst_unit as $mst_unit){
																																			$unit_description=$mst_unit->description;
																																			$unit_id=$mst_unit->id;
																																			$selected="";
																																			// if($perforation==$perforation_id)
																																			// {
																																			// 	$selected="selected='selected'";
																																			// }

																																			echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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



																									</div>
																								</div>

																								<?php

																								?>
																								<?php
																							}
																							?>
																						</div>
																					</div>
																				</div>



																				<div class="accordion-item">
																					<h2 class="accordion-header" id="cutting">
																						<button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cutting_body" aria-expanded="true" aria-controls="cutting_body">
																						Cutting
																						</button>
																					</h2>
																					<div id="cutting_body" class="accordion-collapse collapse" aria-labelledby="cutting" data-bs-parent="#accordionExample">
																						<div class="accordion-body">
																						<h3>Cutting</h3>
																							<!--begin::Row-->
																							<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																									<!--begin::Col-->
																									<div class="col">
																										<!--begin::Input group-->
																										<div class="fv-row mb-7">
																											<!--begin::Label-->
																											<label class="fs-6 fw-bold form-label mt-3">
																												<span >Width</span>
																												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Width."></i>
																											</label>
																											<!--end::Label-->
																											<!--begin::Input-->
																											<input type="text" class="form-control form-control-solid" name="cutting_width" id="cutting_width" value="<?php echo $cutting_width; ?>" />

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
																												<span >Width Unit</span>
																												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Width Unit."></i>
																											</label>
																											<!--end::Label-->
																											<div class="w-100">
																												<div class="form-floating border rounded">
																													<!--begin::Select2-->
																													<select name="cutting_width_unit" id="cutting_width_unit" aria-label="Select Width Unit" data-control="select2" data-placeholder="Select Width Unit..."  class="form-select form-select-solid lh-1 py-3">
																													<option value="">Select</option>
																													<?php

																														$mst_unit = DB::select("select * from mst_unit");

																														foreach($mst_unit as $mst_unit){
																															$unit_name=$mst_unit->description;
																															$unit_id=$mst_unit->id;
																															$selected="";
																															if($unit_id==$cutting_width_unit)
																															{
																																$selected="selected='selected'";
																															}



																															echo "<option $selected value='".$unit_id."'>$unit_name</option>";
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
																												<span >Length</span>
																												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Length."></i>
																											</label>
																											<!--end::Label-->
																											<!--begin::Input-->
																											<input type="text" class="form-control form-control-solid" name="cutting_length" id="cutting_length" value="<?php echo $cutting_length; ?>" />

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
																												<span >Length Unit</span>
																												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Length Unit."></i>
																											</label>
																											<!--end::Label-->
																											<div class="w-100">
																												<div class="form-floating border rounded">
																													<!--begin::Select2-->
																													<select name="cutting_length_unit" id="cutting_length_unit" aria-label="Select Length Unit" data-control="select2" data-placeholder="Select Length Unit..."  class="form-select form-select-solid lh-1 py-3">
																													<option value="">Select</option>
																													<?php

																														$mst_unit = DB::select("select * from mst_unit");

																														foreach($mst_unit as $mst_unit){
																															$unit_name=$mst_unit->description;
																															$unit_id=$mst_unit->id;
																															$selected="";
																															if($unit_id==$cutting_length_unit)
																															{
																																$selected="selected='selected'";
																															}



																															echo "<option $selected value='".$unit_id."'>$unit_name</option>";
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
																												<span>Core size(diameter)</span>
																												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Core size."></i>
																											</label>
																											<!--end::Label-->
																											<!--begin::Input-->
																											<input type="text" class="form-control form-control-solid" name="cutting_core_size" id="cutting_core_size" value="<?php echo $cutting_core_size; ?>" />

																											<!--end::Input-->
																										</div>
																										<!--end::Input group-->
																									</div>
																									<!--end::Col-->


																							</div>
																							<!--end::Row-->




																						</div>

																					</div>
																				</div>

																				<div class="accordion-item">
																					<h2 class="accordion-header" id="barcode">
																						<button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#barcode_body" aria-expanded="true" aria-controls="barcode_body">
																						Barcode
																						</button>
																					</h2>
																					<div id="barcode_body" class="accordion-collapse collapse" aria-labelledby="barcode" data-bs-parent="#accordionExample">
																						<div class="accordion-body">
																						<h3>Barcode</h3>
																							<!--begin::Row-->
																							<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																										<!--begin::Col-->
																										<div class="col">
																											<!--begin::Input group-->
																											<div class="fv-row mb-7">
																												<!--begin::Label-->
																												<label class="fs-6 fw-bold form-label mt-3">
																													<span>Type</span>
																													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Type."></i>
																												</label>
																												<!--end::Label-->
																												<!--begin::Input-->
																												<input type="text" class="form-control form-control-solid" name="barcode_type" id="barcode_type" value="<?php echo $barcode_type; ?>" />

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
																													<span>Height</span>
																													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Height."></i>
																												</label>
																												<!--end::Label-->
																												<!--begin::Input-->
																												<input type="text" class="form-control form-control-solid" name="barcode_height" id="barcode_height" value="<?php echo $barcode_height; ?>" />

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
																													<span>Width</span>
																													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Width."></i>
																												</label>
																												<!--end::Label-->
																												<!--begin::Input-->
																												<input type="text" class="form-control form-control-solid" name="barcode_width" id="barcode_width" value="<?php echo $barcode_width; ?>" />

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
																													<span >Orientation</span>
																													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Orientation."></i>
																												</label>
																												<!--end::Label-->
																												<div class="w-100">
																													<div class="form-floating border rounded">
																														<!--begin::Select2-->
																														<select name="barcode_orientation" id="barcode_orientation" aria-label="Select Orientation" data-control="select2" data-placeholder="Select Orientation..."  class="form-select form-select-solid lh-1 py-3">
																														<option value="">Select</option>
																														<?php

																															$tbl_barcode_orientation = DB::select("select * from tbl_barcode_orientation");

																															foreach($tbl_barcode_orientation as $tbl_barcode_orientation){
																																$barcode_orientation_name=$tbl_barcode_orientation->description;
																																$barcode_orientation_id=$tbl_barcode_orientation->id;
																																$selected="";
																																if($barcode_orientation_id==$barcode_orientation)
																																{
																																	$selected="selected='selected'";
																																}



																																echo "<option $selected value='".$barcode_orientation_id."'>$barcode_orientation_name</option>";
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
																													<span >human readable text to show?</span>
																													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select human readable text to show."></i>
																												</label>
																												<!--end::Label-->
																												<div class="w-100">
																													<div class="form-floating border rounded">
																														<!--begin::Select2-->
																														<select name="barcode_human_readable_text_to_show" id="barcode_human_readable_text_to_show" aria-label="Select human readable text to show" data-control="select2" data-placeholder="Select human readable text to show..."  class="form-select form-select-solid lh-1 py-3">
																														<option value="">Select</option>
																														<?php

																															$tbl_barcode_human_readable_text_to_show = DB::select("select * from tbl_barcode_human_readable_text_to_show");

																															foreach($tbl_barcode_human_readable_text_to_show as $tbl_barcode_human_readable_text_to_show){
																																$barcode_human_readable_text_to_show_name=$tbl_barcode_human_readable_text_to_show->description;
																																$barcode_human_readable_text_to_show_id=$tbl_barcode_human_readable_text_to_show->id;
																																$selected="";
																																if($barcode_human_readable_text_to_show_id==$barcode_human_readable_text_to_show)
																																{
																																	$selected="selected='selected'";
																																}



																																echo "<option $selected value='".$barcode_human_readable_text_to_show_id."'>$barcode_human_readable_text_to_show_name</option>";
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
																						</div>

																					</div>
																				</div>


																			</div>




																			<!--begin::Separator-->
																				<div class="separator mb-6"></div>
																			<!--end::Separator-->

																			<!--begin::Action buttons-->
																			<div class="d-flex justify-content-end">

																				<!--begin::Button-->
																				<button type="button" id="post_press_submit_btn" name="post_press_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="post_press_ajax_submit();">
																					<span class="indicator-label">Save & Continue</span>
																					<span class="indicator-progress">Please wait...
																					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																				</button>
																				<!--end::Button-->
																				<!--begin::Button-->
																				<button type="reset" id="cancel_btn" data-kt-contacts-type="cancel" class="cancel_btn btn btn-light me-3">Exit</button>
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
														<div class="tab-pane fade" id="process_selection_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">

																<form class="form" method="POST" enctype="multipart/form-data"  name="frm_process_selection"  id="frm_process_selection">

																	{{@csrf_field()}}

																	<input type="hidden" name="process_selection_edit_id" id="process_selection_edit_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">
																	<input type="hidden" name="process_selection_general_details_id" id="process_selection_general_details_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">

																	<h2>Pre Press</h2>
																	<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																		<?php
																		$job_card_process_selection_pre_press_j=1;
																		$job_card_process_selection_press_j=1;
	                                                                    $job_card_process_selection_post_press_j=1;

																		if($id=="0")
																		{
																		?>
																			<table id='widthtable' class='process_selection_pre_press_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																				<!-- <div class=""> -->
																				<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																				<div class="row"> -->
																					<tr>
																						<th>
																							Process
																						</th>
																						<th>
																							Basic Machine
																						</th>
																						<th>
																							Alternative Machine
																						</th>
																						<th>
																							QC
																						</th>
																						<th>
																							<div style="text-align:right"><a href="javascript:void(0);" class="add_process_selection_pre_press" title="Add field">Add</a></div>
																						</th>
																					</tr>
																					<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionprepress[prepress_id][1]" value="0"/>
																							<select name="processselectionprepress[process][1]" id="processselectionprepress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_process1" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='1'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									// if($product_category==$rm_product_category_id)
																									// {
																									// 	$selected="selected='selected'";
																									// }



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																							<select name="processselectionprepress[basicmachine][1]" id="processselectionprepress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_basicmachine1" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										// if($product_category==$rm_product_category_id)
																										// {
																										// 	$selected="selected='selected'";
																										// }



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																							<select name="processselectionprepress[alternativemachine][1]" id="processselectionprepress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_alternativemachine1" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$basicmachine_name=$tbl_machine_master->name;
																											$basicmachine_id=$tbl_machine_master->id;
																											$selected="";
																											// if($product_category==$rm_product_category_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionprepress[qc][1]" id="processselectionprepress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_qc1" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='1'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											// if($product_category==$qc_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>

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
																		<table id='widthtable' class='process_selection_pre_press_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																			<tr>
																						<th>
																							Process
																						</th>
																						<th>
																							Basic Machine
																						</th>
																						<th>
																							Alternative Machine
																						</th>
																						<th>
																							QC
																						</th>
																						<th>
																							<div style="text-align:right"><a href="javascript:void(0);" class="add_process_selection_pre_press" title="Add field">Add</a></div>
																						</th>
																					</tr>
																			<?php
																			//echo $id;
																			$tbl_job_card_process_selection_pre_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_pre_press where job_card_id='".$id."'");
																			//var_dump($tbl_job_card_process_selection_pre_press_count);
																			foreach($tbl_job_card_process_selection_pre_press_count as $tbl_job_card_process_selection_pre_press_count)
																			{
																				//var_dump($tbl_plants_count);die;
																				$process_selection_pre_press_count=$tbl_job_card_process_selection_pre_press_count->totalcount;
																			}

																			//echo $process_selection_pre_press_count;

																			if($process_selection_pre_press_count==0)
																			{
																				$job_card_process_selection_pre_press_j=1;

																				//echo $job_card_process_selection_pre_press_j;
																				?>
																				<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionprepress[prepress_id][1]" value="0"/>
																							<select name="processselectionprepress[process][1]" id="processselectionprepress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_process1" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='1'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									// if($product_category==$rm_product_category_id)
																									// {
																									// 	$selected="selected='selected'";
																									// }



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																							<select name="processselectionprepress[basicmachine][1]" id="processselectionprepress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_basicmachine1" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										// if($product_category==$rm_product_category_id)
																										// {
																										// 	$selected="selected='selected'";
																										// }



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																							<select name="processselectionprepress[alternativemachine][1]" id="processselectionprepress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_alternativemachine1" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$basicmachine_name=$tbl_machine_master->name;
																											$basicmachine_id=$tbl_machine_master->id;
																											$selected="";
																											// if($product_category==$rm_product_category_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionprepress[qc][1]" id="processselectionprepress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_qc1" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='1'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											// if($product_category==$qc_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>

																						</td>
																						<td>

																						</td>
																					</tr>
																				<?php
																			}

																			//echo "here there";

																			//var_dump($process_selection_pre_press_count);
																			$tbl_job_card_process_selection_pre_press = DB::select("select * from tbl_job_card_process_selection_pre_press where job_card_id='".$id."'");

																			//$job_card_process_selection_pre_press_j=0;

																			//echo $job_card_process_selection_pre_press_j;
																			foreach($tbl_job_card_process_selection_pre_press as $tbl_job_card_process_selection_pre_press)
																			{
																				//echo "kdfdshfjdshf";
																				//$job_card_process_selection_pre_press_j=0;
																				$job_card_process_selection_pre_press_j++;
																				//$pre_press_product_count++;
																				$process_selection_pre_press_id=$tbl_job_card_process_selection_pre_press->id;
																				$process_selection_pre_press_process=$tbl_job_card_process_selection_pre_press->process;
																				$process_selection_pre_press_basicmachine=$tbl_job_card_process_selection_pre_press->basicmachine;
																				$process_selection_pre_press_alternativemachine=$tbl_job_card_process_selection_pre_press->alternativemachine;
																				$process_selection_pre_press_qc=$tbl_job_card_process_selection_pre_press->qc;


																		?>

																					<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionprepress[prepress_id][<?php echo $job_card_process_selection_pre_press_j; ?>]" value="<?php echo $process_selection_pre_press_id; ?>"/>
																							<select name="processselectionprepress[process][<?php echo $job_card_process_selection_pre_press_j; ?>]" id="processselectionprepress[process][<?php echo $job_card_process_selection_pre_press_j; ?>]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-process<?php echo $job_card_process_selection_pre_press_j; ?>" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='1'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									if($process_selection_pre_press_process==$process_id)
																									{
																										$selected="selected='selected'";
																									}



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																						<select name="processselectionprepress[basicmachine][<?php echo $job_card_process_selection_pre_press_j; ?>]" id="processselectionprepress[basicmachine][<?php echo $job_card_process_selection_pre_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-basicmachine<?php echo $job_card_process_selection_pre_press_j; ?>" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										if($process_selection_pre_press_basicmachine==$basicmachine_id)
																										{
																											$selected="selected='selected'";
																										}



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																						<select name="processselectionprepress[alternativemachine][<?php echo $job_card_process_selection_pre_press_j; ?>]" id="processselectionprepress[alternativemachine][<?php echo $job_card_process_selection_pre_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-alternativemachine<?php echo $job_card_process_selection_pre_press_j; ?>" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$alternativemachine_name=$tbl_machine_master->name;
																											$alternativemachine_id=$tbl_machine_master->id;
																											$selected="";
																											if($process_selection_pre_press_alternativemachine==$alternativemachine_id)
																											{
																												$selected="selected='selected'";
																											}



																											echo "<option $selected value='".$alternativemachine_id."'>$alternativemachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionprepress[qc][<?php echo $job_card_process_selection_pre_press_j; ?>]" id="processselectionprepress[qc][<?php echo $job_card_process_selection_pre_press_j; ?>]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-qc<?php echo $job_card_process_selection_pre_press_j; ?>" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='1'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											if($process_selection_pre_press_qc==$qc_id)
																											{
																												$selected="selected='selected'";
																											}



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																							<?php
																							if($job_card_process_selection_pre_press_j==1)
																							{

																							}
																							else
																							{
																							?>
																								<a href="javascript:void(0);" class="remove_process_selection_pre_press" delete-id="<?php echo $process_selection_pre_press_id; ?>">Delete</a>
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

																			//echo $job_card_process_selection_pre_press_j;
																		}
																		?>
																		</table>
																	</div>

																	<!--begin::Separator-->
																	<div class="separator mb-6"></div>
																	<!--end::Separator-->

																	<h2>Press</h2>
																	<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																		<?php


																		if($id=="0")
																		{
																		?>
																			<table id='widthtable' class='process_selection_press_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																				<!-- <div class=""> -->
																				<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																				<div class="row"> -->
																					<tr>
																						<th>
																							Process
																						</th>
																						<th>
																							Basic Machine
																						</th>
																						<th>
																							Alternative Machine
																						</th>
																						<th>
																							QC
																						</th>
																						<th>
																							<div style="text-align:right"><a href="javascript:void(0);" class="add_process_selection_press" title="Add field">Add</a></div>
																						</th>
																					</tr>
																					<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpress[press_id][1]" value="0"/>
																							<select name="processselectionpress[process][1]" id="processselectionpress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_process" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='3'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									// if($product_category==$rm_product_category_id)
																									// {
																									// 	$selected="selected='selected'";
																									// }



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																							<select name="processselectionpress[basicmachine][1]" id="processselectionpress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_basicmachine" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										// if($product_category==$rm_product_category_id)
																										// {
																										// 	$selected="selected='selected'";
																										// }



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																							<select name="processselectionpress[alternativemachine][1]" id="processselectionpress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_alternativemachine" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$basicmachine_name=$tbl_machine_master->name;
																											$basicmachine_id=$tbl_machine_master->id;
																											$selected="";
																											// if($product_category==$rm_product_category_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionpress[qc][1]" id="processselectionpress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_qc" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='3'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											// if($product_category==$qc_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>

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
																		<table id='widthtable' class='process_selection_press_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																			<tr>
																						<th>
																							Process
																						</th>
																						<th>
																							Basic Machine
																						</th>
																						<th>
																							Alternative Machine
																						</th>
																						<th>
																							QC
																						</th>
																						<th>
																							<div style="text-align:right"><a href="javascript:void(0);" class="add_process_selection_press" title="Add field">Add</a></div>
																						</th>
																					</tr>
																			<?php
																			 //echo $id;
																			$tbl_job_card_process_selection_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_press where job_card_id='".$id."'");
																			//var_dump($tbl_job_card_process_selection_pre_press_count);
																			foreach($tbl_job_card_process_selection_press_count as $tbl_job_card_process_selection_press_count)
																			{
																				//var_dump($tbl_plants_count);die;
																				$process_selection_press_count=$tbl_job_card_process_selection_press_count->totalcount;
																			}

																			if($process_selection_press_count==0)
																			{
																				?>
																				<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpress[press_id][1]" value="0"/>
																							<select name="processselectionpress[process][1]" id="processselectionpress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_process" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='3'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									// if($product_category==$rm_product_category_id)
																									// {
																									// 	$selected="selected='selected'";
																									// }



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																							<select name="processselectionpress[basicmachine][1]" id="processselectionpress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_basicmachine" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										// if($product_category==$rm_product_category_id)
																										// {
																										// 	$selected="selected='selected'";
																										// }



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																							<select name="processselectionpress[alternativemachine][1]" id="processselectionpress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_alternativemachine" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$basicmachine_name=$tbl_machine_master->name;
																											$basicmachine_id=$tbl_machine_master->id;
																											$selected="";
																											// if($product_category==$rm_product_category_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionpress[qc][1]" id="processselectionpress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_qc" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='3'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											// if($product_category==$qc_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>

																						</td>
																						<td>

																						</td>
																					</tr>
																				<?php
																			}

																			//var_dump($process_selection_pre_press_count);
																			$tbl_job_card_process_selection_press = DB::select("select * from tbl_job_card_process_selection_press where job_card_id='".$id."'");
																			//var_dump($tbl_job_card_process_selection_press);
																			$job_card_process_selection_pre_press_j=0;
																			foreach($tbl_job_card_process_selection_press as $tbl_job_card_process_selection_press)
																			{
																				$job_card_process_selection_press_j++;
																				//$pre_press_product_count++;
																				$process_selection_press_id=$tbl_job_card_process_selection_press->id;
																				$process_selection_press_process=$tbl_job_card_process_selection_press->process;
																				$process_selection_press_basicmachine=$tbl_job_card_process_selection_press->basicmachine;
																				$process_selection_press_alternativemachine=$tbl_job_card_process_selection_press->alternativemachine;
																				$process_selection_press_qc=$tbl_job_card_process_selection_press->qc;


																		?>

																					<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpress[press_id][<?php echo $job_card_process_selection_press_j; ?>]" value="<?php echo $process_selection_press_id; ?>"/>
																							<select name="processselectionpress[process][<?php echo $job_card_process_selection_press_j; ?>]" id="processselectionpress[process][<?php echo $job_card_process_selection_press_j; ?>]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-press_process<?php echo $job_card_process_selection_press_j; ?>" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='3'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									if($process_selection_press_process==$process_id)
																									{
																										$selected="selected='selected'";
																									}



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																						<select name="processselectionpress[basicmachine][<?php echo $job_card_process_selection_press_j; ?>]" id="processselectionpress[basicmachine][<?php echo $job_card_process_selection_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-press_basicmachine<?php echo $job_card_process_selection_press_j; ?>" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										if($process_selection_press_basicmachine==$basicmachine_id)
																										{
																											$selected="selected='selected'";
																										}



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																						<select name="processselectionpress[alternativemachine][<?php echo $job_card_process_selection_press_j; ?>]" id="processselectionpress[alternativemachine][<?php echo $job_card_process_selection_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-press_alternativemachine<?php echo $job_card_process_selection_press_j; ?>" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$alternativemachine_name=$tbl_machine_master->name;
																											$alternativemachine_id=$tbl_machine_master->id;
																											$selected="";
																											if($process_selection_press_alternativemachine==$alternativemachine_id)
																											{
																												$selected="selected='selected'";
																											}



																											echo "<option $selected value='".$alternativemachine_id."'>$alternativemachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionpress[qc][<?php echo $job_card_process_selection_press_j; ?>]" id="processselectionpress[qc][<?php echo $job_card_process_selection_press_j; ?>]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-press_qc<?php echo $job_card_process_selection_press_j; ?>" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='3'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											if($process_selection_press_qc==$qc_id)
																											{
																												$selected="selected='selected'";
																											}



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																							<?php
																							if($job_card_process_selection_press_j==1)
																							{

																							}
																							else
																							{
																							?>
																								<a href="javascript:void(0);" class="remove_process_selection_press" delete-id="<?php echo $process_selection_press_id; ?>">Delete</a>
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

																	<h2>Post Press</h2>
																	<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																		<?php


																		if($id=="0")
																		{
																		?>
																			<table id='widthtable' class='process_selection_post_press_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																				<!-- <div class=""> -->
																				<!-- <div class="field_wrapper row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
																				<div class="row"> -->
																					<tr>
																						<th>
																							Process
																						</th>
																						<th>
																							Basic Machine
																						</th>
																						<th>
																							Alternative Machine
																						</th>
																						<th>
																							QC
																						</th>
																						<th>
																							<div style="text-align:right"><a href="javascript:void(0);" class="add_process_selection_post_press" title="Add field">Add</a></div>
																						</th>
																					</tr>
																					<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpostpress[post_press_id][1]" value="0"/>
																							<select name="processselectionpostpress[process][1]" id="processselectionpostpress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_process" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='2'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									// if($product_category==$rm_product_category_id)
																									// {
																									// 	$selected="selected='selected'";
																									// }



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																							<select name="processselectionpostpress[basicmachine][1]" id="processselectionpostpress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_basicmachine" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										// if($product_category==$rm_product_category_id)
																										// {
																										// 	$selected="selected='selected'";
																										// }



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																							<select name="processselectionpostpress[alternativemachine][1]" id="processselectionpostpress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_alternativemachine" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$basicmachine_name=$tbl_machine_master->name;
																											$basicmachine_id=$tbl_machine_master->id;
																											$selected="";
																											// if($product_category==$rm_product_category_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionpostpress[qc][1]" id="processselectionpostpress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_qc" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='2'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											// if($product_category==$qc_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>

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
																		<table id='widthtable' class='process_selection_post_press_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
																			<tr>
																						<th>
																							Process
																						</th>
																						<th>
																							Basic Machine
																						</th>
																						<th>
																							Alternative Machine
																						</th>
																						<th>
																							QC
																						</th>
																						<th>
																							<div style="text-align:right"><a href="javascript:void(0);" class="add_process_selection_post_press" title="Add field">Add</a></div>
																						</th>
																					</tr>
																			<?php
																			//echo $id;
																			$tbl_job_card_process_selection_post_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_post_press where job_card_id='".$id."'");
																			//var_dump($tbl_job_card_process_selection_pre_press_count);
																			foreach($tbl_job_card_process_selection_post_press_count as $tbl_job_card_process_selection_post_press_count)
																			{
																				//var_dump($tbl_plants_count);die;
																				$process_selection_post_press_count=$tbl_job_card_process_selection_post_press_count->totalcount;
																			}

																			if($process_selection_post_press_count==0)
																			{
																				?>
																				<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpostpress[post_press_id][1]" value="0"/>
																							<select name="processselectionpostpress[process][1]" id="processselectionpostpress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_process" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='2'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									// if($product_category==$rm_product_category_id)
																									// {
																									// 	$selected="selected='selected'";
																									// }



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																							<select name="processselectionpostpress[basicmachine][1]" id="processselectionpostpress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_basicmachine" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										// if($product_category==$rm_product_category_id)
																										// {
																										// 	$selected="selected='selected'";
																										// }



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																							<select name="processselectionpostpress[alternativemachine][1]" id="processselectionpostpress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_alternativemachine" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$basicmachine_name=$tbl_machine_master->name;
																											$basicmachine_id=$tbl_machine_master->id;
																											$selected="";
																											// if($product_category==$rm_product_category_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionpostpress[qc][1]" id="processselectionpostpress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_qc" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='2'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											// if($product_category==$qc_id)
																											// {
																											// 	$selected="selected='selected'";
																											// }



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>

																						</td>
																						<td>

																						</td>
																					</tr>
																				<?php
																			}

																			//var_dump($process_selection_pre_press_count);
																			$tbl_job_card_process_selection_post_press = DB::select("select * from tbl_job_card_process_selection_post_press where job_card_id='".$id."'");

																			$job_card_process_selection_post_press_j=0;
																			foreach($tbl_job_card_process_selection_post_press as $tbl_job_card_process_selection_post_press)
																			{
																				$job_card_process_selection_post_press_j++;
																				//$pre_press_product_count++;
																				$process_selection_post_press_id=$tbl_job_card_process_selection_post_press->id;
																				$process_selection_post_press_process=$tbl_job_card_process_selection_post_press->process;
																				$process_selection_post_press_basicmachine=$tbl_job_card_process_selection_post_press->basicmachine;
																				$process_selection_post_press_alternativemachine=$tbl_job_card_process_selection_post_press->alternativemachine;
																				$process_selection_post_press_qc=$tbl_job_card_process_selection_post_press->qc;


																		?>

																					<tr>
																						<td>
																							<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpostpress[post_press_id][<?php echo $job_card_process_selection_post_press_j; ?>]" value="<?php echo $process_selection_post_press_id; ?>"/>
																							<select name="processselectionpostpress[process][<?php echo $job_card_process_selection_post_press_j; ?>]" id="processselectionpostpress[process][<?php echo $job_card_process_selection_post_press_j; ?>]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_process<?php echo $process_selection_post_press_id; ?>" tabindex="-1" aria-hidden="true">
																							<option value="">Select</option>
																							<?php

																								$tbl_process_master = DB::select("select * from tbl_process_master where category='2'");

																								foreach($tbl_process_master as $tbl_process_master){
																									$process_name=$tbl_process_master->name;
																									$process_id=$tbl_process_master->id;
																									$selected="";
																									if($process_selection_post_press_process==$process_id)
																									{
																										$selected="selected='selected'";
																									}



																									echo "<option $selected value='".$process_id."'>$process_name</option>";
																								}
																							?>

																							</select>
																						</td>
																						<td>
																						<select name="processselectionpostpress[basicmachine][<?php echo $job_card_process_selection_post_press_j; ?>]" id="processselectionpostpress[basicmachine][<?php echo $job_card_process_selection_post_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_basicmachine<?php echo $process_selection_post_press_id; ?>" tabindex="-1" aria-hidden="true">
																								<option value="">Select</option>
																								<?php

																									$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																									foreach($tbl_machine_master as $tbl_machine_master){
																										$basicmachine_name=$tbl_machine_master->name;
																										$basicmachine_id=$tbl_machine_master->id;
																										$selected="";
																										if($process_selection_post_press_basicmachine==$basicmachine_id)
																										{
																											$selected="selected='selected'";
																										}



																										echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																									}
																								?>
																							</select>
																						</td>
																						<td>
																						<select name="processselectionpostpress[alternativemachine][<?php echo $job_card_process_selection_post_press_j; ?>]" id="processselectionpostpress[alternativemachine][<?php echo $job_card_process_selection_post_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_alternativemachine<?php echo $process_selection_post_press_id; ?>" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																										foreach($tbl_machine_master as $tbl_machine_master){
																											$alternativemachine_name=$tbl_machine_master->name;
																											$alternativemachine_id=$tbl_machine_master->id;
																											$selected="";
																											if($process_selection_post_press_alternativemachine==$alternativemachine_id)
																											{
																												$selected="selected='selected'";
																											}



																											echo "<option $selected value='".$alternativemachine_id."'>$alternativemachine_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																						<select name="processselectionpostpress[qc][<?php echo $job_card_process_selection_post_press_j; ?>]" id="processselectionpostpress[qc][<?php echo $job_card_process_selection_post_press_j; ?>]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_qc<?php echo $process_selection_post_press_id; ?>" tabindex="-1" aria-hidden="true">
																									<option value="">Select</option>
																									<?php

																										$mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='2'");

																										foreach($mst_qc as $mst_qc){
																											$qc_name=$mst_qc->name;
																											$qc_id=$mst_qc->id;
																											$selected="";
																											if($process_selection_post_press_qc==$qc_id)
																											{
																												$selected="selected='selected'";
																											}



																											echo "<option $selected value='".$qc_id."'>$qc_name</option>";
																										}
																									?>
																								</select>
																						</td>
																						<td>
																							<?php
																							if($job_card_process_selection_post_press_j==1)
																							{

																							}
																							else
																							{
																							?>
																								<a href="javascript:void(0);" class="remove_process_selection_post_press" delete-id="<?php echo $process_selection_post_press_id; ?>">Delete</a>
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
																		<button type="button" id="process_selection_btn" name="process_selection_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="process_selection_ajax_submit();">
																			<span class="indicator-label">Save & Continue</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="reset" id="cancel_btn"  data-kt-contacts-type="cancel" class="cancel_btn btn btn-light me-3">Exit</button>
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
														<div class="tab-pane fade" id="material_requirement_tab" role="tabpanel">
															<!--begin::Card-->
															<div class="card pt-4 mb-6 mb-xl-9">

																<!--begin::Card body-->
																<div class="card-body py-0">
																	<form class="form" method="POST" enctype="multipart/form-data"  name="frm_material_requirement"  id="frm_material_requirement">

																		{{@csrf_field()}}

																		<input type="hidden" name="material_requirement_edit_id" id="material_requirement_edit_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">
																		<input type="hidden" name="material_requirement_general_details_id" id="material_requirement_general_details_id" class="form-control input-sm" autocomplete="off" value="{{$id}}">

																		<div style="text-align:right;margin-bottom:15px">
																				<a href="javascript:void(0);" class="add_material_requirement" title="Add Material Requirement">Add</a>
																		</div>

																		<?php
																		$tbl_job_card_material_requirement_count=1;
																		if($id=="0")
																		{
																		?>
																			<div class="material_requirement_wrapper" style="padding-top:30px">
																				<div class="material_requirement">

																					<!--begin::Row-->
																					<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">


																						<!--begin::Col-->
																						<div class="col" style="width:30% !important;">
																							<input type="hidden" name="material_requirement[material_requirement_id][1]" value="0">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span>RM Category</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Category."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="material_requirement[rm_category][1]" id="material_requirement[rm_category][1]" aria-label="Select RM Category" data-control="select2" data-placeholder="Select RM Category..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$tbl_rm_category = DB::select("select * from tbl_rm_category");

																													foreach($tbl_rm_category as $tbl_rm_category){
																														$rm_category_name=$tbl_rm_category->name;
																														$rm_category_id=$tbl_rm_category->id;
																														$selected="";
																														// if($perforation==$perforation_id)
																														// {
																														// 	$selected="selected='selected'";
																														// }

																														echo "<option $selected value='".$rm_category_id."'>$rm_category_name</option>";
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
																						<div class="col" style="width:30% !important;">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span>Type</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Type."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="material_requirement[type][1]" id="material_requirement[type][1]" aria-label="Select Type" data-control="select2" data-placeholder="Select Type..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$tbl_rm_product_category = DB::select("select * from tbl_rm_product_category");

																													foreach($tbl_rm_product_category as $tbl_rm_product_category){
																														$rm_product_category_name=$tbl_rm_product_category->name;
																														$rm_product_category_id=$tbl_rm_product_category->id;
																														$selected="";
																														// if($perforation==$perforation_id)
																														// {
																														// 	$selected="selected='selected'";
																														// }

																														echo "<option $selected value='".$rm_product_category_id."'>$rm_product_category_name</option>";
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
																						<div class="col" style="width:30% !important;">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span>RM Item</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Item."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="material_requirement[rm_item][1]" id="material_requirement[rm_item][1]" aria-label="Select RM Item" data-control="select2" data-placeholder="Select RM Item..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$tbl_material = DB::select("select * from tbl_material");

																													foreach($tbl_material as $tbl_material){
																														$material_name=$tbl_material->name;
                                                                                                                        $material_name = str_replace('"', '\"', $material_name);
																														$material_id=$tbl_material->id;
																														$selected="";
																														// if($perforation==$perforation_id)
																														// {
																														// 	$selected="selected='selected'";
																														// }

																														echo "<option $selected value='".$material_id."'>$material_name</option>";
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
																						<div class="col" style="width:30% !important;">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Quantity</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Quantity."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->

																								<input type="text" class="form-control form-control-solid" name="material_requirement[quantity][1]" id="material_requirement[quantity][1]" value="">
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->



																						<!--begin::Col-->
																						<div class="col" style="width:30% !important;">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span>Units</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>
																									</label>
																									<!--end::Label-->
																									<div class="w-100">
																										<div class="form-floating border rounded">
																											<!--begin::Select2-->
																											<select name="material_requirement[units][1]" id="material_requirement[units][1]" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3">
																												<option value="">Select</option>
																												<?php

																													$mst_unit = DB::select("select * from mst_unit");

																													foreach($mst_unit as $mst_unit){
																														$unit_description=$mst_unit->description;
																														$unit_id=$mst_unit->id;
																														$selected="";
																														// if($perforation==$perforation_id)
																														// {
																														// 	$selected="selected='selected'";
																														// }

																														echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
																						<div class="col" style="width:30% !important;">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Wastage allowed</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Wastage allowed."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->

																								<input type="text" class="form-control form-control-solid" name="material_requirement[wastage_allowed][1]" id="wastage_allowed" value="">
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
																						<div class="col" style="width:30% !important;">
																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="fs-6 fw-bold form-label mt-3">
																									<span>Pcs</span>
																									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Pcs."></i>
																								</label>
																								<!--end::Label-->
																								<!--begin::Input-->

																								<input type="text" class="form-control form-control-solid" name="material_requirement[pcs][1]" id="material_requirement[pcs][1]" value="">
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																						</div>
																						<!--end::Col-->





																					</div>
																					<!--end::Row-->

																				</div>
																			</div>
																		<?php
																		}
																		else
																		{

																			//echo $id;
																			//echo "<br/>";
																			?>
																			<table id='material_requirement_data_tbl' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border:1px solid;padding-left:15px;'>
																				<tr>
																					<th>ID</th>
																					<th>RM Category</th>
																					<th>Type</th>
																					<th>RM Item</th>
																					<th>Quantity</th>
																					<th>Units</th>
																					<th>Wastage allowed</th>
																					<th>Pcs</th>
																					<th>Edit</th>
																					<th style='padding-right:10px'>Delete</th>
																				</tr>

																				<?php
																				$job_card_paper_count=0;

																				//echo "select count(*) as totalcount from tbl_job_card_material_requirement where job_card_id='".$id."'";
																				//echo "<br/>";
																				$tbl_job_card_paper_count = DB::select("select count(*) as totalcount from tbl_job_card_material_requirement where job_card_id='".$id."'");
																				//var_dump($tbl_job_card_paper_count);
																				foreach($tbl_job_card_paper_count as $tbl_job_card_paper_count)
																				{
																					//var_dump($tbl_job_card_paper_count);
																					$job_card_paper_count=$tbl_job_card_paper_count->totalcount;
																				}

																				if($job_card_paper_count==0)
																				{
																				?>
																					<tr>
																						<td colspan="10" style="text-align:center">No data available</td>
																					</tr>
																				<?php
																				}
																				else
																				{

																					$tbl_job_card_material_requirement = DB::select("select * from tbl_job_card_material_requirement where job_card_id='".$id."'");

																					//$k=0;
																					foreach($tbl_job_card_material_requirement as $tbl_job_card_material_requirement)
																					{
																						//$k++;
																						//$neft_count++;
																						$material_requirement_id=$tbl_job_card_material_requirement->id;
																						$rm_category=$tbl_job_card_material_requirement->rm_category;
																						$type=$tbl_job_card_material_requirement->type;
																						$rm_item=$tbl_job_card_material_requirement->rm_item;
																						$quantity=$tbl_job_card_material_requirement->quantity;
																						$units=$tbl_job_card_material_requirement->units;
																						$wastage_allowed=$tbl_job_card_material_requirement->wastage_allowed;
																						$pcs=$tbl_job_card_material_requirement->pcs;

																						$tbl_rm_category   = DB::select("select * from tbl_rm_category where id='".$rm_category."'");

																						$rm_category_name="";
																						foreach($tbl_rm_category as $tbl_rm_category)
																						{
																							$rm_category_name=$tbl_rm_category->name;
																						}



																						$tbl_rm_product_category   = DB::select("select * from tbl_rm_product_category where id='".$type."'");

																						$type_name="";
																						foreach($tbl_rm_product_category as $tbl_rm_product_category)
																						{
																							$type_name=$tbl_rm_product_category->name;
																						}




																						$tbl_material   = DB::select("select * from tbl_material where id='".$rm_item."'");

																						$rm_item_name="";
																						foreach($tbl_material as $tbl_material)
																						{
																							$rm_item_name=$tbl_material->name;
																						}




																						$mst_unit   = DB::select("select * from mst_unit where id='".$units."'");

																						$units_name="";
																						foreach($mst_unit as $mst_unit)
																						{
																							$units_name=$mst_unit->description;
																						}





																						?>
																						<tr>
																						<td><?php echo $material_requirement_id; ?></td>
																						<td><?php echo $rm_category_name; ?></td>
																						<td><?php echo $type_name; ?></td>
																						<td><?php echo $rm_item_name; ?></td>
																						<td><?php echo $quantity; ?></td>
																						<td><?php echo $units_name; ?></td>
																						<td><?php echo $wastage_allowed; ?></td>
																						<td><?php echo $pcs; ?></td>
																						<td><a href=""><a href="javascript:void(0);" class="edit_material_requirement" edit-id="<?php echo $material_requirement_id; ?>">Edit</a></a></td>
																						<td><a href="javascript:void(0);" class="remove_material_requirement" delete-id="<?php echo $material_requirement_id; ?>">Delete</a></td>
																						</tr>
																						<?php
																					}

																				}


																				?>


																			</table>
																			<?php
																			$tbl_job_card_material_requirement_count = DB::select("select count(*) as totalcount from tbl_job_card_material_requirement where job_card_id='".$id."'");
																			foreach($tbl_job_card_material_requirement_count as $tbl_job_card_material_requirement_count)
																			{
																				//var_dump($tbl_plants_count);die;
																				$tbl_job_card_material_requirement_count=$tbl_job_card_material_requirement_count->totalcount;
																			}

																			if($tbl_job_card_material_requirement_count==0)
																			{
																				$tbl_job_card_material_requirement_count=1;
																			}

																			//echo $tbl_job_card_paper_count;die;
																			?>

																				<div class="material_requirement_wrapper" style="padding-top:30px">
																					<div class="material_requirement">

																						<!--begin::Row-->
																						<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">


																							<!--begin::Col-->
																							<div class="col" style="width:30% !important;">
																								<input type="hidden" name="material_requirement[material_requirement_id][1]" value="0">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span>RM Category</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Category."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="material_requirement[rm_category][1]" id="rm_category" aria-label="Select RM Category" data-control="select2" data-placeholder="Select RM Category..."  class="form-select form-select-solid lh-1 py-3">
																													<option value="">Select</option>
																													<?php

																														$tbl_rm_category = DB::select("select * from tbl_rm_category");

																														foreach($tbl_rm_category as $tbl_rm_category){
																															$rm_category_name=$tbl_rm_category->name;
																															$rm_category_id=$tbl_rm_category->id;
																															$selected="";
																															// if($perforation==$perforation_id)
																															// {
																															// 	$selected="selected='selected'";
																															// }

																															echo "<option $selected value='".$rm_category_id."'>$rm_category_name</option>";
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
																							<div class="col" style="width:30% !important;">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span>Type</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Type."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="material_requirement[type][1]" id="type" aria-label="Select Type" data-control="select2" data-placeholder="Select Type..."  class="form-select form-select-solid lh-1 py-3">
																													<option value="">Select</option>
																													<?php

																														$tbl_rm_product_category = DB::select("select * from tbl_rm_product_category");

																														foreach($tbl_rm_product_category as $tbl_rm_product_category){
																															$rm_product_category_name=$tbl_rm_product_category->name;
																															$rm_product_category_id=$tbl_rm_product_category->id;
																															$selected="";
																															// if($perforation==$perforation_id)
																															// {
																															// 	$selected="selected='selected'";
																															// }

																															echo "<option $selected value='".$rm_product_category_id."'>$rm_product_category_name</option>";
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
																							<div class="col" style="width:30% !important;">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span>RM Item</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Item."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="material_requirement[rm_item][1]" id="rm_item" aria-label="Select RM Item" data-control="select2" data-placeholder="Select RM Item..."  class="form-select form-select-solid lh-1 py-3">
																													<option value="">Select</option>
																													<?php

																														$tbl_material = DB::select("select * from tbl_material");

																														foreach($tbl_material as $tbl_material){
																															$material_name=$tbl_material->name;
                                                                                                                            $material_name = str_replace('"', '\"', $material_name);
																															$material_id=$tbl_material->id;
																															$selected="";
																															// if($perforation==$perforation_id)
																															// {
																															// 	$selected="selected='selected'";
																															// }

																															echo "<option $selected value='".$material_id."'>$material_name</option>";
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
																							<div class="col" style="width:30% !important;">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span>Quantity</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Quantity."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->

																									<input type="text" class="form-control form-control-solid" name="material_requirement[quantity][1]" id="quantity" value="">
																									<!--end::Input-->
																								</div>
																								<!--end::Input group-->
																							</div>
																							<!--end::Col-->



																							<!--begin::Col-->
																							<div class="col" style="width:30% !important;">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																										<!--begin::Label-->
																										<label class="fs-6 fw-bold form-label mt-3">
																											<span>Units</span>
																											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>
																										</label>
																										<!--end::Label-->
																										<div class="w-100">
																											<div class="form-floating border rounded">
																												<!--begin::Select2-->
																												<select name="material_requirement[units][1]" id="units" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3">
																													<option value="">Select</option>
																													<?php

																														$mst_unit = DB::select("select * from mst_unit");

																														foreach($mst_unit as $mst_unit){
																															$unit_description=$mst_unit->description;
																															$unit_id=$mst_unit->id;
																															$selected="";
																															// if($perforation==$perforation_id)
																															// {
																															// 	$selected="selected='selected'";
																															// }

																															echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
																							<div class="col" style="width:30% !important;">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span>Wastage allowed</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Wastage allowed."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->

																									<input type="text" class="form-control form-control-solid" name="material_requirement[wastage_allowed][1]" id="wastage_allowed" value="">
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
																							<div class="col" style="width:30% !important;">
																								<!--begin::Input group-->
																								<div class="fv-row mb-7">
																									<!--begin::Label-->
																									<label class="fs-6 fw-bold form-label mt-3">
																										<span>Pcs</span>
																										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Pcs."></i>
																									</label>
																									<!--end::Label-->
																									<!--begin::Input-->

																									<input type="text" class="form-control form-control-solid" name="material_requirement[pcs][1]" id="pcs" value="">
																									<!--end::Input-->
																								</div>
																								<!--end::Input group-->
																							</div>
																							<!--end::Col-->





																						</div>
																						<!--end::Row-->

																					</div>
																				</div>


																			<?php
																		}
																		?>

																		<!--begin::Separator-->
																	<div class="separator mb-6"></div>
																	<!--end::Separator-->

																	<!--begin::Action buttons-->
																	<div class="d-flex justify-content-end">

																		<!--begin::Button-->
                                                                        <button type="button" id="material_requirement_submit_btn" name="material_requirement_submit_btn" data-kt-contacts-type="submit" class="btn btn-info" onclick="material_requirement_ajax_submit1();" style="margin-right: 2%">
																			<span class="indicator-label">Save and Continue</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																		<button type="button" id="material_requirement_submit_btn" name="material_requirement_submit_btn" data-kt-contacts-type="submit" class="btn btn-primary" onclick="material_requirement_ajax_submit();">
																			<span class="indicator-label">Save</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																		<!--end::Button-->
																		<!--begin::Button-->
																		<button type="reset" id="cancel_btn"  data-kt-contacts-type="cancel" class="cancel_btn btn btn-light me-3">Exit</button>
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
		var frm_pre_press = $('#frm_pre_press');
		var frm_post_press = $('#frm_post_press');
		var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);




		$("#product_category").change(function()
		{
			var selected_product_category = $("#product_category option:selected").val();
			var selected_product_category_text=$("#product_category option:selected").text();


			var edit_id=$("#edit_id").val();
			if(edit_id=="0")
			{
				$('#product_type').val(null).trigger('change');
				$('#product_type').empty();
				$("#product_type").append("<option value=''>SELECT</option>");

				$.ajax({
						type: "GET",
						data: "selected_product_category="+selected_product_category,
						url: "{{ URL::to('ajax_populate_product_type') }}",
						success: function (response_json)
						{
							var response= JSON.parse(response_json);
							//alert(response);
							$("#product_type").select2({
													data: response.results
												});

						}
				});
			}
			else
			{

			}
		});


		$(document).ready(function() {


			$('.js-example-basic-multiple').select2();



			var tab="<?php echo $tab; ?>";
			//alert(tab);
			if(tab=="general")
			{
				document.getElementById('general_link').click();
			}
			else if(tab=="press")
			{
				document.getElementById('press_link').click();
			}
			else if(tab=="specific")
			{
				document.getElementById('specific_link').click();
			}
			else if(tab=="prepress")
			{
				document.getElementById('pre_press_link').click();
			}
			else if(tab=="postpress")
			{
				document.getElementById('post_press_link').click();
			}
			else if(tab=="processselection")
			{
				document.getElementById('process_selection_link').click();
			}
			else if(tab=="materialrequirement")
			{
				document.getElementById('material_requirement_link').click();
			}
			else
			{
				document.getElementById('general_link').click();
			}

			// $('button').on('click', function(){
			// 	aler("here");
			// 	// //check if the button not have class collapsed
			// 	// if (!$(this).hasClass("collapsed")) {
			// 	// 	//get another button data-target and show that(use .first() if needed has more then 2 button)
			// 	// 	//console.log($(".btn-link").not(this).data('target'))
			// 	// 	$($(".accordion-button").not(this).data('target')).collapse('show')
			// 	// }
			// });

			$("input[id='img']").on('change', function (e) {
					//alert("here");
                    var tmppath = URL.createObjectURL(e.target.files[0]);
                    //alert(tmppath);
                    //var fileName = e.target.files[0].mozFullPath;
                    //alert('The file "' + fileName +  '" has been selected.');
                    $("#avatar_image").attr("src",tmppath);
                });


			var edit_id=$("#edit_id").val();
			var maxField = 1000; //Input fields increment limitation
			var add_position = $('.add_position'); //Add button selector
			var add_color = $('.add_color'); //Add button selector
			var add_press_coating_details = $('.add_press_coating_details'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var neft_wrapper = $('.neft_field_wrapper'); //Input field wrapper
			var color_wrapper = $('.color_field_wrapper'); //Input field wrapper
			var press_coating_details_wrapper = $('.press_coating_details_wrapper'); //Input field wrapper

			//var wrapper = $('.field_wrapper'); //Input field wrapper
			// <td><a href="javascript:void(0);" class="remove_button">Delete</a></td>
			if(edit_id==0)
			{

				$("#specific_details_submit_btn").attr('disabled','disabled');
				$("#pre_press_submit_btn").attr('disabled','disabled');
				$("#press_submit_btn").attr('disabled','disabled');
				$("#post_press_submit_btn").attr('disabled','disabled');
				$("#process_selection_btn").attr('disabled','disabled');
				//$("#pre_press_submit_btn").attr('disabled','disabled');

				var x = 1; //Initial field counter is 1
				var neft_x=1;
				var position_x=1;
				var paper_x=1;
				var color_x=1;
				var press_coating_details_x=1;
				var press_spare_to_use_x=1;
				var packaging_details_x=1;

				var process_selection_pre_press_x=1;
				var process_selection_press_x=1;
				var process_selection_post_press_x=1;
				var material_requirement_x=1;


				//alert("here");
				//$('#neft_link').click(function () {return false;});
				//$('#neft_link').attr("disabled","disabled");
			}
			else
			{
				$("#specific_details_btn_save_cont").removeAttr('disabled');

				$("#specific_details_btn_save_cont").click(function(){

					document.getElementById('pre_press_link').click();
				});

				$("#specific_details_submit_btn").removeAttr('disabled');
				$("#pre_press_submit_btn").removeAttr('disabled');
				$("#press_submit_btn").removeAttr('disabled');
				$("#post_press_submit_btn").removeAttr('disabled');
				$("#process_selection_btn").removeAttr('disabled');

				var position_x=<?php echo $job_card_position_count; ?>;
				var paper_x=<?php echo $job_card_paper_count; ?>;
				var color_x=<?php echo $pre_press_color_j; ?>;
				var press_coating_details_x=<?php echo $press_coating_details_j; ?>;
				var press_spare_to_use_x=<?php echo $press_spare_to_use_j; ?>;
				var packaging_details_x=<?php echo $packaging_details_count; ?>;
				var process_selection_pre_press_x=<?php echo $job_card_process_selection_pre_press_j; ?>;
				//alert(process_selection_pre_press_x);
				var process_selection_press_x=<?php echo $job_card_process_selection_press_j; ?>;
				var process_selection_post_press_x=<?php echo $job_card_process_selection_post_press_j; ?>;
				var material_requirement_x=<?php echo $tbl_job_card_material_requirement_count; ?>;



			}

			$(add_position).click(function(){


				//Check maximum number of input fields
				if(position_x < maxField){
					position_x++; //Increment field counter

					//alert(position_x);

					var fieldHTML= '<tr>';
				    fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="hidden" name="position[position_id]['+position_x+']" value="0"/>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="text" name="position[position_name]['+position_x+']" value=""/>';


					 fieldHTML+='</td>';
					 fieldHTML+='<td>';
					 	fieldHTML+='<select name="position[direction]['+position_x+']"  aria-label="Select a direction" data-control="select2" data-placeholder="Select a direction ..." class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_direction = DB::select("select * from tbl_direction");
							$tbl_direction_option="";
							foreach($tbl_direction as $tbl_direction)
							{
								$direction_id=$tbl_direction->id;
								$direction_description=$tbl_direction->description;
								$tbl_direction_option.="<option value='".$direction_id."'>$direction_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_direction_option ?>";
						fieldHTML+='</select>';
					 fieldHTML+='</td>';


					 fieldHTML+='<td>';
					 fieldHTML+='<a href="javascript:void(0);" class="remove_position" delete-id="0">Delete</a>';
					 fieldHTML+='</td>';
					 fieldHTML+='</tr>';

					 //alert("here there");

					$('.position_wrapper').append(fieldHTML); //Add field html
					$('.js-example-basic-multiple').select2();
				}
			});


			$(".add_paper").click(function(){

				//Check maximum number of input fields
				if(paper_x < maxField){
					//alert(paper_x);
					paper_x++; //Increment field counter
					//alert(paper_x);
					//alert($("#part_ply").val());
					if(edit_id==0)
					{
						$("#part_ply").val(paper_x);
						part_ply=paper_x;
					}
					else
					{
						//alert("here");
						part_ply=parseInt($("#part_ply").val())+1;
						$("#part_ply").val(part_ply);
					}

					var newOption = new Option(part_ply, part_ply);
					$('#gumming_between').append(newOption).trigger('change');

					var newOption1 = new Option(part_ply, part_ply);
					$('#hotspot_carbon_behind_ply_no').append(newOption1).trigger('change');

					var newOption2 = new Option(part_ply, part_ply);
					$('#collating_between_ply').append(newOption2).trigger('change');




					// for (var i = 1; i < paper_x; i++)
					// {
					// 	alert(i);
					// 	// var selector = '' + i;
					// 	// if (selector.length == 1)
					// 	// 	selector = '0' + selector;
					// 	// selector = '#event' + selector;
					// 	// array.push($(selector, response).html());

					// 	if ($('#gumming_between').find("option[value='" + i + "']").length)
					// 	{
					// 		//$('#gumming_between').val(i).trigger('change');
					// 	}
					// 	else
					// 	{
					// 		// Create a DOM Option and pre-select by default
					// 		var newOption = new Option(i, i);
					// 		//var newOption = new Option(i, i, true, true);
					// 		// Append it to the select
					// 		$('#gumming_between').append(newOption).trigger('change');
					// 		//$('#hotspot_carbon_behind_ply_no').append(newOption).trigger('change');
					// 	}

					// 	if ($('#hotspot_carbon_behind_ply_no').find("option[value='" + i + "']").length)
					// 	{
					// 		//$('#gumming_between').val(i).trigger('change');
					// 	}
					// 	else
					// 	{
					// 		// Create a DOM Option and pre-select by default
					// 		var newOption = new Option(i, i);
					// 		//var newOption = new Option(i, i, true, true);
					// 		// Append it to the select
					// 		$('#hotspot_carbon_behind_ply_no').append(newOption).trigger('change');
					// 		//$('#hotspot_carbon_behind_ply_no').append(newOption).trigger('change');
					// 	}
					// }




					var neft_fieldHTML= '<div class="paper">';
					neft_fieldHTML+='<div class="separator mx-1 my-4"></div>';
					//neft_fieldHTML+='<input type="hidden" name="neft[neft_id]['+neft_x+']" value="0">';

					neft_fieldHTML+='<div style="text-align:right"><a  href="javascript:void(0);" class="remove_paper" delete-id="0">Delete</a></div>';

					//start

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//paper thick
					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Paper Thick (GSM)</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper thick."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="hidden" name="paper[paper_id]['+paper_x+']" value="0">';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="paper[paper_thick]['+paper_x+']" id="paper[paper_thick]['+paper_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';

					 //paper width
					 neft_fieldHTML += '<div class="col" style="width:30% !important;">';
                    neft_fieldHTML += '<div class="fv-row mb-7">';
                    neft_fieldHTML += '<label class="fs-6 fw-bold form-label mt-3">';
                    neft_fieldHTML += '<span>Paper Width</span>';
                    neft_fieldHTML +=
                        '<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper width."></i>';
                    neft_fieldHTML += '</label>';
                    neft_fieldHTML += '<input type="hidden" name="paper[paper_id][' + paper_x +
                        ']" value="0">';
                    neft_fieldHTML +=
                        '<input type="text" class="form-control form-control-solid" name="paper[paper_width][' +
                        paper_x + ']" id="paper[paper_width][' + paper_x + ']" value="">';
                    neft_fieldHTML += '</div>';
                    neft_fieldHTML += '</div>';

                    //paper unit

                    neft_fieldHTML += '<div class="col" style="width:30% !important;">';

                    neft_fieldHTML += '<div class="fv-row mb-7">';
                    neft_fieldHTML += '<label class="fs-6 fw-bold form-label mt-3">';
                    neft_fieldHTML += '<span>Paper unit</span>';
                    neft_fieldHTML +=
                        '<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select paper unit."></i>';
                    neft_fieldHTML += '</label>';
                    neft_fieldHTML += '<select name="paper[unit][' + paper_x +
                        ']" id="paper[unit][' + paper_x +
                        ']" aria-label="Select paper unit" data-control="select2" data-placeholder="Select paper unit..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
                    neft_fieldHTML += '<option value="">Select</option>';
                    <?php
                    $mst_unit = DB::select('select * from mst_unit');
                    $mst_unit_option  = '';
                    foreach ($mst_unit as $mst_unit) {
                        $mst_unit_id = $mst_unit->id;
                        $mst_unit_description = $mst_unit->description;
                        $mst_unit_option .= "<option value='" . $mst_unit_id . "'>$mst_unit_description</option>";
                    }
                    ?>
                    neft_fieldHTML += "<?php echo $mst_unit_option; ?>";
                    neft_fieldHTML += '</select>';
                    neft_fieldHTML += '</div>';

                    neft_fieldHTML += '</div>';


					//paper make

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Paper Make</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select paper make."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="paper[paper_make]['+paper_x+']" id="paper[paper_make]['+paper_x+']" aria-label="Select paper make" data-control="select2" data-placeholder="Select paper make..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$mst_paper_make = DB::select("select * from mst_paper_make");
						$mst_paper_make_option="";
						foreach($mst_paper_make as $mst_paper_make)
						{
							$paper_make_id=$mst_paper_make->id;
							$paper_make_description=$mst_paper_make->description;
							$mst_paper_make_option.="<option value='".$paper_make_id."'>$paper_make_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $mst_paper_make_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';


					//color shade

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Color Shade</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Color Shade."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="paper[color_shade]['+paper_x+']" id="paper[color_shade]['+paper_x+']" aria-label="Select color shade" data-control="select2" data-placeholder="Select color shade..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php

						$mst_paper_color_shade = DB::select("select * from mst_paper_color_shade");
						$mst_paper_make_option="";

						foreach($mst_paper_color_shade as $mst_paper_color_shade){
							$paper_color_shade_description=$mst_paper_color_shade->description;
							$paper_color_shade_id=$mst_paper_color_shade->id;
							$mst_paper_make_option.="<option value='".$paper_color_shade_id."'>$paper_color_shade_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $mst_paper_make_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//finish





					//start 2

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';


					//front_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Coating Side Color</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Coating Side Color."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select multiple name="paper[front_side_color]['+paper_x+'][]" id="paper[front_side_color]['+paper_x+']" data-placeholder="Select Coating Side Color..." class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple"  >';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$front_side_color_option="";
						$mst_color_master = DB::select("select * from mst_color_master");

                                foreach($mst_color_master as $mst_color_master){
                                    $front_side_color_description=$mst_color_master->description;
                                    $front_side_color_id=$mst_color_master->id;
									$front_side_color_option.="<option value='".$front_side_color_id."'>$front_side_color_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $front_side_color_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';




					//back_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Non Coating Side Color</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Non Coating Side Color."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select multiple name="paper[back_side_color]['+paper_x+'][]" id="paper[back_side_color]['+paper_x+']" aria-label="Select Non Coating Side Color" data-control="select2" data-placeholder="Select Non Coating Side Color..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php

						$mst_color_master_option="";
						$mst_color_master = DB::select("select * from mst_color_master");

						foreach($mst_color_master as $mst_color_master){
							$back_side_color_description=$mst_color_master->description;
							$back_side_color_id=$mst_color_master->id;
							$mst_color_master_option.="<option value='".$back_side_color_id."'>$back_side_color_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $mst_color_master_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';


					//front side color coating

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Coating Side</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Coating Side."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="paper[front_side_coating]['+paper_x+']" id="paper[front_side_coating]['+paper_x+']" aria-label="Select front side coating" data-control="select2" data-placeholder="Select Coating Side..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php

						$mst_paper_color_shade_option="";
						$tbl_fron_side_color_coating = DB::select("select * from tbl_coating_thermal");

						foreach($tbl_fron_side_color_coating as $tbl_fron_side_color_coating){
							$front_side_color_coating_description=$tbl_fron_side_color_coating->description;
							$front_side_color_coating_id=$tbl_fron_side_color_coating->id;
							$mst_paper_color_shade_option.="<option value='".$front_side_color_coating_id."'>$front_side_color_coating_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $mst_paper_color_shade_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//finish 2




					//start 3

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';


					//back_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Non Coating Side</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Non Coating Side."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="paper[back_side_coating]['+paper_x+']" id="paper[back_side_coating]['+paper_x+']" aria-label="Select Non Coating Side" data-control="select2" data-placeholder="Select Non Coating Side..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$back_side_color_option="";
						$tbl_back_side_color_coating = DB::select("select * from tbl_coating_thermal");

						foreach($tbl_back_side_color_coating as $tbl_back_side_color_coating){
							$back_side_color_coating_description=$tbl_back_side_color_coating->description;
							$back_side_color_coating_id=$tbl_back_side_color_coating->id;
							$back_side_color_option.="<option value='".$back_side_color_coating_id."'>$back_side_color_coating_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $back_side_color_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';



					//copy mark

					// neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					// neft_fieldHTML+='<div class="fv-row mb-7">';
					// neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					// neft_fieldHTML+='<span>Copy Mark</span>';
					// neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the copy mark."></i>';
					// neft_fieldHTML+='</label>';
					// neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="paper[copy_mark]['+paper_x+']" id="paper[copy_mark]['+paper_x+']" value="">';

					// neft_fieldHTML+='</div>';

					// neft_fieldHTML+='</div>';



					//copy mark

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Remark</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the remark."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="paper[remark]['+paper_x+']" id="paper[remark]['+paper_x+']" value="">';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';




					neft_fieldHTML+='</div>';

					//finish 3






					neft_fieldHTML+='</div>';

					$('.paper_wrapper').append(neft_fieldHTML); //Add field html

					$('.js-example-basic-multiple').select2();

				}
			});

			$(".edit_paper").click(function()
			{
				//alert("here");
				var edit_id=$(this).attr('edit-id');
				$.ajax({
							type: "POST",
							data: "edit_id="+edit_id,
							url: "{{ URL::to('editpaper') }}",
							success: function (response_json) {
								var response= JSON.parse(response_json);
								//alert(response.message);
								if (response.message=='')
								{
									$('input[name="paper[paper_id][1]').val(response.paper_id);
									$('#paper_thick').val(response.paper_thick);
									//$('input[name="neft[account_no][1]"]').val(response.account_no);

									//alert(response.paper_make);
									$('#paper_make').val(response.paper_make).trigger('change');
									$('#color_shade').val(response.color_shade).trigger('change');

									$('#paper_width').val(response.width);
                            		$('#unit').val(response.unit).trigger('change');

									//alert(response.front_side_color);
									$('#front_side_color').val(response.front_side_color).trigger('change');
									$('#back_side_color').val(response.back_side_color).trigger('change');
									$('#front_side_coating').val(response.front_side_coating).trigger('change');
									$('#back_side_coating').val(response.back_side_coating).trigger('change');

									$('#copy_mark').val(response.copy_mark);
									$('#remark').val(response.remark);
								}else{
									//alert("else part");
									//ShowAlret(response.message,response.alert_type);
								}
							}
						});
			});

			$(".remove_paper").click(function()
			{
				var delete_id=$(this).attr('delete-id');

				var part_ply=$("#part_ply").val();
				//alert(part_ply);

				//for (var i = 1; i <= part_ply; i++)
				//{
					if(part_ply!="1")
					{
						//alert(part_ply)
						if ($('#gumming_between').find("option[value='" + part_ply + "']").length)
						{
							$("#gumming_between option[value='"+part_ply+"']").remove();
							$("#hotspot_carbon_behind_ply_no option[value='"+part_ply+"']").remove();
							$("#collating_between_ply option[value='"+part_ply+"']").remove();



						}
					}
					else
					{
						//alert("else part");
					}
				//}
				//alert(part_ply);

				part_ply=parseInt(part_ply)-1;
				$("#part_ply").val(part_ply);







				//alert(delete_id);
				$(this).closest('tr').remove();
				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deletepaper') }}",
					data : {'id' : delete_id},
							success: function (response_json)
							{
								var response= JSON.parse(response_json);
								//alert('row_'+delete_id);
								$('.row_'+delete_id).remove();
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
			$('.position_wrapper').on('click', '.remove_position', function(e)
			{
				e.preventDefault();
				//alert("dnfdsfsdfsd");

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('tr').remove(); //Remove field html
				}
				else
				{

					$(this).closest('tr').remove();
					$.ajax({
						type: "POST",
						//data: $('#master_frm').serialize()+ "&opt="+opt,
						url : "{{ URL::to('deleteposition') }}",
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

			$('.paper_wrapper').on('click', '.remove_paper', function(e){
				e.preventDefault();
				//alert("dnfdsfsdfsd");

				var part_ply=$("#part_ply").val();
				//alert(part_ply);


				if(part_ply!="1" || part_ply!="2")
				{
					//alert(part_ply)
					if ($('#gumming_between').find("option[value='" + part_ply + "']").length)
					{
						$("#gumming_between option[value='"+part_ply+"']").remove();
						$("#hotspot_carbon_behind_ply_no option[value='"+part_ply+"']").remove();
						$("#collating_between_ply option[value='"+part_ply+"']").remove();


					}
				}
				else
				{
					alert("else part");
				}

				part_ply=parseInt(part_ply)-1;
				$("#part_ply").val(part_ply);

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('.paper').remove(); //Remove field html
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



			$('.add_color').click(function(){

				//Check maximum number of input fields
				//alert(color_x);
				if(color_x < maxField){
					color_x++; //Increment field counter

					//alert(position_x);

					var fieldHTML= '<tr>';
					fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid" type="hidden" name="color[color_id]['+color_x+']" value="0"/>';

					fieldHTML+='<select multiple name="color[color]['+color_x+'][]"  aria-label="Select a color" data-control="select2" data-placeholder="Select a color ..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple" data-select2-id="select2-data-color'+color_x+'" tabindex="-1" aria-hidden="true">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$mst_color_master = DB::select("select * from mst_color_master");
							$mst_color_master_option="";
							foreach($mst_color_master as $mst_color_master)
							{
								$color_id=$mst_color_master->id;
								$color_description=$mst_color_master->description;
								$mst_color_master_option.="<option value='".$color_id."'>$color_description</option>";
							}
						?>
						fieldHTML+="<?php echo $mst_color_master_option ?>";
						fieldHTML+='</select>';


					fieldHTML+='</td>';
					fieldHTML+='<td>';
						fieldHTML+='<select name="color[film_type]['+color_x+']"  aria-label="Select a film type" data-control="select2" data-placeholder="Select a film type ..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_film_type = DB::select("select * from tbl_film_type");
							$tbl_film_type_option="";
							foreach($tbl_film_type as $tbl_film_type)
							{
								$film_type_id=$tbl_film_type->id;
								$film_type_description=$tbl_film_type->description;
								$tbl_film_type_option.="<option value='".$film_type_id."'>$film_type_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_film_type_option ?>";
						fieldHTML+='</select>';
					fieldHTML+='</td>';

					fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid" type="text" name="color[ply]['+color_x+']" value=""/>';




					fieldHTML+='</td>';

					fieldHTML+='<td>';
						fieldHTML+='<select name="color[plate_type]['+color_x+']"  aria-label="Select a plate type" data-control="select2" data-placeholder="Select a plate type ..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_plate_type = DB::select("select * from tbl_plate_type");
							$tbl_plate_type_option="";
							foreach($tbl_plate_type as $tbl_plate_type)
							{
								$plate_type_id=$tbl_plate_type->id;
								$plate_type_description=$tbl_plate_type->description;
								$tbl_plate_type_option.="<option value='".$plate_type_id."'>$plate_type_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_plate_type_option ?>";
						fieldHTML+='</select>';
					fieldHTML+='</td>';


					fieldHTML+='<td>';
					fieldHTML+='<a href="javascript:void(0);" class="remove_color" delete-id="0">Delete</a>';
					fieldHTML+='</td>';
					fieldHTML+='</tr>';

					//alert("here there");

					$('.color_wrapper').append(fieldHTML); //Add field html
					$('.js-example-basic-multiple').select2();
				}

			});

			$(".remove_pre_press_color").click(function()
			{
				var delete_id=$(this).attr('delete-id');

				//alert(delete_id);

				$(this).closest('tr').remove();

				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deletecolor') }}",
					data : {'id' : delete_id},
							success: function (response_json)
							{
								$('.ink_row_'+delete_id).remove();
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

			$('.color_wrapper').on('click', '.remove_color', function(e)
			{
				e.preventDefault();
				//alert("dnfdsfsdfsd");

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('tr').remove(); //Remove field html
				}

			});

			//remove start
			$('.add_press_coating_details').click(function(){

				//alert("here");
				//Check maximum number of input fields
				if(press_coating_details_x < maxField){
					press_coating_details_x++; //Increment field counter

					//alert(position_x);

					var fieldHTML= '<tr>';
					fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid" type="hidden" name="coating[coating_id]['+press_coating_details_x+']" value="0"/>';

					fieldHTML+='<select name="coating[printing]['+press_coating_details_x+']"  aria-label="Select a printing" data-control="select2" data-placeholder="Select a printing ..."  class="form-select form-select-solid lh-1 py-3">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_printing = DB::select("select * from tbl_printing");
							$tbl_printing_option="";
							foreach($tbl_printing as $tbl_printing)
							{
								$printing_id=$tbl_printing->id;
								$printing_description=$tbl_printing->description;
								$tbl_printing_option.="<option value='".$printing_id."'>$printing_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_printing_option ?>";
						fieldHTML+='</select>';


					fieldHTML+='</td>';
					fieldHTML+='<td>';
						fieldHTML+='<select name="coating[coating]['+press_coating_details_x+']"  aria-label="Select a coating" data-control="select2" data-placeholder="Select a coating ..."  class="form-select form-select-solid lh-1 py-3">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_coating = DB::select("select * from tbl_coating");
							$tbl_coating_option="";
							foreach($tbl_coating as $tbl_coating)
							{
								$coating_id=$tbl_coating->id;
								$coating_description=$tbl_coating->description;
								$tbl_coating_option.="<option value='".$coating_id."'>$coating_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_coating_option ?>";
						fieldHTML+='</select>';
					fieldHTML+='</td>';






					fieldHTML+='<td>';
					fieldHTML+='<a href="javascript:void(0);" class="remove_press_coating_details" delete-id="0">Delete</a>';
					fieldHTML+='</td>';
					fieldHTML+='</tr>';

					//alert("here there");

					$('.press_coating_details_wrapper').append(fieldHTML); //Add field html
				}

			});


			$(".remove_press_coating_details").click(function()
			{
				var delete_id=$(this).attr('delete-id');

				//alert(delete_id);

				$(this).closest('tr').remove();

				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deletepresscoatingdetails') }}",
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

			$('.press_coating_details_wrapper').on('click', '.remove_press_coating_details', function(e)
			{
				e.preventDefault();
				//alert("dnfdsfsdfsd");

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('tr').remove(); //Remove field html
				}

			});
			//remove end

			$('.add_spare_to_use').click(function(){

				//alert("here");
				//Check maximum number of input fields
				//alert(press_spare_to_use_x);
				if(press_spare_to_use_x < maxField){
					press_spare_to_use_x++; //Increment field counter

					//alert(position_x);

					var fieldHTML= '<tr>';
					fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid" type="hidden" name="sparetouse[spare_id]['+press_spare_to_use_x+']" value="0"/>';

					fieldHTML+='<select name="sparetouse[spare]['+press_spare_to_use_x+']"  aria-label="Select Spare" data-control="select2" data-placeholder="Select Spare ..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_spare = DB::select("select * from tbl_spare");
							$tbl_spare_option="";
							foreach($tbl_spare as $tbl_spare)
							{
								$spare_name=$tbl_spare->name;
								$spare_id=$tbl_spare->id;
								$tbl_spare_option.="<option value='".$spare_id."'>$spare_name</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_spare_option ?>";
						fieldHTML+='</select>';


					fieldHTML+='</td>';
					fieldHTML+='<td>';
						fieldHTML+='<input type="text" class="form-control form-control-solid"  name="sparetouse[spare_quantity]['+press_spare_to_use_x+']" id="sparetouse[spare_quantity]['+press_spare_to_use_x+']" value="" />';

					fieldHTML+='</td>';






					fieldHTML+='<td>';
					fieldHTML+='<a href="javascript:void(0);" class="remove_press_spare_to_use" delete-id="0">Delete</a>';
					fieldHTML+='</td>';
					fieldHTML+='</tr>';

					//alert("here there");

					$('.press_spare_to_use_wrapper').append(fieldHTML); //Add field html
					$('.js-example-basic-multiple').select2();
				}

			});

			$(".remove_press_spare_to_use").click(function()
			{
				var delete_id=$(this).attr('delete-id');

				//alert(delete_id);

				$(this).closest('tr').remove();

				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deletepresssparetouse') }}",
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

			$('.press_spare_to_use_wrapper').on('click', '.remove_press_spare_to_use', function(e)
			{
				e.preventDefault();
				//alert("dnfdsfsdfsd");

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('tr').remove(); //Remove field html
				}

			});

			$(".add_packaging_details").click(function(){

				//Check maximum number of input fields
				if(packaging_details_x < maxField){
					//alert(paper_x);
					packaging_details_x++; //Increment field counter
					//alert(packaging_details_x);
					//alert(paper_x);
					//$("#part_ply").val(paper_x);

					var neft_fieldHTML= '<div class="packaging_details">';
					neft_fieldHTML+='<div class="separator mx-1 my-4"></div>';
					//neft_fieldHTML+='<input type="hidden" name="neft[neft_id]['+neft_x+']" value="0">';

					neft_fieldHTML+='<div style="text-align:right"><a  href="javascript:void(0);" class="remove_packaging_details" delete-id="0">Delete</a></div>';

					//start

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';

					//paper thick
					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>PCs</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the PCs."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="hidden" name="packaging_details[packaging_details_id]['+packaging_details_x+']" value="0">';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="packaging_details[pcs]['+packaging_details_x+']" id="packaging_details[pcs]['+packaging_details_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';

					//paper make

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Items</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Items."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="packaging_details[item]['+packaging_details_x+']" id="packaging_details[item]['+packaging_details_x+']" aria-label="Select Items" data-control="select2" data-placeholder="Select Items..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_items = DB::select("select * from tbl_items");
						$tbl_items_option="";
						foreach($tbl_items as $tbl_items)
						{
							$item_description_id=$tbl_items->id;
							$item_description=$tbl_items->description;
							$tbl_items_option.="<option value='".$item_description_id."'>$item_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_items_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';


					//color shade

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Length</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Length."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="packaging_details[length]['+packaging_details_x+']" id="packaging_details[length]['+packaging_details_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//finish





					//start 2

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';


					//front_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Width</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Width."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="packaging_details[width]['+packaging_details_x+']" id="packaging_details[width]['+packaging_details_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';




					//back_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>height</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="packaging_details[height]['+packaging_details_x+']" id="packaging_details[height]['+packaging_details_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';


					//front side color coating

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Units</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="packaging_details[units]['+packaging_details_x+']" id="packaging_details[units]['+packaging_details_x+']" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php

						$mst_unit_option="";
						$mst_unit = DB::select("select * from mst_unit");

						foreach($mst_unit as $mst_unit){
							$unit_description=$mst_unit->description;
							$unit_id=$mst_unit->id;
							$mst_unit_option.="<option value='".$unit_id."'>$unit_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $mst_unit_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//finish 2











					neft_fieldHTML+='</div>';

					$('.packaging_details_wrapper').append(neft_fieldHTML); //Add field html
					$('.js-example-basic-multiple').select2();
				}
			});

			$(".remove_packaging_details").click(function()
			{

				var delete_id=$(this).attr('delete-id');

				//var part_ply=$("#part_ply").val();
				//alert(part_ply);

				//part_ply=parseInt(part_ply)-1;
				//$("#part_ply").val(part_ply);

				//alert(delete_id);
				$(this).closest('tr').remove();
				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('delete_packaging_details') }}",
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


			$('.packaging_details_wrapper').on('click', '.remove_packaging_details', function(e){

				e.preventDefault();
				//alert("dnfdsfsdfsd");

				//var part_ply=$("#part_ply").val();
				//alert(part_ply);

				//part_ply=parseInt(part_ply)-1;
				//$("#part_ply").val(part_ply);

				var delete_id=$(this).attr('delete-id');
				alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('.packaging_details').remove(); //Remove field html
				}

			});

			$(".edit_packaging_details").click(function()
			{
				//alert("here");
				var edit_id=$(this).attr('edit-id');
				$.ajax({
							type: "POST",
							data: "edit_id="+edit_id,
							url: "{{ URL::to('edit_packaging_details') }}",
							success: function (response_json) {
								var response= JSON.parse(response_json);
								//alert(response.message);
								if (response.message=='')
								{
									//$('input[name="paper[paper_id][1]').val(response.paper_id);
									//$('input[name="neft[account_no][1]"]').val(response.account_no);

									//alert(response.paper_make);
									$('#packaging_details_id').val(response.packaging_details_id).trigger('change');
									$('#pcs').val(response.pcs).trigger('change');
									$('#item').val(response.item).trigger('change');

									//alert(response.length);
									$('input[name="packaging_details[length][1]').val(response.length).trigger('change');
									$('input[name="packaging_details[width][1]').val(response.width).trigger('change');
									$('input[name="packaging_details[height][1]').val(response.height).trigger('change');
									$('#units').val(response.units).trigger('change');

								}else{
									//alert("else part");
									//ShowAlret(response.message,response.alert_type);
								}
							}
						});
			});



			//pre_press add row

			$('.add_process_selection_pre_press').click(function(){

				//alert(process_selection_pre_press_x);
				//Check maximum number of input fields
				if(process_selection_pre_press_x < maxField){
					process_selection_pre_press_x++; //Increment field counter

					//alert(process_selection_pre_press_x);

					var fieldHTML= '<tr>';
				    fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionprepress[prepress_id]['+process_selection_pre_press_x+']" value="0"/>';
					//fieldHTML+='<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/>';

					fieldHTML+='<select name="processselectionprepress[process]['+process_selection_pre_press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..." class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_process_master = DB::select("select * from tbl_process_master where category='1'");
						$tbl_process_master_option="";
						foreach($tbl_process_master as $tbl_process_master)
						{
							$pre_press_process_id=$tbl_process_master->id;
							$pre_press_process_description=$tbl_process_master->name;
							$tbl_process_master_option.="<option value='".$pre_press_process_id."'>$pre_press_process_description</option>";
						}
					?>
					fieldHTML+="<?php echo $tbl_process_master_option ?>";
					fieldHTML+='</select>';

					 fieldHTML+='</td>';
					 fieldHTML+='<td>';
					 	fieldHTML+='<select name="processselectionprepress[basicmachine]['+process_selection_pre_press_x+']"  aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_basic_machine_master = DB::select("select * from tbl_machine_master where category='1'");
							$tbl_basic_machine_master_option="";
							foreach($tbl_basic_machine_master as $tbl_basic_machine_master)
							{
								$basic_machine_id=$tbl_basic_machine_master->id;
								$basic_machine_description=$tbl_basic_machine_master->name;
								$tbl_basic_machine_master_option.="<option value='".$basic_machine_id."'>$basic_machine_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_basic_machine_master_option ?>";
						fieldHTML+='</select>';
					 fieldHTML+='</td>';
					 fieldHTML+='<td>';
							fieldHTML+='<select name="processselectionprepress[alternativemachine]['+process_selection_pre_press_x+']"  aria-label="Select Alternative Machine" data-control="select2" data-placeholder="Select Alternative Machine ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
							fieldHTML+='<option value="">Select</option>';
								<?php
									$tbl_alternative_machine_master = DB::select("select * from tbl_machine_master where category='1'");
									$tbl_alternative_machine_master_option="";
									foreach($tbl_alternative_machine_master as $tbl_alternative_machine_master)
									{
										$alternative_machine_id=$tbl_alternative_machine_master->id;
										$alternative_machine_description=$tbl_alternative_machine_master->name;
										$tbl_alternative_machine_master_option.="<option value='".$alternative_machine_id."'>$alternative_machine_description</option>";
									}
								?>
							fieldHTML+="<?php echo $tbl_alternative_machine_master_option ?>";
							fieldHTML+='</select>';
					 fieldHTML+='</td>';
					 fieldHTML+='<td>';
							fieldHTML+='<select name="processselectionprepress[qc]['+process_selection_pre_press_x+']"  aria-label="Select QC" data-control="select2" data-placeholder="Select QC ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
									fieldHTML+='<option value="">Select</option>';
										<?php
											//$pre_press_mst_qc = DB::select("select * from mst_qc");
											$pre_press_mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='1'");
											$pre_press_mst_qc_option="";
											foreach($pre_press_mst_qc as $pre_press_mst_qc)
											{
												$pre_press_qc_id=$pre_press_mst_qc->id;
												$pre_press_qc_description=$pre_press_mst_qc->name;
												$pre_press_mst_qc_option.="<option value='".$pre_press_qc_id."'>$pre_press_qc_description</option>";
											}
										?>
							fieldHTML+="<?php echo $pre_press_mst_qc_option ?>";
							fieldHTML+='</select>';
					 fieldHTML+='</td>';
					 fieldHTML+='<td>';
					 fieldHTML+='<a href="javascript:void(0);" class="remove_process_selection_pre_press" delete-id="0">Delete</a>';
					 fieldHTML+='</td>';
					 fieldHTML+='</tr>';

					$('.process_selection_pre_press_wrapper').append(fieldHTML); //Add field html

					$('.js-example-basic-multiple').select2();
				}
			});


			$('.process_selection_pre_press_wrapper').on('click', '.remove_process_selection_pre_press', function(e){
				//alert("here");
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
						url : "{{ URL::to('deleteprocessselectionprepress') }}",
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


			$('.add_process_selection_press').click(function(){

				//alert(process_selection_pre_press_x);
				//Check maximum number of input fields
				if(process_selection_press_x < maxField){
					process_selection_press_x++; //Increment field counter

					var fieldHTML= '<tr>';
					fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpress[press_id]['+process_selection_press_x+']" value="0"/>';
					//fieldHTML+='<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/>';

					fieldHTML+='<select name="processselectionpress[process]['+process_selection_press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_process_master = DB::select("select * from tbl_process_master where category='3'");
						$tbl_process_master_option="";
						foreach($tbl_process_master as $tbl_process_master)
						{
							$pre_press_process_id=$tbl_process_master->id;
							$pre_press_process_description=$tbl_process_master->name;
							$tbl_process_master_option.="<option value='".$pre_press_process_id."'>$pre_press_process_description</option>";
						}
					?>
					fieldHTML+="<?php echo $tbl_process_master_option ?>";
					fieldHTML+='</select>';

					fieldHTML+='</td>';
					fieldHTML+='<td>';
						fieldHTML+='<select name="processselectionpress[basicmachine]['+process_selection_press_x+']"  aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..."  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_basic_machine_master = DB::select("select * from tbl_machine_master where category='3'");
							$tbl_basic_machine_master_option="";
							foreach($tbl_basic_machine_master as $tbl_basic_machine_master)
							{
								$basic_machine_id=$tbl_basic_machine_master->id;
								$basic_machine_description=$tbl_basic_machine_master->name;
								$tbl_basic_machine_master_option.="<option value='".$basic_machine_id."'>$basic_machine_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_basic_machine_master_option ?>";
						fieldHTML+='</select>';
					fieldHTML+='</td>';
					fieldHTML+='<td>';
							fieldHTML+='<select name="processselectionpress[alternativemachine]['+process_selection_press_x+']"  aria-label="Select Alternative Machine" data-control="select2" data-placeholder="Select Alternative Machine"  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
							fieldHTML+='<option value="">Select</option>';
								<?php
									$tbl_alternative_machine_master = DB::select("select * from tbl_machine_master where category='3'");
									$tbl_alternative_machine_master_option="";
									foreach($tbl_alternative_machine_master as $tbl_alternative_machine_master)
									{
										$alternative_machine_id=$tbl_alternative_machine_master->id;
										$alternative_machine_description=$tbl_alternative_machine_master->name;
										$tbl_alternative_machine_master_option.="<option value='".$alternative_machine_id."'>$alternative_machine_description</option>";
									}
								?>
							fieldHTML+="<?php echo $tbl_alternative_machine_master_option ?>";
							fieldHTML+='</select>';
					fieldHTML+='</td>';
					fieldHTML+='<td>';
							fieldHTML+='<select name="processselectionpress[qc]['+process_selection_press_x+']"  aria-label="Select QC" data-control="select2" data-placeholder="Select QC"  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
									fieldHTML+='<option value="">Select</option>';
										<?php
											//$pre_press_mst_qc = DB::select("select * from mst_qc");
											$pre_press_mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='3'");
											$pre_press_mst_qc_option="";
											foreach($pre_press_mst_qc as $pre_press_mst_qc)
											{
												$pre_press_qc_id=$pre_press_mst_qc->id;
												$pre_press_qc_description=$pre_press_mst_qc->name;
												$pre_press_mst_qc_option.="<option value='".$pre_press_qc_id."'>$pre_press_qc_description</option>";
											}
										?>
							fieldHTML+="<?php echo $pre_press_mst_qc_option ?>";
							fieldHTML+='</select>';
					fieldHTML+='</td>';
					fieldHTML+='<td>';
					fieldHTML+='<a href="javascript:void(0);" class="remove_process_selection_press" delete-id="0">Delete</a>';
					fieldHTML+='</td>';
					fieldHTML+='</tr>';

					$('.process_selection_press_wrapper').append(fieldHTML); //Add field html
					$('.js-example-basic-multiple').select2();
				}
			});


			$('.process_selection_press_wrapper').on('click', '.remove_process_selection_press', function(e){
				//alert("here");
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
						url : "{{ URL::to('deleteprocessselectionpress') }}",
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

			$('.add_process_selection_post_press').click(function(){

				//alert(process_selection_pre_press_x);
				//Check maximum number of input fields
				if(process_selection_post_press_x < maxField){
					process_selection_post_press_x++; //Increment field counter

					var fieldHTML= '<tr>';
					fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="hidden" name="processselectionpostpress[post_press_id]['+process_selection_post_press_x+']" value="0"/>';
					//fieldHTML+='<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/>';

					fieldHTML+='<select name="processselectionpostpress[process]['+process_selection_post_press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_process_master = DB::select("select * from tbl_process_master where category='2'");
						$tbl_process_master_option="";
						foreach($tbl_process_master as $tbl_process_master)
						{
							$pre_press_process_id=$tbl_process_master->id;
							$pre_press_process_description=$tbl_process_master->name;
							$tbl_process_master_option.="<option value='".$pre_press_process_id."'>$pre_press_process_description</option>";
						}
					?>
					fieldHTML+="<?php echo $tbl_process_master_option ?>";
					fieldHTML+='</select>';

					fieldHTML+='</td>';
					fieldHTML+='<td>';
						fieldHTML+='<select name="processselectionpostpress[basicmachine]['+process_selection_post_press_x+']"  aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine"  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
						fieldHTML+='<option value="">Select</option>';
						<?php
							$tbl_basic_machine_master = DB::select("select * from tbl_machine_master where category='2'");
							$tbl_basic_machine_master_option="";
							foreach($tbl_basic_machine_master as $tbl_basic_machine_master)
							{
								$basic_machine_id=$tbl_basic_machine_master->id;
								$basic_machine_description=$tbl_basic_machine_master->name;
								$tbl_basic_machine_master_option.="<option value='".$basic_machine_id."'>$basic_machine_description</option>";
							}
						?>
						fieldHTML+="<?php echo $tbl_basic_machine_master_option ?>";
						fieldHTML+='</select>';
					fieldHTML+='</td>';
					fieldHTML+='<td>';
							fieldHTML+='<select name="processselectionpostpress[alternativemachine]['+process_selection_post_press_x+']"  aria-label="Select Alternative Machine" data-control="select2" data-placeholder="Select Alternative Machine"  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
							fieldHTML+='<option value="">Select</option>';
								<?php
									$tbl_alternative_machine_master = DB::select("select * from tbl_machine_master where category='2'");
									$tbl_alternative_machine_master_option="";
									foreach($tbl_alternative_machine_master as $tbl_alternative_machine_master)
									{
										$alternative_machine_id=$tbl_alternative_machine_master->id;
										$alternative_machine_description=$tbl_alternative_machine_master->name;
										$tbl_alternative_machine_master_option.="<option value='".$alternative_machine_id."'>$alternative_machine_description</option>";
									}
								?>
							fieldHTML+="<?php echo $tbl_alternative_machine_master_option ?>";
							fieldHTML+='</select>';
					fieldHTML+='</td>';
					fieldHTML+='<td>';
							fieldHTML+='<select name="processselectionpostpress[qc]['+process_selection_post_press_x+']"  aria-label="Select QC" data-control="select2" data-placeholder="Select QC"  class="neft_required required_field form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
									fieldHTML+='<option value="">Select</option>';
										<?php
											//$pre_press_mst_qc = DB::select("select * from mst_qc");
											$pre_press_mst_qc = DB::select("select mq.id as id,mq.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where tpm.category='2'");
											$pre_press_mst_qc_option="";
											foreach($pre_press_mst_qc as $pre_press_mst_qc)
											{
												$pre_press_qc_id=$pre_press_mst_qc->id;
												$pre_press_qc_description=$pre_press_mst_qc->name;
												$pre_press_mst_qc_option.="<option value='".$pre_press_qc_id."'>$pre_press_qc_description</option>";
											}
										?>
							fieldHTML+="<?php echo $pre_press_mst_qc_option ?>";
							fieldHTML+='</select>';
					fieldHTML+='</td>';
					fieldHTML+='<td>';
					fieldHTML+='<a href="javascript:void(0);" class="remove_process_selection_post_press" delete-id="0">Delete</a>';
					fieldHTML+='</td>';
					fieldHTML+='</tr>';

					$('.process_selection_post_press_wrapper').append(fieldHTML); //Add field html
					$('.js-example-basic-multiple').select2();
				}
			});


			$('.process_selection_post_press_wrapper').on('click', '.remove_process_selection_post_press', function(e){
				//alert("here");
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
						url : "{{ URL::to('deleteprocessselectionpostpress') }}",
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


			$(".add_material_requirement").click(function(){

				//alert("dfbdsjf");

				//Check maximum number of input fields
				if(material_requirement_x < maxField){
					//alert(paper_x);
					material_requirement_x++; //Increment field counter
					//alert(paper_x);
					//$("#part_ply").val(paper_x);

					var neft_fieldHTML= '<div class="material_requirement">';
					neft_fieldHTML+='<div class="separator mx-1 my-4"></div>';
					//neft_fieldHTML+='<input type="hidden" name="neft[neft_id]['+neft_x+']" value="0">';

					neft_fieldHTML+='<div style="text-align:right"><a  href="javascript:void(0);" class="remove_material_requirement" delete-id="0">Delete</a></div>';

					//start

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';



					//paper make

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<input type="hidden" name="material_requirement[material_requirement_id]['+material_requirement_x+']" value="0">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>RM Category</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Category."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="material_requirement[rm_category]['+material_requirement_x+']" id="material_requirement[rm_category]['+material_requirement_x+']" aria-label="Select RM Category" data-control="select2" data-placeholder="Select RM Category..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_rm_category = DB::select("select * from tbl_rm_category");
						$tbl_rm_category_option="";
						foreach($tbl_rm_category as $tbl_rm_category)
						{

							$rm_category_name=$tbl_rm_category->name;
							$rm_category_name = htmlspecialchars($rm_category_name, ENT_QUOTES, 'UTF-8');
							$rm_category_id=$tbl_rm_category->id;
							$tbl_rm_category_option.="<option value='".$rm_category_id."'>$rm_category_name</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_rm_category_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';


					//color shade

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Type</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Type."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="material_requirement[type]['+material_requirement_x+']" id="material_requirement[type]['+material_requirement_x+']" aria-label="Select Type" data-control="select2" data-placeholder="Select Type..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php

						$tbl_rm_product_category = DB::select("select * from tbl_rm_product_category");
						$tbl_rm_product_category_option="";

						foreach($tbl_rm_product_category as $tbl_rm_product_category){
							$rm_product_category_name=$tbl_rm_product_category->name;
							$rm_product_category_id=$tbl_rm_product_category->id;
							$tbl_rm_product_category_option.="<option value='".$rm_product_category_id."'>$rm_product_category_name</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_rm_product_category_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//paper make

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>RM Item</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Item."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="material_requirement[rm_item]['+material_requirement_x+']" id="material_requirement[rm_item]['+material_requirement_x+']" aria-label="Select RM Item" data-control="select2" data-placeholder="Select RM Item..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php
						$tbl_material = DB::select("select * from tbl_material");
						$tbl_material_option="";
						foreach($tbl_material as $tbl_material)
						{
							$material_name=$tbl_material->name;
                            // $material_name = str_replace('"', '\"', $material_name);
							$material_name = htmlspecialchars($material_name, ENT_QUOTES, 'UTF-8');
							$material_id=$tbl_material->id;
							$tbl_material_option.="<option value='".$material_id."'>$material_name</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $tbl_material_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//finish





					//start 2

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';


					//front_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Quantity</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Quantity."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="material_requirement[quantity]['+material_requirement_x+']" id="material_requirement[quantity]['+material_requirement_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';




					//back_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';

					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Units</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Units."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<select name="material_requirement[units]['+material_requirement_x+']" id="material_requirement[units]['+material_requirement_x+']" aria-label="Select Units" data-control="select2" data-placeholder="Select Units..."  class="form-select form-select-solid lh-1 py-3 js-example-basic-multiple">';
					neft_fieldHTML+='<option value="">Select</option>';
					<?php

						$mst_unit_option="";
						$mst_unit = DB::select("select * from mst_unit");

						foreach($mst_unit as $mst_unit){
							$unit_description=$mst_unit->description;
							$unit_id=$mst_unit->id;
							$mst_unit_option.="<option value='".$unit_id."'>$unit_description</option>";
						}
					?>
					neft_fieldHTML+="<?php echo $mst_unit_option ?>";
					neft_fieldHTML+='</select>';
					neft_fieldHTML+='</div>';

					neft_fieldHTML+='</div>';

					//front_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Wastage allowed</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Wastage allowed."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="material_requirement[wastage_allowed]['+material_requirement_x+']" id="material_requirement[wastage_allowed]['+material_requirement_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';


					neft_fieldHTML+='</div>';

					//finish 2




					//start 3

					neft_fieldHTML+='<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">';




					//front_side_color

					neft_fieldHTML+='<div class="col" style="width:30% !important;">';
					neft_fieldHTML+='<div class="fv-row mb-7">';
					neft_fieldHTML+='<label class="fs-6 fw-bold form-label mt-3">';
					neft_fieldHTML+='<span>Pcs</span>';
					neft_fieldHTML+='<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Pcs."></i>';
					neft_fieldHTML+='</label>';
					neft_fieldHTML+='<input type="text" class="form-control form-control-solid" name="material_requirement[pcs]['+material_requirement_x+']" id="material_requirement[pcs]['+material_requirement_x+']" value="">';
					neft_fieldHTML+='</div>';
					neft_fieldHTML+='</div>';



					neft_fieldHTML+='</div>';

					//finish 3






					neft_fieldHTML+='</div>';

					$('.material_requirement_wrapper').append(neft_fieldHTML); //Add field html
					$('.js-example-basic-multiple').select2();
				}


			});

			$(".remove_material_requirement").click(function()
			{
				var delete_id=$(this).attr('delete-id');

				//var part_ply=$("#part_ply").val();
				//alert(part_ply);

				//part_ply=parseInt(part_ply)-1;
				//$("#part_ply").val(part_ply);

				//alert(delete_id);
				$(this).closest('tr').remove();
				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('delete_material_requirement') }}",
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


			$('.material_requirement_wrapper').on('click', '.remove_material_requirement', function(e){
				e.preventDefault();
				//alert("dnfdsfsdfsd");

				//var part_ply=$("#part_ply").val();
				//alert(part_ply);

				//part_ply=parseInt(part_ply)-1;
				//$("#part_ply").val(part_ply);

				var delete_id=$(this).attr('delete-id');
				//alert(delete_id);

				if(delete_id==0)
				{
					$(this).closest('.material_requirement').remove(); //Remove field html
				}

			});

			$(".edit_material_requirement").click(function()
			{
				//alert("here");
				var edit_id=$(this).attr('edit-id');
				$.ajax({
							type: "POST",
							data: "edit_id="+edit_id,
							url: "{{ URL::to('edit_material_requirement') }}",
							success: function (response_json) {
								var response= JSON.parse(response_json);
								//alert(response.message);
								if (response.message=='')
								{
									//$('input[name="paper[paper_id][1]').val(response.paper_id);
									//$('#material_requirement_id').val(response.material_requirement_id);
									$('input[name="material_requirement[material_requirement_id][1]"]').val(response.material_requirement_id);
									//$('input[name="neft[account_no][1]"]').val(response.account_no);

									//alert(response.paper_make);
									//$('#rm_category').val(response.rm_category).trigger('change');
									//$('#quantity').val(response.quantity).trigger('change');

									$('input[name="material_requirement[quantity][1]"]').val(response.quantity);
									$('input[name="material_requirement[wastage_allowed][1]"]').val(response.wastage_allowed);
									$('input[name="material_requirement[pcs][1]"]').val(response.pcs);

									$('#rm_category').val(response.rm_category).trigger('change');
									$('#type').val(response.type).trigger('change');

									//alert(response.rm_item);
									$('#rm_item').val(response.rm_item).trigger('change');
									//alert(response.units);
									$('#frm_material_requirement #units').val(response.units).trigger('change');

									//alert(response.quantity);
								}else{
									//alert("else part");
									//ShowAlret(response.message,response.alert_type);
								}
							}
						});
			});


			$(".remove_image").click(function()
			{
				var delete_id=$(this).attr('delete-id');

				//$(this).closest('tr').remove();
				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('deleteimage') }}",
					data : {'id' : delete_id},
							success: function (response_json)
							{
								var response= JSON.parse(response_json);

								if(response.alert_type=="error")
								{
									swal.fire({ text: response.message}).then(function(){
												//location.reload();
												//datatablerefresh();
												window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/specific";
											}
											);

								}
								else
								{
									swal.fire({ text: response.message}).then(function(){
											//location.reload();
											//datatablerefresh();
											 //Remove field html
											 window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/specific";

										}
										);
								}

								}
                    });

   			});

			   $(".download_image").click(function()
			{
				var download_id=$(this).attr('download-id');

				alert(download_id);
				$.ajax({
					type: "POST",
					//data: $('#master_frm').serialize()+ "&opt="+opt,
					url : "{{ URL::to('downloadimage') }}",
					data : {'id' : download_id},
							success: function (response_json)
							{
								var response= JSON.parse(response_json);

								if(response.alert_type=="error")
								{
									swal.fire({ text: response.message}).then(function(){
												//location.reload();
												//datatablerefresh();
												//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/specific";
											}
											);

								}
								else
								{
									swal.fire({ text: response.message}).then(function(){
											//location.reload();
											//datatablerefresh();
											 //Remove field html
											 //window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/specific";

										}
										);
								}

								}
                    });

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




			}
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
					t.value?(window.location.href = "{{ URL::to('jobcard') }}"):"cancel"===t.dismiss&&Swal.fire({
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
						product_category: {
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
						job_card_no: {
										required: true,
									},
									job_card_title: {
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

                    }
                });


				frm_pre_press.validate({
                    errorElement: 'span',
                    errorClass: 'help-block help-block-error',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
						columns: {
                            required: true,
                        },
						rows: {
							required: true,
						},
						length: {
							required: true
                        },
						length_unit: {
							required: true
                        },
						pre_press_width: {
							required: true
                        },
						pre_press_width_unit: {
							required: true
                        },
						thickness: {
							required: true
                        },
						thickness_unit: {
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

                    },
                    messages: {

                    }
                });


				frm_post_press.validate({
                    errorElement: 'span',
                    errorClass: 'help-block help-block-error',
                    focusInvalid: false,
                    ignore: "",
                    // rules: {
					// 	numbering_position: {
					// 					required: true,
					// 				},
					// 	numbering_style: {
					// 		required: true
                    //     },
					// 	numbering_skip: {
					// 		required: true
                    //     },
					// 	numbering_sequence: {
					// 		required: true
                    //     },
					// 	numbering_orientation: {
					// 		required: true
                    //     },
					// 	gumming_position: {
					// 		required: true
                    //     },
					// 	gumming_gum_make: {
					// 		required: true
                    //     },
					// 	gumming_between: {
					// 		required: true
                    //     },
					// 	gumming_quantity: {
					// 		required: true
                    //     },
					// 	// gumming_orientation: {
					// 	// 	required: true
                    //     // }
                    // },
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

                    }
                });




		});







		function ajax_submit()
		{
			//alert("here");

				/*if($('#paper_thick').val()=="" && $('#paper_make').val()=="" && $('#color_shade').val()=="" && $('#front_side_color').val()=="" && $('#back_side_color').val()=="" && $('#front_side_coating').val()=="" && $('#back_side_coating').val()=="" && $('#copy_mark').val()=="" && $('#remark').val()=="")
				{
					//alert("Please enter value in plans details.");
					//return false;
					Swal.fire('Please enter value in paper details.', '', 'error');
					event.preventDefault();
					return false;
				}*/
				var edit_id=$("#edit_id").val();
				//alert(edit_id);

				if(edit_id!="0")
				{
					//alert("fdsf");
					if($('input[name="paper[paper_id][1]').val()=="0")
					{
						var part_ply=$("#part_ply").val();
						part_ply=parseInt(part_ply)+1;
						$("#part_ply").val(part_ply);
					}
				}

				var ajax_url = "{{ URL::to('thermal_submitjobcard') }}";
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
							//alert(data.general_detageneral_details_idils_id);

								$("#general_details_id").val(data.general_details_id);
								$("#pre_press_general_details_id").val(data.general_details_id);
								$("#press_general_details_id").val(data.general_details_id);
								$("#post_press_general_details_id").val(data.general_details_id);
								$("#process_selection_general_details_id").val(data.general_details_id);
								$("#material_requirement_general_details_id").val(data.general_details_id);




								//$("#company_id").val(data.company_id);
                                if (data.mode=='add'){

									$("#edit_id").val('');
									//$('#neft_link').removeAttr("disabled");
									//document.getElementById('neft_link').click();

									//alert("add");


									swal.fire({ text: data.message}).then(function(){
														//$("#edit_id").val('');
														//document.getElementById('specific_link').click();

														//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.general_details_id;
														//window.location.href = "{{ URL::to('jobcard') }}";
														window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+data.general_details_id+"/prepress";
													}
													);


								}
								else{
									//alert("edit");
									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//document.getElementById('general_link').click();
														//window.location.href = "{{ URL::to('jobcard') }}";
														window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+data.general_details_id+"/prepress";
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
														window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/prepress";
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/prepress";
													}
													);


								}
							}

                    }
                });
        }


		function specific_details_ajax_submit(event)
		{


			if($("#general_details_id").val()=="0")
			{
				Swal.fire('You can not add specific details before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}

			//alert("here");



			var ajax_url = "{{ URL::to('thermal_submitspecificdetails') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			$("#lns-error").hide();
			$('#lns-error').css('display', 'none');

			/*if (!frm_rtgs_neft.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}*/

			//alert("here");


			var frm_specific_details_form_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_specific_details').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_specific_details_form_data.append(input.name, input.value);
			});

			if($('#img').prop('files') !=undefined){
							//alert("here");
							var file_data = $('#img').prop('files')[0];
							frm_specific_details_form_data.append('img', file_data);
						}


			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_specific_details_form_data,
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

							$("#general_details_id").val(data.general_details_id);

							if (data.mode=='add'){

								swal.fire({ text: data.message}).then(function(){

													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/specific";
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.general_details_id;

													//alert("here");

													//document.getElementById('pre_press_link').click();
													//alert("here");
												}
												);


							}
							else{

								swal.fire({ text: data.message}).then(function(){
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
													//document.getElementById('pre_press_link').click();
													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/specific";
												}
												);

							}
						}
						else
						{
							if (data.mode=='add'){

								swal.fire({ text: data.message}).then(function(){
													alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
												}
												);

							}
							else{

								swal.fire({ text: data.message}).then(function(){
													alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
												}
												);


							}
						}

				}
			});
		}


		function pre_press_ajax_submit(event)
		{
			//alert("here pree press");


			if($("#pre_press_general_details_id").val()=="0")
			{
				Swal.fire('You can not add pre press details before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}



			var ajax_url = "{{ URL::to('thermal_submitprepress') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			if (!frm_pre_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}

			//alert("here");


			var frm_pre_press_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_pre_press').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_pre_press_data.append(input.name, input.value);
			});




			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_pre_press_data,
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
					if (data.alert_type == "succ")
					{

							$("#pre_press_general_details_id").val(data.pre_press_general_details_id);

							if (data.mode=='add')
							{

								swal.fire({ text: data.message}).then(function(){
													window.location.href = "<?php  echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/press";
													//$("#pre_press_edit_id").val('');
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;

													//alert("here");

													//document.getElementById('press_link').click();
												}
												);


							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.href = "<?php  echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/press";
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//document.getElementById('press_link').click();
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}

		function press_ajax_submit(event)
		{
			//alert("here pree press");


			if($("#press_general_details_id").val()=="0")
			{
				Swal.fire('You can not add press details before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}



			var ajax_url = "{{ URL::to('thermal_submitpress') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			/*if (!frm_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}*/

			//alert("here");


			var frm_press_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_press').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_press_data.append(input.name, input.value);
			});




			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_press_data,
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
					if (data.alert_type == "succ")
					{

							$("#press_general_details_id").val(data.press_general_details_id);

							if (data.mode=='add')
							{

								swal.fire({ text: data.message}).then(function(){
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//$("#press_edit_id").val('');
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;

													//alert("here");

													//document.getElementById('post_press_link').click();
													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/postpress";
												}
												);


							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//document.getElementById('post_press_link').click();
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/postpress";
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}

		function post_press_ajax_submit(event)
		{
			//alert("here pree press");


			if($("#post_press_general_details_id").val()=="0")
			{
				Swal.fire('You can not add post press details before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}



			var ajax_url = "{{ URL::to('thermal_submitpostpress') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			if (!frm_post_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}

			//alert("here");


			var frm_post_press_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_post_press').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_post_press_data.append(input.name, input.value);
			});




			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_post_press_data,
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
					if (data.alert_type == "succ")
					{

							$("#post_press_general_details_id").val(data.post_press_general_details_id);

							if (data.mode=='add')
							{

								swal.fire({ text: data.message}).then(function(){
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//$("#press_edit_id").val('');
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;

													//alert("here");

													//document.getElementById('process_selection_link').click();
													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/processselection";
												}
												);


							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//document.getElementById('process_selection_link').click();
													//window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/processselection";
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}


		function process_selection_ajax_submit(event)
		{
			//alert("here pree press");


			if($("#process_selection_general_details_id").val()=="0")
			{
				Swal.fire('You can not add process selection before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}



			var ajax_url = "{{ URL::to('thermal_submitprocessselection') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			/*if (!frm_post_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}*/

			//alert("here");


			var frm_process_selection_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_process_selection').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_process_selection_data.append(input.name, input.value);
			});




			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_process_selection_data,
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
					if (data.alert_type == "succ")
					{

							$("#process_selection_general_details_id").val(data.process_selection_general_details_id);

							if (data.mode=='add')
							{

								swal.fire({ text: data.message}).then(function(){
									//window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//$("#process_selection_edit_id").val('');
													//window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;

													//alert("here");

													//document.getElementById('material_requirement_link').click();
													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/materialrequirement";
												}
												);


							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
													//window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/materialrequirement";
													//document.getElementById('material_requirement_link').click();
													//window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+data.pre_press_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}

		function material_requirement_ajax_submit(event)
		{
			//alert("here material requirement");


			if($("#material_requirement_general_details_id").val()=="0")
			{
				Swal.fire('You can not add material requirement before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}

			//alert($("#units option:selected").val());
			if($('.material_requirement_wrapper #rm_category').val()=="" && $('.material_requirement_wrapper #pcs').val()=="" && $('.material_requirement_wrapper #wastage_allowed').val()=="" && $(".material_requirement_wrapper #units option:selected").val()=="" && $(".material_requirement_wrapper #rm_item option:selected").val()=="" && $(".material_requirement_wrapper #type option:selected").val()=="" &&  $(".material_requirement_wrapper #rm_category option:selected").val()=="")
			{
				window.location.href = "<?php echo url("/jobcard"); ?>";
				//Swal.fire('Please enter value in paper details.', '', 'error');
				event.preventDefault();
				return false;
			}





			var ajax_url = "{{ URL::to('thermal_submitmaterialrequirement') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			/*if (!frm_post_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}*/

			//alert("here");


			var frm_material_requirement_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_material_requirement').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_material_requirement_data.append(input.name, input.value);
			});




			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_material_requirement_data,
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
					if (data.alert_type == "succ")
					{

							$("#material_requirement_general_details_id").val(data.material_requirement_general_details_id);

							if (data.mode=='add')
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.href = "<?php echo url("/jobcard"); ?>";
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//$("#material_requirement_edit_id").val('');
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.material_requirement_general_details_id;

													//alert("here");

													//document.getElementById('material_requirement_link').click();
												}
												);


							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.href = "<?php echo url("/jobcard"); ?>";
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//document.getElementById('material_requirement_link').click();
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.material_requirement_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}

        function material_requirement_ajax_submit1(event)
		{
			//alert("here material requirement");


			if($("#material_requirement_general_details_id").val()=="0")
			{
				Swal.fire('You can not add material requirement before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}

			//alert($("#units option:selected").val());
			if($('.material_requirement_wrapper #rm_category').val()=="" && $('.material_requirement_wrapper #pcs').val()=="" && $('.material_requirement_wrapper #wastage_allowed').val()=="" && $(".material_requirement_wrapper #units option:selected").val()=="" && $(".material_requirement_wrapper #rm_item option:selected").val()=="" && $(".material_requirement_wrapper #type option:selected").val()=="" &&  $(".material_requirement_wrapper #rm_category option:selected").val()=="")
			{
				window.location.reload(true);
				//Swal.fire('Please enter value in paper details.', '', 'error');
				event.preventDefault();
				return false;
			}
			var ajax_url = "{{ URL::to('thermal_submitmaterialrequirement') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			/*if (!frm_post_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}*/

			var frm_material_requirement_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_material_requirement').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_material_requirement_data.append(input.name, input.value);
			});
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_material_requirement_data,
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
					if (data.alert_type == "succ")
					{

							$("#material_requirement_general_details_id").val(data.material_requirement_general_details_id);
							if (data.mode=='add'){
								swal.fire({ text: data.message}).then(function(){
									function material_requirement_ajax_submit(event)
		{
			//alert("here material requirement");


			if($("#material_requirement_general_details_id").val()=="0")
			{
				Swal.fire('You can not add material requirement before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}

			//alert($("#units option:selected").val());
			if($('.material_requirement_wrapper #rm_category').val()=="" && $('.material_requirement_wrapper #pcs').val()=="" && $('.material_requirement_wrapper #wastage_allowed').val()=="" && $(".material_requirement_wrapper #units option:selected").val()=="" && $(".material_requirement_wrapper #rm_item option:selected").val()=="" && $(".material_requirement_wrapper #type option:selected").val()=="" &&  $(".material_requirement_wrapper #rm_category option:selected").val()=="")
			{
				window.location.reload(true);
				//Swal.fire('Please enter value in paper details.', '', 'error');
				event.preventDefault();
				return false;
			}





			var ajax_url = "{{ URL::to('thermal_submitmaterialrequirement') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			/*if (!frm_post_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}*/

			//alert("here");


			var frm_material_requirement_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_material_requirement').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_material_requirement_data.append(input.name, input.value);
			});




			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_material_requirement_data,
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
					if (data.alert_type == "succ")
					{

							$("#material_requirement_general_details_id").val(data.material_requirement_general_details_id);

							if (data.mode=='add')
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.reload(true);
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//$("#material_requirement_edit_id").val('');
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.material_requirement_general_details_id;

													//alert("here");

													//document.getElementById('material_requirement_link').click();
												}
												);


							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.reload(true);
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//document.getElementById('material_requirement_link').click();
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.material_requirement_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}
									}
								);
							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.reload(true);
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//document.getElementById('material_requirement_link').click();
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.material_requirement_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}

        function material_requirement_ajax_submit1(event)
		{
			//alert("here material requirement");


			if($("#material_requirement_general_details_id").val()=="0")
			{
				Swal.fire('You can not add material requirement before adding general details', '', 'error');
				event.preventDefault();
				return false;
			}

			//alert($("#units option:selected").val());
			if($('.material_requirement_wrapper #rm_category').val()=="" && $('.material_requirement_wrapper #pcs').val()=="" && $('.material_requirement_wrapper #wastage_allowed').val()=="" && $(".material_requirement_wrapper #units option:selected").val()=="" && $(".material_requirement_wrapper #rm_item option:selected").val()=="" && $(".material_requirement_wrapper #type option:selected").val()=="" &&  $(".material_requirement_wrapper #rm_category option:selected").val()=="")
			{
				window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/materialrequirement";
				//Swal.fire('Please enter value in paper details.', '', 'error');
				event.preventDefault();
				return false;
			}

			var ajax_url = "{{ URL::to('thermal_submitmaterialrequirement') }}";
			//var new_inserted_comp_id=$("#company_id").val();
			//$("#lns-error").hide();
			//$('#lns-error').css('display', 'none');

			/*if (!frm_post_press.valid()) {
				//btncs.stop();
				//$.unblockUI();
				return false;
			}*/

			//alert("here");


			var frm_material_requirement_data = new FormData();
			// temp_form_data.append('field_name', field_data);
			var form_data = $('#frm_material_requirement').serializeArray();
			$.each(form_data, function (key, input) {
				//alert("here there");
				frm_material_requirement_data.append(input.name, input.value);
			});

			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: frm_material_requirement_data,
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
					if (data.alert_type == "succ")
					{

							$("#material_requirement_general_details_id").val(data.material_requirement_general_details_id);

							if (data.mode=='add')
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/materialrequirement";
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//$("#material_requirement_edit_id").val('');
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.material_requirement_general_details_id;

													//alert("here");

													//document.getElementById('material_requirement_link').click();
												}
												);


							}
							else
							{

								swal.fire({ text: data.message}).then(function(){
									window.location.href = "<?php echo url("/thermal_jobcardaddedit/"); ?>"+"/"+$("#edit_id").val()+"/materialrequirement";
									//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+$("#edit_id").val();
													//document.getElementById('material_requirement_link').click();
													//window.location.href = "<?php //echo url("/jobcardaddedit/"); ?>"+"/"+data.material_requirement_general_details_id;
													//alert("here");
													//$("#edit_id").val('');
													//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
													//datatablerefresh();
												}
												);

							}
					}
					else
					{
						if (data.mode=='add'){

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);

						}
						else{

							swal.fire({ text: data.message}).then(function(){
												//alert("here");
												//$("#edit_id").val('');
												//window.location.href = "<?php //echo url("/companyaddedit/"); ?>"+"/"+new_inserted_comp_id;
											}
											);


						}
					}

				}
			});
		}

		</script>

<script>


</script>
	</body>
	<!--end::Body-->
</html>
