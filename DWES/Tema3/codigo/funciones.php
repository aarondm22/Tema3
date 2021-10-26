<?
function br(){

    echo "<br>";

}

function h1($cadena){

    echo "<h1>".$cadena."</h1>";

}

function p($cadena){

    echo "<p>".$cadena."</p>";

}

function self(){

    echo __FILE__;

}

function letraDNI($integer){

    $letra = $integer%23;

    echo $letra;

    $array = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");

    $index = array_search($array);

    echo $index;
}


?>