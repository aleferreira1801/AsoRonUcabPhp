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
    <h1 class=" text-center"> Detalle Compra</h1>
		<form action="InsertarDetalleCompra.php" method="POST">
            
        <div class="form-group">
				<label>Precio Unitario</label>
				<input required name="precio_unitario_detalle_compra" step="0.01" type="integer" id="precio_unitario_detalle_compra" placeholder="Ingrese el precio unitario" class="form-control">
			</div>
			<div class="form-group">
				<label>Cantidad Total Producto</label>
				<input required name="cant_prod_total_detalle_compra" type="integer" id="cant_prod_total_detalle_compra" placeholder="Ingrese la cantidad total del producto" class="form-control">
			</div>
            <div class="form-group">
				<label>Compra</label>
				<input required name="fk_id_compra" type="number" id="fk_id_compra"  placeholder="Ingrese la compra" class="form-control">
			</div>

            <div class="form-group">
				<label>Presentacion Ron</label>
				<input required name="fk_id_presentacion_ron" type="number" id="fk_id_presentacion_ron"  placeholder="Ingrese la compra" class="form-control">
			</div>
           
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarDetalleCompra.php" class="btn btn-info">Ver todas</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>