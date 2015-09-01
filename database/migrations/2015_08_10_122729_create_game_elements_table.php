<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('money');
            $table->string('energy');
            $table->string('metal');
            $table->string('food');
            $table->string('point');
            $table->string('alliance');
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
        Schema::drop('game_elements');
    }
}
