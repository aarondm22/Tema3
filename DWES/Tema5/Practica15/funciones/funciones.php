<?php

function entrar(){
    return isset($_REQUEST['entrar']);
}

function modificar(){
    return isset($_REQUEST['modificar']);
}

function registrar(){
    return isset($_REQUEST['registrar']);
}


//LOGIN

function validaUserLogin(){
    if(entrar()&&empty($_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Debe haber un nombre </label>";
        return false;
    } 
    return true;
}

function validaPassLogin(){
    if(entrar()&&empty($_REQUEST['pass'])){
        echo "<label for='nombre' style='color: red'>Debe haber una contraseña </label>";
        return false;

    }

    return true;
}

function validaLogin(){
    if(validaUser()&&validaPass()){
        return true;
    }
}

//MODIFICAR USER 


function validaPassMod(){
    $patron = '/^[a-z|A-Z]{8,}[A-Z]{1}[a-z]{1}[0-9]{1}$/';
    if(modificar()&&empty($_REQUEST['pass'])){
        echo "<label for='pass' style='color: red'>Debe haber una contraseña </label>";
        return false;

    }else if(modificar() && preg_match($patron, $_REQUEST['pass']) == false){
        echo "<label for='pass' style='color: red'>Mínimo 8 caracteres, una mayúscula, una minúscula y un número</label>";
        return false;
    }
    return true;
}

function validaEmailMod(){
    if(modificar()&&empty($_REQUEST['email'])){
        echo "<label for='email' style='color: red'>Debe haber un email</label>";
        return false;
    }
    return true;
}

function validaCumpleMod(){
    $patron = '/^[0-9]{4}\-[0-1]{1}[0-9]{1}\-[0-9]{2}$/';
    if(modificar() && empty($_REQUEST['fecha'])){
        echo "<label for='fecha' style='color: red'>Debe haber un cumpleaños</label>";
        return false;
    } 
    else if(modificar() && preg_match($patron, $_REQUEST['fecha']) == false){
        echo "<label for='fecha' style='color: red'>Formato incorrecto</label>";
        return false;
    }
    return true;
}

function validaPerfilMod(){
    $patron = '/^[0-9]{1}$/';
    if(modificar() && empty($_REQUEST['perfil'])){
        echo "<label for='fecha' style='color: red'>Debe haber un perfil</label>";
        return false;
    } 
    else if(modificar() && preg_match($patron, $_REQUEST['perfil']) == false){
        echo "<label for='fecha' style='color: red'>Formato incorrecto</label>";
        return false;
    }
    return true;
}

function validaModificar(){
    if(validaPassMod()&&validaEmailMod()&&validaCumpleMod()&&validaPerfilMod()){
        return true;
    }
}

//COMPRA PRODUCTOS

function validaCompra(){
    if(conexionPDO()!=false){
        try{
            $con = conexionPDO();
            $prep1 = $con -> prepare("insert into ventas values (null,?,current_date,?,?,?)"); 
            $prep2 = $con -> prepare("update productos set stock = stock-? where cod_producto = ?"); 
            //Transacción para comprobar que solo añadimos un jugador cuando el id no coincida
            $con -> beginTransaction();
            //Recogemos cada uno de los datos introducidos en el formulario
            $stock = $_REQUEST["numProductos"];
            $stock = $stock+0;

            $usuario = $_SESSION['nombre'];
            $codproducto = $_REQUEST["codProducto"];
            
            //Sentencia UPDATE
            $prep2->bindParam(1,$stock);
            $prep2->bindParam(2,$codproducto);

            //Sentencia INSERT
            $prep1->bindParam(2,$stock);
            $prep1->bindParam(3,$codproducto);
            
            //Ejecutamos el UPDATE
            
            $prep2-> execute();
            //Si todo ha ido bien hacemos commit y creamos al jugador
            $con -> commit();
            return true;
        }catch(PDOException $ex){
            echo "<label for='id' style='color: red'>Id duplicado</label>";
            $con->rollBack();
        }finally{
            unset($con);
        }
    }
}


?>