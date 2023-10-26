@extends('layout.app')
@section('content')
@can('fg-show')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">FG Entry</h1>
                <!--end::Title-->
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{route('fg-entry-create') }}" class="btn btn-sm btn-primary">Add FG Entry</a>
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
                            <label class="required fs-6 fw-bold mb-2">Name</label>
                            <input type="text" autocomplete="off" class="form-control form-control-solid" placeholder="" name="name" id="name" />
                        </div>
                    </div>
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
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-5">
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Entry No</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="no" id="no" value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Customer</span>
                                </label>
                                <select name="customer" id="customer" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Job Card </span>
                                </label>
                                <select name="job_card" id="job_card" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($jobCards as $item)
                                        <option value="{{ $item->id }}">{{ $item->job_card_no }} | {{ $item->job_card_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Work Order</span>
                                </label>
                                <select name="work_order" id="work_order" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">

                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Location</span>
                                </label>
                                <select name="location" id="location" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid lh-1 py-3">
                                    <option value="">Select</option>
                                    @foreach ($sites as $item)
                                        <option value="{{ $item->id }}">{{ $item->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-6">
                        <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Date</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="from_date" id="from_date" value="">
                            </div>
                        </div>
                        {{-- <div class="col">
                            <div class="fv-row mb-4">
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">To Date</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="to_date" id="to_date" value="">
                            </div>
                        </div> --}}

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
                                <th>Entry No.</th>
                                <th>Job Card</th>
                                <th>Work Order</th>
                                <th>Location</th>
                                <th>Entry Date</th>
                                <th>F.Goods Qty</th>
                          
                                    <th >Actions</th>
                             
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($fg as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->entry_no ?? 'N/A'}}</td>
                                    <td>
                                        {{ $item->getJobCardDetail->job_card_no ?? 'N/A' }} | {{ $item->getJobCardDetail->job_card_title ?? 'N/A' }}
                                    </td>
                                    <td>
                                        {{$item->getWorkOrderDetail->order_no ?? 'N/A'}} | {{$item->getWorkOrderDetail->order_name ?? 'N/A'}}
                                    </td>
                                    <td>{{$item->getLocation->description ?? 'N/A'}}</td>
                                    <td>{{date('d-m-Y',strtotime($item->date)) ?? 'N/A'}}</td>
                                    <td>{{$item->fg_qty ?? 'N/A'}}</td>
                                    <td>
                                       
                                            <a href="{{route('fg-entry-show',['id' => $item->id])}}" title="Preview" class="menu-link flex-stack px-3" style="font-weight:normal !important;" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="color:#009ef7"></i></a>
                                     
                                            <a href="{{route('fg-entry-edit',['id' => $item->id])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>
                                        
                                            <a data-id="{{$item->id}}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"> </i></a>
                                      
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
@endcan
@endsection
@push('js')
<script>
    $( document ).ready(function() {
        console.log("FG ENTRY-index File!" );

        $(function() {
            $('#from_date').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            $('#from_date').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
            });

            $('#from_date').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
        // $("#from_date").daterangepicker({
        //     locale: {
        //                 format: 'DD-MM-YYYY',
        //             },
        //     singleDatePicker: true,
        //     showDropdowns: true,
        //     minYear: 2015,
        //     // minDate: new Date(),
        //     // maxDate: new Date()
        //     onSelect: function(selected) {
        //         $("#to_date").datepicker("option","minDate", selected)
        //     }
        // });
        // $("#to_date").daterangepicker({
        //     locale: {
        //                 format: 'DD-MM-YYYY',
        //             },
        //     singleDatePicker: true,
        //     showDropdowns: true,
        //     minYear: 2015,
        //     // minDate: new Date(),
        //     // maxDate: new Date()
        //     onSelect: function(selected) {
        //         $("#from_date").datepicker("option","maxDate", selected)
        //     }
        // });

        // $('#from_date').daterangepicker({
        //     // minDate: 0,
        //     // maxDate: '+1y',
        //     autoUpdateInput: false,
        //     locale: {
        //         format: 'DD-MM-YYYY',
        //     },
        //     singleDatePicker: true,
            // onSelect: function(datestr){
            //     startdate = $(this).daterangepicker('getDate');
            // }
            // onSelect: function (selected) {
            // var dt = new Date(selected);
            // dt.setDate(dt.getDate() + 1);
            // $("#to_date").datepicker("option", "minDate", dt);
            // }
        // });

        // $('#to_date').daterangepicker({
        //     // minDate: 0,
        //     // maxDate: '1y',
        //     autoUpdateInput: false,
        //     singleDatePicker: true,
        //     locale: {
        //         format: 'DD-MM-YYYY',
        //     },
            // onSelect: function (selected) {
        //     var dt = new Date(selected);
        //     dt.setDate(dt.getDate() - 1);
        //     $("#from_date").datepicker("option", "maxDate", dt);
        // }
            // onSelect: function(datestr){
            //     enddate = $(this).daterangepicker('getDate');
            //     // diff = (enddate-startdate)/(1000*24*60*60);
            //     // $('#_duration').val(diff)
            // }
        // });/


        // format date javascript
// function dateFormater(date, separator) {
//   var day = date.getDate();
//   var month = date.getMonth() + 1;
//   var year = date.getFullYear();

//   // show date and month in two digits
//   if (day < 10) {
//     day = '0' + day;
//   }
//   if (month < 10) {
//     month = '0' + month;
//   }

  // now we have day, month and year
  // use the separator to join them
//   return year + separator + month + separator + day;
// }



        $('#job_card').on('change',function(e){
            var id = $(this).val();
            console.log("job_card Selected: "+id);
            jQuery.ajax({
                url: "{{route('get-job-work-order-detail')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#work_order').empty();
                    $('#work_odrer_name').val('');
                    $('#work_order').append('<option value="">select</option>');
                    var edit_work_id = $('#backend_work_order').val();
                    if(edit_work_id){
                        var selected = 'selected';
                    }else{
                        var selected = '';
                    }
                    $.each(data, function(key, value) {
                        // $('#work_odrer_name').val(value.order_name);
                        $('#work_order').append('<option value="'+value.id+'"'+selected+'>'+value.order_no+' | '+value.order_name+'</option>');
                        $('#work_order').trigger("change");
                    });
                }
            });
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
                    url: "{{route('fg-entry-destroy')}}",
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
                                    window.location = "{{route('fg-entry')}}";
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

        //Clear Modal Fields
        $('#kt_modal_1').on('hidden.bs.modal', function (e) {
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
        $('#save_data').click(function(e){
            e.preventDefault();
            var id = $('#id').val();
            var typeName = $('#name').val();
            console.log('Id andType:'+id+'-'+typeName);
            var url = data = "";
            if(id){
                $('.modal-title h3').text('Edit Job Card Type');
                url = "{{route('fg-entry-update')}}";
                data = {
                        'id': id,
                        'name': typeName
                    };
            }else{
                $('.modal-title h3').text('Add Job Card Type');
                url = "{{route('fg-entry-store')}}";
                data = {
                    'name': typeName
                };
            }
            if(typeName.length === 0) {
                Swal.fire('Please Enter Job card Type');
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
                            type: "success"
                        }).then(function() {
                            window.location = "{{route('fg-entry')}}";
                        });
                    }else{
                        swal.fire({
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
            $.ajax({
                url: "{{route('fg-entry-search')}}",
                type: "GET",
                data: {
                    'no':no,
                    'customer':customer,
                    'work_order':work_order,
                    'job_card':job_card,
                    'location':location,
                    'from_date':from_date,
                    'to_date':to_date,
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
                            // if(input.status == 1){
                            //     var status = '<a data-id="'+input.id+'" title="Change Status to Inactive" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 status"><i class="fa fa-toggle-on" style="color:green;"></i></a>';
                            // }else{
                            //     var status = '<a data-id="'+input.id+'" title="Change Status to active" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 status"><i class="fa fa-toggle-off" style="color:green;"></i></a>';
                            // }
                            console.log('respose'+input.id);
                            // var now = input.date;
                            // console.log('yyyy-mm-dd => ' + dateFormater(now, '-'));
                            // var date = Date.parse(input.date).toString("d-m-yyyy");
                            // FG/2023-2024/01
                            // var day = moment(input.date, "DD-MM-YYYY");
                            // var no = input.entry_no;
                            // var jobCardNo = input.get_job_card_detail.job_card_no;
                            // console.log('data: '+no+jobCardNo);
                            $('#kt_customers_table').append('<tr><td>'+i+'</td><td>'+input.entry_no+'</td><td>'+input.get_job_card_detail.job_card_no+' | '+input.get_job_card_detail.job_card_title+'</td><td>'+input.get_work_order_detail.order_no+' | '+input.get_work_order_detail.order_name +'</td><td>'+input.get_location.description +'</td><td>'+input.date+'</td><td>'+input.fg_qty +'</td><td><a href="{{route("fg-entry-show",["id" => '+input.id+'])}}" title="Preview" class="menu-link flex-stack px-3" style="font-weight:normal !important;" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="color:#009ef7"></i></a><a href="{{route("fg-entry-edit",["id" => '+input.id+'])}}" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a><a data-id="'+input.id+'" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"></i></a></tr>');
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
