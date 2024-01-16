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
$sentencia = $base_de_datos->query("SELECT * FROM  catalogo_inventario_ron");
$personaJuridica = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
		<h1>Tabla Categoria Inventario</h1>
	
		<br>
		<div class="table-responsive">
        <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                             <th>#</th>
                            <th> Punto De Venta</th>
                            <th>Detalle Compra</th>
                            <th>Compra</th>
                            <th>Presentacion Ron </th>
                            <th>Actualizar</th>
                            <th></th>
                           
                           
                            
                            
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($personaJuridica as $personaJuridica){ ?>
						<tr>
                        <td><?php echo $personaJuridica->id_catalogo_inventario_ron?></td>
							<td><?php echo $personaJuridica-> fk_id_punto_de_venta ?></td>
							<td><?php echo $personaJuridica->fk_id_detalle_compra  ?></td>
							<td><?php echo $personaJuridica->fk_id_compra ?></td>
                            <td><?php echo $personaJuridica->fk_id_presentacion_ron ?></td>
                            
                            
							<td><a class="btn btn-info" href="<?php echo "editarcatalogoinventario.php?id_catalogo_inventario_ron=" . $personaJuridica->id_catalogo_inventario_ron?>">Editar 📝</a></td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
<?php  ?>