<?php
function validaForm(){
    require_once("../libreria/funciones.php");
    if(mantenerAlfa()&&mantenerNum()&&mantenerFecha()&&mantenerOpcion($opcion)&&mantenerSeleccion($seleccion)&&mantenerCheck($caja)&&mantenerTel()&&mantenerEmail()&&mantenerFich()&&mantenerPass()){
        return true;
    }
}

?>