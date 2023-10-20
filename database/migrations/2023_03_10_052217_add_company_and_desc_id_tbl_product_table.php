<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyAndDescIdTblProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    // {
    //     Schema::table('tbl_product', function (Blueprint $table) {
    //         $table->bigInteger('company_id')->after('unique_id')->default(0);
    //         $table->text('description_id')->after('company_id')->nullable();
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_product', function (Blueprint $table) {
            $table->dropColumn('company_id','description_id');
        });
    }
}
