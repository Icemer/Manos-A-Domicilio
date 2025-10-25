<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrabajadoresFavoritos extends Model
{
    protected $table = 'trabajadoresFavoritos';
    protected $primaryKey = 'IdTrabajadoresFavoritos';

    protected $fillable = [
        'IdUsuario','IdTrabajador'
    ];

    protected $hidden = [];
}
