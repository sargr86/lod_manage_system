<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doc_type_id')->unsigned()->index();
            $table->integer('case_id')->unsigned()->index();
            $table->integer('author_id')->unsigned()->index();
            $table->string('doc_name');
            $table->text('description');
            $table->dateTime('created_date');
            $table->dateTime('filed_date');
            $table->foreign('doc_type_id')->references('id')->on('document_types')->onDelete('cascade');
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('personnel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
