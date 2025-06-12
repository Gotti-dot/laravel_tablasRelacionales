<!DOCTYPE html>
<html>
<head>
    <title>Lista de Estudiantes</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Estudiantes</h3>
    <table>
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $e)
                <tr>
                    <td>{{ $e->cedula }}</td>
                    <td>{{ $e->nombres }}</td>
                    <td>{{ $e->apellidos }}</td>
                    <td>{{ $e->fecha_nacimiento }}</td>
                    <td>{{ $e->telefono }}</td>
                    <td>{{ $e->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


