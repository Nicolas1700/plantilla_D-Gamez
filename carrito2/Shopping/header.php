
<header class="container" id="">
    <nav class="d-flex navbar navbar-expand-lg navbar-dark bg-white border-button container">

        <!-- Shopping Cart-->
        <a class="navbar-brand text-dark" href="./index_paguina.php">D&Gamez</a>

        <a href="./index_paguina.php" class="navbar px-3 nav-link text-dark">
            <i class="fas fa-shopping-basket"></i>
            <samp>Inicio</samp>
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
        
        <a class="navbar-nav d-flex justify-content-star ">
            <samp class="">
                <a class="nav-link text-dark w-50" href="./../../sobre_nosotros.html">Sobre nosotros</a>
            </samp>
        </a>

        
        <!-- botones de Perfil y carrito  -->
        <div class="d-flex justify-content-end collapse navbar-collapse mx-2" id="navbarSupportedContent">
            
            <div class="d-flex m-1 nav-item">
                <a class="btn btn-outline-success" href="./configuracion_usuario/conf_usu.php">
                    <i class="bi-person-fill me-1"></i>
                    <samp><?php echo $nombre_usuario ?></samp>
                </a>
            </div>
            
            <div class="d-flex justify-content-end collapse rounded mx-1 nav-item">
                <a  class="btn btn-outline-primary" href="./cart.php" >
                    <i class="fas fa-shopping-cart"></i>
                    <samp class="text-dark w-100">Carrito</samp>

                    <?php

                    if(isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    }else{
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\"></span>";
                    }
                    ?>
                    
                </a>
            </div>
        </div>

    </nav>
    
</header>
