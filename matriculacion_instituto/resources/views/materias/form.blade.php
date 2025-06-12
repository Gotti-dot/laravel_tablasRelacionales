<div class="mb-3">
    <label>Código</label>
    <input type="text" name="codigo" class="form-control" value="{{ old('codigo', $materia->codigo ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $materia->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $materia->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Horas</label>
    <input type="number" name="horas" class="form-control" value="{{ old('horas', $materia->horas ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Profesor</label>
    <input type="text" name="profesor" class="form-control" value="{{ old('profesor', $materia->profesor ?? '') }}" required>
</div>
