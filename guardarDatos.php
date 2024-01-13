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

#Salir si alguno de los datos no está presente
if (
    !isset($_POST["nombre_departamento"]) ||
    !isset($_POST["numero_departamento"]) ||
    !isset($_POST["descripcion_departamento"])||
    !isset($_POST["id_departamento"])
) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$id = $_POST["id_departamento"];
$numero = $_POST["numero_departamento"];
$nombre = $_POST["nombre_departamento"];
$descripcion = $_POST["descripcion_departamento"];

$sentencia = $base_de_datos->prepare("UPDATE departamento SET numero_departamento = ?, nombre_departamento= ?, descripcion_departamento= ? WHERE id_departamento = ?;");
$resultado = $sentencia->execute([$numero, $nombre, $descripcion,$id]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: Listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}