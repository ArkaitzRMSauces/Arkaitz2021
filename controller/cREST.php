<?php
if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso'] = $controladores['inicio'];
    header("Location: index.php");        
    exit;
}
try{
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
} catch (Exception $error){
    echo 'Error: ',  $error->getMessage(), "\n";
}
try{
    if(isset($_REQUEST['enviarAmazon'])) { //si se ha enviado una fecha
        //llamamos al servicio y le pasamos la fecha introducida por el usuario
        $aAmazonWebService = REST::amazonWebService($_REQUEST['id']);
    }else {
        //llamamos al servicio y le pasamos la fecha de hoy
        $aAmazonWebService = REST::amazonWebService(1);
    }
    $idAnimal = $aAmazonWebService['id'];
    $nombreAnimal = $aAmazonWebService['type'];
    $precioAnimal = $aAmazonWebService['price'];
} catch (Exception $error){
    echo 'Error: ',  $error->getMessage(), "\n";
}
$vistaEnCurso = $vistas['rest']; //variable que contiene la vista que va a ejecutarse
require_once $vistas['layout']; //llamamos al layout