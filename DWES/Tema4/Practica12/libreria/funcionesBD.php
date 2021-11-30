<?php
require_once("../codigo/conexionBD.php");

function crear(){
    if(conexion()!=false){
        $sql = "insert into lolesports values (?,?,?,?)";
        //Recogemos cada uno de los datos introducidos en el formulario
        $id = $_REQUEST("id");
        $nombre = $_REQUEST("nombre");
        $rol = $_REQUEST("rol");
        $nacionalidad = $_REQUEST("nacionalidad");

        $consulta = mysqli_prepare(conexion(), $sql);

        //Ahora añadimos $id, $nombre, $rol y $nacionalidad a la consulta
        mysqli_stmt_bind_param($consulta, 'isss',$id,$nombre,$rol,$nacionalidad);
        //Ejecutamos
    }
}
?>