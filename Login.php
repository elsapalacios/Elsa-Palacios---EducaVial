<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login y Regístro - EducaVial</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">


  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!- Navbar -> COMENTARIO
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/Logo_1.png" alt="Educación Vial Quibdó">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Inicio</a>
          </li>
        <div class="ms-lg-3 mt-3 mt-lg-0">
          <a href="Login.php" class="btn btn-outline-primary me-2">Iniciar Sesión</a>
          <a href="Login.php" class="btn btn-success">Registrarse</a>
        </div>
      </div>
    </div>
  </nav>

  <main>

    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Inicia sesión para entrar en la página</p>
          <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
          <h3>¿Aún no tienes una cuenta?</h3>
          <p>Regístrate para que puedas iniciar sesión</p>
          <button id="btn__registrarse">Regístrarse</button>
        </div>
      </div>

      <!- Formulario de Login y registro -> 
      <div class="contenedor__login-register">
        <!-Login->
        <form action="Entrada.html" class="formulario__login">
          <h2>Iniciar Sesión</h2>
          <input type="text" placeholder="Correo Electrónico">
          <input type="password" placeholder="Contraseña">
          <button>Entrar</button>
        </form>

        <!-Registro->
        <form action="php/registro_usuario.php" method="POST" class="formulario__register">
          <h2>Regístrarse</h2>
          <input type="text" placeholder="Nombre completo" name="nombre">
          <input type="text" placeholder="Correo Electrónico" name="correo">
          <input type="password" placeholder="Contraseña" name="contrasena">
          <input type="text" placeholder="Teléfono" name="telefono">
          <input type="text" placeholder="Dirección" name="direccion">
          <button>Regístrarse</button>
        </form>
      </div>
    </div>

  </main>

  <script src="assets/js/script.js"></script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login y Regístro - EducaVial</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Font Awesome para iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- Navbar
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/Logo_1.png" alt="Educación Vial Quibdó">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Inicio</a>
          </li>
        <div class="ms-lg-3 mt-3 mt-lg-0">
          <a href="Login.php" class="btn btn-outline-primary me-2">Iniciar Sesión</a>
          <a href="Login.php" class="btn btn-success">Registrarse</a>
        </div>
      </div>
    </div>
  </nav> -->

  <main>
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Inicia sesión para entrar en la página</p>
          <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
          <h3>¿Aún no tienes una cuenta?</h3>
          <p>Regístrate para que puedas iniciar sesión</p>
          <button id="btn__registrarse">Regístrarse</button>
        </div>
      </div>

      <!--Formulario de Login y registro-->
      <div class="contenedor__login-register">
        <!--Login-->
        <form action="Entrada.html" class="formulario__login">
          <div class="logo-container">
            <div class="logo-circle">
              <i class="fas fa-car-side"></i>
              <i class="fas fa-traffic-light"></i>
            </div>
            <h1 class="logo-text">EducaVial</h1>
          </div>
          <h2>Iniciar Sesión</h2>
          <div class="input-with-icon">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Correo Electrónico">
          </div>
          <div class="input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña">
          </div>
          <button>Entrar <i class="fas fa-arrow-right"></i></button>
        </form>

        <!--Registro-->
        <form action="php/registro_usuario.php" method="POST" class="formulario__register">
          <div class="logo-container">
            <div class="logo-circle">
              <i class="fas fa-car-side"></i>
              <i class="fas fa-traffic-light"></i>
            </div>
            <h1 class="logo-text">EducaVial</h1>
          </div>
          <h2>Regístrarse</h2>
          <div class="input-with-icon">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre completo" name="nombre">
          </div>
          <div class="input-with-icon">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Correo Electrónico" name="correo">
          </div>
          <div class="input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" name="contrasena">
          </div>
          <div class="input-with-icon">
            <i class="fas fa-phone"></i>
            <input type="text" placeholder="Teléfono" name="telefono">
          </div>
          <div class="input-with-icon">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" placeholder="Dirección" name="direccion">
          </div>
          <button>Regístrarse <i class="fas fa-user-plus"></i></button>
        </form>
      </div>
    </div>
  </main>

  <script src="assets/js/script.js"></script>
</body>
</html>