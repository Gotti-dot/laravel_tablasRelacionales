@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Panel Principal</h1>

    <div class="row">
        <!-- Estudiantes -->
        <div class="col-md-4">
            <div class="card text-white bg-success shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Estudiantes</h5>
                    <p class="card-text fs-3">{{ $totalEstudiantes }}</p>
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Cursos -->
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Cursos</h5>
                    <p class="card-text fs-3">{{ $totalCursos }}</p>
                    <a href="{{ route('cursos.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Inscripciones -->
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Inscripciones</h5>
                    <p class="card-text fs-3">{{ $totalInscripciones }}</p>
                    <a href="{{ route('inscripciones.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
