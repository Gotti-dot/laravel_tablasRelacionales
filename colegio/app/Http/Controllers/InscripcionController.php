<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Estudiante;
use App\Models\Curso;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::with('estudiante', 'curso')->orderByDesc('fecha_inscripcion')->paginate(10);
        return view('inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('inscripciones.create', compact('estudiantes', 'cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_estudiante' => 'required|exists:estudiantes,id_estudiante',
            'id_curso' => 'required|exists:cursos,id_curso',
            'fecha_inscripcion' => 'required|date',
            'periodo_academico' => 'required|max:20',
            'estado' => 'required|in:Activa,Cancelada',
        ]);

        Inscripcion::create($request->all());
        return redirect()->route('inscripciones.index')->with('success', 'Inscripción registrada con éxito.');
    }

    public function show($id_inscripcion)
    {
        $inscripcion = Inscripcion::with('estudiante', 'curso')->findOrFail($id_inscripcion);
        return view('inscripciones.show', compact('inscripcion'));
    }

    public function edit($id_inscripcion)
    {
        $inscripcion = Inscripcion::findOrFail($id_inscripcion);
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('inscripciones.edit', compact('inscripcion', 'estudiantes', 'cursos'));
    }

    public function update(Request $request, $id_inscripcion)
    {
        $inscripcion = Inscripcion::findOrFail($id_inscripcion);

        $request->validate([
            'id_estudiante' => 'required|exists:estudiantes,id_estudiante',
            'id_curso' => 'required|exists:cursos,id_curso',
            'fecha_inscripcion' => 'required|date',
            'periodo_academico' => 'required|max:20',
            'estado' => 'required|in:Activa,Cancelada',
        ]);

        $inscripcion->update($request->all());
        return redirect()->route('inscripciones.index')->with('success', 'Inscripción actualizada.');
    }

    public function destroy($id_inscripcion)
    {
        Inscripcion::destroy($id_inscripcion);
        return redirect()->route('inscripciones.index')->with('success', 'Inscripción eliminada.');
    }

    public function reporte(Request $request)
    {
        $estudiante = $request->input('estudiante');
        $curso = $request->input('curso');
        $estado = $request->input('estado');

        $inscripciones = Inscripcion::with('estudiante', 'curso')
            ->when($estudiante, function ($query, $estudiante) {
                return $query->whereHas('estudiante', function ($q) use ($estudiante) {
                    $q->where('nombre', 'like', "%$estudiante%")
                        ->orWhere('apellido', 'like', "%$estudiante%");
                });
            })
            ->when($curso, function ($query, $curso) {
                return $query->whereHas('curso', function ($q) use ($curso) {
                    $q->where('nombre', 'like', "%$curso%");
                });
            })
            ->when($estado, function ($query, $estado) {
                return $query->where('estado', $estado);
            })
            ->get();

        return view('inscripciones.reporte', compact('inscripciones', 'estudiante', 'curso', 'estado'));
    }
}
