<?php
   require_once("../libreria/funciones.php");
function validaForm(){
    if(validaNomApe()&&validaExp()&&validaSel()){
        return true;
    }
}

?>