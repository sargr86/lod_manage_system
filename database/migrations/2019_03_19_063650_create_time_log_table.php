<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('doc_id')->unsigned()->index();
            $table->integer('person_id')->unsigned()->index();
            $table->integer('case_id')->unsigned()->index();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreign('doc_id')->references('id')->on('documents')->onDelete('cascade');
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
            $table->foreign('person_id')->references('id')->on('case_participants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_log');
    }
}
