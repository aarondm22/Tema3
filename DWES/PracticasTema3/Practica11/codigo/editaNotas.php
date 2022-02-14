<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar notas XML</title>
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
            <form action="editaNotas.php" method="post">
                <input type="hidden" name="alumnoX" value="<?php if(isset($_REQUEST['alum']))echo $_REQUEST['alum'];?>">
                <h3 for="areatext">Notas del Alumno</h3>
                <label for="alumno" id="alumno">Alumno:</label>
                <input type="text" name="alumnoX" id="alumno" value="<?php if(isset($_REQUEST['alum']))echo $_REQUEST['alum'];?>"
                disabled>
                <br>
                <br>
               
                <label for="notas1" id="notas1">Nota1:</label>
                <input type="text" name="notas1" id="notas1" value="<?php if(isset($_REQUEST['nota1'])) echo $_REQUEST['nota1']?>">
                <br>
                <br>
                <label for="notas2" id="notas2">Nota2:</label>
                <input type="text" name="notas2" id="notas2" value="<?php if(isset($_REQUEST['nota2'])) echo $_REQUEST['nota2']?>">
                <br>
                <br>
                <label for="notas3" id="notas3">Nota3:</label>
                <input type="text" name="notas3" id="notas3" value="<?php if(isset($_REQUEST['nota3'])) echo $_REQUEST['nota3']?>">
                <br>
                <br>
                <input type="submit" name="boton" value="Guardar">
            </form>
            <?php
                if(isset($_REQUEST['boton'])){
                    if($_REQUEST['boton']=='Guardar'){
                        editaAlumnos();
                        header('Location: LeeFicheroXML.php');
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
        <a id="link" href="./LeeFicheroXML.php">
            <img src="../media/volver.svg">
            Volver a Leer Notas
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>