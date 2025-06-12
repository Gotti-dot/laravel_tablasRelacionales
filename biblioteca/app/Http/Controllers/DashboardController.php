<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socio;
use App\Models\Libro;
use App\Models\Prestamo;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSocios = Socio::count();
        $totalLibros = Libro::count();
        $totalPrestamos = Prestamo::count();

        return view('dashboard.index', compact('totalSocios', 'totalLibros', 'totalPrestamos'));
    }
}
