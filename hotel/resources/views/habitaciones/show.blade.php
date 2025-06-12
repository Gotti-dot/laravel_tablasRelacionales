@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle de la Habitación</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Número:</strong> {{ $habitacion->numero }}</li>
        <li class="list-group-item"><strong>Tipo:</strong> {{ ucfirst($habitacion->tipo) }}</li>
        <li class="list-group-item"><strong>Precio por Noche:</strong> {{ number_format($habitacion->precio_noche, 2) }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $habitacion->descripcion }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ ucfirst($habitacion->estado) }}</li>
    </ul>
    <a href="{{ route('habitaciones.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
