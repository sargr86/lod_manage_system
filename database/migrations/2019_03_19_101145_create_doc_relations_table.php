<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_relations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_doc_id');
            $table->integer('child_doc_id');
            $table->integer('relation_type_id')->unsigned()->index();
            $table->string('position_types');
            $table->string('position',100);
            $table->foreign('relation_type_id')->references('id')->on('relation_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_relations');
    }
}
