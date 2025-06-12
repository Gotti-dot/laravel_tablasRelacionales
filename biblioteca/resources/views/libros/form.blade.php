<div class="mb-3">
    <label>ID Libro</label>
    <input type="text" name="id_libro" class="form-control" value="{{ old('id_libro', $libro->id_libro ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Título</label>
    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $libro->titulo ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Autor</label>
    <input type="text" name="autor" class="form-control" value="{{ old('autor', $libro->autor ?? '') }}" required>
</div>
<div class="mb-3">
    <label>ISBN</label>
    <input type="text" name="isbn" class="form-control" value="{{ old('isbn', $libro->isbn ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Editorial</label>
    <input type="text" name="editorial" class="form-control" value="{{ old('editorial', $libro->editorial ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Año de Publicación</label>
    <input type="number" name="anio_publicacion" class="form-control" value="{{ old('anio_publicacion', $libro->anio_publicacion ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Estado</label>
    <select name="estado" class="form-control" required>
        <option value="disponible" {{ old('estado', $libro->estado ?? '') == 'disponible' ? 'selected' : '' }}>Disponible</option>
        <option value="prestado" {{ old('estado', $libro->estado ?? '') == 'prestado' ? 'selected' : '' }}>Prestado</option>
        <option value="reparacion" {{ old('estado', $libro->estado ?? '') == 'reparacion' ? 'selected' : '' }}>En Reparación</option>
    </select>
</div>
