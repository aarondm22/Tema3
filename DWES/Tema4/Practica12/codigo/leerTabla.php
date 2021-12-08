<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer Tabla</title>
    <link href="../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Index de la Tarea 12</h1>
        <h2 class="subtitulo">Desarrollo Web en Entorno Servidor</h2>
    </header>
    <main>
        <form method="post" action="leerTabla.php">
            <label id="buscar">Buscar:</label>
            <input type="text" name="busca">
            <input type="submit" name="busqueda" value="Buscar" class="btn btn-danger">
        </form>
        <?php
        require_once("../libreria/funcionesBD.php");
        require_once("../libreria/conexionBD.php");
        //require_once("../segura/datosLoL.php");
        require_once("../segura/datosCasa.php");

        if(isset($_REQUEST['busqueda'])){
            buscarBD();
        }else
            leer();
        
        ?>
        <br>
        <a id="link" href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a id="link" href="../index.php">
            <img src="../media/volver.svg">
            Volver al Index
        </a>
        
    </main>
<footer>©Copy Aaron de Diego</footer>
</body>
</html>