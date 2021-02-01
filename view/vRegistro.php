<header>
    <h1>REGISTRO</h1>
</header>
<main>
    <article>
        <header>
            <h2>Registro</h2>
        </header>
        <form name="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div >
                <input type="text" name="CodUsuario" required>
                <label for="CodUsuario">Usuario</label>

            </div>
            <?php
            echo ($aErrores['CodUsuario'] != null) ? "<span class='error'>" . $aErrores['CodUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            <div>
                <input type="text" name="DescUsuario" value="<?php
                    echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : null;
                    ?>" required>
                <label for="DescUsuario">Descripcion</label>

            </div>
            <?php
            echo ($aErrores['DescUsuario'] != null) ? "<span class='error'>" . $aErrores['DescUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            <div>
                <input type="password" name="Password" value="<?php
                    echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
                    ?>" required>
                <label for="Password">Password</label>

            </div>
            <?php
            echo ($aErrores['Password'] != null) ? "<span class='error'>" . $aErrores['Password'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            <div>
                <input type="password" name="PasswordRepetida" value="<?php
                    echo (isset($_REQUEST['PasswordRepetida'])) ? $_REQUEST['PasswordRepetida'] : null;
                    ?>" required>
                <label for="PasswordRepetida">Repetir password</label>

            </div>
            <?php
            echo ($aErrores['PasswordRepetida'] != null) ? "<span class='error'>" . $aErrores['PasswordRepetida'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
            
            <div>
                <button type="submit" name="Registrarse">Registrarse</button>
            </div>

        </form>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="registro" method="post">
            <button type="submit" name="Cancelar"> Cancelar</button>
        </form>
    </article>
</main>
