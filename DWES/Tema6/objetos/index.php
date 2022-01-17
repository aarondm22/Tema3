<?php

require_once "./Producto.php";
require_once "./ProductoMagico.php";


echo "<h1>Producto</h1>";
$p = new Producto();

//Es privado no se puede modificar
//$p->id = "P01";
//$p->descripcion = "Ordenador tocho";
$p->setId("P01");
$p->setDescripcion("ORDENADOR DE LOCOS");
$p->setPVP(990);
echo $p->getId();
$p->muestra();


echo "<h1>Producto Magico</h1>";
$pMagico = new ProductoMagico("P02","Ventilador de la leche",109);

$pMagico->muestra();

echo $pMagico->__get("id");
echo "<br>";
echo $pMagico->__get("descripcion");
echo "<br>";
echo $pMagico->__get("PVP");
echo "<br>";
echo $pMagico->id;

$pMagico->__set("descripcion","Holi");
$pMagico->muestra();
$pMagico->descripcion = "Adios";
$pMagico->muestra();
echo "<h3>ToString</h3>";
echo $pMagico->__toString();
echo $pMagico;

//Para saber el numero de productos que hemos instanciado
echo ProductoMagico::$numeroProductos;
echo "<br>";

?>