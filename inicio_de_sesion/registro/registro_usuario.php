<?php

include("../login/con_bd.php");

if(isset($_POST['crear_cuenta'])){
    if(strlen($_POST['nombre']) >= 1 && 
    strlen($_POST['apellidos']) >= 1 && 
    strlen($_POST['correo']) >= 1 && 
    strlen($_POST['celular']) >= 1 && 
    strlen($_POST['contraseña']) >= 1 &&  
    strlen($_POST['confirmar_contraseña']) >= 1 ){

        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $correo = trim($_POST['correo']);
        $celular = trim($_POST['celular']);
        $contraseña = trim($_POST['contraseña']);
        $confirmar_contraseña = trim($_POST['confirmar_contraseña']);

        $consulta = "INSERT INTO usuario(nombre, apellido, correo, celular, contraseña) VALUES ('$nombre','$apellidos','$correo','$celular','$confirmar_contraseña')";

        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            ?>
            <h3> ¡Te has Inscrito correctamente! </h3>
            <?php
        } else{
            ?>
            <h3> ¡UPS a ocurrido un error! </h3>
            <?php
        }

    }else{
        ?>
        <h3> ¡Por favor completa los campos! </h3>
        <?php
    }
}
















?>