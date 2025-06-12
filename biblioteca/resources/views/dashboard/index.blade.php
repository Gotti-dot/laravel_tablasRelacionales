@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Panel Principal</h1>

    <div class="row">
        <!-- Socios -->
        <div class="col-md-4">
            <div class="card text-white bg-success shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Socios</h5>
                    <p class="card-text fs-3">{{ $totalSocios }}</p>
                    <a href="{{ route('socios.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Libros -->
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Libros</h5>
                    <p class="card-text fs-3">{{ $totalLibros }}</p>
                    <a href="{{ route('libros.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Préstamos -->
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Préstamos</h5>
                    <p class="card-text fs-3">{{ $totalPrestamos }}</p>
                    <a href="{{ route('prestamos.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
