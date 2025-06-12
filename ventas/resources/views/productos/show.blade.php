@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle del Producto</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $producto->nombre }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $producto->descripcion }}</li>
        <li class="list-group-item"><strong>Precio:</strong> {{ $producto->precio }}</li>
        <li class="list-group-item"><strong>Stock:</strong> {{ $producto->stock }}</li>
        <li class="list-group-item"><strong>Categoría:</strong> {{ $producto->categoria }}</li>
    </ul>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
