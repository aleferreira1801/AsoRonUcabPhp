
<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...

include_once("connection.php");
$numero_compra=$_POST["numero_compra"];
$fecha_compra = $_POST["fecha_compra"]; 
$total_compra = $_POST["total_compra"]; 
$fk_id_empleado =$_POST["fk_id_empleado"]; 
$fk_id_proveedor = $_POST["fk_id_proveedor"];




/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(" INSERT INTO compra (
    numero_compra,
    fecha_compra,
    total_compra,
    fk_id_empleado,
    fk_id_proveedor
  )
  VALUES ( ?, ?,?,?,?);");

$resultadoCompra = $sentencia->execute(
    [
      $numero_compra,
      $fecha_compra,
      $total_compra,
      $fk_id_empleado,
      $fk_id_proveedor
      
    ]
  );
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


if ($resultadoCompra === true) {
   
	header("Location: ListarCompra.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}