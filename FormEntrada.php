<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsoronUcab - Entrada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Nueva Entrada</h1>
    <form action="InsertarEntrada.php" method="POST">
        <div class="form-group">
            <label for="nombre_entrada">Nombre de la entrada:</label>
            <input required type="text" name="nombre_entrada" id="nombre_entrada" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion_entrada">Descripción:</label>
            <textarea required name="descripcion_entrada" id="descripcion_entrada" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="precio_entrada">Precio:</label>
            <input required type="number" name="precio_entrada" id="precio_entrada" class="form-control" step="0.01">
        </div>
        <div class="form-group">
            <label for="codigo_entrada">Código:</label>
            <input required type="text" name="codigo_entrada" id="codigo_entrada" class="form-control">
        </div>
        <div class="form-group">
            <label for="fk_id_evento">Evento:</label>
            <input  type="integer" name="fk_id_evento" id="fk_id_evento" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="cantidad_entrada">Cantidad:</label>
            <input required type="number" name="cantidad_entrada" id="cantidad_entrada" class="form-control">
        </div>
        <button type="submit" class="btn btn-danger">Guardar Entrada</button>
        <a href="./ListarEntradas.php" class="btn btn-info">Ver todas las entradas</a>
    </form>
</div>
</body>
</html>

