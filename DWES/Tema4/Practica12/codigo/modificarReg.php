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
        <h1>Modificar registro</h1>
    </header>
    <main>
         <?php
            require_once("../libreria/funcionesBD.php");
            require_once("../libreria/conexionBD.php");
            require_once("../segura/datosLoL.php");
        ?>
        <center>
        <div class="entrada">
            <form action="modificarReg.php" method="post">
                <input type="hidden" name="id" value="<?php if(isset($_REQUEST['id']))echo $_REQUEST['id'];?>">
                <h3 for="areatext">Modificar Registro</h3>
                <br>
                <label for="id" id="id">Id:</label>
                <input type="text" name="id" id="id" value="<?php if(isset($_REQUEST['id']))echo $_REQUEST['id'];?>"
                disabled>
                <br>
                <br>
                <?php
                    echo selectId();
                ?>
                <label for="nombre" id="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php //if(isset($_REQUEST['nota1'])) echo $_REQUEST['nota1']?>">
                <br>
                <br>
                <label for="kills" id="kills">Kills:</label>
                <input type="text" name="kills" id="kills" value="<?php //if(isset($_REQUEST['nota2'])) echo $_REQUEST['nota2']?>">
                <br>
                <br>
                <label for="fecha" id="fecha">Fecha:</label>
                <input type="text" name="fecha" id="fecha" value="<?php //if(isset($_REQUEST['nota3'])) echo $_REQUEST['nota3']?>">
                <br>
                <br>
                <input type="submit" name="boton" value="Guardar">
            </form>
            <?php
                if(isset($_REQUEST['boton'])){
                    if($_REQUEST['boton']=='Guardar'){
                        //editaReg();
                        //header('Location: leerCSV.php');
                    }
                }
            ?>
        </div>  
        </center>
        <br>
        <a id="link" href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a id="link" href="./leerTabla.php">
            <img src="../media/volver.svg">
            Volver a Leer Registros
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>