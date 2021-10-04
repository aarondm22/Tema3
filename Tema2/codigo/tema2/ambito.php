<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ámbito</title>
    <link href="../../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Pagina de Aaron</h1>
        <p id="subtitulo">Ámbito en php</p>
    </header>
        <main>
            <?php
                //Al no estar en el mismo ambito, dentro de la funcion nos salta un error
                $a = 1;
                //local vs global
                function ambito(){
                    //Se pone global para que sepa que nos referimos a la variable que esta fuera
                    global $a;
                    echo $a;
                }

                ambito();
                echo "<br>";

                //La variable al ser estática no se vuelve a crear
                //static se inicializa una sola vez
                function contador(){
                    static $b = 0;
                    $b++;
                    echo $b;
                }

                contador();
                contador();
                contador();
                contador();
            ?>
            <br>
            <a href="indexTema2.php">
                <img src="../../media/volver.svg">
                Volver al Index del Tema 2
            </a>
        </main>
    <footer>
    ©Copy Aaron de Diego
    </footer>
</body>
</html>