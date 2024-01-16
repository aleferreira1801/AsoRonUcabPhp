<?php

#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$id_catalogo_inventario_ron = $_POST["id_catalogo_inventario_ron"];
$fk_id_punto_de_venta = $_POST["fk_id_punto_de_venta"];
$fk_id_detalle_compra = $_POST["fk_id_detalle_compra"];
$fk_id_compra = $_POST["fk_id_compra"];
$fk_id_presentacion_ron = $_POST["fk_id_presentacion_ron"];

$sentencia = $base_de_datos->prepare(
"UPDATE catalogo_inventario_ron
SET
fk_id_punto_de_venta = ?,
fk_id_detalle_compra = ?,
fk_id_compra = ?,
fk_id_presentacion_ron = ?
WHERE id_catalogo_inventario_ron = ?;"
);
$resultado = $sentencia->execute([$fk_id_punto_de_venta,$fk_id_detalle_compra,$fk_id_compra,$fk_id_presentacion_ron,$id_catalogo_inventario_ron]); # Pasar en el mismo orden Pasar en el mismo orden de los ?
if ($resultado === true) {
header("Location: ListCategoriaInventarioron.php");
} else {
echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
