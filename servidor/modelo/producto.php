<?php
function insertar($pro, $des, $preU, $prome, $foto, $fotoTamanio)
{
    if ($fotoTamanio > 0) {
        $fp = fopen($foto, "rb");
        $contenido = fread($fp, $fotoTamanio);
        $contenido = addslashes($contenido);
        fclose($fp);

        $promedio = ($preU * $prome) / 100;
        $preV = $preU + $promedio;

        $Conexion = include("conexion.php");

        $cadena = "INSERT INTO productos(nombre, descripcion, precioUnitario,porcentaje,precioVenta,foto) VALUES ('$pro','$des','$preU','$prome','$preV','$contenido')";

        try {
            $resultado = mysqli_query($Conexion, $cadena);

            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            return substr($e, 22, 9);
        }
    } else {
        return false;
    }
}

function getProducto()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT nombre FROM productos ";

    $consulta = mysqli_query($Conexion, $cadena);
    $html = "<select class='select' style='border-bottom: 1px solid black;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width:15em;
    font-size:1.5em;
    cursor: pointer' name='nombre'><option value=''selected='true' disabled>Seleccione una opcion</option>";


    while ($registro = mysqli_fetch_row($consulta)) {
        $html = $html . "<option value=" . $registro[0] . ">" . $registro[0] . "</option>";
    }
    $html = $html . "</select>";
    return $html;
}


function getProductoName($producto)
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT * FROM productos WHERE nombre ='" . $producto . "'";
    $consulta = mysqli_query($Conexion, $cadena);
    $array = array();
    while ($registro = mysqli_fetch_row($consulta)) {
        array_push($array, array('id' => $registro[0], 'nombre' => $registro[1], 'descripcion' => $registro[2], 'precioU' => $registro[3], 'porcentaje' => $registro[4], 'precioV' => $registro[5], 'foto' => base64_encode($registro[6])));
    }
    return $array;
}

?>