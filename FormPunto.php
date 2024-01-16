<!DOCTYPE html>
<html lang="en">
<body>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AsoronUcab - Formulario de Punto</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <h1 class="text-center">Formulario de Punto</h1>
  <form action="InsertarPunto.php" method="POST">
    <div class="form-group">
      <label>Precio del punto</label>
      <input required name="precio_punto" type="number" id="precio_punto" step="0.01" placeholder="Ingrese el precio del punto" class="form-control">
    </div>
    <div class="form-group">
      <label>Fecha de inicio de la tasa del punto</label>
      <input required name="fecha_inicio_tasa_punto" type="date" id="fecha_inicio_tasa_punto" class="form-control">
    </div>
    <div class="form-group">
      <label>Fecha de fin de la tasa del punto</label>
      <input required name="fecha_fin_tasa_punto" type="date" id="fecha_fin_tasa_punto" class="form-control">
    </div>
    <div class="form-group">
      <label>Punto de venta de tienda física</label>
      <input required name="fk_id_punto_de_venta_tienda_fisica" type="integer" id="fk_id_punto_de_venta_tienda_fisica" placeholder="Ingrese el ID del punto de venta de tienda física" class="form-control">
    </div>
    <div class="form-group">
      <label>Punto de venta</label>
      <input required name="fk_id_punto_de_venta" type="integer" id="fk_id_punto_de_venta" placeholder="Ingrese el ID del punto de venta" class="form-control">
    </div>
    <button type="submit" class="btn btn-danger">Guardar</button>
    <a href="./ListarPunto.php" class="btn btn-info">Ver todos</a>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
