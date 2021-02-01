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
        <div class=".formMain">
            <p><a href="https://docs.aws.amazon.com/es_es/apigateway/latest/developerguide/api-gateway-create-api-from-example.html" target="_blank">LINK WEB REST</a></p>
            <p>Introduce id(numero entero) para sacar un animal</p>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div>
                    <label>Entero: </label>
                    <input type = "number" name ="id" value="id"><br><?php if($error!==null){echo $error;}?>
                    <input type="submit" value="Enviar" name="enviarAmazon">
                </div>
            </form>
            <p><?php echo $aAmazonWebService['id']?></p>
            <p><?php echo $aAmazonWebService['type']?></p>
            <p><?php echo $aAmazonWebService['price']?></p>
        </div>
    </section>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <button class="button" type="submit" name="volver">Volver</button>
        </form>
    </section>
</article>