<?php

namespace App\Http\Controllers;

use App\Exports\SociosExport;
use App\Exports\LibrosExport;
use App\Exports\PrestamosExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ExportController extends Controller
{
    // Exportar Excel socios
    public function exportExcelSocios()
    {
        return Excel::download(new SociosExport, 'socios.xlsx');
    }

    // Exportar PDF socios
    public function exportPdfSocios()
    {
        $socios = \App\Models\Socio::all();
        $pdf = PDF::loadView('exports.socios_pdf', compact('socios'));
        return $pdf->download('socios.pdf');
    }

    // Exportar Excel libros
    public function exportExcelLibros()
    {
        return Excel::download(new LibrosExport, 'libros.xlsx');
    }

    // Exportar PDF libros
    public function exportPdfLibros()
    {
        $libros = \App\Models\Libro::all();
        $pdf = PDF::loadView('exports.libros_pdf', compact('libros'));
        return $pdf->download('libros.pdf');
    }

    // Exportar Excel préstamos
    public function exportExcelPrestamos()
    {
        return Excel::download(new PrestamosExport, 'prestamos.xlsx');
    }

    // Exportar PDF préstamos
    public function exportPdfPrestamos()
    {
        $prestamos = \App\Models\Prestamo::all();
        $pdf = PDF::loadView('exports.prestamos_pdf', compact('prestamos'));
        return $pdf->download('prestamos.pdf');
    }
}
