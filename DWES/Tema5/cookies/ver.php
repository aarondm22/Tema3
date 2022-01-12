<?php
    require_once "./funciones/consultas.php";

    if(isset($_REQUEST["codigo"])){
        $codigo = $_REQUEST["codigo"];
        $producto = buscaProducto($codigo);

        if(!isset($_COOKIE['visitado'])){
            echo "No hay cookie";
            //Cuando solo es una
            //setcookie("visitado",$codigo,time()+12308,'/');
            //Cuando quiero que sea un array
            setcookie("visitado[0]",$codigo,time()+12308,'/');
        }else{
            //orden de la cookies. Van a ser 3
            //contar cuantas hay
            $arrayCookie = $_COOKIE['visitado'];
            $numero = count($arrayCookie);
            //Para que no se repitan los valores
            if(!in_array($codigo, $arrayCookie)){
                if($numero<3){
                    array_unshift($arrayCookie,$codigo);
                    foreach ($arrayCookie as $key => $value) {
                        setcookie('visitado['.$key.']',$value,time()+12308,'/');
                    }
                }else{
                    //Ordenar poniendo el primero el ultimo codigo
                    array_unshift($arrayCookie,$codigo);
                    array_pop($arrayCookie);
                    foreach ($arrayCookie as $key => $value) {
                        setcookie('visitado['.$key.']',$value,time()+12308,'/');
                    }
                }
            }
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