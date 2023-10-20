<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionMenuMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('permission_menu_masters', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title')->nullable();
        //     $table->string('url')->nullable();
        //     $table->string('icon')->nullable();
        //     $table->integer('parent_id')->default(0)->nullable();
        //     $table->string('treecode')->nullable();
        //     $table->integer('position')->default(0)->nullable();
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
        Schema::dropIfExists('permission_menu_masters');
    }
}
