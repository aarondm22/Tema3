<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Tarea 06 Arrays</h1>
    </header>
    <main>
         <h3> 1. Genera un array multidimensional y asociativo donde <br>
                a. Los nombres de los equipos locales deben ser indices del array que contiene los 
                    subarrays con el equipo visitante y a su vez un subarray con:<br>
                b. Resultado, roja, amarilla y penalti que son indices de los anteriores.<br>
              2. El script lo unico que debe hacer es mostrar una tabla similar a la de abajo, recogiendo los datos 
                del array multidimensional que habeis creado<br>
        </h3> 
        <?php
            $liga =
            array(
                "Zamora" =>  array(
                    "Salamanca" => array(
                        "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                    ),
                    "Avila" => array(
                        "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                    ),
                    "Valladolid" => array(
                        "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
                    )
                ),
                "Salamanca" =>  array(
                    "Zamora" => array(
                        "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                    ),
                    "Avila" => array(
                        "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                    ),
                    "Valladolid" => array(
                        "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1
                    )
                ),
                "Avila" =>  array(
                    "Zamora" => array(
                        "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2
                    ),
                    "Salamanca" => array(
                        "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0
                    ),
                    "Valladolid" => array(
                        "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1
                    )
                ),
                "Valladolid" =>  array(
                    "Zamora" => array(
                        "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                    ),
                    "Salamanca" => array(
                        "Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                    ),
                    "Avila" => array(
                        "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2
                    )
                ),
            );

            $equiposLocales = array();

            foreach ($liga as $key => $value) {
               array_push($equiposLocales, $key);
            }

            echo "<table border=1>";
            echo "<tr>";
            echo "<td>";
            echo "Equipos";
            echo "</td>";
            foreach ($equiposLocales as $key ) {
                echo "<td>";
                echo $key;
                echo "</td>";               
            }
            echo "</tr>";
        
            // Recorremos el array grande para el resto de la tabla
            foreach ($liga as $equipovisitante => $arraypartidos) {
                echo "<tr>";
                echo "<td>";
                echo $equipovisitante;
                echo "</td>";
                $i = 0;
                foreach ($arraypartidos as $clave => $resultado) {
                    if($equipovisitante==$equiposLocales[$i]){ 
                        echo "<td>"; 
                        echo "</td>";
                    }
                    echo "<td>";
                    foreach ($resultado as $cosas => $valor) 
                        echo $valor;
                        
                    echo "</td>";
                    $i++;
                }
                echo "</tr>";
                
            }
            echo "</table>";
        
        ?>

        <h3> 3. Genera otra tabla que sea clasificación.<br>
                a. De tal forma que, por partido ganado se sumará tres puntos y por partido empatado 1. <br>
                b. Goles a favor. <br>
                c. Goles en contra. <br>
        </h3>

        <?php

            $header = array(
                "Puntos", "Goles a favor", "Goles en contra"
            );
            echo "<table border=1>";
            echo "<tr>";
            echo "<td>";
            echo "Equipos";
            foreach ($header as $key ) {
                echo "<td>";
                echo $key;
                echo "</td>";               
            }
            echo "</tr>";
            foreach ($liga as $equipovisitante => $arraypartidos) {
                echo "<tr>";
                echo "<td>";
                echo $equipovisitante;
                echo "</td>";
                foreach ($arraypartidos as $clave => $resultado) {
                    foreach ($resultado as $cosas => $valor){
                        echo $valor;
                    }
                }
                //$i = 0;
            }
            echo "</table>";
        ?>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a href="../index.html">
            <img src="../media/volver.svg">
            Volver al Index Tarea 06
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>