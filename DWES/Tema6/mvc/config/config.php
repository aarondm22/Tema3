<?php

/*

    Aquí vamos a definir constantes que podamos necesitar

    Incluir los ficheros que más utilicemos

    Vamos a definir algunos arrays para ayudarnos en la navegación entre páginas php,
    es decir controladores y vistas.

*/

//No lo usa
//define('IMAGENES',"/Tema6/mvc/webroot/img/");

include './core/funciones.php';
require './config/datosBD.php';
require './modelo/ConexionBD.php';
require './dao/DAO.php';
require './modelo/Usuario.php';
require './dao/UsuarioDAO.php';


$controladores = [
    'inicio' => 'controlador/cInicio.php',
    'login' => 'controlador/cLogin.php'
    //etc
];

$vistas = [
    'inicio' => 'vista/vInicio.php',
    'login' => 'vista/vLogin.php',
    'layout' => 'vista/vLayout.php',
    //etc
]

?>