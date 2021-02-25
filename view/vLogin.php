<header>
    <img id="imgHeader" src="webroot/media/LogoEmpresa.png">
    <h1 id="h1Header"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></h1>
</header>
<main>
    <form class="formIdiomas" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button <?php echo ($_COOKIE['idioma'] == "es") ? : null; ?> type="submit" name="idiomaElegido" value="es"> Castellano</button>
        <button <?php echo ($_COOKIE['idioma'] == "en") ? : null; ?> type="submit" name="idiomaElegido" value="en"> English</button>
    </form>
    <div class="divLogin1">
        <a href="doc/200113EstructuraDeAlmacenamiento.JPG" target="_blank"><img src="webroot/media/EstructuraAlmacenamiento.JPG" width="150px" height="150px" alt="EstructuraAlmacenamiento"></a>
        <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"><img src="webroot/media/ModeloFisicoDatos.JPG" width="150px" height="150px" alt="ModeloFisicoDatos"></a>
        <a href="doc/201129CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/media/CatalogoRequisitos.JPG" width="150px" height="150px" alt="CatalogoRequisitos"></a>
        <a href="doc/210102ArbolDeNavegación.pdf" target="_blank"><img src="webroot/media/ArbolNavegacion.JPG" width="150px" height="150px" alt="ArbolNavegacion"></a>
        <a href="doc/210102DiagramaDeCasosDeUso.pdf" target="_blank"><img src="webroot/media/CasosDeUso.JPG" width="150px" height="150px" alt="CasosDeUso"></a>
        <a href="doc/210102DiagramaDeClases.pdf" target="_blank"><img src="webroot/media/DiagramaClases.JPG" width="150px" height="150px" alt="DiagramaClases"></a>
        <a href="doc/210102DiagramaDeClasesLoginLogoff.pdf" target="_blank"><img src="webroot/media/DiagramaClasesLoginLogoff.JPG" width="150px" height="150px" alt="DiagramaClasesLoginLogoff"></a>
        <a href="doc/210102RelacionDeFicheros.pdf" target="_blank"><img src="webroot/media/RelacionFicheros.JPG" width="150px" height="150px" alt="RelacionFicheros"></a>
    </div>
    <form class="formMain" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <input id="inpLogin1" onblur="validarCampos(inpLogin1,pLogin1)" class="inputMain" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
            echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;
            ?>">
            <p id="pLogin1" class="hidden"></p>
        </div>
        <div>
            <input id="inpLogin2" onblur="validarCampos(inpLogin2,pLogin2)" class="inputMain" type="password" id="Password" name="Password" value="<?php
            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
            <p id="pLogin2" class="hidden"></p>
        </div>

        <div>
            <button class="button" type="submit" name="IniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>
            <button class="button" type="submit" name="Registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button>
        </div>
    </form>
</main>