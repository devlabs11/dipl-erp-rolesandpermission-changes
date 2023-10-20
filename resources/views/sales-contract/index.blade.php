@extends('layout.app')
@section('content')
@php
    // $result = \Helper::getPermission();
    $create = \Helper::getPermission('sc-create') ? 1 : 0;
    $edit = \Helper::getPermission('sc-edit') ? 1 : 0;
    $delete = \Helper::getPermission('sc-delete') ? 1 : 0;
    // $duplicate = \Helper::getPermission('sc-duplicate') ? 1 : 0;
    // $alter = \Helper::getPermission('sc-alter') ? 1 : 0;
    $view = \Helper::getPermission('sc-view') ? 1 : 0;
    // $pdf = \Helper::getPermission('sc-pdf') ? 1 : 0;
    $export = \Helper::getPermission('sc-export') ? 1 : 0;
@endphp
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Sales Contract</h1>
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
                @if ($export)
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <a href="{{route('sales-contract-export') }}" class="btn btn-sm btn-primary">Export Sales Contract</a>
                    </div>
                @endif

                @if ($create)
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <a href="{{route('sales-contract-create') }}" class="btn btn-sm btn-primary">Add Sales Contract</a>
                    </div>
                @endif
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
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th >Sr.No</th>
                                <th >Quotation NO.</th>
                                <th >COMPANY NAME</th>
                                <th >SALES PERSONS NAME</th>
                                <th >DATE</th>
                                @if ($edit != 0 || $delete != 0 || $view != 0)
                                    <th >Actions</th>
                                @endif
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($salesContracts as $salesContract)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $salesContract->getQuotation->unique_id ?? '' }}</td>
                                    <td>{{ $salesContract->getCompany->name ?? '' }}</td>
                                    <td>{{ $salesContract->getSalesPerson->fullname ?? '' }}</td>
                                    <td> {{ date('d-m-Y',strtotime($salesContract->date)) ?? '' }}</td>
                                    <td>
                                        @if ($view == 1)
                                            <a href="{{route('sales-contract-show',['id' => $salesContract->id])}}" title="Preview" class="menu-link flex-stack px-3" style="font-weight:normal !important;" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="color:#009ef7"></i></a>
                                        @endif
                                        @if ($edit == 1)
                                            <a href="{{route('sales-contract-edit',['id' => $salesContract->id])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        @endif
                                        @if ($delete == 1)
                                            <a data-id="{{$salesContract->id}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"> </i></a>
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
        console.log("Sales-Contract-Index File!" );
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
                    url: "{{route('sales-contract-destroy')}}",
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
                                    window.location = "{{route('sales-contract')}}";
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
