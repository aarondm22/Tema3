<?php

    function valida($user,$pass){
        try{
            $con = new PDO('mysql:host='.IP.";dbname=".BBDD,USER,PASS);
            $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = $con -> prepare("select * from usuarios where nombre = :user and clave = :pass");
            $sql -> bindParam(":user",$user);
            $encrip = $pass;
            $sql -> bindParam(":pass",$encrip);
            $sql -> execute();
            if($sql-> rowCount()==1){
                session_start();
                //super sesion nombre, usuario, perfil
                
                $row = $sql->fetch();
                $_SESSION['validada'] = true;
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['perfil'] = $row['perfil'];


                //Páginas a las que tiene acceso
                /*$sqlp = $con -> prepare("select descripcion, url from paginas p join accede a on (p.codigo=a.codigoPagina) 
                where codigoPerfil = :perfil");
                $sqlp -> bindParam(":perfil",$_SESSION["perfil"]);
                $sqlp -> execute();

                $paginas = array();
                while($row = $sqlp->fetch()){
                    $paginas[$row[0]] = $row[1];
                }
                $_SESSION['paginas'] = $paginas;*/
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

    function selectId(){
        if(conexionPDO()!=false){
            $con = conexionPDO();
    
            $prep = $con -> prepare("select * from jugadores where id = :id ");
            $id = $_REQUEST["id"];
            $id = $id+0;
    
            $prep->bindParam(":id", $id);
            $prep->execute();
    
            $prep->bindColumn(1,$id); //Análogo al bind_result del mysqli
            $prep->bindColumn(2,$nombre);
            $prep->bindColumn(3,$kills);
            $prep->bindColumn(4,$cumple);
            $seleccion = "";
            while($prep->fetch()){
                $seleccion = $id.":".$nombre.":".$kills.":".$cumple;
            }
    
            unset($con);
            return $seleccion;
        }
    }

?>