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

function escribeTexto(){
    $rutaFicheroInicial = "../ficheros/fichero.txt";
    $rutaFicheroTemporal = "../ficheros/temp.txt";
    
    
    //Escribimos lo que vayamos a modificar en un fichero temporal
    if(!$ftemp = fopen($rutaFicheroTemporal,'w')){
        echo "Ha habido un error al abrir el fichero";
        exit;
    }

    $ip = basename($_SERVER['REMOTE_ADDR']);
    $fecha = date('D, d M Y H:i:s O', time());
    $visitas = 1;
    //La primera vez si no existe escribimos la primera linea
    if(!file_exists($rutaFicheroInicial)){
        if(!$finicial = fopen($rutaFicheroInicial,'w')){
            echo "Ha habido un error al abrir el fichero";
            exit;
        }
        $linea = "Ip: ".$ip . "Visitas=".$visitas. "=  " .$fecha;
        fwrite($ftemp, $linea, strlen($linea));
        echo $linea;
    }
    else{  
        if(!$finicial = fopen($rutaFicheroInicial,'r')){
        echo "Ha habido un error al abrir el fichero";
        exit;
    }}
    //Leemos si existe algo escrito en el fichero
    while($linea = fgets($finicial, filesize($rutaFicheroInicial))){
        echo $linea;
        echo "<br>";
        $expIP = explode(".", $ip);
        $expVI = explode("=",$linea);
        if($ip!=$expIP[3]){
            //Volvemos a juntar el array con implode y le metemos un intro al final y despues escribimos linea a linea
            $ip = implode(".", $expIP);
            $linea = "Ip: ".$ip . "  Visitas=".$expVI[1]++. "=  " .$fecha;
            $linea = implode("=", $expVI);
            $linea = $linea ."\n";
            fwrite($ftemp, $linea, strlen($linea));
        }else{
            $visitas++;
            $linea = "Ip: ".$ip . "Visitas=".$visitas. "=  " .$fecha;
            fwrite($ftemp, $linea, strlen($linea));
        }
    }
    
    fclose($finicial);
    fclose($ftemp);
    //Reemplazamos el fichero temporal por el inicial
    //borramos el inicial y renombramos
    unlink($rutaFicheroInicial); //Deja de indexar el fichero inicial
    rename($rutaFicheroTemporal, $rutaFicheroInicial);
}

//Validaciones

function validaNomApe(){
    $patron = '/[^A-Z][a-z]{3,}\s[A-Z][a-z]{3,}\s[A-Z][a-z]{3,}$/';
    $patronCor = '/^[A-Z][a-z]{2,}\s[A-Z][a-z]{2,}\s[A-Z][a-z]{2,}$/';
    if(enviado() && empty($_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Debe haber un nombre </label>";
        return false;
    } 
    else if(enviado() && preg_match($patron, $_REQUEST['nombre']) == false){
        echo "<label for='nombre' style='color: red'>Formato Mmm Mmm Mmm</label>";
        return false;
    }
    return true;
}

function validaExp(){
    $patron = '/^[0-9]{2}[A-Z]{3}\/[0-9]{2}$/';
    if(enviado() && empty($_REQUEST['exp'])){
        echo "<label for='exp' style='color: red'>Debe haber un expediente </label>";
        return false;
    } 
    else if(enviado() && preg_match($patron, $_REQUEST['exp']) == false){
        echo "<label for='exp' style='color: red'>Formato NNLLL/NN</label>";
        return false;
    }
    return true;
}

function validaSel(){
    if(isset($_REQUEST['Enviado']) && (($_REQUEST['curso'])=="no")){
        echo "<label for='curso' style='color: red'>Debe escoger una seleccion</label>";
        return false;
    }else
        return true;
}

function validaCheck(){
    if(isset($_REQUEST['enviado2'])){
        if(!isset($_REQUEST['asig'])){
            echo "<label for='asig' style='color: red'>Debe haber uno marcado</label>";
            return false;
        }else if(count($_REQUEST['asig'])<1 || count($_REQUEST['asig'])>3){
            echo "<label for='asig' style='color: red'>Debe haber minimo uno maximo tres</label>";
            return false;
        }
        return true;
    }
}
//Mantener

function mantenerNom(){
    if(enviado() && !empty($_REQUEST['nombre'])){
        echo ($_REQUEST['nombre']);
    }
}

function mantenerExp(){
    if(enviado() && !empty($_REQUEST['exp'])){
        echo ($_REQUEST['exp']);
    }
}

function mantenerSel($seleccion){
    if(isset($_REQUEST['Enviado']) && ($_REQUEST['curso']==$seleccion)){
        echo "selected";
        return true;
    }
}

//Validaciones formulario
function primera(){
    if(enviado()){
        if(validaNomApe())
            return false;
        if(validaExp())
            return false;
        if(validaSel())
            return false;
        if(validaCheck())
            return false;
    }else{
        return false;
    }
    return true;
}

function segunda(){
    if(isset($_REQUEST["enviado2"])){
        if(count($_REQUEST["asig"])>1)
            return true;
    }
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