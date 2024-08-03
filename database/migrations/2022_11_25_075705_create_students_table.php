<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('family_name')->nullable();
            $table->string('given_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_Birth')->nullable();
            $table->string('place_Birth')->nullable();
            $table->string('familial_situation')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('country_citizenship')->nullable();
            $table->string('id_card_num')->unique();
            $table->string('status')->nullable();
            $table->string('name1_Em')->nullable();
            $table->string('relationship1_Em')->nullable();
            $table->string('homephone1_Em')->nullable();
            $table->string('cellphone1_Em')->nullable();
            $table->string('address1_Em')->nullable();
            $table->string('name2_Em')->nullable();
            $table->string('relationship2_Em')->nullable();
            $table->string('homephone2_Em')->nullable();
            $table->string('cellphone2_Em')->nullable();
            $table->string('address2_Em')->nullable();
            $table->string('alergy')->nullable();
            $table->string('drug')->nullable();
            $table->string('treatment')->nullable();
            $table->string('medical_Questions')->nullable();
            $table->string('phy_condition')->nullable();
            $table->string('sport')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('students');
    }
};
