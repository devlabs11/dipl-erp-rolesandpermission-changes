<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationProductItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('quotation_product_items', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('quotation_product_id');
        //     $table->text('description');
        //     $table->integer('qty');
        //     $table->integer('ppu');
        //     $table->string('unit');
        //     $table->decimal('total',8,2)->default(0);
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
        Schema::dropIfExists('quotation_product_items');
    }
}
