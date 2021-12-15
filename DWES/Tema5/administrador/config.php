<?php

//Cuando no exista usuario o contraseña
if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
    header('WWW-Authenticate: Basic Realm="Contenido Restringido"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} 
//Conexion a la BBDD 
if($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'admin'){
    header('Location: ./detalle.php');
}else{
    header('WWW-Authenticate: Basic Realm="Contenido Restringido"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}

?>