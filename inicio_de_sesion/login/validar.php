<?php

session_start();

include("con_bd.php");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña']; 

$consulta = "SELECT * FROM usuario WHERE correo='$correo' and contraseña='$contraseña' ";

$resultado = mysqli_query($mysqli,$consulta);

$comprobacion = mysqli_num_rows($resultado);

if ($comprobacion) {
    
    $consulta = "SELECT nombreUsuario('$correo','$contraseña')";
    $resultado = mysqli_query($mysqli,$consulta);
    $row = mysqli_fetch_row($resultado);
    #print_r($row);

    $_SESSION['row'] = $row;
    $_SESSION['correo'] = $correo;
    header("location:./../../index_paguina.php");


}else{
    header("location:login.php");
    include("login.php");
}
mysqli_free_result($resultado);
mysqli_close($mysqli);

?>