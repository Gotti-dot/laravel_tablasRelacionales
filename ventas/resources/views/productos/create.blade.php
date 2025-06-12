@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        @include('productos.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
