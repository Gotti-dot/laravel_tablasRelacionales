@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Habitación</h2>
    <form action="{{ route('habitaciones.store') }}" method="POST">
        @csrf
        @include('habitaciones.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('habitaciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
