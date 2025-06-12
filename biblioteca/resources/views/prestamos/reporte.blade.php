@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Préstamos</h2>

    <form method="GET" action="{{ route('prestamos.reporte') }}" class="row g-2 mb-4">
        <div class="col-md-3">
            <input type="text" name="libro" class="form-control" placeholder="Título del libro" value="{{ $libro }}">
        </div>
        <div class="col-md-3">
            <input type="text" name="socio" class="form-control" placeholder="Nombre del socio" value="{{ $socio }}">
        </div>
        <div class="col-md-2">
            <select name="estado" class="form-control">
                <option value="">-- Estado --</option>
                @foreach(['activo', 'devuelto', 'atrasado'] as $e)
                <option value="{{ $e }}" {{ $estado == $e ? 'selected' : '' }}>{{ ucfirst($e) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Buscar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('prestamos.reporte') }}" class="btn btn-secondary w-100">Todos</a>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Libro</th>
                <th>Socio</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha de Devolución</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($prestamos as $p)
            <tr>
                <td>{{ $p->libro->titulo }}</td>
                <td>{{ $p->socio->nombre }} {{ $p->socio->apellido }}</td>
                <td>{{ $p->fecha_prestamo }}</td>
                <td>{{ $p->fecha_devolucion }}</td>
                <td>{{ ucfirst($p->estado) }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No se encontraron préstamos.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
