<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficheros</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Elige Fichero</h1>
    </header>
    <main>
        <?php
        require_once("../libreria/funciones.php");
        ?>        
        <div class="entrada">
            <form action="eligeFichero.php" method="post">
                <label for="fich" >Nombre Fichero</label>
                <input type="text" name="fich" id="fich">
                <br>
                <br>
                <input type="submit" name="boton" value="Editar">
                <input type="submit" name="boton" value="Leer">
            </form>
        </div>
        <?php
        if(sizeof($_REQUEST)>0){
            if($_REQUEST['boton']=='Editar')
                header('Location: editar.php?fich='.$_REQUEST['fich']);
            if($_REQUEST['boton']=='Leer')
                header('Location: leer.php?fich='.$_REQUEST['fich']);
        }
        ?>
    <br>
        
        <a id="link" href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a id="link" href="../index.html">
            <img src="../media/volver.svg">
            Volver al Index Practica 10
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>