@extends('layouts.app')
 
@section('content')
<div class="container">
    <h2>Registrar Estudiante</h2>
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        @include('estudiantes.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
