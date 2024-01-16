<?php
#Salir si alguno de los datos no está presente



#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";

$numero_cheque = $_POST["numero_cheque"];
$banco_cheque = $_POST["banco_cheque"];
$fecha_pago_cheque = $_POST["fecha_pago_cheque"];
$autoriza_cheque = $_POST["autoriza_cheque"];
$pagase_orden = $_POST["pagase_orden"];
$suma = $_POST["suma"];
$nro_cuenta = $_POST["nro_cuenta"];


/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
"INSERT INTO metodo_pago_cheque (
numero_cheque,
banco_cheque,
fecha_pago_cheque,
autoriza_cheque,
pagase_orden,
suma,
nro_cuenta
) values (
?,
?,
?,
?,
?,
?,
?
);");
$resultado = $sentencia->execute([$numero_cheque, $banco_cheque, $fecha_pago_cheque, $autoriza_cheque, $pagase_orden, $suma, $nro_cuenta]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
header("Location:Listarmetodopagocheque.php");
} else {
echo "Algo salió mal. Por favor verifica que la tabla exista";
}
