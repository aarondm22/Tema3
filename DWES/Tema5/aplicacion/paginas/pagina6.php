<?php
        require_once ("../funciones/validaSession.php");
        //Comprobar que hay sesion
        session_start();
        validaSession();
        //y sino que te lleve al login, exit
        if(!validaPagina(basename($_SERVER['PHP_SELF']))){
            header("Location: ../403.php");
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
    <h1>Página 6</h1>
    <div style="position:relative;float:right">
    <?php
            echo $_SESSION['nombre'];
        ?>
    <a href="../logout.php">Logout</a>
    </div>
</body>
</html>