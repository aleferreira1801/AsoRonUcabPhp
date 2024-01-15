<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo elimina un dato por ID sin
pedir confirmación. El ID viene de la URL
================================
*/


$id = $_GET["id_persona_juridica"];
include_once "connection.php";
$sentencia = $base_de_datos->prepare("DELETE FROM persona_juridica
WHERE id_persona_juridica = ?;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    header("Location: ListarPersonaJuridica.php");
} else {
    echo "Algo salió mal";
}