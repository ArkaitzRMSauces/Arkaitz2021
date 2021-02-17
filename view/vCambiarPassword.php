<header>
    <img id="imgHeader" src="webroot/media/LogoEmpresa.png">
    <h1 id="h1Header">Cambiar Password</h1>
</header>

<form id="formPassword" name="form-cambiarPassword" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

    <div>
        <input class="inputPassword" type="password" name="Password" value="<?php
        echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;?>"
        placeholder="<?php echo $aLang[$_COOKIE['idioma']]['oldPassword'];?>" required>
    </div>
    <div>
        <input class="inputPassword" type="password" name="PasswordNueva" value="<?php
            echo (isset($_REQUEST['PasswordNueva'])) ? $_REQUEST['PasswordNueva'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['newPassword'];?>"  required>

    </div>
    <?php
    echo ($aErrores['PasswordNueva'] != null) ? "<span class='error'>" . $aErrores['PasswordNueva'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
    ?>

    <div>
        <input class="inputPassword" type="password" name="PasswordRepetida" value="<?php
            echo (isset($_REQUEST['PasswordRepetida'])) ? $_REQUEST['PasswordRepetida'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['repeatPassword'];?>" required>

    </div>
    <?php
    echo ($aErrores['PasswordRepetida'] != null) ? "<span class='error'>" . $aErrores['PasswordRepetida'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
    ?>

    <div>
        <button class="button" id="cambiarPassword" type="submit" name="CambiarPassword">Cambiar Password</button>
    </div>

</form>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="registro" method="post">
    <button class="button" id="cancelarPassword" type="submit"name="Cancelar">Cancelar</button>
</form>