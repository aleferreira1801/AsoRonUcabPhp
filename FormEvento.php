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
    <h1 class=" text-center">Evento</h1>
		<form action="InsertarEvento.php" method="POST">
			<div class="form-group">
				<label>nombre</label>
				<input required name="nombre_evento" type="text" id="nombre_evento" placeholder="Ingrese el nombre del evento" class="form-control">
			</div>
            <div class="form-group">
				<label>nombre</label>
				<input required name="descripcion_evento" type="text" id="descripcion_evento" placeholder="Ingrese el nombre del evento" class="form-control">
			</div>
            <div class="form-group">
				<label >Numero Edicion</label>
				<input required name="numero_edicion_evento" type="integer" id="numero_edicion_evento" placeholder="Ingrese el numero de edicion del evento" class="form-control">
			</div> 
			<div class="form-group">
				<label >Fecha Inicio</label>
				<input required name="fecha_inicio_evento" type="datetime-local" id="fecha_inicio_evento" placeholder="Ingrese La Fecha De Inicio" class="form-control">
			</div>
			<div class="form-group">
				<label >Fecha Fin</label>
				<input required name="fecha_fin_evento" type="datetime-local" type="integer" id="fecha_fin_evento" placeholder="Ingrese la Fecha fin" class="form-control">
			</div>
            <div class="form-group">
				<label >Locacion </label>
				<input required name="locacion_evento" type="text" id="locacion_evento" placeholder="Ingrese La Locacion" class="form-control">
			</div>
            <div class="form-group">
				<label >Limite </label>
				<input required name="limite_ocupacion_evento" type="integer" id="limite_ocupacion_evento" placeholder="Ingrese el limite" class="form-control">
			</div>
			
            <div class="form-group">
				<label >Punto</label>
				<input  name="fk_id_punto_de_venta" type="integer" id="fk_id_punto_de_venta" placeholder="Ingrese El Lugar" class="form-control">
			</div>
			<div class="form-group">
				<label >Lugar2</label>
				<input name="fk_id_lugar" type="integer" id="fk_id_lugar" placeholder="Ingrese el lugar2" class="form-control">
			</div>
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarEvento.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>