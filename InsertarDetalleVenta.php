
<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...


include_once("connection.php");

$precio_unitario_detalle_venta = $_POST["precio_unitario_detalle_venta"];
$cant_prod_total_detalle_venta = $_POST["cant_prod_total_detalle_venta"];
$fk_id_venta = $_POST["fk_id_venta"];
$fk_id_catalogo_inventario_ron = $_POST["fk_id_catalogo_inventario_ron"];
$fk_id_punto_de_venta = $_POST["fk_id_punto_de_venta"];
$fk_id_entrada = $_POST["fk_id_entrada"];
$fk_id_evento = $_POST["fk_id_evento"];
$fk_id_detalle_compra = $_POST["fk_id_detalle_compra"];
$fk_id_compra = $_POST["fk_id_compra"];
$fk_id_presentacion_ron = $_POST["fk_id_presentacion_ron"];





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
        fk_id_catalogo_inventario_ron,
        fk_id_punto_de_venta,
        fk_id_entrada,
        fk_id_evento,
        fk_id_detalle_compra,
        fk_id_compra,
        fk_id_presentacion_ron
    ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
  

  
  #execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
  #Con eso podemos evaluar
  
  
 $resultadoCompra = $sentencia->execute(
    [
        $precio_unitario_detalle_venta,
        $cant_prod_total_detalle_venta,
        $fk_id_venta,
        $fk_id_catalogo_inventario_ron,
        $fk_id_punto_de_venta,
        $fk_id_entrada,
        $fk_id_evento,
        $fk_id_detalle_compra,
        $fk_id_compra,
        $fk_id_presentacion_ron,
    ]
);

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


if ($resultadoCompra === true) {

    header("Location: ListDetalleVenta.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}