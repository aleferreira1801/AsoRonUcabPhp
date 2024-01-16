<?php
#Salir si alguno de los datos no está presente


#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";

$fk_id_pedido = $_POST["fk_id_pedido"];
$fk_id_metodo_paga_usuario = $_POST["fk_id_metodo_paga_usuario"];
$monto = $_POST["monto"];
$fk_id_tasa = $_POST["fk_id_tasa"];

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
"INSERT INTO metodo_pago_pedido (
fk_id_pedido,
fk_id_metodo_paga_usuario,
monto,
fk_id_tasa
) values (
?,
?,
?,
?
);");
$resultado = $sentencia->execute([$fk_id_pedido, $fk_id_metodo_paga_usuario, $monto, $fk_id_tasa]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
header("Location: Listapagopedido.php");
} else {
echo "Algo salió mal. Por favor verifica que la tabla exista";
}
