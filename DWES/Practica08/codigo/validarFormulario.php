<?php
   require_once("../libreria/funciones.php");
function validaForm(){
    if(mantenerAlfa()&&mantenerNum()&&mantenerFecha()&&mantenerOpcion($opcion)&&mantenerSeleccion($seleccion)&&mantenerCheck($caja)&&mantenerTel()&&mantenerEmail()&&mantenerFich()&&mantenerPass()){
        return true;
    }
}

?>