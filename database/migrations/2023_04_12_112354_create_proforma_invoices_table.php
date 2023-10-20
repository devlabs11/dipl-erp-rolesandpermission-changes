<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('proforma_invoices', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('invoice_no')->nullable();
        //     $table->bigInteger('quotation_id')->nullable()->comment('quotation_masters Table id');
        //     $table->tinyInteger('type')->nullable()->comment('1 - Oversis, 2 - Local');
        //     $table->bigInteger('sales_person_id')->nullable()->comment('tbl_user Table id');
        //     $table->bigInteger('consigner_id')->nullable()->comment('tbl_company Table id');
        //     $table->bigInteger('consignee_id')->nullable()->comment('tbl_customer_general Table id');
        //     $table->bigInteger('delivery_address_id')->nullable()->comment('tbl_customer_delivery_location Table id');
        //     // $table->bigInteger('company_bank_id')->nullable()->comment('Table id');
        //     $table->date('date')->nullable();
        //     $table->string('po_no');
        //     $table->date('po_date')->nullable();
        //     $table->tinyInteger('mode_of_dispatch')->nullable()->comment('1 - Road, 2 - Air, 3- Sea');
        //     $table->integer('product_count')->default(0);
        //     $table->decimal('total',8,2)->default(0);
        //     $table->bigInteger('currency_id')->nullable()->comment('tbl_currency Table id');
        //     $table->decimal('total_amount',8,2)->default(0);
        //     $table->decimal('rounded_total_amount',8,2)->default(0);
        //     $table->text('term_payments')->nullable()->comment('terms_conditions Table id');
        //     $table->text('term_delivey')->nullable()->comment('terms_conditions Table id');
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
        Schema::dropIfExists('proforma_invoices');
    }
}
