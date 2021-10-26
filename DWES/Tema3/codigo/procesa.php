<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Formulario</h1>
    </header>
    <main>
        <?php
        require_once("./funciones.php");
            print_r($_POST);
            p("La variable de nombre es: ".$_POST['nombre']);
            p("La variable de password es: ".$_POST['pass']);
            p("La variable de genero es: ".$_POST['genero']);
            p("Estoy matriculado en: ".$_POST['curso']);
            foreach ($_POST['aficiones'] as $value) {
                p("Mi aficion es: ".$value);
            }
        ?>
        <br>
        <br>
        <a href="./formulario.php">
            <img src="../media/volver.svg">
            Volver al Formulario
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>