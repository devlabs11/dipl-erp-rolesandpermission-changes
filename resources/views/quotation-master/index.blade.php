@extends('layout.app')
@section('content')
@php
    // $result = \Helper::getPermission();
    $create = \Helper::getPermission('quotations-create') ? 1 : 0;
    $edit = \Helper::getPermission('quotations-edit') ? 1 : 0;
    $delete = \Helper::getPermission('quotations-delete') ? 1 : 0;
    $duplicate = \Helper::getPermission('quotations-duplicate') ? 1 : 0;
    $alter = \Helper::getPermission('quotations-alter') ? 1 : 0;
    $view = \Helper::getPermission('quotations-view') ? 1 : 0;
    $pdf = \Helper::getPermission('quotations-pdf') ? 1 : 0;
    $export = \Helper::getPermission('quotations-export') ? 1 : 0;
@endphp
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Quotation Master</h1>
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
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    @if ($create == 1)
                        <a href="{{route('quotation-master-create') }}" class="btn btn-sm btn-primary">Add Quotation</a>
                    @endif
                </div>
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
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Quotation Id</span>
                                </label>
                                <select name="quotation_id" id="quotation_id" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($quotations as $item)
                                        <option value="{{ $item->id }}">{{ $item->unique_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Customer Name</span>
                                </label>
                                <select name="customer" id="customer" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($customers as $item)
                                        <option value="{{ $item->id }}">{{ $item->customer_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Sales Person Name</span>
                                </label>
                                <select name="sale_id" id="sale_id" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($sales as $item)
                                        <option value="{{ $item->userid }}">{{ $item->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Company Name</span>
                                </label>
                                <select name="company_id" id="company_id" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($company as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <button style="margin-top: 35px;margin-left:0px" type="reset"  id="search" class="btn btn-success me-3">Search</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <button style="margin-top: 35px;margin-left:0px" type="reset"  onclick="window.location.reload();" id="refresh" class="btn btn-info me-3">Refresh</button>
                            </div>
                        </div>
                       @if ($export == 1)
                            <div class="col">
                                <div class="fv-row mb-4">
                                    <form id="export_form" action="{{route('quotation-export')}}">
                                        <input type="hidden" name="id" id="export_quotation_id" value="">
                                        <input type="hidden" name="customer" id="export_customer" value="">
                                        <input type="hidden" name="sale_id" id="export_sale_id" value="">
                                        <input type="hidden" name="company" id="export_company_id" value="">
                                        <button style="margin-top: 35px;margin-left:0px" type="submit"  class="btn btn-primary me-3">Export</button>
                                    </form>
                                </div>
                            </div>
                       @endif

                    </div>
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th >Sr.No</th>
                                <th >Unique No.</th>
                                <th >Company Name</th>
                                <th >Sales Person Name</th>
                                <th >Date</th>
                                <th >Subject</th>
                                @if ($edit != 0 || $alter != 0 || $delete != 0 || $view != 0 || $pdf != 0 || $duplicate != 0)
                                    <th >Actions</th>
                                @endif
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($quotationMaster as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->unique_id ?? 'N/A'}}</td>
                                    <td>{{$item->getComanyName->name ?? 'N/A'}}</td>
                                    <td>{{$item->getSalesPerson->fullname ?? 'N/A'}}</td>
                                    <td>{{date('d-m-Y',strtotime( $item->date)) ?? 'N/A'}}</td>
                                    <td>{{$item->subject ?? 'N/A'}}</td>
                                    @if ($edit != 0 || $alter != 0 || $delete != 0 || $view != 0 || $pdf != 0 || $duplicate != 0)
                                    <td>
                                        @if ($edit == 1)
                                            <a href="{{route('quotation-master-edit',['id' => $item->id])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        @endif
                                        @if ($alter == 1)
                                            <a href="{{route('quotation-master-alter',['id' => $item->id])}}" title="Alter Quotation" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i style='font-size:15px;color:rgb(93, 195, 238);' class='fas'>&#xf477;</i></a>
                                        @endif
                                        @if ($delete == 1)
                                            <a data-id="{{ $item->id }}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="delete menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>
                                        @endif
                                        @if ($view == 1)
                                            <a  title="PDF Without Header & Footer" href="{{route('quotation-master-show',['id' => $item->id,'action'=> 'without'])}}" target="_blank" class="menu-link flex-stack px-3"><i class="fa fa-file" style="color:rgb(49, 141, 218);"></i></a>
                                        @endif
                                        @if ($pdf == 1)
                                            <a  title="PDF With Header & Footer" href="{{route('quotation-master-show',['id' => $item->id,'action'=> 'with'])}}" target="_blank" class="menu-link flex-stack px-3"><i class="fa fa-file-pdf" style="color:rgb(153, 9, 189);"></i></a>
                                        @endif
                                        @if ($duplicate == 1)
                                            <a  title="Duplicate" href="{{route('quotation-master-show',['id' => $item->id,'action'=> 'duplicate'])}}" class="menu-link flex-stack px-3"><i class="fa fa-copy" style="color:rgb(12, 53, 11);"> </i></a>
                                        @endif
                                    </td>
                                    @endif
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
        console.log("quotation-master-index File!" );
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
                    url: "{{route('quotation-master-destroy')}}",
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
                                    window.location = "{{route('quotation-master')}}";
                                }
                            )
                        }else{
                            swal.fire({
                                title: "Error",
                                text: "Please Check the record",
                                type: "error",
                                icon: "info"
                            });
                        }

                    }
                })
            }
            })
        });

        $('#quotation_id').on('change',function(e){
            var selected = $(this).children("option:selected").val();
            $('#export_quotation_id').val(selected);
        });
        $('#customer').on('change',function(e){
            var selected = $(this).children("option:selected").val();
            $('#export_customer').val(selected);
        });
        $('#sale_id').on('change',function(e){
            var selected = $(this).children("option:selected").val();
            $('#export_sale_id').val(selected);
        });
        $('#company_id').on('change',function(e){
            var selected = $(this).children("option:selected").val();
            $('#export_company_id').val(selected);
        });

        var table=$('#kt_customers_table').DataTable({
            "emptyTable": "No data available in table",
            "pageLength": 25,
            "searching": true,
            // "dom": "Bfrtip",
            "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            // "dom": '<"top"i>rt<"bottom"flp><"clear">',
        });

        $('#search').click(function(e){
            e.preventDefault();
            var id = $('#quotation_id').val();
            var customer = $('#customer').val();
            var sale = $('#sale_id').val();
            var company = $('#company_id').val();
            console.log(id+customer+sale);
            $.ajax({
                url: "{{route('quotation-search')}}",
                type: "GET",
                data: {
                    'id':id,
                    'customer':customer,
                    'sale':sale,
                    'company':company,
                },
                success: function( response ) {
                    console.log(response);

                    if(response == 2){
                        swal.fire({
                            title: "Empty Search",
                            text: "One Value is require for search",
                            type: "error"
                        });
                    }else{
                        // table.clear();
                        $('#kt_customers_table').find("tr:gt(0)").remove();
                        let i=1;
                        $.each(response, function (key, input) {
                            console.log('respose'+input.id);
                            $('#kt_customers_table').append('<tr><td>'+i+'</td><td>'+input.unique_id+'</td><td>'+input.get_comany_name.name+'</td><td>'+input.get_sales_person.fullname+'</td><td>'+input.date+'</td><td>'+input.subject+'</td><td><a href="{{route("quotation-master-edit",['id' => '+input.id+'])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a><a href="{{route("quotation-master-alter",['id' => '+input.id+'])}}" title="Alter Quotation" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i style="font-size:15px;color:rgb(93, 195, 238);" class="fas">&#xf477;</i></a><a data-id="{{ '+input.id+' }}"  title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a><a  title="PDF Without Header & Footer" href="{{route("quotation-master-show",['id' => '+input.id+','action'=> 'without'])}}" target="_blank" class="menu-link flex-stack px-3"><i class="fa fa-file" style="color:rgb(49, 141, 218);"></i></a><a  title="PDF With Header & Footer" href="{{route("quotation-master-show",['id' => '+input.id+','action'=> 'with'])}}" target="_blank" class="menu-link flex-stack px-3"><i class="fa fa-file-pdf" style="color:rgb(153, 9, 189);"></i></a><a  title="Duplicate" href="{{route("quotation-master-show",['id' => '+input.id+','action'=> 'duplicate'])}}" class="menu-link flex-stack px-3"><i class="fa fa-copy" style="color:rgb(12, 53, 11);"> </i></a></td></tr>');
                            i++
                        });
                        // table.append();
                    }
                }
            });
        });

    });
</script>
@endpush
