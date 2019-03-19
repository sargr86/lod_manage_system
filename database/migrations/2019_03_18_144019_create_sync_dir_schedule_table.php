<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyncDirScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sync_dir_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->unsigned()->index();
            $table->integer('computer_id')->unsigned()->index();
            $table->string('directory_name',45);
            $table->foreign('person_id')->references('id')->on('personnel')->onDelete('cascade');
            $table->foreign('computer_id')->references('id')->on('computers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sync_dir_schedule');
    }
}
