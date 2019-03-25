<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned()->index();
            $table->string('activity_type_id');
            $table->string('activity_name',100);
//            $table->enum('owner',[])
            $table->text('comments');
            $table->string('tentative_calendar_name',20);
            $table->date('tentative_date');
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
//            $table->foreign('activity_type_id')->references('id')->on('activity_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
