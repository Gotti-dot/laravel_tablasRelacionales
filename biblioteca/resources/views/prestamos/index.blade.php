@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Préstamos</h2>
    <a href="{{ route('prestamos.create') }}" class="btn btn-primary mb-3">Nuevo Préstamo</a>

    <a href="{{ url('/export/prestamos/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/prestamos/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Libro</th>
                <th>Socio</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha de Devolución</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestamos as $p)
            <tr>
                <td>{{ $p->libro->titulo }}</td>
                <td>{{ $p->socio->nombre }} {{ $p->socio->apellido }}</td>
                <td>{{ $p->fecha_prestamo }}</td>
                <td>{{ $p->fecha_devolucion }}</td>
                <td>{{ ucfirst($p->estado) }}</td>
                <td>
                    <a href="{{ route('prestamos.show', $p->id_prestamo) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('prestamos.edit', $p->id_prestamo) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('prestamos.destroy', $p->id_prestamo) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar préstamo?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
