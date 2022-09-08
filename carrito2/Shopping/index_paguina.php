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
        //print_r($item_array_id);
      
        if(in_array($_POST['product_id'],$item_array_id)){
            echo "<script>alert('El producto ha sido agregado al carrito..!')</script>";
            echo "<script>window.location ='index_paguina.php'</script>";
        }else{
           $count=count($_SESSION['cart']);
           $item_array = array(
            'product_id'=> $_POST['product_id'] 
        );
        $_SESSION['cart'][$count]= $item_array;
        //print_r($_SESSION['cart']);
        }
    }else{

        $item_array = array(
            'product_id'=> $_POST['product_id'] 
        );

        //create new session variable
        $_SESSION['cart'][0]=$item_array;
        //print_r($_SESSION['cart']);
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
    <?php require_once("./header.php");?>
    <!-- Header-->
    <header class="bg-dark py-4">
        <div class="container px-2 px-lg-5 my-5">
            <div class="text-center text-white ">
                <h1 class="display-4 fw-bolder ">Jeans para caballero</h1>
                <p class="lead fw-bold text-white mb-0 ">¡Estilo y elegancia en todo momento!</p>
            </div>
        </div>
    </header>
    
    <main>
        <div class="container">
            <div class="row text-center py-5">
            
            <?php
            $result = $database->getDate();
            while ($row ='mysqli_fetch_assoc'($result)){
                component($row['product_name'],$row['product_price'],$row['product_image'],$row['id'] );
            }?>

            </div> 
        </div>
    </main>
    <script src="./js/custom.js"></script>

</body>

</html>