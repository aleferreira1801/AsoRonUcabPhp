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
		<form action="InsertarPersonaNatural.php" method="POST">
			<div class="form-group">
				<label>numero</label>
				<input required name="rif_persona_natural" type="text" id="rif_persona_natural" placeholder="Nombre de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label f>Nombre</label>
				<input required name="ci_natural" type="text" id="ci_natural" placeholder="Edad de mascota" class="form-control">
			</div>
            <div class="form-group">
				<label >Descripcion</label>
				<input required name="p_nombre_natural" type="text" id="p_nombre_natural" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >Descripcion</label>
				<input required name="s_nombre_natural" type="text" id="s_nombre_natural" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >Descripcion</label>
				<input required name="p_apellido_natural" type="text" id="p_apellido_natural" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >Descripcion</label>
				<input required name="s_apellido_natural" type="text" id="s_apellido_natural" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >direccion </label>
				<input required name="direc_hab_natural" type="text" id="direc_hab_natural" placeholder="Edad de mascota" class="form-control">
			</div>
            <div class="form-group">
				<label >genero</label>
				<input required name="genero" type="text" id="genero" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >puntos</label>
				<input required name="puntos_natural" type="integer" id="puntos_natural" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >Descripcion</label>
				<input required name="direccion_envio" type="text" id="direccion_envio placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >nacionalidad</label>
				<input required name="nacionalidad_natural" type="text" id="nacionalidad_natural" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >Descripcion</label>
				<input required name="fecha_nacimiento_natural" type="date" id="fecha_nacimiento_natural" placeholder="Edad de mascota" class="form-control">
			</div>

			<div class="form-group">
				<label >Descripcion</label>
				<input  name="fk_id_persona_juridica" type="integer" id="fk_id_persona_juridica" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >Descripcion</label>
				<input  name="fk_id_proveedor" type="integer" id="fk_id_proveedor" placeholder="Edad de mascota" class="form-control">
			</div>
            <div class="form-group">
				<label >Descripcion</label>
				<input  name="fk_id_lugar" type="integer" id="fk_id_lugar" placeholder="Edad de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label >Descripcion</label>
				<input name="fk_id_lugar_2" type="integer" id="fk_id_lugar_2" placeholder="Edad de mascota" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./ListarPersonaNatural.php" class="btn btn-warning">Ver todas</a>
		</form>
	</div>
</div>
