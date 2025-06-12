@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Ventas</h2>

    <form method="GET" action="{{ route('ventas.reporte') }}" class="row g-2 mb-4">
        <div class="col-md-3">
            <input type="text" name="cliente" class="form-control" placeholder="Nombre del cliente" value="{{ $cliente }}">
        </div>
        <div class="col-md-3">
            <input type="text" name="producto" class="form-control" placeholder="Nombre del producto" value="{{ $producto }}">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('ventas.reporte') }}" class="btn btn-secondary w-100">Todos</a>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ventas as $v)
            <tr>
                <td>{{ $v->cliente->nombre }} {{ $v->cliente->apellido }}</td>
                <td>{{ $v->producto->nombre }}</td>
                <td>{{ $v->fecha_venta }}</td>
                <td>{{ $v->cantidad }}</td>
                <td>{{ $v->precio_unitario }}</td>
                <td>{{ $v->total }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No se encontraron ventas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
