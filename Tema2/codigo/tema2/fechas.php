<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Pagina de Aaron</h1>
        <p id="subtitulo">Fechas en php</p>
    </header>
    <main>
        <?php
            echo"<p>Segundos desde 1970: </p>";
            $fecha = time();
            echo $fecha;

            echo "<p>Zona horaria del servidor: </p>";
            echo date_default_timezone_get();
            echo "<p>Zona horaria del servidor: </p>";
            date_default_timezone_set('Europe/Sarajevo');
            echo date_default_timezone_get();

            echo "<p>Fecha actual</p>";
            echo date('d-m-y h:i:s', time());

            //Función strtotime
            echo "<p>Fecha cumpleaños</p>";
            //año-mes-dia
            $cumple = strtotime('07/27/01');
            //mes/dia/año
            $cumple2 = strtotime('01-07-27');
            //Letra
            $cumple3 = strtotime('27 July 2001');
            echo $cumple;
            echo "<br>";
            echo "<p>Fecha con guiones</p>";
            echo date('d-m-y h:i:s', $cumple);
            echo "<br>";
            echo "<p>Fecha con barras</p>";
            echo date('d-m-y h:i:s', $cumple2);
            echo "<br>";
            echo "<p>Fecha con letras</p>";
            echo date('d-m-y h:i:s', $cumple3);


        ?>
        <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../../media/lupa.svg">
        </a>
    </main>
    <footer>©Copy Aaron de Diego</footer>
</body>
</html>