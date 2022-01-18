
<?php
require_once "./ProductoMagico.php";
$p1 = new ProductoMagico("1","raton",10);
$p2 = new ProductoMagico("2","teclado",100);

$serializado = serialize($p1);
//Creamos cookie serializada
setcookie("producto",$serializado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio</title>
</head>
<body>
    <h1>Ejercicio Clase</h1>
    <a href="./pagina.php">Pulsa</a>
</body>
</html>