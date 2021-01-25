<header>
    <h1><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></h1>
</header>
<main>
    <form class="formIdiomas" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button <?php echo ($_COOKIE['idioma'] == "es") ? : null; ?> type="submit" name="idiomaElegido" value="es"> Castellano</button>
        <button <?php echo ($_COOKIE['idioma'] == "en") ? : null; ?> type="submit" name="idiomaElegido" value="en"> English</button>
    </form>
    <form class="formMain" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <input class="inputMain" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
            echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;
            ?>">
        </div>
        <div>
            <input class="inputMain" type="password" id="Password" name="Password" value="<?php
            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
        </div>

        <div>
            <button class="button" type="submit" name="IniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>
        </div>

    </form>
</main>