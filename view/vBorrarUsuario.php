<header>
    <img id="imgHeader" src="webroot/media/LogoEmpresa.png">
    <h1 id="h1Header"><?php echo $aLang[$_COOKIE['idioma']]['deleteUser']; ?></h1>    
</header>
<main>
    <article>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button id="btnBorrarUsuario" class="button" type="submit" name="borrarUsuario"><?php echo $aLang[$_COOKIE['idioma']]['deleteUser']; ?></button>
            <button id="btnBorrarUsuario" class="button" type="submit" name="cancelar" ><?php echo $aLang[$_COOKIE['idioma']]['out']; ?></button>
        </form>
    </article>
</main>
</body>