<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transformers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transformer');
            $table->string('model_number');
            $table->string('city_location');
            $table->string('mounting_location');
            $table->string('number_of_phases');
            $table->string('rated_voltage');
            $table->string('control_centre');
            $table->string('rated_power');
            $table->string('type_of_insulation');
            $table->string('slug')->unique();
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
        Schema::drop('transformers');
    }
}
