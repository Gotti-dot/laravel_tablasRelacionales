<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $table = 'socios';
    protected $primaryKey = 'id_socio';

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'telefono',
        'fecha_alta',
    ];
}
