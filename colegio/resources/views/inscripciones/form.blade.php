<div class="mb-3">
    <label>Estudiante</label>
    <select name="id_estudiante" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($estudiantes as $e)
        <option value="{{ $e->id_estudiante }}" {{ old('id_estudiante', $inscripcion->id_estudiante ?? '') == $e->id_estudiante ? 'selected' : '' }}>
            {{ $e->nombres }} {{ $e->apellidos }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Curso</label>
    <select name="id_curso" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($cursos as $c)
        <option value="{{ $c->id_curso }}" {{ old('id_curso', $inscripcion->id_curso ?? '') == $c->id_curso ? 'selected' : '' }}>
            {{ $c->nombre }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Fecha de Inscripción</label>
    <input type="date" name="fecha_inscripcion" class="form-control" value="{{ old('fecha_inscripcion', $inscripcion->fecha_inscripcion ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Período Académico</label>
    <input type="text" name="periodo_academico" class="form-control" value="{{ old('periodo_academico', $inscripcion->periodo_academico ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Estado</label>
    <select name="estado" class="form-control" required>
        @foreach(['Activa', 'Cancelada'] as $estado)
        <option value="{{ $estado }}" {{ old('estado', $inscripcion->estado ?? 'Activa') == $estado ? 'selected' : '' }}>
            {{ $estado }}
        </option>
        @endforeach
    </select>
</div>
