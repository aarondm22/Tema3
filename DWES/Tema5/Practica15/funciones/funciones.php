<?php

function entrar(){
    return isset($_REQUEST['entrar']);
}

function validaUser(){
    if(entrar()&&empty($_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Debe haber un nombre </label>";
        return false;
    } 
    return true;
}

function validaPass(){
    if(entrar()&&empty($_REQUEST['pass'])){
        echo "<label for='nombre' style='color: red'>Debe haber una contraseña </label>";
        return false;
    } 
    return true;
}

function validaLogin(){
    if(validaUser()&&validaPass()){
        return true;
    }
}

?>