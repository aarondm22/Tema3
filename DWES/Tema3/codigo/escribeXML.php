<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escribe XML</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Escribir ficheros XML</h1>
    </header>
    <main>
        <?php
        //Deportes elementos
        $XML =  new DOMDocument("1.0", "utf-8");
        $XML -> formatOutput = true;

        $ElementoRaiz = $XML -> createElement("Deportes");
        
        //añadimos la raiz
        $raiz = $XML -> appendChild($ElementoRaiz);

        //Creando etiqueta deporte Para el FUTBOL
        $deporte = $XML ->createElement("Deporte");

        //Lo añadimos al dom
        $ElementoRaiz -> appendChild($deporte);

        //Creamos etiqueta/elemento nombre y lo añadimos a deporte
        $nombre = $XML ->createElement("Nombre");
        $deporte -> appendChild($nombre);
        //Creamos un texto que va a ir dentro 
        $texto = $XML ->createTextNode("Futbol");
        $nombre -> appendChild($texto);


        //creada etiqueta Jugadores
        $jug = $XML -> createElement("Jugadores","11");
        $deporte -> appendChild($jug);

        //Creando etiqueta deporte Para el TENIS
        $deporte = $XML ->createElement("Deporte");

        //añadido
        $ElementoRaiz -> appendChild($deporte);

        //creada etiqueta nombre
        $nombre = $XML ->createElement("Nombre");

        $texto = $XML ->createTextNode("Tenis");
        $nombre -> appendChild($texto);
        $deporte -> appendChild($nombre);

        //creada etiqueta Jugadores
        $jug = $XML -> createElement("Jugadores","1");
        $deporte -> appendChild($jug);

        //Creando etiqueta deporte Para el HOCKEY HIERBA
        $deporte = $XML ->createElement("Deporte");

        //añadido
        $ElementoRaiz -> appendChild($deporte);

        //creada etiqueta nombre
        $nombre = $XML ->createElement("Nombre");

        $texto = $XML ->createTextNode("Hockey Hierba");
        $nombre -> appendChild($texto);
        $deporte -> appendChild($nombre);

        //creada etiqueta Jugadores
        $jug = $XML -> createElement("Jugadores","10");
        $deporte -> appendChild($jug);

        //guardamos el fichero
        $XML -> save("../ficheros/deportes.xml");
        
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