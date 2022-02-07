<?php

class cUsuarios extends BaseControlador{
    
    public function general(){
        $uri = $this->getUri();
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                # code...
                if(isset($uri[2]) && !isset($uri[3]))
                    echo $uri[2];
                else if(!isset($uri[2])){
                    $datos=UsuarioDAO::findAll();
                }else{
                    //header mal
                }
                //Que los datos sean devueltos en formato json
                $datos = json_encode($datos);
                $this->sendRespuesta($datos, array( 'Content-Type: application/json', "HTTP/1.1 200 OK" ));
                break;
            case 'POST':
                # code...
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