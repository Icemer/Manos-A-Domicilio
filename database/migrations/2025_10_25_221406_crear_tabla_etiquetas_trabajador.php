<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('etiquetasTrabajador', function (Blueprint $table) {
            $table->bigIncrements('IdEtiquetasTrabajador');
            
            //Relacion Trabajador
            $table->unsignedBigInteger('IdTrabajador');
            $table->foreign('IdTrabajador')->references('IdTrabajador')->on('trabajadores')->onDelete('cascade');
            
            //Relacion Etiqueta
            $table->unsignedBigInteger('IdEtiqueta');
            $table->foreign('IdEtiqueta')->references('IdEtiqueta')->on('etiquetas')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etiquetasTrabajador');
    }
};