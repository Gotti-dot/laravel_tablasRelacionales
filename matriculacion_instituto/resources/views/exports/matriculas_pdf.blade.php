<!DOCTYPE html>
<html>
<head>
    <title>Lista de Matrículas</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Matrículas</h3>
    <table>
        <thead>
            <tr>
                <th>ID Matrícula</th>
                <th>ID Estudiante</th>
                <th>ID Materia</th>
                <th>Fecha Matrícula</th>
                <th>Período Académico</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matriculas as $m)
                <tr>
                    <td>{{ $m->id_matricula }}</td>
                    <td>{{ $m->id_estudiante }}</td>
                    <td>{{ $m->id_materia }}</td>
                    <td>{{ $m->fecha_matricula }}</td>
                    <td>{{ $m->periodo_academico }}</td>
                    <td>{{ $m->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
