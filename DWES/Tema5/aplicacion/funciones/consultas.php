<?php

    function valida($user,$pass){
        try{
            $con = new PDO('mysql:host='.IP.";dbname=".BBDD,USER,PASS);
            $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = $con -> prepare("select * from usuarios where usuario = :user and clave = :pass");
            $sql -> bindParam(":user",$user);
            $encrip = sha1($pass);
            $sql -> bindParam(":pass",$encrip);
            $sql -> execute();
            if($sql-> rowCount()==1){
                session_start();
                //super sesion nombre, usuario, perfil
                
                $row = $sql->fetch();
                $_SESSION['validada'] = true;
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['perfil'] = $row['perfil'];

                unset($con);
                return true;
            }else{
                unset($con);
                return false;
            }
        }catch(PDOException $ex){

        }
    }

?>