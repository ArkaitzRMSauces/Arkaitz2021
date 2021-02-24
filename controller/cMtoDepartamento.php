<?php
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

    define("OPCIONAL", 0);
    if(isset($_REQUEST["buscarDepartamento"])){
        $entradaOk = true;
        $errorBusqueda = null;
        $errorBusqueda = validacionFormularios::comprobarAlfaNumerico($_REQUEST["descDepartamento"], 255, 1, OPCIONAL);
        if($errorBusqueda != null){
            $entradaOk = false;
            $_REQUEST["descDepartamento"] = "";
        }
    }else{
        $_REQUEST["descDepartamento"] = "";
    }

    if($entradaOk){
        $_SESSION["BuscarDepartamento"] = $_REQUEST["descDepartamento"];
        $aDepartamentos = DepartamentoPDO::buscaDepartamentosPorDescripcion($_REQUEST["descDepartamento"]);
    }
        $vistaEnCurso = $vistas['mtoDepartamento'];
        require_once $vistas['layout'];
    ?>