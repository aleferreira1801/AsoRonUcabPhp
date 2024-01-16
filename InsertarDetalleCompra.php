
<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...

include_once("connection.php");
$precio_unitario_detalle_compra=$_POST["precio_unitario_detalle_compra"];
$cant_prod_total_detalle_compra  = $_POST["cant_prod_total_detalle_compra"]; 
$fk_id_compra = $_POST["fk_id_compra"]; 
$fk_id_presentacion_ron =$_POST["fk_id_presentacion_ron"]; 





/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(" INSERT INTO detalle_compra (
    precio_unitario_detalle_compra,
    cant_prod_total_detalle_compra,
    fk_id_compra,
    fk_id_presentacion_ron
  )
  VALUES ( ?, ?,?,?);");

$resultadoDetalleCompra = $sentencia->execute(
    [
      $precio_unitario_detalle_compra,
      $cant_prod_total_detalle_compra,
      $fk_id_compra,
      $fk_id_presentacion_ron,
      
      
    ]
  );
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


if ($resultadoDetalleCompra === true) {
   
	header("Location: ListarDetalleCompra.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}