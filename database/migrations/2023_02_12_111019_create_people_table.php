<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('people', function (Blueprint $table) {

            $table->id();

            $table->string('firstName', 32);
            $table->string('lastName', 32);

            // qual è il filtro del passato???
            $table->date('dateOfBirth');
            $table->integer('heigth')->unsigned()->nullable();








            $table->timestamps();
        });
    }









    public function down()
    {
        Schema::dropIfExists('people');
    }
};
