<header>
    <h1><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></h1>
</header>
<main>
    <form class="formIdiomas" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button <?php echo ($_COOKIE['idioma'] == "es") ? : null; ?> type="submit" name="idiomaElegido" value="es"> Castellano</button>
        <button <?php echo ($_COOKIE['idioma'] == "en") ? : null; ?> type="submit" name="idiomaElegido" value="en"> English</button>
    </form>
    <div class="divLogin1">
        <p><a href="../webroot/media/200113EstructuraDeAlmacenamiento.JPG" target="_blank">Estructura de almacenamiento</a></p>
        <p><a href="../webroot/media/201127ModeloFisicoDeDatos20-21.pdf" target="_blank">Modelo fisico de datos</a></p>
        <p><a href="../webroot/media/201129CatalogoDeRequisitos.pdf" target="_blank">Catalogo de requisitos</a></p>
        <p><a href="../webroot/media/210102ArbolDeNavegación.pdf" target="_blank">Arbol de navegacion</a></p>
    </div>
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
    <div class="divLogin2">
        <p><a href="../webroot/media/210102DiagramaDeCasosDeUso.pdf" target="_blank">Diagrama de casos de uso</a></p>
        <p><a href="../webroot/media/210102DiagramaDeClases.pdf" target="_blank">Diagramas de clases</a></p>
        <p><a href="../webroot/media/210102DiagramaDeClasesLoginLogoff.pdf" target="_blank">Diagramas de clases Login Logoff</a></p>
        <p><a href="../webroot/media/210102RelacionDeFicheros.pdf" target="_blank">Relacion ficheros</a></p>
    </div>
</main>