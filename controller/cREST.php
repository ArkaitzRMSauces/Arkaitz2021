<?php
$entradaOK = true;
$error = "";
if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso'] = $controladores['inicio'];
    header("Location: index.php");        
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
if(isset($_REQUEST['enviarDigimonNombre'])){
   $error = validacionFormularios::comprobarAlfabetico($_REQUEST['idDigimonNombre'], 50);
    if($error !== null){
        $entradaOK = false;
        $_REQUEST['idDigimonNombre']=""; 
    }
    if($entradaOK){
        $aDigimonNombre = REST::digimonNameService($_REQUEST['idDigimonNombre']);
    }
}
$vistaEnCurso = $vistas['rest']; //variable que contiene la vista que va a ejecutarse
require_once $vistas['layout']; //llamamos al layout