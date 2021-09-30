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
        <h2 class="subtitulo">Index del Tema 2</h2>
    </header>
        <main>
            <a href=""></a>
            <?
                echo ('Hola clase'); //Parentesis opcionales per recomendables
                print " Hola mundo"." jaja <br> kapasao";
            ?>
            <br>
            <?
                //Imprimir entero, primero lo convierte y luego lo imprime
                printf("%d" , "17.999");
                echo "<br>";
                //Le decimos cuantos decimales 3 en este caso
                printf("%.3f", "17.999");
                //Sin decirle cuantos decimales
                echo "<br>";
                printf("%f", "17.999");
                //Imprimir cadena
                echo "<br>";
                printf("%s", "17.999");
            ?>
            <br>
            <?php
                //Información sobre una variable o varias
                var_dump("aaron", 3.14, 5);
            ?>
            <h2>Enlace para ir a Hola mundo antiguo</h2>
            <a href="HolaMundo.php">Hola mundo antiguo</a>
            <h2>Hedoc</h2> 
            <?php
                //Sirve para escribir mucho texto con comillas, variables y caracteres especiales
                //El HTML también lo interpreta
                echo <<< MITEXTO
                Estamos en clase de DWES
                y quiero escribir "con comillas"
                \n cosas raras <h1>HOLA</h1>  
                salimos en media hora mi gente
                MITEXTO;
            ?>
            <h2>Variables</h2>
            <a href="Variables.php">Hola mundo antiguo</a>
        </main>
    <footer>®Copy Aaron de Diego</footer>
</body>
</html>