<?php
/* Tabla usuiario*/
session_start();
include("./../../inicio_de_sesion/login/con_bd.php");
# Nombre usuario
$row = $_SESSION['row'];
$nombre_usuario = implode("",$row);

/* Tabla producto */

//start sesion

require_once('./CreateDb.php');
require_once('./component.php');


//create instance of Createdb class
$database = new CreateDb(dbname:'pre_proyecto_sena',tablename:'Producttb');

if(isset($_POST['add'])){
   ///print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], column_key:'product_id');
        print_r($item_array_id);
      
        if(in_array($_POST['product_id'],$item_array_id)){
            echo "<script>alert('El producto ha sido agregado al carrito..!')</script>";
            echo "<script>window.location ='index_paguina.php'</script>";
        }else{
           $count=count($_SESSION['cart']);
           $item_array = array(
            'product_id'=> $_POST['product_id'] 
        );
        $_SESSION['cart'][$count]= $item_array;
        print_r($_SESSION['cart']);
        }
    }else{

        $item_array = array(
            'product_id'=> $_POST['product_id'] 
        );

        //create new session variable
        $_SESSION['cart'][0]=$item_array;
        print_r($_SESSION['cart']);
    }
}


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
    
    <!-- Link de estilos de productos -->
    <link rel="stylesheet" href="./style.css">

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
              integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
              crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Load Bootstrap -->
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
    <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    </nav>-->
    <!-- Header-->
    <!--<header class="bg-dark py-4">
        <div class="container px-2 px-lg-5 my-5">
            <div class="text-center text-white ">
                <h1 class="display-4 fw-bolder ">Jeans para caballero</h1>
                <p class="lead fw-bold text-white mb-0 ">¡Estilo y elegancia en todo momento!</p>
            </div>
        </div>
    </header>-->
    
    <?php require_once("./header.php");?>

    <div class="container">
        <div class="row text-center py-5">
        
        <?php
        $result = $database->getDate();
        while ($row ='mysqli_fetch_assoc'($result)){
            component($row['product_name'],$row['product_price'],$row['product_image'],$row['id'] );
        }?>

        </div> 
    </div>

    <script src="./js/custom.js"></script>

</body>

</html>