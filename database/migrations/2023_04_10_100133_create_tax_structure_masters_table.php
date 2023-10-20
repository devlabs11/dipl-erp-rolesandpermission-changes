<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxStructureMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tax_structure_masters', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('unique_id')->default(0)->nullable();
        //     $table->bigInteger('tax_id')->comment('tbl_tax id')->default(0)->nullable();
        //     $table->string('name')->nullable();
        //     $table->tinyInteger ('status')->comment('0 = inactive, 1 = active')->default(0)->nullable();
        //     $table->softDeletes();
        //     $table->bigInteger('created_by')->nullable();
        //     $table->bigInteger('updated_by')->nullable();
        //     $table->bigInteger('deleted_by')->nullable();
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
        Schema::dropIfExists('tax_structure_masters');
    }
}
