@extends('layout.app')
@section('content')
@php
    $create =  \Helper::getPermission('gst-create') ? 1 : 0;
    $edit =  \Helper::getPermission('gst-edit') ? 1 : 0;
    $delete =  \Helper::getPermission('gst-delete') ? 1 : 0;
@endphp
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">GST Master</h1>
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
                    @if($create)
                        <a href="{{route('tax-master-create') }}" class="btn btn-sm btn-primary">Add GST</a>
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
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="prospect-master">
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
                                <th >Id</th>
                                <th >SGST</th>
                                <th >CGST</th>
                                <th >IGST</th>
                                @if ($edit == 1 || $delete ==1)
                                    <th >Actions</th>
                                @endif

                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($tax as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->sgst}}</td>
                                    <td>{{$item->cgst}}</td>
                                    <td>{{$item->igst}}</td>
                                    <td>
                                        @if ($edit == 1)
                                            <a href="{{route('tax-master-edit',['id' => $item->id])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        @endif
                                        @if ($delete ==1)
                                            <a  onclick="return confirm('Are you sure?')"  href="{{route('tax-master-destroy',['id' => $item->id])}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
        console.log( "ready!" );
    });
</script>
@endpush
