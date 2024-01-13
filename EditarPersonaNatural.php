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

if (!isset($_GET["id_persona_natural"])) {
    exit();
}

$id = $_GET["id_persona_natural"];
include_once "connection.php";
$sentencia = $base_de_datos->prepare("SELECT rif_persona_natural , ci_natural, p_nombre_natural,s_nombre_natural
, p_apellido_natural,s_apellido_natural, direc_hab_natural,genero,puntos_natural, direccion_envio,nacionalidad_natural, fecha_nacimiento_natural, FROM persona_natural  WHERE persona_natural = ?;");
$sentencia->execute([$id]);
$personanatural = $sentencia->fetchObject();
if (!$personanatural) {
    #No existe
    echo "¡No existe alguna mascota con ese ID!";
    exit();
}

#Si la mascota existe, se ejecuta esta parte del código
?>

<form>
<div class="container">
    <h1 class=" text-center">Persona Natural</h1>
    <form action="InsertarPersonaNatural.php" method="post">
    <div class="form-group">
        <label >RIF</label>
        <input  value="<?php echo $personanatural->rif_persona_natural; ?> "type="text" class="form-control" id="rif_persona_natural" name="rif_persona_natural" placeholder="Ingrese RIF">
    </div>
    <div class="form-group">
        <label >Cedula</label>
        <input value="<?php echo $personanatural->ci_natural; ?>"type="text" class="form-control" id="ci_natural" name="ci_natural" placeholder="Ingrese la cedula ">
    </div>

    <div class="form-group">
        <label > Primer Nombre</label>
        <input  value="<?php echo $personanatural->p_nombre_natural; ?>" type="text" class="form-control" id="p_nombre_natural" name="p_nombre_natural" placeholder="Ingrese Su Primer Nombre">
    </div>

    <div class="form-group">
        <label >Segundo Nombre</label>
        <input value="<?php echo $personanatural->s_nombre_natural; ?>" type="text" class="form-control" id="s_nombre_natural" name="s_nombre_natural" placeholder="Ingrese Su Segundo Nombre">
    </div>

    <div class="form-group">
        <label >Primer Apellido</label>
        <input value="<?php echo $mascota->p_apellido_natural; ?>" type="text" class="form-control" id="p_apellido_natural" name="p_apellido_natural" placeholder="Ingrese Su Primer Apellido">
    </div>

    <div class="form-group">
        <label >Segundo Apellido</label>
        <input value="<?php echo $personanatural->s_apellido_natural; ?>" type="text" class="form-control" id="s_apellido_natural" name="s_apellido_natural" placeholder="Ingrese Su Segundo Apellido">
    </div>

    <div class="form-group">
        <label >Direccion Habitacion</label>
        <input  value="<?php echo $personanatural->direc_hab_natura; ?>"type="text" class="form-control" id="direc_hab_natura" name="direc_hab_natural" placeholder="Ingrese su direccion de habitacion">
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
        <input value="<?php echo $personanatural->puntos_natural; ?>type="text" class="form-control" id="puntos_natural" name="puntos_natural" placeholder="Ingrese los puntos">
    </div>

    
  <div class="form-group">
        <label >Direccion Envio</label>
        <input value="<?php echo $mascota->direccion_envio; ?>" type="text" class="form-control" id="direccion_envio" name="direccion_envio" placeholder="Ingrese la direccion de envio ">
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
        <input  value="<?php echo $mascota->fecha_nacimiento_natural; ?>" type="date" class="form-control" id="fecha_nacimiento_natural" name="fecha_nacimiento_natural" placeholder="Ingrese su fecha de nacimiento">
    </div>

    <div class="form-group">
    <label >Persona Juridica</label>
    <select class="form-control" id="fk_id_persona_juridica">
       <option>Seleccione La persona Juridica</option>
      <option id="fk_id_persona_juridica"></option>
      <option id="fk_id_persona_juridica"></option>
      
    </select>
  </div>

  <div class="form-group">
    <label >Proveedor</label>
    <select class="form-control" id="fk_id_persona_proveedor">
       <option >Seleccione el proveedor</option>
      <option  id="fk_id_persona_proveedor">V</option>
      <option  id="fk_id_persona_proveedor">E</option>
      
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
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./ListarPersonaNatural.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>