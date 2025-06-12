@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($reserva) ? 'Editar' : 'Registrar' }} Reserva</h2>
    <form action="{{ isset($reserva) ? route('reservas.update', $reserva->id_reserva) : route('reservas.store') }}" method="POST">
        @csrf
        @if(isset($reserva)) @method('PUT') @endif
        @include('reservas.form')
        <button class="btn btn-success">{{ isset($reserva) ? 'Actualizar' : 'Guardar' }}</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
