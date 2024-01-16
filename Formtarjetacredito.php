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
    <h1 class=" text-center">Tarjeta Credito</h1>
		<form action="Insertartarjetacredito.php" method="POST">
            
        <div class="form-group">
				<label>Numero Tarjeta de credito</label>
				<input  name="numero_tarjeta_credito" type="text"   id="numero_tarjeta_credito" placeholder="Ingrese el monto" class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha Vencimiento</label>
				<input  name="fecha_vence_tarjeta_credito" type="date" id="fecha_vence_tarjeta_credito" placeholder="Ingrese El Puesto" class="form-control">
			</div>
         
			<div class="form-group">
				<label > Codigo Seguridad</label>
				<input  name="codigo_seguridad_tarjeta_credito" type="text" id="codigo_seguridad_tarjeta_credito" placeholder="Ingrese el efectivo" class="form-control">
			</div>
            <div class="form-group">
               <label >Tipo</label>
                <select class="form-control" id="tipo_tarjeta_credito" name="tipo_tarjeta_credito">
                <option>Seleccione el tipo de tarjeta de credito</option>
                 <option id="autoriza_cheque" name="tipo_tarjeta_credito">Mastercard</option>
                  <option id="tipo_tarjeta_credito" name="tipo_tarjeta_credito">Visa</option>
                      </select>
                     </div>
			
            <div class="form-group">
				<label >Pagase Orden</label>
				<input  name="pagase_orden" type="text" id="pagase_orden" placeholder="Ingresa el punto de venta" class="form-control">
			</div>

			
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./Listartarjetadecredito.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>