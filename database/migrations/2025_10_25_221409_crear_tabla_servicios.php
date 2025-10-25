<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigIncrements('IdServicio');
            
            //Relacion Usuario
            $table->unsignedBigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('IdUsuario')->on('users')->onDelete('cascade');
            
            //Relacion Trabajador
            $table->unsignedBigInteger('IdTrabajador');
            $table->foreign('IdTrabajador')->references('IdTrabajador')->on('trabajadores')->onDelete('cascade');
            
            //Relacion Categoria
            $table->unsignedBigInteger('IdCategoria');
            $table->foreign('IdCategoria')->references('IdCategoria')->on('categorias')->onDelete('cascade');
            
            //Relacion Direccion Cliente
            $table->unsignedBigInteger('IdDireccionesCliente');
            $table->foreign('IdDireccionesCliente')->references('IdDireccionesCliente')->on('direccionesCliente')->onDelete('cascade');
            
            $table->date('fecha');
            $table->time('horaInicial');
            $table->text('descripcion');
            $table->enum('estado', ['pendiente', 'en_proceso', 'completado', 'cancelado'])->default('pendiente');
            $table->decimal('precio', 10, 2);
            $table->integer('calificacionCliente')->nullable();
            $table->integer('calificacionTrabajador')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
};