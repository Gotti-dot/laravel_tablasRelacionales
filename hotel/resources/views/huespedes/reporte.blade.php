@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Huéspedes</h2>

    <form method="GET" action="{{ route('huespedes.reporte') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="documento" value="{{ $documento }}" class="form-control" placeholder="Buscar por documento">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Buscar</button>
            </div>
            <div class="col-md-2">
                <a href="{{ route('huespedes.reporte') }}" class="btn btn-secondary">Mostrar Todos</a>
            </div>
        </div>
    </form>

    @if(count($huespedes))
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacionalidad</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($huespedes as $h)
            <tr>
                <td>{{ $h->documento }}</td>
                <td>{{ $h->nombre }}</td>
                <td>{{ $h->apellido }}</td>
                <td>{{ $h->nacionalidad }}</td>
                <td>{{ $h->telefono }}</td>
                <td>{{ $h->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">No se encontraron huéspedes.</div>
    @endif
</div>
@endsection
