<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id_reserva';

    protected $fillable = [
        'id_huesped',
        'id_habitacion',
        'fecha_entrada',
        'fecha_salida',
        'estado',
        'total',
    ];

    // Relaciones
    public function huesped()
    {
        return $this->belongsTo(Huesped::class, 'id_huesped');
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'id_habitacion');
    }
}
