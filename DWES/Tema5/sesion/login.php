<?php

//Sin necesidad que hay usuario y contraseña
/*
    session_start();
    print_r($_SESSION);
    $_SESSION['var1'] = "mi primera sesion entrando por 3 vez";
    session_destroy();
    print_r($_SESSION);
    echo session_id();
    echo session_name();
*/

    session_start();
    if(isset($_REQUEST['valida'])){
        //valida el usuario este en la BBDD
        //comprobar que no esta vacio y pass 8 caracteres
        if($_REQUEST['user'] == "aaron"  && $_REQUEST['pass'] == "aaron"){
            $_SESSION['user'] = $_REQUEST['user'];
            $_SESSION['pass'] = $_REQUEST['pass'];
            $_SESSION['validada'] = true;
            header("Location: ./detalle.php");
            exit;
        }
    }else if(isset($_SESSION['validada'])){
        header("Location: ./detalle.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body> 
    <form action="./login.php" method="post">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" >
        <label for="user">Contraseña: </label>
        <input type="password" name="pass" id="pass" >
        <br>
        <input type="submit" value="Login" name="valida">
    </form>
</body>
</html>