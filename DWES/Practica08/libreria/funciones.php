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

    return $_SERVER["PHP_SELF"];

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

//Funciones para validar

function validaAlfa(){
    if(isset($_REQUEST['Enviado']) && empty($_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Debe haber un nombre </label>";
    }
}

function validaNum(){
    if(isset($_REQUEST['Enviado']) && empty($_REQUEST['apellido'])){
        echo "<label for='apellido' style='color: red'>Debe haber un apellido </label>";
    }
}

function validaFecha(){
    if(isset($_REQUEST['Enviado']) && empty($_REQUEST['fecha'])){
        echo "<label for='fecha' style='color: red'>Debe haber una fecha </label>";
    }
}

function validaOp(){
    if(!isset($_REQUEST['opciones']) && isset($_REQUEST['Enviado']))
        echo "<label for='opciones' style='color: red'>Debe haber algo</label>";
    
}

function validaSel(){
    if(isset($_REQUEST['Enviado']) && ($_REQUEST['seleccion']=="sel"))
        echo "<label for='seleccion' style='color: red'>Debe escoger una seleccion</label>";
    
}

//Funciones para mantener los datos introducidos correctamente

function mantenerAlfa(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['nombre'])){
        echo ($_REQUEST['nombre']);
    }
}

function mantenerAlfaOp(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['nombreOpcional'])){
        echo ($_REQUEST['nombreOpcional']);
    }
}

function mantenerNum(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['apellido'])){
        echo ($_REQUEST['apellido']);
    }
}

function mantenerNumOp(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['apellidoOpcional'])){
        echo ($_REQUEST['apellidoOpcional']);
    }
}

function mantenerFecha(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['fecha'])){
        echo ($_REQUEST['fecha']);
    }
}

function mantenerFechaOp(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['fechaOp'])){
        echo ($_REQUEST['fechaOp']);
    }
}

function mantenerOpcion($opcion){
    if(isset($_REQUEST['Enviado']) && isset($_REQUEST['opciones']) && ($_REQUEST['opciones']==$opcion)){
        echo "checked";
    }
}

function mantenerSeleccion($seleccion){
    if(isset($_REQUEST['Enviado']) && ($_REQUEST['seleccion']==$seleccion)){
        echo "selected";
    }
}

function mantenerCheck($caja){
    if(isset($_REQUEST['Enviado']) && ($_REQUEST['caja[]']==$caja)){
        echo "checked";
    }
}



?>