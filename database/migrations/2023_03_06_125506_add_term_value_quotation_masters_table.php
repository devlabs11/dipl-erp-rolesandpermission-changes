<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTermValueQuotationMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('quotation_masters', function (Blueprint $table) {
        //     $table->text('term_value')->after('term_title');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotation_masters', function (Blueprint $table) {
            $table->dropColumn('term_value');
        });
    }
}
