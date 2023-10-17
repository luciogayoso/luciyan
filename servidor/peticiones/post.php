<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Producto</title>
</head>

<?php

include("../modelo/producto.php");

$pro = $_POST['producto'];
$des = $_POST['descripcion'];
$preU = $_POST['precioUnitario'];
$prome = $_POST['porcentaje'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

$result = insertar($pro, $des, $preU, $prome, $foto, $fotoTamanio);

if ($result === "Duplicate") {
    echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">No se pudo guardar porque ' . $pro . ' ya esta registrado </h3>
        <a href="../from/menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} elseif ($result === true) {
    echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">Se gurdo correctamente</h3>
        <a href="../from/menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
}
?>