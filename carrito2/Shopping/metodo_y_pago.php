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
      <a class="navbar-brand" href="#!">D&Gamez</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.html"><b>Inicio</b></a></li>
          <li class="nav-item"><a class="nav-link" href="/sobre_nosotros.html"><b>Sobre nosotros</b></a></li>
        </ul>

      </div>
    </div>
  </nav>
  <main class="container">
    <section>
      <h2 class="mb-3 text-center py-4">Metodo de Pago</h2>

      <div class="d-block my-3">
        
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
          <label class="custom-control-label py-1" for="credit">Tarjeta de credito</label>
        </div>

        <div class="custom-control custom-radio">
          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="debit">Tarjeta de debito</label>
        </div>

        <div class="custom-control custom-radio">
          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="paypal">PayPal</label>
        </div>

        <div class="row">

          <div class="col-md-6 mb-3">
            <label for="cc-name">Nombre de la tarjeta</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
            <div class="invalid-feedback">
              El numero de tarjeta es requerido
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="cc-number">Numero de tarjeta</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Se requiere número de tarjeta de crédito
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Fecha de vencimiento</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              La fecha de vencimiento es requerida.
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Codigo de seguridad requerido.
            </div>
          </div>

        </div>
        
      </div>
      <hr class="mb-3">

      <div class="" >
        <smp>El envio se realizara con la direccion ingresada en el momento del registro</smp>
        <p>Su direccion es: 
          <b> <?php echo $direccion ?>. </b>
        </p>
      </div>

      <button class="my-4 btn btn-primary btn-lg btn-block" type="submit">Continuar con el pago</button>
      
    </section>  
  </main>
  <script src="/js/validacion.js"></script>
</body>

</html>