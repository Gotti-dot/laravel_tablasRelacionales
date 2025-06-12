@extends('layouts.app')
 
@section('content')
<div class="container">
    <h2>Detalle del Huésped</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Documento:</strong> {{ $huesped->documento }}</li>
        <li class="list-group-item"><strong>Nombre:</strong> {{ $huesped->nombre }}</li>
        <li class="list-group-item"><strong>Apellido:</strong> {{ $huesped->apellido }}</li>
        <li class="list-group-item"><strong>Nacionalidad:</strong> {{ $huesped->nacionalidad }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $huesped->telefono }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $huesped->email }}</li>
    </ul>
    <a href="{{ route('huespedes.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
