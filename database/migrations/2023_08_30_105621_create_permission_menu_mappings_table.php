<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionMenuMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('permission_menu_mappings', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->nullable();
        //     $table->string('url')->nullable();
        //     $table->string('slug')->nullable();
        //     $table->integer('postion')->default(0)->nullable();
        //     $table->string('menu_id')->default(0)->nullable()->comment('permission_menu_masters Table id');
        //     $table->integer('submenu_id')->default(0)->nullable()->comment('permission_menu_masters Table id');
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
        Schema::dropIfExists('permission_menu_mappings');
    }
}
