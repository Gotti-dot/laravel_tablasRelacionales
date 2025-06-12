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


        <!-- Materias -->
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Materias</h5>
                    <p class="card-text fs-3">{{ $totalMaterias }}</p>
                    <a href="{{ route('materias.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>


        <!-- Matrículas -->
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Matrículas</h5>
                    <p class="card-text fs-3">{{ $totalMatriculas }}</p>
                    <a href="{{ route('matriculas.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
