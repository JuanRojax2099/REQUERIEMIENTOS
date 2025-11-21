<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 11 Custom User Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <style type="text/css">
    body{
      background: #F8F9FA;
    }
  </style>
</head>
<body>

<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
              <a href="#!">
                <img src="https://www.itsolutionstuff.com/assets/images/footer-logo-2.png" alt="BootstrapBrain Logo" width="250">
              </a>
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign up to your account</h2>
            <form method="POST" action="{{ route('register.post') }}">
              @csrf

              @session('error')
                  <div class="alert alert-danger" role="alert"> 
                      {{ $value }}
                  </div>
              @endsession

              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="first_name" required>
                    <label for="first_name" class="form-label">{{ __('Primer Nombre') }}</label>
                  </div>
                  @error('first_name')
                        <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <div class ="row gy-2 overflow hidden">
                    <div class ="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class =" form-control @error('second_name') is-invalid @enderror" name="second_name" id="second_name" placeholder="second_name" required>
                        <label for="second_name" class ="form-label">{{__('Segundo Nombre')}}</label>
                      </div>
                    </div>
                  </div>
                  @error('second_name')
                       <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <div class ="row gy-2 overflow hidden">
                    <div class ="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class =" form-control @error('first_lastname') is-invalid @enderror" name="first_lastname" id="first_lastname" placeholder="second_name" required>
                        <label for="first_lastname" class ="form-label">{{__('Primer Apellido')}}</label>
                      </div>
                    </div>
                  </div>
                  @error('first_lastname')
                       <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                   <div class ="row gy-2 overflow hidden">
                    <div class ="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class =" form-control @error('second_lastname') is-invalid @enderror" name="second_lastname" id="second_lastname" placeholder="second_name" required>
                        <label for="second_lastname" class ="form-label">{{__('Segundo Apellido')}}</label>
                      </div>
                    </div>
                  </div>
                  @error('second_lastname')
                       <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" id="cedula" placeholder="cedula" required>
                    <label for="cedula" class="form-label">{{ __('cedula') }}</label>
                  </div>
                  @error('cedula')
                  <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                  </div>
                  @error('email')
                        <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                  </div>
                  @error('password')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" value="" placeholder="password_confirmation" required>
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                  </div>
                  @error('password_confirmation')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <div class="row gy-12 overflow hidden">
                    <div class="col-12">
                      <label for="rol" class="">Rol:</label>
                      <div class="form-floating mb-3">
                        <select name="rol" id="rol">
                          <option value="">Estudiante</option>
                          <option value="is_professor">Docente</option>
                          <option value="is_admin">Administrador</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" type="submit">{{ __('Register') }}</button>
                  </div>
                </div>
                <div class="col-12">
                  <p class="m-0 text-secondary text-center">Have an account? <a href="{{ route('login') }}" class="link-primary text-decoration-none">Sign in</a></p>
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