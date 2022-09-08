<?php

function component($Productname, $Productprice, $Productimg, $productid){


$element = '

<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form action="index_paguina.php" method="post">
    <div class="card shadow">
        <div>
            <img src="'.$Productimg.'" alt="Image1" class="img-fluid card-img-top">
        </div>
        <div class="card-body">
            <h5 class="card-title">'.$Productname.'</h5>
            <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
                Caracteristicas: 
            </p>
            <h5>
                <small><s class="text-secondary">$70.000</s></small>
                <span class="price">'.$Productprice.'</span>
            </h5>
            <input type="hidden"name="product_id"value='.$productid.'>

            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>

        </div>
    </div>
</form>
</div>

';

echo $element;
}

function cartElement($Productimg, $Productname, $Productprice, $productid){
    $element = '
    
    <form action="./cart.php?action=remove&id='.$productid.'" method="post" class="cart-items d-flex">
                       <div class="container border rounded ">
                           <div class="row bg-white ">
                                <!-- Imagen producto -->
                               <div class="col-md-3 pl-0 col-4 ">
                                   <img src="'.$Productimg.'" alt="Image1" class="img-fluid w-100">
                               </div>
                               <!-- Descripción producto -->
                               <div class="col col-md-6 ">
                                    <div>
                                        <h5 class="pt-2">'.$Productname.'</h5>
                                        <small class="text-secondary">Descripción: Poner</small>
                                        <h5 class="pt-2">'.$Productprice.'</h5>
                                   </div>
                                </div>
                                <!--Boton borrar -->
                                <div class="row justify-content-end" >
                                    <button type="submit" class=" btn btn-danger w-25 col-8 mb-3 " name="remove">Borrar</button>
                                </div>
                           </div>
                       </div>
                   </form>
    
                   ';
    echo $element;
   }
   
?>





















