<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseParticipantRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_participant_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('person_id');
            $table->integer('case_id');
            $table->integer('role_id');
//            $table->enum('side',[]);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
            $table->foreign('person_id')->references('id')->on('personnel')->onDelete('cascade');
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('participant_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_participant_roles');
    }
}
