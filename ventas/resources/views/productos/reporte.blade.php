@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Productos</h2>

    <form method="GET" action="{{ route('productos.reporte') }}" class="row mb-3">
        <div class="col-md-6">
            <input type="text" name="nombre" value="{{ $nombre }}" class="form-control" placeholder="Buscar por nombre de producto">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('productos.reporte') }}" class="btn btn-secondary">Mostrar todos</a>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $p)
            <tr>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->precio }}</td>
                <td>{{ $p->stock }}</td>
                <td>{{ $p->categoria }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No se encontraron productos.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
