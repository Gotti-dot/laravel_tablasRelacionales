@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Inscripciones</h2>

    <form method="GET" action="{{ route('inscripciones.reporte') }}" class="row g-2 mb-4">
        <div class="col-md-3">
            <input type="text" name="estudiante" class="form-control" placeholder="Nombre del estudiante" value="{{ $estudiante }}">
        </div>
        <div class="col-md-3">
            <input type="text" name="curso" class="form-control" placeholder="Nombre del curso" value="{{ $curso }}">
        </div>
        <div class="col-md-2">
            <select name="estado" class="form-control">
                <option value="">-- Estado --</option>
                @foreach(['Activa', 'Cancelada'] as $e)
                <option value="{{ $e }}" {{ $estado == $e ? 'selected' : '' }}>{{ $e }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('inscripciones.reporte') }}" class="btn btn-secondary w-100">Todos</a>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Fecha</th>
                <th>Período</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($inscripciones as $i)
            <tr>
                <td>{{ $i->estudiante->nombres }} {{ $i->estudiante->apellidos }}</td>
                <td>{{ $i->curso->nombre }}</td>
                <td>{{ $i->fecha_inscripcion }}</td>
                <td>{{ $i->periodo_academico }}</td>
                <td>{{ $i->estado }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No se encontraron inscripciones.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
