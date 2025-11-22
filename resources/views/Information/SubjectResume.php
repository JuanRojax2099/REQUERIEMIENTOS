<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/Matricula.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="{{asset('css/Matricula.css')}}" rel="stylesheet">
    <title>Matricula Resumen</title>
</head>
<body class="bg-red">
    <div class="header-red shadow-sm">
        <div class="container d-flex justify-content">
             <a href="{{url('dashboard')}}"><i class="bi bi-arrow-left text-white fs-5"></i></a>
            <div>
                  <h5 class="m-0 text-white">Sistema de Matrícula</h5>
                <small>Período Académico 2025-1</small>
            </div>
        </div>
        <div class="mt-2 d-flex align-items-center gap-2">
            <span></span>
        </div>

    </div>
       <div class="col-md-8">
                <div class="form-box">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>N° Documento:</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label>Código:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Nombres:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Apellidos:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Programa:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Metodología:</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label>Semestre Cursado:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                </div>
            </div>
    
</body>
</html>