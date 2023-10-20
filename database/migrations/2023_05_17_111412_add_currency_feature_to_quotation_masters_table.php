<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCurrencyFeatureToQuotationMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('quotation_masters', function (Blueprint $table) {
        //     $table->bigInteger('currency_id')->nullable()->comment('tbl_currency Table id')->after('product_count');
        //     $table->tinyInteger('features_is')->default(0)->comment('0-No,1-Yes')->nullable()->after('currency_id');
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
            $table->dropColumn(['currency_id','features_is']);
        });
    }
}
