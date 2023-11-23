<!DOCTYPE html>
<html lang="es">
  <head>
      <!-- Metadatos -->
      <meta charset="UTF-8">
      <meta name="author" content="Grupo2 - 3er ciclo DAI">
      <meta name="description" content="Proyecto final DAI">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="HTML, Bootstrap, Vue, PHP, Laravel">
      <!-- Titulo -->
      <title>Login</title>
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="assets/img/icono.svg">
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- iconos bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
      <!-- Estilos propios -->
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    <main>
      <div class="container-fluid">
        <a href="{{ url('/')}}">
            <img src="assets/img/index/logo.png" class="logo sobreponer esquinaIzquierda" alt="">
        </a>
        <div class="row no-gutter">
            <!-- Mitad izquierda imagen -->
            <div class="col-md-6 d-none d-md-flex bg-login-image">
              
            </div>
            <!-- Mitad derecha login -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <!-- Contenido -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">Iniciar sesion</h3>
                                <p class="text-muted mb-4">Porfavor ingrese su DNI y contraseña</p>
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" placeholder="DNI" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" name="dni">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" placeholder="Contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" name="password">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Recordar contraseña</label>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" value="Iniciar Sesión">
                                    <div class="text-center d-flex justify-content-between mt-4"><p>¿No tiene una cuenta? <a href=" {{ route('reg') }}" class="font-italic text-muted"> 
                                            <u>Registrate</u></a></p></div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->
    
                </div>
            </div><!-- End -->
        </div>
    </div>
    
    </main>
     <!-- Bootstrap js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>