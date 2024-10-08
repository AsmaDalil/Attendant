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
        Schema::create('perscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer("student_id")->nullable();
            $table->string("student_name")->nullable();
            $table->string("school_name")->nullable();
            $table->string("malady");
            $table->string("medication");
            $table->string("decsription")->nullable();
            $table->string("doctor_name")->nullable();
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
        Schema::dropIfExists('perscriptions');
    }
};
