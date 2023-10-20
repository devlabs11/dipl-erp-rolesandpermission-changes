<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('prospect_masters', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('company')->nullable();
        //     $table->string('contact_person')->nullable();
        //     $table->string('phone')->nullable();
        //     $table->string('email')->nullable();
        //     $table->string('department')->nullable();
        //     $table->string('designation')->nullable();
        //     $table->string('quotation_attention')->nullable();
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
        Schema::dropIfExists('prospect_masters');
    }
}
