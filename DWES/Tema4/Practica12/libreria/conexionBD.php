<?php

//require_once("../segura/datosLoL.php");

function conexionBD(){
    $miConexion = new mysqli();
    @$miConexion -> connect(IP,USUARIO,PASS,BD);
    if($miConexion->connect_errno == 1049){
        //Si no consigue conectarse a la BD
        echo "<br>No existe BD<br>";
        return false;
    }else if($miConexion->connect_errno == 2002){
        //Si no consigue conectar con el servidor
        echo "<br>Error al conectar con el servidor (IP)<br>";
        return false;
    }else if($miConexion->connect_errno == 1045){
        //Si no consigue conectarse por error de autenticacion
        echo "<br>Error de autenticación (usuario/contraseña)<br>";
        return false;
    }else{
        //Si se conecta a la BBDD ya creada devuelve la conexion
        return $miConexion;
    }
}

function conexion(){
    $miConexion = new mysqli();
    @$miConexion -> connect(IP,USUARIO,PASS);
    if($miConexion->connect_errno != 0){
        return false;
    }else{
        //echo "<br>Todo ha ido de locos";
        return $miConexion;
    }
}


?>