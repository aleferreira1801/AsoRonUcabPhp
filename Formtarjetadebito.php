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
    <h1 class=" text-center">Tarjeta debito</h1>
		<form action="Insertartrajetadebito.php" method="POST">
            
        <div class="form-group">
				<label>Numero</label>
				<input  name="numero_tarjeta_debito" type="text" id="numero_tarjeta_debito" placeholder="Ingrese La Profesion" class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha Vencimiento</label>
				<input required name="fecha_vence_tarjeta_debito" type="date" id=" fecha_vence_tarjeta_debito" placeholder="Ingrese El Puesto" class="form-control">
			</div>
         
			<div class="form-group">
				<label >Codigo Seguridad</label>
				<input  name=" codigo_seguridad_tarjeta_debito" type="text" id="codigo_seguridad_tarjeta_debito" placeholder="Ingrese el jefe" class="form-control">
			</div>
            <div class="form-group">
				<label >Nombre Banco</label>
				<input required name="nombre_banco_tarjeta_debito" type="integer" id="nombre_banco_tarjeta_debito" placeholder="Ingresa la persona natural" class="form-control">
			</div>
			
            
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./Listartarjetadebito.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>