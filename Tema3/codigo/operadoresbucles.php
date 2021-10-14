<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operadores y Bucles</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Ejercicio Cambio Monedas</h1>
    </header>
    <main>
        <h3>4. Realiza un programa que le introduzca un valor de un producto con 2 decimales y posteriormente
            un valor con el que pagar por encima (Valor del producto 6.33€ y ha pagado con 10€). Muestra el número
            minimo de monedas con las que puedes devolver el cambio.
        </h3>
    <?php
        $prod = 6.33;
        $valor = 10;

        $devuelto = $valor - $prod;

        $mon2 = 2;
        $mon1 = 1;
        $mon50 = 0.50;
        $mon20 = 0.20;
        $mon10 = 0.10;
        $mon05 = 0.05;
        $mon02 = 0.02;
        $mon01 = 0.01;
        $i = 0;

        if($devuelto > 0){
            for($i=0;$devuelto>$mon2;$i++){
            $devuelto = $devuelto - $mon2;
            }
            echo $i." monedas de ".$mon2;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

            for($i=0;$devuelto>$mon1;$i++)
                $devuelto = $devuelto - $mon1;
            
            echo $i." monedas de ".$mon1;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

            for($i=0;$devuelto>=$mon50;$i++){
                $devuelto = $devuelto - $mon50;
            }
            echo $i." monedas de ".$mon50;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

            for($i=0;$devuelto>=$mon20;$i++){
                $devuelto = $devuelto - $mon20;
            }
            echo $i." monedas de ".$mon20;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

            for($i=0;$devuelto>=$mon10;$i++){
                $devuelto = $devuelto - $mon10;
            }
            echo $i." monedas de ".$mon10;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

            for($i=0;$devuelto>=$mon05;$i++){
                $devuelto = $devuelto - $mon05;
            }
            echo $i." monedas de ".$mon05;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

            for($i=0;$devuelto>=$mon02;$i++){
                $devuelto = $devuelto - $mon02;
            }
            echo $i." monedas de ".$mon02;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

            for($i=0;$devuelto>=$mon01;$i++){
                $devuelto = $devuelto - $mon01;
            }
            echo $i." monedas de ".$mon01;
            echo "<br>";
            echo $devuelto;
            echo "<br>";

        }else{
            echo "Cambio dado correctamente";
        }
    ?>
    <br>
    
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>