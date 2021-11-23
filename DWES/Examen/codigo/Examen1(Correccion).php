<?php

//xml

$ruta = "../ficheros/ip.xml";
//si existe
if(file_exists($ruta)){
    //leer y ver si tengo que modif o añadir
    $xml = simplexml_load_file($ruta);
    $XML = dom_import_simplexml($xml)->ownerDocument;
    $XML -> formatOutput = true;
    //busco si hay ips
    $ips = $XML -> getElementsByTagName("ip");
    //bandera booleana si existe
    $existeIP = false;
    foreach ($ips as $value) {
        echo "Ip: ". $value -> nodeValue . " veces ". $value -> getAttribute("veces") ." Fecha: " .$value -> getAttribute("fecha") ."\n";
        //Si la ip se corresponde con la conexion suma 1 y pone la fecha
        if($_SERVER["REMOTE_ADDR"]==$value -> nodeValue){
            $veces = $value -> getAttribute("veces") +1 ;
            $value -> setAttribute ("veces", $veces);
            $value -> setAttribute ("fecha", date(DATE_RFC822));
        }
    }
    if(!$existeIP){
        $raiz = $XML -> firstChild();
        $conexion = $raiz->appendChild($XML->createElement("Conexion"));
        $ip = $XML -> createElement("ip", $_SERVER["REMOTE_ADDR"]);
        $ip->setAttribute("veces", 1);
        $ip->setAttribute("fecha", date(DATE_RFC822));
        $conexion->appendChild($ip);
    }

}else{
    //crear un xml y añadir la primera linea
    echo "No hay datos aun";
    $XML = new DOMDocument("1.0","utf-8");
    $XML ->formatOutput = true;

    //raiz
    $raiz = $XML ->appendChild($XML ->createElement("Conexiones"));
    $conexion = $raiz->appendChild($XML->createElement("Conexion"));
    $ip = $XML -> createElement("ip", $_SERVER["REMOTE_ADDR"]);
    $ip->setAttribute("veces", 1);
    $ip->setAttribute("fecha", date(DATE_RFC822));
    $conexion->appendChild($ip);
    
}

$XML->save($ruta);
?>