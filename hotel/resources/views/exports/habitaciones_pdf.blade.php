<!DOCTYPE html>
<html>
<head>
    <title>Lista de Habitaciones</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Habitaciones</h3>
    <table>
        <thead>
            <tr>
                <th>ID Habitación</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Precio por Noche</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($habitaciones as $habitacion)
                <tr>
                    <td>{{ $habitacion->id_habitacion }}</td>
                    <td>{{ $habitacion->numero }}</td>
                    <td>{{ ucfirst($habitacion->tipo) }}</td>
                    <td>{{ number_format($habitacion->precio_noche, 2) }}</td>
                    <td>{{ $habitacion->descripcion }}</td>
                    <td>{{ ucfirst($habitacion->estado) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
