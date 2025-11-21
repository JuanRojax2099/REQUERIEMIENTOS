<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingeniería de Software</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('css/info.css')}}">
</head>

<body>

<div class="container mt-3">
    <a href="#" class="btn btn-light shadow-sm"><i class="bi bi-arrow-left"></i> Volver al Inicio</a>
</div>

<div class="container mt-4">

    <div class="header-box text-center p-4 mb-4">
        <i class="bi bi-mortarboard-fill fs-1"></i>
        <h3 class="mt-2">Ingeniería de Software</h3>

        <div class="d-flex justify-content-center gap-4 mt-2">
            <div><i class="bi bi-calendar3"></i> 5 años (10 semestres)</div>
            <div><i class="bi bi-lightbulb"></i> 180 créditos</div>
        </div>
    </div>

    <ul class="nav nav-tabs mb-4 justify-content-center">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#info">Información General</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pensum">Pensum</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#perfil">Perfil</button>
        </li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane fade show active" id="info">

            <div class="card shadow-sm mb-4 rounded-4">
                <div class="card-body">
                    <h5><i class="bi bi-journal-text"></i> Descripción de la Carrera</h5>
                    <p class="mt-3">
                        La Ingeniería de Software es una disciplina que aplica principios de ingeniería al desarrollo 
                        de software de alta calidad. Este programa forma profesionales capaces de diseñar, desarrollar, 
                        implementar y mantener sistemas de software complejos, utilizando metodologías, herramientas 
                        y tecnologías modernas. Los estudiantes adquieren competencias en programación, arquitectura 
                        de software, gestión de proyectos, bases de datos, seguridad informática y desarrollo de 
                        aplicaciones web y móviles, preparándolos para liderar equipos y proyectos tecnológicos en 
                        un entorno globalizado.
                    </p>
                </div>
            </div>

            <div class="card shadow-sm mb-4 rounded-4">
                <div class="card-body">
                    <h5><i class="bi bi-bullseye"></i> Objetivos de la Carrera</h5>

                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="bi bi-check-circle-fill icon-green"></i> Formar profesionales con sólidos conocimientos en el diseño y desarrollo de software de calidad.</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill icon-green"></i> Desarrollar habilidades para aplicar metodologías ágiles y tradicionales en proyectos de software.</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill icon-green"></i> Capacitar en el uso de tecnologías emergentes y herramientas modernas de desarrollo.</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill icon-green"></i> Fomentar el pensamiento crítico y la resolución de problemas complejos.</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill icon-green"></i> Preparar líderes técnicos capaces de gestionar equipos y proyectos.</li>
                        <li><i class="bi bi-check-circle-fill icon-green"></i> Promover la ética profesional y la responsabilidad social.</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm mb-5 rounded-4">
                <div class="card-body">
                    <h5><i class="bi bi-award-fill"></i> Título que Otorga</h5>
                    <p class="mt-3">Ingeniero/a de Software</p>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="pensum">
            <p class="text-center mt-4">Contenido del pensum aquí…</p>
        </div>

        <div class="tab-pane fade" id="perfil">
            <p class="text-center mt-4">Información del perfil aquí…</p>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
