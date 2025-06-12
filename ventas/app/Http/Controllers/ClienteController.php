<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

use App\Http\Controllers\ClienteController;

class ClienteController extends Controller
{
    /**
     * Mostrar un listado de clientes.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('nombre')->paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Mostrar el formulario de creación de un cliente.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Almacenar un nuevo cliente.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string',
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente registrado con éxito.');
    }

    /**
     * Mostrar un cliente específico.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Mostrar el formulario de edición de un cliente.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Actualizar la información de un cliente.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'email' => 'required|email|unique:clientes,email,' . $id . ',id_cliente',
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string',
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado.');
    }

    /**
     * Eliminar un cliente.
     */
    public function destroy(string $id)
    {
        Cliente::destroy($id);
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado.');
    }

    // Reporte de clientes
    public function reporte(Request $request)
    {
        $email = $request->input('email');

        if ($email) {
            $clientes = Cliente::where('email', 'like', '%' . $email . '%')->get();
        } else {
            $clientes = Cliente::all();
        }

        return view('clientes.reporte', compact('clientes', 'email'));
    }
}
