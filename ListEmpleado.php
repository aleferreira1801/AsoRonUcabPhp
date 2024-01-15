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
$sentencia = $base_de_datos->query("SELECT * FROM empleado");
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
		<h1>Listar Empleado</h1>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Profesion</th>
						<th>Titulo Puesto</th>
						<th>Fecha Hora Inicio Turno</th>
                        <th>Fecha Hora Fin Turno </th>
                        <th>Empleado</th>
                        <th>Persona Natural </th>
                        <th>Punto De Venta </th>
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
							<td><?php echo $mascota->id_empleado ?></td>
							<td><?php echo $mascota->profesion?></td>
							<td><?php echo $mascota->titulo_puesto_empleado?></td>
                            <td><?php echo $mascota->fk_id_empleado ?></td>
                            <td><?php echo $mascota->fk_id_persona_natural?></td>
                            <td><?php echo $mascota->fk_id_punto_de_venta?></td>
							<td><?php echo $mascota->inicio_turno ?></td>
                            <td><?php echo $mascota->fin_turno ?></td>
                       
							<td><a class="btn btn-info" href="<?php echo "editarempleado.php?id_empleado=" . $mascota->id_empleado?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id_evento=" . $mascota->id_evento?>">Eliminar 🗑️</a></td>
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