<?php
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

    return $_SERVER["PHP_SELF"];

}

function enviado(){
    return isset($_REQUEST['Enviado']);
}


function self_imp(){

    echo $_SERVER["PHP_SELF"];

}

function letraDNI($integer){

    $letra = $integer%23;

    $array = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");

    foreach ($array as $value) {
        $index = $array[$letra];
    }
    
    return $index;
}

function leeTexto(){
    $rutaFichero = "../ficheros/".$_REQUEST['fich'];

    if(!$fp = fopen($rutaFichero,'r')){
        echo "No se ha podido abrir el fichero";
        exit;
    }
    $leo = fread($fp,filesize($rutaFichero));
    $leo = str_replace("\n", "<br>", $leo);
    echo $leo;
    fclose($fp); 
}

function editaTexto(){
    $rutaFichero = "../ficheros/".$_REQUEST['fich'];

    if(!$fp = fopen($rutaFichero,'a')){
        echo "No se ha podido abrir el fichero";
        exit;
    }
    $texto = leeTexto();
    fwrite($fp,$texto,strlen($texto));
    fclose($fp);
}

?>