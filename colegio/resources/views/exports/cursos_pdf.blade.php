<!DOCTYPE html>
<html>
<head>
    <title>Lista de Cursos</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Cursos</h3>
    <table>
        <thead>
            <tr>
                <th>ID Curso</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Horas</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->id_curso }}</td>
                    <td>{{ $curso->codigo }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->descripcion }}</td>
                    <td>{{ $curso->horas }}</td>
                    <td>{{ $curso->profesor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
