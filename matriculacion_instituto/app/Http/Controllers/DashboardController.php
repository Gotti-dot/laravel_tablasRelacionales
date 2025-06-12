<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Models\Estudiante;
use App\Models\Materia;
use App\Models\Matricula;


class DashboardController extends Controller
{
    public function index()
    {
        $totalEstudiantes = Estudiante::count();
        $totalMaterias = Materia::count();
        $totalMatriculas = Matricula::count();


        return view('dashboard.index', compact('totalEstudiantes', 'totalMaterias', 'totalMatriculas'));
    }
}
