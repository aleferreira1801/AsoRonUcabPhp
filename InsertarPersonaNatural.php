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

if (!isset($_POST["rif_persona_natural"]) || !isset($_POST["ci_natural"]) || !isset($_POST["p_nombre_natural"]) 
|| ($_POST["s_nombre_natural"]) || !isset($_POST[" p_apellido_natural"]) || !isset($_POST[" s_apellido_natural"]) || !isset($_POST[" direc_hab_natural"]) || !isset($_POST[" genero"]) || !isset($_POST[" puntos_natural"]) 
|| ($_POST[" direccion_envio"]) || !isset($_POST[" nacionalidad_natural"]) || !isset($_POST[" fecha_nacimiento_natural"]) || !isset($_POST[" fk_id_persona_juridica"]) || !isset($_POST[" fk_id_proveedor"]) || !isset($_POST[" fk_id_lugar"])||!isset($_POST[" fk_id_lugar2"]) ){
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";

$rif_persona_natural = $_POST["rif_persona_natural"];
$ci_natural = $_POST["ci_natural"];
$p_nombre_natural= $_POST["p_nombre_natural"];
$s_nombre_natural= $_POST["s_nombre_natural"];
$p_apellido_natural= $_POST["p_apellido_natural"];
$s_apellido_natural= $_POST["s_apellido_natural"];
$direc_hab_natural= $_POST["direc_hab_natural"];
$genero= $_POST["genero"];
$puntos_natural= $_POST["puntos_natural"];
$direccion_envio= $_POST["direccion_envio"];
$nacionalidad_natural= $_POST["nacionalidad_natural"];
$fecha_nacimiento_natural= $_POST["fecha_nacimiento_natural"];
$fk_id_persona_juridica= $_POST["fk_id_persona_juridica"];
$fk_id_proveedor= $_POST["fk_id_proveedor"];
$fk_id_lugar= $_POST["fk_id_lugar"];
$fk_id_lugar2= $_POST["fk_id_lugar2"];


/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare("INSERT INTO persona_natural (rif_persona_natural, ci_natural, p_nombre_natural, s_nombre_natural, p_apellido_natural, s_apellido_natural, direc_hab_natural, genero, puntos_natural, direccion_envio, nacionalidad_natural, fecha_nacimiento_natural, fk_id_persona_juridica, fk_id_proveedor, fk_id_lugar, fk_id_lugar_2) VALUES (?, ?,?,?,?, ?,?,?,?, ?,?,?,);");
$resultado = $sentencia->execute([$rif_persona_natural, $ci_natural,$p_nombre_natural,$s_nombre_natural,$p_apellido_natural,$s_apellido_natural,$direc_hab_natural,$genero,$puntos_natural,$direccion_envio,$nacionalidad_natural,$fecha_nacimiento_natural,$fk_id_persona_juridica,$fk_id_proveedor,$fk_id_lugar2]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: Listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}