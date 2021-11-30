<?php

require_once("../segura/datosBD.php");

function conexion(){
    $miConexion = new mysqli();
    @$miConexion -> connect(IP,USER,PASS,BBDD);
    if($miConexion->connect_errno != 0){
        echo "<br>Error: " .$miConexion->connect_error;
        return false;
    }else{
        echo "<br>Todo ha ido de locos";
        return $miConexion;
        $miConexion->close();
    }
}

?>