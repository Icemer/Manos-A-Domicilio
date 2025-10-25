<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    protected $table = 'trabajadores';
    protected $primaryKey = 'IdTrabajador';

    protected $fillable = [
        'IdUsuario','IdCategoria',
        'disponibilidad','descripcion'
    ];

    protected $hidden = [];
}
