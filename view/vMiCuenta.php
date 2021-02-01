<header>
    <h1>MI CUENTA</h1>
</header>
<main>
    <article>
        <header>
            <h2>Mi Cuenta</h2>
        </header>
        
        <form name="form-miCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

            <div>
                <input type="text" name="CodUsuario" value="<?php echo $oUsuarioActual->codUsuario ?>" readonly>
                <label for="CodUsuario">Usuario</label>
            </div>
            <div>
                <input type="text" name="DescUsuario" value="<?php
                    echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : $oUsuarioActual->descUsuario; 
                    ?>" required>
                <label for="DescUsuario">Descripcion</label>
                
            </div>
            <?php
                echo ($aErrores['DescUsuario']!=null) ? "<span class='error'>".$aErrores['DescUsuario']."</span>" : null;// si el campo es erroneo se muestra un mensaje de error
            ?>
            
            <div>
                <input type="text" name="NumConexiones" value="<?php echo $oUsuarioActual->numConexiones; ?>" readonly>
                <label for="NumConexiones">Numero de conexiones</label>
            </div>
            
            <div>
                <input type="text" name="UltimaConexion" value="<?php echo date('d/m/Y H:i:s', $oUsuarioActual->fechaHoraUltimaConexion) ?>" readonly>
                <label for="UltimaConexion">Ultima conexion</label>
            </div>
            
            <div>
                <button type="submit" name="Editar">Editar</button>
            </div>

        </form>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="registro" method="post">
            <button  type="submit"name="CambiarPassword">Cambiar Password</button>
            <button type="submit"name="Cancelar">Cancelar</button>
        </form>
    </article>
</main>