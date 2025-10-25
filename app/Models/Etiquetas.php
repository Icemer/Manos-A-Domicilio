<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etiquetas extends Model
{
    protected $table = 'etiquetas';
    protected $primaryKey = 'IdEtiqueta';

    protected $fillable = [
        'nombre'
    ];

    protected $hidden = [];
}
