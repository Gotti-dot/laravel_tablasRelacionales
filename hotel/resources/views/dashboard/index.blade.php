@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Panel Principal</h1>

    <div class="row">
        <!-- Huéspedes -->
        <div class="col-md-4">
            <div class="card text-white bg-success shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Huéspedes</h5>
                    <p class="card-text fs-3">{{ $totalHuespedes }}</p>
                    <a href="{{ route('huespedes.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Habitaciones -->
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Habitaciones</h5>
                    <p class="card-text fs-3">{{ $totalHabitaciones }}</p>
                    <a href="{{ route('habitaciones.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Reservas -->
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Reservas</h5>
                    <p class="card-text fs-3">{{ $totalReservas }}</p>
                    <a href="{{ route('reservas.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
