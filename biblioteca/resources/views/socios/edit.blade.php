@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Socio</h2>
    <form action="{{ route('socios.update', $socio->id_socio) }}" method="POST">
        @csrf @method('PUT')
        @include('socios.form', ['socio' => $socio])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('socios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
