<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .header-red {
    background-color: #d60000 !important;
            padding: 15px 0;
        }
        .info-box {
            border-left: 4px solid #c62828;
            padding: 15px;
        }
        .btn{
            background:#c62828;
            padding:15px
            color:white;
        }
    </style>
</head>

<body class="bg-light">

    <div class="header-red shadow-sm">
        <div class="container d-flex align-items-center gap-3">
            <a href="{{ url('/dashboard') }}">
                <i class="bi bi-arrow-left text-white fs-4"></i>
            </a>

            <div>
                <h4 class="text-white m-0">Información de Matrícula</h4>
                <small class="text-white">Datos actuales del estudiante</small>
            </div>
        </div>s
    </div>

    <div class="container mt-4">
<!--Información de Matrícula-->        
<div class="card shadow-sm">
            <div class="card-body info-box">

                <h5 class="mb-3">Datos de Matrícula</h5>

                <p class="mb-2"><strong>Semestre Cursado:</strong> {{ $matricula->semestre_cursado }}</p>
                <p class="mb-2"><strong>ID Programa:</strong> {{ $matricula->id_programa }}</p>
                <p class="mb-2"><strong>Metodología:</strong> {{ ucfirst($matricula->metodologia) }}</p>
                <p class="mb-2"><strong>ID Usuario:</strong> {{ $matricula->id_usuarios }}</p>

            </div>
          
        </div>
         <div class ="container mt-4 ">
                <div class ="d-flex align-item-center gap-3 text-white">
                    <a class ="btn"href="{{route('Schedule')}}">Ver Horario</a>
                    <a class ="btn"href="{{route('Matricula')}}">Matricular Materias</a>
                </div>
            </div>
    </div>

</body>
</html>
