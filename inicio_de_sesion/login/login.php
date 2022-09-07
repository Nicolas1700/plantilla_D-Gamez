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
    <link href="./css/styles.css" type="text/css" rel="stylesheet" />

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
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-4">

                        <div id="inscripcion_incorrecta"  class="text-center my-2 d-none">
                            <samp class="text-danger bg-dark p-1 rounded"> 
                                <i class="fa-regular fa-circle-xmark"></i>
                                ¡UPS! ha ocurrido un error, vuleve a intentarlo
                            </samp>
                        </div>

                        <div class="card-header">
                            <h3 class="text-center m-3 display-5 fw-bolder">Login</h3>
                        </div>
                        <div class="row card-body">

                            <form method="post" class="form" id="formulario_validacion" action="validar.php">
                                <div class="form-box col-12 form-floating mb-3 position-relative" id="validacion_correo">
                                    <!-- Correo -->
                                    <input class="input form-control" name="correo" id="correo" type="text"
                                        placeholder="Correo" required/>
                                    <label class="input form-label" for="correo">Correo</label>

                                    <!-- Mensaje de Validacion -->
                                    <div id="validacion_correo-correcta" class="text-success d-none">¡Campo valido!</div>
                                    <div id="validacion_correo-vacio" class="text-danger d-none">¡Completa este campo!</div>
                                    <div id="validacion_correo-incorrecta" class="d-none text-danger">¡El correo debe tener la siguiente estructura, ejemplo: luiz@gmail.com!</div>

                                </div>
                                <div class="form-box col-12 form-floating mb-3 position-relative" id="validacion_contraseña">
                                    <!-- Contraseña -->
                                    <input class="input form-control" name="contraseña" id="contraseña" type="password"
                                        placeholder="Contraseña" required />
                                    <label class="form-label" for="contraseña">Contraseña</label>
                                    <!-- Mensaje de Validacion -->
                                    <div id="validacion_contraseña-correcta" class="text-success d-none">¡Campo valido!</div>
                                    <div id="validacion_contraseña-vacio" class="text-danger d-none">¡Completa este campo!</div>
                                    <div id="validacion_contraseña-incorrecta" class="d-none text-danger">¡La contraseña debe tener entre 4 y 12 caracteres!</div>
                                    
                                </div>

                                <div class="d-grid gap-1">
                                    <input type="submit" name="logn" id="submit-btn" class="btn btn-primary"                                    
                                    value="Login"
                                    >
                                </div>
                                <div class="text-center m-4 mb-0">
                                    <a class="small" href="./../password.html">¿Olvidaste la contraseña?</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="./../../inicio_de_sesion/registro/registro.php">¿No tienes una cuenta? ¡Crea una cuenta!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-2 bg-light mt-4">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    -->
    <script src="./../../js/validacion.js"></script>
    <script src="./../../js/evitar_reenvio.js"></script>
    <script src="https://kit.fontawesome.com/1c7fd3bbff.js" crossorigin="anonymous"></script>

</body>

</html>