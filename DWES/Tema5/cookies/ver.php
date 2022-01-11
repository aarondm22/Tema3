<?php
    require_once "./funciones/consultas.php";

    if(isset($_REQUEST["codigo"])){
        $codigo = $_REQUEST["codigo"];
        $producto = buscaProducto($codigo);

        if(!isset($_COOKIE['visitado'])){
            echo "No hay cookie";
            setcookie("visitado",$codigo,time()+12308,'/');
        }else{
            setcookie("visitado",$codigo,time()+12308,'/');
        }
    }else{
        header('Location: index.php');
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <?php
    if(isset($producto)){
        echo "<h1>".$producto["nombre"]."</h1>";
        echo "<p>".$producto["descripcion"]."</p>";
        echo "<img src='./".$producto['alta']."'>";
    }
    ?>
    <br>
    <a href="./index.php" style="font-size: 1.5em">
        <img src="../../media/volver.svg">
        Volver
    </a>
</body>
</html>