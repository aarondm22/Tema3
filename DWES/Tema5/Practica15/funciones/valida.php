<?php
    //validamos el formulario y ponemos los errores
    if(!true){
        header("Location: ../login.php");
        exit;
    }

    //Validar si existe el usuario en la BD
    require_once("../seguro/datosBD.php");
    require_once("../funciones/consultas.php");
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    if(valida($user,$pass)){
        //inicio sesion
        header("Location: ../paginas/menu.php");
        exit;
    }
?>