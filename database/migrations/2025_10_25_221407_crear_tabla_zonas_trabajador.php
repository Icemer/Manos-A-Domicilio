<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('zonas_trabajador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdTrabajador')->constrained('trabajadores')->onDelete('cascade');
            $table->foreignId('IdZona')->constrained('zonas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zonas_trabajador');
    }
};