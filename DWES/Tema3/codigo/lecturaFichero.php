<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ficheros</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Lectura de Ficheros</h1>
    </header>
    <main>
        <?php

            $rutaFichero = "../ficheros/blocDeNotas.txt";

            //Abrir el fichero para escritura
            /*
            if(!$fp = fopen($rutaFichero,'w')){
               echo "No se ha podido abrir el fichero";
               exit;
            }
            $texto = "Quiero matar a Ismael por poner .length";
            fwrite($fp,$texto,strlen($texto));
            fclose($fp);
            */
            //Abrir el fichero para escribir al final

            if(!$fp = fopen($rutaFichero,'a')){
            echo "No se ha podido abrir el fichero";
            exit;
            }
            $texto = "\nEscribo al final";
            fwrite($fp,$texto,strlen($texto));
            fclose($fp);

            //Leer el fichero
            if(!$fp = fopen($rutaFichero,'r')){
                echo "No se ha podido abrir el fichero";
                exit;
            }
            $texto = "\nEscribo al final";
            $leo = fread($fp,filesize($rutaFichero));
            $leo = str_replace("\n", "<br>", $leo);
            echo $leo;
            fclose($fp);
            
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