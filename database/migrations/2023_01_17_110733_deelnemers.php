<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Deelnemers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('deelnemers', function (Blueprint $table) 
    {
            $table->id();
            $table->string('Voor-en achternaam aanmelder');
            $table->string('Geboortedatum');
            $table->string('Adres');
            $table->string('Telefoon');
            $table->string('Email');
            $table->string('Keuze begraafplaats');
            $table->string('Afkomst/Nationaliteit');
            $table->string('Heeft uitvaartverzekering?');
            
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
