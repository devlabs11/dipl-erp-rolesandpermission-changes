<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
   
    public function run()
    {
        // administrator  will have all the access
        $superAdminRole = Role::where('name', 'administrator')->first();

        if ($superAdminRole) {
            $permissions = Permission::get();

            if ($permissions) {
                $superAdminRole->syncPermissions($permissions);
            }
        }

        // Admin has access to "action" permission
        $adminRole = Role::where('name', 'admin')->first();

        if ($adminRole) {
            $actionPermission = Permission::where('name', 'action')->first();

            if ($actionPermission) {
                $adminRole->givePermissionTo($actionPermission);
            }
        }
    }
}
