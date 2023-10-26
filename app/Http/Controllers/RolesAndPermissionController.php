<?php

namespace App\Http\Controllers;

use App\Models\PermissionModel;
use App\Models\RolesAndPermissionModel;
use App\Models\RolesModel;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;



class RolesAndPermissionController extends Controller
{

    public function storeRolesAndPermission(Request $request)
    {
        $roleId = $request->role;
        $permissionIds = $request->permission;
    
        // Clear cached permissions
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    
        // Get the role
        $role = Role::findOrFail($roleId);
    
        // Detach existing permissions for the role
        $role->permissions()->detach();
    
        // Attach new permissions to the role
        foreach ($permissionIds as $permissionId) {
            $permission = Permission::findOrFail($permissionId);
            $role->givePermissionTo($permission);
        }
    
        
        return redirect('/dashboard')->with('success', 'Permissions assigned successfully.');
    }

    public function showRP(Request $request)
    {
        $Ads = RolesAndPermissionModel::all();
        return view('admin.RolesAndPermission.showroles_and_permission', ['Ads' => $Ads]);
    }
}