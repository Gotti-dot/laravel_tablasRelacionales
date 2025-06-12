@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Libros</h2>
    <a href="{{ route('libros.create') }}" class="btn btn-primary mb-3">Nuevo Libro</a>

    <a href="{{ url('/export/libros/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/libros/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Libro</th>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Editorial</th>
                <th>Año de Publicación</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $l)
            <tr>
                <td>{{ $l->id_libro }}</td>
                <td>{{ $l->titulo }}</td>
                <td>{{ $l->autor }}</td>
                <td>{{ $l->isbn }}</td>
                <td>{{ $l->editorial }}</td>
                <td>{{ $l->anio_publicacion }}</td>
                <td>{{ $l->estado }}</td>
                <td>
                    <a href="{{ route('libros.show', $l->id_libro) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('libros.edit', $l->id_libro) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('libros.destroy', $l->id_libro) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar libro?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
