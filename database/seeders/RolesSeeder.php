<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
     public function run()
     {
         Role::create(['name' => 'administrator']);
         Role::create(['name' => 'super-admin']);
         Role::create(['name' => 'admin']);
     }
}

