<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user_operators', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('unique_id')->nullable();
        //     $table->string('name')->nullable();
        //     $table->string('fullname')->nullable();
        //     $table->string('emp_code')->nullable();
        //     $table->string('password')->nullable();
        //     $table->bigInteger('site_id')->nullable()->comment('mst_site Table id');
        //     $table->tinyInteger('status')->nullable()->comment('1 - active, 2 - Inactive');
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
        Schema::dropIfExists('user_operators');
    }
}
