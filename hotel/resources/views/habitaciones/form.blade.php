<div class="mb-3">
    <label>Número</label>
    <input type="text" name="numero" class="form-control" value="{{ old('numero', $habitacion->numero ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Tipo</label>
    <select name="tipo" class="form-control" required>
        <option value="individual" {{ old('tipo', $habitacion->tipo ?? '') == 'individual' ? 'selected' : '' }}>Individual</option>
        <option value="doble" {{ old('tipo', $habitacion->tipo ?? '') == 'doble' ? 'selected' : '' }}>Doble</option>
        <option value="suite" {{ old('tipo', $habitacion->tipo ?? '') == 'suite' ? 'selected' : '' }}>Suite</option>
    </select>
</div>
<div class="mb-3">
    <label>Precio por Noche</label>
    <input type="number" step="0.01" name="precio_noche" class="form-control" value="{{ old('precio_noche', $habitacion->precio_noche ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $habitacion->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Estado</label>
    <select name="estado" class="form-control" required>
        <option value="disponible" {{ old('estado', $habitacion->estado ?? '') == 'disponible' ? 'selected' : '' }}>Disponible</option>
        <option value="ocupada" {{ old('estado', $habitacion->estado ?? '') == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
        <option value="mantenimiento" {{ old('estado', $habitacion->estado ?? '') == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
    </select>
</div>
