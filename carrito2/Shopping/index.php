<?php

//start sesion
session_start();
require_once('./CreateDb.php');
require_once('./component.php');


//create instance of Createdb class
$database = new CreateDb(dbname:'Productdb',tablename:'Producttb');

if(isset($_POST['add'])){
   ///print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], column_key:'product_id');
        print_r($item_array_id);
      
        if(in_array($_POST['product_id'],$item_array_id)){
            echo "<script>alert('El producto ha sido agregado al carrito..!')</script>";
            echo "<script>window.location ='index.php'</script>";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
</body>
</html>