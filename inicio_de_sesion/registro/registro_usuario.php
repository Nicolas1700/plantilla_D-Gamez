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
        $celular = trim($_POST['celular']);
        $correo = trim($_POST['correo']);
        $contraseña = trim($_POST['contraseña']);
        $confirmar_contraseña = trim($_POST['confirmar_contraseña']);

        $conexion->query("CALL registrar_usuarios('$nombre','$apellidos','$celular','$correo','$confirmar_contraseña')");
        
        if($conexion){
            ?>
            <h3 class="alert" > ¡Te has Inscrito correctamente! </h3>
            <?php
        } else{
            ?>
            <h3> ¡UPS a ocurrido un error! </h3>
            <?php
        }
        $conexion->close();

    }else{
        ?>
        <h3> ¡Por favor completa los campos! </h3>
        <?php

    }
}
















?>