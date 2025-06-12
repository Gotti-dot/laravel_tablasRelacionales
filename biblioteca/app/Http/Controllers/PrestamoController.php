<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Socio;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::with('libro', 'socio')->orderByDesc('fecha_prestamo')->paginate(10);
        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        $libros = Libro::all();
        $socios = Socio::all();
        return view('prestamos.create', compact('libros', 'socios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_libro' => 'required|exists:libros,id_libro',
            'id_socio' => 'required|exists:socios,id_socio',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after_or_equal:fecha_prestamo',
            'estado' => 'required|in:activo,devuelto,atrasado',
        ]);

        Prestamo::create($request->all());
        return redirect()->route('prestamos.index')->with('success', 'Préstamo registrado con éxito.');
    }

    public function show($id)
    {
        $prestamo = Prestamo::with('libro', 'socio')->findOrFail($id);
        return view('prestamos.show', compact('prestamo'));
    }

    public function edit($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $libros = Libro::all();
        $socios = Socio::all();
        return view('prestamos.edit', compact('prestamo', 'libros', 'socios'));
    }

    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::findOrFail($id);

        $request->validate([
            'id_libro' => 'required|exists:libros,id_libro',
            'id_socio' => 'required|exists:socios,id_socio',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after_or_equal:fecha_prestamo',
            'estado' => 'required|in:activo,devuelto,atrasado',
        ]);

        $prestamo->update($request->all());
        return redirect()->route('prestamos.index')->with('success', 'Préstamo actualizado.');
    }

    public function destroy($id)
    {
        Prestamo::destroy($id);
        return redirect()->route('prestamos.index')->with('success', 'Préstamo eliminado.');
    }

    public function reporte(Request $request)
    {
        $libro = $request->input('libro');
        $socio = $request->input('socio');
        $estado = $request->input('estado');

        $prestamos = Prestamo::with('libro', 'socio')
            ->when($libro, function ($query, $libro) {
                return $query->whereHas('libro', function ($q) use ($libro) {
                    $q->where('titulo', 'like', "%$libro%");
                });
            })
            ->when($socio, function ($query, $socio) {
                return $query->whereHas('socio', function ($q) use ($socio) {
                    $q->where('nombre', 'like', "%$socio%")
                        ->orWhere('apellido', 'like', "%$socio%");
                });
            })
            ->when($estado, function ($query, $estado) {
                return $query->where('estado', $estado);
            })
            ->get();

        return view('prestamos.reporte', compact('prestamos', 'libro', 'socio', 'estado'));
    }
}
