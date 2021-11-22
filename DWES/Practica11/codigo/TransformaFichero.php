<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Transformar a XML</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Transforma fichero CSV en XML</h1>
    </header>
    <main>
        <?php
        require_once("../libreria/funciones.php");
        transformaTexto();
        ?>
        <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a href="../index.html">
            <img src="../media/volver.svg">
            Volver al Index Tema 3
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>