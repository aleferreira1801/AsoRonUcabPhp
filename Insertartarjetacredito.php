<?php
#Salir si alguno de los datos no está presente



#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";

$numero_tarjeta_credito = $_POST["numero_tarjeta_credito"];
$fecha_vence_tarjeta_credito = $_POST["fecha_vence_tarjeta_credito"];
$codigo_seguridad_tarjeta_credito = $_POST["codigo_seguridad_tarjeta_credito"];
$tipo_tarjeta_credito = $_POST["tipo_tarjeta_credito"];


/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
"INSERT INTO metodo_pago_tarjeta_credito (
numero_tarjeta_credito,
fecha_vence_tarjeta_credito,
codigo_seguridad_tarjeta_credito,
tipo_tarjeta_credito
) values (
?,
?,
?,
?
);");
$resultado = $sentencia->execute([$numero_tarjeta_credito, $fecha_vence_tarjeta_credito, $codigo_seguridad_tarjeta_credito, $tipo_tarjeta_credito]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
header("Location: Listartarjetadecredito.php");
} else {
echo "Algo salió mal. Por favor verifica que la tabla exista";
}
