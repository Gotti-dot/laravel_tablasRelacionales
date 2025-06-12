@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Lista de Materias</h2>
    <a href="{{ route('materias.create') }}" class="btn btn-primary mb-3">Nueva Materia</a>

    <a href="{{ url('/export/materias/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/materias/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

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
            @foreach($materias as $m)
            <tr>
                <td>{{ $m->codigo }}</td>
                <td>{{ $m->nombre }}</td>
                <td>{{ $m->horas }}</td>
                <td>{{ $m->profesor }}</td>
                <td>
                    <a href="{{ route('materias.show', $m->id_materia) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('materias.edit', $m->id_materia) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('materias.destroy', $m->id_materia) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar materia?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
