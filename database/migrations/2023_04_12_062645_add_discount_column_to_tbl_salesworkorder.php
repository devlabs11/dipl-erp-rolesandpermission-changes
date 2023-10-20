<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiscountColumnToTblSalesworkorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('tbl_salesworkorder', function (Blueprint $table) {
        //     $table->decimal('discount',8,2)->default(0)->nullable()->after('unit_price_unit');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_salesworkorder', function (Blueprint $table) {
            $table->dropColumn('discount');
        });
    }
}
