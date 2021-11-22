<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar XML</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Modificar ficheros XML</h1>
    </header>
    <main>
        <?php
            $rutaFichero = "../ficheros/deportes.xml";
            if(file_exists($rutaFichero)){
                //Transforma el xml en un objeto de tipo simplexml
                $xml = simplexml_load_file($rutaFichero);
            }else{
                exit();
            }

            $dom = dom_import_simplexml($xml)->ownerDocument;

            $deportes = $dom -> firstChild;
            
            foreach ($deportes -> childNodes as $deporte) {
                if($deporte->nodeName == "Deporte"){
                    foreach ($deporte -> childNodes as $hijos) {
                        if($hijos -> nodeName == "Nombre"){
                            if($hijos -> nodeValue == "Futbol"){
                                $aux = $hijos;
                                do{
                                    $aux = $aux -> nextSibling;
                                }while($aux -> nodeName != "Jugadores");
                                $aux -> nodeValue = 5;
                            }
                        }

                    }
                }
            }

            $dom -> save($rutaFichero);
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