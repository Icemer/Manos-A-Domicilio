<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZonasTrabajador extends Model
{
    protected $table = 'zonas';
    protected $primaryKey = 'IdZonasTrabajador';

    protected $fillable = [
        'IdZona','IdTrabajador'
    ];

    protected $hidden = [];
}
