@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Curso</h2>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        @include('cursos.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
