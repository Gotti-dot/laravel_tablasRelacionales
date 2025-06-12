@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Productos</h2>
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Nuevo Producto</a>

    <a href="{{ url('/export/productos/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/productos/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $p)
            <tr>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->precio }}</td>
                <td>{{ $p->stock }}</td>
                <td>{{ $p->categoria }}</td>
                <td>
                    <a href="{{ route('productos.show', $p->id_producto) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('productos.edit', $p->id_producto) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('productos.destroy', $p->id_producto) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar producto?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
