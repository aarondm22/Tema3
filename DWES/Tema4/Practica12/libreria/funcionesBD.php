<?php
//require_once("../libreria/conexionBD.php");

function crear(){
    if(conexion()!=false){
        $sql = "insert into jugadores values (?,?,?,?)";
        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST("id");
        $nombre = $_REQUEST("nombre");
        $rol = $_REQUEST("rol");
        $nacionalidad = $_REQUEST("nacionalidad");

        $consulta = mysqli_prepare(conexion(), $sql);

        //Ahora añadimos $id, $nombre, $rol y $nacionalidad a la consulta
        mysqli_stmt_bind_param($consulta, 'isss',$id,$nombre,$rol,$nacionalidad);
        //Ejecutamos
        mysqli_stmt_execute($consulta);

        conexion() -> close();
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
            echo "<a id='borrarReg' href=editaCSV.php?id=".$fila['id']."> Borrar</a>";
            echo "</td>";
            echo "</tr>";

        }
        echo "</table>";

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
    if(conexion()!=false){
        $sql = "update jugadores set nombre=? , rol=? , nacionalidad=? where id=? ";
        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST("id");
        $nombre = $_REQUEST("nombre");
        $rol = $_REQUEST("rol");
        $nacionalidad = $_REQUEST("nacionalidad");

        $consulta = mysqli_prepare(conexion(), $sql);

        //Ahora añadimos $id, $nombre, $rol y $nacionalidad a la consulta
        mysqli_stmt_bind_param($consulta, 'isss',$nombre,$rol,$nacionalidad,$id);
        //Ejecutamos
        mysqli_stmt_execute($consulta);

        conexion() -> close();
    }
}

function borrar(){
    if(conexion()!=false){
        $sql = "delete from jugadores where id=? ";
        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST("id");

        $consulta = mysqli_prepare(conexion(), $sql);

        //Ahora añadimos $id, $nombre, $rol y $nacionalidad a la consulta
        mysqli_stmt_bind_param($consulta, 'i',$id);
        //Ejecutamos
        mysqli_stmt_execute($consulta);

        conexion() -> close();
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





?>