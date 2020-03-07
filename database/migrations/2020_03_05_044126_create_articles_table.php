<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->String('title_article','200');
            $table->String('photo_title','500')->nullable();
            $table->String('link_external','200')->nullable();
            $table->String('short_title_article','150')->nullable();
            $table->String('priority_article','5')->nullable();
            $table->String('num_article','6')->nullable();
            $table->String('date_not_define','6')->nullable();
            $table->text('description_article')->nullable();
            $table->date('date_publication')->nullable();
            $table->date('date_expiration')->nullable();
            $table->date('date_event')->nullable();

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
        Schema::dropIfExists('articles');
    }
}
