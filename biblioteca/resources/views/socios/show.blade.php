@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle del Socio</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>DNI:</strong> {{ $socio->dni }}</li>
        <li class="list-group-item"><strong>Nombre:</strong> {{ $socio->nombre }}</li>
        <li class="list-group-item"><strong>Apellido:</strong> {{ $socio->apellido }}</li>
        <li class="list-group-item"><strong>Fecha Alta:</strong> {{ $socio->fecha_alta }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $socio->telefono }}</li>
    </ul>
    <a href="{{ route('socios.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
