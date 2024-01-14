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
    <h1 class=" text-center">Compra</h1>
		<form action="InsertCompra.php" method="POST">
            
        <div class="form-group">
				<label>numero</label>
				<input required name="numero_compra" type="integer" id="numero_compra" placeholder="Ingrese la fecha de su compra" class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha</label>
				<input required name="fecha_compra" type="datetime-local" id="fecha_compra" placeholder="Ingrese la fecha de su compra" class="form-control">
			</div>
            <div class="form-group">
				<label>Total</label>
				<input required name="total_compra" type="number" id="total_compra" step="0.01" placeholder="Ingrese el total de la compra" class="form-control">
			</div>
            <div class="form-group">
				<label >Empleado</label>
				<input required name="fk_id_empleado" type="integer" id="fk_id_empleado" placeholder="Ingrese el empleado" class="form-control">
			</div> 
			<div class="form-group">
				<label >Proveedor</label>
				<input required name="fk_id_proveedor" type="integer" id="fk_id_proveedor" placeholder="Ingrese del proveedor" class="form-control">
			</div>
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarCompra.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>