@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle del Estudiante</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $estudiante->nombre }}</li>
        <li class="list-group-item"><strong>Apellido:</strong> {{ $estudiante->apellido }}</li>
        <li class="list-group-item"><strong>Fecha Nacimiento:</strong> {{ $estudiante->fecha_nacimiento }}</li>
        <li class="list-group-item"><strong>Dirección:</strong> {{ $estudiante->direccion }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $estudiante->telefono }}</li>
        <li class="list-group-item"><strong>Fecha Registro:</strong> {{ $estudiante->fecha_registro }}</li>
    </ul>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
