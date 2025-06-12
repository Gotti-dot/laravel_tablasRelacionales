<div class="mb-3">
    <label>Código</label>
    <input type="text" name="codigo" class="form-control" value="{{ old('codigo', $curso->codigo ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $curso->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $curso->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Horas</label>
    <input type="number" name="horas" class="form-control" value="{{ old('horas', $curso->horas ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Profesor</label>
    <input type="text" name="profesor" class="form-control" value="{{ old('profesor', $curso->profesor ?? '') }}" required>
</div>
