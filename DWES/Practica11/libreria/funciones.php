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

function editaTexto(){
    $rutaFichero2 = "../ficheros/".$_REQUEST['fich'];
    $rutaFicheroTemporal = "../ficheros/temp.txt";

    if(!$fp = fopen($rutaFichero2,'r')){
        echo "No se ha podido abrir el fichero";
        exit;
    }

    if(!$ftemp = fopen($rutaFicheroTemporal,'w')){
        echo "Ha habido un error al abrir el fichero";
        exit;
    }
    $texto = $_REQUEST['texto'];
    
    fwrite($ftemp, $texto, strlen($texto));
    
    fclose($fp);
    fclose($ftemp);

    unlink($rutaFichero2); //Deja de indexar el fichero inicial
    rename($rutaFicheroTemporal, $rutaFichero2);
}

function leeTabla(){
    $rutaFichero = "../ficheros/notas.csv";

    if(!$fp = fopen($rutaFichero,'r')){
        echo "No se ha podido abrir el fichero";
        exit;
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

    while($linea = fgets($fp, filesize($rutaFichero))){ 
        echo "<tr>";
        $tabla = explode(";", $linea);
        foreach ($tabla as $key => $dato) {
            echo "<td>";
            echo $tabla[$key];
            echo "<input type='hidden' name='alumno' value='$tabla[0]'>";
            echo "</td>";
        }
        echo "<td>";
        echo "<a id='modTabla' href=editaCSV.php?alum=$tabla[0]&nota1=$tabla[1]&nota2=$tabla[2]&nota3=$tabla[3]> Editar</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    fclose($fp);
}

function editaTabla(){
    $rutaFichero2 = "../ficheros/notas.csv";
    $rutaFicheroTemporal2 = "../ficheros/temp2.txt";

    if(!$fp = fopen($rutaFichero2,'r')){
        echo "No se ha podido abrir el fichero";
        exit;
    }

    if(!$ftemp = fopen($rutaFicheroTemporal2,'w')){
        echo "Ha habido un error al abrir el fichero";
        exit;
    }

    while($linea = fgets($fp, filesize($rutaFichero2))){ 
        $tabla = explode(";", $linea);
        if(isset($_REQUEST['notas1'])&& isset($_REQUEST['notas2'])&& isset($_REQUEST['notas3'])){
            $tabla[1] = $_REQUEST['notas1'];
            $tabla[2] = $_REQUEST['notas2'];
            $tabla[3] = $_REQUEST['notas3'];
        }
        
        fwrite($ftemp, $linea, strlen($linea));
    }
    
    fclose($fp);
    fclose($ftemp);

    unlink($rutaFichero2); //Deja de indexar el fichero inicial
    rename($rutaFicheroTemporal2, $rutaFichero2);
}

?>