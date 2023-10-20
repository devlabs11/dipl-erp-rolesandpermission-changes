<!DOCTYPE html>
@php
    $create = \Helper::getPermission('excise-create') ? 1 : 0;
@endphp
<html lang="en">
	<!--begin::Head-->
	<head>
	@include('layout.inc_header')
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
						<a href="{{ URL::to('dashboard') }}">
						<h5 style="display:inline;color:#fff;vertical-align:middel">PMS ERP</h5>
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

				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">

							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->

									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-stretch flex-shrink-0">

								@include('layout.inc_topbar')
									<!--end::Header menu toggle-->
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Excise</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span style="display:none" class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul style="display:none" class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Customers</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Customer Listing</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Filter menu-->

									<!--end::Filter menu-->
									<!--begin::Secondary button-->



									<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

{{--
									<a href="#" style="margin-right:5px" class="btn btn-sm btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Bulk Action
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
									<span class="svg-icon svg-icon-5 m-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon--></a> --}}
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">


										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a id="bulk_delete" class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->

									</div>
									<!--end::Menu-->

									<!--begin::Add customer-->
                                    @if($create)
									    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add Excise</button>
									<!--end::Add customer-->
                                    @else
										{{-- <button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
											Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
										</button> --}}
                                    @endif
									</div>
									<!--end::Secondary button-->
									<!--begin::Primary button-->


									<a style="display:none" href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header border-0 pt-6">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												&nbsp;
												<!--end::Svg Icon-->

											</div>
											<!--end::Search-->
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Toolbar-->
											<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">


												<!--begin::Add customer-->
												<button style="display:none" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add Excise</button>
												<!--end::Add customer-->
											</div>
											<!--end::Toolbar-->
											<!--begin::Group actions-->
											<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
												<div class="fw-bolder me-5">
												<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
												<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
											</div>
											<!--end::Group actions-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">


										<form id="master_frm" name="master_frm" method="post">


											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input type="checkbox" class="form-check-input all group-checkable" name="check" id="check" data-set="#index_table .checkboxes" />
															</div>
														</th>
														<th class="min-w-125px">Unique Id</th>
														<th class="min-w-125px">Excise Code</th>
														<th class="min-w-125px">Description</th>
														<th class="min-w-125px">Duty(%)</th>
														<th class="min-w-70px">Actions</th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-bold text-gray-600">

												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</form>
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
								<!--begin::Modals-->
								<!--begin::Modal - Customers - Add-->

								<div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form"  name="create_master" onsubmit="return false;" id="create_master">
												{{@csrf_field()}}

												<input type="hidden" name="edit_id" id="edit_id" class="form-control input-sm" autocomplete="off" value="">
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_add_customer_header">
													<!--begin::Modal title-->
													<h2 class="fw-bolder"><p style="display:inline" id="titleid">Add</p> Excise</h2>
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
															<label class="required fs-6 fw-bold mb-2">Excise Code</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" autocomplete="off" class="form-control form-control-solid" placeholder="" name="code" id="code" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->



														<!--begin::Input group-->
														<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold mb-2">Excise Description</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" autocomplete="off" class="form-control form-control-solid" placeholder="" name="excise_description" id="excise_description" />
														<!--end::Input-->
														</div>
														<!--end::Input group-->

														<!--begin::Input group-->
														<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold mb-2">Duty (%)</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" autocomplete="off" class="form-control form-control-solid" placeholder="" name="duty_per" id="duty_per" />
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
													<button type="submit" id="master_create_btn" class="btn btn-primary" name="master_create_btn">
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
		<script src="{{ URL::asset('assets/js/custom/apps/customers/list/list.js') }} "></script>

		<script>

		var frmModalForm = $('#create_master');
		var form_error = $('.alert-danger', frmModalForm);
		var form_success = $('.alert-success', frmModalForm);

		// $('#kt_modal_add_customer').on('shown.bs.modal', function () {
		// 		$('#myInput').trigger('focus')
		// 		})
		i=new bootstrap.Modal(document.querySelector("#kt_modal_add_customer"));
				r=document.querySelector("#create_master");
				t=r.querySelector("#master_create_btn");


				function datatablerefresh()
				{
					var table=$('#kt_customers_table').DataTable({
						destroy: true,
						"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
						"language": {
							"aria": {
								"sortAscending": ": activate to sort column ascending",
								"sortDescending": ": activate to sort column descending"
							},
							"emptyTable": "No data available in table",
							//"info": "Showing _START_ to _END_ of _TOTAL_ records",
							"infoEmpty": "No records found",
							//"infoFiltered": "(filtered1 from _MAX_ total records)",
							"lengthMenu": "Show _MENU_",
							"search": "Search:",
							<!-- "zeroRecords": "No matching records found", -->
							"paginate": {
								"previous":"Prev",
								"next": "Next",
								"last": "Last",
								"first": "First"
							}
						},
						"bStateSave": false,
						"lengthMenu": [
							[5,10,15,20, -1],
							[5,10,15,20, "All"]
						],
						"pageLength": 10,
						//"pagingType": "bootstrap_full_number",
						processing: true,
						serverSide: true,
						ajax: "{{ URL::to('excisedata') }}",
						// columns: [
						// { data: 'id', name: 'id' },
						// { data: 'description', name: 'description' },
						// { data: 'status', name: 'status' },
						// {data: 'action', name: 'action', orderable: false},
						// ],
						// language: {
						// 	search: "",
						// 	searchPlaceholder: "Search Country",
						// 	paginate: {
						// 				next: '&#8594;', // or '→'
						// 				previous: '&#8592;' // or '←'
						// 				}
						// },
						// "lengthMenu": [
						// 	[5,10,15,20, -1],
						// 	[5,10,15,20, "All"]
						// ],
						//  "pageLength": 5,
						"scrollX": true,
						"columnDefs": [
							{'orderable': false,'searchable': false,'targets': [0],'width':'5%'},
							{'orderable': true,'searchable': false,'targets': [1],'width':'5%'},
							{'orderable': true,'searchable': false,'targets': [2],'width':'5%'},
							{'orderable': true,'searchable': true,'targets': [3]},
						],
						"order": [
							[1, "asc"]
						],
						// "processing": true,
						// "pagingType": "full_numbers",
						// "dom": '<"top"i>rt<"bottom"flp><"clear">'
						//"serverSide": true,
					});
				}


		$('#kt_modal_add_customer').on('show.bs.modal', function(e) {

//get data-id attribute of the clicked element
var edit_id = $(e.relatedTarget).data('editid');
//alert(edit_id);
if(typeof edit_id=="undefined")
{
	$("#titleid").text("Add");
}
else if(edit_id!="")
{		//populate the textbox
	//alert("here");
	$(e.currentTarget).find('input[name="edit_id"]').val(edit_id);
	$("#titleid").text("Edit");
		//alert(edit_id);
	$.ajax({
				type: "POST",
				data: "edit_id="+edit_id,
				url: "{{ URL::to('editexcise') }}",
				success: function (response_json) {
					var response= JSON.parse(response_json);
					//alert(response.message);
					if (response.message==''){
						//alert("here");
						$('#code').val(response.excise_code);
						$('#excise_description').val(response.excise_description);
						$('#duty_per').val(response.duty_per);
						//alert(response.status);
						//$("#status").val(response.status);
						//$('#status').val(response.status).trigger('change');
						//alert(response.country);
						//$("#country").select2().select2('val',"21");
						//alert(response.state);
						//alert(response.statedescription);

						//$("#state").select2('data', { id:response.state, text: response.statedescription});
						//$('#state').val(response.state).trigger('change');
						//alert(response.country);
						//alert(response.countrydescription);
						//alert(response.state);
						//alert(response.statedescription);


						//$("#country").select2("val",response.country);
					}else{
						//alert("else part");
						//ShowAlret(response.message,response.alert_type);
					}
				}
			});
}
else
{
	//alert("edit id else part");
}

});



		$(function()
		{


			$("#bulk_active").click(function(){
				//alert("here");
				ValidCheckbox(1);
			});
			$("#bulk_inactive").click(function(){
				ValidCheckbox(2);
			});
			$("#bulk_delete").click(function(){
				ValidCheckbox(3);
			});


		});

		function ValidCheckbox(opt){
			//alert("here");
			var Check = getCheckCount();
			//alert(Check);
			if (Check > 0){
				if( opt == 1 ){
					LoadConfirmDialog("Confirm Active Status ?",opt);
				}
				else if( opt == 2 ){
					LoadConfirmDialog("Confirm InActive Status ?",opt);
				}
				else if( opt == 3 ){
					LoadConfirmDialog("Delete Selected Record(s) ?",opt);
				}
			}else{

				swal.fire({ text: "Please select record from the list."}).then(function(){
													//location.reload();
													//datatablerefresh();
													return false;
												}
												);
				//alert("Please select record from the list.",'error');
				//ShowAlret("Please select record from the list.",'error');

			}
		}

		function LoadConfirmDialog(content,opt){
			//alert("here function");

			Swal.fire({
						title: 'Do you want to save the changes?',
						showDenyButton: false,  showCancelButton: true,
						confirmButtonText: `Save`,
						//denyButtonText: `Don't save`,
						}).then((result) => {
							/* Read more about isConfirmed, isDenied below */
							if (result.isConfirmed) {
								$.ajax({
                                type: "POST",
                                data: $('#master_frm').serialize()+ "&opt="+opt,
                                url : "{{ URL::to('record_actions_excise') }}",
        						//data : {'token' : 123},
                                success: function (response_json) {
									var response= JSON.parse(response_json);
									//alert(response.alert_type);
									if(response.alert_type=="error")
									{
										swal.fire({ text: response.message}).then(function(){
													//location.reload();
													datatablerefresh();
												}
												);

									}
									else
									{
										swal.fire({ text: response.message}).then(function(){
												//location.reload();
												datatablerefresh();

											}
											);
									}

                                }
                            });
							} else if (result.isDenied) {
								Swal.fire('Changes are not saved', '', 'info')
							}
						});


        }

		function LoadDeleteDialog(Id){
			///alert(Description);
			//alert(Id);


			Swal.fire({
						title: 'Do you want to delete this record?',
						showDenyButton: false,  showCancelButton: true,
						confirmButtonText: `Save`,
						//denyButtonText: `Don't save`,
						}).then((result) => {
							/* Read more about isConfirmed, isDenied below */
							if (result.isConfirmed) {
								$.ajax({
							type: "POST",
							url: "{{ URL::to('deleteexcise') }}",
							//data: {deleteid:Id},
							data: {
                                    id: Id
                                },
							success: function (response_json) {
								var response= JSON.parse(response_json);

								swal.fire({ text: response.message}).then(function(){
												//location.reload();
												datatablerefresh();

											}
											);
									//alert(response.message);
									// var oTable = $('#master_table').dataTable();
									// oTable.fnDraw(false);
									//location.reload();
								// var response= JSON.parse(response_json);
								// ShowAlret(response.message,response.alert_type);
								// DatatableRefresh();
							}
						});
							} else if (result.isDenied) {
								Swal.fire('Changes are not saved', '', 'info')
							}
						});




		}


		function getCheckCount()
		{
			var x = 0;
			for (var i = 0; i < master_frm.elements.length; i++)
			{
				if (master_frm.elements[i].checked == true)
				{
					x++;
				}
			}
			return x;
		}


				$("#country").change(function(){
        			var selectedCountry = $("#country option:selected").val();
					$('#state').val(null).trigger('change');
					$('#state').empty()
					//$('#state').trigger('change');
					$("#state").append("<option value=''>SELECT</option>");



					$.ajax({
								type: "GET",
								data: "selectedCountry="+selectedCountry,
								url: "{{ URL::to('city_ajax_populate_state') }}",
								success: function (response_json)
								{
									var response= JSON.parse(response_json);
									//alert(response);
									$("#state").select2({
															data: response.results
														});
									//$('#state').trigger('change');

									/*var data = {
										id: 1,
										text: 'Barn owl'
									};

									var newOption = new Option(data.text, data.id, false, false);
									$('#state').append(newOption).trigger('change');*/

									// $("#state").append("<option value='1'>Text 1</option>");
									// $("#state").append("<option value='2'>Text 2</option>");
								}
							});
				});

			$(document).ready(function() {


				/*$('#country').select2({
                    placeholder: '',
                    //minimumResultsForSearch: Infinity,
                    multiple:false,
                    separator: ',',
                    ajax: {
                        url: "{{ URL::to('city_ajax_populate_country') }}",
                        dataType: 'json',
                        quietMillis: 100,
                        data: function (term, page) {
                            return {
                                search: term,
                                page_limit: 10
                            };
                        },
                        results: function (data, page) {
                            var more = (page * 30) < data.total_count;
                            return { results: data.results, more: more };
                        }
                    },
                    initSelection: function(element, callback) {
						//alert("here");
                        return $.getJSON("{{ URL::to('city_ajax_populate_country') }}&id=" + (element.val()), null, function(data) {
                            return callback(data);
                        });
                    }
                });*/

				$('#state').select2({
                    //placeholder: '',
                    placeholder: "Select a State",
                    multiple:false,
                    separator: ',',
                    ajax: {
                        url: "{{ URL::to('city_ajax_populate_state') }}",
                        dataType: 'json',
                        quietMillis: 100,
                        data: function (term, page) {
                            return {
                                search: term,
                                page_limit: 10,
								//country:$("#country").val()
                            };
                        },
                        results: function (data, page) {
                            var more = (page * 30) < data.total_count;
                            return { results: data.results, more: more };
                        }
                    },
                    initSelection: function(element, callback) {
						//alert("here");
                        return $.getJSON("{{ URL::to('city_ajax_populate_state') }}&id=" + (element.val()), null, function(data) {
                            return callback(data);
                        });
                    }
                });


					$('#kt_modal_add_customer').modal({
															backdrop: 'static',
															keyboard: false
														})
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					$('.all').click(function () {

						if ($(this).is(':checked')) {
							$("input[name='id[]']").prop('checked', true);
						} else {
							$("input[name='id[]']").prop('checked', false);
						}
					});


				frmModalForm.validate({
                    errorElement: 'span',
                    errorClass: 'help-block help-block-error',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
                        code: {
                            required: true,
							remote: {
                                url: "{{ URL::to('validateexcisecode') }}",
                                type: "post",
                                data: {
                                    id: function () {
                                        return $("#edit_id").val();
                                    }
                                }
                            }
                        },
						excise_description: {
                            required: true
                        },
						duty_per: {
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
                            //error.insertAfter(element.next('.select2-container'));
							error.insertAfter(element.next('span'));
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
                        //mcs.start();
                        form_success.show();
                        form_error.hide();
                        // $.blockUI({
                        //     centerY: 0,
                        //     css: {
                        //         'z-index':'10052',padding: '11px', height: '45px',top: '60px', left: '', right: '10px',
                        //     }
                        // });

                        $.post("{{ URL::to('submitexcise') }}", $("#create_master").serialize(), function (data) {
							//alert(data.alert_type);
							//alert(data.mode);
							if (data.alert_type == "succ") {
                                if (data.mode=='add'){

									swal.fire({ text: data.message}).then(function(){
														r.reset(),i.hide()
														$("#edit_id").val('');
														datatablerefresh();
													}
													);


								}
								else{

									swal.fire({ text: data.message}).then(function(){
														r.reset(),i.hide()
														$("#edit_id").val('');
														datatablerefresh();
													}
													);

								}
							}
							else
							{
								if (data.mode=='add'){

									swal.fire({ text: data.message}).then(function(){
														r.reset(),i.hide()
														$("#edit_id").val('');
														datatablerefresh();
													}
													);

								}
								else{

									swal.fire({ text: data.message}).then(function(){
														r.reset(),i.hide()
														$("#edit_id").val('');
														datatablerefresh();
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
                            remote: "This state already exists. Please try another state.",
                        }
                    }
                });


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
			$("#name-error").html('');
			$("#state-error").html('');
			//$("#country").select2("val","0");
			$('#country').val('').trigger('change');
			$('#state').val('').trigger('change');
			// $('#status').val('').trigger('change');
			// $("#status-error").html('');
			$("#code-error").html('');
			$("#country-error").html('');
		})

			});

		</script>



	</body>
	<!--end::Body-->
</html>
