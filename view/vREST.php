<!--
    Autor: Susana Fabián Antón
    Fecha creación: 26/01/2021
    Última modificación: 26/01/2021
-->
<header>
    <h1>REST</h1>
    <div>
        <form class="navInicio" name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button type="submit" name="miCuenta"><img src="webroot/media/miCuenta.jpg" width="25px" height="25px"></button>
            <button type="submit" name="borrarUsuario"><img src="webroot/media/borrarUsuario.png" width="25px" height="25px"></button>
            <button type="submit" name="cerrarSesion"><img src="webroot/media/cerrarSesion.png" width="25px" height="25px"></button>
        </form>
    </div>
</header>
<article class="articleREST">
    <section class="sectionREST1">
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
            <?php if($tituloEnCurso!==null || $imagenEnCurso!==null || $descripcionEnCurso!==null){
            ?><p><?php echo $tituloEnCurso?></p>
            <img src="<?php echo $imagenEnCurso?>" width="100">
            <p><?php echo $descripcionEnCurso?></p>
            <?php
            }else{?>
                <p>Demasiadas solicitudes</p>
            <?php            
            }?>
        </div>
    </section>
    <section class="sectionREST2">
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
    </section>
    <section class="sectionREST3">
        <p><a href="https://digimon-api.herokuapp.com/index.html" target="_blank">LINK WEB REST DIGIMON</a></p>        
        <div>
            <label>Nombre: </label>
            <input type="text" id="idDigimonNombre"><br><?php if($error!==null){echo $error;}?>
            <input type="submit" value="Enviar" name="enviarDigimonNombre" onclick="buscarDigimon()">
        </div>
        <p id="pDigimon1"></p>
        <img id="imgDigimon" src="">
    </section>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <button class="button" id="btnREST" type="submit" name="volver">Volver</button>
        </form>
    </section>
    
</article>