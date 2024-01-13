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
    <h1 class=" text-center">Persona Natural</h1>
    <form action="InsertarPersonaNatural.php" method="post">
    <div class="form-group">
        <label >RIF</label>
        <input type="text" class="form-control" id="rif_persona_natural" name="rif_persona_natural" placeholder="Ingrese RIF">
    </div>
    <div class="form-group">
        <label >Cedula</label>
        <input type="text" class="form-control" id="ci_natural" name="ci_natural" placeholder="Ingrese la cedula ">
    </div>

    <div class="form-group">
        <label > Primer Nombre</label>
        <input type="text" class="form-control" id="p_nombre_natural" name="p_nombre_natural" placeholder="Ingrese Su Primer Nombre">
    </div>

    <div class="form-group">
        <label >Segundo Nombre</label>
        <input type="text" class="form-control" id="s_nombre_natural" name="s_nombre_natural" placeholder="Ingrese Su Segundo Nombre">
    </div>

    <div class="form-group">
        <label >Primer Apellido</label>
        <input type="text" class="form-control" id="p_apellido_natural" name="p_apellido_natural" placeholder="Ingrese Su Primer Apellido">
    </div>

    <div class="form-group">
        <label >Segundo Apellido</label>
        <input type="text" class="form-control" id="s_apellido_natural" name="s_apellido_natural" placeholder="Ingrese Su Segundo Apellido">
    </div>

    <div class="form-group">
        <label >Direccion Habitacion</label>
        <input type="text" class="form-control" id="direc_hab_natura" name="direc_hab_natural" placeholder="Ingrese su direccion de habitacion">
    </div>

    <div class="form-group">
    <label >Genero</label>
    <select class="form-control" id="genero">
       <option>Seleccione Un Genero</option>
      <option id="genero">Femenino</option>
      <option id="genero">Masculino</option>
      <option id="genero">Otro</option>
    </select>
  </div>

  
  <div class="form-group">
        <label ">Puntos</label>
        <input type="text" class="form-control" id="puntos_natural" name="puntos_natural" placeholder="Ingrese los puntos">
    </div>

    
  <div class="form-group">
        <label >Direccion Envio</label>
        <input type="text" class="form-control" id="direccion_envio" name="direccion_envio" placeholder="Ingrese la direccion de envio ">
    </div>

    <div class="form-group">
    <label >Nacionalidad</label>
    <select class="form-control" id="nacionalidad_natural">
       <option >Seleccione La Nacionalidad</option>
      <option id="nacionalidad_natural">V</option>
      <option id="nacionalidad_natural">E</option>
      
    </select>
  </div>

     
  <div class="form-group">
        <label >Fecha Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento_natural" name="fecha_nacimiento_natural" placeholder="Ingrese su fecha de nacimiento">
    </div>

    <div class="form-group">
    <label >Persona Juridica</label>
    <select class="form-control" id="fk_id_persona_juridica">
       <option>Seleccione La persona Juridica</option>
       <?php 
       include_once "connection.php";
       $sentencia = $base_de_datos->query("SELECT  rif_persona_juridica FROM  persona_juridica");
       $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
       foreach ($resultado as $persona_juridica) {
        echo "<option value='{$persona_juridica->rif_persona_juridica}'>{$persona_juridica->rif_persona_juridica}</option>";
      }
       ?>
      
      
    </select>
  </div>

  <div class="form-group">
    <label >Proveedor</label>
    <select class="form-control" id="fk_id_persona_proveedor">
       <option >Seleccione el proveedor</option>
       <?php 
       include_once "connection.php";
       $sentencia = $base_de_datos->query("SELECT  nombre_proveedor FROM  proveedor");
       $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
       foreach ($resultado as $proveedor) {
        echo "<option value='{$proveedor->nombre_proveedor}'>{$proveedor->nombre_proveedor}</option>";
      }
       ?>
    </select>
  </div>
   
  <div class="form-group">
    <label >Lugar </label>
    <select class="form-control"  id="fk_id_persona_lugar">
       <option>Seleccione un lugar</option>
      <option  id="fk_id_persona_proveedor"></option>
      <option  id="fk_id_persona_proveedor"></option>
      
    </select>
  </div>

  <div class="form-group">
    <label >Lugar 2</label>
    <select class="form-control"  id="fk_id_persona_lugar2">
       <option>Seleccione un lugar</option>
      <option  id="fk_id_persona_lugar2"></option>
      <option  id="fk_id_persona_lugar2"></option>
      
    </select>
  </div>
   
 
  <button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarPersonaNatural.php" class="btn btn-info">Lista</a>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>