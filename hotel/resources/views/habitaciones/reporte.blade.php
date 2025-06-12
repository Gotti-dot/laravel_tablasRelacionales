@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Habitaciones</h2>

    <form method="GET" action="{{ route('habitaciones.reporte') }}" class="row mb-3">
        <div class="col-md-6">
            <input type="text" name="numero" value="{{ $numero }}" class="form-control" placeholder="Buscar por número de habitación">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('habitaciones.reporte') }}" class="btn btn-secondary">Mostrar todos</a>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Número</th>
                <th>Tipo</th>
                <th>Precio por Noche</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($habitaciones as $h)
            <tr>
                <td>{{ $h->numero }}</td>
                <td>{{ ucfirst($h->tipo) }}</td>
                <td>{{ number_format($h->precio_noche, 2) }}</td>
                <td>{{ $h->descripcion }}</td>
                <td>{{ ucfirst($h->estado) }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No se encontraron habitaciones.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
