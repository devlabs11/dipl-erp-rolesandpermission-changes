@extends('layout.app')
@section('content')
@php
    $create = \Helper::getPermission('pi-create') ? 1 : 0;
    $edit = \Helper::getPermission('pi-edit') ? 1 : 0;
    $delete = \Helper::getPermission('pi-delete') ? 1 : 0;
    // $duplicate = \Helper::getPermission('pi-duplicate') ? 1 : 0;
    // $alter = \Helper::getPermission('pi-alter') ? 1 : 0;
    $view = \Helper::getPermission('pi-view') ? 1 : 0;
    // $pdf = \Helper::getPermission('pi-pdf') ? 1 : 0;
    // $export = \Helper::getPermission('pi-export') ? 1 : 0;
@endphp
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Proforma Invoice</h1>
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
                {{-- <a href="#" style="margin-right:5px" class="btn btn-sm btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Bulk Action
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                <span class="svg-icon svg-icon-5 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon--></a> --}}
                <!--begin::Menu-->
                {{-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">



                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a id="bulk_delete" class="menu-link px-3">Delete</a>
                    </div>
                    <!--end::Menu item-->

                </div> --}}
                <!--end::Menu-->


                    {{-- <div class="me-0" style="display:none">
                        <button style="" class="btn btn-sm btn-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Bulk Action
                        </button>
                        <br/>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a id="bulk_active"  class="menu-link px-3">Active</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a id="bulk_inactive"  class="menu-link px-3">In Active</a>
                            </div>
                            <!--end::Menu item-->


                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a id="bulk_delete"  class="menu-link px-3">Delete</a>
                            </div>
                            <!--end::Menu item-->

                        </div>
                        <!--end::Menu 3-->

                    </div> --}}
                    @if ($create == 1)
                        <a href="{{route('proforma-invoice-create') }}" class="btn btn-sm btn-primary">Add Proforma Invoice</a>
                    @endif
                    {{-- <button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                        Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                    </button> --}}
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
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">

                    {{-- {{\session::get('key')}}
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif --}}

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                {{-- <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input type="checkbox" class="form-check-input all group-checkable" name="check" id="check" data-set="#index_table .checkboxes" />
                                    </div>
                                </th> --}}
                                <!-- class="min-w-70px" -->
                                <th >Sr.No</th>
                                <th >Invoice No.</th>
                                <th >Consignee Address</th>
                                <th >Sales Person</th>
                                <th >Dispatch through</th>
                                @if ($edit != 0 || $delete != 0 || $view != 0)
                                    <th >Actions</th>
                                @endif
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($pi as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->invoice_no ?? '-'}}</td>
                                    <td>{{$item->getCustomerName->customer_name ?? '-'}}</td>
                                    <td>{{$item->getSaleName->fullname ?? '-'}}</td>
                                    <td>
                                        @if ($item->mode_of_dispatch == 1)
                                            Road
                                        @elseif ($item->mode_of_dispatch == 2)
                                            Air
                                        @elseif ($item->mode_of_dispatch == 3)
                                            Sea
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        @if ($view == 1)
                                            <a href="{{route('proforma-invoice-show',['id' => $item->id])}}" title="Preview" class="menu-link flex-stack px-3" style="font-weight:normal !important;" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="color:#009ef7"></i></a>
                                        @endif
                                        @if ($edit == 1)
                                            <a href="{{route('proforma-invoice-edit',['id' => $item->id])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        @endif
                                        @if ($delete == 1)
                                            <a data-id="{{$item->id}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"> </i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection
@push('js')
<script>
    $( document ).ready(function() {
        console.log("Proforma-Invoice-Index File!" );
        $('.delete').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            console.log('Delete: '+id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{route('proforma-invoice-destroy')}}",
                    type: "GET",
                    data: {'id':id},
                    success: function( response ) {
                        console.log(response);
                        if(response == 1){
                            Swal.fire(
                                'Deleted!',
                                'Your Record has been deleted.',
                                'success'
                            ).then(function() {
                                    window.location = "{{route('proforma-invoice')}}";
                                }
                            )
                        }else{
                            swal.fire({
                                title: "Error",
                                text: "Please Check the record",
                                type: "error"
                            });
                        }

                    }
                })
            }
            })
        });
        var table=$('#kt_customers_table').DataTable({
            "emptyTable": "No data available in table",
            "pageLength": 25,
            "searching": true,
            // "dom": "Bfrtip",
            "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            // "dom": '<"top"i>rt<"bottom"flp><"clear">',
        });
    });
</script>
@endpush
