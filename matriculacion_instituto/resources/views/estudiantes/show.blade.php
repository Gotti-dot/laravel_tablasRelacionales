@extends('layouts.app')
 
@section('content')
<div class="container">
    <h2>Detalle del Estudiante</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Cédula:</strong> {{ $estudiante->cedula }}</li>
        <li class="list-group-item"><strong>Nombres:</strong> {{ $estudiante->nombres }}</li>
        <li class="list-group-item"><strong>Apellidos:</strong> {{ $estudiante->apellidos }}</li>
        <li class="list-group-item"><strong>Fecha Nacimiento:</strong> {{ $estudiante->fecha_nacimiento }}</li>
        <li class="list-group-item"><strong>Dirección:</strong> {{ $estudiante->direccion }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $estudiante->telefono }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $estudiante->email }}</li>
    </ul>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
