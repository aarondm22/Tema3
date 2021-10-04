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
        $es = null;
        $en = null;
        $ho = null;
        $tv = null;
        $ma = null;
        $var = $_GET['pais'];
        $$var = $_GET['pais'];

        if(isset($_GET['pais']) && $_GET['pais'] == $es)
            echo "<h2 style='text-align: center'>Hola</h2>";
        else if(isset($_GET['pais']) && $_GET['pais'] == $en)
            echo "<h2>Hello</h2>";
        else if(isset($_GET['pais']) && $_GET['pais'] == $ho)
            echo "<h2>Hallo daar</h2>";
        else if(isset($_GET['pais']) && $_GET['pais'] == $tv)
            echo "<h2>Talofa</h2>";
        else if(isset($_GET['pais']) && $_GET['pais'] == $ma)
            echo "<h2>Здраво таму</h2>";
    ?>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>