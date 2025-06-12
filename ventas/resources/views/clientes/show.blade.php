@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle del Cliente</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $cliente->nombre }}</li>
        <li class="list-group-item"><strong>Apellido:</strong> {{ $cliente->apellido }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $cliente->email }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $cliente->telefono }}</li>
        <li class="list-group-item"><strong>Dirección:</strong> {{ $cliente->direccion }}</li>
    </ul>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
