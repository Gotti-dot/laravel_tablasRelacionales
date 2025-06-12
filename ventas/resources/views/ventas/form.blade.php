<div class="mb-3">
    <label>Cliente</label>
    <select name="id_cliente" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($clientes as $c)
        <option value="{{ $c->id_cliente }}" {{ old('id_cliente', $venta->id_cliente ?? '') == $c->id_cliente ? 'selected' : '' }}>
            {{ $c->nombre }} {{ $c->apellido }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Producto</label>
    <select name="id_producto" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($productos as $p)
        <option value="{{ $p->id_producto }}" {{ old('id_producto', $venta->id_producto ?? '') == $p->id_producto ? 'selected' : '' }}>
            {{ $p->nombre }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Fecha de Venta</label>
    <input type="datetime-local" name="fecha_venta" class="form-control" value="{{ old('fecha_venta', $venta->fecha_venta ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Cantidad</label>
    <input type="number" name="cantidad" class="form-control" value="{{ old('cantidad', $venta->cantidad ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Precio Unitario</label>
    <input type="number" step="0.01" name="precio_unitario" class="form-control" value="{{ old('precio_unitario', $venta->precio_unitario ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Total</label>
    <input type="number" step="0.01" name="total" class="form-control" value="{{ old('total', $venta->total ?? '') }}" required>
</div>
