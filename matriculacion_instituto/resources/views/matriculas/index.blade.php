@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Lista de Matrículas</h2>
    <a href="{{ route('matriculas.create') }}" class="btn btn-primary mb-3">Nueva Matrícula</a>

    <a href="{{ url('/export/matriculas/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/matriculas/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Fecha</th>
                <th>Período</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matriculas as $m)
            <tr>
                <td>{{ $m->estudiante->nombres }} {{ $m->estudiante->apellidos }}</td>
                <td>{{ $m->materia->nombre }}</td>
                <td>{{ $m->fecha_matricula }}</td>
                <td>{{ $m->periodo_academico }}</td>
                <td>{{ $m->estado }}</td>
                <td>
                    <a href="{{ route('matriculas.show', $m->id_matricula) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('matriculas.edit', $m->id_matricula) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('matriculas.destroy', $m->id_matricula) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar matrícula?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
