<div class="Registro">
    <h3 class="altaTitulo">Registro de Producto</h3>
    <form class="altaInput" action="../servidor/peticiones/post.php" method="POST" enctype="multipart/form-data">
        <div class="grupoInputs">
            <img onclick="seleccionarArchivo()" src="images/camara.png" id="imgPerfil" alt="">
            <input type="file" class="inputFile" name="foto" style="display:none"><br>
        </div>

        <div class="grupoInputs">
            <input type="text" placeholder="producto" name="producto" required><br>
        </div>

        <div class="grupoInputs">
            <input type="text" placeholder="descripcion" name="descripcion" required><br>
        </div>

        <div class="grupoInputs">
            <input type="number" placeholder="precio unitario" name="precioUnitario" required><br>
        </div>

        <div class="grupoInputs">
            <input type="number" placeholder="porcentaje" name="porcentaje" max="100" min="20" required><br>
        </div>

        <div class="btn-submit">
            <input class="btn" type="submit" value="Gurdar"><br>
        </div>
    </form>
</div>

<script src="js/altaProducto.js"></script>