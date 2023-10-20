@extends('layout.app')
@section('content')
<div class="card card-primary">
    <div class="card-body">

        <div class="form-group col-md-10 d-flex">
            <label style="margin-right: 1%;">Role:</label>
            <h5>{{ $data->rolename ?? '' }}</h5>
            <input type="hidden" name="roleid" id="roleid" value="{{ $data->arid ?? '' }}">
        </div>

        <div class="row">
            <div class="form-group form-float col-md-4" style="padding-left: 5.3%;">
                <input type="text" id="jstree_q" class="form-control" placeholder="Search Permissions" style="border-bottom: 1px solid #dddddd;" />
            </div>
            <div class="form-group clearfix col-md-8">
                <button class="btn btn-secondary btn-sm open_me" data-placement="left" title="Toggle Tree" id="toggle-tree">
                    <i class="fa fa-sitemap"></i>&nbsp;<i class="fa fa-caret-down" id="toggle-tree-button"></i>
                </button>
                <div id="jstree">
                        <ul>
                            <li data-jstree='{"icon":"fa fa-user-secret fa-lg theme"}' id="j_alltree">All Permissions (Not recommended)
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

                                        <li data-jstree='{"icon":"fas fa-th-large fa-fw theme"}'>{{$menus[$pm->submenu_id]}}
                                                @if ($menus[$pm->submenu_id] == "Common Master")
                                                  (Ink Make,Paper Make,Color Shades,Gum Make,Colors,Paper Color Shade,Site Master,Country,Designation,Position)
                                                @endif
                                            <ul>
                                        @endif

                                    @endif

                                    @if(in_array($pm->id, $roles_permissions))
                                        <li id="{{$pm->id}}" data-jstree='{"icon":"fa fa-info-circle blue","selected":true}'>{{$pm->name}}</li>
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
    <div class="card-footer text-center">
        <button class="btn btn-primary" title="Save" id="updatePerms" type="submit">Update</button>
    </div>
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
