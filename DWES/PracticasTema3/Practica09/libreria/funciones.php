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

//Funciones para validar

//No puede estar vacio y minimo 3 caracteres
function validaNom(){
    $patron = '/^[a-z|A-Z]{3,}/';
    if(enviado() && empty($_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Debe haber un nombre </label>";
        return false;
    } 
    else if(enviado() && preg_match($patron, $_REQUEST['nombre']) == false){
        echo "<label for='nombre' style='color: red'>Tiene que tener al menos 3 caracteres</label>";
        return false;
    }
    return true;
}

//No puede estar vacio, minimo 3 caracteres el primer apellido, un espacio y minimo 3 caracteres el segundo apellido
function validaApe(){
    $patron = '/^[a-z|A-Z]{3,}\s[a-z|A-Z]{3,}/';
    if(enviado() && empty($_REQUEST['apellido'])){
        echo "<label for='apellido' style='color: red'>Debe haber un apellido </label>";
        return false;
    }
    else if(enviado() && preg_match($patron,  $_REQUEST['apellido'])==false){
        echo "<label for='apellido' style='color: red'>Debe haber 3 caracteres y un espacio entre medias </label>";
        return false;
    }
    return true;
}


//Validar mayor de edad y formato de la fecha
function validaFecha(){
    $patron = '/[0-9]{4}\/[0-1]{1}[0-9]{1}\/[0-9]{2}/';
    if(enviado() && empty($_REQUEST['fecha'])){
        echo "<label for='fecha' style='color: red'>Debe haber una fecha </label>";
        return false;
    }
    else if(enviado() && preg_match($patron,  $_REQUEST['fecha'])){
        $cumple = new DateTime($_REQUEST['fecha']);
        
        $hoy = new DateTime();
        $edad = $hoy->diff($cumple);
        if(($edad->y)<18){
            echo "<label for='fecha' style='color: red'>Tiene que ser mayor de edad </label>";
            return false;
        }
        return true;  
    }else if(enviado() && preg_match($patron,  $_REQUEST['fecha'])==false){
        echo "<label for='fecha' style='color: red'>Formato incorrecto</label>";
        return false;
    }
    return true;
}

//Validar Dni que no esté vacio, con un formato correcto y que la letra sea la correcta
function validaDni(){
    $patron = '/[0-9]{8}[A-Z]{1}/';
    if(enviado() && empty($_REQUEST['dni'])){
        echo "<label for='dni' style='color: red'>Debe haber un DNI </label>";
        return false;
    }
    else if(enviado() && preg_match($patron,  $_REQUEST['dni'])==false){
        echo "<label for='dni' style='color: red'>Formato DNI incorrecto</label>";
        return false;
    }
    else if(enviado() && preg_match($patron,  $_REQUEST['dni'])){
        $numDni = substr($_REQUEST['dni'], 0, -1);
        $letraDni = substr($_REQUEST['dni'], -1);
        if(letraDNI($numDni)!=$letraDni){
            echo "<label for='dni' style='color: red'>La letra no es correcta</label>";
        }
        return true;
    }
}

//Validar con expresiones regulares 1 o más caracteres, @, 1 o más caracteres, . y 2 o más caracteres.
function validaCorreo(){
    $patron = '/[a-z0-9]+@[a-z0-9]+\.[a-z0-9]{2,}/i';
    if(enviado() && empty($_REQUEST['correo'])){
        echo "<label for='correo' style='color: red'>Debe haber un correo </label>";
        return false;
    }
    else if(enviado() && preg_match($patron,  $_REQUEST['correo'])==false){
        echo "<label for='correo' style='color: red'>Formato correo incorrecto</label>";
        return false;
    }
    return true;
}

//Funciones para mantener los datos introducidos correctamente

function mantenerNom(){
    if(enviado() && !empty($_REQUEST['nombre'])){
        echo ($_REQUEST['nombre']);
    }
}

function mantenerApe(){
    if(enviado() && !empty($_REQUEST['apellido'])){
        echo ($_REQUEST['apellido']);
    }
}

function mantenerFecha(){
    if(enviado() && !empty($_REQUEST['fecha'])){
        echo ($_REQUEST['fecha']);
    }
}

function mantenerDni(){
    if(enviado() && !empty($_REQUEST['dni'])){
        echo ($_REQUEST['dni']);
    }
}

function mantenerCorreo(){
    if(enviado() && !empty($_REQUEST['correo'])){
        echo ($_REQUEST['correo']);
    }
}

?>