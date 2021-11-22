<?php

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

function transformaTexto(){
    $rutaFichero = "../ficheros/notas.csv";

    if(!$fp = fopen($rutaFichero,'r')){
        echo "No se ha podido abrir el fichero";
        exit;
    }

    $XML =  new DOMDocument("1.0", "utf-8");
    $XML -> formatOutput = true;

    $ElementoRaiz = $XML -> createElement("notas");
    $raiz = $XML -> appendChild($ElementoRaiz);

    while($linea = fgets($fp, filesize($rutaFichero))){ 
        $tabla = explode(";", $linea);
        $alumno = $XML ->createElement("alumno");
        $ElementoRaiz -> appendChild($alumno);
        foreach ($tabla as $key => $dato) {
            if($tabla[$key]==$tabla[0]){
                $nombrePropio = $tabla[0];
                $nombre = $XML ->createElement("nombre", $nombrePropio);
                $alumno -> appendChild($nombre);
            }else{
                $notaX = $tabla[$key];
                $notas = $XML ->createElement("nota".$key, $notaX);
                $alumno -> appendChild($notas);
            }
        }
    }

    fclose($fp); 
    $XML -> save("../ficheros/notas.xml");
}

function leeXmlTabla(){
    $rutaFichero = "../ficheros/notas.xml";
    if(file_exists($rutaFichero)){
        //Transforma el xml en un objeto de tipo simplexml
        $xml = simplexml_load_file($rutaFichero);
    }else{
        exit();
    }
    echo "<table id='tabla' border=1>";
    echo "<tr>";
    echo "<th>";
    echo "Alumno";
    echo "</th>";
    echo "<th>";
    echo "Nota1";
    echo "</th>";
    echo "<th>";
    echo "Nota2";
    echo "</th>";
    echo "<th>";
    echo "Nota3";
    echo "</th>";
    echo "</tr>";

    foreach ($xml as $alumno) {
        echo "<tr>";
        foreach ($alumno as $datos) {
            echo "<td>";
            echo $datos;
            echo "</td>";
        }
        
        echo "<td>";
        echo "<a id='modTabla' href=editaNotas.php?alum=".$alumno -> children()[0]."&nota1=".$alumno -> children()[1]."&nota2=".$alumno -> children()[2]."&nota3=".$alumno -> children()[3]."> 
        Editar</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function editaAlumnos(){
    $rutaFichero = "../ficheros/notas.xml";
    if(file_exists($rutaFichero)){
        //Transforma el xml en un objeto de tipo simplexml
        $xml = simplexml_load_file($rutaFichero);
    }else{
        exit();
    }

    $dom = dom_import_simplexml($xml)->ownerDocument;

    $etiquetasNombre = $dom->getElementsByTagName("nombre");

    foreach ($etiquetasNombre as $nombreAlumno) {
        if($nombreAlumno -> nodeValue == ($_REQUEST['alumnoX'])){
            $aux = $nombreAlumno;
            do{
                $aux = $aux-> nextSibling;
                if($aux -> nodeName == "nota1"){
                    $aux -> nodeValue = $_REQUEST['notas1'];
                    $aux -> setAttribute("Modificado","true");
                }
                if($aux -> nodeName == "nota2"){
                    $aux -> nodeValue = $_REQUEST['notas2'];
                    $aux -> setAttribute("Modificado","true");
                }
            }while(($aux -> nodeName != "nota3"));
            
            if($aux -> nodeName == "nota3"){
                $aux -> nodeValue = $_REQUEST['notas3'];
                $aux -> setAttribute("Modificado","true");
            }
        }
    }

    $dom -> save($rutaFichero);
}
?>