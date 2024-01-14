<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsoronUcab </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<form>
<div class="container">
    <h1 class=" text-center">Evento</h1>
    <form action="InsertarPersonaNatural.php" method="POST">
    <div class="form-group">
        <label >Nombre</label>
        <input type="text" class="form-control" id="nombre_evento" name="nombre_evento" placeholder="Ingrese el nombre del evento">
    </div>
    
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" id="descripcion_evento" name= "descripcion_evento" rows="3"></textarea>
  </div>

    <div class="form-group">
        <label > Numero Edicion Evento</label>
        <input type="text" class="form-control" id="numero_edicion_evento" name="numero_edicion_evento" placeholder="Ingrese el numero de edicion del evento">
    </div>

    <div class="form-group">
        <label >Fecha Inicio</label>
        <input type="date" type="time" type class="form-control" id="fecha_inicio_evento" name="fecha_inicio_evento" placeholder="Ingrese la fecha inicio del evento">
    </div>

    <div class="form-group">
        <label >Fecha Fin </label>
        <input type="date "  class="form-control" id="fecha_fin_evento" name="fecha_fin_evento" placeholder="Ingrese la fecha fin del evento">
    </div>

    <div class="form-group">
        <label >Locacion</label>
        <input type="text" class="form-control" id="s_apellido_natural" name="s_apellido_natural" placeholder="Ingrese Su Segundo Apellido">
    </div>

    <div class="form-group">
        <label >Limite Ocupacion</label>
        <input type="integer" class="form-control" id="locacion_evento" name="locacion_evento" placeholder="Ingrese la locacion del evento">
    </div>

    <div class="form-group">
    <label >Punto De Venta</label>
        <input type="integer" class="form-control" id="fk_id_punto_de_venta" name="fk_id_punto_de_venta" placeholder="Ingrese el punto de venta">

  </div>

  
  <div class="form-group">
        <label ">Lugar </label>
        <input type="integer" class="form-control" id="fk_id_lugar" name="fk_id_lugar" placeholder="Ingrese el lugar">
    </div>

    <button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarEvento.php" class="btn btn-info">Lista</a>
 
  </div>
   
 

</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>