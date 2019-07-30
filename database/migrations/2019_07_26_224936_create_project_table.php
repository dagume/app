<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('project_id');
            $table->string('name');
            $table->date('start_date');
            $table->date('closing_date');
            $table->string('description');
            $table->integer('budget');
            $table->integer('execution');
            $table->integer('advance');
            $table->integer('category');
            $table->String('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
