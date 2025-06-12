@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Socios</h2>
    <a href="{{ route('socios.create') }}" class="btn btn-primary mb-3">Nuevo Socio</a>

    <a href="{{ url('/export/socios/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/socios/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($socios as $s)
                <tr>
                    <td>{{ $s->dni }}</td>
                    <td>{{ $s->nombre }}</td>
                    <td>{{ $s->apellido }}</td>
                    <td>{{ $s->telefono }}</td>
                    <td>
                        <a href="{{ route('socios.show', $s->id_socio) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('socios.edit', $s->id_socio) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('socios.destroy', $s->id_socio) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('¿Eliminar socio?')" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
