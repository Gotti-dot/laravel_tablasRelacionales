@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Reporte de Estudiantes</h2>


    <form method="GET" action="{{ route('estudiantes.reporte') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="cedula" value="{{ $cedula }}" class="form-control" placeholder="Buscar por cédula">
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
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha Nac.</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $e)
            <tr>
                <td>{{ $e->cedula }}</td>
                <td>{{ $e->nombres }}</td>
                <td>{{ $e->apellidos }}</td>
                <td>{{ $e->fecha_nacimiento }}</td>
                <td>{{ $e->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">No se encontraron estudiantes.</div>
    @endif
</div>
@endsection
