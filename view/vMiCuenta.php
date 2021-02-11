<header>
    <h1>Mi Cuenta</h1>
</header>
<form id="formMiCuenta" name="form-miCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="CodUsuario">Usuario</label><br>
        <input id="editarCuenta" class="inputMain" type="text" name="CodUsuario" value="<?php echo $oUsuarioActual->getCodUsuario()?>" readonly>
    </div>
    <div>
        <label for="DescUsuario">Descripcion</label><br>
        <input id="inpMiCuenta1" onblur="validarCampos(inpMiCuenta1,pMiCuenta1)" class="inputMain" type="text" name="DescUsuario" value="<?php
            echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : $oUsuarioActual->getDescUsuario(); 
            ?>" required>
        <p id="pMiCuenta1" class="hidden"></p>
    </div>
    <?php
        echo ($aErrores['DescUsuario']!=null) ? "<span class='error'>".$aErrores['DescUsuario']."</span>" : null;// si el campo es erroneo se muestra un mensaje de error
    ?>

    <div>
        <label for="NumConexiones">Numero de conexiones</label><br>
        <input id="editarCuenta" class="inputMain" type="text" name="NumConexiones" value="<?php echo $oUsuarioActual->getNumConexiones(); ?>" readonly>        
    </div>

    <div>
        <label for="UltimaConexion">Ultima conexion</label><br>
        <input id="editarCuenta" class="inputMain" type="text" name="UltimaConexion" value="<?php echo date('d/m/Y H:i:s', $oUsuarioActual->getFechaHoraUltimaConexion()) ?>" readonly>        
    </div>

    <div>
        <button class="button" type="submit" name="Editar">Editar</button>
    </div>
</form>
<form id="formMiCuenta-buttons" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="registro" method="post">
    <button class="button" type="submit"name="CambiarPassword">Cambiar Password</button>
    <button class="button" type="submit"name="Cancelar">Cancelar</button>
</form>