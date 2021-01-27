<!--
    Autor: Susana Fabián Antón
    Fecha creación: 26/01/2021
    Última modificación: 26/01/2021
-->
<header>
    <h1>REST</h1>
</header>
<article>
    <section>
        <div class=".formMain">
            <p>Uso de API REST</p>
            <div>
                <p>APOD: Atronomy Picture of the Day</p>
                <p>Puedes seleccionar una fecha para ver su imagen</p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <p>
                        <input type="date" name="fecha" value="<?php echo date('Y-m-d') ?>">
                    </p>
                    <div>
                        <input type="submit" value="Enviar" name="enviar">
                    </div>
                </form>
            </div>
            <div>
                <p><?php echo $tituloEnCurso?></p>
                <img src="<?php echo $imagenEnCurso?>" width="100">
                <p><?php echo $descripcionEnCurso?></p>
            </div>
        </div>
    </section>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <button class="button" type="submit" name="volver">Volver</button>
        </form>
    </section>
</article>