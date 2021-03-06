<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index Tarea 12</title>
    <link href="./webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Index de la Tarea 12</h1>
        <h2 class="subtitulo">Desarrollo Web en Entorno Servidor</h2>
    </header>
    <main>
        <?php
            require_once("./libreria/funcionesBD.php");            
            require_once("./libreria/conexionBD.php");
            require_once("./segura/datosLoL.php");
            //require_once("./segura/datosCasa.php");

            if(isset($_REQUEST['Crear'])){
                cargar();
            }
        ?>
        <ul>
            <?php
                if(conexionBD()==false){
            ?>
            <li>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"  name="creaBBDD" enctype="multipart/form-data">
                    <input type="submit" name="Crear" value="Crear" class="btn btn-danger" >
                </form> 
            </li>
            <?php
                }else{
                    echo "<li>Se ha creado correctamente </li>";
                }
            ?>
            <br>
            <li>
                <a href="./codigo/leerTabla.php">Leer Tabla</a>
            </li>
            <br>
            <li>
                <a href="./codigo/insertarReg.php">Insertar registro</a>
            </li>
            <br>
            <li>
                <a href="../index.html">
                    <img src="./media/volver.svg">
                    Volver al Temario
                </a>
            </li>
        </ul>
        <br>
    </main>
    <footer>©Copy Aaron de Diego</footer>
</body>
</html>