<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trabajadores_favoritos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('IdTrabajador')->constrained('trabajadores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trabajadores_favoritos');
    }
};