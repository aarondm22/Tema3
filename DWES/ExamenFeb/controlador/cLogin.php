<?php
//Que haya rellenado los campos y verifica si existe el usuario
if(isset($_POST['iniciar'])){
    //Validar que hay datos en los input
    
    //llamamos al valida y retorna true/false
    if(validaLogin()){
        $user = $_POST['nombre'];
        $pass = $_POST['pass'];

        $usuario = UsuarioDAO::validaUsuario($user,$pass);
        if($usuario != null){
            //existe el usuario
            $_SESSION['validada'] = true;
            $_SESSION['id'] = $usuario->id;
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['perfil'] = $usuario ->perfil;
            $_SESSION['pagina'] = 'layout';
            header('Location: index.php');

        }else{
            $_SESSION['mensaje'] = "No existe el usuario o contraseña";
            $_SESSION['vista'] = $vistas['login'];
            require_once $vistas['login'];
        }
    }
//Que sea la primera vez que se entra en el Login
}else{
    $_SESSION['vista'] = $vistas['login'];
    require_once $vistas['login'];
}


?>