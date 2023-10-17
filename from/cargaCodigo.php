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
                <input type="file" name="foto" class="inputFile" style="display:none">
            </div>
            <div class="grupoInputs">

                <label class="labelInput">
                    <input type="text" class="cambioInput" id="descripcion" placeholder="" name="descricion" required>
                    <spam class="spanInput">Descripcion</spam>
                </label>

                <label class="labelInput">
                    <input type="text" class="cambioInput" id="precioU" placeholder="" name="precioU" required>
                    <spam class="spanInput">Precio Unitario</spam>
                </label>

                <label class="labelInput">
                    <input type="text" class="cambioInput" id="porcentaje" placeholder="" name="porcentaje" required>
                    <spam class="spanInput">Porcentaje</spam>
                </label>

                <label class="labelInput">
                    <input type="text" class="cambioInput" id="precioVenta" placeholder="" name="precioVenta" required>
                    <spam class="spanInput">Precio de Venta</spam>
                </label>

                <div class="btn-submit">
                    <input type="submit" class="btn-modificar" value="Modificar">
                </div>
            </div>
        </div>
    </form>
</div>

<script src="js/cargaCodigo.js"></script>