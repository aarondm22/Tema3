<?php


//Si se ha pulsado logout
if(isset($_POST['logout'])){
    unset($_SESSION['validada']);
    session_destroy();
    header('Location: index.php');
    exit();
//Si se ha pulsado a volver, vuelve al Inicio
}else if(isset($_POST['volver'])){
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit();
    //Al modificar vuelve a la misma página pero con los datos nuevos
}else if(isset($_POST['modificar'])){
    //Validar que se ha modificado correctamente
    $todoOk = true;
    
    if($todoOk){

    }
}else{
    $_SESSION['vista'] = $vistas['perfil'];
    require_once $vistas['layout'];
}

?>

