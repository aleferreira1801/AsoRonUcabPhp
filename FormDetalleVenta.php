<?php
include_once "connection.php";

$query = 'SELECT id_presentacion_ron,nombre_presentacion_ron FROM presentacion_ron;';

$result = $base_de_datos->query($query);

// 5. Fetch the results
// Retrieve the results of the query using functions like `pg_fetch_assoc()` or `PDOStatement::fetch()`

$lugares = [];
while ($lugar = $result->fetch()) {
  $lugares[] = $lugar;
}

// 6. Generate HTML output
// Within the `ListarLugar.php` file, create an HTML structure to display the list of places
// Use a loop to iterate through the fetched results and display each place's information within appropriate HTML elements (e.g., `<ul>`, `<li>`).

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsoronUcab - Detalle Venta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Nuevo Detalle de Venta</h1>
    <form action="InsertarDetalleVenta.php" method="POST">
        <div class="form-group">
        <div class="form-group">
            <label for="cant_prod_total_detalle_venta">Cantidad Total:</label>
            <input required type="number" name="cant_prod_total_detalle_venta" id="cant_prod_total_detalle_venta" class="form-control">
        </div>

<div class="form-group">
            <label for="nombre_presentacion_ron">Presentacion  Ron:</label>

            <select class="form-control" name="nombre_presentacion_ron"  id="nombre_presentacion_ron" >
    <?php foreach ($lugares as $lugar) { ?>
      <option value="<?php echo $lugar['id_presentacion_ron']; ?>">
      <?php echo $lugar['nombre_presentacion_ron']; ?></option>
    <?php } ?>
  </select>
        </div>
        
        <button type="submit" class="btn btn-danger">Guardar Detalle de Venta</button>
        <a href="./ListDetalleVenta.php" class="btn btn-info">Ver todos los detalles de venta</a>
    </form>
</div>
</body>
</html>