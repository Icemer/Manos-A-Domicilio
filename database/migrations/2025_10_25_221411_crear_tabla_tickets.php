<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('IdServicio')->constrained('servicios')->onDelete('cascade');
            $table->string('asunto');
            $table->text('descripcion');
            $table->enum('estado', ['abierto', 'en_proceso', 'resuelto', 'cerrado'])->default('abierto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};