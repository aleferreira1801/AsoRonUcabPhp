<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo guarda los datos del formulario
en donde se editan
================================
*/
?>

<?php


#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$id_empleado = $_POST["id_empleado"];
$profesion  = $_POST["profesion"];
$titulo_puesto_empleado = $_POST["titulo_puesto_empleado"];
$fk_id_empleado   = $_POST["fk_id_empleado"];
$fk_id_persona_natural= $_POST["fk_id_persona_natural"];
$fk_id_punto_de_venta= $_POST["fk_id_punto_de_venta"];
$inicio_turno= $_POST["inicio_turno"];
$fin_turno= $_POST["fin_turno"];

$sentencia = $base_de_datos->prepare(
    "UPDATE empleado
    SET
      profesion = ?,
      titulo_puesto_empleado = ?,
      fk_id_empleado =?,
      fk_id_persona_natural =?,
      fk_id_punto_de_venta = ?,
      inicio_turno = ?,
      fin_turno = ?
    WHERE id_empleado = ?;"
);
$resultado = $sentencia->execute([$profesion,$titulo_puesto_empleado,$fk_id_empleado,$fk_id_persona_natural,$fk_id_punto_de_venta,$inicio_turno,$fin_turno,$id_empleado]); # Pasar en el mismo orden Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: ListEmpleado.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}