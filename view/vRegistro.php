<header>
    <h1>REGISTRO</h1>
</header>
<main>
    <article>
        <form name="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div >
                <input class="inputMain" type="text" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>"required>                
            </div>
            <?php
            echo ($aErrores['CodUsuario'] != null) ? "<span class='error'>" . $aErrores['CodUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            <div>
                <input class="inputMain" type="text" name="DescUsuario" value="<?php
                    echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : null;
                    ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['description']; ?>" required>
            </div>
            <?php
            echo ($aErrores['DescUsuario'] != null) ? "<span class='error'>" . $aErrores['DescUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            <div>
                <input class="inputMain" type="password" name="Password" value="<?php
                    echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
                    ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>" required>
            </div>
            <?php
            echo ($aErrores['Password'] != null) ? "<span class='error'>" . $aErrores['Password'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            <div>
                <input class="inputMain" type="password" name="PasswordRepetida" value="<?php
                    echo (isset($_REQUEST['PasswordRepetida'])) ? $_REQUEST['PasswordRepetida'] : null;
                    ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>" required>
            </div>
            <?php
            echo ($aErrores['PasswordRepetida'] != null) ? "<span class='error'>" . $aErrores['PasswordRepetida'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            
            <div>
                <button class="button" type="submit" name="Registrarse">Registrarse</button>
            </div>

        </form>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="registro" method="post">
            <button class="button" type="submit" name="Cancelar"> Cancelar</button>
        </form>
    </article>
</main>
