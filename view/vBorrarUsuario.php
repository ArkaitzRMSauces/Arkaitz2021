<header>
    <h1><?php echo $aLang[$_COOKIE['idioma']]['deleteUser']; ?></h1>    
</header>
<main class="main-container-inicio" class="flex-container-align-item-center">
    <article>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button class="button" type="submit" name="borrarUsuario"><?php echo $aLang[$_COOKIE['idioma']]['deleteUser']; ?></button>
            <button class="button" type="submit" name="cancelar" ><?php echo $aLang[$_COOKIE['idioma']]['out']; ?></button>
        </form>
    </article>
</main>
</body>