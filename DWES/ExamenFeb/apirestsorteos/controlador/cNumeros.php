<?php

class cNumeros extends BaseControlador{
    public function general(){
        $uri = $this->getUri();
        $filtro = $this->getParametros();
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                //Si tiene un parametro y no 
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
            default:
                # code...
                break;
        }
    }
    
}

?>