<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('description_masters', function (Blueprint $table) {
        //     $table->id();
        //     $table->text('text');
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
        Schema::dropIfExists('description_masters');
    }
}
