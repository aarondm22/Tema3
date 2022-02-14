<?php

class Usuario {

    //atributos
    private $codUsuario;
    private $nombre;
    private $password;
    private $perfil;

    //Constructor en php
    public function __construct($codUsuario, $nombre, $password, $perfil){
        $this->codUsuario = $codUsuario;
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