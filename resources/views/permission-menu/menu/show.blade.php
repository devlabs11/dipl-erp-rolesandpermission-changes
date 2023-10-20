@extends('layout.app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Menu</h1>

                <!--end::Title-->
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    {{-- <a  class="btn btn-sm btn-primary">Add New Menu</a> --}}
                    <button type="button" onclick="goBack()" class="btn btn-danger">
                        Back
                    </button>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                    <span style="margin-right: 10px;"></span>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                        Add New Menu
                    </button>

                </div>
                {{-- <a style="display:none" href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> --}}
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{ $breadcrumb }}

                    <!--begin::Close-->
                    {{-- btn btn-icon btn-sm btn-active-icon-primary --}}
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form class="form">
                        @method('POST')
                        @csrf
                        <input type="hidden" name="parent_id" value="{{ $parent_id }}">

                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1">
                            <div class="col">
                                <div class="fv-row mb-4">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Title</span>
                                    </label>
                                    <input type="text" name="title" id="title"  class="form-control form-control-solid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-4">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="">URL</span>
                                    </label>
                                    <input type="text" name="url" id="url" class="form-control form-control-solid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-4">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="">Icon</span>
                                    </label>
                                    <input type="text" name="icon" id="icon" class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save_data">Save changes</button>
                </div>
            </div>
        </div>
    </div>

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
                                <th>Title</th>
                                <th >Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($permissionMenuMaster as $menu)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $menu->title ?? '' }}</td>
                                    <td>
                                        <a href="{{route('menu-show',['id' => $menu->id])}}" title="Preview" class="menu-link flex-stack px-3" style="font-weight:normal !important;" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="color:#009ef7"></i></a>
                                        <a href="{{route('menu-edit',['id' => $menu->id])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        <a data-id="{{$menu->id}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"> </i></a>
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
        console.log("Permisssion-Menu-Show File!" );

        $(".form").validate({
            rules: {
                title: "required",
            },
            messages: {
                title: "Please enter a title",
            },
        });

        $("#save_data").click(function() {
            if ($(".form").valid()) {
                var frm_user = $('.form');
                $.ajax({
                    url: "{{route('add-menu-under-parent')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: frm_user.serialize(),
                    success: function( response ) {
                        console.log(response);
                        if(response == 1){
                            swal.fire({
                                title: "success!",
                                text: "Record has been submitted successfully",
                                type: "success"
                            })
                            .then(function() {
                                // window.location = "{{route('menu')}}";
                                location.reload();
                            });
                        } else if(response == 3 ){
                            swal.fire({
                                title: "Empty Entry",
                                text: "You can't entry empty Value",
                                type: "info"
                            });
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

        //Delete
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
                    url: "{{route('menu-destroy')}}",
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
                                    window.location = "{{route('menu')}}";
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



        //DataTable
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
