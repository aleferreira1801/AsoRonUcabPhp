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
    <h1 class=" text-center">Empleado</h1>
		<form action="InsertarMetodoPagoVenta.php" method="POST">
            
        <div class="form-group">
				<label>Monto</label>
				<input required name="monto_Venta" type="text" id="monto_venta" placeholder="Ingrese el monto" class="form-control">
			</div>
			<div class="form-group">
				<label>Venta</label>
				<input required name="titulo_puesto_empleado" type="text" id="titulo_puesto_empleado" placeholder="Ingrese El Puesto" class="form-control">
			</div>
         
			<div class="form-group">
				<label >Jefe</label>
				<input  name="fk_id_empleado" type="integer" id="fk_id_empleado" placeholder="Ingrese el jefe" class="form-control">
			</div>
            <div class="form-group">
				<label >Persona Natural</label>
				<input required name="fk_id_persona_natural" type="integer" id="fk_id_persona_natural" placeholder="Ingresa la persona natural" class="form-control">
			</div>
			
            <div class="form-group">
				<label >Punto De Venta</label>
				<input required name="fk_id_punto_de_venta" type="integer" id="fk_id_punto_de_venta" placeholder="Ingresa el punto de venta" class="form-control">
			</div>

			<div class="form-group">
				<label>Fecha Hora Inicio Turno</label>
				<input required name="inicio_turno" type="datetime-local"  id="inicio_turno"  placeholder="Ingrese la fecha de inicio" class="form-control">
			</div>
            <div class="form-group">
				<label >Fecha Hora Fin Turno</label>
				<input required name="fin_turno" type="datetime-local" id="fin_turno" placeholder="Ingrese la fecha de fin" class="form-control">
			</div> 
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListEmpleado.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>