@extends('layout.app')
@section('content')
@php
    $create = \Helper::getPermission('sub-description-m-create') ? 1 : 0;
    $edit = \Helper::getPermission('sub-description-m-edit') ? 1 : 0;
    $delete = \Helper::getPermission('sub-description-m-delete') ? 1 : 0;
@endphp
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Product Description</h1>
                <!--end::Title-->
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                {{-- <div class="d-flex justify-content-end" >
                    <a href="" class="btn btn-sm btn-primary" data-kt-customer-table-toolbar="base" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Add Parent Description</a>
                </div> --}}
                @if ($create == 1)
                    <div class="d-flex justify-content-end">
                        <a href="" class="btn btn-sm btn-primary" data-kt-customer-table-toolbar="base" data-bs-toggle="modal" data-bs-target="#kt_modal_2">Add Sub Description</a>
                    </div>
                @endif
                {{-- <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-sm btn-primary" data-kt-customer-table-toolbar="base" data-bs-toggle="modal" data-bs-target="#kt_modal_3">Add Description</a>
                </div> --}}
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
                    <h3 class="modal-title">Add Parent Description</h3>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body">
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1">
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Parent Description Name</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" type="text" name="parent_description" id="parent_description">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save_data1">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Sub Description</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1">
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Parent Description</span>
                                </label>
                                <select name="parent_description_id" id="parent_description_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                {{-- <select name="parent_description_id" id="parent_description_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3"> --}}
                                    <option value="">Select</option>
                                    @foreach ($parentDesc as $item)
                                        <option value="{{ $item->id }}">{{ $item->text }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Sub Description Name</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" type="text" name="sub_description" id="sub_description">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save_data2">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Description</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1">
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Sub Description</span>
                                </label>
                                <select name="sub_description_id" id="sub_description_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($subDesc as $item)
                                        <option value="{{ $item->id }}">{{ $item->dm }} | {{ $item->text }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Description Name</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" type="text" name="description" id="description">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save_data3">Save changes</button>
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
                                <th>Sr.No</th>
                                <th>Description</th>
                                @if ($edit == 1 || $delete == 1)
                                    <th>Actions</th>
                                @endif
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($indexData as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        {{$item->sdesc ?? 'N/A'}}
                                    </td>
                                    <td>
                                        @if ($edit == 1)
                                            <a href="{{route('product-description-edit',['id' => $item->sid])}}" title="Edit Description" class="menu-link flex-stack px-3" style="font-weight:normal !important;" data-kt-customer-table-toolbar="base" data-bs-toggle="modal" data-bs-target="#edit_modal_{{$loop->iteration}}"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        @endif
                                            <div class="modal fade" tabindex="-1" id="edit_modal_{{$loop->iteration}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Description</h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <form action="" id="{{$loop->iteration}}">
                                                            <div class="modal-body">
                                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1">
                                                                    <div class="col">
                                                                        <div class="fv-row mb-4">
                                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                                <span class="">Parent Description</span>
                                                                            </label>
                                                                            <input type="hidden" name="pid" value="{{ $item->pid }}">
                                                                            <input type="text" class="form-control form-control-solid" type="text" data-id="{{ $item->pid }}" name="pdesc"  value="{{ $item->pdesc }}" id="pdesc_{{ $item->sid }}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="fv-row mb-4">
                                                                            <label class="fs-6 fw-bold form-label mt-3">
                                                                                <span class="">Sub Description</span>
                                                                            </label>
                                                                            <input type="hidden" name="sid" value="{{ $item->sid }}">
                                                                            <input type="text" class="form-control form-control-solid" type="text" data-id="{{ $item->sid }}"  name="sdesc"  value="{{ $item->sdesc }}" id="sdesc_{{ $item->sid }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary save" data-id="{{$loop->iteration}}">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @if ($delete == 1)
                                            <a data-id="{{$item->sid}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"> </i></a>
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
        console.log("Product-Description-index File!" );
        $('#parent_description_id').select2({
            dropdownParent: $('#kt_modal_2')
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
                    url: "{{route('product-description-destroySub')}}",
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
                                    window.location = "{{route('product-sub-description')}}";
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


        $('.save').click(function(e){
            e.preventDefault();
            var loop_id = $(this).attr('data-id');
            var data = $('#'+loop_id).serialize()
            // alert(data);
            $.ajax({
                url: "{{ route('product-description-update-sub') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function( response ) {
                    console.log(response);
                    if(response == 1){
                        swal.fire({
                            title: "Success!",
                            icon:"success",
                            text: "Record has been submitted successfully",
                            type: "success"
                        }).then(function() {
                            window.location = "{{route('product-sub-description')}}";
                        });
                    }else if(response == 2){
                        swal.fire({
                            icon:"info",
                            title: "Duplicate Entry",
                            text: "Record all Present",
                            type: "info"
                        });
                    }else{
                        swal.fire({
                            icon:"error",
                            title: "Error",
                            text: "Please Check the record",
                            type: "error"
                        });
                    }
                }
            })
        });

        //Clear Modal Fields
        $('#kt_modal_1,#kt_modal_2,#kt_modal_3').on('hidden.bs.modal', function (e) {
            $(this)
            .find("input,textarea,select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
        })

        //DataTable
        var table=$('#kt_customers_table').DataTable({
            "emptyTable": "No data available in table",
            "pageLength": 25,
            "searching": true,
            // "dom": "Bfrtip",
            "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            // "dom": '<"top"i>rt<"bottom"flp><"clear">',
        });

        //Save the Store and Update Form
        $('#save_data1').click(function(e){
            e.preventDefault();
            var description = $('#parent_description').val();
            console.log('parent_description:'+description);
            if(description == '') {
                Swal.fire({
                    icon:"info",
                    title: "Empty Record",
                    text: "Please Check the record",
                    type: "info"
                });
            }
            $.ajax({
                url: "{{ route('product-description-store') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name:description
                },
                success: function( response ) {
                    console.log(response);
                    if(response == 1){
                        swal.fire({
                            title: "Success!",
                            icon:"success",
                            text: "Record has been submitted successfully",
                            type: "success"
                        }).then(function() {
                            window.location = "{{route('product-description')}}";
                        });
                    }else if(response == 2){
                        swal.fire({
                            icon:"info",
                            title: "Duplicate Entry",
                            text: "Record all Present",
                            type: "info"
                        });
                    }else{
                        swal.fire({
                            icon:"error",
                            title: "Error",
                            text: "Please Check the record",
                            type: "error"
                        });
                    }
                }
            })
        });
        $('#save_data2').click(function(e){
            e.preventDefault();
            var parent_description_id = $('#parent_description_id').val();
            var description = $('#sub_description').val();
            console.log('parent_description_id:'+parent_description_id);
            if(description == '' || parent_description_id == '') {
                Swal.fire({
                    icon:"info",
                    title: "Empty Record",
                    text: "Please Check the record",
                    type: "info"
                });
            }
            $.ajax({
                url: "{{ route('product-description-sub-store') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id:parent_description_id,
                    name:description
                },
                success: function( response ) {
                    console.log(response);
                    if(response == 1){
                        swal.fire({
                            title: "Success!",
                            icon:"success",
                            text: "Record has been submitted successfully",
                            type: "success"
                        }).then(function() {
                            window.location = "{{route('product-sub-description')}}";
                        });
                    }else if(response == 2){
                        swal.fire({
                            icon:"info",
                            title: "Duplicate Entry",
                            text: "Record all Present",
                            type: "info"
                        });
                    }else{
                        swal.fire({
                            icon:"error",
                            title: "Error",
                            text: "Please Check the record",
                            type: "error"
                        });
                    }
                }
            })
        });
        $('#save_data3').click(function(e){
            e.preventDefault();
            var parent_description_id = $('#sub_description_id').val();
            var description = $('#description').val();
            console.log('parent_description_id:'+parent_description_id);
            if(description == '' || parent_description_id == '') {
                Swal.fire({
                    icon:"info",
                    title: "Empty Record",
                    text: "Please Check the record",
                    type: "info"
                });
            }
            $.ajax({
                url: "{{ route('product-description-menu-store') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id:parent_description_id,
                    name:description
                },
                success: function( response ) {
                    console.log(response);
                    if(response == 1){
                        swal.fire({
                            title: "Success!",
                            icon:"success",
                            text: "Record has been submitted successfully",
                            type: "success"
                        }).then(function() {
                            window.location = "{{route('product-description')}}";
                        });
                    }else if(response == 2){
                        swal.fire({
                            icon:"info",
                            title: "Duplicate Entry",
                            text: "Record all Present",
                            type: "info"
                        });
                    }else{
                        swal.fire({
                            icon:"error",
                            title: "Error",
                            text: "Please Check the record",
                            type: "error"
                        });
                    }
                }
            })
        });

        $('.edit').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            console.log('edit: '+id);
            $('.modal-title').html('Edit Job Card Type');
            $('#kt_modal_1').modal('show');
            $('#id').val(id);
            $('#name').val(name);

        });

        $('#search').click(function(e){
            e.preventDefault();
            var no = $('#no').val();
            var customer = $('#customer').val();
            var work_order = $('#work_order').val();
            var job_card = $('#job_card').val();
            var location = $('#location').val();
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();

            console.log(no+customer+work_order+job_card+location+from_date+to_date);

        });

    });
</script>
@endpush
