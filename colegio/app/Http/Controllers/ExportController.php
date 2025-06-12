<?php

namespace App\Http\Controllers;

use App\Exports\EstudiantesExport;
use App\Exports\CursosExport;
use App\Exports\InscripcionesExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Inscripcion;

class ExportController extends Controller
{
    // Exportar Excel estudiantes
    public function exportExcelEstudiantes()
    {
        return Excel::download(new EstudiantesExport, 'estudiantes.xlsx');
    }

    // Exportar PDF estudiantes
    public function exportPdfEstudiantes()
    {
        $estudiantes = Estudiante::all();
        $pdf = PDF::loadView('exports.estudiantes_pdf', compact('estudiantes'));
        return $pdf->download('estudiantes.pdf');
    }

    // Exportar Excel cursos
    public function exportExcelCursos()
    {
        return Excel::download(new CursosExport, 'cursos.xlsx');
    }

    // Exportar PDF cursos
    public function exportPdfCursos()
    {
        $cursos = Curso::all();
        $pdf = PDF::loadView('exports.cursos_pdf', compact('cursos'));
        return $pdf->download('cursos.pdf');
    }

    // Exportar Excel inscripciones
    public function exportExcelInscripciones()
    {
        return Excel::download(new InscripcionesExport, 'inscripciones.xlsx');
    }

    // Exportar PDF inscripciones
    public function exportPdfInscripciones()
    {
        $inscripciones = Inscripcion::all();
        $pdf = PDF::loadView('exports.inscripciones_pdf', compact('inscripciones'));
        return $pdf->download('inscripciones.pdf');
    }
}
