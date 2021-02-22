<header>
    <img id="imgHeader" src="webroot/media/LogoEmpresa.png">
    <h1>Inicio</h1>
    <div>
        <form class="navInicio" name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button type="submit" name="miCuenta"><img src="webroot/media/miCuenta.jpg" width="25px" height="25px"></button>
            <button type="submit" name="borrarUsuario"><img src="webroot/media/borrarUsuario.png" width="25px" height="25px"></button>
            <button type="submit" name="cerrarSesion"><img src="webroot/media/cerrarSesion.png" width="25px" height="25px"></button>
        </form>
    </div>
</header>
<main>
    <article>
        <h2><?php echo $aLang[$_COOKIE['idioma']]['welcome'] ?> </h2>
        <p><?php echo ($numConexiones > 1) ? $aLang[$_COOKIE['idioma']]['numConnections'] : $aLang[$_COOKIE['idioma']]['numConnectionsWelcome']; ?></p>
        <?php echo ($ultimaConexion != null) ? "<p>" . $aLang[$_COOKIE['idioma']]['lastConnection'] . "</p>" : null; ?>
        <form name="rest" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button type="submit" name="mtoDepartamentos"><img src="webroot/media/mtoDepartamento.png" width="100px" height="100px"></button>
            <button type="submit" name="rest"><img src="webroot/media/apiRest.png" width="100px" height="100px"></button>            
        </form>
    </article>
</main>