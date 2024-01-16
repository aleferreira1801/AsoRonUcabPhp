<?php
#Salir si alguno de los datos no está presente



#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";

$fk_id_usuario = $_POST["fk_id_usuario"];
$fk_id_metodo_pago_efectivo = isset($_POST["fk_id_metodo_pago_efectivo"]);
$fk_id_metodo_pago_tarjeta_debito = isset($_POST["fk_id_metodo_pago_tarjeta_debito"]);
$fk_id_metodo_pago_cheque = isset($_POST["fk_id_metodo_pago_cheque"]);
$fk_id_metodo_pago_tarjeta_credito = isset($_POST["fk_id_metodo_pago_tarjeta_credito"]);

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
"INSERT INTO metodo_pago_usuario (fk_id_usuario,
fk_id_metodo_pago_efectivo,
fk_id_metodo_pago_tarjeta_debito,
fk_id_metodo_pago_cheque,
fk_id_metodo_pago_tarjeta_credito
) values (
?,
?,
?,
?,
?
);");
$resultado = $sentencia->execute([$fk_id_usuario, $fk_id_metodo_pago_efectivo, $fk_id_metodo_pago_tarjeta_debito, $fk_id_metodo_pago_cheque, $fk_id_metodo_pago_tarjeta_credito]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
header("Location: listarpagousuario.php");
} else {
echo "Algo salió mal. Por favor verifica que la tabla exista";
}
