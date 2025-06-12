<!DOCTYPE html>
<html>
<head>
    <title>Lista de Inscripciones</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Lista de Inscripciones</h3>
    <table>
        <thead>
            <tr>
                <th>ID Inscripción</th>
                <th>ID Estudiante</th>
                <th>ID Curso</th>
                <th>Fecha Inscripción</th>
                <th>Período Académico</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscripciones as $i)
                <tr>
                    <td>{{ $i->id_inscripcion }}</td>
                    <td>{{ $i->id_estudiante }}</td>
                    <td>{{ $i->id_curso }}</td>
                    <td>{{ $i->fecha_inscripcion }}</td>
                    <td>{{ $i->periodo_academico }}</td>
                    <td>{{ $i->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
