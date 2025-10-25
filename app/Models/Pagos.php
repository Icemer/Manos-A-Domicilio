<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'IdPago';

    protected $fillable = [
        'IdServicio',
        'metodoPago','estado'
    ];

    protected $hidden = [];
}
