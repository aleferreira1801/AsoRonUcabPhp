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
include_once "connection.php";
#Salir si alguno de los datos no está presente


#Si todo va bien, se ejecuta esta parte del código...


$rif_persona_natural = $_POST["rif_persona_natural"];
$ci_natural = $_POST["ci_natural"];
$p_nombre_natural= $_POST["p_nombre_natural"];
$s_nombre_natural= $_POST["s_nombre_natural"];
$p_apellido_natural= $_POST["p_apellido_natural"];
$s_apellido_natural= $_POST["s_apellido_natural"];
$direc_hab_natural= $_POST["direc_hab_natural"];
$genero= $_POST["genero"];
$puntos_natural= $_POST["puntos_natural"];
$direccion_envio= $_POST["direccion_envio"];
$nacionalidad_natural= $_POST["nacionalidad_natural"];
$fecha_nacimiento_natural= $_POST["fecha_nacimiento_natural"];
$fk_id_persona_juridica= $_POST["fk_id_persona_juridica"];
$fk_id_proveedor= $_POST["fk_id_proveedor"];
$fk_id_lugar= $_POST["fk_id_lugar"];
$fk_id_lugar2= $_POST["fk_id_lugar2"];
$id_persona_natural= $_POST["ide_persona_natural"];

$sentencia = $base_de_datos->prepare("UPDATE persona_natural SET rif_persona_natural = ?, ci_natural= ?, p_nombre_natural= ?,s_nombre_natural=?
, p_apellido_natural=?,s_apellido_natural=?, direc_hab_natural=?,genero= ?,puntos_natural=?, direccion_envio=?,nacionalidad_natural=?, fecha_nacimiento_natural=?,
  WHERE id_persona_natural = ?;");
$resultado = $sentencia->$sentencia->execute([$rif_persona_natural, $ci_natural,$p_nombre_natural,$s_nombre_natural,$p_apellido_natural,$s_apellido_natural,$direc_hab_natural,$genero,$puntos_natural,$direccion_envio,$nacionalidad_natural,$fecha_nacimiento_natural,$fk_id_persona_juridica,$fk_id_proveedor,$fk_id_lugar2,$id_persona_natural]); # Pasar en el mismo orden de los ?# Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: ListarPersonaNatural.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}