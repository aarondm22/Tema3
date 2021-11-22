<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar notas.xml</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Mostrar notas.xml en tabla</h1>
    </header>
    <main>
        <div class="entrada">
            <?php
            echo "<h3>Tabla Notas</h3>";
            require_once("../libreria/funciones.php");
            leeXmlTabla();
            ?>
        </div>
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