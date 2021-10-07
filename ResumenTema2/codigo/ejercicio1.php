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
        <p id="subtitulo">Ejercicio 1 en php</p>
    </header>
    <main>
        <h3>a. Muestra el nombre del fichero que se está ejecutando. </h3>
        <?php
            echo "<br>";
            echo basename($_SERVER['SCRIPT_FILENAME']);
        ?>
        <h3>b. Muestra la dirección IP del equipo desde el que estás accediendo.</h3>
        <?php
            echo "<br>";
            echo basename($_SERVER['REMOTE_ADDR']);
        ?>
        <h3>c. Muestra el path donde se encuentra el fichero que se está ejecutando. </h3>
        <?php
            //Esta vez mostramos el path
            echo "<br>";
            echo $_SERVER['SCRIPT_FILENAME'];
        ?>
        <h3>d. Muestra la fecha y hora actual formateada en 2021-10-5 19:17:18. </h3>
        <?php
            echo "<br>";
            //Con date podemos formatear
            echo date("Y-m-d H:i:s", time());
        ?>
        <h3>e. Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de mes de año, hh:mm:ss , Zona horaria).  </h3>
        <?php
            echo "<br>";
            //Cambiamos la zona horaria y le damos formato con date()
            date_default_timezone_set('Europe/Lisbon');
            echo date("l j M Y H:i:s");
        ?>
        <br>

        <h3>f. Inicializa y muestra una variable en timestamp y en fecha con formato dd/mm/yyyy de tu cumpleaños</h3>
        <?php
            //Función strtotime con formato yy-mm-dd y con el date() le damos el formato que se nos pide
            $cumple = strtotime('97-01-22');
            echo"<h4>Mi fecha en segundos desde 1970</h4>";
            echo $cumple;
            echo"<h4>Mi fecha en formato dd/mm/yyy</h4>";
            echo date('d/m/Y', $cumple);
        ?>
        <br>
        <h3>g. Calcular la fecha y el día de la semana de dentro de 60 días. </h3>
        <?php
            //Función strtotime con formato yy-mm-dd y con el date() le damos el formato que se nos pide
            $hoy = date('d-m-y h:i:s', time());
            $mañana = strtotime("+ 60 days");
            echo $mañana;
        ?>

                    <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
                        echo $pagina;?>">
                        Ver codigo <img style="width:35px;"src="../media/lupa.svg">
                    </a>

    </main>
    <footer>
        ©Copy Aaron de Diego
    </footer>
</body>
</html>