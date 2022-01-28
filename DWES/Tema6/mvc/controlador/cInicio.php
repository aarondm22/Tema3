<?php

//Si se ha pulsado login
if(isset($_POST['login'])){
    $_SESSION['pagina'] = 'login';
    header('Location: index.php');
    exit();
//Si se ha pulsado logout
}else if(isset($_POST['logout'])){
    unset($_SESSION['validada']);
    session_destroy();
    header('Location: index.php');
    exit();
//Si se ha pulsado en mi perfil
}else if(isset($_POST['perfil'])){
    $_SESSION['pagina'] = 'perfil';
    header('Location: index.php');
    exit();
}else if(isset($_POST['usuarios'])){
    if($_SESSION['perfil'] == 'admini'){
        $_SESSION['pagina'] = 'perfil';
        $controlador = $controladores[$_SESSION['pagina']];
        require_once $controlador;
        exit();
    }else{
        header('Location: 403Forbidden.php');
        exit();
    }
}
//Que sea la primera vez que se entra en el login
$_SESSION['vista'] = $vistas['inicio'];
require_once $vistas['layout'];
?>