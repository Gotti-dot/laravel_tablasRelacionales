<!DOCTYPE html>
<html>
<head>
    <title>Lista de Préstamos</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Préstamos</h3>
    <table>
        <thead>
            <tr>
                <th>ID Préstamo</th>
                <th>ID Libro</th>
                <th>ID Socio</th>
                <th>Fecha Préstamo</th>
                <th>Fecha Devolución</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestamos as $p)
                <tr>
                    <td>{{ $p->id_prestamo }}</td>
                    <td>{{ $p->id_libro }}</td>
                    <td>{{ $p->id_socio }}</td>
                    <td>{{ $p->fecha_prestamo }}</td>
                    <td>{{ $p->fecha_devolucion }}</td>
                    <td>{{ $p->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
