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
$sentencia = $base_de_datos->query("SELECT * FROM  metodo_pago_pedido");
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
		<h1>Pago Pedido</h1>
		
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
                    <th>ID</th>
                    <th>Pedido</th>
                    <th>Pago Usuario</th>
                    <th>monto</th>
                    <th>tasa</th>
                
                   

					</tr>
				</thead>
				<tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($compra as $compra){ ?>
						<tr>
							<td><?php echo $compra->id_metodo_pago_pedido   ?></td>
                            <td><?php echo $compra->fk_id_pedido  ?></td>
							<td><?php echo $compra->fk_id_metodo_paga_usuario ?></td>
							<td><?php echo $compra->monto?></td>
                            <td><?php echo $compra->fk_id_tasa?></td>
							
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