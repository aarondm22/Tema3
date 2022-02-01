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
                $_SESSION['clave'] = $row['clave'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['fecha'] = $row['fecha'];
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
            if($ex -> getCode() != 0){
                //Error al conectarse
                return false;
            }
        }finally{
            unset($con);
        }
    }

    function selectNom(){
        try{
            if(conexionPDO()!=false){
                $con = conexionPDO();
        
                $prep = $con -> prepare("select * from usuarios where nombre = :nombre ");
                $nombre = $_SESSION["nombre"];
        
                $prep->bindParam(":nombre", $nombre);
                $prep->execute();
        
                $prep->bindColumn(2,$nombre); //Análogo al bind_result del mysqli
                $prep->bindColumn(3,$clave);
                $prep->bindColumn(4,$email);
                $prep->bindColumn(5,$fecha);
                $prep->bindColumn(6,$perfil);
                $seleccion = "";
                while($prep->fetch()){
                    $seleccion = $clave.":".$email.":".$fecha.":".$perfil;
                }
        
                unset($con);
                return $seleccion;
            }
        }catch(PDOException $ex){
            if($ex -> getCode() != 0){
                //Error al conectarse
                return false;
            }
        }finally{
            unset($con);
        }
    }

    //Select de productos
    function selectProd(){
        try{
            if(conexionPDO()!=false){
                $con = conexionPDO();
                $sql = ("select * from productos ");
    
                $result = $con->query($sql);
        
                $array = $result -> fetchAll(PDO::FETCH_ASSOC);
                
                
                unset($con);
                return $array;
            }
        }catch(PDOException $ex){
            if($ex -> getCode() != 0){
                //Error al conectarse
                return false;
            }
        }finally{
            unset($con);
        }
    }


    function actualizar(){
        if(conexionPDO()!=false){
            $con = conexionPDO();
    
            $prep = $con -> prepare("update usuarios set clave=?, email=?, fecha=?, perfil=? where nombre=? ");
            
    
            //Recogemos cada uno de los datos introducidos en el formulario
            $nombre = $_SESSION["nombre"];
            $clave = $_REQUEST["pass"];
            $email = $_REQUEST["email"];
            $fecha = $_REQUEST["fecha"];
            $perfil = $_REQUEST["perfil"];
    
            $prep->bindParam(1,$clave);
            $prep->bindParam(2,$email);
            $prep->bindParam(3,$fecha);
            $prep->bindParam(4,$perfil);
            $prep->bindParam(5,$nombre);
            //Ejecutamos el update
            $prep -> execute();
    
            unset($con);
        }
    }

?>