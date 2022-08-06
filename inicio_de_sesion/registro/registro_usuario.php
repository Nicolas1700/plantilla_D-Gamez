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

        $consulta = ("CALL reg_usuario ('$nombre','$apellidos','$celular','$correo','$contraseña')");

        $resultado = mysqli_query($mysqli,$consulta);

        if($resultado){
            
            header("location:registro.php?registro=1");

        } else{
            
            header("location:registro.php?registro=false");

        }
        
        mysqli_close($mysqli);

    }else{
        ?>
        <h3> ¡Por favor completa los campos! </h3>
        <?php

    }
}
















?>