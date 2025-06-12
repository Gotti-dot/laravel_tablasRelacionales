<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Huesped;
use App\Models\Habitacion;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('huesped', 'habitacion')->orderByDesc('fecha_entrada')->paginate(10);
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $huespedes = Huesped::all();
        $habitaciones = Habitacion::all();
        return view('reservas.create', compact('huespedes', 'habitaciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_huesped' => 'required|exists:huespedes,id_huesped',
            'id_habitacion' => 'required|exists:habitaciones,id_habitacion',
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'required|date|after_or_equal:fecha_entrada',
            'estado' => 'required|in:confirmada,cancelada,finalizada',
            'total' => 'required|numeric|min:0',
        ]);

        Reserva::create($request->all());
        return redirect()->route('reservas.index')->with('success', 'Reserva registrada con éxito.');
    }

    public function show($id)
    {
        $reserva = Reserva::with('huesped', 'habitacion')->findOrFail($id);
        return view('reservas.show', compact('reserva'));
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        $huespedes = Huesped::all();
        $habitaciones = Habitacion::all();
        return view('reservas.edit', compact('reserva', 'huespedes', 'habitaciones'));
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);

        $request->validate([
            'id_huesped' => 'required|exists:huespedes,id_huesped',
            'id_habitacion' => 'required|exists:habitaciones,id_habitacion',
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'required|date|after_or_equal:fecha_entrada',
            'estado' => 'required|in:confirmada,cancelada,finalizada',
            'total' => 'required|numeric|min:0',
        ]);

        $reserva->update($request->all());
        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada.');
    }

    public function destroy($id)
    {
        Reserva::destroy($id);
        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada.');
    }

    public function reporte(Request $request)
    {
        $huesped = $request->input('huesped');
        $habitacion = $request->input('habitacion');
        $estado = $request->input('estado');

        $reservas = Reserva::with('huesped', 'habitacion')
            ->when($huesped, function ($query, $huesped) {
                return $query->whereHas('huesped', function ($q) use ($huesped) {
                    $q->where('nombre', 'like', "%$huesped%")
                        ->orWhere('apellido', 'like', "%$huesped%");
                });
            })
            ->when($habitacion, function ($query, $habitacion) {
                return $query->whereHas('habitacion', function ($q) use ($habitacion) {
                    $q->where('numero', 'like', "%$habitacion%");
                });
            })
            ->when($estado, function ($query, $estado) {
                return $query->where('estado', $estado);
            })
            ->get();

        return view('reservas.reporte', compact('reservas', 'huesped', 'habitacion', 'estado'));
    }
}
