<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cargar SQL</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Cargar SQL</h1>
    </header>
    <main>
    <?php
        require_once("../segura/datosBD.php");

        $miDB = new mysqli();

        $miDB -> connect(IP,USER,PASS);

        if($miDB->connect_errno!=0){
            echo "Error de Conexion";
            exit();
        }else{
            $comandosSQL = file_get_contents("../segura/Script.sql");
            $miDB -> multi_query($comandosSQL);
            echo "Todo ha ido rodado";
            $miDB -> close();
        }

    ?>
    <br>
    <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a href="../index.html">
            <img src="../media/volver.svg">
            Volver al Index Tema 4
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>