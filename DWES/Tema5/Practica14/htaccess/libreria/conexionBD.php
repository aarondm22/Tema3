<?php

//require_once("../segura/datosLoL.php");
function conexionPDO(){
    $dsn = "mysql:host=".IP.";dbname=".BD;
    try{
        $con = new PDO($dsn,USUARIO,PASS);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }catch(PDOException $ex){
        if($ex -> getCode() == 1049){
            //Si no consigue conectarse a la BD
            echo "<br>No existe BD<br>";
            return false;
        }else if($ex -> getCode() == 2002){
            //Si no consigue conectar con el servidor
            echo "<br>Error al conectar con el servidor (IP)<br>";
            return false;
        }else if($ex -> getCode() == 1045){
            //Si no consigue conectarse por error de autenticacion
            echo "<br>Error de autenticación (usuario/contraseña)<br>";
            return false;
        }
    }finally{
        unset($con);
    }
}

function conexion(){
    $dsn = "mysql:host=".IP;
    try{
        $con = new PDO($dsn,USUARIO,PASS);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $commands = file_get_contents("./segura/script.sql");
        $con -> exec($commands);
    }catch(PDOException $ex){
        if($ex -> getCode() != 0){
            //Error al conectarse
            return false;
        }
    }finally{
        unset($con);
    }
}


?>