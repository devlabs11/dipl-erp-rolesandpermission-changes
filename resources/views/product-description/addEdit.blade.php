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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
                     @isset($fg)
                         Edit
                     @endisset
                     @empty($fg)
                         Make
                     @endempty FG Entry
                </h1>
                <!--end::Title-->

            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Contacts App- Add New Contact-->
            <div class="row g-7">


                <!--begin::Content-->
                <div class="col-xl-12">
                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div style="display:none" class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div style="display:none" class="card-title">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                <!-- <span class="svg-icon svg-icon-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                    </svg>
                                </span> -->
                                <!--end::Svg Icon-->
                                {{-- <h2>Add New User</h2> --}}
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <form class="form" data-id="@isset($fg){{ $fg->id }}@endisset">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="id" value="@isset($fg){{ $fg->id }}@endisset">
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Operator</span>
                                            </label>
                                            <select name="operator" id="operator" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                @foreach ($operators as $item)
                                                    <option value="{{ $item->id }}"
                                                        @isset($fg)
                                                            @if ($fg->user_operator_id == $item->id )
                                                                selected
                                                            @endif
                                                        @endisset>{{ $item->fullname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Entry For Date</span>
                                            </label>
											<input type="text"  class="form-control form-control-solid" name="date" id="date" value="{{ old('date', $fg->date ?? '') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Job Card No.</span>
                                            </label>
                                            <select name="job_card_id" id="job_card_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                @foreach ($jobCards as $item)
                                                    <option value="{{ $item->id }}" @isset($fg)
                                                        @if ($fg->job_card_id == $item->id )
                                                            selected
                                                        @endif
                                                    @endisset
                                                    >{{ $item->job_card_no }} | {{ $item->job_card_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="backend_work_order_id" id="backend_work_order_id" value="{{ old('work_order_id', $fg->work_order_id ?? '') }}">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Work Order No.</span>
                                            </label>
                                            <select name="work_order_id" id="work_order_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                {{-- <span class="required">Work Order No.</span> --}}
                                            </label>
                                            <input type="text" name="transport_cat" id="transport_cat"  class="form-control form-control-solid" style="color: red;margin-top: 15px;" readonly>
                                            {{-- <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Work Order No.</span>
                                            </label> --}}
                                            {{-- <select name="work_order_id" id="work_order_id" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                            </select> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Location</span>
                                            </label>
                                            <select name="location" id="location" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                                @foreach ($sites as $item)
                                                    <option value="{{ $item->id }}" @isset($fg)
                                                        @if ($fg->location == $item->id )
                                                            selected
                                                        @endif
                                                    @endisset>{{ $item->description }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Process Category</span>
                                            </label>
                                            <input type="text" name="process_category" class="form-control form-control-solid" id="process_category" value="Post-Press">
                                            {{-- <select name="process_category" id="process_category" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3" style="pointer-events: none;">
                                                @foreach ($process_categories as $item)
                                                    <option value="{{ $item->id }}" @if ($item->name == 'Post-Press') selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Process</span>
                                            </label>
                                            <input type="text" name="process" class="form-control form-control-solid" id="process" value="FINISH GOODS (24)">
                                            {{-- <select name="process" id="process" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3" style="pointer-events: none;">

                                                 @foreach ($process as $item)
                                                    <option value="{{ $item->id }}" @if ($item->id == '24') selected   @endif>{{ $item->name }} ({{ $item->process_id }})</option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="separator mb-6"></div>
                                <h6>Quantity Moved to FG</h6>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Work Order Name</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="work_odrer_name" id="work_odrer_name" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Finished Goods Quantity</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="finished_good_quantity" id="" value="{{ old('finished_good_quantity', $fg->fg_qty ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">No. of boxes</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="no_of_boxes" id="" value="{{ old('no_of_boxes', $fg->no_boxes ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Quantity in KGs</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="qty_in_kg" id="" value="{{ old('no_of_boxes', $fg->qty_kg ?? '') }}">
                                        </div>
                                    </div>
                                </div>
                                @php
                                    if (isset($fg->answers)) {
                                        $arrAnawer = explode(",",$fg->answers);
                                    } else {
                                        $arrAnawer = '';
                                    }
                                @endphp
                                {{-- {{ dd($arrAnawer) }} --}}
                                <div class="separator mb-6"></div>
                                <h6>Qc Points</h6>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-{{ count($questions) }}">
                                    @foreach ($questions as $key => $item)
                                        <div class="col">
                                            <div class="fv-row mb-4">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="">{{ $item->name }}</span>
                                                </label>
                                                <select name="answer[]" id="answer[]" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                    <option value="">Select</option>
                                                    <option value="1"  @isset($fg)
                                                        @if (isset($arrAnawer[$key]) && $arrAnawer[$key] == 1 )
                                                            selected
                                                        @endif
                                                    @endisset>Ok</option>
                                                    <option value="2"  @isset($fg)
                                                        @if (isset($arrAnawer[$key]) && $arrAnawer[$key] == 2 )
                                                            selected
                                                        @endif
                                                    @endisset>Not Ok</option>
                                                    <option value="3"  @isset($fg)
                                                        @if (isset($arrAnawer[$key]) && $arrAnawer[$key] == 3 )
                                                            selected
                                                        @endif
                                                    @endisset>Not Applicable</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Quantity as per order</span>
                                            </label>
                                            <select name="qty_as_per_order" id="qty_as_per_order" aria-label="Select" data-control="select2" data-placeholder="Select"  class="form-select form-select-solid lh-1 py-3">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="separator mb-6"></div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-3">
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">QC</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="qc" id="" value="{{ old('qc', $fg->qc ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Complains</span>
                                            </label>
                                            <textarea name="complain" class="form-control form-control-solid" id="" cols="30" rows="2">@isset($fg){{ $fg->complains }}@endisset</textarea>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="fv-row mb-4">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Comments</span>
                                            </label>
                                            <textarea name="comments" class="form-control form-control-solid" id="" cols="30" rows="2">@isset($fg){{ $fg->comments }}@endisset
                                            </textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="separator mb-6"></div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" onclick="history.back()" id="cancel_btn" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" data-kt-contacts-type="submit" id="submit" class="btn btn-primary">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- Add New Contact-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        $("#date").daterangepicker({
            locale: {
                        format: 'DD-MM-YYYY',
                    },
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 2015,
            // minDate: new Date(),
            // maxDate: new Date()
        });

        // job_card_id work_order_id
        $('#job_card_id').on('change',function(e){
            var id = $(this).val();
            console.log("job_card_id Selected: "+id);
            jQuery.ajax({
                url: "{{route('get-job-work-order-detail')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#work_order_id').empty();
                    $('#work_odrer_name').val('');
                    $('#work_order_id').append('<option value="">select</option>');
                    var edit_work_id = $('#backend_work_order_id').val();
                    if(edit_work_id){
                        var selected = 'selected';
                    }else{
                        var selected = '';
                    }
                    $.each(data, function(key, value) {
                        // $('#work_odrer_name').val(value.order_name);
                        $('#work_order_id').append('<option value="'+value.id+'"'+selected+'>'+value.order_no+' | '+value.order_name+'</option>');
                        $('#work_order_id').trigger("change");
                    });
                }
            });
        });
        $('#job_card_id').trigger("change");

        $('#work_order_id').on('change',function(e){
            var id = $(this).val();
            console.log("work_order_id Selected: "+id);
            jQuery.ajax({
                url: "{{route('get-work-order-name')}}",
                data: {
                    id: id
                },
                type: 'GET',
                success: function(resp) {
                    console.log("get-work-order-name:"+resp.order_name);
                    // $('#work_order_id').empty();
                    $('#work_odrer_name').val('');
                    $('#work_odrer_name').val(resp.order_name);
                    $('#transport_cat').val('');
                    $('#transport_cat').val(resp.description);

                    // $.each(data, function(key, value) {
                    //     $('#work_order_id').append('<option value="'+value.id+'">'+value.order_no+' | '+value.order_name+'</option>');
                    // });
                }
            });
        });
        $('#work_order_id').trigger("change");

        var frm_user = $('.form');
        var form_error = $('.alert-danger', frm_user);
		var form_success = $('.alert-success', frm_user);
        $(".form").validate({
            rules: {
                job_card_id: {
                    required: true,
                },
                work_order_id: {
                    required: true,
                },
                location: {
                    required: true,
                },
                process_category: {
                    required: true,
                },
                Process: {
                    required: true,
                },
                finished_good_quantity: {
                    required: true,
                },
                no_of_boxes: {
                    required: true,
                },
                qty_in_kg: {
                    required: true,
                },
            },
            messages: {
                job_card_id: {
                    required: "Please Select Job Card No.",
                },
                work_order_id: {
                    required: "Please Select Work Order No",
                },
                location: {
                    required: "Please Select Location.",
                },
                process_category: {
                    required: "Please Select Process Category",
                },
                Process: {
                    required: "Please Select Process.",
                },
                finished_good_quantity: {
                    required: "Please Enter Finished Goods Quantity.",
                },
                no_of_boxes: {
                    required: "Please Enter No. of boxes.",
                },
                qty_in_kg: {
                    required: "Please Enter Quantity in KGs.",
                },
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit"). attr("disabled", true);
                var url ="";
                var record_id = frm_user.attr('data-id');
                if (!record_id) {
                    url = "{{route('fg-entry-store')}}";
                }else{
                    url = "{{route('fg-entry-update')}}";
                }
                console.log(record_id);
                $.ajax({
                    url: url,
                    type: "POST",
                    data: frm_user.serialize(),
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
    });
</script>
@endpush
