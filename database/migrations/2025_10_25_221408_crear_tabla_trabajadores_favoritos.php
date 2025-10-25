<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trabajadoresFavoritos', function (Blueprint $table) {
            $table->bigIncrements('IdTrabajadoresFavoritos');
            
            //Relacion Usuario
            $table->unsignedBigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('IdUsuario')->on('users')->onDelete('cascade');
            
            //Relacion Trabajador
            $table->unsignedBigInteger('IdTrabajador');
            $table->foreign('IdTrabajador')->references('IdTrabajador')->on('trabajadores')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trabajadoresFavoritos');
    }
};