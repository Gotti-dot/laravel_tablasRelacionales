@extends('layouts.app')
 
@section('content')
<div class="container">
    <h2>Lista de Huéspedes</h2>
    <a href="{{ route('huespedes.create') }}" class="btn btn-primary mb-3">Nuevo Huésped</a>

    <a href="{{ url('/export/huespedes/excel') }}" class="btn btn-success mb-2 float-end">Exportar Excel</a>
    <a href="{{ url('/export/huespedes/pdf') }}" class="btn btn-danger mb-2 float-end">Exportar PDF</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacionalidad</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($huespedes as $h)
                <tr>
                    <td>{{ $h->documento }}</td>
                    <td>{{ $h->nombre }}</td>
                    <td>{{ $h->apellido }}</td>
                    <td>{{ $h->nacionalidad }}</td>
                    <td>{{ $h->telefono }}</td>
                    <td>{{ $h->email }}</td>
                    <td>
                        <a href="{{ route('huespedes.show', $h->id_huesped) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('huespedes.edit', $h->id_huesped) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('huespedes.destroy', $h->id_huesped) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('¿Eliminar huésped?')" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
