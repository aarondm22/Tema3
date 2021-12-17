<?php
//require_once("../libreria/conexionBD.php");

function guardado(){
    return isset($_REQUEST['guardado']);
}

function crear(){
    if(conexionPDO()!=false){
        try{
            $con = conexionPDO();
            $prep = $con -> prepare("insert into jugadores values (?,?,?,?)"); 

            //Transacción para comprobar que solo añadimos un jugador cuando el id no coincida
            $con -> beginTransaction();
            //Recogemos cada uno de los datos introducidos en el formulario
            $id = $_REQUEST["id"];
            $id = $id+0;
            $nombre = $_REQUEST["nombre"];
            $kills = $_REQUEST["kills"];
            $cumple = $_REQUEST["cumple"];

            $prep->bindParam(1,$id);
            $prep->bindParam(2,$nombre);
            $prep->bindParam(3,$kills);
            $prep->bindParam(4,$cumple);
            //Ejecutamos el INSERT
            
            $prep-> execute();
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

function leer(){
    if(conexionPDO()!=false){
        $con = conexionPDO();

        $sql = "select * from jugadores";

        $result = $con->query($sql);

        echo "<table border=1 id='tabla'>";
        echo "<tr>";
        echo "<th>";
        echo "ID";
        echo "</th>";
        echo "<th>";
        echo "NOMBRE";
        echo "</th>";
        echo "<th>";
        echo "KILLS";
        echo "</th>";
        echo "<th>";
        echo "CUMPLE";
        echo "</th>";
        echo "</tr>";
        //$row = $result->fetch();
        while($row = $result -> fetch()){
            echo "<tr>";
            echo "<td>";
            echo $row['id'];
            echo "</td>";
            echo "<td>";
            echo $row['nombre'];
            echo "</td>";
            echo "<td>";
            echo $row['kills'];
            echo "</td>";
            echo "<td>";
            echo $row['cumple'];
            echo "</td>";
            echo "<td>";
            echo "<a id='modReg' href=modificarReg.php?id=".$row['id']."> Modificar</a>";
            echo "</td>";
            echo "<td>";
            echo "<a id='borrarReg' href=../administrador/borraReg.php?id=".$row['id']."> Borrar</a>";
            echo "</td>";
            echo "</tr>";

        }
        echo "</table>";
        echo "<br><br><br>";
        echo "<center>";
        echo "<a id='insertarReg' href=insertarReg.php> Insertar Nuevo Registro</a>";
        echo "</center>";

        unset($con);
    }
}

function buscarBD(){
    if(conexionPDO()!=false){
        $con = conexionPDO();
        
        $prep = $con -> prepare("select * from jugadores where nombre like :nombre"); //:nombre funciona como el ?

        $busca = $_REQUEST["busca"];
        $nombrelike = "%$busca%";

        $prep->bindParam(":nombre", $nombrelike);
        $prep->execute();

        $prep->bindColumn(1,$id); 
        $prep->bindColumn(2,$nombre);
        $prep->bindColumn(3,$kills);
        $prep->bindColumn(4,$cumple);

        echo "<table border=1 id='tabla'>";
        echo "<tr>";
        echo "<th>";
        echo "ID";
        echo "</th>";
        echo "<th>";
        echo "NOMBRE";
        echo "</th>";
        echo "<th>";
        echo "KILLS";
        echo "</th>";
        echo "<th>";
        echo "CUMPLE";
        echo "</th>";
        echo "</tr>";
        while($prep->fetch()){
            echo "<tr>";
            echo "<td>";
            echo $id;
            echo "</td>";
            echo "<td>";
            echo $nombre;
            echo "</td>";
            echo "<td>";
            echo $kills;
            echo "</td>";
            echo "<td>";
            echo $cumple;
            echo "</td>";
            echo "<td>";
            echo "<a id='modReg' href=modificarReg.php?id=".$id."> Modificar</a>";
            echo "</td>";
            echo "<td>";
            echo "<a id='borrarReg' href=../administrador/borraReg.php?id=".$id."> Borrar</a>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "<br><br><br>";
        echo "<center>";
        echo "<a id='insertarReg' href=insertarReg.php> Insertar Nuevo Registro</a>";
        echo "</center>";

        unset($con);
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

function actualizar(){
    if(conexionPDO()!=false){
        $con = conexionPDO();

        $prep = $con -> prepare("update jugadores set nombre=? , kills=? , cumple=? where id=? ");
        

        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST["id"];
        $id = $id+0;
        $nombre = $_REQUEST["nombre"];
        $kills = $_REQUEST["kills"];
        $cumple = $_REQUEST["cumple"];

        $prep->bindParam(1,$nombre);
        $prep->bindParam(2,$kills);
        $prep->bindParam(3,$cumple);
        $prep->bindParam(4,$id);
        //Ejecutamos el update
        $prep -> execute();

        unset($con);
    }
}

function borrar(){
    if(conexionPDO()!=false){
        
        $con = conexionPDO();

        $prep = $con -> prepare("delete from jugadores where id = :id");
        $id = $_REQUEST["id"];
        $id = $id+0;

        $prep->bindParam(":id", $id);
        $prep->execute();

        unset($con);
    }
}

function cargar(){
    conexion();
}

//FUNCIONES PARA VALIDAR

function validaId(){
    $patron = '/^[0-9]{1,}/';
    if(guardado() && empty($_REQUEST['id'])){
        echo "<label for='id' style='color: red'>Debe haber un id </label>";
        return false;
    } 
    else if(guardado() && preg_match($patron, $_REQUEST['id']) == false){
        echo "<label for='nombre' style='color: red'>Tiene que ser de tipo numerico</label>";
        return false;
    }
    return true;
}
function validaNom(){
    $patron = '/^[a-z|A-Z]{1,}/';

    if(guardado() && empty($_REQUEST['nombre'])){
        echo "<label for='nombre' style='color: red'>Debe haber un nombre </label>";
        return false;
    } 
    else if(guardado() && preg_match($patron, $_REQUEST['nombre']) == false){
        echo "<label for='nombre' style='color: red'>Tiene que ser un nombre con letras</label>";
        return false;
    }

    return true;
}

function validaKills(){
    $patron = '/^[0-9]{1,}\.[0-9]{1,}$/';
    if(guardado() && empty($_REQUEST['kills'])){
        echo "<label for='kills' style='color: red'>Debe haber kills</label>";
        return false;
    } 
    else if(guardado() && preg_match($patron, $_REQUEST['kills']) == false){
        echo "<label for='kills' style='color: red'>Tiene que ser formato tipo float</label>";
        return false;
    }
    return true;
}

function validaCumple(){
    $patron = '/^[0-9]{4}\-[0-1]{1}[0-9]{1}\-[0-9]{2}$/';
    if(guardado() && empty($_REQUEST['cumple'])){
        echo "<label for='cumple' style='color: red'>Debe haber un cumpleaños</label>";
        return false;
    } 
    else if(guardado() && preg_match($patron, $_REQUEST['cumple']) == false){
        echo "<label for='cumple' style='color: red'>Formato incorrecto</label>";
        return false;
    }
    return true;
}

//VALIDAR TODOS LOS DATOS MODIFICADOS ES DECIR SIN EL ID
function validaForm(){
    if(validaNom()&&validaKills()&&validaCumple()){
        return true;
    }
}

//VALIDAR CREAR UN NUEVO REGISTRO CON SU ID, NOMBRE, KILLS Y CUMPLE
function validaFormCrear(){
    if(validaId()&&validaNom()&&validaKills()&&validaCumple()){
        return true;
    }
}

?>