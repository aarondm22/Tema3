<?php

//Cuando no exista usuario o contraseña
if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
    header('WWW-Authenticate: Basic Realm="Contenido Restringido"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} 
//Conexion a la BBDD 
if($_SERVER['PHP_AUTH_USER'] == 'aaron' && $_SERVER['PHP_AUTH_PW'] == 'aaron'){
    header('Location: ./detalle.php');
}

?>