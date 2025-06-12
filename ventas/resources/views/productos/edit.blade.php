@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Producto</h2>
    <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST">
        @csrf @method('PUT')
        @include('productos.form', ['producto' => $producto])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
