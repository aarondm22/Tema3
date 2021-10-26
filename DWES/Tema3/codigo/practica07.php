<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Práctica de Funciones</h1>
    </header>
    <main>
    <h3>1. Crea tu propio fichero que tenga las funciones de:<br>
            a. br() Pinta un br <br>
            b. h1(cadena) Pinta la cadena entre dos h1 <br>
            c. p(cadena) Pinta la cadena entre cadenas<br>
            d. self() Devuelve el fichero actual <br>
            e. letraDni() Se introduce el dni y devuelve la letra que le corresponde<br>
            f. Realiza una página que utilice estas funciones
    </h3>
    <?php
        require_once("./funciones.php");
        echo "<br/><br/>";
        echo "Hola...";
        br();
        echo "...adios.";
        br();
        h1("HOLA");
        br();
        p("Mi nombre es Aaron");

        br();
        self();
        br();
        
        letraDNI(71034849);
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
    