@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Curso</h2>
    <form action="{{ route('cursos.update', $curso->id_curso) }}" method="POST">
        @csrf @method('PUT')
        @include('cursos.form', ['curso' => $curso])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
