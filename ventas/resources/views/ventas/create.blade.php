@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($venta) ? 'Editar' : 'Registrar' }} Venta</h2>
    <form action="{{ isset($venta) ? route('ventas.update', $venta->id_venta) : route('ventas.store') }}" method="POST">
        @csrf
        @if(isset($venta)) @method('PUT') @endif
        @include('ventas.form')
        <button class="btn btn-success">{{ isset($venta) ? 'Actualizar' : 'Guardar' }}</button>
        <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
