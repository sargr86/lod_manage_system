<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('case_type_id');
            $table->integer('parent_activity_type');
            $table->integer('child_activity_type');
            $table->integer('max_days_before');
            $table->integer('min_days_before');
            $table->integer('max_days_after');
            $table->integer('min_days_after');
            $table->text('additional_rules');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_requirements');
    }
}
