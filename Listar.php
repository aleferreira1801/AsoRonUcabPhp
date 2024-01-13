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
$sentencia = $base_de_datos->query("SELECT * FROM departamento");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="row">
<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
	<div class="col-12">
		<h1>Listar con arreglo</h1>
		<a href="//parzibyte.me/blog" target="_blank">By Parzibyte</a>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Numero</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						
					</tr>
				</thead>
				<tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($mascotas as $mascota){ ?>
						<tr>
							<td><?php echo $mascota->id_departamento ?></td>
							<td><?php echo $mascota->nombre_departamento ?></td>
							<td><?php echo $mascota->numero_departamento ?></td>
              <td><?php echo $mascota->descripcion_departamento ?></td>
							<td><a class="btn btn-warning" href="<?php echo "editar.php?id_departamento=" . $mascota->id_departamento?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id_departamento=" . $mascota->id_departamento?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</div>
<?php  ?>
          
       