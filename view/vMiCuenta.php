<header>
    <h1>Mi Cuenta</h1>
</header>
<form class="formMain" name="form-miCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <div>
        <input class="inputMain" type="text" name="CodUsuario" value="<?php echo $oUsuarioActual->getCodUsuario()?>" readonly>
        <label for="CodUsuario">Usuario</label>
    </div>
    <div>
        <input class="inputMain" type="text" name="DescUsuario" value="<?php
            echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : $oUsuarioActual->getDescUsuario(); 
            ?>" required>
        <label for="DescUsuario">Descripcion</label>

    </div>
    <?php
        echo ($aErrores['DescUsuario']!=null) ? "<span class='error'>".$aErrores['DescUsuario']."</span>" : null;// si el campo es erroneo se muestra un mensaje de error
    ?>

    <div>
        <input class="inputMain" type="text" name="NumConexiones" value="<?php echo $oUsuarioActual->getNumConexiones(); ?>" readonly>
        <label for="NumConexiones">Numero de conexiones</label>
    </div>

    <div>
        <input class="inputMain" type="text" name="UltimaConexion" value="<?php echo date('d/m/Y H:i:s', $oUsuarioActual->getFechaHoraUltimaConexion()) ?>" readonly>
        <label for="UltimaConexion">Ultima conexion</label>
    </div>

    <div>
        <button class="button" type="submit" name="Editar">Editar</button>

    </div>
</form>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="registro" method="post">
    <button class="button" type="submit"name="CambiarPassword">Cambiar Password</button>
    <button class="button" type="submit"name="Cancelar">Cancelar</button>
</form>