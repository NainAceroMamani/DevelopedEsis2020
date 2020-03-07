<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfrontationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confrontations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competetion_group');
            $table->decimal('score', 5, 2)->nullable();
            $table->integer('competetion_position')->nullable();
            $table->String('name_team', '40')->nullable();

            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');
            $table->integer('competition_id')->unsigned();
            $table->foreign('competition_id')->references('id')->on('competitions');
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
        Schema::dropIfExists('confrontations');
    }
}
