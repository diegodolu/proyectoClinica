<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Metadatos -->
    <meta charset="UTF-8" />
    <meta name="author" content="Grupo2 - 3er ciclo DAI" />
    <meta name="description" content="Proyecto final DAI" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="HTML, Bootstrap, Vue, PHP, Laravel" />
    <!-- Titulo -->
    <title>Registro</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/icono.svg" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- iconos bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
  </head>
  <body>
    <main>
      <div class="container-fluid">
        <a href=" {{ url('/')}}">
          <img src="assets/img/index/logo.png" class="logo sobreponer esquinaIzquierda" alt=""/>
        </a>
        <div class="row no-gutter">
          <!-- Mitad izquierda imagen -->
          <div class="col-md-6 d-none d-md-flex bg-login-image">
          </div>
          <!-- Mitad derecha login -->
          <div class="col-md-6 bg-light">
            <div class="contenedor-100hv">
              <form id="regForm" action="{{ route('register')}}" method="POST">
                @csrf
                <h1>Registro:</h1>
                
                <!-- One "tab" for each step in the form: -->
                <div >
                  <p><input class="input-register" placeholder="DNI" name="dni"></p>
                </div>
                
                <div >
                  <p><input type="text" class="input-register" placeholder="Nombres" name="nombres"></p>
                  <p><input type="text" class="input-register" placeholder="Apellidos" name="apellidos"></p>
                  <p><input type="text" class="input-register" placeholder="Telefono" name="telefono"></p>
                  <p><input type="text" class="input-register" placeholder="Direccion" name="direccion"></p>
                  <p><input type="email" class="input-register" placeholder="Email" name="email"></p>
                  <p><input type="date" class="input-register" placeholder="Fecha de nacimiento" name="fecha"></p>
                  <p><input type="password" type="" class="input-register" placeholder="Contraseña" name="password"></p>
                  <input type="hidden" value="1" name="rol">
                </div>
                
                
                <div style="overflow:auto;">
                  <div style="float:right;">
                    {{-- <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button> --}}
                    <input type="submit" value="Enviar">
                  </div>
                </div>

                <div class="text-center d-flex justify-content-between mt-4"><p>¿No tiene una cuenta? <a href="register.html" class="font-italic text-muted"> 
                  <u>Registrate</u></a></p></div>

                
              </form>
            </div>
          </div>
          <!-- End -->
        </div>
      </div>
    </main>
    <!-- Bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
      ></script>
      <script src="assets/js/scripts.js"></script>
  </body>
</html>
