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
            <label for="precio_unitario_detalle_venta">Precio Unitario:</label>
            <input required type="number" name="precio_unitario_detalle_venta" id="precio_unitario_detalle_venta" class="form-control" step="0.01">
        </div>
        <div class="form-group">
            <label for="cant_prod_total_detalle_venta">Cantidad Total:</label>
            <input required type="number" name="cant_prod_total_detalle_venta" id="cant_prod_total_detalle_venta" class="form-control">
        </div>
        <div class="form-group">
            <label for="fk_id_venta">Venta:</label>
            <input required type="integer" name="fk_id_venta" id="fk_id_venta" class="form-control">
        </div>
        <div class="form-group">
            <label for="fk_id_venta">Catalogo Inventario Ron:</label>
            <input required type="integer" name="fk_id_catalogo_invetario_ron" id="fk_id_catalogo_invetario_ron" class="form-control">
        </div>

        <div class="form-group">
            <label for="fk_id_venta">Punto De Venta:</label>
            <input required type="integer" name="fk_id_punto_de_venta" id="fk_id_punto_de_venta" class="form-control">
        </div>
        <div class="form-group">
            <label for="fk_id_venta">Entrada:</label>
            <input required type="integer" name="fk_id_entrada" id="fk_id_entrada" class="form-control">
        </div>

        <div class="form-group">
            <label for="fk_id_venta">Evento:</label>
            <input required type="integer" name="fk_id_evento" id="fk_id_evento" class="form-control">
        </div>

        
        <div class="form-group">
            <label for="fk_id_venta">Detalle Compra:</label>
            <input required type="integer" name="fk_id_detalle_compra" id="fk_id_detalle_compra" class="form-control">
        </div>

        <div class="form-group">
            <label for="fk_id_venta">Compra:</label>
            <input required type="integer" name="fk_id_compra" id="fk_id_compra" class="form-control">
        </div>
        <div class="form-group">
            <label for="fk_id_venta">Presentacion  Ron:</label>
            <input required type="integer" name="fk_id_presentacion_ron" id="fk_id_presentacion_ron" class="form-control">
        </div>
        <button type="submit" class="btn btn-danger">Guardar Detalle de Venta</button>
        <a href="./ListDetalleVenta.php" class="btn btn-info">Ver todos los detalles de venta</a>
    </form>
</div>
</body>
</html>
