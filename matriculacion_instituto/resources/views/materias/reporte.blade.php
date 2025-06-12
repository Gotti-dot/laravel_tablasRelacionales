@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Reporte de Materias</h2>


    <form method="GET" action="{{ route('materias.reporte') }}" class="row mb-3">
        <div class="col-md-6">
            <input type="text" name="nombre" value="{{ $nombre }}" class="form-control" placeholder="Buscar por nombre de materia">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('materias.reporte') }}" class="btn btn-secondary">Mostrar todos</a>
        </div>
    </form>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Horas</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            @forelse($materias as $m)
            <tr>
                <td>{{ $m->codigo }}</td>
                <td>{{ $m->nombre }}</td>
                <td>{{ $m->horas }}</td>
                <td>{{ $m->profesor }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No se encontraron materias.</td>
            </tr>
            
            @endforelse
        </tbody>
    </table>
</div>
@endsection
