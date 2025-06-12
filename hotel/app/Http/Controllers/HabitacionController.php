<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

use App\Http\Controllers\HabitacionController;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habitaciones = Habitacion::orderBy('numero')->paginate(10);
        return view('habitaciones.index', compact('habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habitaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|unique:habitaciones',
            'tipo' => 'required|in:individual,doble,suite',
            'precio_noche' => 'required|numeric|min:0',
            'descripcion' => 'required',
            'estado' => 'required|in:disponible,ocupada,mantenimiento',
        ]);

        Habitacion::create($request->all());
        return redirect()->route('habitaciones.index')->with('success', 'Habitación registrada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $habitacion = Habitacion::findOrFail($id);
        return view('habitaciones.show', compact('habitacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $habitacion = Habitacion::findOrFail($id);
        return view('habitaciones.edit', compact('habitacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $habitacion = Habitacion::findOrFail($id);

        $request->validate([
            'numero' => 'required|unique:habitaciones,numero,' . $id . ',id_habitacion',
            'tipo' => 'required|in:individual,doble,suite',
            'precio_noche' => 'required|numeric|min:0',
            'descripcion' => 'required',
            'estado' => 'required|in:disponible,ocupada,mantenimiento',
        ]);

        $habitacion->update($request->all());
        return redirect()->route('habitaciones.index')->with('success', 'Habitación actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Habitacion::destroy($id);
        return redirect()->route('habitaciones.index')->with('success', 'Habitación eliminada.');
    }

    // Reporte
    public function reporte(Request $request)
    {
        $numero = $request->input('numero');

        if ($numero) {
            $habitaciones = Habitacion::where('numero', 'like', '%' . $numero . '%')->get();
        } else {
            $habitaciones = Habitacion::all();
        }

        return view('habitaciones.reporte', compact('habitaciones', 'numero'));
    }
}
