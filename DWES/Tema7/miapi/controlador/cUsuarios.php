<?php

class cUsuarios extends BaseControlador{
    
    public function general(){
        $uri = $this->getUri();
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                # code...
                if(isset($uri[2]) && !isset($uri[3]))
                    $datos = UsuarioDAO::findById($uri[2]);
                else if(!isset($uri[2])){
                    $datos=UsuarioDAO::findAll();
                }else{
                    //header mal
                    $this->sendRespuesta(
                        json_encode(array('Error'=>"Comprueba la URI")),
                        array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                    );
                }
                //Que los datos sean devueltos en formato json
                $datos = json_encode($datos);
                $this->sendRespuesta($datos, array( 'Content-Type: application/json', "HTTP/1.1 200 OK" ));
                break;
            case 'POST':
                # code...
                //lo primero que tenga los parametros necesarios
                if(!isset($_POST['codUsuario']) || !isset($_POST['nombre']) || !isset($_POST['password']) || !isset($_POST['Perfil'])){
                    $this->sendRespuesta(
                        json_encode(array('Error'=>"No se han enviado todos los parametros")),
                        array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                    );
                }else{
                    //Creamos el objeto usuario con los datos pasados por post
                    $usuario = new Usuario($_POST['codUsuario'], $_POST['nombre'], $_POST['password'], $_POST['Perfil']);
                    $todoBien = UsuarioDAO::save($usuario);
                }
                break;
            case 'PUT':
                # code...
                break;
            case 'DELETE':
                # code...
                break;
            default:
                # code...
                break;
        }
    }
    
}

?>