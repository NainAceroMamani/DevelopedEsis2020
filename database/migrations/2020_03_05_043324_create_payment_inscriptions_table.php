<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('type_inscription', '45')->nullable();
            $table->String('type_payment','20')->nullable();
            $table->String('status_pre_inscription','5')->nullable();
            $table->decimal('payment_advanced', 6, 2)->nullable();
            $table->decimal('payment_inscription', 6, 2)->nullable();

            $table->integer('inscription_id')->unsigned();
            $table->foreign('inscription_id')->references('id')->on('inscriptions');
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
        Schema::dropIfExists('payment_inscriptions');
    }
}
