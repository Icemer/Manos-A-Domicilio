<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('IdPago');
            
            //Relacion Servicio
            $table->unsignedBigInteger('IdServicio');
            $table->foreign('IdServicio')->references('IdServicio')->on('servicios')->onDelete('cascade');
            
            $table->decimal('monto', 10, 2);
            $table->enum('estado', ['pendiente', 'completado', 'cancelado'])->default('pendiente');
            $table->string('metodoPago');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};