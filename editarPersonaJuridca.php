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



$id = $_GET["id_persona_juridica"];
include_once "connection.php";
$sentencia = $base_de_datos->prepare("SELECT id_persona_juridica,rif_persona_juridica , denom_comercial_juridica, razon_social_juridica
,pagina_web_juridica, capital_disponible_juridica, direc_fiscal_juridica, direc_fisica_principal_juridica, fk_id_lugar, fk_id_lugar_2 FROM persona_juridica
WHERE id_persona_juridica= ?;");
$sentencia->execute([$id]);
$personaJuridica = $sentencia->fetchObject();


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
    <h1 class=" text-center">Persona Juridica</h1>
		<form action="guardardatosPersonaJuridica.php" method="POST">
        <input type="hidden" name="id_persona_juridica" type="integer" value="<?php echo $personaJuridica->id_persona_juridica; ?>">
			<div class="form-group">
				<label>RIF</label>
				<input required name="rif_persona_juridica" type="text" id="rif_persona_juridica" placeholder="Ingrese El RIF" class="form-control"  value="<?php echo $personaJuridica->rif_persona_juridica; ?>">
			</div>
			<div class="form-group">
				<label > Denominacion Comercial</label>
				<input required name="denom_comercial_juridica"  value="<?php echo $personaJuridica->denom_comercial_juridica; ?>" type="text" id="denom_comercial_juridica" placeholder="Ingrese La Denominacion Comercial" class="form-control">
			</div>
            <div class="form-group">
				<label >Razon Social</label>
				<input required name="razon_social_juridica"   value="<?php echo $personaJuridica->razon_social_juridica; ?>"type="text" id="razon_social_juridica" placeholder="Ingrese La Razon Social" class="form-control">
			</div>
			<div class="form-group">
				<label >Pagina Web</label>
				<input required name="pagina_web_juridica"   value="<?php echo $personaJuridica->pagina_web_juridica; ?>"type="text" id="pagina_web_juridica" placeholder="Ingrese La Pagina Web" class="form-control">
			</div>
			<div class="form-group">
				<label >capital Disponible</label>
				<input required name="capital_disponible_juridica"  value="<?php echo $personaJuridica->capital_disponible_juridica; ?>" type="integer" id="capital_disponible_juridica" placeholder="Ingrese la capital" class="form-control">
			</div>
			<div class="form-group">
				<label >Direccion Fiscal</label>
				<input required name="direc_fiscal_juridica" type="text"   value="<?php echo $personaJuridica->direc_fiscal_juridica; ?>"id="direc_fiscal_juridica" placeholder="Ingrese la direccion fiscal" class="form-control">
			</div>
            <div class="form-group">
				<label >Direccion Fisica </label>
				<input required name="direc_fisica_principal_juridica"   value="<?php echo $personaJuridica->direc_fiscal_juridica; ?>"type="text" id="direc_fisica_principal_juridica" placeholder="Ingrese La direccion fisica" class="form-control">
			</div>

            <div class="form-group">
				<label >Lugar</label>
				<input  name="fk_id_lugar" type="integer" id="fk_id_lugar" value="<?php echo $personaJuridica->fk_id_lugar; ?>" placeholder="Ingrese El Lugar" class="form-control">
			</div>
			<div class="form-group">
				<label >Lugar2</label>
				<input name="fk_id_lugar_2" type="integer" id="fk_id_lugar_2" value="<?php echo $personaJuridica->fk_id_lugar_2 ?>" placeholder="Ingrese el lugar2" class="form-control">
			</div>
			
			
           
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarPersonaJuridca.php" class="btn btn-info">Volver</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>