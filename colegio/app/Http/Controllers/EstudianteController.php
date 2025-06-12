<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::orderBy('nombre')->paginate(10);
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string|max:15',
        ]);

        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_estudiante)
    {
        $estudiante = Estudiante::findOrFail($id_estudiante);
        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_estudiante)
    {
        $estudiante = Estudiante::findOrFail($id_estudiante);
        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_estudiante)
    {
        $estudiante = Estudiante::findOrFail($id_estudiante);

        $request->validate([
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string|max:15',
        ]);

        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_estudiante)
    {
        Estudiante::destroy($id_estudiante);
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado.');
    }

    // Reporte
    public function reporte(Request $request)
    {
        $nombre = $request->input('nombre');

        if ($nombre) {
            $estudiantes = Estudiante::where('nombre', 'like', '%' . $nombre . '%')
                ->orWhere('apellido', 'like', '%' . $nombre . '%')
                ->get();
        } else {
            $estudiantes = Estudiante::all();
        }

        return view('estudiantes.reporte', compact('estudiantes', 'nombre'));
    }
}

