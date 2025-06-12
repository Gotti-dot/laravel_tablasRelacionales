@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Panel Principal</h1>

    <div class="row">
        <!-- Clientes -->
        <div class="col-md-4">
            <div class="card text-white bg-success shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text fs-3">{{ $totalClientes }}</p>
                    <a href="{{ route('clientes.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <p class="card-text fs-3">{{ $totalProductos }}</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Ventas -->
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow mb-3">
                <div class="card-body">
                    <h5 class="card-title">Ventas</h5>
                    <p class="card-text fs-3">{{ $totalVentas }}</p>
                    <a href="{{ route('ventas.index') }}" class="btn btn-light btn-sm">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
