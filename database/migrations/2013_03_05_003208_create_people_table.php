<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name_person', '65');
            $table->String('last_name_person', '65')->nullable();
            $table->String('type_document', '50');
            $table->String('num_document', '50');
            $table->String('phone_person', '20')->nullable();
            $table->String('email_person', '60')->nullable();
            $table->String('code_organizer', '20')->nullable();
            
            $table->String('type_person', '5');

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
        Schema::dropIfExists('people');
    }
}
