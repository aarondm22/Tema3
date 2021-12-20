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


                //Páginas a las que tiene acceso
                $sqlp = $con -> prepare("select descripcion, url from paginas p join accede a on (p.codigo=a.codigoPagina) 
                where codigoPerfil = :perfil");
                $sqlp -> bindParam(":perfil",$_SESSION["perfil"]);
                $sqlp -> execute();

                $paginas = array();
                while($row = $sqlp->fetch()){
                    $paginas[$row[0]] = $row[1];
                }
                $_SESSION['paginas'] = $paginas;
                //Cierre de conexion
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