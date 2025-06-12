<div class="mb-3">
    <label>Documento</label>
    <input type="text" name="documento" class="form-control" value="{{ old('documento', $huesped->documento ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $huesped->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $huesped->apellido ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nacionalidad</label>
    <input type="text" name="nacionalidad" class="form-control" value="{{ old('nacionalidad', $huesped->nacionalidad ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $huesped->telefono ?? '') }}">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $huesped->email ?? '') }}">
</div>
