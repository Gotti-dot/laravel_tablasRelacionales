@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Registrar Materia</h2>
    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        @include('materias.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
