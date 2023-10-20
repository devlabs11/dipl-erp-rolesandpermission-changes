<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationProductItemMultipeQtyRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('quotation_product_item_multipe_qty_rates', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('quotation_id')->nullable()->comment('quotation_master Table id');
        //     $table->bigInteger('quotation_product_item_id')->nullable()->comment('quotation_product_items Table id');
        //     $table->decimal('qty',8,2)->nullable();
        //     $table->decimal('ppu',8,2)->nullable();
        //     $table->string('unit')->nullable();
        //     $table->decimal('total',8,2)->nullable();
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
        Schema::dropIfExists('quotation_product_item_multipe_qty_rates');
    }
}
