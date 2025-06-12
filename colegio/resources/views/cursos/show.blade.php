@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle del Curso</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Código:</strong> {{ $curso->codigo }}</li>
        <li class="list-group-item"><strong>Nombre:</strong> {{ $curso->nombre }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $curso->descripcion }}</li>
        <li class="list-group-item"><strong>Horas:</strong> {{ $curso->horas }}</li>
        <li class="list-group-item"><strong>Profesor:</strong> {{ $curso->profesor }}</li>
    </ul>
    <a href="{{ route('cursos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
