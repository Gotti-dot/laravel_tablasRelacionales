<div class="mb-3">
    <label>Huésped</label>
    <select name="id_huesped" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($huespedes as $h)
        <option value="{{ $h->id_huesped }}" {{ old('id_huesped', $reserva->id_huesped ?? '') == $h->id_huesped ? 'selected' : '' }}>
            {{ $h->nombre }} {{ $h->apellido }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Habitación</label>
    <select name="id_habitacion" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach($habitaciones as $hab)
        <option value="{{ $hab->id_habitacion }}" {{ old('id_habitacion', $reserva->id_habitacion ?? '') == $hab->id_habitacion ? 'selected' : '' }}>
            {{ $hab->numero }} ({{ ucfirst($hab->tipo) }})
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Fecha de Entrada</label>
    <input type="date" name="fecha_entrada" class="form-control" value="{{ old('fecha_entrada', $reserva->fecha_entrada ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Fecha de Salida</label>
    <input type="date" name="fecha_salida" class="form-control" value="{{ old('fecha_salida', $reserva->fecha_salida ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Estado</label>
    <select name="estado" class="form-control" required>
        @foreach(['confirmada', 'cancelada', 'finalizada'] as $estado)
        <option value="{{ $estado }}" {{ old('estado', $reserva->estado ?? 'confirmada') == $estado ? 'selected' : '' }}>
            {{ ucfirst($estado) }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Total</label>
    <input type="number" step="0.01" name="total" class="form-control" value="{{ old('total', $reserva->total ?? '') }}" required>
</div>
