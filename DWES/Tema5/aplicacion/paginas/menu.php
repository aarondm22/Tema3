<?php
        require_once ("../funciones/validaSession.php");
        //Comprobar que hay sesion
        session_start();
        validaSession();
        if(validaPagina(basename($_SERVER['PHP_SELF']))){
            header("Location: ");
        }
        //y sino que te lleve al login, exit
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>
    <header>
        <h1>Menu</h1>
        <?php
            echo $_SESSION['nombre'];
        ?>
        <a href="../logout.php">Logout</a>
    </header>
    <ul>
        <?php 
            foreach ($_SESSION['paginas'] as $key => $value) {
                echo "<li><a href='./".$value."'>".$key."</a></li>";
            }
        ?>
    </ul>
</body>
</html>