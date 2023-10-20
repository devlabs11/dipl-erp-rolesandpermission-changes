@extends('layout.app')
@section('content')
@php
    $create = \Helper::getPermission('operator-create') ? 1 : 0;
    $edit = \Helper::getPermission('operator-edit') ? 1 : 0;
    $delete = \Helper::getPermission('operator-delete') ? 1 : 0;
@endphp
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">User Operator</h1>
                <!--end::Title-->
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                @if($create)
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <a href="{{route('user-operator-create') }}" class="btn btn-sm btn-primary">Create a New User Operator</a>
                    </div>
                @endif
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
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-6">
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Full Name</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="fullname" id="fullname" value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Status</span>
                                </label>
                                <select name="status" id="status" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    <option value="1">Active</option>
                                    <option value="2">In-Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">User Name</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="name" id="name" value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Employee Code</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="emp_code" id="emp_code" value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <button style="margin-top: 35px;margin-left:0px" type="reset"  onclick="" id="search" data-kt-contacts-type="" class="btn btn-success me-3">Search</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <button style="margin-top: 35px;" type="reset"  onclick="window.location.reload();" id="refresh" data-kt-contacts-type="" class="btn btn-info me-3">Refresh</button>
                            </div>
                        </div>
                    </div>
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th >Sr.No</th>
                                <th >unique Id</th>
                                <th >Full Name</th>
                                <th >Site Name</th>
                                @if($edit == 1 || $delete ==1)
                                    <th >Actions</th>
                                @endif
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($operators as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->unique_id ?? 'N/A'}}</td>
                                    <td>{{$item->fullname ?? 'N/A'}}</td>
                                    <td>{{$item->getSiteName->description ?? 'N/A'}}</td>
                                    <td>
                                        @if($item->status == 1)
                                            <a data-id="{{$item->id}}" title="Change Status to Inactive" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 status"><i class="fa fa-toggle-on" style="color:green;"></i></a>
                                        @else
                                            <a data-id="{{$item->id}}" title="Change Status to active" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 status"><i class="fa fa-toggle-off" style="color:green;"></i></a>
                                        @endif
                                        @if($edit == 1)
                                        | <a href="{{route('user-operator-edit',['id' => $item->id])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a> |
                                        @endif
                                        @if($delete ==1)
                                            <a data-id="{{$item->id}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"></i></a>
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
    // function deleteRecord(id){
        // Swal.fire({
        //     title: 'Are you sure?',
        //     text: "You won't be able to revert this!",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Yes, delete it!'
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         $.ajax({
        //             url: "{{route('user-operator-destroy')}}",
        //             type: "GET",
        //             data: {'id':id},
        //             success: function( response ) {
        //                 console.log(response);
        //                 if(response == 1){
        //                     Swal.fire(
        //                         'Deleted!',
        //                         'Your Record has been deleted.',
        //                         'success'
        //                     ).then(function() {
        //                             window.location = "{{route('user-operator')}}";
        //                         }
        //                     )
        //                 }else{
        //                     swal.fire({
        //                         title: "Error",
        //                         text: "Please Check the record",
        //                         type: "error"
        //                     });
        //                 }
        //             }
        //         });
        //     }
        // });
    // }
    // function statusChange(id){
        // Swal.fire({
        //     title: 'Are you sure?',
        //     text: "You want to change status of this!",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Yes, Change it!'
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         $.ajax({
        //             url: "{{route('user-operator-status')}}",
        //             type: "GET",
        //             data: {'id':id},
        //             success: function( response ) {
        //                 console.log(response);
        //                 if(response == 1){
        //                     Swal.fire(
        //                         'Status!',
        //                         'Your Record Status has been updated.',
        //                         'success'
        //                     ).then(function() {
        //                             window.location = "{{route('user-operator')}}";
        //                         }
        //                     )
        //                 }else{
        //                     swal.fire({
        //                         title: "Error",
        //                         text: "Please Check the record",
        //                         type: "error"
        //                     });
        //                 }
        //             }
        //         });
        //     }
        // });
    // }
    $( document ).ready(function() {
        console.log("User Operation index File!" );
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
                        url: "{{route('user-operator-destroy')}}",
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
                                        window.location = "{{route('user-operator')}}";
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
                    });
                }
            });
        });
        $('.status').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            console.log('Status Change id: '+id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to change status of this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{route('user-operator-status')}}",
                        type: "GET",
                        data: {'id':id},
                        success: function( response ) {
                            console.log(response);
                            if(response == 1){
                                Swal.fire(
                                    'Status!',
                                    'Your Record Status has been updated.',
                                    'success'
                                ).then(function() {
                                        window.location = "{{route('user-operator')}}";
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
                    });
                }
            });
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
            var fullName = $('#fullname').val();
            var status = $('#status').val();
            var name = $('#name').val();
            var emp_code = $('#emp_code').val();
            console.log(fullName+status+name+emp_code);
            $.ajax({
                url: "{{route('user-operator-search')}}",
                type: "GET",
                data: {
                    'fullName':fullName,
                    'status':status,
                    'name':name,
                    'emp_code':emp_code,
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
                            if(input.status == 1){
                                var status = '<a data-id="'+input.id+'" title="Change Status to Inactive" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 status"><i class="fa fa-toggle-on" style="color:green;"></i></a>';
                            }else{
                                var status = '<a data-id="'+input.id+'" title="Change Status to active" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 status"><i class="fa fa-toggle-off" style="color:green;"></i></a>';
                            }
                            console.log('respose'+input.id);
                            $('#kt_customers_table').append('<tr><td>'+i+'</td><td>'+input.unique_id+'</td><td>'+input.fullname+'</td><td>'+input.get_site_name.description+'</td><td>'+status+'| <a href="{{route("user-operator-edit",['id' => '+input.id+'])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a> | <a data-id="'+input.id+'" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"></i></a></td></tr>');
                            i++
                        });
                        // table.append();
                    }
                }
            });
        });
        // $(function() {
        //     $('#kt_customers_table').DataTable({
        //         processing: true,
		//         serverSide: true,
		//         responsive: true,
		//         bAutoWidth: false,
		//         // dom: 'Bfrtip',
        //         // processing: true,
        //         // serverSide: true,
        //         // type: 'POST'
        //         ajax: "{!! route('user-operator') !!}",
        //         data : {_token:"{{ csrf_token() }}"}
        //         columns: [
        //             { data: 'id', name: 'id' },
        //             { data: 'unique_id', name: 'unique_id' },
        //             { data: 'fullname', name: 'fullname' },
        //             { data: 'site_id', name: 'site_id' },
        //             { data: 'action', name: 'action' }
        //         ]
        //     });
        // });
    });
</script>
@endpush
