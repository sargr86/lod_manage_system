<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata_params', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('format_id')->unsigned()->index();
            $table->string('param_name',100);
            $table->foreign('format_id')->references('id')->on('formats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metadata_params');
    }
}
