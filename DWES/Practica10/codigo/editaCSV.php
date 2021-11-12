<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla CSV</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Editar Notas de Alumnos</h1>
    </header>
    <main>
         <?php
            require_once("../libreria/funciones.php");
        ?>
        <div class="entrada">
            <form action="editar.php" method="post">
                <input type="hidden" name="fich" value="<?php echo $_REQUEST['fich'];?>">
                <h3 for="areatext">Notas del Alumno</h3>
                <textarea name="texto" id="areatext" rows="10" cols="50"><?php leeTexto();?></textarea>
                <br>
                <br>
                <input type="submit" name="boton" value="Guardar">
            </form>
            <?php
                if(isset($_REQUEST['boton'])){
                    if($_REQUEST['boton']=='Guardar'){
                        editaTexto();
                        header('Location: leer.php?fich='.$_REQUEST['fich']);
                    }
                }
            ?>
        </div>  
        <br>
        <a id="link" href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a id="link" href="./eligeFichero.php">
            <img src="../media/volver.svg">
            Volver a Elegir un Fichero
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>