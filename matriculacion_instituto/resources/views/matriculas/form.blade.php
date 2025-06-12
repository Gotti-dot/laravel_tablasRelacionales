<div class="mb-3">
    <label>Estudiante</label>
    <select name="id_estudiante" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($estudiantes as $e)
        <option value="{{ $e->id_estudiante }}" {{ old('id_estudiante', $matricula->id_estudiante ?? '') == $e->id_estudiante ? 'selected' : '' }}>
            {{ $e->nombres }} {{ $e->apellidos }}
        </option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label>Materia</label>
    <select name="id_materia" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($materias as $m)
        <option value="{{ $m->id_materia }}" {{ old('id_materia', $matricula->id_materia ?? '') == $m->id_materia ? 'selected' : '' }}>
            {{ $m->nombre }}
        </option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label>Fecha de Matrícula</label>
    <input type="date" name="fecha_matricula" class="form-control" value="{{ old('fecha_matricula', $matricula->fecha_matricula ?? '') }}" required>
</div>


<div class="mb-3">
    <label>Período Académico</label>
    <input type="text" name="periodo_academico" class="form-control" value="{{ old('periodo_academico', $matricula->periodo_academico ?? '') }}" required>
</div>


<div class="mb-3">
    <label>Estado</label>
    <select name="estado" class="form-control" required>
        @foreach(['Activa', 'Cancelada', 'Finalizada'] as $estado)
        <option value="{{ $estado }}" {{ old('estado', $matricula->estado ?? 'Activa') == $estado ? 'selected' : '' }}>
            {{ $estado }}
        </option>
        @endforeach
    </select>
</div>
