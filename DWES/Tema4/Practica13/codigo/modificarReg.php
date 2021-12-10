<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Registros</title>
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
            //require_once("../segura/datosCasa.php");
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
                    //echo selectId();
                    $consulta = selectId();
                    $reg = explode(",", $consulta);
                ?>
                <label for="nombre" id="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $reg[1]?>" >
                <?php validaNom(); ?>
                <br>
                <br>
                <label for="kills" id="kills">Kills:</label>
                <input type="text" name="kills" id="kills" value="<?php  echo $reg[2]?>">
                <?php validaKills(); ?>
                <br>
                <br>
                <label for="cumple" id="cumple">Fecha:</label>
                <input type="text" name="cumple" id="cumple" value="<?php echo $reg[3]?>">
                <?php validaCumple(); ?>
                <br>
                <br>
                <input type="submit" name="guardado" value="Guardar" class="btn btn-danger">
            </form>
            <?php
                if(isset($_REQUEST['guardado'])){
                    if($_REQUEST['guardado']=='Guardar' && validaForm()){
                        actualizar();
                        header('Location: leerTabla.php');
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