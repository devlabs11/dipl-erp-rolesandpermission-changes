<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    // {
    //     Schema::create('sub_menus', function (Blueprint $table) {
    //         $table->id();
    //         $table->bigInteger('menu_id')->comment('description_masters table id')->default(0);
    //         $table->text('text');
    //         $table->softDeletes();
    //         $table->bigInteger('created_by')->nullable();
    //         $table->bigInteger('updated_by')->nullable();
    //         $table->bigInteger('deleted_by')->nullable();
    //         $table->timestamps();
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_menus');
    }
}
