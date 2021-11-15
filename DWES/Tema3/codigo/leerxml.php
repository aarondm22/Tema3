<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer XML</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Leer ficheros XML</h1>
    </header>
    <main>
        <?php
        $rutaFichero = "../ficheros/ficheroXMLProfes.xml";
        if(file_exists($rutaFichero)){
            //Transforma el xml en un objeto de tipo simplexml
            $xml = simplexml_load_file($rutaFichero);
            echo "<pre>";
            print_r($xml);
            echo "</pre>";
        }else{
            exit();
        }

        foreach ($xml as $departamento ) {
            echo "Codigo: " . $departamento -> children()[0] . " Descripcion: " . $departamento -> children()[1];
            echo "<br>Profesores:";
            foreach ($departamento -> children()[2] as $profesor) {
                var_dump($profesor);
                echo "<br> id: ". $profesor -> attributes()["id"] ." ".$profesor;
            }
            echo "<br>";
        }
        ?>
        <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a href="../index.html">
            <img src="../media/volver.svg">
            Volver al Index Tema 3
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>