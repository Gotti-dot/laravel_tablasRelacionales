<div class="mb-3">
    <label>Cédula</label>
    <input type="text" name="cedula" class="form-control" value="{{ old('cedula', $estudiante->cedula ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nombres</label>
    <input type="text" name="nombres" class="form-control" value="{{ old('nombres', $estudiante->nombres ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Apellidos</label>
    <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos', $estudiante->apellidos ?? '') }}" required>
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
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $estudiante->email ?? '') }}">
</div>
