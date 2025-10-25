<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->bigIncrements('IdTrabajador');
            $table->foreignId('IdUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('IdCategoria')->constrained('categorias')->onDelete('cascade');
            $table->boolean('disponibilidad')->default(true);
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trabajadores');
    }
};