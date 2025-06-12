<?php

namespace App\Http\Controllers;

use App\Exports\HuespedesExport;
use App\Exports\HabitacionesExport;
use App\Exports\ReservasExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ExportController extends Controller
{
    // Exportar Excel huéspedes
    public function exportExcelHuespedes()
    {
        return Excel::download(new HuespedesExport, 'huespedes.xlsx');
    }

    // Exportar PDF huéspedes
    public function exportPdfHuespedes()
    {
        $huespedes = \App\Models\Huesped::all();
        $pdf = PDF::loadView('exports.huespedes_pdf', compact('huespedes'));
        return $pdf->download('huespedes.pdf');
    }

    // Exportar Excel habitaciones
    public function exportExcelHabitaciones()
    {
        return Excel::download(new HabitacionesExport, 'habitaciones.xlsx');
    }

    // Exportar PDF habitaciones
    public function exportPdfHabitaciones()
    {
        $habitaciones = \App\Models\Habitacion::all();
        $pdf = PDF::loadView('exports.habitaciones_pdf', compact('habitaciones'));
        return $pdf->download('habitaciones.pdf');
    }

    // Exportar Excel reservas
    public function exportExcelReservas()
    {
        return Excel::download(new ReservasExport, 'reservas.xlsx');
    }

    // Exportar PDF reservas
    public function exportPdfReservas()
    {
        $reservas = \App\Models\Reserva::all();
        $pdf = PDF::loadView('exports.reservas_pdf', compact('reservas'));
        return $pdf->download('reservas.pdf');
    }
}
