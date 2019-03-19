<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('case_id')->unsigned()->index();
            $table->integer('person_id')->unsigned()->index();
            $table->integer('to_do_id')->unsigned()->index();
            $table->string('alert_text');
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
            $table->foreign('person_id')->references('id')->on('case_participants')->onDelete('cascade');
            $table->foreign('to_do_id')->references('id')->on('to_dos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alerts');
    }
}
