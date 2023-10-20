@extends('layout.app')
@section('content')
@php
    $create = \Helper::getPermission('advance-security-feature-create') ? 1 : 0;
    $edit = \Helper::getPermission('advance-security-feature-edit') ? 1 : 0;
    $delete = \Helper::getPermission('advance-security-feature-delete') ? 1 : 0;
@endphp
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Advance Security Feature</h1>
                <!--end::Title-->
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    @if ($create == 1)
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1" id="add_feature">
                            Add Advance Security Feature
                        </button>
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
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Advance Security Feature</h3>

                    <!--begin::Close-->
                    {{-- btn btn-icon btn-sm btn-active-icon-primary --}}
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    @section('head')
                        <meta name="csrf_token" content="{{ csrf_token() }}" />
                    @endsection
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                        <div class="fv-row mb-7">
                            <input type="hidden" name="id" id="id" value="">
                            <label class="required fs-6 fw-bold mb-2">Feature Name</label>
                            <input type="text" autocomplete="off" class="form-control form-control-solid" placeholder="" name="name" id="name" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold mb-2">Feature Price</label>
                            <input type="number" autocomplete="off" class="form-control form-control-solid" placeholder="" name="price" id="price" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="">Feature Currency (optional)</span>
                            </label>
                            <select name="currency" id="currency" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                <option value="">Select</option>
                                @foreach ($currency as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" id="close">Close</button>
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
                                <th >Name</th>
                                <th >Price</th>
                                @if ($edit != 0 || $delete != 0)
                                    <th >Actions</th>
                                @endif
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name ?? 'N/A'}}</td>
                                    <td>{{ $item->price ?? '0.00' }}</td>
                                    <td>
                                        @if($edit == 1)
                                            <a data-id="{{$item->id}}" data-name="{{ $item->name }}" data-price="{{ $item->price }}" data-currency="{{ $item->currency_id }}" title="Edit" class="menu-link flex-stack px-3 edit" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        @endif
                                        @if ($delete)
                                            <a data-id="{{$item->id}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"> </i></a>
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
        console.log("Advance Feature master-index File!" );
        $('#currency').select2({
            dropdownParent: $('#kt_modal_1')
        });
        $('#add_feature').click(function(){
            $('.modal-title').html('Add Advance Printing Security Feature');
            $('#id').val('');
            $('#name').val('');
            $('#price').val('');
            $('#currency').val('');
            $('#currency').trigger("change");
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
                    url: "{{route('advance-feature-destroy')}}",
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
                                    window.location = "{{route('advance-feature')}}";
                                }
                            )
                        }else{
                            swal.fire({
                                title: "Error",
                                text: "Please Check the record",
                                type: "error",
                                icon: "error",
                            });
                        }

                    }
                })
            }
            })
        });

        //Clear Modal Fields
        $('#kt_modal_1').on('hidden.bs.modal', function (e) {
            var id = $('#id').val('');
            var name = $('#name').val('');
            var price = $('#price').val('');
            var currency = $('#currency').val('');
            $('#currency').trigger("change");
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

        $('#close').click(function(){
            // $("#kt_modal_1").reload();
            var id = $('#id').val('');
            var name = $('#name').val('');
            var price = $('#price').val('');
            var currency = $('#currency').val('');
            $('#currency').trigger("change");
        });

        //Save the Store and Update Form
        $('#save_data').click(function(e){
            e.preventDefault();
            var id = $('#id').val();
            var name = $('#name').val();
            var price = $('#price').val();
            var currency = $('#currency').val();
            console.log('Id andType:'+id+'-'+name);
            var url = data = "";
            if(id){
                $('.modal-title').text('Edit Advance Printing Security Feature');
                url = "{{route('advance-feature-update')}}";
                data = {
                        'id': id,
                        'name': name,
                        'currency': currency,
                        'price': price
                    };
            }else{
                $('.modal-title').text('Add Advance Printing Security Feature');
                url = "{{route('advance-feature-store')}}";
                data = {
                    'name':name,
                    'currency': currency,
                    'price': price
                };
            }
            if(name.length === 0) {
                Swal.fire('Please Enter Feature Name');
                return false;
            }
            $.ajax({
                url: url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function( response ) {
                    console.log(response);
                    if(response == 1){
                        swal.fire({
                            title: "success!",
                            text: "Record has been submitted successfully",
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            window.location = "{{route('advance-feature')}}";
                        });
                    }else{
                        swal.fire({
                            title: "Error",
                            text: "Please Check the record",
                            type: "error",
                            icon: "error"
                        });
                    }
                }
            })
        });

        $('.edit').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            var price = $(this).attr('data-price');
            var currency = $(this).attr('data-currency');
            console.log('edit: '+id);
            $('.modal-title').html('Edit Advance Printing Security Feature');
            $('#kt_modal_1').modal('show');
            $('#id').val(id);
            $('#name').val(name);
            $('#price').val(price);
            $('#currency').val(currency);
            $('#currency').trigger("change");
        });
    });
</script>
@endpush
