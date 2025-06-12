<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Inscripcion;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEstudiantes = Estudiante::count();
        $totalCursos = Curso::count();
        $totalInscripciones = Inscripcion::count();

        return view('dashboard.index', compact('totalEstudiantes', 'totalCursos', 'totalInscripciones'));
    }
}
