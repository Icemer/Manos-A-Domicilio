<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'IdServicio';

    protected $fillable = [
        'IdUsuario','IdTrabajador','IdCategoria','IdDireccionesCliente',
        'fecha','horaInicial','descripcion','estado','precio',
        'calificacionCliente','calificacionTrabajador'
    ];

    protected $hidden = [];
}
