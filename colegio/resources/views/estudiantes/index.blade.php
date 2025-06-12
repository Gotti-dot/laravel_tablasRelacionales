@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Estudiantes</h2>
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">Nuevo Estudiante</a>

    <a href="{{ url('/export/estudiantes/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/estudiantes/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $e)
                <tr>
                    <td>{{ $e->nombre }}</td>
                    <td>{{ $e->apellido }}</td>
                    <td>{{ $e->fecha_nacimiento }}</td>
                    <td>{{ $e->direccion }}</td>
                    <td>{{ $e->telefono }}</td>
                    <td>{{ $e->fecha_registro }}</td>
                    <td>
                        <a href="{{ route('estudiantes.show', $e->id_estudiante) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('estudiantes.edit', $e->id_estudiante) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $e->id_estudiante) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('¿Eliminar estudiante?')" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
