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
    <h1 class=" text-center">Metodo Pago Cheque</h1>
		<form action="Insertarcheque.php" method="POST">
            
        <div class="form-group">
				<label>Numero cheque</label>
				<input  name="numero_cheque" type="number"   id="numero_cheque" placeholder="Ingrese el monto" class="form-control">
			</div>
			<div class="form-group">
				<label>Banco</label>
				<input  name="banco_cheque" type="text" id="banco_cheque" placeholder="Ingrese El Puesto" class="form-control">
			</div>
         
			<div class="form-group">
				<label >Fecha pago cheque</label>
				<input  name="fecha_pago_cheque" type="date" id="fecha_pago_cheque" placeholder="Ingrese el efectivo" class="form-control">
			</div>
            <div class="form-group">
               <label >Autoriza</label>
                <select class="form-control" id="autoriza_cheque" name="autoriza_cheque">
                <option>Seleccione la autorizacion</option>
                 <option id="autoriza_cheque" name="autoriza_cheque">Si</option>
                  <option id="autoriza_cheque" name="autoriza_cheque">No</option>
                      </select>
                     </div>
			
            <div class="form-group">
				<label >Pagase Orden</label>
				<input  name="pagase_orden" type="text" id="pagase_orden" placeholder="Ingresa el punto de venta" class="form-control">
			</div>

			<div class="form-group">
				<label>suma</label>
				<input  name="suma" type="text"  id="suma"  placeholder="Ingrese la fecha de inicio" class="form-control">
			</div>
            <div class="form-group">
				<label >Numero de cuenta</label>
				<input  name="nro_cuenta" type="text" id="nro_cuenta" placeholder="Ingrese la fecha de fin" class="form-control">
			</div> 
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./Listarmetodopagocheque.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>