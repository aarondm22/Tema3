<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        Pagina de Aaron
        <p id="subtitulo">Variables en php</p>
    </header>
        <main>
            <?php
                //Declaramos una variable
                $variable = 7;
                //Mostrar la variable
                echo "La variable tiene un valor de: ".$variable;
                //Saber de que tipo de variable es
                echo "<br>Tipo de variable: ";
                var_dump($variable);

                //El tipo de dato booleano
                echo"<h3>Boolean</h3>";
                $bolean = false;
                echo "La variable $boolean es: ".gettype($bolean) . " y tiene el valor de: " .$bolean ."<br>"; 
                //Cuando es false no pone un 0
                var_dump($bolean);
                echo "<br> Le pregunto con is_bool(): ";
                echo is_bool($bolean);

                //El tipo float
                echo"<h3>Float</h3>";
                $conpunto = 8.3456;
                echo "La variable $conpunto es: ".gettype($conpunto) . " y tiene el valor de: " .$conpunto ."<br>";
            ?>
        </main>
    <footer>®Copy Aaron de Diego</footer>
</body>
</html>