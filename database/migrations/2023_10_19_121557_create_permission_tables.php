<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\PermissionRegistrar;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {

        $tableNames = config('permission.table_names');
        $columnNames = config('permission.column_names');
        $teams = config('permission.teams');
        
        Schema::create($tableNames['permission_menu_mappings'], function (Blueprint $table) {
            $table->bigIncrements('id'); // permission id
            $table->string('name')->nullable();  
            $table->unsignedBigInteger('url')->nullable();
            $table->unsignedBigInteger('slug')->nullable();
            $table->integer('position')->nullable();  
            $table->integer('menu_id')->nullable();  
            $table->integer('permission_menu_masters_id')->nullable();  
            $table->integer('created_by')->nullable();  
            $table->integer('updated_by')->nullable();  
            $table->integer('deleted_by')->nullable();  
            $table->integer('deleted_at')->nullable();    
            $table->timestamps();
            $table->unique(['name']);
        });

        Schema::create($tableNames['access_roles'], function (Blueprint $table) use ($teams, $columnNames) {
            $table->bigIncrements('id'); // role id
            $table->integer('unique_id')->nullable();
            $table->dateTime('added_date')->nullable();
            $table->integer('added_by')->nullable();
            $table->dateTime('modifieddate')->nullable();
            $table->integer('modifiedby')->nullable();
            $table->string('rolename')->nullable();   
            $table->string('description')->nullable();
            $table->integer('status')->nullable();
            $table->integer('staff')->nullable();
            $table->integer('deleted')->nullable(); 
            
            if ($teams || config('permission.testing')) {
                $table->unique([$columnNames['team_foreign_key'], 'rolename']);
            } else {
                $table->unique(['rolename']);
            }
        });


        Schema::create($tableNames['permission_role_mappings'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');
        
            $table->foreign('permission_id')
                ->references('id') // primary key of the 'access_roles' table
                ->on('access_roles')
                ->onDelete('cascade');
        
                $table->foreign('role_id')
                ->references('id') //'arid' as the primary key in the 'access_roles' table
                ->on('access_roles')
                ->onDelete('cascade');
            
            $table->primary(['permission_id', 'role_id'], 'permission_role_mappings_permission_id_role_id_primary');
        });

        app('cache')
            ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
        }

        Schema::drop($tableNames['permission_role_mappings']);
        Schema::drop($tableNames['access_roles']);
        Schema::drop($tableNames['permission_menu_mappings']);
    }
}