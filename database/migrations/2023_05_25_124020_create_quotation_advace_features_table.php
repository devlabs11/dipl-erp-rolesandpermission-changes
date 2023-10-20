<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationAdvaceFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('quotation_advace_features', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('quotation_id')->nullable()->comment('quotation_master Table id');
        //     $table->bigInteger('advance_feature_id')->nullable()->comment('advance_feature_masters Table id');
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
        Schema::dropIfExists('quotation_advace_features');
    }
}
