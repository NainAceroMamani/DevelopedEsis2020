<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->increments('id');
            $table->String('grade_prefessional', '100')->nullable();
            $table->String('college', '80')->nullable();
            $table->String('code_qr', '120')->nullable();
            
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');

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
        Schema::dropIfExists('professionals');
    }
}
