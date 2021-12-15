<?php
    if($_SERVER['PHP_AUTH_USER'] != 'aaron' && $_SERVER['PHP_AUTH_PW'] != 'aaron'){
        header('Location: ./perfil.php');
        exit;
    }
    echo "Nombre: ". $_SERVER['PHP_AUTH_USER'];

?>
