<header>
    <img id="imgHeader" src="webroot/media/LogoEmpresa.png">
    <h1>Mto Departamentos</h1>
    <div>
        <form class="navInicio" name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button type="submit" name="miCuenta"><img src="webroot/media/miCuenta.jpg" width="25px" height="25px"></button>
            <button type="submit" name="borrarUsuario"><img src="webroot/media/borrarUsuario.png" width="25px" height="25px"></button>
            <button type="submit" name="cerrarSesion"><img src="webroot/media/cerrarSesion.png" width="25px" height="25px"></button>
        </form>
    </div>
</header>
<main>
    <form method="post">
        <div>
            <label>Buscar departamento: </label>
            <input type="text" name="descDepartamento"><?php if($error!==null){echo $error;}?>
            <button type="submit" name="buscarDepartamento"><img src="webroot/media/buscarDepartamento.jpg" width="25px" height="25px"></button>
        </div>
    </form>
    <table>
        <?php
            var_dump($aDepartamentos);
        ?>
        <tr>
            <th>Código</td>
            <th>Descripción</td>
            <th>Fecha</td>
            <th>Volumen de Negocio</td>
        </tr>
        <?php
            foreach($aDepartamentos as $numDepartamento => $oDepartamento){                
        ?>
        <tr>
            <td><?php echo $oDepartamento->getCodDepartamento();?></td>
            <td><?php echo $oDepartamento->getDescDepartamento();?></td>
            <td><?php echo $oDepartamento->getFechaBajaDepartamento() ?></td>
            <td><?php echo $oDepartamento->getVolumenDeNegocio();?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <button class="button" type="submit" name="volver">Volver</button>
        </form>
    </section>
</main>
