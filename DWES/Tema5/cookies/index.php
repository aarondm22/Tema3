<?php
    require_once "./funciones/consultas.php";

    $array = buscaProductos();
    if(isset($_COOKIE['visitado'])){
        $arrayCookie = $_COOKIE['visitado'];
        $arrayVisitados = array();
        foreach ($arrayCookie as $key => $value) {
            array_push($arrayVisitados,buscaProducto($value));
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <table class= "table">
                    <thead><td>Nombre</td><td>Imagen</td><td>Ver</td></thead>
                        <tbody>
                            <?php
                                //Para cada producto
                                foreach ($array as $key => $value) {
                                    echo "<tr>";
                                    echo "<td>".$value['nombre'].
                                    "</td><td><img src='./".$value['baja'].
                                    "'></td><td><a href='./ver.php?codigo=".$value['codigo'].
                                    "'>Ver</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                </table>
            </div>
            <div class="col-3">
                <h2>Ultimas visitas</h2>
                <?php
                foreach ($arrayVisitados as $producto) {
                    echo $producto['nombre'].
                    "<img src='./".$producto['baja']."'>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>