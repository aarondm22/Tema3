<?php

class Usuario {

    //atributos
    private $codUsuario;
    private $nombre;
    private $pass;
    private $perfil;

    //Constructor en php
    public function __construct($codUsuario, $nombre, $pass, $perfil){
        $this->codUsuario = $codUsuario;
        $this->nombre = $nombre;
        $this->pass = $pass;
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