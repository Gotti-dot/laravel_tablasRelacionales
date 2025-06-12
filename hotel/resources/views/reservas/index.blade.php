@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Reservas</h2>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary mb-3">Nueva Reserva</a>

    <a href="{{ url('/export/reservas/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/reservas/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Huésped</th>
                <th>Habitación</th>
                <th>Fecha Entrada</th>
                <th>Fecha Salida</th>
                <th>Estado</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $r)
            <tr>
                <td>{{ $r->huesped->nombre }} {{ $r->huesped->apellido }}</td>
                <td>{{ $r->habitacion->numero }} ({{ ucfirst($r->habitacion->tipo) }})</td>
                <td>{{ $r->fecha_entrada }}</td>
                <td>{{ $r->fecha_salida }}</td>
                <td>{{ ucfirst($r->estado) }}</td>
                <td>{{ number_format($r->total, 2) }}</td>
                <td>
                    <a href="{{ route('reservas.show', $r->id_reserva) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('reservas.edit', $r->id_reserva) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('reservas.destroy', $r->id_reserva) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar reserva?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
