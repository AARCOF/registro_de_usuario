<?php
require_once "database.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Verificar las credenciales del usuario
  $query = "SELECT * FROM usuario WHERE email='$email' AND password='$password'";
  $result = $conexion->query($query);

  if ($result->num_rows == 1) {
    $usuario = $result->fetch_assoc();

    // Iniciar sesión y guardar los datos del usuario en variables de sesión
    session_start();
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['dni'] = $usuario['DNI'];
    $_SESSION['Nombre'] = $usuario['Nombre'];
    $_SESSION['Direccion'] = $usuario['Direccion'];
    $_SESSION['Usuario'] = $usuario['Usuario'];

    // Redireccionar al index.php
    header("Location: index.php");
    exit();
  } else {
    $message = "Credenciales incorrectas. Por favor, intenta nuevamente.";
  }
}

// Cerrar la conexión
$conexion->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SSOO - Login</title>
        <link rel="icon" type="image/x-icon" href="assets/assets/favicon.ico" />
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
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/assets/mp4/bg.mp4" type="video/mp4" /></video>
    <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                <?php require 'partials/header.php' ?>

<?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
<?php endif; ?>

<h1>Iniciar sesión</h1>
<span>o <a href="signup.php">Registrar Usuario</a></span>

<form action="login.php" method="POST">
  <input name="email" type="text" placeholder="Ingrese su email">
  <input name="password" type="password" placeholder="Ingrese su contraseña">
  <input type="submit" value="Submit">
</form>
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