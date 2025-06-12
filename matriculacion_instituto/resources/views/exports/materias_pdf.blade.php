<!DOCTYPE html>
<html>
<head>
    <title>Lista de Materias</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Materias</h3>
    <table>
        <thead>
            <tr>
                <th>ID Materia</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Horas</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias as $materia)
                <tr>
                    <td>{{ $materia->id_materia }}</td>
                    <td>{{ $materia->codigo }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->descripcion }}</td>
                    <td>{{ $materia->horas }}</td>
                    <td>{{ $materia->profesor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
