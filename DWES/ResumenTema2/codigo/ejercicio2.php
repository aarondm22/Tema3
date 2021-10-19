<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1: Resumen Tema 2</title>
    <link href="../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Resumen Tema 2</h1>
        <p id="subtitulo">Ejercicio 2 en php</p>
    </header>
    <main>
        <ul>
            <li>
                <h3>Crea una página a la que se le pase por url una variable con el nombre que quieras y
                muestre el valor de la variable, si es numérico y si lo es, si es entero o float.</h3>
            </li>
        </ul>
        <?php
            //Guardamos la variable recogida por la url en $var
            $var = $_GET['edad'];
            //Comprobamos si la variable que contiene edad es numerico, string u otra cosa
            if(isset($_GET['edad']) && (is_numeric($var))){
                echo "<br>";
                /*Una vez comprobado que es numerico con ctype_digit() nos devuelve true o false
                dependiendo si la variable es todo numeros o no (entero o float) */
                if(ctype_digit($var))
                    echo "<h1>La variable ". $var." es un entero</h1>";
                else
                    echo "<h1>La variable ".$var." es un float</h1>";
            //Si es string
            }else if(isset($_GET['edad']) && (is_string($var))){
                echo "<br>";
                echo "<h1>La variable ".$var." es una cadena</h1>";
            //En el caso que no sea nada de lo anterior
            }else
                echo "<h1>La variable ".$var." es algo diferente</h1>";
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
            Volver al Index del Resumen Tema 2
        </a>
    </main>
    <footer>
        ©Copy Aaron de Diego
    </footer>
</body>
</html>