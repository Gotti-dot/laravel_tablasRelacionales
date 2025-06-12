<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;



class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = Socio::orderBy('nombre')->paginate(10);
        return view('socios.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('socios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|unique:socios',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'fecha_alta' => 'required|date',
        ]);

        Socio::create($request->all());
        return redirect()->route('socios.index')->with('success', 'Socio registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $socio = Socio::findOrFail($id);
        return view('socios.show', compact('socio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $socio = Socio::findOrFail($id);
        return view('socios.edit', compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $socio = Socio::findOrFail($id);

        $request->validate([
            'dni' => 'required|unique:socios,dni,' . $id . ',id_socio',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'fecha_alta' => 'required|date',
        ]);

        $socio->update($request->all());
        return redirect()->route('socios.index')->with('success', 'Socio actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Socio::destroy($id);
        return redirect()->route('socios.index')->with('success', 'Socio eliminado.');
    }

    // Reporte
    public function reporte(Request $request)
    {
        $dni = $request->input('dni');

        if ($dni) {
            $socios = Socio::where('dni', 'like', '%' . $dni . '%')->get();
        } else {
            $socios = Socio::all();
        }

        return view('socios.reporte', compact('socios', 'dni'));
    }
}
