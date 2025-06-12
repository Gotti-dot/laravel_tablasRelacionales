<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';
    protected $primaryKey = 'id_libro';

    protected $fillable = [
        'titulo',
        'autor',
        'isbn',
        'editorial',
        'anio_publicacion',
        'estado',
    ];
}
