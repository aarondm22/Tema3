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
}else if(isset($_POST['usuarios'])){
    if($_SESSION['perfil'] == 'admini'){
        $_SESSION['vista'] = $vistas['listaUsuarios'];
        $lista = UsuarioDAO::findAll();
        require_once $vistas['layout'];
        exit();
    }
}else if(isset($_GET['usuarios'])){
    if($_SESSION['perfil'] == 'admini'){
        $codUsuario = $_GET['mostrar'];
        $usuario = UsuarioDAO::findById($codUsuario);
        $_SESSION['vista'] = $vistas['perfil'];
        require_once $vistas['layout'];
    }
}else{
    //Suponiendo que es mi perfil
    $usuario = new Usuario($_SESSION['codUsuario'], $_SESSION['nombre'], '', $_SESSION['perfil']);
    $_SESSION['vista'] = $vistas['perfil'];
    require_once $vistas['layout'];
}

?>