<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huesped;
use App\Models\Habitacion;
use App\Models\Reserva;

class DashboardController extends Controller
{
    public function index()
    {
        $totalHuespedes = Huesped::count();
        $totalHabitaciones = Habitacion::count();
        $totalReservas = Reserva::count();

        return view('dashboard.index', compact('totalHuespedes', 'totalHabitaciones', 'totalReservas'));
    }
}
