<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('proforma_products', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('proforma_invoices_id')->nullable()->comment('proforma_invoices Table id');
        //     $table->bigInteger('category_id');
        //     $table->bigInteger('product_id');
        //     $table->bigInteger('size_id');
        //     $table->text('description');
        //     $table->string('hsn_code');
        //     $table->decimal('qty',8,2)->default(0);
        //     $table->decimal('rate',8,2)->default(0);
        //     $table->bigInteger('unit_id');
        //     $table->decimal('amount',8,2)->default(0);
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
        Schema::dropIfExists('proforma_products');
    }
}
