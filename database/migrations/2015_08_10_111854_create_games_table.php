<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('money_default');
            $table->integer('money_speed');
            $table->integer('energy_default');
            $table->integer('energy_speed');
            $table->integer('metal_default');
            $table->integer('metal_speed');
            $table->integer('food_default');
            $table->integer('food_speed');
            $table->integer('point');
            $table->integer('max_alliance');
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
        Schema::drop('games');
    }
}
