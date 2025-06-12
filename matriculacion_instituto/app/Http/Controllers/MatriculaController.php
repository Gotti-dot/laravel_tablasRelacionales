<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Models\Matricula;
use App\Models\Estudiante;
use App\Models\Materia;




class MatriculaController extends Controller
{
     public function index()
    {
        // $matriculas = Matricula::with('estudiante', 'materia')->get();
        // return view('matriculas.index', compact('matriculas'));
        $matriculas = Matricula::with('estudiante', 'materia')->orderByDesc('fecha_matricula')->paginate(10);
        return view('matriculas.index', compact('matriculas'));
    }



    public function create()
    {
        $estudiantes = Estudiante::all();
        $materias = Materia::all();
        return view('matriculas.create', compact('estudiantes', 'materias'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_estudiante' => 'required|exists:estudiantes,id_estudiante',
            'id_materia' => 'required|exists:materias,id_materia',
            'fecha_matricula' => 'required|date',
            'periodo_academico' => 'required',
            'estado' => 'required|in:Activa,Cancelada,Finalizada',
        ]);


        Matricula::create($request->all());
        return redirect()->route('matriculas.index')->with('success', 'Matrícula registrada con éxito.');
    }


    public function show($id)
    {
        $matricula = Matricula::with('estudiante', 'materia')->findOrFail($id);
        return view('matriculas.show', compact('matricula'));
    }


    public function edit($id)
    {
        $matricula = Matricula::findOrFail($id);
        $estudiantes = Estudiante::all();
        $materias = Materia::all();
        return view('matriculas.edit', compact('matricula', 'estudiantes', 'materias'));
    }


    public function update(Request $request, $id)
    {
        $matricula = Matricula::findOrFail($id);


        $request->validate([
            'id_estudiante' => 'required|exists:estudiantes,id_estudiante',
            'id_materia' => 'required|exists:materias,id_materia',
            'fecha_matricula' => 'required|date',
            'periodo_academico' => 'required',
            'estado' => 'required|in:Activa,Cancelada,Finalizada',
        ]);


        $matricula->update($request->all());
        return redirect()->route('matriculas.index')->with('success', 'Matrícula actualizada.');
    }


    public function destroy($id)
    {
        Matricula::destroy($id);
        return redirect()->route('matriculas.index')->with('success', 'Matrícula eliminada.');
    }


    
     public function reporte(Request $request)
    {
        $estudiante = $request->input('estudiante');
        $materia = $request->input('materia');
        $estado = $request->input('estado');


        $matriculas = Matricula::with('estudiante', 'materia')
            ->when($estudiante, function ($query, $estudiante) {
                return $query->whereHas('estudiante', function ($q) use ($estudiante) {
                    $q->where('nombres', 'like', "%$estudiante%")
                        ->orWhere('apellidos', 'like', "%$estudiante%");
                });
            })
            ->when($materia, function ($query, $materia) {
                return $query->whereHas('materia', function ($q) use ($materia) {
                    $q->where('nombre', 'like', "%$materia%");
                });
            })
            ->when($estado, function ($query, $estado) {
                return $query->where('estado', $estado);
            })
            ->get();


        return view('matriculas.reporte', compact('matriculas', 'estudiante', 'materia', 'estado'));
    }

}
