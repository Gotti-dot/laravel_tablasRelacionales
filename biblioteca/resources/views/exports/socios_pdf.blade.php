<!DOCTYPE html>
<html>
<head>
    <title>Lista de Socios</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Socios</h3>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Fecha Alta</th>
            </tr>
        </thead>
        <tbody>
            @foreach($socios as $s)
                <tr>
                    <td>{{ $s->dni }}</td>
                    <td>{{ $s->nombre }}</td>
                    <td>{{ $s->apellido }}</td>
                    <td>{{ $s->telefono }}</td>
                    <td>{{ $s->fecha_alta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
