<?php

session_start();

include("./inicio_de_sesion/login/con_bd.php");

# Nombre usuario
$row = $_SESSION['row'];
$nombre_usuario = implode("",$row);

# Consulta sobre los productos existentes 
$consulta = "SELECT * FROM `producto`";
$resultado = mysqli_query($mysqli,$consulta);

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
    <link href="./css/styles.css" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Load Bootstrap -->
    <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
              integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
              crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
                crossorigin="anonymous">
    </script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" 
                integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" 
                crossorigin="anonymous">
    </script>


</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="./index_paguina.php">D&Gamez</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="./index_paguina.php"><b>Inicio</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="./sobre_nosotros.html"><b>Sobre nosotros</b></a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><b>Tienda</b></a>
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
                <form class="d-flex m-1 nav-item">
                    <a class="btn btn-outline-success " href="./configuracion_usuario/conf_usu.php">
                        <i class="bi-person-fill me-1"></i>
                        <?php echo $nombre_usuario ?>
                    </a>
                </form>
                <form class="d-flex m-1 nav-item">
                    <a class="btn btn-outline-dark mx-3" href="./carrito/detalle_de_venta.php">
                        <i class="bi-cart-fill me-1"></i>
                        <button class="badge bg-dark text-white ms-1 rounded-pill">0</button>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-4">
        <div class="container px-2 px-lg-5 my-5">
            <div class="text-center text-white ">
                <h1 class="display-4 fw-bolder ">Jeans para caballero</h1>
                <p class="lead fw-bold text-white mb-0 ">¡Estilo y elegancia en todo momento!</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> 
                <?php while($productos = mysqli_fetch_array($resultado)): ?>
                <!-- Producto completo -->
                <div class="col mb-5 allContainerCart"> 
                    <!-- Poner foreach segun la cantidad de prouctos en PHP  -->
                    <div class="card h-100">
                            <!-- Product image --> 
                            <img class="card-img-top" src="./img/exposicion_de_jeans.jpg" alt="..." />
                            <!-- Product details -->
                            <div class="card-body p-4 dettalle_producto">
                                <div class="text-rigth">
                                    <!-- Product name -->
                                    <p> <b> Tipo de jean: </b> <?php echo $productos['tipo_jean']; ?> </p>
                                    <!-- Product price -->
                                    <p> <b> Talla: </b> <?php echo $productos['talla'] ?> </p>
                                    <p> <b> Color: </b> <?php echo $productos['color'] ?> </p>
                                    <p class="text-center"> <b> Precio: </b> <?php echo $productos['precio'] ?> </p>
                                    <!--<p>ID = <?php //echo $productos['id_producto']?> </p>-->
                                </div>
                            </div>
                            <!-- Product actions -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button  name="addCar" class="btn btn-outline-dark mt-auto btc_form"
                                    href="index_paguina.php?name=true&id=<?php echo $productos['id_producto']?>" >
                                    Añadir al carrito
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>

    <script src="./js/custom.js"></script>

</body>

</html>