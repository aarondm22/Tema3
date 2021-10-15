<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Año bisiesto</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Ejercicio Año si es bisiesto o no</h1>
    </header>
    <main>
        <h3>5.Escriba un programa que pida un año y que escriba si es bisiesto o no.

            Los años bisiestos son múltiplos de 4, pero los múltipos de 100 no lo son, aunque los múltiplos de 
            400 sí.
        </h3>

        <?php

            $anio = $_GET["anio"];

            if(($anio%4 == 0) && (($anio%100 != 0) || ($anio%400 == 0))){
                echo "El año ".$anio. " es bisiesto";
            }else
                echo "El año ".$anio. " NO es bisiesto";
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