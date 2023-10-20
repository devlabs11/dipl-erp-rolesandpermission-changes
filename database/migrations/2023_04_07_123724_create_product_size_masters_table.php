<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizeMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('product_size_masters', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('unique_id')->default(0)->nullable();
        //     $table->bigInteger('product_category_id')->comment('tbl_product_category id')->default(0)->nullable();
        //     $table->bigInteger('product_id')->comment('tbl_product id')->default(0)->nullable();
        //     $table->string('item_code')->nullable();
        //     $table->string('product_size')->nullable();
        //     $table->softDeletes();
        //     $table->bigInteger('created_by')->nullable();
        //     $table->bigInteger('updated_by')->nullable();
        //     $table->bigInteger('deleted_by')->nullable();
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
        Schema::dropIfExists('product_size_masters');
    }
}
