@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Cursos</h2>

    <form method="GET" action="{{ route('cursos.reporte') }}" class="row mb-3">
        <div class="col-md-6">
            <input type="text" name="nombre" value="{{ $nombre }}" class="form-control" placeholder="Buscar por nombre de curso">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('cursos.reporte') }}" class="btn btn-secondary">Mostrar todos</a>
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
            @forelse($cursos as $c)
            <tr>
                <td>{{ $c->codigo }}</td>
                <td>{{ $c->nombre }}</td>
                <td>{{ $c->horas }}</td>
                <td>{{ $c->profesor }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No se encontraron cursos.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
