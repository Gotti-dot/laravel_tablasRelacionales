@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Reservas</h2>

    <form method="GET" action="{{ route('reservas.reporte') }}" class="row g-2 mb-4">
        <div class="col-md-3">
            <input type="text" name="huesped" class="form-control" placeholder="Nombre del huésped" value="{{ $huesped }}">
        </div>
        <div class="col-md-3">
            <input type="text" name="habitacion" class="form-control" placeholder="Número de la habitación" value="{{ $habitacion }}">
        </div>
        <div class="col-md-2">
            <select name="estado" class="form-control">
                <option value="">-- Estado --</option>
                @foreach(['confirmada', 'cancelada', 'finalizada'] as $e)
                <option value="{{ $e }}" {{ $estado == $e ? 'selected' : '' }}>{{ ucfirst($e) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('reservas.reporte') }}" class="btn btn-secondary w-100">Todos</a>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Huésped</th>
                <th>Habitación</th>
                <th>Fecha Entrada</th>
                <th>Fecha Salida</th>
                <th>Estado</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reservas as $r)
            <tr>
                <td>{{ $r->huesped->nombre }} {{ $r->huesped->apellido }}</td>
                <td>{{ $r->habitacion->numero }} ({{ ucfirst($r->habitacion->tipo) }})</td>
                <td>{{ $r->fecha_entrada }}</td>
                <td>{{ $r->fecha_salida }}</td>
                <td>{{ ucfirst($r->estado) }}</td>
                <td>{{ number_format($r->total, 2) }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No se encontraron reservas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
