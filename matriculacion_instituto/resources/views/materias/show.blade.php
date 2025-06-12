@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Detalle de la Materia</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Código:</strong> {{ $materia->codigo }}</li>
        <li class="list-group-item"><strong>Nombre:</strong> {{ $materia->nombre }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $materia->descripcion }}</li>
        <li class="list-group-item"><strong>Horas:</strong> {{ $materia->horas }}</li>
        <li class="list-group-item"><strong>Profesor:</strong> {{ $materia->profesor }}</li>
    </ul>
    <a href="{{ route('materias.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
