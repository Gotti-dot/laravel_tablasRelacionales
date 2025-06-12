<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitaciones';
    protected $primaryKey = 'id_habitacion';

    protected $fillable = [
        'numero',
        'tipo',
        'precio_noche',
        'descripcion',
        'estado',
    ];
}
