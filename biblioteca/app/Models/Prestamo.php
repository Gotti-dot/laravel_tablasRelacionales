<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamos';
    protected $primaryKey = 'id_prestamo';

    protected $fillable = [
        'id_libro',
        'id_socio',
        'fecha_prestamo',
        'fecha_devolucion',
        'estado',
    ];

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'id_libro');
    }

    public function socio()
    {
        return $this->belongsTo(Socio::class, 'id_socio');
    }
}
