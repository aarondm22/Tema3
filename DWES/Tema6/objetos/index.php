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

ProductoMagico::muestraContador();
echo "<br>";

//Si un objeto ya instanciado pertenece a una clase
if($pMagico instanceof ProductoMagico){
    echo "Perteneces<br>";
}else{
    echo "No pertenece<br>";
}

//Nos devuelve un array con los metodos que tiene una clase en concreto
print_r(get_class_methods('ProductoMagico'));
echo "<br>";

//Si existe una clase
if(class_exists('ProductsoM')){
    echo "Existe la clase";
}else{
    echo "No existe";
}
echo "<br>";

//Heredar alias a las clases

class_alias('Producto','Articulo');
$art = new Articulo();

//Si un objeto ya instanciado pertenece a una clase
//Aunque de error si pertenece 
if($art instanceof Articulo){
    echo "Perteneces<br>";
}else{
    echo "No pertenece<br>";
}

//Si un metodo existe
if(method_exists('Producto','muestra')){
    echo "Si existe el metodo<br>";
}else{
    echo "No existe<br>";
}

//Atributos de clase
print_r(get_class_vars('ProductoMagico'));
echo "<br>";
//Atributos de objeto
//Solo nos muestra aquellos que son publicos, es decir a los que podemos acceder
print_r(get_object_vars($pMagico));
echo "<br>";

//Si existe la propiedad id
if(property_exists('ProductoMagico','id')){
    echo "Existe";
}else{
    echo "No existe";
}

echo "<br>";

//Quiero comparar objetos
//p1 id=1 descripcion=raton PVP=10
//p2 id=1 descripcion=raton PVP=10

$p1 = new ProductoMagico("1","raton",10);
$p2 = new ProductoMagico("1","raton",10);

//Comparar un objeto segun sus atributos
if($p1 == $p2){
    echo "Son iguales";
}else{
    echo "No son iguales";
}

echo "<br>";

//Comparar un objeto segun su posicion en memoria
if($p1 === $p2){
    echo "Son iguales";
}else{
    echo "No son iguales";
}

echo "<br>";

//Serializar un objeto
$serializado = serialize($p1);

//Desserializar
$objetonuevo = unserialize($serializado);
echo $objetonuevo;
?>