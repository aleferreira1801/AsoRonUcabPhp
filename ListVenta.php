<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo lista todos los
datos de la tabla, obteniendo a
los mismos como un arreglo
================================
*/
?>
<?php
include_once "connection.php";
$sentencia = $base_de_datos->query("SELECT * FROM Venta");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsoronUcab </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<div class="row">
<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
	<div class="col-12">
		<h1>Lista Venta</h1>
		<a href="//parzibyte.me/blog" target="_blank">By Parzibyte</a>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Numero Factura </th>
						<th>Fecha</th>
						<th>Total</th>
                        <th>Punto Ganado</th>
                        <th>Persona Natural </th>
                        <th>Tienda Fisica</th>
                        <th>Punto </th>
                        <th>Opciones</th>
                        <th></th>
						
					</tr>
				</thead>
				<tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($mascotas as $mascota){ ?>
						<tr>
							<td><?php echo $mascota->id_venta ?></td>
							<td><?php echo $mascota->numero_factura_venta?></td>
							<td><?php echo $mascota->fecha_venta?></td>
                            <td><?php echo $mascota->total_venta ?></td>
                            <td><?php echo $mascota->punto_ganado_venta ?></td>
                            <td><?php echo $mascota->fk_id_persona_natural ?></td>
                            <td><?php echo $mascota->fk_id_punto_de_venta_tienda_fisica?></td>
                            <td><?php echo $mascota->fk_id_punto_de_venta?></td>
                         
							<td><a class="btn btn-info" href="<?php echo "editar.php?id_venta=" . $mascota->id_venta?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id_venta=" . $mascota->venta?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
<?php  ?>