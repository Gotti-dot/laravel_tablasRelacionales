<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente', 'producto')->orderByDesc('fecha_venta')->paginate(10);
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('ventas.create', compact('clientes', 'productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'id_producto' => 'required|exists:productos,id_producto',
            'fecha_venta' => 'required|date',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
        ]);

        Venta::create($request->all());
        return redirect()->route('ventas.index')->with('success', 'Venta registrada con éxito.');
    }

    public function show($id)
    {
        $venta = Venta::with('cliente', 'producto')->findOrFail($id);
        return view('ventas.show', compact('venta'));
    }

    public function edit($id)
    {
        $venta = Venta::findOrFail($id);
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('ventas.edit', compact('venta', 'clientes', 'productos'));
    }

    public function update(Request $request, $id)
    {
        $venta = Venta::findOrFail($id);

        $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'id_producto' => 'required|exists:productos,id_producto',
            'fecha_venta' => 'required|date',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
        ]);

        $venta->update($request->all());
        return redirect()->route('ventas.index')->with('success', 'Venta actualizada.');
    }

    public function destroy($id)
    {
        Venta::destroy($id);
        return redirect()->route('ventas.index')->with('success', 'Venta eliminada.');
    }

    public function reporte(Request $request)
    {
        $cliente = $request->input('cliente');
        $producto = $request->input('producto');
        $fecha = $request->input('fecha_venta');

        $ventas = Venta::with('cliente', 'producto')
            ->when($cliente, function ($query, $cliente) {
                return $query->whereHas('cliente', function ($q) use ($cliente) {
                    $q->where('nombre', 'like', "%$cliente%")
                      ->orWhere('apellido', 'like', "%$cliente%");
                });
            })
            ->when($producto, function ($query, $producto) {
                return $query->whereHas('producto', function ($q) use ($producto) {
                    $q->where('nombre', 'like', "%$producto%");
                });
            })
            ->when($fecha, function ($query, $fecha) {
                return $query->whereDate('fecha_venta', $fecha);
            })
            ->get();

        return view('ventas.reporte', compact('ventas', 'cliente', 'producto', 'fecha'));
    }
}
