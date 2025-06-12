@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($inscripcion) ? 'Editar' : 'Registrar' }} Inscripción</h2>
    <form action="{{ isset($inscripcion) ? route('inscripciones.update', $inscripcion->id_inscripcion) : route('inscripciones.store') }}" method="POST">
        @csrf
        @if(isset($inscripcion)) @method('PUT') @endif
        @include('inscripciones.form')
        <button class="btn btn-success">{{ isset($inscripcion) ? 'Actualizar' : 'Guardar' }}</button>
        <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
