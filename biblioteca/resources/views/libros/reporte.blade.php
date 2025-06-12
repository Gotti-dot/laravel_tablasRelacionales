@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Libros</h2>

    <form method="GET" action="{{ route('libros.reporte') }}" class="row mb-3">
        <div class="col-md-6">
            <input type="text" name="titulo" value="{{ $titulo }}" class="form-control" placeholder="Buscar por título de libro">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('libros.reporte') }}" class="btn btn-secondary">Mostrar todos</a>
        </div>
    </form>

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
            </tr>
        </thead>
        <tbody>
            @forelse($libros as $l)
            <tr>
                <td>{{ $l->id_libro }}</td>
                <td>{{ $l->titulo }}</td>
                <td>{{ $l->autor }}</td>
                <td>{{ $l->isbn }}</td>
                <td>{{ $l->editorial }}</td>
                <td>{{ $l->anio_publicacion }}</td>
                <td>{{ $l->estado }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No se encontraron libros.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
