<?php

    //Que vaya a Inicio
if(isset($_POST['volver'])){
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit();
}else if(isset($_POST['registro'])){
    //usaremos libreria de validar
    //Intentar insertar usuario nuevo


    //Que vaya al login
}else if(isset($_POST['login'])){
    $_SESSION['pagina'] = 'login';
    header('Location: index.php');
    exit();
}else{
    //que se la primera vez que entra al registro
    $_SESSION['vista'] = $vistas['registro'];
    require_once $vistas['layout'];
}
?>
