<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $cliente->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $cliente->apellido ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $cliente->email ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono ?? '') }}">
</div>
<div class="mb-3">
    <label>Dirección</label>
    <textarea name="direccion" class="form-control">{{ old('direccion', $cliente->direccion ?? '') }}</textarea>
</div>
