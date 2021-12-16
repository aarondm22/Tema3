<?php
    session_start();
    //validar q2ue hay sesion
    //enviar al login
    if(!isset($_SESSION['validada'])){
        header('Location: ./login.php');
        exit;
    }
    //validar que se ha enviado desde formulario
    //hacer lo que nos hayan pedido

    //Si es 0 ha venido por la URL
    if(count($_POST)==0){
        header("Location: ./detalle.php");
        exit;
    //Si tiene cosas es que se ha enviado por el formulario
    }else{
        if(isset($_POST['crear']) || isset($_POST['reset'])){
            $_SESSION['contador']=0;
        }else if(isset($_POST['sumar'])){
            $_SESSION['contador']++;
        }else{
            $_SESSION['contador']--;
        }
        header("Location: ./detalle.php");
        exit;
    }
?>