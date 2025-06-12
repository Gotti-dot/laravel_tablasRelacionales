@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Reporte de Matrículas</h2>


    <form method="GET" action="{{ route('matriculas.reporte') }}" class="row g-2 mb-4">
        <div class="col-md-3">
            <input type="text" name="estudiante" class="form-control" placeholder="Nombre del estudiante" value="{{ $estudiante }}">
        </div>
        <div class="col-md-3">
            <input type="text" name="materia" class="form-control" placeholder="Nombre de la materia" value="{{ $materia }}">
        </div>
        <div class="col-md-2">
            <select name="estado" class="form-control">
                <option value="">-- Estado --</option>
                @foreach(['Activa', 'Cancelada', 'Finalizada'] as $e)
                <option value="{{ $e }}" {{ $estado == $e ? 'selected' : '' }}>{{ $e }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('matriculas.reporte') }}" class="btn btn-secondary w-100">Todos</a>
        </div>
    </form>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Fecha</th>
                <th>Período</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($matriculas as $m)
            <tr>
                <td>{{ $m->estudiante->nombres }} {{ $m->estudiante->apellidos }}</td>
                <td>{{ $m->materia->nombre }}</td>
                <td>{{ $m->fecha_matricula }}</td>
                <td>{{ $m->periodo_academico }}</td>
                <td>{{ $m->estado }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No se encontraron matrículas.</td>
            </tr>
            
            @endforelse
        </tbody>
    </table>
</div>
@endsection
