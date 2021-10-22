<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Ejemplos Arrays</h1>
    </header>
    <main>
         <h3> 1. Escribe un programa que pida por pantalla el tamaño de una matriz (Ej lado=4). Rellene de
                la siguiente manera<br>
        </h3> 
        <?php
            
            $lados = $_GET["lado"];

            $array = array();
            for ($i=0; $i < $lados; $i++) { 
                $array[$i] = array();
                for ($j=0; $j < $lados; $j++) { 
                    if($i==0 || $j==0)
                        $array[$i][$j] = 1;
                    else
                        $array[$i][$j] = $array[$i-1][$j] + $array[$i][$j-1]; 
                }
            }
            echo "<table border=1>";
            foreach ($array as $key => $value) {
                echo "<tr>";
                foreach ($value as $clave => $valor) {
                    echo "<td>";
                    echo $valor;
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<pre>";
                print_r($array);
            echo "</pre>";
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