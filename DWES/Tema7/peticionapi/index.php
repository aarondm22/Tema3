<?php

    function get(){
        // Objeto de tipo curl para hacer la peticion a la PR18
        $ch = curl_init();

        //curl_setopt($ch, CURLOPT_URL, "http://10.1.160.104/Tema7/miapi/miapi.php/usuarios");

        // Uriel
        curl_setopt($ch, CURLOPT_URL, "http://10.1.160.105/tema7/miapi/miapi.php/usuarios/maria");

        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        // Ejecuto la conexion
        $res = curl_exec($ch);

        echo "<pre>";
        print_r($res);
        echo "</pre>";

        // Cierre de la conexión
        curl_close($ch);
    }


    function post(){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://10.1.160.108/DWES/Tema7/miapi/miapi.php/usuarios");
        $datosU = array('codUsuario'=>'curl','nombre'=>'curl','perfil'=>'curl','password'=>'curl');
        $datoshttp = http_build_query($datosU);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$datoshttp);
        $res = curl_exec($ch);
        print_r($res);
        curl_close($ch);
    }

    function put(){
        $ch = curl_init();
        $datosU = array('codUsuario'=>'curl','nombre'=>'curlPUT','perfil'=>'user','password'=>'1234');
        curl_setopt($ch,CURLOPT_URL,"http://10.1.160.108/DWES/Tema7/miapi/miapi.php/usuarios/" .$datosU['codUsuario']);
        $datosjson = json_encode($datosU);
        //Cabecera que voy a enviar json/xml
        curl_setopt($ch,CURLOPT_HTTPHEADER,
            array('Content-Type: application/json', "Content-Length: ". strlen($datosjson)));
        //put
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'PUT');
        //parametros
        curl_setopt($ch,CURLOPT_POSTFIELDS,$datosjson);
        //quiero respuesta
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        //ejecuto
        $res = curl_exec($ch);
        print_r($res);
        curl_close($ch);
    }

    function delete(){
        $ch = curl_init();
        $datosU = array('codUsuario'=>'curl','nombre'=>'curl','perfil'=>'curl','password'=>'curl');
        curl_setopt($ch,CURLOPT_URL,"http://10.1.160.108/DWES/Tema7/miapi/miapi.php/usuarios/" .$datosU['codUsuario']);
        $datosjson = json_encode($datosU);

        //put
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'DELETE');
     
        //quiero respuesta
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        //ejecuto
        $res = curl_exec($ch);
        print_r($res);
        curl_close($ch);
    }


    //get();
    //post();
    put();
    
?>