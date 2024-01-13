<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo muestra un formulario que
se envía a insertar.php, el cual guardará
los datos
================================
*/
?>

<div class="row">
	<div class="col-12">
		<h1>Agregar</h1>
		<form action="Insertar.php" method="POST">
			<div class="form-group">
				<label for="nombre">numero</label>
				<input required name="numero_departamento" type="integer" id="numero_departamento" placeholder="Nombre de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label for="edad">Nombre</label>
				<input required name="nombre_departamento" type="text" id="numero_departamento" placeholder="Edad de mascota" class="form-control">
			</div>
            <div class="form-group">
				<label for="edad">Descripcion</label>
				<input required name="descripcion_departamento" type="text" id="descripcion_departamento" placeholder="Edad de mascota" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./Listar.php" class="btn btn-warning">Ver todas</a>
		</form>
	</div>
</div>
