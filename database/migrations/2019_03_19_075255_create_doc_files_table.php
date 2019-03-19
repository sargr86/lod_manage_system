<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doc_id')->unsigned()->index();
            $table->integer('status_id')->unsigned()->index();
            $table->integer('form_id')->unsigned()->index();
            $table->string('format',45);
            $table->datetime('created_date');
            $table->foreign('doc_id')->references('id')->on('documents')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('file_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_files');
    }
}
