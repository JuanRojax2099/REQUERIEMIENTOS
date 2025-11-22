<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Matrícula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/Matricula.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    </style>

</head>
<body class="bg-light">

    <div class="header-red shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">

            <div>
                <div class="d-flex align-items-center gap-3">
                    
                   <a href="{{url('/dashboard')}}"><i class="bi bi-arrow-left text-white fs-5"></i></a>
                    <div>
                        <h5 class="m-0 text-white">Sistema de Matrícula</h5>
                        <small>Período Académico 2025-1</small>
                    </div>
                </div>

                <div class="mt-2 d-flex align-items-center gap-2">
                    <span class="small">Modo Administrador</span>
                    <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-4">

        <div class="d-flex gap-2 mb-3">
            <button class="tab-btn active">Catálogo de Materias</button>
            <button class="tab-btn">Mi Horario</button>
        </div>

        <div class="row g-3 align-items-center">

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control border-start-0 search-box" placeholder="Buscar por nombre, código o profesor...">
                </div>
            </div>

            <div class="col-md-3">
                <select class="form-select filter-select">
                    <option selected>Todas los semestres</option>
                </select>
            </div>

            <div class="col-md-3">
                <select class="form-select filter-select">
                    <option selected>Todos los departamentos</option>
                </select>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
