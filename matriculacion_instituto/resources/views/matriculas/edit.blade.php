@extends('layouts.app')


@section('content')
<div class="container">
    <h2>{{ isset($matricula) ? 'Editar' : 'Registrar' }} Matrícula</h2>
    <form action="{{ isset($matricula) ? route('matriculas.update', $matricula->id_matricula) : route('matriculas.store') }}" method="POST">
        @csrf
        @if(isset($matricula)) @method('PUT') @endif
        @include('matriculas.form')
        <button class="btn btn-success">{{ isset($matricula) ? 'Actualizar' : 'Guardar' }}</button>
        <a href="{{ route('matriculas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
