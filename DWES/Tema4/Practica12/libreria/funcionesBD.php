<?php
//require_once("../libreria/conexionBD.php");

function guardado(){
    return isset($_REQUEST['guardado']);
}

function crear(){
    if(conexionBD()!=false){
        
        $sql = "insert into jugadores values (?,?,?,?)";

        $con = conexionBD();
        $consulta = $con -> stmt_init();
        $consulta -> prepare($sql);

        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST["id"];
        $id = $id+0;
        $nombre = $_REQUEST["nombre"];
        $kills = $_REQUEST["kills"];
        $cumple = $_REQUEST["cumple"];

        //Ahora añadimos $id, $nombre, $rol y $nacionalidad a la consulta
        $consulta -> bind_param('isds',$id,$nombre,$kills,$cumple);
        //Ejecutamos
        $consulta -> execute();

        if($consulta -> errno == 1062){
            echo "<label for='id' style='color: red'>Id duplicado</label>";
            return false;
        }
        else
            $consulta -> free_result();
            $con -> close();
            return true;
    }
}

function leer(){
    if(conexionBD()!=false){
        $con = conexionBD();

        $sql = "select * from jugadores";

        $resultado = mysqli_query($con,$sql);

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
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            foreach ($fila as $valor) {
                echo "<td>";
                echo $valor;
                echo "</td>";
            }
            echo "<td>";
            echo "<a id='modReg' href=modificarReg.php?id=".$fila['id']."> Modificar</a>";
            echo "</td>";
            echo "<td>";
            echo "<a id='borrarReg' href=borraReg.php?id=".$fila['id']."> Borrar</a>";
            echo "</td>";
            echo "</tr>";

        }
        echo "</table>";
        echo "<br><br><br>";
        echo "<center>";
        echo "<a id='insertarReg' href=insertarReg.php> Insertar Nuevo Registro</a>";
        echo "</center>";

        $con->close();
    }
}

function buscarBD(){
    if(conexionBD()!=false){
        $con = conexionBD();
        
        $sql = "select * from jugadores where nombre like ? ";

        $preparado = $con ->stmt_init();

        $preparado -> prepare($sql);

        $busca = $_REQUEST["busca"];

        $parametros = "%$busca%";

        $preparado -> bind_param('s', $parametros);

        $preparado -> execute();

        $preparado ->bind_result($rid,$rnombre,$rkills,$rfecha);

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
        while($preparado->fetch()){
            echo "<tr>";
            echo "<td>";
            echo $rid;
            echo "</td>";
            echo "<td>";
            echo $rnombre;
            echo "</td>";
            echo "<td>";
            echo $rkills;
            echo "</td>";
            echo "<td>";
            echo $rfecha;
            echo "</td>";
            echo "<td>";
            echo "<a id='modReg' href=modificarReg.php?id=".$rid."> Modificar</a>";
            echo "</td>";
            echo "<td>";
            echo "<a id='borrarReg' href=borraReg.php?id=".$rid."> Borrar</a>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "<br><br><br>";
        echo "<center>";
        echo "<a id='insertarReg' href=insertarReg.php> Insertar Nuevo Registro</a>";
        echo "</center>";

        $preparado -> free_result();
        $con->close();
    }
}

function selectId(){
    if(conexionBD()!=false){
        $con = conexionBD();

        $preparado = $con ->stmt_init();

        $sql = "select * from jugadores where id = ?";
        $preparado -> prepare($sql);
        $id = $_REQUEST["id"];
        $id = $id+0;

        $preparado -> bind_param('i', $id);

        $preparado -> execute();
        $preparado ->bind_result($rid,$rnombre,$rkills,$rfecha);

        $seleccion="";
        while($preparado->fetch()){
            $seleccion = $rid.",".$rnombre.",".$rkills.",".$rfecha;
        }
        
        $preparado -> free_result();
        $con->close();
        
        return $seleccion;
    }
}

function actualizar(){
    if(conexionBD()!=false){
        $sql = "update jugadores set nombre=? , kills=? , cumple=? where id=? ";

        $con = conexionBD();
        $consulta = $con -> stmt_init();
        $consulta -> prepare($sql);

        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST["id"];
        $id = $id+0;
        $nombre = $_REQUEST["nombre"];
        $kills = $_REQUEST["kills"];
        $cumple = $_REQUEST["cumple"];


        //Ahora añadimos $id, $nombre, $rol y $nacionalidad a la consulta
        $consulta -> bind_param('sdsi',$nombre,$kills,$cumple,$id);
        //Ejecutamos
        $consulta -> execute();

        $consulta -> free_result();
        $con -> close();
    }
}

function borrar(){
    if(conexionBD()!=false){
        $sql = "delete from jugadores where id=? ";

        $con = conexionBD();
        $consulta = $con -> stmt_init();
        $consulta -> prepare($sql);

        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST["id"];
        $id = $id+0;

        $consulta -> bind_param('i',$id);

        //Ahora añadimos $id, $nombre, $rol y $nacionalidad a la consulta
        $consulta -> bind_param('i',$id);
        //Ejecutamos
        $consulta -> execute();

        $consulta -> free_result();
        $con -> close();
    }
}

function cargar(){
    if(conexion()!=false){
        $comandosSQL = file_get_contents("./segura/script.sql");
        $con = conexion();
        $con-> multi_query($comandosSQL);
        $con-> close();

        return true;
    }
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
    else if(guardado() && conexionBD()==false){
        //Error con el duplicado del id
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