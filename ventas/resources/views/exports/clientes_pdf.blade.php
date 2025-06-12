<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Clientes</h3>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $c)
                <tr>
                    <td>{{ $c->nombre }}</td>
                    <td>{{ $c->apellido }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->telefono }}</td>
                    <td>{{ $c->direccion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
