
<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...
include_once("connection.php");

$unidad_volumen_presentacion_ron = $_POST["unidad_volumen_presentacion_ron"];
$capacidad_presentacion_ron = $_POST["capacidad_presentacion_ron"];
$nombre_presentacion_ron = $_POST["nombre_presentacion_ron"];
$descripcion_presentacion_ron = $_POST["descripcion_presentacion_ron"];
$precio_presentacion_ron = $_POST["precio_presentacion_ron"];
$edad_anejo_presentacion_ron = $_POST["edad_anejo_presentacion_ron"];
$fk_id_ron = $_POST["fk_id_ron"];
$fk_id_proveedor = $_POST["fk_id_proveedor"];
$fk_id_sabor = $_POST["fk_id_sabor"];
$fk_id_color = $_POST["fk_id_color"];





/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
    "INSERT into presentacion_ron (
      unidad_volumen_presentacion_ron,
      capacidad_presentacion_ron,
      nombre_presentacion_ron,
      descripcion_presentacion_ron,
      precio_presentacion_ron,
      edad_anejo_presentacion_ron,
      fk_id_ron,
      fk_id_proveedor,
      fk_id_sabor,
      fk_id_color
    ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
  $resultadoCompra = $sentencia->execute(
    [
        $unidad_volumen_presentacion_ron,
        $capacidad_presentacion_ron ,
        $nombre_presentacion_ron ,
        $descripcion_presentacion_ron ,
        $precio_presentacion_ron ,
        $edad_anejo_presentacion_ron ,
        $fk_id_ron ,
        $fk_id_proveedor ,
        $fk_id_sabor ,
        $fk_id_color
    ]
  );
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


if ($resultadoCompra === true) {
   
	header("Location: ListarPresentacionRon.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}