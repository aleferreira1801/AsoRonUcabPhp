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
$sentencia = $base_de_datos->query("select * from vista_presentacion_ron;");
$presentacionron = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
		<h1> Reporte 7 Presentacion Ron</h1>
		
		<br>
		<div class="table-responsive">
        <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                            <th> #</th>S
                            <th>Unidad Volumen</th>
                            <th>Capacidad </th>
                            <th>Nombre </th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Edad Añejo</th>
                            <th>Ron</th>
                            <th>Proveedor</th>
                            <th>Sabor</th>
                            <th>Color</th>
                            <th>Categoria</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($presentacionron as $presentacionron){ ?>
						<tr>
                            <td><?php echo $presentacionron->id_presentacion_ron ?></td>
							<td><?php echo $presentacionron->unidad_volumen_presentacion_ron ?></td>
							<td><?php echo $presentacionron->capacidad_presentacion_ron ?></td>
							<td><?php echo $presentacionron->nombre_presentacion_ron ?></td>
                            <td><?php echo $presentacionron->descripcion_presentacion_ron?></td>
                            <td><?php echo $presentacionron->precio_presentacion_ron?></td>
                            <td><?php echo $presentacionron->edad_anejo_presentacion_ron?></td>
                            <td><?php echo $presentacionron->fk_id_ron?></td>
                            <td><?php echo $presentacionron->fk_id_proveedor?></td>
                            <td><?php echo $presentacionron->fk_id_sabor?></td>
                            <td><?php echo $presentacionron->fk_id_color?></td>
                            <td><?php echo $presentacionron->fk_id_categoria?></td>
                            
                            
							
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