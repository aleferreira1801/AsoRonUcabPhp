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
    <h1 class=" text-center">Pago Usuario</h1>
		<form action="insertarpagosuario.php" method="POST">
            
        <div class="form-group">
				<label>Usuario</label>
				<input  name="fk_id_usuario" type="integer" id="fk_id_usuario" placeholder="Ingrese la fecha de su compra" class="form-control">
			</div>

			<div class="form-group">
				<label>Efectivo</label>
				<input  name="fk_id_metodo_pago_efectivo" type="integer" id="fk_id_metodo_pago_efectivo" placeholder="Ingrese la fecha de su compra" class="form-control">
			</div>

			
			<div class="form-group">
				<label>Tarjeta de debito</label>
				<input  name="fk_id_metodo_pago_tarjeta_debito" type="integer" id="fk_id_metodo_pago_tarjeta_debito" placeholder="Ingrese la fecha de su compra" class="form-control">
			</div>

			<div class="form-group">
				<label>Cheque</label>
				<input  name="fk_id_metodo_pago_cheque" type="integer" id="fk_id_metodo_pago_cheque" placeholder="Ingrese la fecha de su compra" class="form-control">
			</div>

			<div class="form-group">
				<label>Tarjeta de credito</label>
				<input  name="fk_id_metodo_pago_tarjeta_credito" type="integer" id="fk_id_metodo_pago_tarjeta_credito" placeholder="Ingrese la fecha de su compra" class="form-control">
			</div>

			
			
		


			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./listarpagousuario.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>