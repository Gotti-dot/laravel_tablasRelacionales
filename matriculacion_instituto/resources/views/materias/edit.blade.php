@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Editar Materia</h2>
    <form action="{{ route('materias.update', $materia->id_materia) }}" method="POST">
        @csrf @method('PUT')
        @include('materias.form', ['materia' => $materia])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
