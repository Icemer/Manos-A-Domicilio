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
            
            //Relacion Usuario
            $table->unsignedBigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('IdUsuario')->on('users')->onDelete('cascade');
            
            //Relacion Categoria
            $table->unsignedBigInteger('IdCategoria');
            $table->foreign('IdCategoria')->references('IdCategoria')->on('categorias')->onDelete('cascade');
            
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