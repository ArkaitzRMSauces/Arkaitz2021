<?php
$entradaOK = true;
$error = "";
if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso'] = $controladores['inicio'];
    header("Location: index.php");        
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
if(isset($_REQUEST['miCuenta'])){ // si se ha pulsado el boton de Mi Cuenta
    $_SESSION['paginaEnCurso'] = $controladores['miCuenta']; // almacenamos en la variable de sesion 'pagina' la ruta del controlador de MiCuenta
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['enviar'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
}else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
}
$tituloEnCurso = $aServicioAPOD['title'];
$imagenEnCurso = $aServicioAPOD['url'];
$descripcionEnCurso = $aServicioAPOD['explanation'];
if(isset($_REQUEST['enviarAmazon'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $error = validacionFormularios::comprobarEntero($_REQUEST['id'], 6);
    if($error !== null){
        $entradaOK = false;
        $_REQUEST['id']="";
    }
    if($entradaOK){
        $aAmazonWebService = REST::amazonWebService($_REQUEST['id']);
    }
}else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aAmazonWebService = REST::amazonWebService(1);
}
$vistaEnCurso = $vistas['rest']; //variable que contiene la vista que va a ejecutarse
require_once $vistas['layout']; //llamamos al layout