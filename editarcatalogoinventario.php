<?php
$id = $_GET["id_catalogo_inventario_ron"];
include_once "connection.php";
$sentencia = $base_de_datos->prepare(
	"SELECT id_catalogo_inventario_ron , fk_id_punto_de_venta, fk_id_detalle_compra
,fk_id_compra, fk_id_presentacion_ron FROM catalogo_inventario_ron
WHERE id_catalogo_inventario_ron= ?;");
$sentencia->execute([$id]);
$empleado = $sentencia->fetchObject();
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
    <h1 class=" text-center">Categoria Inventario </h1>
		<form action="guardardatoscategoriainventario.php" method="POST">
		<input type="hidden" name="id_catalogo_inventario_ron" type="integer" value="<?php echo $empleado->id_catalogo_inventario_ron; ?>">
        <div class="form-group">
				<label>Punto de venta</label>
				<input  name="fk_id_punto_de_venta" type="integer" id="fk_id_punto_de_venta" value="<?php echo $empleado->fk_id_punto_de_venta  ; ?>" placeholder="Ingrese La Profesion" class="form-control">
			</div>
			<div class="form-group">
				<label>Detalle Compra</label>
				<input  name="fk_id_detalle_compra" type="integer" id="fk_id_detalle_compra"  value="<?php echo $empleado->fk_id_detalle_compra ; ?>" placeholder="Ingrese El Puesto" class="form-control">
			</div>
			<div class="form-group">
				<label >Compra</label>
				<input  name="fk_id_compra" type="integer" value="<?php echo $empleado->fk_id_compra; ?>" id="fk_id_compra" placeholder="Ingrese el jefe" class="form-control">
			</div>
            <div class="form-group">
				<label >Presentacion Ron</label>
				<input required name="fk_id_presentacion_ron"  value="<?php echo $empleado->fk_id_presentacion_ron; ?>"type="integer" id="fk_id_presentacion_ron" placeholder="Ingresa la persona natural" class="form-control">
			</div>
			
           
			<button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListCategoriaInventarioron.php" class="btn btn-info">volver</a>
		</form>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>