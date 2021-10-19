<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incluir Ficheros</title>
    <link href="../../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Pagina de Aaron</h1>
        <p id="subtitulo">Incluir ficheros en php</p>
    </header>
        <main>
            <?php
                require("saludo.php");
                include("/var/www/seguro/misConstantes.php");

                echo USER;
            ?>
            <br>
            <br>
            <a href="indexTema2.php">
                <img src="../../media/volver.svg">
                Volver al Index del Tema 2
            </a>
            <br>
            <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
                echo $pagina;?>">
                Ver codigo <img style="width:35px;"src="../../media/lupa.svg">
            </a>
        </main>
    <footer>
    ©Copy Aaron de Diego
    </footer>
</body>
</html>