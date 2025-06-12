<div class="mb-3">
    <label>Libro</label>
    <select name="id_libro" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($libros as $l)
        <option value="{{ $l->id_libro }}" {{ old('id_libro', $prestamo->id_libro ?? '') == $l->id_libro ? 'selected' : '' }}>
            {{ $l->titulo }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Socio</label>
    <select name="id_socio" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($socios as $s)
        <option value="{{ $s->id_socio }}" {{ old('id_socio', $prestamo->id_socio ?? '') == $s->id_socio ? 'selected' : '' }}>
            {{ $s->nombre }} {{ $s->apellido }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Fecha de Préstamo</label>
    <input type="date" name="fecha_prestamo" class="form-control" value="{{ old('fecha_prestamo', $prestamo->fecha_prestamo ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Fecha de Devolución</label>
    <input type="date" name="fecha_devolucion" class="form-control" value="{{ old('fecha_devolucion', $prestamo->fecha_devolucion ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Estado</label>
    <select name="estado" class="form-control" required>
        @foreach(['activo', 'devuelto', 'atrasado'] as $estado)
        <option value="{{ $estado }}" {{ old('estado', $prestamo->estado ?? 'activo') == $estado ? 'selected' : '' }}>
            {{ ucfirst($estado) }}
        </option>
        @endforeach
    </select>
</div>
