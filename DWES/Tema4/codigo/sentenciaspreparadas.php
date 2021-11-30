<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sentencias Preparadas</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Prepared Statement</h1>
    </header>
    <main>
    <?php
    require_once("../segura/datosBD.php");
    //Sentencias preparadas sin resultados
    if(!($conexion = @mysqli_connect(IP, USER, PASS, BBDD))){
        echo "";
        echo "<br>Numero: " .mysqli_connect_errno();
        echo "<br>Error: " .mysqli_connect_error();
        exit();
    }else{
        //Insert values
        $sql = "insert into alumno values (?,?,?)";
        $id = 99;
        $nombre = 'Santiago';
        $edad = 50;

        $consulta = mysqli_prepare($conexion, $sql);

        //isi es Entero(id), String(nombre), Entero(edad)
        //Ahora añadimos $id, $nombre, $edad a la consulta
        mysqli_stmt_bind_param($consulta, 'isi',$id,$nombre,$edad);
        //Ejecutamos
        //mysqli_stmt_execute($consulta);
        
        //En nuestra tabla alumno aparecera una fila nueva con id 99 nombre Santiago y edad 50
        mysqli_close($conexion);


    }
    //Sentencias preparadas con resultados (select) con objetos
    $miConexion = new mysqli();
    @$miConexion -> connect(IP,USER,PASS,BBDD);

    if($miConexion->connect_errno != 0){
        echo "<br>Error: " .$miConexion->connect_error;
        exit();
    }else{
        //Inicializar el objeto stmt
        $preparado = $miConexion->stmt_init();

        $sql = "select * from alumno where id > ?";
        $preparado -> prepare($sql);
        $id = 5;
        $preparado ->bind_param('i',$id);

        $preparado -> execute();
        $preparado ->bind_result($rid,$rnombre,$redad);

        while($preparado->fetch()){
            echo "<br>".$rid. ",".$rnombre.",".$redad;
        }
        
        $preparado -> free_result();
        $miConexion->close();

    }

    //Transacciones 
    $miConexion = new mysqli();
    @$miConexion -> connect(IP,USER,PASS,BBDD);

    if($miConexion->connect_errno != 0){
        echo "<br>Error: " .$miConexion->connect_error;
        exit();
    }else{
        $miConexion->autocommit(false);
        //Inicializar el objeto stmt
        $sql ="delete from alumno where id = ?";
        $id = 99;
        $stmt = $miConexion->stmt_init();
        $stmt -> prepare($sql);
        $stmt -> bind_param('i',$id);
        $stmt -> execute();
        //Decido si vuelvo al inicio o confirmo los cambios
        //rollback rehace las consultas si manejamos los fallos con un 
        //if(fallo) manejar errores
        //$miConexion->rollback();
        //si todo ha ido bien, guarda los cambios
        $miConexion->commit();
        echo "<br>Todo ha ido de lujo";
        
        $stmt -> free_result();
        $miConexion->close();
    }
    ?>
    <br>
    <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../media/lupa.svg">
        </a>
        <br>
        <br>
        <a href="../index.html">
            <img src="../media/volver.svg">
            Volver al Index Tema 4
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>