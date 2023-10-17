<?php
include '../modelo/producto.php';
$json = json_decode(file_get_contents('php://input'), true);
if ($json['solicitud']) {
    $producto = $json['solicitud'];
    $respuesta = getProductoName($producto);
}
echo json_encode($respuesta, true);
?>