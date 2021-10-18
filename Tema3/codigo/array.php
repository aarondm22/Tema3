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
        <?php
            $arrayvacio = array();
            var_dump($arrayvacio);
            echo "<br>";
            //Crea un array de 1 posicion con el numero 10 
            $arrayde10 = array(10);
            var_dump($arrayde10);

            $notas = array(8,6,"diez",5,7,9);
            echo "<br>";
            echo "<pre>";
                print_r($notas);
            echo "</pre>";

            //Recorrer el array
            for ($i=0; $i < count($notas); $i++) { 
                echo "<p>".$notas[$i]."</p>";
            }

            $notas[10] = "MH";
            echo "<br>";
            echo "<pre>";
                print_r($notas);
            echo "</pre>";

            //Da error porque no puede acceder a la posición 6

            /* for ($i=0; $i < count($notas); $i++) { 
                echo "<p>".$notas[$i]."</p>";
            }*/
            //Recorre el array mostrando solo aquellas posiciones que tengan un valor
            foreach ($notas as $value) {
                echo "<p>".$value."</p>";
            }

            //Comprobar si existe un valor en una posición
            if(isset($notas[6]))
                echo "existe";
            else
                echo "no existe";
            
            //Borrar un valor por posición, borrado la posicion 0 que tenia el int 8
            unset($notas[0]);
            echo "<br>";
            echo "<pre>";
                print_r($notas);
            echo "</pre>";

            echo "<h3> Array asociativo </h3>";
            //Array asociativo
            $notas2 = array(
                "David"=>8,
                "Ismael"=>9,
                "Uriel"=>6,
                "Ivan"=>10,
                "Aaron" =>7,
                "Hector"=>4
            );

            echo "<pre>";
                print_r($notas2);
            echo "</pre>";

            //Recorremos e incrementamos en 1
            foreach ($notas2 as $key => $value) {
                $notas2[$key] += 1; 
            }
            echo "<br>Despues de incrementar";
            echo "<pre>";
                print_r($notas2);
            echo "</pre>";    
            
            //Array multidimensionales
            echo "<h3> Array multidimensional </h3>";
            echo "<h4> Tabla de multiplicar </h4>";
            $tabla = array();
            for ($i=0; $i <= 10; $i++) { 
                $tabla[$i] = array();
                for ($j=0; $j <= 10 ; $j++) { 
                    $tabla[$i][$j] = $i * $j;
                }
            }
            echo "<pre>";
                print_r($tabla);
            echo "</pre>"; 

            //Array bidimensional con dos arrays de strings
            $cosas= array(
                "DAW" => array("PR" => "Programacion", "BD" => "Base de datos", "DWES" => "Desarrollo web en entorno servidor"),
                "Alumnos" => array("DV" => "David", "IM" => "Ismael", "UR" => "Uriel", "AA" => "Aaron")
            );

            echo "<pre>";
                var_dump($cosas);
            echo "</pre>"; 

            //Mostrar la clave "DAW" o "Alumnos" y recorrer cada array mostrando su contenido
            foreach ($cosas as $key => $value) {
                echo "El ciclo ".$key." tiene las siguientes asignaturas:";
                if($key=="Alumnos"){
                    echo "Los alumnos de ".$key." son: ";
                }
                echo "<br>";
                foreach ($value as $clave => $valor) {
                    echo "La asignatura es ".$valor;
                    echo "<br>";
                }
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