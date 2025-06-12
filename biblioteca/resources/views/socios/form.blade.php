<div class="mb-3">
    <label>DNI</label>
    <input type="text" name="dni" class="form-control" value="{{ old('dni', $socio->dni ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $socio->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $socio->apellido ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Fecha Alta</label>
    <input type="date" name="fecha_alta" class="form-control" value="{{ old('fecha_alta', $socio->fecha_alta ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $socio->telefono ?? '') }}">
</div>
