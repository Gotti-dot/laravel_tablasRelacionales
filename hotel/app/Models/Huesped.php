<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    use HasFactory;

    protected $table = 'huespedes';
    protected $primaryKey = 'id_huesped';

    protected $fillable = [
        'documento',
        'nombre',
        'apellido',
        'nacionalidad',
        'telefono',
        'email',
    ];
}
