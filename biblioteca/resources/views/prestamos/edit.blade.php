@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($prestamo) ? 'Editar' : 'Registrar' }} Préstamo</h2>
    <form action="{{ isset($prestamo) ? route('prestamos.update', $prestamo->id_prestamo) : route('prestamos.store') }}" method="POST">
        @csrf
        @if(isset($prestamo)) @method('PUT') @endif
        @include('prestamos.form')
        <button class="btn btn-success">{{ isset($prestamo) ? 'Actualizar' : 'Guardar' }}</button>
        <a href="{{ route('prestamos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
