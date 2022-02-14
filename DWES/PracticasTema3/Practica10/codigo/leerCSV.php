<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficheros</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Leer CSV</h1>
    </header>
    <main>
        <?php
            require_once("../libreria/funciones.php");
        ?>
        <div class="entrada">
            <h3 for="areatext">Tabla de Notas</h3>  
            <?php
               leeTabla();
            ?>
        </div>   
        <br>    
        <a id="link" href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a id="link" href="../index.html">
            <img src="../media/volver.svg">
            Volver a Practica 10
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>