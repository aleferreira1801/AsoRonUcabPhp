<?php
#Salir si alguno de los datos no está presente

#Si todo va bien, se ejecuta esta parte del código...

include_once("connection.php");
$nombre_presentacion_ron = $_POST["nombre_presentacion_ron"];

# Obtener el precio unitario
$sql = "SELECT precio_presentacion_ron
FROM detalle_venta, presentacion_ron
WHERE id_detalle_venta = fk_id_presentacion_ron and
    nombre_presentacion_ron = '$nombre_presentacion_ron'";
$stmt = $base_de_datos->prepare($sql);
$stmt->execute();
$precio_unitario_detalle_venta = $stmt->fetchColumn();

$cant_prod_total_detalle_venta = $_POST["cant_prod_total_detalle_venta"];
# Obtener el precio unitario
$sql = "SELECT id_venta
FROM venta
ORDER BY id_venta DESC
LIMIT 1";
$stmt = $base_de_datos->prepare($sql);
$stmt->execute();
$fk_id_venta = $stmt->fetchColumn();

$sql = "SELECT id_presentacion_ron
FROM presentacion_ron
WHERE nombre_presentacion_ron = '$nombre_presentacion_ron'";
$stmt = $base_de_datos->prepare($sql);
$stmt->execute();
$fk_id_presentacion_ron = $stmt->fetchColumn();

$sql = "SELECT id_catalogo_inventario_ron
FROM catalogo_inventario_ron
WHERE id_catalogo_inventario_ron = '$fk_id_presentacion_ron'";
$stmt = $base_de_datos->prepare($sql);
$stmt->execute();
$fk_id_catalogo_inventario_ron = $stmt->fetchColumn();

$fk_id_punto_de_venta = 1;

$sql = "SELECT id_detalle_compra
FROM detalle_compra
WHERE id_detalle_compra = '$fk_id_presentacion_ron'";
$stmt = $base_de_datos->prepare($sql);
$stmt->execute();
$fk_id_detalle_compra = $stmt->fetchColumn();

$sql = "SELECT fk_id_compra
FROM detalle_compra 
WHERE  $fk_id_detalle_compra = id_detalle_compra";
$stmt = $base_de_datos->prepare($sql);
$stmt->execute();
$fk_id_compra = $stmt->fetchColumn();

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
    "INSERT into detalle_venta (
        precio_unitario_detalle_venta,
        cant_prod_total_detalle_venta,
        fk_id_venta,
        fk_id_presentacion_ron,
        fk_id_catalogo_inventario_ron,
        fk_id_punto_de_venta,
        fk_id_detalle_compra,
        fk_id_compra
    ) values (?, ?, ?, ?, ?, ?, ?, ?);
    "
);

$resultadoCompra = $sentencia->execute(
    [
        $precio_unitario_detalle_venta,
        $cant_prod_total_detalle_venta,
        $fk_id_venta,
        $fk_id_presentacion_ron,
        $fk_id_catalogo_inventario_ron,
        $fk_id_punto_de_venta,
        $fk_id_detalle_compra,
        $fk_id_compra,
    ]
);


#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


if ($resultadoCompra === true) {

    header("Location: ListDetalleVenta.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
