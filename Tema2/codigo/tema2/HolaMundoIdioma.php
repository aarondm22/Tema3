<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo</title>
    <link rel="stylesheet" href="../../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Saludos en distintos idiomas</h1>
    </header>
    <main>
    <?php
        $var = $_GET['pais'];

        $idiomas_es = "Hola";
        $idiomas_en = "Hello";
        $idiomas_ho = "Hallo daar";
        $idiomas_tv = "Talofa";
        $idiomas_ma = "Здраво таму";

        //Variable de variable que es la que va a decidir que saludo se va a imprimir
        $saludo="idiomas_".$var;
        echo "<h1>".$$saludo."</h1>";
    ?>
    <br>
    
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>