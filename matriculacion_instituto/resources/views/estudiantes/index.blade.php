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
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $e)
                <tr>
                    <td>{{ $e->cedula }}</td>
                    <td>{{ $e->nombres }}</td>
                    <td>{{ $e->apellidos }}</td>
                    <td>{{ $e->email }}</td>
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
