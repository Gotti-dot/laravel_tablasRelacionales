<?php


namespace App\Http\Controllers;


use App\Exports\EstudiantesExport;
use App\Exports\MateriasExport;
use App\Exports\MatriculasExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


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
        $estudiantes = \App\Models\Estudiante::all();
        $pdf = PDF::loadView('exports.estudiantes_pdf', compact('estudiantes'));
        return $pdf->download('estudiantes.pdf');
    }



    // Exportar datos a Excel
    public function exportExcelMaterias()
    {
        return Excel::download(new MateriasExport, 'materias.xlsx');
    }

    // Exportar datos a PDF
    public function exportPDFMaterias()
    {
        $materias = \App\Models\Materia::all();
        $pdf = PDF::loadView('exports.materias_pdf', compact('materias'));

        return $pdf->download('materias.pdf');
    }

    // Exportar Excel matrículas
    public function exportExcelMatriculas()
    {
        return Excel::download(new MatriculasExport, 'matriculas.xlsx');
    }

    // Exportar PDF matrículas
    public function exportPdfMatriculas()
    {
        $matriculas = \App\Models\Matricula::all();
        $pdf = PDF::loadView('exports.matriculas_pdf', compact('matriculas'));
        return $pdf->download('matriculas.pdf');
    }
}



