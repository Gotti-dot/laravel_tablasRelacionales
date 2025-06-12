<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $estudiante->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $estudiante->apellido ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Fecha Nacimiento</label>
    <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $estudiante->fecha_nacimiento ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Dirección</label>
    <textarea name="direccion" class="form-control">{{ old('direccion', $estudiante->direccion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $estudiante->telefono ?? '') }}">
</div>
<div class="mb-3">
    <label>Fecha Registro</label>
    <input type="datetime-local" name="fecha_registro" class="form-control" value="{{ old('fecha_registro', $estudiante->fecha_registro ?? '') }}" required>
</div>
