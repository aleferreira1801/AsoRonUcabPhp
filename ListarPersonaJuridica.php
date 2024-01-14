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
$sentencia = $base_de_datos->query("SELECT * FROM  persona_juridica");
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
		<h1>Tabbla Persona Juridica</h1>
	
		<br>
		<div class="table-responsive">
        <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                             <th>#</th>
                            <th>RIF</th>
                            <th>Denominacion Comercial</th>
                            <th>Razon Social</th>
                            <th>Pagina Web </th>
                            <th>Capital Disponible</th>
                            <th>Direccion Fiscal</th>
                            <th>Direccion De Fisica</th>
                            <th>Lugar</th>
                            <th>Lugar 2</th>
                            <th>opciones</th>
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
                        <td><?php echo $personaJuridica->id_persona_juridica ?></td>
							<td><?php echo $personaJuridica->rif_persona_juridica ?></td>
							<td><?php echo $personaJuridica->denom_comercial_juridica ?></td>
							<td><?php echo $personaJuridica->razon_social_juridica?></td>
                            <td><?php echo $personaJuridica->pagina_web_juridica?></td>
                            <td><?php echo $personaJuridica->capital_disponible_juridica?></td>
                            <td><?php echo $personaJuridica->direc_fiscal_juridica?></td>
                            <td><?php echo $personaJuridica->direc_fisica_principal_juridica?></td>
                            <td><?php echo $personaJuridica->fk_id_lugar?></td>
                            <td><?php echo $personaJuridica->fk_id_lugar_2?></td>
							<td><a class="btn btn-info" href="<?php echo "editar.php?id_persona_juridica =" . $personaJuridica->id_persona_juridica?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id_persona_juridica=" . $personaJuridica->id_persona_juridica?>">Eliminar 🗑️</a></td>
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