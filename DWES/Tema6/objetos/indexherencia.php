
<?php

require_once "./Ordenador.php";

$productogenerico = new Producto();
$productogenerico->setId("1");
$productogenerico->setDescripcion("Raton");
$productogenerico->setPVP(20);

$productogenerico->muestra();


$ordenador1 = new Ordenador();
$ordenador1->setId("2");
$ordenador1->setDescripcion("Ordenador");
$ordenador1->setPVP(500);
$ordenador1->setRam("8GB");
$ordenador1->setDiscoduro("500GB");

$ordenador1->muestra();

$ordenador1->aumentaPrecio(50);
$ordenador1->muestra();
?>