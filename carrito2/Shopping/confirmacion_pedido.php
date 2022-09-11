<?php

session_start();
// require_once("././../../inicio_de_sesion/login/validar.php");
include("./../../inicio_de_sesion/login/con_bd.php");

$correo = $_SESSION['correo'];
$contrasena = $_SESSION['contrasena'];

//Obtener id y direcion del usuario 
$consulta_3 = "SELECT id_usuario, direccion FROM `usuario` WHERE correo = '$correo' AND contrasena = '$contrasena' ";
$resultado = mysqli_query($mysqli,$consulta_3);
$datos = mysqli_fetch_array($resultado);

//El id del usuario
$id = $datos['id_usuario'];
//la direccion del usuario
$direccion = $datos['direccion'];

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
      <h2 class="mb-3 text-center py-3">Confirmacion de pago</h2>
      
        <div class="row text-center mb-3">
          
          <mark><h4 class="text-danger">!Aclaramos la siguiente informacion¡</h4></mark>
        
        </div>

      <div class="container p-3">
        <ol class="lead">
          
          <li>El <b>pago</b> se realizará por medio de <b>contra entrega.</b></li>
          
          <li>El <b>envío</b> sera realizado de <b>1 a 5 dias habiles.</b></li>

          <li>El envio se realizara por medio de la direccion ingresada en el momento de su registro.</li>
          <p>La direccion es:  <b> <?php echo $direccion ?>. </b>. </p>

          <li>La <b>factura</b> sera entregada al momento de realizar el pago contra entrega.</li>
        </ol>

      </div>

      <form class="d-flex justify-content-center">
        <button class="d-flex justify-content-center w-50 my-4 btn btn-primary btn-lg btn-block">
        <a href="./pedido.php" class="text-decoration-none text-light w-100"> Confirmar 
          <?php 
            
            /* Enviar por correo el pedido a la empresa
            El correo es: 
            La clave es:  
            */
            // Fecha 
            date_default_timezone_set("America/Bogota");
            $fecha_actual = date('Y-m-d');
            echo $fecha_actual;
            $consulta_4 = "INSERT INTO pedidos (id_usuario, fecha) VALUES ('$id','$fecha_actual')";
            $resultado = mysqli_query($mysqli,$consulta_4);

            mysqli_close($mysqli);
            ?>
          </a>

          </button>
      </form>
      
    </section>  
  </main>
  <script src="/js/validacion.js"></script>
</body>

</html>