<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */

if (!isset($_GET["id_departamento"])) {
    exit();
}

$id = $_GET["id_departamento"];
include_once "connection.php";
$sentencia = $base_de_datos->prepare("SELECT id_departamento,numero_departamento,nombre_departamento,descripcion_departamento FROM departamento WHERE id_departamento = ?;");
$sentencia->execute([$id]);
$mascota = $sentencia->fetchObject();
if (!$mascota) {
    #No existe
    echo "¡No existe alguna mascota con ese ID!";
    exit();
}

#Si la mascota existe, se ejecuta esta parte del código
?>

<div class="row">
	<div class="col-12">
		<h1>Editar</h1>
		<form action="guardarDatos.php" method="POST">
			<input type="hidden" name="id_departamento" value="<?php echo $mascota->id_departamento; ?>">
			<div class="form-group">
				<label for="nombre">Numero</label>
				<input value="<?php echo $mascota->numero_departamento; ?>" required name="numero_departamento" type="integer" id="numero_departamento" placeholder="Nombre de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label for="edad">Nombre</label>
				<input value="<?php echo $mascota->nombre_departamento; ?>" required name="nombre_departamento" type="text" id="nombre_departamento" placeholder="Edad de mascota" class="form-control">
			</div>
            <div class="form-group">
				<label for="edad">Descripcion</label>
				<input value="<?php echo $mascota->descripcion_departamento; ?>" required name="descripcion_departamento" type="text" id="descripcion_departamento" placeholder="Edad de mascota" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./Listar.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
