<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParsingRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parsing_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('person_id')->unsigned()->index();
            $table->integer('computer_id')->unsigned()->index();
            $table->string('database_field',45);
            $table->text('formula');
            $table->text('regexp_condition');
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
        Schema::dropIfExists('parsing_rules');
    }
}
