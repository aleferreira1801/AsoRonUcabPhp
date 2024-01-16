<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...
include_once("connection.php");

$numero_factura_venta = $_POST["numero_factura_venta"];
$fecha_venta = $_POST["fecha_venta"];
$total_venta = $_POST["total_venta"];
$fk_id_persona_natural = $_POST["fk_id_persona_natural"];
$fk_id_punto_de_venta_tienda_fisica = $_POST["fk_id_punto_de_venta_tienda_fisica"];
$fk_id_punto_de_venta = $_POST["fk_id_punto_de_venta"];





/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
    "INSERT into venta (
      numero_factura_venta,
      fecha_venta,
      total_venta,
      punto_ganado_venta,
      fk_id_persona_natural,
      fk_id_punto_de_venta_tienda_fisica,
      fk_id_punto_de_venta
    ) values (?, ?, ?, ?, ?, ?, ?);");
  
  $resultadoCompra = $sentencia->execute(
    [
      $numero_factura_venta,
      $fecha_venta,
      $total_venta,
      $punto_ganado_venta,
      $fk_id_persona_natural,
      $fk_id_punto_de_venta_tienda_fisica,
      $fk_id_punto_de_venta
    ]
  );
  
  #execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
  #Con eso podemos evaluar
  
  
  if ($resultadoCompra === true) {
  
    header("Location: ListVenta.php");
  } else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
  }