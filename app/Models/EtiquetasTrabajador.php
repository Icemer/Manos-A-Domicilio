<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtiquetasTrabajador extends Model
{
    protected $table = 'etiquetasTrabajador';
    protected $primaryKey = 'IdEtiquetasTrabajador';

    protected $fillable = [
        'IdTrabajador','IdEtiqueta'
    ];

    protected $hidden = [];
}
