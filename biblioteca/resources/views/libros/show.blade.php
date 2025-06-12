@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle del Libro</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID Libro:</strong> {{ $libro->id_libro }}</li>
        <li class="list-group-item"><strong>Título:</strong> {{ $libro->titulo }}</li>
        <li class="list-group-item"><strong>Autor:</strong> {{ $libro->autor }}</li>
        <li class="list-group-item"><strong>ISBN:</strong> {{ $libro->isbn }}</li>
        <li class="list-group-item"><strong>Editorial:</strong> {{ $libro->editorial }}</li>
        <li class="list-group-item"><strong>Año de Publicación:</strong> {{ $libro->anio_publicacion }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $libro->estado }}</li>
    </ul>
    <a href="{{ route('libros.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
