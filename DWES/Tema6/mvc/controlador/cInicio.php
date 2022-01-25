<?php

//Si se ha pulsado login
if(isset($_POST['login'])){
    $_SESSION['pagina'] = 'login';
    header('Location: index.php');
    exit();
}

//Que sea la primera vez que se entra en el login
$_SESSION['vista'] = $vistas['inicio'];
require_once $vistas['layout'];
?>