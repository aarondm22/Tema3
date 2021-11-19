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
    
    echo $leo;
    fclose($fp); 
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
        if(count($tabla)>0){
        echo "<td>";
        echo "<a id='modTabla' href=editaCSV.php?alum=$tabla[0]&nota1=$tabla[1]&nota2=$tabla[2]&nota3=$tabla[3]> Editar</a>";
        echo "</td>";
        }
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
    $primera = true;
    while($linea = fgets($fp, filesize($rutaFichero2))){ 
        $tabla = explode(";", $linea);
        if(isset($_REQUEST['notas1'])&& isset($_REQUEST['notas2'])&& isset($_REQUEST['notas3'])){
            if(($_REQUEST['alumnoX']) == $tabla[0]){
                $tabla[1] = $_REQUEST['notas1'];
                $tabla[2] = $_REQUEST['notas2'];
                $tabla[3] = $_REQUEST['notas3'];
                //Volvemos a juntar el array con implode y le metemos un intro al final y despues escribimos linea a linea
                $linea = implode(";", $tabla);        
                $linea = $linea ."\n";
            }
        }  
        fwrite($ftemp, $linea, strlen($linea));
    }
    
    fclose($fp);
    fclose($ftemp);

    unlink($rutaFichero2); //Deja de indexar el fichero inicial
    rename($rutaFicheroTemporal2, $rutaFichero2);
}

?>