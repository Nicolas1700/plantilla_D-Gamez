<?php

session_start();

include('./../../inicio_de_sesion/login/con_bd.php');
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

$correo = $_SESSION['correo'];
$contrasena = $_SESSION['contrasena'];

//Obtener id y direcion del usuario 
$consulta = "SELECT nombre, apellido, direccion  FROM `usuario` WHERE correo = '$correo' AND contrasena = '$contrasena' ";
$resultado = mysqli_query($mysqli,$consulta);
$datos = mysqli_fetch_array($resultado);

//El nombre del usuario
$nombre = $datos['nombre'];
$apellidos = $datos['apellido'];

$nombre_usuario = $nombre ." ". $apellidos;
//la direccion del usuario
$direccion = $datos['direccion'];

$nombre_producto = $_SESSION['nombre_producto'];
$nombre_producto = implode(", ",$nombre_producto);
$mensaje = "El pedido generado tiene asignado los productos: " . $nombre_producto . 
" de la persona se llama ".$nombre_usuario." y su direccion es : " . $direccion ;

$mail = new PHPMailer();

try {
  //Server settings
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'dgamezdd@gmail.com';                   //SMTP username
  $mail->Password   = 'jiuqxlugynvsdfut';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Del correo que se va a enviar --> al que le va a llegar
  $mail->setFrom('dgamezdd@gmail.com', 'Sitio Web');
  $mail->addAddress('dgamezdd@gmail.com');

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Se ha generado un pedido';
  $mail->Body    =  $mensaje;

  $mail->send();
  echo 'Se envio el correo';
} catch (Exception $e) {
  echo "No se envio el correo. Mailer Error: {$mail->ErrorInfo}";
}

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
      <div  class="">

        <h2 class="mb-3 text-center py-3 w-100">Felicidades...<i class="bi bi-check-circle-fill text-success"></i></h2>

        <h5 class="text-center m-3 w-100 p-2 ">
          Se ha generado correctamente el pedido, <br>
          ¡Nuestro equipo estara realidado el proceso de envío!
        </h5>
        <div class="d-flex justify-content-center p-3">
          <button class=" btn btn-outline-success m-2 text-center  w-50">
          <a class="text-decoration-none text-info " href="">Volver al menu de inicio</a>
          </button>
        </div>

      </div>
      
    </section>  
  </main>
  <script src="/js/validacion.js"></script>
</body>

</html>