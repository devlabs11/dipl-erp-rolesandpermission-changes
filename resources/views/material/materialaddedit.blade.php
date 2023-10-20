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
		$module_id="34.0";
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Material</h1>
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
											
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5">
												<!--begin::Form-->
												<form class="form"  name="frm_user" onsubmit="return false;" id="frm_user">
												
												{{@csrf_field()}}


											<?php

												$id="0";
												$rm_category="";
												$rm_product_category="";
												$rm_product_category_id="";
												$material_name="";
												$description="";
												$unit="";
												$opening_balance="";
												$hs_code="";

												$box_height="";
												$box_height_unit="";
												$box_width="";
												$box_width_unit="";
												$box_length="";
												$box_length_unit="";
												$box_color="";
												$box_special="";


												$bag_height="";
												$bag_height_unit="";
												$bag_width="";
												$bag_width_unit="";
												$bag_color="";
												$bag_special="";

												$paper_width="";
												$paper_width_unit="";
												$paper_diameter="";
												$paper_diameter_unit="";
												$paper_special="";

												$core_width="";
												$core_width_unit="";
												$core_daimeter="";
												$core_daimeter_unit="";
												$core_special="";


												$chemical_make="";
												$chemical_type="";
												$chemical_special="";


												$paper2_papermake="";
												$paper2_width="";
												$paper2_width_unit="";
												$paper2_colour="";
												$paper2_gsm="";
												$paper2_carbonslide="";
												$paper2_special="";
												$paper2_hs_code="";
												$paper2_formate="";

												$ink_make="";
												$ink_type="";
												$ink_color="";
												$ink_special="";


												$printed_product_height="";
												$printed_product_height_unit="";
												$printed_product_width="";
												$printed_product_width_unit="";
												$printed_product_part_no="";
												

												$rm_product_category_description="";
												$rm_category_name="";
												$rm_category_name_check="";
												
												


												if(is_array($tbl_material))
												{
													foreach($tbl_material as $tbl_material)
													{
														$id=$tbl_material->id;
														$rm_category=$tbl_material->rm_category;

														//echo $rm_category;die;
														$tbl_rm_category = DB::select("select * from tbl_rm_category where id='".$rm_category."'");
														//var_dump($tbl_rm_category);die;


														foreach($tbl_rm_category as $tbl_rm_category){
															$rm_category_name_check=$tbl_rm_category->name;

															//echo $rm_category_name;die;
														}

														$rm_product_category=$tbl_material->rm_product_category;

														$tbl_rm_product_category = DB::select("select * from tbl_rm_product_category");
									
														foreach($tbl_rm_product_category as $tbl_rm_product_category)
														{
															$rm_product_category_description=$tbl_rm_product_category->name;
															$rm_product_category_id=$tbl_rm_product_category->id;
														}

														$material_name=$tbl_material->name;
														$description=$tbl_material->description;
														$unit=$tbl_material->unit;
														$opening_balance=$tbl_material->opening_balance;
														$hs_code=$tbl_material->hs_code;


														$box_height=$tbl_material->box_height;
														$box_height_unit=$tbl_material->box_height_unit;
														$box_width=$tbl_material->box_width;
														$box_width_unit=$tbl_material->box_width_unit;
														$box_length=$tbl_material->box_length;
														$box_length_unit=$tbl_material->box_length_unit;
														$box_color=$tbl_material->box_color;
														$box_special=$tbl_material->box_special;


														$bag_height=$tbl_material->bag_height;
														$bag_height_unit=$tbl_material->bag_height_unit;
														$bag_width=$tbl_material->bag_width;
														$bag_width_unit=$tbl_material->bag_width_unit;
														$bag_color=$tbl_material->bag_color;
														$bag_special=$tbl_material->bag_special;


														
														
														$paper_width=$tbl_material->paper_width;
														$paper_width_unit=$tbl_material->paper_width_unit;
														$paper_diameter =$tbl_material->paper_diameter;
														$paper_diameter_unit =$tbl_material->paper_diameter_unit;
														$paper_special=$tbl_material->paper_special;


														$core_width=$tbl_material->core_width;
														$core_width_unit=$tbl_material->core_width_unit;
														$core_daimeter =$tbl_material->core_daimeter;
														$core_daimeter_unit =$tbl_material->core_daimeter_unit;
														$core_special=$tbl_material->core_special;

														$chemical_make=$tbl_material->chemical_make;
														$chemical_type=$tbl_material->chemical_type;
														$chemical_special=$tbl_material->chemical_special;


														$paper2_papermake=$tbl_material->paper2_papermake;
														$paper2_width=$tbl_material->paper2_width;
														$paper2_width_unit=$tbl_material->paper2_width_unit;
														$paper2_colour=$tbl_material->paper2_colour;
														$paper2_gsm=$tbl_material->paper2_gsm;
														$paper2_carbonslide=$tbl_material->paper2_carbonslide;
														$paper2_special=$tbl_material->paper2_special;
														$paper2_hs_code=$tbl_material->paper2_hs_code;
														$paper2_formate=$tbl_material->paper2_formate;

														$ink_make=$tbl_material->ink_make;
														$ink_type=$tbl_material->ink_type;
														$ink_color=$tbl_material->ink_color;
														$ink_special=$tbl_material->ink_special;


														$printed_product_height=$tbl_material->printed_product_height;
														$printed_product_height_unit=$tbl_material->printed_product_height_unit;
														$printed_product_width=$tbl_material->printed_product_width;
														$printed_product_width_unit=$tbl_material->printed_product_width_unit;
														$printed_product_part_no=$tbl_material->printed_product_part_no;
													}
													
												}

												//echo $bag_width_unit;die;


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
																	<span>RM Category</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Category."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="rm_category" id="rm_category" aria-label="Select a RM Category" data-control="select2" data-placeholder="Select a RM Category..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php
																			
																			$tbl_rm_category = DB::select("select * from tbl_rm_category");
									
																			foreach($tbl_rm_category as $tbl_rm_category){
																				$rm_category_name=$tbl_rm_category->name;
																				$rm_category_id=$tbl_rm_category->id;
																				$selected="";
																				if($rm_category==$rm_category_id)
																				{
																					$selected="selected='selected'";
																				}

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
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>RM Product Category</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select RM Product Category."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="rm_product_category" id="rm_product_category" aria-label="Select RM Product Category" data-control="select2" data-placeholder="Select RM Product Category..."  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<?php
																			
																			$tbl_rm_product_category = DB::select("select * from tbl_rm_product_category");
									
																			foreach($tbl_rm_product_category as $tbl_rm_product_category){
																				$rm_product_category_name=$tbl_rm_product_category->name;
																				$rm_product_category_id=$tbl_rm_product_category->id;
																				$selected="";
																				if($rm_product_category==$rm_product_category_id)
																				{
																					$selected="selected='selected'";
																				}

																				

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
																	<span>Name</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the name."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="material_name" id="material_name" value="<?php echo $material_name; ?>" />
																
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
																	<span>Description</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the description."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<textarea class="form-control form-control-solid" name="description" id="description">{{$description}}</textarea>
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
																	<span>Unit</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Unit."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="unit" id="unit" aria-label="Select unit" data-control="select2" data-placeholder="Select unit..."  class="form-select form-select-solid lh-1 py-3">
																			<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($unit==$unit_id)
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

													<!--begin::Col-->
													<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold form-label mt-3">
																<span>Opening Balance</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the opening balance."></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="opening_balance" id="opening_balance" value="<?php echo $opening_balance; ?>" />
															
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
																<span>HS Code</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the HS Code."></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="hs_code" id="hs_code" value="<?php echo $hs_code; ?>" />
															
															<!--end::Input-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Col-->

												</div>
												<!--end::Row-->

												<div id="box_details">


													<h3>Box Details </h3>
													<BR/>
													
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Height</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="box_height" id="box_height" value="<?php echo $box_height; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#box_details > div > div:nth-child(1) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="box_height_unit" id="box_height_unit" aria-label="Height Unit" data-control="select2" data-placeholder="Height Unit..."  class="form-select form-select-solid lh-1 py-3">
																			<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($box_height_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Width</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="box_width" id="ox_bwidth" value="<?php echo $box_width; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#box_details > div > div:nth-child(2) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="box_width_unit" id="ox_bwidth_unit" aria-label="Width Unit" data-control="select2" data-placeholder="Width Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($box_width_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
																				}
																			?>
																	</select>
																	<!--end::Select2-->
																
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
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="box_length" id="box_length" value="<?php echo $box_length; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#box_details > div > div:nth-child(3) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="box_length_unit" id="box_length_unit" aria-label="Box Length Unit" data-control="select2" data-placeholder="Box Length Unit..."  class="form-select form-select-solid lh-1 py-3">
																	<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($box_length_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
																<span>Color</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the color."></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="box_color" id="box_color" value="<?php echo $box_color; ?>" style="display:inline !important;width:80%;margin-left:5px" />
															
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
																<span >Special</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the special."></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="box_special" id="box_special" value="<?php echo $box_special; ?>" style="display:inline !important;width:78%;margin-left:5px" />
															
															<!--end::Input-->
														</div>
														<!--end::Input group-->

															
														</div>
														<!--end::Col-->

														

													</div>
													<!--end::Row-->
													<br/>

												</div>



												<div id="bag_details">


													<h3>Plastic Bag Details </h3>
													<BR/>
													
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Height</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="bag_height" id="bag_height" value="<?php echo $bag_height; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#bag_details > div > div:nth-child(1) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="bag_height_unit" id="bag_height_unit" aria-label="Height Unit" data-control="select2" data-placeholder="Height Unit..."  class="form-select form-select-solid lh-1 py-3">
																			<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($bag_height_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Width</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="bag_width" id="bag_width" value="<?php echo $bag_width; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#bag_details > div > div:nth-child(2) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="bag_width_unit" id="bag_width_unit" aria-label="Width Unit" data-control="select2" data-placeholder="Width Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($bag_width_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
																				}
																			?>
																	</select>
																	<!--end::Select2-->
																
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
																<span>Color</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the color."></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="bag_color" id="bag_color" value="<?php echo $bag_color; ?>" style="display:inline !important;width:80%;margin-left:5px" />
															
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
																	<span >Special</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the special."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="bag_special" id="bag_special" value="<?php echo $bag_special; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->
														

													</div>
													<!--end::Row-->
													
													
													<br/>

												</div>



												<div id="paper_details">


													<h3>OTC Paper Details </h3>
													<BR/>
													
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

													


														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Width</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper_width" id="paper_width" value="<?php echo $paper_width; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#paper_details > div > div:nth-child(1) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="paper_width_unit" id="paper_width_unit" aria-label="Width Unit" data-control="select2" data-placeholder="Width Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($paper_width_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Diameter</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Diameter ."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper_diameter" id="paper_diameter" value="<?php echo $paper_diameter; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#paper_details > div > div:nth-child(2) > div > span
																				{
																					width:25% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="paper_diameter_unit" id="paper_diameter_unit" aria-label="Width Unit" data-control="select2" data-placeholder="Diameter Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($paper_diameter_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
																				}
																			?>
																	</select>
																	<!--end::Select2-->
																
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
																	<span >Special</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the special."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper_special" id="paper_special" value="<?php echo $paper_special; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->
														

													</div>
													<!--end::Row-->
													
													
													<br/>

												</div>


												<div id="core_details">


													<h3>Core Details </h3>
													<BR/>
													
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

													


														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Width</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="core_width" id="core_width" value="<?php echo $core_width; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#core_details > div > div:nth-child(1) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="core_width_unit" id="core_width_unit" aria-label="Width Unit" data-control="select2" data-placeholder="Width Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($core_width_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Diameter</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Diameter ."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="core_daimeter" id="core_daimeter" value="<?php echo $core_daimeter; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#core_details > div > div:nth-child(2) > div > span
																				{
																					width:25% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="core_daimeter_unit" id="core_daimeter_unit" aria-label="Daimeter Unit" data-control="select2" data-placeholder="Daimeter Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($core_daimeter_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
																				}
																			?>
																	</select>
																	<!--end::Select2-->
																
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
																	<span >Special</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the special."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="core_special" id="core_special" value="<?php echo $core_special; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->
														

													</div>
													<!--end::Row-->
													
													
													<br/>

												</div>


												<div id="chemical_details">


													<h3>Chemical Details </h3>
													<BR/>
													
											
													



													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">


															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Make</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the make."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="chemical_make" id="chemical_make" value="<?php echo $chemical_make; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >Type</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the type."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="chemical_type" id="chemical_type" value="<?php echo $chemical_type; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >Special</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the special."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="chemical_special" id="chemical_special" value="<?php echo $chemical_special; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->


													
														

													</div>
													<!--end::Row-->
													
													
													<br/>

												</div>



												<div id="paper2_details">


													<h3>Paper Details </h3>
													<BR/>
													
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

													
														<!--begin::Col-->
														<div class="col">


															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Paper Make</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the paper make."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_papermake" id="paper2_papermake" value="<?php echo $paper2_papermake; ?>" style="display:inline !important;width:70%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->



														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Width</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_width" id="paper2_width" value="<?php echo $paper2_width; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>

																				#paper2_details > div:nth-child(3) > div:nth-child(2) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="paper2_width_unit" id="paper2_width_unit" aria-label="Width Unit" data-control="select2" data-placeholder="Width Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($paper2_width_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
																				}
																			?>
																	</select>
																	<!--end::Select2-->
																
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
																	<span >Colour</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the colour."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_colour" id="paper2_colour" value="<?php echo $paper2_colour; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >GSM</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the gsm."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_gsm" id="paper2_gsm" value="<?php echo $paper2_gsm; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >Carbon Slide</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the carbon slide."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_carbonslide" id="paper2_carbonslide" value="<?php echo $paper2_carbonslide; ?>" style="display:inline !important;width:70%;margin-left:5px" />
																
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
																	<span >Special</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the special."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_special" id="paper2_special" value="<?php echo $paper2_special; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >HS Code</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the hs code."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_hs_code" id="paper2_hs_code" value="<?php echo $paper2_hs_code; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >Formate</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the formate."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="paper2_formate" id="paper2_formate" value="<?php echo $paper2_formate; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->
														

													</div>
													<!--end::Row-->
													
													
													<br/>

												</div>


												<div id="ink_details">


													<h3>INK Details </h3>
													<BR/>
													
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">


															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>INK Make</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the ink make."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="ink_make" id="ink_make" value="<?php echo $ink_make; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >Type</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the type."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="ink_type" id="ink_type" value="<?php echo $ink_type; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >Color</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the color."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="ink_color" id="ink_color" value="<?php echo $ink_color; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
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
																	<span >Special</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the special."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="ink_special" id="ink_special" value="<?php echo $ink_special; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->


													
														

													</div>
													<!--end::Row-->
													
													
													<br/>

												</div>


												<div id="printed_product_details">


													<h3>Printed Product Details </h3>
													<BR/>



													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Height</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the height."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="printed_product_height" id="printed_product_height" value="<?php echo $printed_product_height; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#printed_product_details > div > div:nth-child(1) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="printed_product_height_unit" id="printed_product_height_unit" aria-label="Height Unit" data-control="select2" data-placeholder="Height Unit..."  class="form-select form-select-solid lh-1 py-3">
																			<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($printed_product_height_unit==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
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
															<div class="fv-row mb-4">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span >Width</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the width."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="printed_product_width" id="printed_product_width" value="<?php echo $printed_product_width; ?>" style="width:50% !important;display:inline !important;" />																
																<!--end::Input-->

																			<style>
																				#printed_product_details > div > div:nth-child(2) > div > span
																				{
																					width:30% !important;
																				}
																			</style>
																
																	<!--begin::Select2-->
																	<select style="display:inline !important;width:30% !important;" name="printed_product_width_unit" id="printed_product_width_unit" aria-label="Width Unit" data-control="select2" data-placeholder="Width Unit"  class="form-select form-select-solid lh-1 py-3">
																		<option value="">Select</option>
																			<?php
																				
																				$mst_unit = DB::select("select * from mst_unit");
										
																				foreach($mst_unit as $mst_unit){
																					$unit_description=$mst_unit->description;
																					$unit_id=$mst_unit->id;
																					$selected="";
																					if($printed_product_width==$unit_id)
																					{
																						$selected="selected='selected'";
																					}

																					echo "<option $selected value='".$unit_id."'>$unit_description</option>";
																				}
																			?>
																	</select>
																	<!--end::Select2-->
																
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
																	<span >Part no</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter part no."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="printed_product_part_no" id="printed_product_part_no" value="<?php echo $printed_product_part_no; ?>" style="display:inline !important;width:78%;margin-left:5px" />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															
														</div>
														<!--end::Col-->

													


													
														

													</div>
													<!--end::Row-->
													
													
													<br/>

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

		
		$("#rm_category").change(function()
		{
			var selected_rm_category = $("#rm_category option:selected").val();
			var selected_rm_category_text=$("#rm_category option:selected").text();

			if(selected_rm_category_text=="CORR BOXES")
			{
				$("#box_details").show();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").hide();

			}
			else if(selected_rm_category_text=="PLASTIC BAGS")
			{
				$("#box_details").hide();
				$("#bag_details").show();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").hide();
			}
			else if(selected_rm_category_text=="OTC PAPER")
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").show();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").hide();
			}
			else if(selected_rm_category_text=="CORE")
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").show();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").hide();
			}
			else if(selected_rm_category_text=="CHEMICALS")
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").show();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").hide();
			}
			else if(selected_rm_category_text=="PAPER")
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").show();
				$("#ink_details").hide();
				$("#printed_product_details").hide();
			}
			else if(selected_rm_category_text=="INK")
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").show();
				$("#printed_product_details").hide();
			}
			else if(selected_rm_category_text=="PRINTED PRODUCTS")
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").show();
			}
			else
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").hide();
			}


			var edit_id=$("#edit_id").val();
			if(edit_id=="0")
			{
			$('#rm_product_category').val(null).trigger('change');
			$('#rm_product_category').empty()
			//$('#state').trigger('change');
			$("#rm_product_category").append("<option value=''>SELECT</option>");

			$.ajax({
						type: "GET",
						data: "selected_rm_category="+selected_rm_category,
						url: "{{ URL::to('ajax_populate_rm_product_category') }}",
						success: function (response_json) 
						{
							var response= JSON.parse(response_json);
							//alert(response);
							$("#rm_product_category").select2({
													data: response.results
												});
							
						}
					});
			}
			else
			{

			}
		});

		$(document).ready(function() 
		{
			var edit_id=$("#edit_id").val();
			if(edit_id=="0")
			{
				$("#box_details").hide();
				$("#bag_details").hide();
				$("#paper_details").hide();
				$("#core_details").hide();
				$("#chemical_details").hide();
				$("#paper2_details").hide();
				$("#ink_details").hide();
				$("#printed_product_details").hide();
			
			}
			else
			{

				var rm_category_name_check="<?php echo $rm_category_name_check; ?>";
				var rm_category="<?php echo $rm_category; ?>";
				//alert(rm_category);
				//alert(rm_category_name_check);

				if(rm_category_name_check=="CORR BOXES")
				{
					$("#box_details").show();
					$("#bag_details").hide();
					$("#paper_details").hide();
					$("#core_details").hide();
					$("#chemical_details").hide();
					$("#paper2_details").hide();
					$("#ink_details").hide();
					$("#printed_product_details").hide();

				}
				else if(rm_category_name_check=="PLASTIC BAGS")
				{
					$("#box_details").hide();
					$("#bag_details").show();
					$("#paper_details").hide();
					$("#core_details").hide();
					$("#chemical_details").hide();
					$("#paper2_details").hide();
					$("#ink_details").hide();
					$("#printed_product_details").hide();
				}
				else if(rm_category_name_check=="OTC PAPER")
				{
					$("#box_details").hide();
					$("#bag_details").hide();
					$("#paper_details").show();
					$("#core_details").hide();
					$("#chemical_details").hide();
					$("#paper2_details").hide();
					$("#ink_details").hide();
					$("#printed_product_details").hide();
				}
				else if(rm_category_name_check=="CORE")
				{
					$("#box_details").hide();
					$("#bag_details").hide();
					$("#paper_details").hide();
					$("#core_details").show();
					$("#chemical_details").hide();
					$("#paper2_details").hide();
					$("#ink_details").hide();
					$("#printed_product_details").hide();
				}
				else if(rm_category_name_check=="CHEMICALS")
				{
					$("#box_details").hide();
					$("#bag_details").hide();
					$("#paper_details").hide();
					$("#core_details").hide();
					$("#chemical_details").show();
					$("#paper2_details").hide();
					$("#ink_details").hide();
					$("#printed_product_details").hide();
				}
				else if(rm_category_name_check=="PAPER")
				{
					$("#box_details").hide();
					$("#bag_details").hide();
					$("#paper_details").hide();
					$("#core_details").hide();
					$("#chemical_details").hide();
					$("#paper2_details").show();
					$("#ink_details").hide();
					$("#printed_product_details").hide();
				}
				else if(rm_category_name_check=="INK")
				{
					$("#box_details").hide();
					$("#bag_details").hide();
					$("#paper_details").hide();
					$("#core_details").hide();
					$("#chemical_details").hide();
					$("#paper2_details").hide();
					$("#ink_details").show();
					$("#printed_product_details").hide();
				}
				else if(rm_category_name_check=="PRINTED PRODUCTS")
				{
					$("#box_details").hide();
					$("#bag_details").hide();
					$("#paper_details").hide();
					$("#core_details").hide();
					$("#chemical_details").hide();
					$("#paper2_details").hide();
					$("#ink_details").hide();
					$("#printed_product_details").show();
				}
				else
				{
					$("#box_details").hide();
					$("#bag_details").hide();
					$("#paper_details").hide();
					$("#core_details").hide();
					$("#chemical_details").hide();
					$("#paper2_details").hide();
					$("#ink_details").hide();
					$("#printed_product_details").hide();
				}

				//rm_product_category_description="<?php //echo $rm_product_category_description; ?>";
				//alert(rm_product_category_description);
				//rm_product_category_id="<?php //echo $rm_product_category_id; ?>";
				//alert(rm_product_category_id);

				/*$("#rm_product_category").select2("trigger", "select", { 
                                data: { id: rm_product_category_id,text:rm_product_category_description} 
                        });*/

				//$("#rm_product_category").select2("val",rm_product_category_id);
				//$("#rm_product_category").val(rm_product_category_id);
				//$("#rm_product_category").trigger('change');
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
					t.value?(window.location.href = "{{ URL::to('material') }}"):"cancel"===t.dismiss&&Swal.fire({
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
						/*rm_category: {
                            required: true
                        },
						rm_product_category: {
                            required: true
                        },
						material_name: {
                            required: true
                        },
						description:{
							required: true
						},
						unit:{
							required: true
						},
						opening_balance: {
                            required: true
                        },
						hs_code: {
                            required: true
                        },*/
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

					
                        form_success.show();
                        form_error.hide();

                        $.post("{{ URL::to('submitmaterial') }}", $("#frm_user").serialize(), function (data) {
							//alert(data.alert_type);
							//alert(data.mode);
							if (data.alert_type == "succ") {
                                if (data.mode=='add')
								{
									
								
									swal.fire({ text: data.message}).then(function(){ 
														//r.reset(),i.hide()
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('material') }}";
													}
													);

									
								}
								else
								{

									swal.fire({ text: data.message}).then(function(){ 
														//r.reset(),i.hide()
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('material') }}";
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
														window.location.href = "{{ URL::to('material') }}";
														//datatablerefresh();
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){ 
														//r.reset(),i.hide()
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('material') }}";	
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