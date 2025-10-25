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
            $table->foreignId('IdUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('IdZona')->constrained('zonas')->onDelete('cascade');
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