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
	$module_id="36.0";
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Product</h1>
									<?php
									}
									else
									{
									?>
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Product</h1>
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
													<h2>Add New Product</h2>
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
													$name="";
													$registered_address="";
													$plants_count=0;
													$product_category="";
													$product_type="";

                                                    $company_id="";
                                                    $description_id = "";
                                                    $gst = '';
													$pre_press_product_count=0;
													$press_product_count=0;
													$post_press_product_count=0;

													//$edit_id="0";

													if(is_array($tbl_product))
													{
														foreach($tbl_product as $tbl_product)
														{
															//var_dump($tbl_process);die;
                                                            $id=$tbl_product->id;
                                                            $product_category=$tbl_product->product_category;
                                                            $product_type=$tbl_product->product_type;
                                                            $company_id = $tbl_product->company_id;
                                                            $description_id = explode(",",$tbl_product->description_id);
                                                            $tbl_desc = DB::table("description_masters")->orderByRaw('FIELD(id, '.implode("," , $description_id).')')->get();
                                                            $gst = $tbl_product->gst;
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

																			$tbl_product_category = DB::select("select * from tbl_product_category");

																			foreach($tbl_product_category as $tbl_product_category){
																				$product_category_name=$tbl_product_category->product_category;
																				$product_category_id=$tbl_product_category->id;
																				$selected="";
																				if($product_category==$product_category_id)
																				{
																					$selected="selected='selected'";
																				}



																				echo "<option $selected value='".$product_category_id."'>$product_category_name</option>";
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
																	<span class="required">Product Type</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the product type."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="product_type" id="product_type" value="<?php echo $product_type; ?>" />

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
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select Product Category."></i>
																</label>
																<!--end::Label-->
																<div class="w-100">
																	<div class="form-floating border rounded">
																		<!--begin::Select2-->
																		<select name="company" id="company" aria-label="Select Company" data-control="select2" data-placeholder="Select Company..."  class="form-select form-select-solid lh-1 py-3">
                                                                        @foreach ($tbl_company as $company)
                                                                            <option value="{{$company->id}}"@if ($company_id == $company->id)
                                                                                'selected'
                                                                            @endif>{{$company->name}}</option>
                                                                        @endforeach
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
																	<span class="required">Product Description</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the Product Description."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select multiple name="description[]" id="description" aria-label="Select description" data-control="select2" data-placeholder="Select description..." data-reorder="1"  class="form-select form-select-solid lh-1 py-3">
                                                                    @foreach ($tbl_desc as $desc)
                                                                        <option value="{{$desc->id}}"
                                                                          @if ($description_id != '')
                                                                            @if(in_array($desc->id,$description_id)) selected @endif  @endif
                                                                        >{{$desc->text}}</option>
                                                                    @endforeach
                                                                </select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->


													</div>
													<!--end::Row-->
                                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<div class="col">
                                                                    <div class="fv-row mb-7">
                                                                        <label class="fs-6 fw-bold form-label mt-3">
                                                                            <span class="required">GST</span>
                                                                        </label>
                                                                        <input type="number" class="form-control form-control-solid" name="gst" id="gst" value="{{ $gst }}">
                                                                    </div>
                                                                </div>
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->
													</div>

													<div class="separator mb-6"></div>


													<h2>Pre Press</h2>


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
																		<div style="text-align:right"><a href="javascript:void(0);" class="add_button" title="Add field">Add</a></div>
																	</th>
																</tr>
																<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="prepress[prepress_id][1]" value="0"/>
																		<select name="prepress[process][1]" id="prepress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_process" tabindex="-1" aria-hidden="true">
																		<option value="">Select</option>
																		<?php

																			$tbl_process_master = DB::select("select * from tbl_process_master where category='1'");

																			foreach($tbl_process_master as $tbl_process_master){
																				$process_name=$tbl_process_master->name;
																				$process_id=$tbl_process_master->id;
																				$selected="";
																				// if($company==$rm_product_category_id)
																				// {
																				// 	$selected="selected='selected'";
																				// }



																				echo "<option $selected value='".$process_id."'>$process_name</option>";
																			}
																		?>

																		</select>
																	</td>
																	<td>
																		<select name="prepress[basicmachine][1]" id="prepress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_basicmachine" tabindex="-1" aria-hidden="true">
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
																		<select name="prepress[alternativemachine][1]" id="prepress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_alternativemachine" tabindex="-1" aria-hidden="true">
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
																	<select name="prepress[qc][1]" id="prepress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-pre_press_qc" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$mst_qc = DB::select("select * from mst_qc");

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
													<table id='widthtable' class='field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
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
																		<div style="text-align:right"><a href="javascript:void(0);" class="add_button" title="Add field">Add</a></div>
																	</th>
																</tr>
														<?php
														//echo $id;die;
														$tbl_pre_press_product_count = DB::select("select count(*) as totalcount from tbl_product_pre_press where product_id='".$id."'");
														//var_dump($tbl_plants_count);die;
														foreach($tbl_pre_press_product_count as $tbl_pre_press_product_count)
														{
															//var_dump($tbl_plants_count);die;
															$pre_press_product_count=$tbl_pre_press_product_count->totalcount;
														}
														$tbl_product_pre_press = DB::select("select * from tbl_product_pre_press where product_id='".$id."'");

														$j=0;
														foreach($tbl_product_pre_press as $tbl_product_pre_press)
														{
															$j++;
															//$pre_press_product_count++;
															$pree_press_id=$tbl_product_pre_press->id;
															$process=$tbl_product_pre_press->process;
															$basicmachine=$tbl_product_pre_press->basicmachine;
															$alternativemachine=$tbl_product_pre_press->alternativemachine;
															$qc=$tbl_product_pre_press->qc;


													?>

																<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="prepress[prepress_id][<?php echo $j; ?>]" value="<?php echo $pree_press_id; ?>"/>
																		<select name="prepress[process][<?php echo $j; ?>]" id="prepress[process][<?php echo $j; ?>]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-process" tabindex="-1" aria-hidden="true">
																		<option value="">Select</option>
																		<?php

																			$tbl_process_master = DB::select("select * from tbl_process_master where category='1'");

																			foreach($tbl_process_master as $tbl_process_master){
																				$process_name=$tbl_process_master->name;
																				$process_id=$tbl_process_master->id;
																				$selected="";
																				if($process==$process_id)
																				{
																					$selected="selected='selected'";
																				}



																				echo "<option $selected value='".$process_id."'>$process_name</option>";
																			}
																		?>

																		</select>
																	</td>
																	<td>
																	<select name="prepress[basicmachine][<?php echo $j; ?>]" id="prepress[basicmachine][<?php echo $j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-basicmachine" tabindex="-1" aria-hidden="true">
																			<option value="">Select</option>
																			<?php

																				$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																				foreach($tbl_machine_master as $tbl_machine_master){
																					$basicmachine_name=$tbl_machine_master->name;
																					$basicmachine_id=$tbl_machine_master->id;
																					$selected="";
																					if($basicmachine==$basicmachine_id)
																					{
																						$selected="selected='selected'";
																					}



																					echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																				}
																			?>
																		</select>
																	</td>
																	<td>
																	<select name="prepress[alternativemachine][<?php echo $j; ?>]" id="prepress[alternativemachine][<?php echo $j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-alternativemachine" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$tbl_machine_master = DB::select("select * from tbl_machine_master where category='1'");

																					foreach($tbl_machine_master as $tbl_machine_master){
																						$alternativemachine_name=$tbl_machine_master->name;
																						$alternativemachine_id=$tbl_machine_master->id;
																						$selected="";
																						if($alternativemachine==$alternativemachine_id)
																						{
																							$selected="selected='selected'";
																						}



																						echo "<option $selected value='".$alternativemachine_id."'>$alternativemachine_name</option>";
																					}
																				?>
																			</select>
																	</td>
																	<td>
																	<select name="prepress[qc][<?php echo $j; ?>]" id="prepress[qc][<?php echo $j; ?>]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-qc" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$mst_qc = DB::select("select * from mst_qc");

																					foreach($mst_qc as $mst_qc){
																						$qc_name=$mst_qc->name;
																						$qc_id=$mst_qc->id;
																						$selected="";
																						if($qc==$qc_id)
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
																		if($j==1)
																		{

																		}
																		else
																		{
																		?>
																			<a href="javascript:void(0);" class="remove_button" delete-id="<?php echo $pree_press_id; ?>">Delete</a>
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




													<div class="separator mb-6"></div>


													<h2>Press</h2>


													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
													<?php
													if($id=="0")
													{
													?>
														<table id='presstable' class='press_field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
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
																		<div style="text-align:right"><a href="javascript:void(0);" class="press_add_button" title="Add field">Add</a></div>
																	</th>
																</tr>
																<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="press[press_id][1]" value="0"/>
																		<select name="press[process][1]" id="press[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-process" tabindex="-1" aria-hidden="true">
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
																		<select name="press[basicmachine][1]" id="press[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-basicmachine" tabindex="-1" aria-hidden="true">
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
																		<select name="press[alternativemachine][1]" id="press[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-alternativemachine" tabindex="-1" aria-hidden="true">
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
																	<select name="press[qc][1]" id="press[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-qc" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$mst_qc = DB::select("select * from mst_qc");

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
													<table id='presstable' class='press_field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
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
																		<div style="text-align:right"><a href="javascript:void(0);" class="press_add_button" title="Add field">Add</a></div>
																	</th>
																</tr>
														<?php
														//echo $id;die;
														$tbl_press_product_count = DB::select("select count(*) as totalcount from tbl_product_press where product_id='".$id."'");
														//var_dump($tbl_press_product_count);die;
														foreach($tbl_press_product_count as $tbl_press_product_count)
														{
															//var_dump($tbl_press_product_count);die;
															$press_product_count=$tbl_press_product_count->totalcount;
														}
														$tbl_product_press = DB::select("select * from tbl_product_press where product_id='".$id."'");

														$press_j=0;
														foreach($tbl_product_press as $tbl_product_press)
														{
															$press_j++;
															//$press_product_count++;
															$press_id=$tbl_product_press->id;
															$process=$tbl_product_press->process;

															//echo $process;die;
															$basicmachine=$tbl_product_press->basicmachine;
															$alternativemachine=$tbl_product_press->alternativemachine;
															$qc=$tbl_product_press->qc;


													?>

																<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="press[press_id][<?php echo $press_j; ?>]" value="<?php echo $press_id; ?>"/>
																		<select name="press[process][<?php echo $press_j; ?>]" id="press[process][<?php echo $press_j; ?>]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-process" tabindex="-1" aria-hidden="true">
																		<option value="">Select</option>
																		<?php

																			$tbl_process_master = DB::select("select * from tbl_process_master where category='3'");

																			foreach($tbl_process_master as $tbl_process_master){
																				$process_name=$tbl_process_master->name;
																				$process_id=$tbl_process_master->id;
																				$selected="";
																				if($process==$process_id)
																				{
																					$selected="selected='selected'";
																				}



																				echo "<option $selected value='".$process_id."'>$process_name</option>";
																			}
																		?>

																		</select>
																	</td>
																	<td>
																	<select name="press[basicmachine][<?php echo $press_j; ?>]" id="press[basicmachine][<?php echo $press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-basicmachine" tabindex="-1" aria-hidden="true">
																			<option value="">Select</option>
																			<?php

																				$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																				foreach($tbl_machine_master as $tbl_machine_master){
																					$basicmachine_name=$tbl_machine_master->name;
																					$basicmachine_id=$tbl_machine_master->id;
																					$selected="";
																					if($basicmachine==$basicmachine_id)
																					{
																						$selected="selected='selected'";
																					}



																					echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																				}
																			?>
																		</select>
																	</td>
																	<td>
																	<select name="press[alternativemachine][<?php echo $press_j; ?>]" id="press[alternativemachine][<?php echo $press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-alternativemachine" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$tbl_machine_master = DB::select("select * from tbl_machine_master where category='3'");

																					foreach($tbl_machine_master as $tbl_machine_master){
																						$alternativemachine_name=$tbl_machine_master->name;
																						$alternativemachine_id=$tbl_machine_master->id;
																						$selected="";
																						if($alternativemachine==$alternativemachine_id)
																						{
																							$selected="selected='selected'";
																						}



																						echo "<option $selected value='".$alternativemachine_id."'>$alternativemachine_name</option>";
																					}
																				?>
																			</select>
																	</td>
																	<td>
																	<select name="press[qc][<?php echo $press_j; ?>]" id="press[qc][<?php echo $press_j; ?>]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-qc" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$mst_qc = DB::select("select * from mst_qc");

																					foreach($mst_qc as $mst_qc){
																						$qc_name=$mst_qc->name;
																						$qc_id=$mst_qc->id;
																						$selected="";
																						if($qc==$qc_id)
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
																		if($press_j==1)
																		{

																		}
																		else
																		{
																		?>
																			<a href="javascript:void(0);" class="press_remove_button" delete-id="<?php echo $press_id; ?>">Delete</a>
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




													<div class="separator mb-6"></div>


													<h2>Post Press</h2>


													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
													<?php
													if($id=="0")
													{
													?>
														<table id='postpresstable' class='post_press_field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
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
																		<div style="text-align:right"><a href="javascript:void(0);" class="post_press_add_button" title="Add field">Add</a></div>
																	</th>
																</tr>
																<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="postpress[press_id][1]" value="0"/>
																		<select name="postpress[process][1]" id="postpress[process][1]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_process" tabindex="-1" aria-hidden="true">
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
																		<select name="postpress[basicmachine][1]" id="postpress[basicmachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_basicmachine" tabindex="-1" aria-hidden="true">
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
																		<select name="postpress[alternativemachine][1]" id="postpress[alternativemachine][1]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_alternativemachine" tabindex="-1" aria-hidden="true">
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
																	<select name="postpress[qc][1]" id="postpress[qc][1]" aria-label="Select QC" data-control="select2" data-placeholder="Select QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_qc" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$mst_qc = DB::select("select * from mst_qc");

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
													<table id='postpresstable' class='post_press_field_wrapper table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer' style='border: none;width:100% !important;min-width:100% !important;'>
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
																		<div style="text-align:right"><a href="javascript:void(0);" class="post_press_add_button" title="Add field">Add</a></div>
																	</th>
																</tr>

													<?php
														//echo $id;die;
														$tbl_post_press_product_count = DB::select("select count(*) as totalcount from tbl_product_post_press where product_id='".$id."'");
														//var_dump($tbl_press_product_count);die;
														foreach($tbl_post_press_product_count as $tbl_post_press_product_count)
														{
															//var_dump($tbl_press_product_count);die;
															$post_press_product_count=$tbl_post_press_product_count->totalcount;
														}

														$post_press_product_count=$tbl_post_press_product_count->totalcount;
														//echo $post_press_product_count;die;
														$tbl_product_post_press = DB::select("select * from tbl_product_post_press where product_id='".$id."'");
														//var_dump($tbl_product_post_press);die;
														$post_press_j=0;
														foreach($tbl_product_post_press as $tbl_product_post_press)
														{
															//var_dump($tbl_product_post_press);die;
															$post_press_j++;
															//$press_product_count++;
															$press_id=$tbl_product_post_press->id;
															$process=$tbl_product_post_press->process;

															//echo $process;die;
															$basicmachine=$tbl_product_post_press->basicmachine;
															$alternativemachine=$tbl_product_post_press->alternativemachine;
															$qc=$tbl_product_post_press->qc;
													?>

												<tr>
																	<td>
																		<input class="form-control form-control-solid required_validation" type="hidden" name="postpress[press_id][<?php echo $post_press_j; ?>]" value="<?php echo $press_id; ?>"/>
																		<select name="postpress[process][<?php echo $post_press_j; ?>]" id="postpresspress[process][<?php echo $post_press_j; ?>]" aria-label="Select Process..." data-control="select2" data-placeholder="Select Process..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_process" tabindex="-1" aria-hidden="true">
																		<option value="">Select</option>
																		<?php

																			$tbl_process_master = DB::select("select * from tbl_process_master where category='2'");

																			foreach($tbl_process_master as $tbl_process_master){
																				$process_name=$tbl_process_master->name;
																				$process_id=$tbl_process_master->id;
																				$selected="";
																				if($process==$process_id)
																				{
																					$selected="selected='selected'";
																				}



																				echo "<option $selected value='".$process_id."'>$process_name</option>";
																			}
																		?>

																		</select>
																	</td>
																	<td>
																	<select name="postpress[basicmachine][<?php echo $post_press_j; ?>]" id="postpress[basicmachine][<?php echo $post_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Basic Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_basicmachine" tabindex="-1" aria-hidden="true">
																			<option value="">Select</option>
																			<?php

																				$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																				foreach($tbl_machine_master as $tbl_machine_master){
																					$basicmachine_name=$tbl_machine_master->name;
																					$basicmachine_id=$tbl_machine_master->id;
																					$selected="";
																					if($basicmachine==$basicmachine_id)
																					{
																						$selected="selected='selected'";
																					}



																					echo "<option $selected value='".$basicmachine_id."'>$basicmachine_name</option>";
																				}
																			?>
																		</select>
																	</td>
																	<td>
																	<select name="postpress[alternativemachine][<?php echo $post_press_j; ?>]" id="postpress[alternativemachine][<?php echo $post_press_j; ?>]" aria-label="Select Basic Machine" data-control="select2" data-placeholder="Select Alternative Machine..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-post_press_alternativemachine" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$tbl_machine_master = DB::select("select * from tbl_machine_master where category='2'");

																					foreach($tbl_machine_master as $tbl_machine_master){
																						$alternativemachine_name=$tbl_machine_master->name;
																						$alternativemachine_id=$tbl_machine_master->id;
																						$selected="";
																						if($alternativemachine==$alternativemachine_id)
																						{
																							$selected="selected='selected'";
																						}



																						echo "<option $selected value='".$alternativemachine_id."'>$alternativemachine_name</option>";
																					}
																				?>
																			</select>
																	</td>
																	<td>
																	<select name="postpress[qc][<?php echo $post_press_j; ?>]" id="postpress[qc][<?php echo $post_press_j; ?>]" aria-label="Select QC" data-control="select2" data-placeholder="Select post_press_QC..." class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible" data-select2-id="select2-data-qc" tabindex="-1" aria-hidden="true">
																				<option value="">Select</option>
																				<?php

																					$mst_qc = DB::select("select * from mst_qc");

																					foreach($mst_qc as $mst_qc){
																						$qc_name=$mst_qc->name;
																						$qc_id=$mst_qc->id;
																						$selected="";
																						if($qc==$qc_id)
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
																		if($post_press_j==1)
																		{

																		}
																		else
																		{
																		?>
																			<a href="javascript:void(0);" class="post_press_remove_button" delete-id="<?php echo $press_id; ?>">Delete</a>
																		<?php
																		}
																		?>

																	</td>
																</tr>



													<?php
														}

													?>

													<?php
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


			//$('.required_field').first().select2();

			/*$(".required_field").select2( {
				placeholder: "Search Teams",
				allowClear: true,
				templateResult: formatTeams
			});*/

            // jQuery("#description").each(function(){
            //     $this = jQuery(this);
            //     if($this.attr('data-reorder')){
            //         $this.on('select2:select', function(e){
            //             var elm = e.params.data.element;
            //             $elm = jQuery(elm);
            //             $t = jQuery(this);
            //             $t.append($elm);
            //             $t.trigger('change.select2');
            //         });
            //     }
            //     $this.select2();
            // });

            $("#description").on("select2:select", function (evt) {
                var element = evt.params.data.element;
                var $element = $(element);

                $element.detach();
                $(this).append($element);
                $(this).trigger("change");
            });

			var edit_id=$("#edit_id").val();
			var maxField = 1000; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var press_wrapper = $('.press_field_wrapper');
			var post_press_wrapper = $('.post_press_field_wrapper');
			var neft_wrapper = $('.neft_field_wrapper'); //Input field wrapper

			//var wrapper = $('.field_wrapper'); //Input field wrapper
			// <td><a href="javascript:void(0);" class="remove_button">Delete</a></td>
			if(edit_id==0)
			{
				var x = 1; //Initial field counter is 1
				var press_x=1;
				var post_press_x=1;
				//alert("here");
				//$('#neft_link').click(function () {return false;});
				//$('#neft_link').attr("disabled","disabled");
			}
			else
			{
				var x="<?php echo $pre_press_product_count; ?>";
				var press_x="<?php echo $press_product_count; ?>";
				var post_press_x="<?php echo $post_press_product_count; ?>";
				//alert(press_x);
				//var neft_x="<?php //echo $neft_count; ?>";
				//var k="<?php //echo $k; ?>";
				//alert(x);
				//alert(neft_x);
				//alert(k);
				//var plants_count="<?php //echo $plants_count; ?>";
			}

			//Once add button is clicked



			//pre_press add row

			$(addButton).click(function(){

				//Check maximum number of input fields
				if(x < maxField){
					x++; //Increment field counter

					var fieldHTML= '<tr>';
				    fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="hidden" name="prepress[prepress_id]['+x+']" value="0"/>';
					//fieldHTML+='<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/>';

					fieldHTML+='<select name="prepress[process]['+x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
					 	fieldHTML+='<select name="prepress[basicmachine]['+x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
							fieldHTML+='<select name="prepress[alternativemachine]['+x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
							fieldHTML+='<select name="prepress[qc]['+x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
									fieldHTML+='<option value="">Select</option>';
										<?php
											$pre_press_mst_qc = DB::select("select * from mst_qc");
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
					 fieldHTML+='<a href="javascript:void(0);" class="remove_button" delete-id="0">Delete</a>';
					 fieldHTML+='</td>';
					 fieldHTML+='</tr>';

					$(wrapper).append(fieldHTML); //Add field html
				}
			});

			//pre_press remove row
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
						url : "{{ URL::to('deleteprepress') }}",
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


			//press add row

			$(".press_add_button").click(function(){

				//Check maximum number of input fields
				if(x < maxField){
					press_x++; //Increment field counter

					var fieldHTML= '<tr>';
				    fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="hidden" name="press[press_id]['+press_x+']" value="0"/>';
					//fieldHTML+='<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/>';

					fieldHTML+='<select name="press[process]['+press_x+']"  aria-label="Select a process" data-control="select2" data-select2-id="select2-data-process" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
					 	fieldHTML+='<select name="press[basicmachine]['+press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
							fieldHTML+='<select name="press[alternativemachine]['+press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
							fieldHTML+='<select name="press[qc]['+press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
									fieldHTML+='<option value="">Select</option>';
										<?php
											$pre_press_mst_qc = DB::select("select * from mst_qc");
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
					 fieldHTML+='<a href="javascript:void(0);" class="press_remove_button" delete-id="0">Delete</a>';
					 fieldHTML+='</td>';
					 fieldHTML+='</tr>';

					$(press_wrapper).append(fieldHTML); //Add field html
				}
			});

			//press remove row

			$(press_wrapper).on('click', '.press_remove_button', function(e){
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
						url : "{{ URL::to('deletepress') }}",
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



			//post press add row

			$(".post_press_add_button").click(function(){

				//Check maximum number of input fields
				if(x < maxField){
					post_press_x++; //Increment field counter

					var fieldHTML= '<tr>';
				    fieldHTML+='<td>';

					fieldHTML+='<input class="form-control form-control-solid required_validation" type="hidden" name="postpress[press_id]['+post_press_x+']" value="0"/>';
					//fieldHTML+='<input class="form-control form-control-solid required_validation" type="text" name="plants[ecc_no]['+x+']" value=""/>';

					fieldHTML+='<select name="postpress[process]['+post_press_x+']"  aria-label="Select a process" data-control="select2" data-select2-id="select2-data-process" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
					 	fieldHTML+='<select name="postpress[basicmachine]['+post_press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
							fieldHTML+='<select name="postpress[alternativemachine]['+post_press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
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
							fieldHTML+='<select name="postpress[qc]['+post_press_x+']"  aria-label="Select a process" data-control="select2" data-placeholder="Select a process ..."  class="neft_required required_field form-select form-select-solid lh-1 py-3">';
									fieldHTML+='<option value="">Select</option>';
										<?php
											$pre_press_mst_qc = DB::select("select * from mst_qc");
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
					 fieldHTML+='<a href="javascript:void(0);" class="post_press_remove_button" delete-id="0">Delete</a>';
					 fieldHTML+='</td>';
					 fieldHTML+='</tr>';

					$(post_press_wrapper).append(fieldHTML); //Add field html
				}
			});



			//POST press remove row

			$(post_press_wrapper).on('click', '.post_press_remove_button', function(e){
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
						url : "{{ URL::to('deletepostpress') }}",
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

			}
			else
			{

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
					t.value?(window.location.href = "{{ URL::to('product') }}"):"cancel"===t.dismiss&&Swal.fire({
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
						product_type:{
							required: true,
                        },
                        gst:{
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
                        // company_name: {
                        //     required: "This field is required",
                        //     //remote: "This state already exists. Please try another state.",
                        // },
						// company_prefix:{
						// 	minlength: "Prefix length should be 3 character.",
						// 	minlength: "Prefix length should be 3 character.",
						// }
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

				var ajax_url = "{{ URL::to('submitproduct') }}";
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
								$("#company_id").val(data.company_id);
								//alert($("#company_id").val());
                                if (data.mode=='add'){

									$("#edit_id").val('');
									//$('#neft_link').removeAttr("disabled");
									//document.getElementById('neft_link').click();

									//alert("add");


									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														//document.getElementById('neft_link').click();
														//$('#neft_link').trigger('click');
														window.location.href = "{{ URL::to('product') }}";
													}
													);


								}
								else{
									//alert("edit");
									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('product') }}";
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
														window.location.href = "{{ URL::to('product') }}";
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){
														$("#edit_id").val('');
														window.location.href = "{{ URL::to('product') }}";
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
