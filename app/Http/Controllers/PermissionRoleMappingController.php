<?php

namespace App\Http\Controllers;

use App\Models\PermissionRoleMapping;
use App\Models\PermissionMenuMapping;
use App\Models\PermissionMenuMaster;
use App\Models\Roles;
use Illuminate\Http\Request;
use Redirect;

class PermissionRoleMappingController extends Controller
{
   
    public function store(Request $request)
    {
        $id = $request->id;
        $data = Roles::where('id',$id)->first();
        $permission = PermissionMenuMapping::orderBy('menu_id')->orderBy('submenu_id')->get();
        $roles_permissions = PermissionRoleMapping::where('role_id',$id)->get()->pluck('permission_id')->toArray();

        $menus = PermissionMenuMaster::get()->pluck('title','id')->toArray();
        // dd($data);
        // $permission = PermissionRoleMapping::get();
       return view('permission-menu.tree',['permission' => $permission,'data' => $data,'menus' => $menus,'roles_permissions' => $roles_permissions]);
    }
    public function update_permission(Request $request){
        $selectedpermissions = $request->selectedElmsIds;
        PermissionRoleMapping::where('role_id',$request->roleid)->forceDelete();
        if(!empty($selectedpermissions)){
            $values = array();
            foreach ($selectedpermissions as $key => $value) {
                if($value[0] == 'j'){
                    continue;
                }
                $values[] = array('role_id' => $request->roleid,'permission_id' => $value);
            }
            PermissionRoleMapping::insert($values);
        }
    }
}
