<?php

require './config/config.php';
session_start();
//Si el usuario está logeado -> inicioLogueado
if(isset($_SESSION['validada'])){
    //enviar a donde haga falta
}

//Si el usuario esta logeado y ha solicitado algo (tiene paginas)

//Si el usuario ha pedido ir al login
else{
    if(isset($_POST['login'])){
        $controlador = $controladores['login'];
        require_once $controlador;
        exit();
    }else if(isset($_POST['registro'])){
        $controlador = $controladores['registro'];
        require_once $controlador;
        exit();
    }
}

//Si el usuario entra por primera vez
$_SESSION['vista'] = $vistas['inicio'];
require $vistas['layout'];
//Prueba
//print_r(UsuarioDAO::findAll());


?>