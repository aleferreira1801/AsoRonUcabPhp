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
$sentencia = $base_de_datos->query("SELECT * FROM detalle_venta");
$compra = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
		<h1>Detalle Venta</h1>
		<a href="//parzibyte.me/blog" target="_blank">By Parzibyte</a>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
                    <th>ID</th>
                        <th>Precio Unitario</th>
                        <th>Cantidad Total</th>
                        <th>Venta</th>
                        <th>Catalogo Inventario</th>
                        <th>Punto De Venta</th>
                        <th>Entrada</th>
                        <th>Evento</th>
                        <th>Detalle Compra</th>
                        <th> Compra</th>
                        <th> Presentacion  Ron</th>
                      
						
					</tr>
				</thead>
				<tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($compra as $compra){ ?>
						<tr>
							<td><?php echo $compra->id_detalle_venta ?></td>
                            <td><?php echo $compra->precio_unitario_detalle_venta ?></td>
							<td><?php echo $compra->cant_prod_total_detalle_venta?></td>
							<td><?php echo $compra->fk_id_venta  ?></td>
                            <td><?php echo $compra->fk_id_catalogo_inventario_ron ?></td>
                            <td><?php echo $compra->fk_id_punto_de_venta  ?></td>
                            <td><?php echo $compra->fk_id_entrada ?></td>
                            <td><?php echo $compra->fk_id_evento	 ?></td>
                            <td><?php echo $compra->fk_id_detalle_compra 	 ?></td>
                            <td><?php echo $compra->fk_id_compra 	 ?></td>
                            <td><?php echo $compra->fk_id_presentacion_ron 	 ?></td>
                            
							
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
<?php  ?>