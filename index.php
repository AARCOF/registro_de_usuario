<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SISTEMAS OPERATIVOS</title>
    <link rel="icon" type="aimage/x-icon" href="assets/assets/logoIcon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
  </head>
  <body>
  <?php require 'partials/header.php'; ?>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/assets/mp4/bg.mp4" type="video/mp4" /></video>
    <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                <?php
    session_start(); // Iniciar la sesión

    // Verificar si el usuario ha iniciado sesión
    if (isset($_SESSION['email'])) {
      $email = $_SESSION['email'];
      $dni = $_SESSION['dni'];
      $Direccion = $_SESSION['Direccion'];
      $Nombre = $_SESSION['Nombre'];
      $Usuario = $_SESSION['Usuario'];

      echo "<br> Bienvenido  $Usuario";
      echo "<br> Tu nombre es: $Nombre";
      echo "<br> Tu DNI es: $dni";
      echo "<br> Tu correo es: $email";
      echo "<br> Tu direccion es: $Direccion";

      echo "<br>Usted ingreso la sesión correctamente";
      echo "<br><a href='logout.php'>Cerrar Sesión</a>";
    } else {
      echo "<h1>Por favor Inicia sesión o Registrate</h1>";
      echo "<a href='login.php'>Iniciar sesión</a> o <a href='signup.php'>Registrar Usuario</a>";
    }
    ?>
                </div>
            </div>
        </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>
    
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
