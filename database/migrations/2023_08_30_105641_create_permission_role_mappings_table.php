<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRoleMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('permission_role_mappings', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('role_id')->default(0)->nullable()->comment('access_roles Table id');
        //     $table->string('permission_id')->default(0)->nullable()->comment('permission_menu_mappings Table id');
        //     $table->bigInteger('created_by')->nullable();
        //     $table->bigInteger('updated_by')->nullable();
        //     $table->bigInteger('deleted_by')->nullable();
        //     $table->softDeletes();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role_mappings');
    }
}
