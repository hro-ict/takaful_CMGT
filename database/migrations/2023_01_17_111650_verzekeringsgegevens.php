<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Verzekeringsgegevens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               Schema::create('Verzekeringsgegevens', function (Blueprint $table) 
    {
            $table->id();
            $table->string('Naam')->nullable();
            $table->string('Adres')->nullable();
            $table->string('Telefoon')->nullable();
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
