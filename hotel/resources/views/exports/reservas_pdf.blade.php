<!DOCTYPE html>
<html>
<head>
    <title>Lista de Reservas</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Reservas</h3>
    <table>
        <thead>
            <tr>
                <th>ID Reserva</th>
                <th>ID Huésped</th>
                <th>ID Habitación</th>
                <th>Fecha Entrada</th>
                <th>Fecha Salida</th>
                <th>Estado</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id_reserva }}</td>
                    <td>{{ $reserva->id_huesped }}</td>
                    <td>{{ $reserva->id_habitacion }}</td>
                    <td>{{ $reserva->fecha_entrada }}</td>
                    <td>{{ $reserva->fecha_salida }}</td>
                    <td>{{ ucfirst($reserva->estado) }}</td>
                    <td>{{ number_format($reserva->total, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
