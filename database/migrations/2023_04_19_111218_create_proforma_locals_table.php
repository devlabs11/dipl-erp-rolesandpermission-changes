<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('proforma_locals', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('proforma_invoices_id')->nullable()->comment('proforma_invoices Table id');
        //     $table->bigInteger('buyer')->nullable()->comment('tbl_customer_general Table id');
        //     $table->tinyInteger('is_paid')->nullable()->comment('1 - paid, 2 - To Pay');
        //     $table->string('paid_text')->nullable();
        //     $table->bigInteger('tax_id')->nullable()->comment('tbl_tax Table id');
        //     $table->decimal('tax_amount',8,2)->default(0);
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
        Schema::dropIfExists('proforma_locals');
    }
}
