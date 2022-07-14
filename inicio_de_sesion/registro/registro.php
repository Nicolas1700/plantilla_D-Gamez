<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>D&Gamez</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./../css/styles.css" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-secundary">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="./../../index.html">D&Gamez</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="./../../index.html"><b>Inicio</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="./../../sobre_nosotros.html"><b>Sobre nosotros</b></a></li>
                </ul>
            </div>
    </nav>
    <!-- Header-->
    <header class="container">
        <div class="">
            <h1 class="m-1 text-center display-5 fw-bolder">Registro </h1>
            <p class="m-3 text-center lead"><b>En esta parte encontrara la informacion que debe completar para realizar
                    su respectivo registro</b></p>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-body my-0">

                        <form method="post" class="form" action="registro_usuario.php" id="formulario_validacion" >
                            <div class="row mb-3">
                                <!-- NOMBRE -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <!--Nombre-->
                                        <input class="input form-control position-relative" name="nombre" id="nombre"
                                            type="text" placeholder="Nombres" required />
                                        <label class="form-label" for="nombre">Nombres</label>

                                        <!-- Mensaje de validacion -->
                                        <div id="validacion_nombre-correcta" class="text-success d-none">¡Campo valido!
                                        </div>
                                        <div id="validacion_nombre-vacio" class="text-danger d-none">¡Completa este
                                            campo!</div>
                                        <div id="validacion_nombre-incorrecta" class="d-none text-danger">¡El nombre
                                            solo puede contener letras"</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Apellido -->
                                    <div class="form-floating">
                                        <input class="input form-control" name="apellidos" id="apellidos" type="text"
                                            placeholder="apellidos" required />
                                        <label class="form-label" for="apellidos">Apellidos</label>
                                        <!-- Mensaje de validacion -->
                                        <div id="validacion_apellidos-correcta" class="text-success d-none">¡Campo
                                            valido!</div>
                                        <div id="validacion_apellidos-vacio" class="text-danger d-none">¡Completa este
                                            campo!</div>
                                        <div id="validacion_apellidos-incorrecta" class="d-none text-danger">¡Introduce
                                            2 apellidos!</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Correo -->
                            <div class="col-md-12 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="input form-control" name="correo" id="correo" type="email"
                                        placeholder="Correo" required />
                                    <label class="form-label" for="correo">Correo</label>
                                    <!-- Mensaje de validacion -->
                                    <div id="validacion_correo-correcta" class="text-success d-none">¡Campo valido!
                                    </div>
                                    <div id="validacion_correo-vacio" class="text-danger d-none">¡Completa este campo!
                                    </div>
                                    <div id="validacion_correo-incorrecta" class="d-none text-danger">¡El correo debe
                                        tener la siguiente estructura, ejemplo: luiz@gmail.com!</div>
                                </div>
                            </div>
                            <!-- Numero de celular -->
                            <div class="col-md-12 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="input form-control" name="celular" id="celular" type="text"
                                        placeholder="celular" required />
                                    <label class="form-label" for="correo">Numero de celular</label>
                                    <!-- Mensaje de validacion -->
                                    <div id="validacion_celular-correcta" class="text-success d-none">¡Campo valido!
                                    </div>
                                    <div id="validacion_celular-vacio" class="text-danger d-none">¡Completa este campo!
                                    </div>
                                    <div id="validacion_celular-incorrecta" class="d-none text-danger">¡El capo solo
                                        puede contener numero debe tener entre 10 y 13 digitos!</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- contraseña -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="input form-control" name="contraseña" id="contraseña"
                                            type="password" placeholder="Contraseña" required />
                                        <label class="form-label" for="contraseña">Contraseña</label>
                                        <!-- Mensaje de validacion -->
                                        <div id="validacion_contraseña-correcta" class="text-success d-none">¡Campo
                                            valido!</div>
                                        <div id="validacion_contraseña-vacio" class="text-danger d-none">¡Completa este
                                            campo!</div>
                                        <div id="validacion_contraseña-incorrecta" class="d-none text-danger">¡La
                                            contraseña debe tener entre 4 y 12 caracteres!</div>
                                    </div>
                                </div>
                                <!-- confirmar contraseña -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="confirmar_contraseña"
                                            id="confirmar_contraseña" type="password" placeholder="Confirmar contraseña"
                                            required />
                                        <label class="form-label" for="confirmar_contraseña">Confirmar
                                            contraseña</label>
                                        <!-- Mensaje de validacion -->
                                        <div id="validacion_confirmar_contraseña-correcta" class="text-success d-none">
                                            ¡Campo valido!</div>
                                        <div id="validacion_confirmar_contraseña-vacio" class="text-danger d-none">
                                            ¡Completa este campo!</div>
                                        <div id="validacion_confirmar_contraseña-incorrecta" class="d-none text-danger">
                                            Ambas contraseñas deben ser iguales</div>
                                    </div>
                                </div>
                            </div>
                            <!-- boton crear cuenta -->
                            <div class="d-grid gap-1"">
                                <input type="submit" name="crear_cuenta" id="submit-btn" class="btn btn-primary" value="Crear_cuenta">
                            </div>
                        </form>
                        <?php
                            include("registro_usuario.php");
                        ?>
                    </div>
                    <div class="card-footer text-center py-2">
                        <div class="small"><a href="./../login/login.php">¿Ya tienes una cuenta? Inicia sesion</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./../../js/validacion.js"></script>
    <script src="./../../js/evitar_reenvio.js"></script>
</body>

</html>