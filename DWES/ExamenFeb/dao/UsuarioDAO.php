<?php


class UsuarioDAO implements DAO{
    public static function findAll(){
        $sql = "select id,nombre,perfil from usuarios";
        $consulta = ConexionBD::ejecutaConsulta($sql,[]);
        $cont = 0;
        while($row = $consulta->fetchObject()){
            $usuario = new Usuario($row->id, $row->nombre, "", $row->perfil);
            $registros[$cont] = $usuario;
            $cont++;
        }
        return $registros;
    }
    //busca por clave primaria
    public static function findById($id){
        $sql = "select id,nombre,perfil from usuarios where id = ?";
        $consulta = ConexionBD::ejecutaConsulta($sql,[$id]);
        $row = $consulta->fetchObject();
        $user = new Usuario($row->id, $row->nombre, "", $row->perfil);
        return $user;
    }
    //modifica o actualiza
    public static function update($objeto){}
    //crea o inserta
    public static function save($objeto){}
    //borrar
    public static function delete($objeto){}

    public static function validaUsuario($user,$pass){
        $sql = "select * from usuarios where nombre = ? and password = ?";
        $consulta = ConexionBD::ejecutaConsulta($sql,[$user,$pass]);
        $usuario = null;
        while($row = $consulta->fetchObject()){
            $usuario = new Usuario($row->id, $row->nombre, $row->password, $row->perfil);
        }
        return $usuario;
    }
}

?>