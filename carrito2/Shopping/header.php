
<header id="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-white border-button">
        <!-- Shopping Cart-->
        <a class="navbar-brand text-dark" href="./index_paguina.php">D&Gamez</a>
        <a href="./index_paguina.php" class="navbar ">
            <h3 class="px-5"></h3>
            <i class="fas fa-shopping-basket"></i> 
            <smap class="text-dark"> Inicio</smap>
        </a>
        <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        
        <!-- botones de Perfil y carrito  -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex m-1 nav-item">
                <a class="btn btn-outline-success " href="./configuracion_usuario/conf_usu.php">
                    <i class="bi-person-fill me-1"></i>
                    <?php echo $nombre_usuario ?>
                </a>
            </form>
            
            <div class=" d-flex navbar-nav nav-item">
                <!--  cart -->  
                <a href="./cart.php" class="nav-item nav-link active cart">
                    <i class="fas fa-shopping-cart"></i>
                    <samp class="text-dark" >Carrito</samp>

                    <?php

                    if(isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    }else{
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\"></span>";
                    }
                    ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
    
</header>
