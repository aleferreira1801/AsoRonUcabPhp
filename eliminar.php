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
if (!isset($_GET["id_departamento"])) {
    exit();
}

$id = $_GET["id_departamento"];
include_once "connection.php";
$sentencia = $base_de_datos->prepare("DELETE FROM departamento WHERE id_departamento = ?;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    header("Location: Listar.php");
} else {
    echo "Algo salió mal";
}