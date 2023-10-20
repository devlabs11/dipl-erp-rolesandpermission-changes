<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaOversesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('proforma_overses', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('proforma_invoices_id')->nullable()->comment('proforma_invoices Table id');
        //     $table->bigInteger('notify_party')->nullable()->comment('tbl_customer_general Table id');
        //     $table->bigInteger('country_origin')->nullable()->comment('mst_country Table id');
        //     $table->bigInteger('country_destination')->nullable()->comment('mst_country Table id');
        //     $table->tinyInteger('precarriage')->nullable()->comment('1 - Road, 2 - Air, 3- Sea');
        //     $table->bigInteger('place_of_receipt')->nullable()->comment('tbl_city Table id');
        //     $table->string('vessel')->nullable()->comment('Vessel/FI No. Field value');
        //     $table->bigInteger('port_loading')->nullable()->comment('tbl_city Table id');
        //     $table->bigInteger('port_discharge')->nullable()->comment('tbl_city Table id');
        //     $table->bigInteger('final_destination')->nullable()->comment('tbl_city Table id');
        //     $table->string('air_freight')->nullable();
        //     $table->string('sea_freight')->nullable();
        //     $table->string('admin_cost')->nullable();
        //     $table->string('bank_charges')->nullable();
        //     $table->string('correspondent_bank')->nullable();
        //     $table->string('account_no')->nullable();
        //     $table->string('location')->nullable();
        //     $table->string('swift')->nullable()->comment('SWIFT/BIC CODE field value');
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
        Schema::dropIfExists('proforma_overses');
    }
}
