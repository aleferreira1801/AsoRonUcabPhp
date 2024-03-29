<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente


#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$profesion  = $_POST["profesion"];
$titulo_puesto_empleado = $_POST["titulo_puesto_empleado"];
$inicio_turno= $_POST["inicio_turno"];
$fin_turno= $_POST["fin_turno"];
$fk_id_empleado   = $_POST["fk_id_empleado"];
$fk_id_persona_natural= $_POST["fk_id_persona_natural"];
$fk_id_punto_de_venta= $_POST["fk_id_punto_de_venta"];


/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
  "INSERT INTO empleado (
    profesion,
    titulo_puesto_empleado,
    fk_id_empleado,
    fk_id_persona_natural,
    fk_id_punto_de_venta,
     inicio_turno,
    fin_turno
  ) values (  ?, ?,?,?,?,?,?);");
$resultado = $sentencia->execute([$profesion,$titulo_puesto_empleado,$fk_id_empleado,$fk_id_persona_natural,$fk_id_punto_de_venta, $inicio_turno,$fin_turno]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: ListEmpleado.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}