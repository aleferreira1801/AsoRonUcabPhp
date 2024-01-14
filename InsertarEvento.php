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
if (!isset($_POST["nombre_evento"]) 
|| !isset( $_POST["descripcion_evento"]) 
|| !isset( $_POST["numero_edicion_evento"] )
|| !isset( $_POST["fecha_inicio_evento"] ) 
|| !isset( $_POST["fecha_fin_evento"] ) 
|| !isset( $_POST["locacion_evento"] )   
|| !isset( $_POST["limite_ocupacion_evento"] )      
|| !isset( $_POST["fk_id_punto_de_venta"]    )  
|| !isset( $_POST["fk_id_lugar"]    )  )   {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$nombre_evento = $_POST["nombre_evento"];
$descripcion_evento = $_POST["descripcion_evento"];
$numero_edicion_evento = $_POST["numero_edicion_evento"];
$fecha_inicio_evento = $_POST["fecha_inicio_evento"];
$fecha_fin_evento = $_POST["fecha_fin_evento"];
$locacion_evento= $_POST["locacion_evento"];
$limite_ocupacion_evento = $_POST["limite_ocupacion_evento"];
$fk_id_punto_de_venta = $_POST["fk_id_punto_de_venta"];
$fk_id_lugar = $_POST["fk_id_lugar"];

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare("INSERT INTO evento(nombre_evento, descripcion_evento, numero_edicion_evento, fecha_inicio_evento, fecha_fin_evento, locacion_evento, limite_ocupacion_evento,fk_id_punto_de_venta,fk_id_lugar) values (?, ?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$nombre_evento,$descripcion_evento,$numero_edicion_evento,$fecha_inicio_evento,$fecha_fin_evento,$locacion_evento,$limite_ocupacion_evento,$fk_id_punto_de_venta,$fk_id_lugar]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: ListarEvento.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}