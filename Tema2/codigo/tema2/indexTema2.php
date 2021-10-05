<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index Tema 2</title>
    <link href="../../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Index del Tema 2</h1>
        <h2 class="subtitulo">Desarrollo Web en Entorno Servidor</h2>
    </header>
        <main>
            <ul>
                <li>
                    <a href="echos.php">Ejemplos mostrar por pantalla</a>
                </li>
                <br>
                <li>
                    <a href="HolaMundo.php">Ejercicio hola mundo antiguo (solo php)</a>
                </li>
                <br>
                <li>
                    <a href="Variables.php">Ejemplos Variables y Constantes</a>
                </li>
                <br>
                <li>
                    <a href="eligeidioma.html">Ejercicio Hola Mundo Idiomas</a>
                </li>
                <br>
                <li>
                    <a href="ambito.php">Ejemplos Ámbito</a>
                </li>
                <br>
                <li>
                    <a href="incluirFicheros.php">Ejemplos Inclusión de ficheros</a>
                </li>
                <br>
                <li>
                    <a href="fechas.php">Ejemplos fechas</a>
                </li>
                <br>
                <li>
                    <a href="../../index.html">
                        <img src="../../media/volver.svg">
                        Volver al Temario
                    </a>
                </li>
            </ul>
            <br>
            <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
                echo $pagina;?>">
                Ver codigo <img style="width:35px;"src="../../media/lupa.svg">
            </a>
            
        </main>
    <footer>©Copy Aaron de Diego</footer>
</body>
</html>