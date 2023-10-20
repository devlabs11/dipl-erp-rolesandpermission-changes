<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvanceFeatureMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('advance_feature_masters', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->nullable();
        //     $table->bigInteger('currency_id')->nullable()->comment('tbl_currency Table id');
        //     $table->decimal('price',8,2)->nullable()->default(0);
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
        Schema::dropIfExists('advance_feature_masters');
    }
}
