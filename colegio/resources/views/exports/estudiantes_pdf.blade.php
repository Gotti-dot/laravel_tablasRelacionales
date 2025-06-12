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
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $e)
                <tr>
                    <td>{{ $e->id_estudiante }}</td>
                    <td>{{ $e->nombre }}</td>
                    <td>{{ $e->apellido }}</td>
                    <td>{{ $e->fecha_nacimiento }}</td>
                    <td>{{ $e->direccion }}</td>
                    <td>{{ $e->telefono }}</td>
                    <td>{{ $e->fecha_registro }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
