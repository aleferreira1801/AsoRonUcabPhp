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
$sentencia = $base_de_datos->query("SELECT  * FROM  persona_natural");
$personanatural = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
		<h1>Tabla Persona Natural</h1>
		
		<br>
		<div class="table-responsive">
        <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                            <th> #</th>
                            <th>RIF</th>
                            <th>Cedula</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre </th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Direccion De Habitacion</th>
                            <th>Genero</th>
                            <th>Puntos</th>
                            <th>Direccion Envio</th>
                            <th>Nacionalidad</th>
                            <th>Fecha De Nacimiento</th>
                            <th>Persons Juridica</th>
                            <th>Proveedor</th>
                            <th>Lugar</th>
                            <th>Lugar2</th>
                            <th>Opciones</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($personanatural as $personanatural){ ?>
						<tr>
                            <td><?php echo $personanatural->id_persona_natural ?></td>
							<td><?php echo $personanatural->rif_persona_natural ?></td>
							<td><?php echo $personanatural->ci_natural ?></td>
							<td><?php echo $personanatural->p_nombre_natural ?></td>
                            <td><?php echo $personanatural->s_nombre_natural?></td>
                            <td><?php echo $personanatural->p_apellido_natural?></td>
                            <td><?php echo $personanatural->s_apellido_natural?></td>
                            <td><?php echo $personanatural->direc_hab_natural?></td>
                            <td><?php echo $personanatural->genero?></td>
                            <td><?php echo $personanatural->puntos_natural?></td>
                            <td><?php echo $personanatural->direccion_envio?></td>
                            <td><?php echo $personanatural->nacionalidad_natural?></td>
                            <td><?php echo $personanatural->fecha_nacimiento_natural?></td>
                            <td><?php echo $personanatural->fk_id_persona_juridica?></td>
                            <td><?php echo $personanatural->fk_id_proveedor?></td>
                            <td><?php echo $personanatural->fk_id_lugar?></td>
                            <td><?php echo $personanatural->fk_id_lugar_2?></td>
					
							
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
          