<?php

session_start();
// require_once("././../../inicio_de_sesion/login/validar.php");
include("./../../inicio_de_sesion/login/con_bd.php");

$correo = $_SESSION['correo'];
$contrasena = $_SESSION['contrasena'];

//Obtener id y direcion del usuario 
$consulta = "SELECT id_usuario, direccion FROM `usuario` WHERE correo = '$correo' AND contrasena = '$contrasena' ";
$resultado = mysqli_query($mysqli,$consulta);
$datos = mysqli_fetch_array($resultado);

//El id del usuario
$id = $datos['id_usuario'];
//la direccion del usuario
$direccion = $datos['direccion'];

mysqli_free_result($resultado);
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="/css/styles.css" rel="stylesheet" />

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="./index_paguina.php">D&Gamez</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index_paguina.php"><b>Inicio</b></a></li>
          <li class="nav-item"><a class="nav-link" href="./../../sobre_nosotros.html"><b>Sobre nosotros</b></a></li>
        </ul>

      </div>
    </div>
  </nav>
  <main class="container">
    <section class="container">
      <h2 class="mb-3 text-center py-3">Felicidades...</h2>
      
      
    </section>  
  </main>
  <script src="/js/validacion.js"></script>
</body>

</html>