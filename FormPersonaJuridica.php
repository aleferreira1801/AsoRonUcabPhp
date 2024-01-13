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
    <h1 class=" text-center">Persona Juridica</h1>
    <form action="InsertarPersonaNatural.php" method="post">
    <div class="form-group">
        <label >RIF</label>
        <input type="text" class="form-control" id="rif_persona_natural" name="rif_persona_natural" placeholder="Ingrese RIF">
    </div>
    <div class="form-group">
        <label >Denominacion Comercial</label>
        <input type="text" class="form-control" id="ci_natural" name="ci_natural" placeholder="Ingrese la cedula ">
    </div>

    <div class="form-group">
        <label > Razon Social</label>
        <input type="text" class="form-control" id="p_nombre_natural" name="p_nombre_natural" placeholder="Ingrese Su Primer Nombre">
    </div>

    <div class="form-group">
        <label >Pagina Web</label>
        <input type="text" class="form-control" id="s_nombre_natural" name="s_nombre_natural" placeholder="Ingrese Su Segundo Nombre">
    </div>

    <div class="form-group">
        <label >Capital Disponible Juridica</label>
        <input type="text" class="form-control" id="p_apellido_natural" name="p_apellido_natural" placeholder="Ingrese Su Primer Apellido">
    </div>

    <div class="form-group">
        <label >Direccion Fiscal Juridca</label>
        <input type="text" class="form-control" id="s_apellido_natural" name="s_apellido_natural" placeholder="Ingrese Su Segundo Apellido">
    </div>

    <div class="form-group">
        <label >Direccion  Fisica Principal Juridica</label>
        <input type="text" class="form-control" id="direc_hab_natura" name="direc_hab_natural" placeholder="Ingrese su direccion de habitacion">
    </div>

    <div class="form-group">
    <label >Lugar</label>
    <select class="form-control" id="genero">
       <option>Seleccione Un Genero</option>
      <option id="genero">Femenino</option>
      <option id="genero">Masculino</option>
      <option id="genero">Otro</option>
    </select>
  </div>

  
  <div class="form-group">
        <label ">Lugar 2</label>
        <input type="text" class="form-control" id="puntos_natural" name="puntos_natural" placeholder="Ingrese los puntos">
    </div>

    <button type="submit" class="btn btn-danger">Guardar</button>
			<a href="./ListarPersonaJuridca.php" class="btn btn-info">Lista</a>
 
  </div>
   
 

</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>