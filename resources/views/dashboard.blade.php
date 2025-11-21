<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPAES</title>

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body class="bg-light">

   <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3 shadow-sm">
    <div class="container">
        
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="bi bi-person-circle me-2 fs-4"></i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.virtual.fesc.edu.co/moodle/login/index.php">Aula Virtual</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Correo Institucional</a>
                </li>
            </ul>

            <div class="ms-auto d-flex align-items-center gap-4">

                <div class="text-white text-end fw-bold me-3">
                    <div class="fs-4">SIPAES</div>
                    <div class="small">Sistema de Información y Gestión Académica del Adulto Superior</div>
                </div>

                <a class="btn btn-light text-danger fw-bold"
                   href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>

        </div>
    </div>
</nav>
    <div class="container my-4">

        <div class="row ">
            <div class="col-md-10 position-relative">

               
                <div class="banner me-1 ">
                    <img src="../img/Oh-Caracoles.png" id="caracoles" class="img-fluid rounded-4 shadow" alt="Banner SIPAES">
                </div>
<div class="Container ">
<!--Imagenes de las redes-->
                <div class ="row position-fixed end-0 top-0" style="margin-top:100px">
    <div class="col-md-2" id="">
      <h4>Nuestras Redes</h4>
      
      <a href="#"><img id="red" src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"></a>
      <a href="#"><img id="red"src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"></a>
      <a href="#"><img id="red"src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube"></a>
</div>
    <div class ="col-md-4 mt-5 pt-4">
      <label  class="mt-1"for="">FESC Institución de Educación Superior</label>
      <br><label class="mt-2 mb-2" for="">fesc.edusuperior</label>
      <br><label class="mt-4" for="">@TuTeleFESC</label></div>
       </div>
            </div>
                     </div>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-4 mb-3">
                <button class="btn  px-5 py-3" id="btn-option">Soporte</button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="btn px-5 py-3" id="btn-option" href="/dashboard/info">Información académica</button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="btn  px-5 py-3" id="btn-option">Matrícula</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
