<?php
    if($_SERVER['PHP_AUTH_USER'] != 'admin' && $_SERVER['PHP_AUTH_PW'] != 'admin'){
        header('Location: ./config.php');
        exit;
    }
    echo "Nombre: ". $_SERVER['PHP_AUTH_USER'];

?>
