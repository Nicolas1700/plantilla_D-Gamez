<?php

session_start();

require_once("./CreateDb.php");
require_once("./component.php");
include("./../../inicio_de_sesion/login/con_bd.php");

$row = $_SESSION['row'];
$nombre_usuario = implode("",$row);
$correo = $_SESSION['correo'];
$contrasena = $_SESSION['contrasena'];

$db = new CreateDb(dbname: "pre_proyecto_sena", tablename: "Producttb");


// Remover producto
if(isset($_POST['remove'])){

   if($_GET['action']=='remove'){
    
       foreach($_SESSION['cart'] as $key =>$value){

           print_r("EL valor de key es: " . $key);

           if($value["product_id"] == $_GET['id']){

               unset($_SESSION['cart'][$key]);
               echo"<script>alert('El producto ha sido eliminado...!')</script>";
               echo"<script>window.location = './cart.php'</script>";
           }
       }
   }
}

//Obtener id del usuario 
$consulta = "SELECT id_usuario FROM `usuario` WHERE correo = '$correo' AND contrasena = '$contrasena' ";
$resultado = mysqli_query($mysqli,$consulta);
$datos = mysqli_fetch_array($resultado);

//El id del usuario
$id_usuario = $datos['id_usuario'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D&Gamez</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
<?php
require_once('./header.php');
?>

<div class="conatainer-fluid">
    <div class="row px-5">

            <div class="container col-md-7">
                <div class="shopping-cart">
                    <h3 class="text-center my-2 pb-2">Carrito de compras</h3>
                    <hr>
                <?php

                $total = 0;

                if (isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'],column_key:'product_id');

                    $result = $db->getDate();

                    $nombre_producto = array();

                    while ($row = mysqli_fetch_assoc($result)){                
                        foreach ($product_id as $id){
                            if ($row['id']== $id){
                                cartElement($row['product_image'],$row['product_name'],$row['product_price'], $row['id']);
                                $total = $total + (int)$row['product_price'];

                                array_push($nombre_producto, $row['product_name']);
                            }
                        }
                    }
                    $_SESSION['nombre_producto'] = $nombre_producto;

                }else{
                    echo"<h5>Cart is Empty</h5>";
                }

                ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="p-4">

                    <h4>Detalle de precios</h4>
                    <hr>

                    <div class="row price-details">

                        <div class="col-md-6">
                            <?php
                            if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);

                                if($count > 1 ){
                                    echo"<h6>Precio ($count productos)</h6>";    
                                }else{
                                    echo"<h6>Precio ($count producto)</h6>";
                                }
                                
                            }else{
                                echo"<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Gastos de envio</h6>
                            <hr>
                            <h6>Cantidad a pagar</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>$<?php echo $total;?></h6>
                            <h6 class="text-success">Gratis</h6>
                            <hr>
                            <h6> $ <?php echo $total?> </h6>
                        </div>

                    </div>
                        <button class="w-100" type="submit" onclick="registrar_pedido()">

                            <a class="text-decoration-none"href="./confirmacion_pedido.php"> Continuar con el pago 
                        
                                <?php 

                                date_default_timezone_set('America/Bogota');
                                $fecha = date('d-m-y');

                                $venta_confirmada = 0;
                                $consulta_2 = "INSERT INTO detalle_venta (id_usuario,precio_final,venta_confirmada) VALUES ($id_usuario,$total,$venta_confirmada)";
                                $resultado = mysqli_query($mysqli,$consulta_2);

                                mysqli_close($mysqli)
                                ?>
                                
                            </a>
                        </button>
                    
                    
                </div>
            </div>
        
    </div>
</div>

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

