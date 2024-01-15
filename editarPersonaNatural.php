<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */



$id = $_GET["id_persona_natural"];
include_once "connection.php";
$sentencia = $base_de_datos->prepare("SELECT id_persona_natural,rif_persona_natural,ci_natural, p_nombre_natural,s_nombre_natural
, p_apellido_natural,s_apellido_natural, direc_hab_natural,genero,puntos_natural, direccion_envio,nacionalidad_natural, fecha_nacimiento_natural,
fk_id_persona_juridica,fk_id_proveedor, fk_id_lugar, fk_id_lugar_2 FROM persona_natural
WHERE id_persona_natural= ?;");
$sentencia->execute([$id]);
$personanatural = $sentencia->fetchObject();


#Si la mascota existe, se ejecuta esta parte del código
?>
<!DOCTYPE html>
<html lang="en">
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsoronUcab </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class=" text-center">Persona Natural</h1>
		<form action="guardarDatosPersonaNatural.php" method="POST">
        <input type="hidden" name="id_persona_natural" type="integer" value="<?php echo $personanatural->id_persona_natural; ?>">
			<div class="form-group">
				<label>RIF</label>
				<input required name="rif_persona_natural" value="<?php echo $personanatural->rif_persona_natural; ?>" type="text" id="rif_persona_natural" placeholder="Ingrese El RIF" class="form-control">
			</div>
			<div class="form-group">
				<label f>Cedula</label>
				<input required name="ci_natural" type="text" id="ci_natural" value="<?php echo $personanatural->ci_natural; ?>" placeholder="Ingrese Su Cedula" class="form-control">
			</div>
            <div class="form-group">
				<label >Primer Nombre</label>
				<input required name="p_nombre_natural"  value="<?php echo $personanatural->p_nombre_natural; ?>"type="text" id="p_nombre_natural" placeholder="Ingrese su Primer Nombre" class="form-control">
			</div>
			<div class="form-group">
				<label >Segundo Nombre</label>
				<input  name="s_nombre_natural"  type="text" value="<?php echo $personanatural->s_nombre_natural; ?>" id="s_nombre_natural" placeholder="Ingrese Su Segundo Nombre" class="form-control">
			</div>
			<div class="form-group">
				<label >Primer Apellido</label>
				<input required name="p_apellido_natural" value="<?php echo $personanatural->p_apellido_natural; ?>" type="text" id="p_apellido_natural" placeholder="Ingrese Su Primer Apellido" class="form-control">
			</div>
			<div class="form-group">
				<label >Segundo Apellido</label>
				<input  name="s_apellido_natural"  value="<?php echo $personanatural->s_apellido_natural; ?>"type="text" id="s_apellido_natural" placeholder="Ingrese Su Segundo Apellido" class="form-control">
			</div>
			<div class="form-group">
				<label >direccion de habitacion </label>
				<input required name="direc_hab_natural" type="text" value="<?php echo $personanatural->direc_hab_natural; ?>" id="direc_hab_natural" placeholder="Ingrese Su Direccion De Habitacion" class="form-control">
			</div>
			<select class="form-control" id="genero" name="genero">
    <option value="">Seleccione Un Genero</option>
    <option value="Femenino" <?php if ($personanatural->genero == 'Femenino') echo 'selected' ?>>Femenino</option>
    <option value="Masculino" <?php if ($personanatural->genero == 'Masculino') echo 'selected' ?>>Masculino</option>
    <option value="Otro" <?php if ($personanatural->genero == 'Otro') echo 'selected' ?>>Otro</option>
</select>


			<div class="form-group">
				<label >puntos</label>
				<input required name="puntos_natural" type="integer" id="puntos_natural" placeholder="Ingrese Los Puntos" value="<?php echo $personanatural->puntos_natural; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label >Direccion De Envio</label>
				<input   name="direccion_envio" type="text" id="direccion_envio" value="<?php echo $personanatural->direccion_envio; ?>" placeholder="Ingrese La Direccion De Envio" class="form-control">
			</div>

			<select class="form-control" id="nacionalidad_natural" name="nacionalidad_natural">
    <option value="">Seleccione Una Nacionalidad</option>
    <option value="V" <?php if ($personanatural->nacionalidad_natural == 'V') echo 'selected' ?>>V</option>
    <option value="E" <?php if ($personanatural->nacionalidad_natural == 'E') echo 'selected' ?>>E</option>
</select>

			
			<div class="form-group">
				<label >Fecha De Nacimiento</label>
				<input required name="fecha_nacimiento_natural"  value="<?php echo $personanatural->fecha_nacimiento_natural; ?>"type="date" id="fecha_nacimiento_natural" placeholder="Ingrese La Fecha De Nacimiento" class="form-control">
			</div>

			<div class="form-group">
				<label >Persona Juridica</label>
				<input  name="fk_id_persona_juridica" value="<?php echo $personanatural->fk_id_persona_juridica; ?>" type="integer" id="fk_id_persona_juridica" placeholder="Ingrese La Persona Juridica" class="form-control">
			</div>
			<div class="form-group">
				<label >Proveedor</label>
				<input  name="fk_id_proveedor"  value="<?php echo $personanatural->fk_id_proveedor;?>"type="integer" id="fk_id_proveedor" placeholder="Ingrese El Proveedor" class="form-control">
			</div>
            <div class="form-group">
				<label >Lugar</label>
				<input  name="fk_id_lugar" type="integer" id="fk_id_lugar"  value="<?php echo $personanatural->fk_id_lugar; ?>"placeholder="Ingrese El Lugar" class="form-control">
			</div>
			<div class="form-group">
				<label >Lugar2</label>
				<input name="fk_id_lugar_2" value="<?php echo $personanatural->fk_id_lugar_2; ?>" type="integer" id="fk_id_lugar_2" placeholder="Edad de mascota" class="form-control">
			</div>
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarPersonaNatural.php" class="btn btn-info">volver</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
