@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle de Préstamo</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Libro:</strong> {{ $prestamo->libro->titulo }}</li>
        <li class="list-group-item"><strong>Socio:</strong> {{ $prestamo->socio->nombre }} {{ $prestamo->socio->apellido }}</li>
        <li class="list-group-item"><strong>Fecha de Préstamo:</strong> {{ $prestamo->fecha_prestamo }}</li>
        <li class="list-group-item"><strong>Fecha de Devolución:</strong> {{ $prestamo->fecha_devolucion }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ ucfirst($prestamo->estado) }}</li>
    </ul>
    <a href="{{ route('prestamos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
