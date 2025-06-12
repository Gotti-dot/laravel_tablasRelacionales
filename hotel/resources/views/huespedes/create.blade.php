@extends('layouts.app')
 
@section('content')
<div class="container">
    <h2>Registrar Huésped</h2>
    <form action="{{ route('huespedes.store') }}" method="POST">
        @csrf
        @include('huespedes.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('huespedes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
