@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Detalle de Matrícula</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Estudiante:</strong> {{ $matricula->estudiante->nombres }} {{ $matricula->estudiante->apellidos }}</li>
        <li class="list-group-item"><strong>Materia:</strong> {{ $matricula->materia->nombre }}</li>
        <li class="list-group-item"><strong>Fecha:</strong> {{ $matricula->fecha_matricula }}</li>
        <li class="list-group-item"><strong>Período:</strong> {{ $matricula->periodo_academico }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $matricula->estado }}</li>
    </ul>
    <a href="{{ route('matriculas.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
