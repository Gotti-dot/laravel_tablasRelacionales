@extends('layouts.app')
 
@section('content')
<div class="container">
    <h2>Editar Estudiante</h2>
    <form action="{{ route('estudiantes.update', $estudiante->id_estudiante) }}" method="POST">
        @csrf @method('PUT')
        @include('estudiantes.form', ['estudiante' => $estudiante])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
