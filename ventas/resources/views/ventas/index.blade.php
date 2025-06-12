@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Ventas</h2>
    <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">Nueva Venta</a>

    <a href="{{ url('/export/ventas/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/ventas/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $v)
            <tr>
                <td>{{ $v->cliente->nombre }} {{ $v->cliente->apellido }}</td>
                <td>{{ $v->producto->nombre }}</td>
                <td>{{ $v->fecha_venta }}</td>
                <td>{{ $v->cantidad }}</td>
                <td>{{ $v->precio_unitario }}</td>
                <td>{{ $v->total }}</td>
                <td>
                    <a href="{{ route('ventas.show', $v->id_venta) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('ventas.edit', $v->id_venta) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('ventas.destroy', $v->id_venta) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar venta?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
