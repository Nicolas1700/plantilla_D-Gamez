
<?php

session_start();

//$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>D&Gamez</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="./../css/styles.css" rel="stylesheet" />
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="./../index_paguina.php">D&Gamez</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="./../index_paguina.php"><b>Inicio</b></a>
          </li>
          <li class="nav-item"><a class="nav-link" href="./../sobre_nosotros.html"><b>Sobre nosotros</b></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"><b>Tienda</b></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">Tienda</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#!">Articulos populares</a></li>
              <li><a class="dropdown-item" href="#!">Lo mas nuevo</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!--Resumen del pedido con precios-->
       <div class="position-absolute top-1 end-0 p-2 row col-3 col-lg-3 pt-3 border border-secondary mx-2 mt-2">
        <h5 class="text-center pb-2 ">Resumen de tu pedido</h5>
        <p class="text-star">Subtotal  </p>
        <p class="">Envio:</p>
        <p class="">TOTAL:</p>
        <!--<input class="btn btn-success mb-2 " type="submit" value="Procesar Compra">-->
        <a href="./direccion_envio.html" >
          <input class="btn btn-success mb-2 w-100" type="submit" value="Procesar Compra">
        </a>
      </div>  
      <?php 

      ?>
      <!--Informacion de todo los productos-->
      <div class="my-2">
        <div class="row col-12 col-lg-8 mx-2 p-0  my-2 mx-1">

          <div class="row col-2 col-lg-2">
            <img class=" w-100 py-3" src="../img/exposicion_de_jeans.jpg">
          </div>

          <!--Especificaciones del producto-->
          <div class="row col-12 col-lg-8 ">
            <h4 class="col-8 ">Nombre del producto: Jean </h4>
            <p class=""><b>Talla:</b> 38 </p>
            <p class=""><b>valor:</b> 40.000 $COP</p>
          </div>

          <!--Cantidad del producto-->
          <div class="container d-flex flex-row-reverse row col-12 col-lg-2 m-0">
            <!--Manejar respondive al estar en modo pequeño-->
            <!--El width es cambiarlo a 100 cuando la pantalla este por debajo de col-lg-2 -->
            <div class="dropdown row col-2 col-lg-12 d-flex flex-row-reverse w-75 mt-3 h-25 p-0">
            <select class="form-select py-2" aria-label="Default select example">
              <option selected></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            </div>
          </div>

          <!--Opcion eleiminar prodcuto-->
          <div class="bg-peligro d-flex flex-row-reverse row col-12 col-lg-12">
            <a class=" rounded p-1 col-3 btn-danger mb-2 pt-1 text-center ">
              <!--m-auto-->
              <i class=" bi bi-x-square me-1 "></i>
              Eliminar
            </a>
          </div>
        </div>
      </div>

    </div>

  </main>

</body>

</html>