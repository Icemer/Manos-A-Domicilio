<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id('IdServicio');
            $table->foreignId('IdUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('IdTrabajador')->constrained('trabajadores')->onDelete('cascade');
            $table->foreignId('IdCategoria')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('IdDireccionesCliente')->constrained('direccionesCliente')->onDelete('cascade');
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