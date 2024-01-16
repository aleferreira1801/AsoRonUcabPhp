
<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...

include_once("connection.php");
$precio_punto = $_POST["precio_punto"];
$fecha_inicio_tasa_punto = $_POST["fecha_inicio_tasa_punto"];
$fecha_fin_tasa_punto = $_POST["fecha_fin_tasa_punto"];
$fk_id_punto_de_venta_tienda_fisica = $_POST["fk_id_punto_de_venta_tienda_fisica"];
$fk_id_punto_de_venta = $_POST["fk_id_punto_de_venta"];





/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
    "INSERT into punto (
      precio_punto,
      fecha_inicio_tasa_punto,
      fecha_fin_tasa_punto,
      fk_id_punto_de_venta_tienda_fisica,
      fk_id_punto_de_venta
    ) values (?, ?, ?, ?, ?);");
  
  $resultadoCompra = $sentencia->execute(
    [
      $precio_punto,
      $fecha_inicio_tasa_punto,
      $fecha_fin_tasa_punto,
      $fk_id_punto_de_venta_tienda_fisica,
      $fk_id_punto_de_venta
    ]
  );
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


if ($resultadoCompra === true) {
   
	header("Location: ListarPunto.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}