<?php
   require_once("../libreria/funciones.php");
function validaForm(){
    if(validaAlfa()&&validaNum()&&validaFecha()&&validaOp()&&validaSel()&&validaCheck()&&validaTel()&&validaEmail()&&validaFich()&&validaPass()){
        return true;
    }
}

?>