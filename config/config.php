<?php
require_once "core/libreriaValidacion.php";

require_once "model/Usuario.php";
require_once "model/UsuarioPDO.php";
require_once "model/DBPDO.php";
require_once "model/REST.php";
require_once "model/Departamento.php";
require_once "model/DepartamentoPDO.php";

$controladores = [
    "login" => "controller/cLogin.php",
    "inicio" => "controller/cInicio.php",
    "borrar" => "controller/cBorrarUsuario.php",
    "registro" => "controller/cRegistro.php",
    "miCuenta" => "controller/cMiCuenta.php",
    "cambiarPassword" => "controller/cCambiarPassword.php",
    "rest" => "controller/cREST.php",
    "mtoDepartamento" => "controller/cMtoDepartamento.php"
];

$vistas = [
    "layout" => "view/layout.php",
    "login" => "view/vLogin.php",
    "inicio" => "view/vInicio.php",
    "borrar" => "view/vBorrarUsuario.php",
    "registro" => "view/vRegistro.php",
    "miCuenta" => "view/vMiCuenta.php",
    "cambiarPassword" => "view/vCambiarPassword.php",
    "rest" => "view/vREST.php",
    "mtoDepartamento" => "view/vMtoDepartamento.php"
];
?>