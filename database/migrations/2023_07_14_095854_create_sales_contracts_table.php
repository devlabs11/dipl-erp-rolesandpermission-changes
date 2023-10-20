<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('sales_contracts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('uq_no')->nullable();
        //     $table->bigInteger('quotation_id')->nullable()->comment('quotation_master Table id');
        //     $table->bigInteger('sales_person_id')->nullable()->comment('tbl_user Table id');
        //     $table->date('date')->nullable();
        //     $table->bigInteger('company_id')->nullable()->comment('tbl_company Table id');
        //     $table->bigInteger('company_bank_id')->nullable()->comment('tbl_rtgs_neft Table id');
        //     $table->bigInteger('customer_id')->nullable()->comment('tbl_customer_general Table id');
        //     $table->bigInteger('delivery_address_id')->nullable()->comment('tbl_customer_delivery_location Table id');
        //     $table->bigInteger('currency_id')->nullable()->comment('tbl_currency Table id');
        //     $table->text('product')->nullable();
        //     $table->text('hsn')->nullable();
        //     $table->text('description')->nullable();
        //     $table->text('quantity')->nullable();
        //     $table->text('rate')->nullable();
        //     $table->text('unit')->nullable();
        //     $table->decimal('total',13,2)->default(0);
        //     $table->string('bank_charges')->nullable();
        //     $table->string('sgs')->nullable();
        //     $table->decimal('grand_total',13,2)->default(0);
        //     $table->text('delivery_terms_id')->nullable();
        //     $table->text('payment_terms_id')->nullable();
        //     $table->text('port_of_discharge')->nullable();
        //     $table->text('destination')->nullable();
        //     $table->text('jurisdiction_id')->nullable();
        //     $table->text('other')->nullable();
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
        Schema::dropIfExists('sales_contracts');
    }
}
