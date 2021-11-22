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
            echo"<h3>Segundos desde 1970: </h3>";
            $fecha = time();
            echo $fecha;

            echo "<h3>Zona horaria del servidor: </h3>";
            echo date_default_timezone_get();
            echo "<h3>Zona horaria del servidor: </h3>";
            date_default_timezone_set('Europe/Sarajevo');
            echo date_default_timezone_get();

            echo "<h3>Fecha actual</h3>";
            echo date('d-m-y h:i:s', time());

            //Función strtotime
            echo "<h3>Fecha cumpleaños</h3>";
            //año-mes-dia
            $cumple = strtotime('07/27/01');
            //mes/dia/año
            $cumple2 = strtotime('01-07-27');
            //Letra
            $cumple3 = strtotime('27 July 2001');
            echo $cumple;
            echo "<br>";
            echo "<h3>Fecha con guiones</h3>";
            echo date('d-m-y h:i:s', $cumple);
            echo "<br>";
            echo "<h3>Fecha con barras</h3>";
            echo date('d-m-y h:i:s', $cumple2);
            echo "<br>";
            echo "<h3>Fecha con letras</h3>";
            echo date('d-m-y h:i:s', $cumple3);

            $hoy = time();
            echo "<br>";
            echo "<h3>Sumar dias, semanas, etc</h3>";
            echo date('d-m-y h:i:s', strtotime("01-07-27 + 1 week 2 hours"));
            echo "<br>";
            echo "<h3>Proximo dia de la semana (last/next)</h3>";
            echo date('d-m-y h:i:s', strtotime("next Monday"));
            echo "<br>";
            echo "<h3>Diferencia entre dos fechas (hoy y )</h3>";
            $diaObjeto = new DateTime();
            $diaObjeto2 = new DateTime('2021-01-01');
            echo ($diaObjeto2->diff($diaObjeto))->format('%R%a days'); //Sin saber objetos todavia

            echo "<br>";
            echo "<h3>Función mktime (Obtener la marca de tiempo Unix de una fecha)</h3>";
            $diaMKtime = mktime(5,42,59,10,6,2021);
            echo date('d-m-y h:i:s', $diaMKtime);

            echo "<br>";
            echo "<h3>Función getdate (devuelve un array asociativo)</h3>";
            print_r (getdate());
            $arrayfecha = getdate();
            echo "<br>";
            echo $arrayfecha['month'];
           
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
    <footer>©Copy Aaron de Diego</footer>
</body>
</html>