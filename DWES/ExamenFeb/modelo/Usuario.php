<?php

class Usuario {

    //atributos
    private $id;
    private $nombre;
    private $password;
    private $perfil;

    //Constructor en php
    public function __construct($id, $nombre, $password, $perfil){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->password = $password;
        $this->perfil = $perfil;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    
}


?>