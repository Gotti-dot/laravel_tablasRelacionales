<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::orderBy('titulo')->paginate(10);
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|unique:libros',
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'required',
            'anio_publicacion' => 'required|integer|min:1000|max:' . date('Y'),
            'estado' => 'required|in:disponible,prestado,reparacion',
        ]);

        Libro::create($request->all());
        return redirect()->route('libros.index')->with('success', 'Libro registrado con éxito.');
    }

    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);

        $request->validate([
            'isbn' => 'required|unique:libros,isbn,' . $id . ',id_libro',
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'required',
            'anio_publicacion' => 'required|integer|min:1000|max:' . date('Y'),
            'estado' => 'required|in:disponible,prestado,reparacion',
        ]);

        $libro->update($request->all());
        return redirect()->route('libros.index')->with('success', 'Libro actualizado.');
    }

    public function destroy($id)
    {
        Libro::destroy($id);
        return redirect()->route('libros.index')->with('success', 'Libro eliminado.');
    }

    public function reporte(Request $request)
    {
        $titulo = $request->input('titulo');

        $libros = Libro::when($titulo, function ($query, $titulo) {
            return $query->where('titulo', 'like', '%' . $titulo . '%');
        })->get();

        return view('libros.reporte', compact('libros', 'titulo'));
    }
}
