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
    <h1 class=" text-center">Metodo Pago Venta</h1>
		<form action="InsertarMetodoPagoVenta.php" method="POST">
            
        <div class="form-group">
				<label>Monto</label>
				<input required name="monto_Venta" type="number"   id="monto_venta" placeholder="Ingrese el monto" class="form-control">
			</div>
			<div class="form-group">
				<label>Venta</label>
				<input required name="fk_id_venta" type="integer" id="fk_id_venta" placeholder="Ingrese El Puesto" class="form-control">
			</div>
         
			<div class="form-group">
				<label >Efectivo</label>
				<input  name="fk_id_metodo_pago_efectivo" type="integer" id="fk_id_metodo_pago_efectivo" placeholder="Ingrese el efectivo" class="form-control">
			</div>
            <div class="form-group">
				<label >Tarjeta De Debito</label>
				<input  name="fk_id_metodo_pago_tarjeta_debito" type="integer" id="fk_id_metodo_pago_tarjeta_debito" placeholder="Ingresa la persona natural" class="form-control">
			</div>
			
            <div class="form-group">
				<label >Afiliado</label>
				<input  name="fk_id_metodo_pago_punto_afiliado" type="integer" id="fk_id_metodo_pago_punto_afiliado" placeholder="Ingresa el punto de venta" class="form-control">
			</div>

			<div class="form-group">
				<label>Cheque</label>
				<input  name="fk_id_metodo_pago_cheque  " type="integer"  id="fk_id_metodo_pago_cheque"  placeholder="Ingrese la fecha de inicio" class="form-control">
			</div>
            <div class="form-group">
				<label >Tarjeta De Credito</label>
				<input  name="fk_id_metodo_pago_tarjeta_credio" type="integer" id="ffk_id_metodo_pago_tarjeta_credito" placeholder="Ingrese la fecha de fin" class="form-control">
			</div> 
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./Listarmetodopagoventa.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>