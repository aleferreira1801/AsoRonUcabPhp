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
    <h1 class=" text-center">Tasa De Cambio</h1>
		<form action="InsertarTasadecambio.php" method="POST">
            
        <div class="form-group">
				<label>Valor</label>
				<input required name="valor_tasa" type="number" step="0.01" id="valor_tasa" placeholder="Ingrese  la tasa de cambio" class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha Inicio</label>
				<input required name="fecha_inicio_tasa" type="date" id="fecha_inicio_tasa" placeholder="Ingrese la fecha de inicio de la tasa" class="form-control">
            </div>
            <div class="form-group">
				<label>Fecha Fin</label>
				<input required name="fecha_fin_tasa" type="date" id="fecha_fin_tasa" placeholder="Ingrese la fecha fin de la tasa" class="form-control">
            </div>
			
			
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./Listartasacambio.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>