<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexion</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Conexion con BBDD</h1>
    </header>
    <main>
    <?php

    //Para conectar necesitamos el host, usuario, pass, bd(opcional)
    //Este archivo (datosBD.php) no puede estar accesible a cuialquier usuario
    require_once("../segura/datosBD.php");

    //El @ delante de mysqli_connect sirve para que php no nos muestre la tabla naranja con el error

    /***********************
     * 
     * Conexion con funciones de mysqli
     * 
     */
    echo "<br>Con Funciones";
    if(!($conexion = @mysqli_connect(IP, USER, PASS, BBDD))){
        echo "";
        echo "<br>Numero: " .mysqli_connect_errno();
        echo "<br>Error: " .mysqli_connect_error();
        exit();
    }else{
        echo "<br>Todo ha ido de locos";
        //Ejecutar consultas
        /* 
        $sql = "insert into alumno values(7,'pepe',28),(8,'juan',78)";
        $resultado = mysqli_query($conexion,$sql);
        if($resultado){
            echo "<br>Num filas afectadas: " .mysqli_affected_rows($conexion);
        }else{
            echo "<br>No se ha insertado nada";
        }
        */

        //  Ejecutar un select
        $sql = "select * from alumno";
        //Use va a buscar la informacion cuando hago fetch
        $resultado = mysqli_query($conexion,$sql, MYSQLI_STORE_RESULT);
        //Fetch es que vaya a la siguiente fila
        //Para cada fila introduce 0,id 1,nombre 2,edad en un array
        //mysqli_fetch_all Array de arrays con 0,1,2
        //mysqli_fetch_row Arrays con 0,1,2
        //mysqli_fetch_object Objetos con id,nombre,edad
        //mysqli_fetch_field Muestra todo lo que tiene que ver con la BBDD
        while($fila = mysqli_fetch_array($resultado)){
            echo "<pre>";
            print_r($fila);
            echo "</pre>";
        }
        //Vaciar lo que tiene $resultado
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }

    /**************************
     * 
     * 
     * Conexion con objetos
     * 
     */

    echo "<br>Con Objetos";
    $miConexion = new mysqli();
    @$miConexion -> connect(IP,USER,PASS,BBDD);

    if($miConexion->connect_errno != 0){
        echo "<br>Error: " .$miConexion->connect_error;
        exit();
    }else{
        echo "<br>Todo ha ido de locos otra vez";
        //Ejecutar consultas
       
        
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