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
        <h1>Pagina de Aaron</h1>
        <p id="subtitulo">Variables en php</p>
    </header>
        <main>
            <a href="indexTema2.php">
                <img src="../../media/volver.svg">
                Volver al Index del Tema 2
            </a>
            <?php
                echo "<h2>Entero</h2>";
                //Declaramos una variable
                $variable = 7;
                //Mostrar la variable
                echo "La variable tiene un valor de: ".$variable;
                //Saber de que tipo de variable es
                echo "<br>Tipo de variable: ";
                var_dump($variable);

                //El tipo de dato booleano
                echo"<h2>Boolean</h2>";
                $bolean = false;
                echo "La variable $boolean es: ".gettype($bolean) . " y tiene el valor de: " .$bolean ."<br>"; 
                //Cuando es false no pone un 0
                var_dump($bolean);
                echo "<br> Le pregunto con is_bool(): ";
                echo is_bool($bolean);

                //El tipo float
                echo"<h2>Float</h2>";
                $conpunto = 8.3456;
                echo "La variable $conpunto es: ".gettype($conpunto) . " y tiene el valor de: " .$conpunto ."<br>";
                var_dump($conpunto);
                echo "<br> Le pregunto con is_float(): ";
                echo is_float($conpunto);
                
                //El tipo 10 elevado a 10
                echo"<h2>Numeros base cientifica</h2>";
                $numbasecientifica = 2.52e10;
                echo "La variable numbasecientifica es: " .gettype($numbasecientifica).
                " tiene el valor de: " .$numbasecientifica."<br>";
                var_dump($numbasecientifica);
                echo "<br> Le pregunto con is_float(): ";
                echo is_float($numbasecientifica);

                //Convertir hexadecimal a entero
                echo"<h2>Convertir hexa a entero</h2>";
                $hex = 0xFE;
                echo "La variable hex es: " .gettype($hex).
                " tiene el valor de: " .$hex."<br>";
                var_dump($hex);
                
                //Convertir una variable a otro base (decimal, hexa, binaria)
                echo"<h2>Convertir variable</h2>";
                echo base_convert($hex,10,16);

                //Función para ver si una variable es numerico 
                echo "<br>Si el hexadecimal es numerico : ". is_numeric($hex);

                //Tipo cadena
                echo"<h2>String</h2>";
                $cadena = "23.67";
                echo "<br>La variable cadena es " .gettype($cadena ).
                " tiene el valor de: " .$cadena ."<br>";
                var_dump($cadena );
                echo "<br> Le pregunto con is_string(): ";
                echo is_string($cadena);
                echo "<br> Le pregunto con is_numeric(): ";
                echo is_numeric($cadena);

                //Tipo null
                echo"<h2>Nulo</h2>";
                $nulo = null;
                echo "<br>La variable nulo es " .gettype($nulo).
                " tiene el valor de: " .$nulo ."<br>";
                var_dump($nulo);
                echo "<br> Le pregunto con is_null(): ";
                echo is_null($nulo);

                //Cambiar el tipo de dato
                //Tengo $hex y lo quiero convertir a float
                echo"<h2>Conversiones</h2>";
                echo gettype($hex)." pasa a ";
                settype($hex, "float");
                echo gettype($hex);

                //Convertir variables de forma automatica
                $a = 4;
                $b = 2.5;
                $s = $a + $b;
                echo "<br>Valor " .$s. " y tipo " .gettype($s);

                //Cast nosotros
                $castint = $a + (int) $b;
                echo "<br>Valor " .$castint. " y tipo " .gettype($castint);

                //VARIABLES DE VARIABLES
                echo"<h2>Variables de variables</h2>";
                $var = "uno";
                $$var = "dos";
                echo $var;
                echo "<br>";
                echo $$var . " es lo mismo que " .$uno;

                //VARIABLES por referencia
                echo"<h2>Variables por referencia</h2>";
                $d = 5;
                $e = &$d;
                //sigue valiendo 5
                $d = $d + 1;
                echo $e;

                //VARIABLES predefinidas, superglobales
                //Variables en la URL -> ?nombre=aaron&apellido=dediego
                echo"<h2>Variables superglobales</h2>";
                //Cabecera
                echo "POST: ";
                print_r($_POST);
                echo "<br>";
                //Url
                echo "GET: ";
                print_r($_GET);
                //Recoge lo que viene por POST y lo que viene por GET
                echo "<br>";
                echo "REQUEST: ";
                print_r($_REQUEST);
                //Necesitamos una sesión para hacer login, da error sin un usuario
                echo "<br>";
                echo "SESSION: ";
                //print_r($_SESSION);
                echo "<br>";
                echo "SERVER: ";
                print_r($_SERVER);

                //  Ejercicio comprobar que llega la variable
                echo"<h2>GET</h2>";
                if(isset($_GET['nombre']) && $_GET['nombre'] == 'aaron')
                    echo "<br>" .$_GET['nombre'];
                else
                    echo "INEXISTENTE"
                    
                //Si esta bien programado el html $_GET['idioma'] sin if

            ?>
        </main>
    <footer>©Copy Aaron de Diego</footer>
</body>
</html>