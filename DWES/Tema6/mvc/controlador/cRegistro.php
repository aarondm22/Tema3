<?php

if(isset($_POST['volver'])){
    //el usuario
    $_SESSION['vista'] = $vistas['inicio'];
    require_once $vistas['layout'];
}else if(isset($_POST['registro'])){
    //usaremos libreria de validar
}else if(isset($_POST['login'])){
    
}
?>
