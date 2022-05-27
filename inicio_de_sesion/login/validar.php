<?php

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña']; 

session_start();
$_SESSION['correo'] = $correo;


include("con_bd.php");

$consulta = "SELECT * FROM usuario WHERE correo='$correo' and contraseña='$contraseña' ";

$resultado = mysqli_query($conexion,$consulta);

$comprobacion=mysqli_num_rows($resultado);

if ($comprobacion) {
    header("location:./../../index.html");
}else{
    include("login.php");
    ?>
    <h1>Eror en la autentificacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>