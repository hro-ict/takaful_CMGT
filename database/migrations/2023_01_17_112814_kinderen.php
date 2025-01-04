<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kinderen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                    Schema::create('kinderen', function (Blueprint $table) 
    {
            $table->id();
            $table->string('Naam')->nullable();
            $table->string('Geboortedatum')->nullable();
            $table->string('Leeftijd')->nullable();
            $table->string('Aanmelder_id')->nullable();
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
        //
    }
}
