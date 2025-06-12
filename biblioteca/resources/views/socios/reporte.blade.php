@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Socios</h2>

    <form method="GET" action="{{ route('socios.reporte') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="dni" value="{{ $dni }}" class="form-control" placeholder="Buscar por DNI">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Buscar</button>
            </div>
            <div class="col-md-2">
                <a href="{{ route('socios.reporte') }}" class="btn btn-secondary">Mostrar Todos</a>
            </div>
        </div>
    </form>

    @if(count($socios))
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Fecha Alta</th>
            </tr>
        </thead>
        <tbody>
            @foreach($socios as $s)
            <tr>
                <td>{{ $s->dni }}</td>
                <td>{{ $s->nombre }}</td>
                <td>{{ $s->apellido }}</td>
                <td>{{ $s->telefono }}</td>
                <td>{{ $s->fecha_alta }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">No se encontraron socios.</div>
    @endif
</div>
@endsection
