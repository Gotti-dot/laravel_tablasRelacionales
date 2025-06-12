@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Estudiantes</h2>

    <form method="GET" action="{{ route('estudiantes.reporte') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="nombre" value="{{ $nombre ?? '' }}" class="form-control" placeholder="Buscar por nombre">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Buscar</button>
            </div>
            <div class="col-md-2">
                <a href="{{ route('estudiantes.reporte') }}" class="btn btn-secondary">Mostrar Todos</a>
            </div>
        </div>
    </form>

    @if(count($estudiantes))
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nac.</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $e)
            <tr>
                <td>{{ $e->nombre }}</td>
                <td>{{ $e->apellido }}</td>
                <td>{{ $e->fecha_nacimiento }}</td>
                <td>{{ $e->direccion }}</td>
                <td>{{ $e->telefono }}</td>
                <td>{{ $e->fecha_registro }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">No se encontraron estudiantes.</div>
    @endif
</div>
@endsection
