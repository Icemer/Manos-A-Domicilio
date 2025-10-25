<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('zonasTrabajador', function (Blueprint $table) {
            $table->bigIncrements('IdZonasTrabajador');
            
            //Relacion Trabajador
            $table->unsignedBigInteger('IdTrabajador');
            $table->foreign('IdTrabajador')->references('IdTrabajador')->on('trabajadores')->onDelete('cascade');
            
            //Relacion Zona
            $table->unsignedBigInteger('IdZona');
            $table->foreign('IdZona')->references('IdZona')->on('zonas')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zonasTrabajador');
    }
};