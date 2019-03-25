<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityDocsXrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_docs_xref', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doc_id')->unsigned()->index();
            $table->string('relation_type',10);
            $table->integer('case_id')->unsigned()->index();
            $table->integer('activity_id')->unsigned()->index();
            $table->string('activity_type', 45);
//            $table->foreign('relation_type')->references('relation_type_name')->on('relation_types')->onDelete('cascade');
//            $table->foreign('doc_id')->references('id')->on('documents')->onDelete('cascade');
//            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
//            $table->foreign('activity_type')
//            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_docs_xref');
    }
}
