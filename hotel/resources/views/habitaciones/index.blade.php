@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Habitaciones</h2>
    <a href="{{ route('habitaciones.create') }}" class="btn btn-primary mb-3">Nueva Habitación</a>

    <a href="{{ url('/export/habitaciones/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/habitaciones/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Número</th>
                <th>Tipo</th>
                <th>Precio por Noche</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($habitaciones as $h)
            <tr>
                <td>{{ $h->numero }}</td>
                <td>{{ ucfirst($h->tipo) }}</td>
                <td>{{ number_format($h->precio_noche, 2) }}</td>
                <td>{{ $h->descripcion }}</td>
                <td>{{ ucfirst($h->estado) }}</td>
                <td>
                    <a href="{{ route('habitaciones.show', $h->id_habitacion) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('habitaciones.edit', $h->id_habitacion) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('habitaciones.destroy', $h->id_habitacion) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar habitación?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
