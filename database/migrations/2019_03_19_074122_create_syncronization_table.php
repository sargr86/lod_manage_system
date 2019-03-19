<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyncronizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syncronization', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('person_id')->unsigned()->index();
            $table->integer('computer_id')->unsigned()->index();
            $table->integer('directory_id')->unsigned()->index();
            $table->dateTime('sync_time');
            $table->string('status',45);
            $table->foreign('person_id')->references('id')->on('personnel')->onDelete('cascade');
            $table->foreign('computer_id')->references('id')->on('computers')->onDelete('cascade');
            $table->foreign('directory_id')->references('id')->on('sync_dir_schedule')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syncronization');
    }
}
