<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escribe XML</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Escribir ficheros XML</h1>
    </header>
    <main>
        <?php
        //Deportes elementos
        $XML =  new DOMDocument("1.0"."utf-8");
        $XML -> formatOutput = true;

        $ElementoRaiz = $XML -> createElement("Deportes");

        $raiz = $XML -> appendChild($ElementoRaiz);

        $XML -> save("../ficheros/deportes.xml");
        
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