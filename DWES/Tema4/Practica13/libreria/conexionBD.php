<?php

//require_once("../segura/datosLoL.php");
function conexionPDO(){
    $dsn = "mysql:host=".IP.";dbname=".BD;
    try{
        $con = new PDO($dsn,USUARIO,PASS);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return true;
    }catch(PDOException $ex){
        echo "Error: " .$ex->getMessage();
        echo "<br>Codigo: ".$ex ->getCode();
        if($ex -> getCode() == 1049){
            //Si no consigue conectarse a la BD
            echo "<br>No existe BD<br>";
            return false;
        }
        return false;
    }finally{
        unset($con);
    }

    /*$miConexion = new mysqli();
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
    }*/
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