@extends('layout.app')
@section('content')
    <style type="text/css">
        .form-control,
        .form-select {
            padding: 0.35rem 1rem;
        }
        li{
            cursor: none;
        }
    </style>
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::details View-->
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Profile Details</h3>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Action-->
                        <a href="{{ route('edit-profile') }}"
                            class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->
                    {{-- {{ dd($user) }} --}}
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Avatar</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800"><div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    @if ($user->avatar != null) <img src="{{ URL::asset('avatar/' . $user->avatar) }}" alt="user" /> @else No Image Uploaded @endif
                                </div></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Row-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">{{ $user->fullname ?? '' }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Username</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-semibold text-gray-800 fs-6">{{ $user->username ?? '' }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Email Id</label>
                            <!--begin::Label-->

                            <!--begin::Label-->
                            <div class="col-lg-8">
                                <span class="fw-semibold fs-6 text-gray-800">{{ $user->emailid }}</span>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">
                                Contact Phone

                                <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="fw-bold fs-6 text-gray-800 me-2">{{ $user->mobile ?? '' }}</span>
                                {{-- <span class="badge badge-success">Verified</span> --}}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Designation</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                @php
                                    $designation = DB::table('mst_designation')->where('id',$user->designation)->first();
                                @endphp
                                <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $designation->designation ?? '' }}</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">
                                Position

                                <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                @php
                                    $position = DB::table('mst_position')->where('id',$user->position)->first();
                                @endphp
                                <span class="fw-bold fs-6 text-gray-800">{{ $position->description ?? '' }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Role</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                @php
                                    $role_name = DB::table('access_roles')->where('arid',$user->role)->first();
                                @endphp
                                <span class="fw-bold fs-6 text-gray-800">{{ $role_name->rolename ?? '' }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Sign</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800"><div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    @if ($user->sign != null) <img src="{{ URL::asset('user_sign/' . $user->sign) }}" alt="user" /> @else No Image Uploaded @endif
                                </div></span>
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Permissions</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <div class="row">
                                    {{-- <div class="form-group form-float col-md-4" style="padding-left: 5.3%;">
                                        <input type="text" id="jstree_q" class="form-control" placeholder="Search Permissions" style="border-bottom: 1px solid #dddddd;" />
                                    </div> --}}
                                    <div class="form-group clearfix col-md-8">
                                        <button class="btn btn-secondary btn-sm open_me" data-placement="left" title="Toggle Tree" id="toggle-tree">
                                            <i class="fa fa-sitemap"></i>&nbsp;<i class="fa fa-caret-down" id="toggle-tree-button"></i>
                                        </button>
                                        <div id="jstree"  style="pointer-events: none">
                                                <ul>
                                                    <li data-jstree='{"icon":"fa fa-user-secret fa-lg theme"}' id="j_alltree"  style="pointer-events: none">All Permissions (Not recommended)
                                                        <ul>

                                                        <?php
                                                            $currmenu = 0;
                                                            $submenu = 0;
                                                            $maingroupchanged = 0;
                                                        ?>

                                                        @foreach($permission as $pm)

                                                            @if($currmenu == 0)

                                                                {{-- <li data-jstree='{"icon":"fas fa-th-large fa-fw theme"}'>{{$pm->menu->title}} --}}
                                                                    <ul>
                                                                <?php
                                                                    $currmenu = 1;
                                                                    $submenu = 1;
                                                                ?>

                                                            @endif

                                                            @if($currmenu != $pm->menu_id)
                                                                <?php
                                                                    $currmenu = $pm->menu_id;
                                                                    $maingroupchanged = 1;
                                                                ?>

                                                                    @if($submenu != 1)
                                                                            </ul>
                                                                        </li>
                                                                    @endif
                                                                    </ul>
                                                                </li>
                                                            @if ($pm->menu_id)
                                                                <li data-jstree='{"icon":"fas fa-th-large fa-fw theme"}'>{{$pm->menu->title}}
                                                                    <ul>
                                                            @endif

                                                            @endif

                                                            @if($submenu != $pm->submenu_id)
                                                                <?php
                                                                    $submenu = $pm->submenu_id;
                                                                ?>

                                                                @if($maingroupchanged == 0)
                                                                        </ul>
                                                                    </li>
                                                                @endif
                                                                <?php
                                                                        $maingroupchanged = 0;
                                                                    ?>
                                                                 @if ($pm->menu_id)

                                                                <li data-jstree='{"icon":"fas fa-th-large fa-fw theme"}'  style="pointer-events: none">{{$menus[$pm->submenu_id]}}
                                                                        @if ($menus[$pm->submenu_id] == "Common Master")
                                                                          (Ink Make,Paper Make,Color Shades,Gum Make,Colors,Paper Color Shade,Site Master,Country,Designation,Position)
                                                                        @endif
                                                                    <ul>
                                                                @endif

                                                            @endif

                                                            @if(in_array($pm->id, $roles_permissions))
                                                                <li id="{{$pm->id}}" data-jstree='{"icon":"fa fa-info-circle blue","selected":true}'  style="pointer-events: none">{{$pm->name}}</li>
                                                            @else
                                                                <li id="{{$pm->id}}" data-jstree='{"icon":"fa fa-info-circle blue"}'>{{$pm->name}}</li>
                                                            @endif

                                                        @endforeach

                                                        </ul>
                                                    </li>
                                                </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::details View-->
            </div>
            <!--end::Content wrapper-->
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
@endsection
@push('js')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('#perms').slideUp();
            // $('#jstree_q').hide();

        //create JSTREE
        $('#jstree').jstree({ "plugins" : [ "search","checkbox" ]});
        $('#jstree').on("changed.jstree", function (e, data) {
        $perms = data.selected;
    });

    //search filter
    var to = false;
    $('#jstree_q').keyup(function () {
        if(to) { clearTimeout(to); }
        to = setTimeout(function () {
            var v = $('#jstree_q').val();
        //$("#jstree").jstree("close_all");
        //$("#jstree").jstree("open_node", $('#j_alltree'));
        $('#jstree').jstree(true).search(v);
    }, 250);
    });

    // var APP_URL = {!! json_encode(url('/')) !!}
    var role_id =  $('#roleid').val();

    $.ajaxSetup({
		headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
	});
    //save permission
    $('#updatePerms').click(function(){
        var roleId = $('#roleid').val();
        var selectedElmsIds = [];
        var selectedElms = $('#jstree').jstree('get_selected', true);

        $.each(selectedElms, function() {
            selectedElmsIds.push(this.id);
        });

        var url = "{{route('update-permission')}}";

        //  console.log(selectedElmsIds);
        $.ajax({
            url: url,
            method: "POST",
            data: {selectedElmsIds:selectedElmsIds, roleid:roleId},
            success: function() {
                alert('Permission(s) updated successfully.')
                // var url = APP_URL + "/Roles"
                // location.href = url;
                location.reload();
            },
            error: function() {
                alert('An error was encountered. Please try again.');
            }
        });
    });

    //toggle tree
    $('#toggle-tree').click(function(){
        if($(this).hasClass('open_me')){
            $('#jstree').jstree('open_all');
            $(this).removeClass('open_me');
            $(this).addClass('close_me');
            $('#toggle-tree-button').addClass('fa-caret-up');
            $('#toggle-tree-button').removeClass('fa-caret-down');
        }else{
            $('#jstree').jstree('close_all');
            $(this).removeClass('close_me');
            $(this).addClass('open_me');
            $('#toggle-tree-button').addClass('fa-caret-down');
            $('#toggle-tree-button').removeClass('fa-caret-up');
            $("#jstree").jstree("open_node", $('#j_alltree'));
        }
    });
});
</script>
@endpush
