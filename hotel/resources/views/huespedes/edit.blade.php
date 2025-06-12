@extends('layouts.app')
 
@section('content')
<div class="container">
    <h2>Editar Huésped</h2>
    <form action="{{ route('huespedes.update', $huesped->id_huesped) }}" method="POST">
        @csrf @method('PUT')
        @include('huespedes.form', ['huesped' => $huesped])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('huespedes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
