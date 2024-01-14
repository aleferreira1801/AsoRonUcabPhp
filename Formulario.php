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
<!DOCTYPE html>
<html lang="en">
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsoronUcab </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class=" text-center">Persona Natural</h1>
		<form action="InsertarPersonaNatural.php" method="POST">
			<div class="form-group">
				<label>RIF</label>
				<input required name="rif_persona_natural" type="text" id="rif_persona_natural" placeholder="Ingrese El RIF" class="form-control">
			</div>
			<div class="form-group">
				<label f>Cedula</label>
				<input required name="ci_natural" type="text" id="ci_natural" placeholder="Ingrese Su Cedula" class="form-control">
			</div>
            <div class="form-group">
				<label >Primer Nombre</label>
				<input required name="p_nombre_natural" type="text" id="p_nombre_natural" placeholder="Ingrese su Primer Nombre" class="form-control">
			</div>
			<div class="form-group">
				<label >Segundo Nombre</label>
				<input required name="s_nombre_natural" type="text" id="s_nombre_natural" placeholder="Ingrese Su Segundo Nombre" class="form-control">
			</div>
			<div class="form-group">
				<label >Primer Apellido</label>
				<input required name="p_apellido_natural" type="text" id="p_apellido_natural" placeholder="Ingrese Su Primer Apellido" class="form-control">
			</div>
			<div class="form-group">
				<label >Segundo Apellido</label>
				<input required name="s_apellido_natural" type="text" id="s_apellido_natural" placeholder="Ingrese Su Segundo Apellido" class="form-control">
			</div>
			<div class="form-group">
				<label >direccion de habitacion </label>
				<input required name="direc_hab_natural" type="text" id="direc_hab_natural" placeholder="Ingrese Su Direccion De Habitacion" class="form-control">
			</div>
			<div class="form-group">
               <label >Genero</label>
                <select class="form-control" id="genero" require name="genero">
                <option>Seleccione Un Genero</option>
                 <option id="genero" require name="genero">Femenino</option>
                  <option id="genero" require name="genero">Masculino</option>
                    <option id="genero" require name="genero">Otro</option>
                      </select>
                     </div>

			<div class="form-group">
				<label >puntos</label>
				<input required name="puntos_natural" type="integer" id="puntos_natural" placeholder="Ingrese Los Puntos" class="form-control">
			</div>
			<div class="form-group">
				<label >Direccion De Envio</label>
				<input required name="direccion_envio" type="text" id="direccion_envio" placeholder="Ingrese La Direccion De Envio" class="form-control">
			</div>

			<div class="form-group">
               <label >Nacionalidad</label>
                <select class="form-control" id="nacionalidad_natural" name="nacionalidad_natural">
                <option>Seleccione Una Nacionalidad</option>
                 <option id="nacionalidad_natural" name="nacionalidad_natural">V</option>
                  <option id="nacionalidad_natural" name="nacionalidad_natural">E</option>
                      </select>
                     </div>
			
			<div class="form-group">
				<label >Fecha De Nacimiento</label>
				<input required name="fecha_nacimiento_natural" type="date" id="fecha_nacimiento_natural" placeholder="Ingrese La Fecha De Nacimiento" class="form-control">
			</div>

			<div class="form-group">
				<label >Persona Juridica</label>
				<input  name="fk_id_persona_juridica" type="integer" id="fk_id_persona_juridica" placeholder="Ingrese La Persona Juridica" class="form-control">
			</div>
			<div class="form-group">
				<label >Proveedor</label>
				<input  name="fk_id_proveedor" type="integer" id="fk_id_proveedor" placeholder="Ingrese El Proveedor" class="form-control">
			</div>
            <div class="form-group">
				<label >Lugar</label>
				<input  name="fk_id_lugar" type="integer" id="fk_id_lugar" placeholder="Ingrese El Lugar" class="form-control">
			</div>
			<div class="form-group">
				<label >Lugar2</label>
				<input name="fk_id_lugar_2" type="integer" id="fk_id_lugar_2" placeholder="Edad de mascota" class="form-control">
			</div>
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarPersonaNatural.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
