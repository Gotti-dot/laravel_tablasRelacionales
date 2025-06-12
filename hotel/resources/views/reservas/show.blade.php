@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle de Reserva</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Huésped:</strong> {{ $reserva->huesped->nombre }} {{ $reserva->huesped->apellido }}</li>
        <li class="list-group-item"><strong>Habitación:</strong> {{ $reserva->habitacion->numero }} ({{ ucfirst($reserva->habitacion->tipo) }})</li>
        <li class="list-group-item"><strong>Fecha Entrada:</strong> {{ $reserva->fecha_entrada }}</li>
        <li class="list-group-item"><strong>Fecha Salida:</strong> {{ $reserva->fecha_salida }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ ucfirst($reserva->estado) }}</li>
        <li class="list-group-item"><strong>Total:</strong> {{ number_format($reserva->total, 2) }}</li>
    </ul>
    <a href="{{ route('reservas.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
