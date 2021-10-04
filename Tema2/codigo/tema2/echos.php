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
        <h1>Mostrar por pantalla</h1>
        <h2 class="subtitulo">Desarrollo Web en Entorno Servidor</h2>
    </header>
    <main>
        <a href=""></a>
        <?
            //Sirve para escribir mucho texto con comillas, variables y caracteres especiales
            //El HTML también lo interpreta
            echo <<< MITEXTO
            Estamos en clase de DWES
            y quiero escribir "con comillas"
            \n cosas raras <h1>HOLA</h1>  
            salimos en media hora mi gente
            MITEXTO;
            echo ('Hola clase'); //Parentesis opcionales pero recomendables
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
    </main>
    <footer>©Copy Aaron de Diego</footer>
</body>
</html>