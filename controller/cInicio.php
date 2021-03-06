<?php

if(!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){ // si no se ha logueado le usuario
    header('Location: index.php'); // redirige al login
    exit;
}

if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
    session_destroy(); // destruye todos los datos asociados a la sesion
    header("Location: index.php"); // redirige al login
    exit;
}
if(isset($_REQUEST['borrarUsuario'])){
    $_SESSION['paginaEnCurso'] = $controladores['borrar'];
    header("Location: index.php");
    exit;
}
if(isset($_REQUEST['rest'])){
    $_SESSION['paginaEnCurso'] = $controladores['rest'];
    header("Location: index.php");
    exit;
}
if(isset($_REQUEST['miCuenta'])){ // si se ha pulsado el boton de Mi Cuenta
    $_SESSION['paginaEnCurso'] = $controladores['miCuenta']; // almacenamos en la variable de sesion 'pagina' la ruta del controlador de MiCuenta
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['mtoDepartamentos'])){ // si se ha pulsado el boton de Mi Cuenta
    $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamento']; // almacenamos en la variable de sesion 'pagina' la ruta del controlador de MiCuenta
    header('Location: index.php');
    exit;
}
$oUsuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];

$numConexiones = $oUsuarioActual->getNumConexiones(); // variable que tiene el numero de conexiones sacado de la base de datos
$descUsuario = $oUsuarioActual->getDescUsuario(); // variable que tiene la descripcion del usuario sacado de la base de datos
$ultimaConexion = $oUsuarioActual->getFechaHoraUltimaConexion(); // variable que tiene la ultima hora de conexion del usuario

$vistaEnCurso = $vistas['inicio']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout'];

?>