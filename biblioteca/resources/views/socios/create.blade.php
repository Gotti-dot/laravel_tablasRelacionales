@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Socio</h2>
    <form action="{{ route('socios.store') }}" method="POST">
        @csrf
        @include('socios.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('socios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
