<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('quotation_products', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('quotation_id');
        //     $table->bigInteger('product_id');
        //     $table->integer('itmes_count')->default(0);
        //     $table->tinyInteger('display_total')->comment('0-No,1-Yes')->default(0);
        //     $table->decimal('sub_total',8,2)->default(0);
        //     $table->decimal('discount',8,2)->default(0);
        //     $table->bigInteger('cgst_id');
        //     $table->decimal('cgst',8,2)->default(0);
        //     $table->bigInteger('sgst_id');
        //     $table->decimal('sgst',8,2)->default(0);
        //     $table->bigInteger('igst_id');
        //     $table->decimal('igst',8,2)->default(0);
        //     $table->decimal('grand_total',8,2)->default(0);
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
        Schema::dropIfExists('quotation_products');
    }
}
