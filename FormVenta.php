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
    <h1 class=" text-center">Venta</h1>
		<form action="insertarVenta.php" method="POST">
			<div class="form-group">
				<label>Numero Factura</label>
				<input required name="numero_factura_venta" type="integer" id="numero_factura_venta" placeholder="Ingrese el numero de la factura" class="form-control">
			</div>
            <div class="form-group">
				<label>Fecha</label>
				<input required name="fecha_venta" type="datetime-local" id="fecha_venta" placeholder="Ingrese la fecha" class="form-control">
			</div>
            <div class="form-group">
				<label >total</label>
				<input required name="total_venta" type="number"  step="0.01" stepid="total_Venta" placeholder="Ingrese el numero de edicion del evento" class="form-control">
			</div> 
			<div class="form-group">
				<label >Punto Ganado</label>
				<input required name="punto_ganado_Venta" type="integer" id="punto_ganado_Venta" placeholder="Ingrese La Fecha De Inicio" class="form-control">
			</div>
			
            <div class="form-group">
				<label >Persona Natural </label>
				<input required name="fk_id_persona_natural" type="text" id="fk_id_persona_natural" placeholder="Ingrese La Locacion" class="form-control">
			</div>
            <div class="form-group">
				<label >Punto Tienda Fisica </label>
				<input required name="fk_id_punto_de_venta_tienda_fisica" type="integer" id="fk_id_punto_de_venta_tienda_fisica" placeholder="Ingrese el limite" class="form-control">
			</div>
			
            <div class="form-group">
				<label >Punto</label>
				<input  name="fk_id_punto_de_venta" type="integer" id="fk_id_punto_de_venta" placeholder="Ingrese El Lugar" class="form-control">
			</div>
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListVenta.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>