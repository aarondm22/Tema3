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
        <h3> 1. Escribe un programa que dado un array ordénalo y devuelve otro array sin que haya
            elementos repetidos<br>
                &nbsp&nbsp datos = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3];
        </h3>   
        <?php
            $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
            echo "<h4>Array desordenado y repetido</h4>";
            echo "<pre>";
                print_r($datos);
            echo "</pre>";

            echo "<h4>Array ordenado pero repetido</h4>";
            echo "<pre>";
                //Función sort que nos devuelve un boolean y si lo puede ordenar lo muestra
                if(sort($datos)){
                    echo "<pre>";
                        print_r($datos);
                    echo "</pre>";
                }
            echo "</pre>";
            
            echo "<h4>Array ordenado y no repetido</h4>";
            //Función array_unique que nos devuelve un array y lo guardamos para recorrerlo
            $arrayordenado = array_unique($datos);
            if(sort($arrayordenado)){
                echo "<pre>";
                    print_r($arrayordenado);
                echo "</pre>";
            }
        ?>
        <h3> 2. Escribe un programa que dado un array devuelva la posición donde haya el valor 3 y
                cambie el valor por el número de la posición<br>
                &nbsp&nbsp datos = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3];
        </h3> 
            <?php
                $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
                //Recorremos el array en busca del valor 3 y lo cambiamos por su posición en el array
                foreach ($datos as $key => $value) {
                    if($datos[$key]==3){
                        $datos[$key]=$key;
                    }
                }
                echo "<pre>";
                    print_r($datos);
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