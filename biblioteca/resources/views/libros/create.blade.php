@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Libro</h2>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        @include('libros.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('libros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
