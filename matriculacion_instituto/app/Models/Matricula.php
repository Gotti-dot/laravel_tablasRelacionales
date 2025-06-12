<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Matricula extends Model
{
    use HasFactory;


    protected $table = 'matriculas';
    protected $primaryKey = 'id_matricula';


    protected $fillable = [
        'id_estudiante',
        'id_materia',
        'fecha_matricula',
        'periodo_academico',
        'estado',
    ];


    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }


    public function materia()
    {
        return $this->belongsTo(Materia::class, 'id_materia');
    }
}


