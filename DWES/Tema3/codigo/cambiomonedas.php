<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambio de monedas</title>
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
        $prod = (int)(($_GET["producto"])*100);
        $pag = (int)(($_GET["pagado"])*100);
        $devuelto = $pag - $prod;
        
        const MON2 = 200;
        const MON1 = 100;
        const MON50 = 50;
        const MON20 = 20;
        const MON10 = 10;
        const MON05 = 5;
        const MON02 = 2;
        const MON01 = 1;
        $i = 0;

        echo "Valor del producto: ".($prod/100)."€";
        echo "<br>";
        echo "Dinero pagado: ".($pag/100)."€";
        echo "<br>";
        echo "Devuelto: ".($devuelto/100)."€";
        echo "<br>";
        echo "<br>";


        if($devuelto > 0){
            for($i=0;$devuelto>MON2 ;$i++){
            $devuelto = $devuelto - MON2 ;
            }
            echo "<li>".$i." monedas de ".MON2/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";

            for($i=0;$devuelto>MON1;$i++)
                $devuelto = $devuelto - MON1;
            
            echo "<li>".$i." monedas de ".MON1/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";

            for($i=0;$devuelto>=MON50;$i++){
                $devuelto = $devuelto - MON50;
            }
            echo "<li>".$i." monedas de ".MON50/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";

            for($i=0;$devuelto>=MON20;$i++){
                $devuelto = $devuelto - MON20;
            }
            echo "<li>".$i." monedas de ".MON20/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";

            for($i=0;$devuelto>=MON10;$i++){
                $devuelto = $devuelto - MON10;
            }
            echo "<li>".$i." monedas de ".MON10/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";

            for($i=0;$devuelto>=MON05;$i++){
                $devuelto = $devuelto - MON05;
            }
            echo "<li>".$i." monedas de ".MON05/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";
            
            for($i=0;$devuelto>=MON02;$i++){
                $devuelto = $devuelto - MON02;
            }
            echo "<li>".$i." monedas de ".MON02/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";

            for($i=0;$devuelto>=MON01;$i++){
                $devuelto = $devuelto - MON01;
            }
            echo "<li>".$i." monedas de ".MON01/100;
            echo "€. Quedan ".($devuelto/100)."€"."</li>";
            
            echo "<br> Cambio dado correctamente";
        }else if($devuelto == 0){
            echo "<br>";
            echo "No devuelve nada, se ha introducido justo";
        }else
            echo "No se ha dado bien el cambio o no es posible";
    ?>
    <br>
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