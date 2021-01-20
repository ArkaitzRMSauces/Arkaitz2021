<?php
    if(!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){ // si no se ha logueado le usuario
        header('Location: index.php'); // redirige al login
        exit;
    }
    if(isset($_REQUEST['borrarUsuario'])){
        $oUsuario = UsuarioPDO::borrarUsuario($_REQUEST['CodUsuario']);
        header("Location: index.php");
        exit;
    }
    $vistaEnCurso = $vistas['borrar']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
    require_once $vistas['layout'];
?>