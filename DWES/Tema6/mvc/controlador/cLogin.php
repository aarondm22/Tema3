<?php

//Si se ha pulsado el registro
if(isset($_POST['registro'])){
    $_SESSION['vista'] = $vistas['registro'];
    require_once $vistas['layout'];

//Que haya rellenado los campos y verifica si existe el usuario
}else if(isset($_POST['iniciar'])){

//Que vuelva al Inicio
}else if(isset($_POST['volver'])){
    //el usuario
    $_SESSION['vista'] = $vistas['inicio'];
    require_once $vistas['layout'];

//Que sea la primera vez que se entra en el Login
}else{
    $_SESSION['vista'] = $vistas['login'];
    //Mostrar la vista del layout
    require_once $vistas['layout'];
}


?>