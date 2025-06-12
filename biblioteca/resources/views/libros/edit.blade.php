@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Libro</h2>
    <form action="{{ route('libros.update', $libro->id_libro) }}" method="POST">
        @csrf @method('PUT')
        @include('libros.form', ['libro' => $libro])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('libros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
