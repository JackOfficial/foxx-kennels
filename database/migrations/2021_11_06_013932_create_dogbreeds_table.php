<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogbreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogbreeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('breed_name');
            $table->string('origin');
            $table->longText('history');
            $table->longText('about');
            $table->string('height');
            $table->string('weight');
            $table->string('life_expectancy');
            $table->integer('family_affection');
            $table->string('family_affection_description');
            $table->integer('good_with_dogs');
            $table->string('good_with_dogs_description');
            $table->integer('good_with_children');
            $table->string('good_with_children_description');
            $table->integer('shadding_level');
            $table->string('shadding_level_description');
            $table->integer('grooming_frequency');
            $table->string('grooming_frequency_description');
            $table->integer('strangers_openness');
            $table->string('strangers_openness_description');
            $table->integer('playfulness_level');
            $table->string('playfulness_description');
            $table->integer('protective_nature');
            $table->string('protective_nature_description');
            $table->integer('adaptability_level');
            $table->string('adaptability_level_description');
            $table->integer('trainablity_level');
            $table->string('trainablity_level_description');
            $table->integer('energy_level');
            $table->string('energy_level_description');
            $table->integer('barking_level');
            $table->string('barking_level_description');
            $table->integer('mentor_stimilation_needs');
            $table->string('mentor_stimilation_needs_description');
            $table->integer('price');
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
        Schema::dropIfExists('dogbreeds');
    }
}
