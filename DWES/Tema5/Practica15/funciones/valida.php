<?php
    //validamos el formulario y ponemos los errores
    require_once("./consultas.php");
    require_once ("./conexionBD.php");
    session_start();
    $user = $_SESSION['nombre'];
    $pass = $_SESSION['pass'];

    //Validar si el usuario es correcto y su contraseña también
    if(valida($user,$pass)){
        header("Location: ../sesionvalidada/sesion.php");
    }else{
        echo "Error usuario/contraseña no válido";
    }
?>