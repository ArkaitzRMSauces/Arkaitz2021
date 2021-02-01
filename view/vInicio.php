<header>
    <h1>Inicio</h1>
    <div>
        <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
            <button type="submit" name="borrarUsuario"><?php echo $aLang[$_COOKIE['idioma']]['deleteUser']; ?></button>
            <button type="submit" name="rest">REST</button>
            <button type="submit" name="miCuenta">Mi cuenta</button>
        </form>
    </div>
</header>
<main>
    <article>
        <h2><?php echo $aLang[$_COOKIE['idioma']]['welcome'] ?> </h2>
        <p><?php echo ($numConexiones > 1) ? $aLang[$_COOKIE['idioma']]['numConnections'] : $aLang[$_COOKIE['idioma']]['numConnectionsWelcome']; ?></p>
        <?php echo ($ultimaConexion != null) ? "<p>" . $aLang[$_COOKIE['idioma']]['lastConnection'] . "</p>" : null; ?>
    </article>
</main>
</body>