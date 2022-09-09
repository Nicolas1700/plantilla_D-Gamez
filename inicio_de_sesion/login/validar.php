<?php

session_start();

include("con_bd.php");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña']; 

$consulta = "SELECT * FROM usuario WHERE correo='$correo' and contrasena='$contraseña' ";

$resultado = mysqli_query($mysqli,$consulta);

$comprobacion = mysqli_num_rows($resultado);

if ($comprobacion) {
    
    $consulta2 = "SELECT nombreUsuario('$correo','$contraseña')";
    $resultado = mysqli_query($mysqli,$consulta2);
    $row = mysqli_fetch_row($resultado);
    #print_r($row);
    
    $_SESSION['correo'] = $correo;
    // Si guarda la contraseña
    $_SESSION['contrasena'] = $contraseña;
    // $_SESION['id_usuario'] = $
    $_SESSION['row'] = $row;

    header("location:./../../carrito2/Shopping/index_paguina.php");

}else{

   header("location:login.php");

}

mysqli_free_result($resultado);
mysqli_close($mysqli);

?>