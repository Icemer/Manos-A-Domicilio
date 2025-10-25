<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DireccionesCliente extends Model
{
    protected $table = 'direccionesCliente';
    protected $primaryKey = 'IdDireccionesCliente';

    protected $fillable = [
        'IdUsuario','IdZona',
        'calle','número','colonia','pais','estado','municipio','referencias'
    ];

    protected $hidden = [];
}
