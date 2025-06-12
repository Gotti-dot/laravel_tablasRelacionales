<!DOCTYPE html>
<html>
<head>
    <title>Lista de Huéspedes</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Huéspedes</h3>
    <table>
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacionalidad</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($huespedes as $h)
                <tr>
                    <td>{{ $h->documento }}</td>
                    <td>{{ $h->nombre }}</td>
                    <td>{{ $h->apellido }}</td>
                    <td>{{ $h->nacionalidad }}</td>
                    <td>{{ $h->telefono }}</td>
                    <td>{{ $h->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
