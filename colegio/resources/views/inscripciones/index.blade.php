@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Inscripciones</h2>
    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary mb-3">Nueva Inscripción</a>

    <a href="{{ url('/export/inscripciones/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/inscripciones/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Fecha</th>
                <th>Período</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscripciones as $i)
            <tr>
                <td>{{ $i->estudiante->nombres }} {{ $i->estudiante->apellidos }}</td>
                <td>{{ $i->curso->nombre }}</td>
                <td>{{ $i->fecha_inscripcion }}</td>
                <td>{{ $i->periodo_academico }}</td>
                <td>{{ $i->estado }}</td>
                <td>
                    <a href="{{ route('inscripciones.show', $i->id_inscripcion) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('inscripciones.edit', $i->id_inscripcion) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('inscripciones.destroy', $i->id_inscripcion) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar inscripción?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
