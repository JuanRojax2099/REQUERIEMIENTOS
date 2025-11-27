<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Horario del Estudiante</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <h3 class="mb-3">Materias Matriculadas</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            @if($materias->isEmpty())
                <p class="text-muted">No has matriculado ninguna materia todavía.</p>
            @else
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead class="table-danger">
                        <tr>
                            <th>Código</th>
                            <th>Materia</th>
                            <th>Horario</th>
                            <th>Día</th>
                            <th>Semestre</th>
                            <th>Fecha Registro</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($materias as $m)
                        <tr>
                            <td>{{ $m->codigo }}</td>
                            <td>{{ $m->NombreAsignatura }}</td>
                            <td>{{ $m->horario }}</td>
                            <td>{{ $m->diaSemana }}</td>
                            <td>{{ $m->semestre }}</td>
                            <td>{{ $m->fecha_registro }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            @endif

        </div>
    </div>

</div>

</body>
</html>
