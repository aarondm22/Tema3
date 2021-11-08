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
    $patron = '/^[a-z]{1,2}$/';
    if(enviado() && empty($_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Debe haber un nombre </label>";
    } 
    else if(enviado() && preg_match($patron, $_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Tiene que tener al menos 3 caracteres</label>";
    }
}

//No puede estar vacio, minimo 3 caracteres el primer apellido, un espacio y minimo 3 caracteres el segundo apellido
function validaApe(){
    $patron = '/^[a-z]{3,100}\s[a-z]{3,100}/';
    if(enviado() && empty($_REQUEST['apellido'])){
        echo "<label for='apellido' style='color: red'>Debe haber un apellido </label>";
    }
    else if(enviado() && preg_match($patron,  $_REQUEST['apellido'])==false){
        echo "<label for='apellido' style='color: red'>Debe haber 3 caracteres y un espacio entre medias </label>";
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


function validaCheck(){
    if(isset($_REQUEST['Enviado'])){
        if(!isset($_REQUEST['caja'])){
            echo "<label for='caja' style='color: red'>Debe haber uno marcado</label>";
        }else if(count($_REQUEST['caja'])<1 || count($_REQUEST['caja'])>3){
            echo "<label for='caja' style='color: red'>Debe haber minimo uno maximo tres</label>";
        }
    }
}

function validaTel(){
    if(isset($_REQUEST['Enviado']) && empty($_REQUEST['telefono'])){
        echo "<label for='telefono' style='color: red'>Debe haber un telefono </label>";
    }
}

function validaEmail(){
    if(isset($_REQUEST['Enviado']) && empty($_REQUEST['email'])){
        echo "<label for='email' style='color: red'>Debe haber un email </label>";
    }
}

function validaPass(){
    if(isset($_REQUEST['Enviado']) && empty($_REQUEST['pass'])){
        echo "<label for='password' style='color: red'>Debe haber una contraseña </label>";
    }
}

function validaFich(){
    if(isset($_REQUEST['Enviado']) && isset($_FILES)){
        $guarda = "../uploads/";
        $rutaConNombre = $guarda . $_FILES['fichero']['name'];
        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $rutaConNombre))
            p("");
        else
            echo "<label for='fichero' style='color: red'>Debe elegir un fichero </label>";
    }
}

//Funciones para mantener los datos introducidos correctamente

function mantenerNom(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['nombre'])){
        echo ($_REQUEST['nombre']);
        return true;
    }
}

function mantenerApe(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['apellido'])){
        echo ($_REQUEST['apellido']);
        return true;
    }
}

function mantenerNumOp(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['apellidoOpcional'])){
        echo ($_REQUEST['apellidoOpcional']);
        return true;
    }
}

function mantenerFecha(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['fecha'])){
        echo ($_REQUEST['fecha']);
        return true;
    }
}

function mantenerFechaOp(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['fechaOp'])){
        echo ($_REQUEST['fechaOp']);
        return true;
    }
}

function mantenerOpcion($opcion){
    if(isset($_REQUEST['Enviado']) && isset($_REQUEST['opciones']) && ($_REQUEST['opciones']==$opcion)){
        echo "checked";
        return true;
    }
}

function mantenerSeleccion($seleccion){
    if(isset($_REQUEST['Enviado']) && ($_REQUEST['seleccion']==$seleccion)){
        echo "selected";
        return true;
    }
}

function mantenerCheck($caja){
    if(isset($_REQUEST['Enviado']) && isset($_REQUEST['caja'])){
        foreach($_REQUEST['caja'] as $value){
            if($value==$caja)
                echo "checked";
                return true;
        }
    }
}

function mantenerTel(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['telefono'])){
        echo ($_REQUEST['telefono']);
        return true;
    }
}

function mantenerEmail(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['email'])){
        echo ($_REQUEST['email']);
        return true;
    }
}

function mantenerPass(){
    if(isset($_REQUEST['Enviado']) && !empty($_REQUEST['pass'])){
        echo ($_REQUEST['pass']);
        return true;
    }
}

function mantenerFich(){
    if(isset($_REQUEST['Enviado']) && isset($_FILES)){
        echo "<label for='fichero' style='color: red'>".$_FILES['fichero']['name']."</label>";
        return true;
    }
}



?>