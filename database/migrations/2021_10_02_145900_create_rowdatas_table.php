<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRowdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rowdatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('data')->nullable();
            $table->integer('poorSignal')->nullable();
            $table->integer('attention')->nullable();
            $table->integer('meditation')->nullable();
            $table->integer('delta')->nullable();
            $table->integer('theta')->nullable();
            $table->integer('lowAplpha')->nullable();
            $table->integer('highAplpha')->nullable();
            $table->integer('lowBeta')->nullable();
            $table->integer('highBeta')->nullable();
            $table->integer('lowGamma')->nullable();
            $table->integer('midGamma')->nullable();
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
        Schema::dropIfExists('rowdatas');
    }
}
