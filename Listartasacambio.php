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
$sentencia = $base_de_datos->query("SELECT * FROM  tasa_de_cambio");
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
		<h1>Tabla Tasa De Cambio</h1>
	
		<br>
		<div class="table-responsive">
        <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                             <th>#</th>
                            <th>valor</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
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
                        <td><?php echo $personaJuridica->id_tasa ?></td>
							<td><?php echo $personaJuridica->valor_tasa ?></td>
							<td><?php echo $personaJuridica->fecha_inicio_tasa ?></td>
							<td><?php echo $personaJuridica->fecha_fin_tasa?></td>
							<td><a class="btn btn-info" href="<?php echo "editartasacambio.php?id_tasa=" . $personaJuridica->id_tasa?>">Editar 📝</a></td>
				
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