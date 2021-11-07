<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
        <h1>Práctica 08: Formulario</h1>
    </header>
    <main>
        <div class ="content">
            <div id ="title">
                <h2>Desarrollo Web en Entorno Servidor</h2>
                <h3>Formulario de Registro</h3>
                <br>
            </div>
            <h2 style="font-style:italic">Formulario enviado correctamente</h2>
        </div>
        <br>
        <br>
        <a href="../index.html">
            <img src="../../../media/volver.svg">
            Volver al Index Practica08
        </a>
        <br>
        <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../../../media/lupa.svg">
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>