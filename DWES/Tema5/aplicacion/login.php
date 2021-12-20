<?php
    //llamar a verifica sesion
    require_once("./funciones/validaSession.php");
    session_start();
    if(validaSession()){
        header("Location: ./paginas/menu.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <header>

    </header>
    <!--Formulario que paso por post -->
    <form action="./funciones/valida.php" method="post">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" >
        <label for="user">Contraseña: </label>
        <input type="password" name="pass" id="pass" >
        <br>
        <input type="submit" value="Login" name="valida">
    </form>
    <footer></footer>
</body>
</html>