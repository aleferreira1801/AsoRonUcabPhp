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
$sentencia = $base_de_datos->query("SELECT * FROM   metodo_pago_cheque");
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
		<h1>Tabla Metodo Pago Venta</h1>
	
		<br>
		<div class="table-responsive">
        <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                             <th>#</th>
                            <th>Numero</th>
                            <th>Banco</th>
                            <th>Fecha</th>
                            <th>Autorizacion </th>
                            <th>Pagase</th>
                            <th>Suma</th>
                            <th>Numero de cuenta</th>
                           
                           
                           
                            
                            
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
                        <td><?php echo $personaJuridica->id_metodo_pago_cheque ?></td>
							<td><?php echo $personaJuridica->numero_cheque  ?></td>
							<td><?php echo $personaJuridica->banco_cheque  ?></td>
							<td><?php echo $personaJuridica->fecha_pago_cheque?></td>
                            <td><?php echo $personaJuridica->autoriza_cheque?></td>
                            <td><?php echo $personaJuridica->pagase_orden?></td>
                            <td><?php echo $personaJuridica->suma?></td>
                            <td><?php echo $personaJuridica->nro_cuenta?></td>
							
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