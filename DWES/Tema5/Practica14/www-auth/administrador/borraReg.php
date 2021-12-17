<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Registros</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Borrar registro</h1>
    </header>
    <main>
         <?php
            require_once("../libreria/funcionesPDO.php");
            require_once("../libreria/conexionBD.php");
            require_once("../segura/datosLoL.php");
            //require_once("../segura/datosCasa.php");

            if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
                header('WWW-Authenticate: Basic Realm="Contenido Restringido"');
                header('HTTP/1.0 401 Unauthorized');
                exit;
            }
            else if($_SERVER['PHP_AUTH_USER'] != 'admin' && $_SERVER['PHP_AUTH_PW'] != 'admin'){
                header('WWW-Authenticate: Basic Realm="Contenido Restringido"');
                header('HTTP/1.0 401 Unauthorized');
                exit;
            }else{

            
        ?>
        <center>
            <?php
            borrar();
            ?>
            <h2>Registro Borrado Correctamente</h2>
        </center>
        <br>
        <a id="link" href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a id="link" href="../codigo/leerTabla.php">
            <img src="../media/volver.svg">
            Volver a Leer Registros
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
    <?php } ?>
</body>
</html>