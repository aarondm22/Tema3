<?php

class cUsuarios extends BaseControlador{
    public function general(){
        $uri = $this->getUri();
        $filtro = $this->getParametros();
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                # code...
                if(isset($uri[2]) && !isset($uri[3]))
                    $datos = UsuarioDAO::findById($uri[2]);
                else if(!isset($uri[2])){
                    //Si no tiene filtro
                    if(count($filtro)==0)
                        $datos=UsuarioDAO::findAll();
                    //Si tiene filtro
                    else{
                        $datos = UsuarioDAO::findFiltro($filtro);
                    }
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
                if(!isset($_POST['codUsuario']) || !isset($_POST['nombre']) || !isset($_POST['password']) || !isset($_POST['perfil'])){
                    $this->sendRespuesta(
                        json_encode(array('Error'=>"No se han enviado todos los parametros")),
                        array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                    );
                }else{
                    //Creamos el objeto usuario con los datos pasados por post
                    $usuario = new Usuario($_POST['codUsuario'], $_POST['nombre'], $_POST['password'], $_POST['perfil']);
                    $todoBien = UsuarioDAO::save($usuario);
                    //Entra siempre que no haya un error en la BBDD, que no sea nulo
                    if($todoBien){
                        $datos = json_encode($todoBien);
                        $this->sendRespuesta($datos, array( 'Content-Type: application/json', "HTTP/1.1 200 OK" ));
                    }else{
                        $this->sendRespuesta(
                            json_encode(array('Error'=>"No se han enviado todos los parametros")),
                            array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                        );
                    }
                }
                break;
            case 'PUT':
                # code...
                //lo primero que tenga el parametro id del uri
                if(!isset($uri[2])){
                    $this->sendRespuesta(
                        json_encode(array('Error'=>"No tiene el id del usuario a modificar")),
                        array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                    );
                }else{
                    $put = file_get_contents("php://input");
                    $array = json_decode($put, true);
                    if(!isset($array['nombre']) || !isset($array['perfil']) || !isset($array['password'])){
                        $this->sendRespuesta(
                            json_encode(array('Error'=>"No se han introducido por put todos los parametros")),
                            array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                        );
                    }else{
                        $usuario = new Usuario($uri[2], $array['nombre'], $array['password'], $array['perfil']);

                        $objeto = UsuarioDAO::update($usuario);
                        if(!$objeto){
                            $this->sendRespuesta(
                                json_encode(array('Error'=>"No existe el usuario")),
                                array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                            );
                        }else{
                            $datos = json_encode($objeto);
                            $this->sendRespuesta($datos, array( 'Content-Type: application/json', "HTTP/1.1 200 OK" ));
                        }
                    }
                }
                break;
            case 'DELETE':
                # code...
                //lo primero que tenga el parametro id del uri
                if(!isset($uri[2])){
                    $this->sendRespuesta(
                        json_encode(array('Error'=>"No tiene el id del usuario a modificar")),
                        array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                    );
                }else{
                    $datosBorrados = UsuarioDAO::delete($uri[2]);
                    if(!$datosBorrados){
                        $this->sendRespuesta(
                            json_encode(array('Error'=>"No existe el usuario")),
                            array('Content-Type: application/json', "HTTP/1.1 400 Error en el formato de la peticion")
                        );
                    }else{
                        echo "Ha ido todo bien";
                    }
                }
                break;
            default:
                # code...
                break;
        }
    }
    
}

?>