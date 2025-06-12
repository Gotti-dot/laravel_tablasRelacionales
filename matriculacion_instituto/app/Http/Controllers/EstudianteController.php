<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

use App\Http\Controllers\EstudianteController;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $estudiantes = Estudiante::all();
        // return view('estudiantes.index', compact('estudiantes'));
        $estudiantes = Estudiante::orderBy('nombres')->paginate(10);
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
        	'cedula' => 'required|unique:estudiantes',
        	'nombres' => 'required',
        	'apellidos' => 'required',
        	'fecha_nacimiento' => 'required|date',
    	]);
 
        Estudiante::create($request->all());
    	return redirect()->route('estudiantes.index')->with('success', 'Estudiante registrado con éxito.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
 
    	$request->validate([
        	'cedula' => 'required|unique:estudiantes,cedula,' . $id . ',id_estudiante',
        	'nombres' => 'required',
        	'apellidos' => 'required',
        	'fecha_nacimiento' => 'required|date',
    	]);
 
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Estudiante::destroy($id);
    	return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado.');

    }

 //Reporte
    public function reporte(Request $request)
    {
        $cedula = $request->input('cedula');


        if ($cedula) {
            $estudiantes = Estudiante::where('cedula', 'like', '%' . $cedula . '%')->get();
        } else {
            $estudiantes = Estudiante::all();
        }


        return view('estudiantes.reporte', compact('estudiantes', 'cedula'));
    }

}
