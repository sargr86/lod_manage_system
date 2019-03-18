<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('person_id')->unsigned()->index();;
            $table->string('mac_address',45);
            $table->string('computer_type');
            $table->string('OS',45);
            $table->text('RSA_KEY',45);
            $table->dateTime('request_date');
            $table->dateTime('approved_date');
            $table->timestamps();
            $table->foreign('person_id')->references('id')->on('personnel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
