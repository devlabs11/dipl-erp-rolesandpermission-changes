<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    // {
    //     Schema::create('taxes', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('sgst')->nullable();
    //         $table->string('cgst')->nullable();
    //         $table->string('igst')->nullable();
    //         $table->softDeletes();
    //         $table->bigInteger('created_by')->nullable();
    //         $table->bigInteger('updated_by')->nullable();
    //         $table->bigInteger('deleted_by')->nullable();
    //         $table->timestamps();
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxes');
    }
}
