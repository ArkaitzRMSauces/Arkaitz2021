<?php
    if(!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){ // si no se ha logueado le usuario
        header('Location: index.php'); // redirige al login
        exit;
    }
    if(isset($_REQUEST['volver'])){
        header("Location: index.php");
        exit;
    }
    $vistaEnCurso = $vistas['rest']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
    require_once $vistas['layout'];
?>