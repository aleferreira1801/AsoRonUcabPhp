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
$sentencia = $base_de_datos->query("select extract(MONTH from c.fecha_compra) as mes,extract(YEAR from c.fecha_compra) as anio,sum(dc.cant_prod_total_detalle_compra) as total_prod_comp
from compra c
join detalle_compra dc on c.id_compra = dc.fk_id_compra
group by mes,anio
order by mes, anio;");
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
		<h1>  Reporte 8 Compra </h1>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>Mes</th>
						<th>Año</th>
						<th>Total Producto Vendido</th>
                       
						
					</tr>
				</thead>
				<tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($mascotas as $mascota){ ?>
						<tr>
							<td><?php echo $mascota-> mes?></td>
							<td><?php echo $mascota->anio?></td>
							<td><?php echo $mascota->total_prod_comp ?></td>
                     
                            
							
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