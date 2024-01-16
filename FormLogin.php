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
    <h1 class=" text-center">Login</h1>
		<form action="InsertarPersonaJuridica.php" method="POST">
			<div class="form-group">
				<label>Nombre usuario</label>
				<input required name="rif_persona_juridica" type="text" id="rif_persona_juridica" placeholder="Ingrese El RIF" class="form-control">
			</div>
			<div class="form-group">
				<label > Correo</label>
				<input required name="denom_comercial_juridica" type="text" id="denom_comercial_juridica" placeholder="Ingrese La Denominacion Comercial" class="form-control">
			</div>
            <div class="form-group">
				<label >Contraseña</label>
				<input required name="razon_social_juridica" type="password" id="razon_social_juridica" placeholder="Ingrese La Razon Social" class="form-control">
			</div>
			
			<button type="submit" class="btn btn-info text-center">Guardar</button>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>