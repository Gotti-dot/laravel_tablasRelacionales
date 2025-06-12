@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle de Inscripción</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Estudiante:</strong> {{ $inscripcion->estudiante->nombres }} {{ $inscripcion->estudiante->apellidos }}</li>
        <li class="list-group-item"><strong>Curso:</strong> {{ $inscripcion->curso->nombre }}</li>
        <li class="list-group-item"><strong>Fecha:</strong> {{ $inscripcion->fecha_inscripcion }}</li>
        <li class="list-group-item"><strong>Período:</strong> {{ $inscripcion->periodo_academico }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $inscripcion->estado }}</li>
    </ul>
    <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
