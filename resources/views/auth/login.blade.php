<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
 <link rel ="stylesheet" href="{{asset('css/log.css')}}">  <style type="text/css">
    
  </style>
</head>
<body>

<section class=" py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm mt-5" style="background-color: rgba(255, 255, 255, 0.781);">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
              <a href="#!">
                <img src="../img/fesc-30.png" alt="BootstrapBrain Logo" width="250">
              </a>
            </div>
            <h2 class="fs-6 fw-normal text-center  mb-4">Sign in to your account</h2>
            <form method="POST" action="{{ route('login.post') }}">
              @csrf

              @session('error')
                  <div class="alert alert-danger" role="alert"> 
                      {{ $value }}
                  </div>
              @endsession

              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" id="cedual" placeholder="name@example.com" required>
                    <label for="text" class="form-label">{{ __('Cedula de identidad') }}</label>
                  </div>
                  @error('cedula')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                  </div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">
                        Mantenme registrado
                      </label>
                    </div>
                    <a href="#!" class="link-primary text-decoration-none">{{ __('forgot password?') }}</a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" type="submit">{{ __('Login') }}</button>
                  </div>
                </div>
                <div class="col-12">
                <p class="m-0  text-center">No tiene cuenta? <a href="{{ route('register') }}" class="link-primary text-decoration-none">Registrese</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>