<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Expresiones Regulares</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Expresiones Regulares</h1>
    </header>
    <main>
        <?php
            $patron ='/vamos/';
            echo preg_match($patron, "ahi vamos"); //Si el patron coincide en el texto entre comillas pone 1 sino 0

            echo "<br>";
            echo "<p>Punto: Comodin</p>";
            //Buscar un fichero que contenga log y un numero
            $patron ='/log./'; //El punto es comodin
            echo preg_match($patron, "log"); //false
            echo preg_match($patron, "log3"); //true
            echo preg_match($patron, "logl3"); //true
            echo preg_match($patron, "loga"); //true 

            echo "<p>\ Especial Probar con \s espacio</p>";
            $patron ='/a\sa/'; // a a
            echo preg_match($patron, "maria a casa"); //true
            echo preg_match($patron, "aa"); //false

            echo "<p>\ Especial Probar con \. punto</p>";
            $patron ='/a\.a/'; // a.a
            echo preg_match($patron, "maria a casa"); //false
            echo preg_match($patron, "a.a"); //true

            echo "<p>\ Conjuntos[] </p>";
            $patron ='/[abcd][xyz]/'; // ax
            echo preg_match($patron, "ax"); //true
            echo preg_match($patron, "aa"); //false
            echo preg_match($patron, "dz"); //true
            echo preg_match($patron, "a x"); //false

            echo "<p> | OR Me vale noviembre en ingles y en español</p>";
            $patron ='/Nov(iembre|ember)/'; // Noviembre
            echo preg_match($patron, "Nov"); //false
            echo preg_match($patron, "Noviembre"); //true
            echo preg_match($patron, "November"); //true

            echo "<p> $ es el final del string</p>";
            $patron ='/21$/'; // 
            echo preg_match($patron, "10/12/2021"); //true
            echo preg_match($patron, "21/12/2020"); //false

            echo "<p> ^ es el principio del string Ej nº cuenta en iban</p>";
            $patron ='/^ES/'; // 
            echo preg_match($patron, "E2000 2 3333 2222 1111"); //false
            echo preg_match($patron, "ES2111 2222 4444 1112"); //true

            echo "<p>Tambien sirve para decir que no contenga</p>";
            $patron ='/log[^AS]/'; // 
            echo preg_match($patron, "log "); //true
            echo preg_match($patron, "logA"); //fale
            echo preg_match($patron, "loga "); //true
            echo preg_match($patron, "logs"); //true

            echo "<p>Buscar algo y la posicion en la que se encuentra con preg_match_all</p>";
            $patron ='/<\/([a-z]+[0-9]?)>/'; //Etiqueta de cierre de html tambien vale '/<\/([a-z][0-9]?)+>/'
            echo preg_match_all($patron, "<html> Hola masquines </html>
            <p> Hola masquines </p>
            <a1> Hola masquines </a1>",
            $array); //true
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            echo "<p> Numero de cuenta valido</p>";
            $patron = '/^ES[0-9]{2}\s[0-9]{4}\s[0-9]{4}\s[0-9]{2}\s[0-9]{10}/';
            //Coincide qe tiene el patron
            echo preg_match($patron, "ES66 2100 0418 40 1234567891"); //true
            echo preg_match($patron, "ES6 2100 0418 40 1234567891"); //false

            echo "<p> Numero de cuenta valido el 0 al 999</p>";
            $patron = '/^[0-9]{1,3}$/'; //Minimo 1 y maximo 3
            //Coincide qe tiene el patron
            echo preg_match($patron, ""); //false
            echo preg_match($patron, "99999"); //false
            echo preg_match($patron, "998"); //true

            $patron = '/d/'; //Cualquier numero
            $patron = '/D/'; //Cualquier letra
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
            Volver al Index Tema 3
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
    
</body>
</html>