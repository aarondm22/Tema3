<?php
    //validamos el formulario y ponemos los errores
    if(!true){
        header("Location: ../sesion/login.php");
        exit;
    }

    //Validar si existe el usuario en la BD
    require_once("../segura/datosTienda.php");
    require_once("./consultas.php");
    $user = $_REQUEST['nombre'];
    $pass = $_REQUEST['pass'];

    if(valida($user,$pass)){
        //inicio sesion
        header("Location: ../sesionvalidada/sesion.php");
        exit;
    }else{
        //Cambiar a la pagina de login y manejar el error
        echo "Ha habido un error en el Login";
    }
?>