<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('direccionesCliente', function (Blueprint $table) {
            $table->bigIncrements('IdDireccionesCliente');
            
            //Relacion Usuario
            $table->unsignedBigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('IdUsuario')->on('users')->onDelete('cascade');
            
            //Relacion Zona
            $table->unsignedBigInteger('IdZona');
            $table->foreign('IdZona')->references('IdZona')->on('zonas')->onDelete('cascade');
            
            $table->string('calle');
            $table->string('número');
            $table->string('colonia');
            $table->string('pais');
            $table->string('estado');
            $table->string('municipio');
            $table->text('referencias')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direccionesCliente');
    }
};