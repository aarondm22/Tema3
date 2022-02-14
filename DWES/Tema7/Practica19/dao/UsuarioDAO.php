<?php


class UsuarioDAO implements DAO{
    public static function findAll(){
        $sql = "select codUsuario,nombre,Perfil from usuario";
        $consulta = ConexionBD::ejecutaConsulta($sql,[]);
        $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    //Busca por clave primaria
    public static function findById($id){
        $sql = "select codUsuario,nombre,Perfil from usuario where codUsuario = ?";
        $consulta = ConexionBD::ejecutaConsulta($sql,[$id]);
        $row = $consulta->fetchObject();
        return $row;
    }
    //modifica o actualiza
    public static function update($objeto){
        $sql = "update usuario set nombre = ?, password =?, Perfil=? where codUsuario = ?";
        $consulta = ConexionBD::ejecutaConsulta($sql,[
            $objeto->nombre, hash("sha256",$objeto->password),
            $objeto->perfil, $objeto->codUsuario
        ]);

        //Si el numero de filas afectadas es 1 bsca el objeto y lo devuelve
        if($consulta->rowCount()==1){
            return UsuarioDAO::findById($objeto->codUsuario);
        //Sino no existe el codUsuario
        }else{
            return null;
        }
    }
    //Busca por un filtro -> nombre, codusuario etc
    public static function findFiltro($array){
        $sql = "select codUsuario,nombre,Perfil from usuario where ";
        $interrogacion = array();
        //Si solo quieres filtrar por nombre
        if(isset($array['nombre'])){
            $sql = $sql .' nombre LIKE ?';
            $nombre ='%'.$array['nombre'].'%';
            array_push($interrogacion,$nombre);
            //Si se quiere filtrar por nombre y perfil
            if(isset($array['perfil'])){
                $sql = $sql . " and ";
                
            }
        }

        if(isset($array['perfil'])){
            $sql = $sql .' Perfil LIKE ?' ;
            array_push($interrogacion,$array['perfil']);
        }
        $consulta = ConexionBD::ejecutaConsulta($sql,$interrogacion);
        $row = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    //crea o inserta
    public static function save($objeto){
        try{
            $sql = "insert into usuario values (?,?,?,0,null,?)";
            $consulta = ConexionBD::ejecutaConsulta($sql,[
                $objeto->codUsuario, hash("sha256",$objeto->password),
                $objeto->nombre, $objeto->perfil
            ]);
        }catch(Error $e){
            return $e->getMessage();
        }
        //Devolvemos el objeto usuario si no esta duplicado
        if(!$consulta){
            return null;
        }
        return UsuarioDAO::findById($objeto->codUsuario);
    }
    //borrar
    public static function delete($id){
        $sql = "delete from usuario where codUsuario = ?";
        $consulta = ConexionBD::ejecutaConsulta($sql, [$id]);
        //Si el numero de filas afectadas es 1 elimina el objeto y lo devuelve
        if($consulta->rowCount()==1){
            $row = $consulta->fetchObject();
            return $row;
        //Sino no existe el codUsuario
        }else{
            return null;
        }
    }

    public static function validaUsuario($user,$pass){
        $sql = "select * from usuario where codUsuario = ? and password = ?";
        $consulta = ConexionBD::ejecutaConsulta($sql,[$user,$pass]);
        $usuario = null;
        while($row = $consulta->fetchObject()){
            $usuario = new Usuario($row->codUsuario, $row->nombre, $row->password, $row->Perfil);
        }
        return $usuario;
    }
}

?>