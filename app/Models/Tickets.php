<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'tickets';
    protected $primaryKey = 'IdTickets';

    protected $fillable = [
        'IdServicio',
        'descripcion','estado'
    ];

    protected $hidden = [];
}
