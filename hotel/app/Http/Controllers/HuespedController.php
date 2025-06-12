<?php

namespace App\Http\Controllers;

use App\Models\Huesped;
use Illuminate\Http\Request;

use App\Http\Controllers\HuespedController;

class HuespedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $huespedes = Huesped::orderBy('nombre')->paginate(10);
        return view('huespedes.index', compact('huespedes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('huespedes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'documento' => 'required|unique:huespedes',
            'nombre' => 'required',
            'apellido' => 'required',
            'nacionalidad' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
        ]);

        Huesped::create($request->all());
        return redirect()->route('huespedes.index')->with('success', 'Huésped registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $huesped = Huesped::findOrFail($id);
        return view('huespedes.show', compact('huesped'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $huesped = Huesped::findOrFail($id);
        return view('huespedes.edit', compact('huesped'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $huesped = Huesped::findOrFail($id);

        $request->validate([
            'documento' => 'required|unique:huespedes,documento,' . $id . ',id_huesped',
            'nombre' => 'required',
            'apellido' => 'required',
            'nacionalidad' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
        ]);

        $huesped->update($request->all());
        return redirect()->route('huespedes.index')->with('success', 'Huésped actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Huesped::destroy($id);
        return redirect()->route('huespedes.index')->with('success', 'Huésped eliminado.');
    }

    // Reporte
    public function reporte(Request $request)
    {
        $documento = $request->input('documento');

        if ($documento) {
            $huespedes = Huesped::where('documento', 'like', '%' . $documento . '%')->get();
        } else {
            $huespedes = Huesped::all();
        }

        return view('huespedes.reporte', compact('huespedes', 'documento'));
    }
}
