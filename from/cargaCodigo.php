<div class="form">
    <h3 class="cargaCodigoTitulo">FORMULARIO DE MODIFICACION</h3>
    <form class="cargaInput" action="../server/modificacion.php" method="POST" enctype="multipart/form-data">
        <div class="container-select">
            <?php
            include("../servidor/modelo/producto.php");
            echo getProducto();
            ?>
            <div id="modal" class=""></div>
        </div>

        Este es el producto al que le vamos a cargar codigo:<br>

        <div class="grupoInputsCambiar">
            <div class="imagenUsuario">
                <img id="imgPerfile" src="images/camara.png" alt="">
            </div><br>
            <div class="grupoInputs">

                <label class="labelInput">
                    <spam class="spanInput">Descripcion:</spam>
                    <span class="cambioInput" id="descripcion"></span>
                </label><br>

                <label class="labelInput">
                    <spam class="spanInput">Precio Unitario:</spam>
                    <span class="cambioInput" id="precioU"></span>
                </label><br>

                <label class="labelInput">
                    <spam class="spanInput">Porcentaje:</spam>
                    <span class="cambioInput" id="porcentaje"></span>
                </label><br>

                <label class="labelInput">
                    <spam class="spanInput">Precio de Venta:</spam>
                    <span class="cambioInput" id="precioV"></span>
                </label><br>

                <div class="btn-submit">
                    <input type="submit" class="btn-modificar" value="Modificar">
                </div>
            </div>
        </div>
    </form>
</div>

<script src="js/cargaCodigo.js"></script>