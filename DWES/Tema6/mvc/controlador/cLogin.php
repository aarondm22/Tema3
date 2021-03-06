<?php

//Si se ha pulsado el registro
if(isset($_POST['registro'])){
    $_SESSION['pagina'] = 'registro';
    header('Location: index.php');
    exit();
//Que haya rellenado los campos y verifica si existe el usuario
}else if(isset($_POST['iniciar'])){
    //Validar que hay datos en los input
    $todoOK = true;
    //llamamos al valida y retorna true/false
    if($todoOK){
        $user = $_POST['nombre'];
        $pass = $_POST['pass'];
        $pass = hash("SHA256", $pass);

        $usuario = UsuarioDAO::validaUsuario($user,$pass);
        if($usuario != null){
            //existe el usuario
            $_SESSION['validada'] = true;
            $_SESSION['codUsuario'] = $usuario->codUsuario;
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['perfil'] = $usuario ->perfil;
            $_SESSION['pagina'] = 'inicio';
            header('Location: index.php');

        }else{
            $_SESSION['mensaje'] = "No existe el usuario o contraseña";
            $_SESSION['vista'] = $vistas['login'];
            require_once $vistas['layout'];
        }
    }
//Que vuelva al Inicio
}else if(isset($_POST['volver'])){
    //el usuario
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit();

//Que sea la primera vez que se entra en el Login
}else{
    $_SESSION['vista'] = $vistas['login'];
    require_once $vistas['layout'];
}


?>