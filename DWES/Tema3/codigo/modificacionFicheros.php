<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficheros</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Modificación de Ficheros</h1>
    </header>
    <main>
        <?php
            //Modificar un fichero
            //Buscar a warwick y sustituirlo por jayce
            //que es un paquete
            $rutaFicheroInicial = "../ficheros/fichero1.txt";
            $rutaFicheroTemporal = "../ficheros/temp.txt";
            //Comprobar que no ha habido ningun error en la lectura del fichero
            if(!$finicial = fopen($rutaFicheroInicial,'r')){
                echo "Ha habido un error al abrir el fichero";
                exit;
            }
            //Escribimos lo que vayamos a modificar en un fichero temporal
            if(!$ftemp = fopen($rutaFicheroTemporal,'w')){
                echo "Ha habido un error al abrir el fichero";
                exit;
            }

            $c = 0;
            //fgets lee linea a linea 
            while($linea = fgets($finicial, filesize($rutaFicheroInicial))){
                echo $c.":".$linea."<br>";
                $c++;
                //Trim quita los espacios
                if(trim($linea) == "warwick")
                    $linea = "jayce\n";
                fwrite($ftemp, $linea, strlen($linea));
            }

            fclose($finicial);
            fclose($ftemp);
            //Reemplazamos el fichero temporal por el inicial
            //borramos el inicial y renombramos
            unlink($rutaFicheroInicial); //Deja de indexar el fichero inicial
            rename($rutaFicheroTemporal, $rutaFicheroInicial);

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