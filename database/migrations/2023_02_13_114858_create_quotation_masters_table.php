<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('quotation_masters', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('company_id');
        //     $table->bigInteger('sales_person_id');
        //     $table->bigInteger('customer_id');
        //     $table->bigInteger('prospect_id');
        //     $table->tinyInteger('customer_is')->comment('0-Existing,1-New')->nullable();
        //     $table->date('date');
        //     $table->string('attention_of');
        //     $table->string('subject');
        //     $table->string('reference');
        //     $table->integer('product_count')->default(0);
        //     $table->bigInteger('quotation_category');
        //     $table->bigInteger('term_title');
        //     $table->tinyInteger('email_to')->comment('0-No,1-Yes')->default(0);
        //     $table->text('email_ids');
        //     $table->string('pdf');
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
        Schema::dropIfExists('quotation_masters');
    }
}
