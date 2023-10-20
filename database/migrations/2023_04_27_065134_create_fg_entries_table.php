<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFgEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('fg_entries', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('entry_no')->nullable();
        //     $table->date('date')->nullable();
        //     $table->bigInteger('user_operator_id')->nullable()->comment('user_operators Table id');
        //     $table->bigInteger('job_card_id')->nullable()->comment('tbl_job_cart Table id');
        //     $table->bigInteger('work_order_id')->nullable()->comment('tbl_salesworkorder Table id');
        //     $table->bigInteger('location')->nullable()->comment('mst_site Table id');
        //     $table->bigInteger('process_category_id')->nullable()->comment('process_categories Table id');
        //     $table->bigInteger('process_id')->nullable()->comment('tbl_process_master Table id');
        //     $table->string('fg_qty')->nullable();
        //     $table->string('no_boxes')->nullable();
        //     $table->string('qty_kg')->nullable();
        //     $table->text('answers')->nullable()->comment('1 - Ok,2 - Not Okay, 3 - Not Applicable');
        //     $table->string('qc')->nullable();
        //     $table->text('complains')->nullable();
        //     $table->text('comments')->nullable();
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
        Schema::dropIfExists('fg_entries');
    }
}
