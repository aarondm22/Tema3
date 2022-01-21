<?php


class UsuarioDAO implements DAO{
    public static function findAll(){
        $sql = "select * from usuarios";
        $consulta = ConexionBD::ejecutaConsulta($sql,[]);
        $cont = 0;
        while($row = $consulta->fetchObject()){
            $usuario = new Usuario($row->codUsuario, $row->nombre, $row->pass, $row->perfil);
            $registros[$cont] = $usuario;
            $cont++;
        }
        return $registros;
    }
    //busca por clave primaria
    public static function findById($id){
        
    }
    //modifica o actualiza
    public static function update($objeto){}
    //crea o inserta
    public static function save($objeto){}
    //borrar
    public static function delete($objeto){}
}

?>