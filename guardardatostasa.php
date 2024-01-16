<?php

#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$id_tasa = $_POST["id_tasa"];
$valor_tasa = $_POST["valor_tasa"];
$fecha_inicio_tasa = $_POST["fecha_inicio_tasa"];
$fecha_fin_tasa = $_POST["fecha_fin_tasa"];

$sentencia = $base_de_datos->prepare(
"UPDATE tasa_de_cambio
SET
valor_tasa = ?,
fecha_inicio_tasa = ?,
fecha_fin_tasa = ?
WHERE id_tasa = ?;"
);
$resultado = $sentencia->execute([$valor_tasa,$fecha_inicio_tasa,$fecha_fin_tasa,$id_tasa]); # Pasar en el mismo orden Pasar en el mismo orden de los ?
if ($resultado === true) {
header("Location: Listartasacambio.php");
} else {
echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}

