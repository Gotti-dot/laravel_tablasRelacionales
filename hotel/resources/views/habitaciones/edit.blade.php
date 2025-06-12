@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Habitación</h2>
    <form action="{{ route('habitaciones.update', $habitacion->id_habitacion) }}" method="POST">
        @csrf @method('PUT')
        @include('habitaciones.form', ['habitacion' => $habitacion])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('habitaciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
