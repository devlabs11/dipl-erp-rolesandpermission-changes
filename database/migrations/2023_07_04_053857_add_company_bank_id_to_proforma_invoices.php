<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyBankIdToProformaInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::table('proforma_invoices', function (Blueprint $table) {
    //         $table->bigInteger('company_bank_id')->nullable()->after('delivery_address_id')->comment('tbl_rtgs_neft Table id');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proforma_invoices', function (Blueprint $table) {
            $table->dropColumn('company_bank_id');
        });
    }
}
