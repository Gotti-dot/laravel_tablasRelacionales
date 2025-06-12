@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Clientes</h2>

    <form method="GET" action="{{ route('clientes.reporte') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="email" value="{{ $email }}" class="form-control" placeholder="Buscar por email">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Buscar</button>
            </div>
            <div class="col-md-2">
                <a href="{{ route('clientes.reporte') }}" class="btn btn-secondary">Mostrar Todos</a>
            </div>
        </div>
    </form>

    @if(count($clientes))
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $c)
            <tr>
                <td>{{ $c->nombre }}</td>
                <td>{{ $c->apellido }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->telefono }}</td>
                <td>{{ $c->direccion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">No se encontraron clientes.</div>
    @endif
</div>
@endsection
