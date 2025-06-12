<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('nombre')->paginate(10);
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:cursos|max:20',
            'nombre' => 'required|max:100',
            'descripcion' => 'nullable|string',
            'horas' => 'required|integer|min:1',
            'profesor' => 'required|max:100',
        ]);

        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso registrado con éxito.');
    }

    public function show($id_curso)
    {
        $curso = Curso::findOrFail($id_curso);
        return view('cursos.show', compact('curso'));
    }

    public function edit($id_curso)
    {
        $curso = Curso::findOrFail($id_curso);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id_curso)
    {
        $curso = Curso::findOrFail($id_curso);

        $request->validate([
            'codigo' => 'required|unique:cursos,codigo,' . $id_curso . ',id_curso|max:20',
            'nombre' => 'required|max:100',
            'descripcion' => 'nullable|string',
            'horas' => 'required|integer|min:1',
            'profesor' => 'required|max:100',
        ]);

        $curso->update($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso actualizado.');
    }

    public function destroy($id_curso)
    {
        Curso::destroy($id_curso);
        return redirect()->route('cursos.index')->with('success', 'Curso eliminado.');
    }

    public function reporte(Request $request)
    {
        $nombre = $request->input('nombre');

        $cursos = Curso::when($nombre, function ($query, $nombre) {
            return $query->where('nombre', 'like', '%' . $nombre . '%');
        })->get();

        return view('cursos.reporte', compact('cursos', 'nombre'));
    }
}
