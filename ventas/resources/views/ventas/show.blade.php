@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle de Venta</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Cliente:</strong> {{ $venta->cliente->nombre }} {{ $venta->cliente->apellido }}</li>
        <li class="list-group-item"><strong>Producto:</strong> {{ $venta->producto->nombre }}</li>
        <li class="list-group-item"><strong>Fecha Venta:</strong> {{ $venta->fecha_venta }}</li>
        <li class="list-group-item"><strong>Cantidad:</strong> {{ $venta->cantidad }}</li>
        <li class="list-group-item"><strong>Precio Unitario:</strong> {{ $venta->precio_unitario }}</li>
        <li class="list-group-item"><strong>Total:</strong> {{ $venta->total }}</li>
    </ul>
    <a href="{{ route('ventas.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
