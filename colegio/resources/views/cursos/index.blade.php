@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Cursos</h2>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-3">Nuevo Curso</a>

    <a href="{{ url('/export/cursos/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/cursos/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Horas</th>
                <th>Profesor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $c)
            <tr>
                <td>{{ $c->codigo }}</td>
                <td>{{ $c->nombre }}</td>
                <td>{{ $c->horas }}</td>
                <td>{{ $c->profesor }}</td>
                <td>
                    <a href="{{ route('cursos.show', $c->id_curso) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('cursos.edit', $c->id_curso) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('cursos.destroy', $c->id_curso) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar curso?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
