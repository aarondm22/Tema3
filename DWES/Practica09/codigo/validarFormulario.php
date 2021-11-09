<?php
   require_once("../libreria/funciones.php");
function validaForm(){
    if(validaNom()&&validaApe()&&validaFecha()&&validaDni()&&validaCorreo()){
        return true;
    }
}

?>