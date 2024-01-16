<?php

#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$numero_tarjeta_debito = $_POST["numero_tarjeta_debito"];
$fecha_vence_tarjeta_debito = $_POST["fecha_vence_tarjeta_debito"];
$codigo_seguridad_tarjeta_debito = $_POST["codigo_seguridad_tarjeta_debito"];
$nombre_banco_tarjeta_debito = $_POST["nombre_banco_tarjeta_debito"];

$sentencia = $base_de_datos->prepare("INSERT INTO metodo_pago_tarjeta_debito(
  numero_tarjeta_debito,
  fecha_vence_tarjeta_debito,
  codigo_seguridad_tarjeta_debito,
  nombre_banco_tarjeta_debito
) values (?, ?, ?, ?);");
$resultado = $sentencia->execute([$numero_tarjeta_debito, $fecha_vence_tarjeta_debito, $codigo_seguridad_tarjeta_debito, $nombre_banco_tarjeta_debito]);

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
  # Redireccionar a la lista
  header("Location: Listartarjetadebito.php");
} else {
  echo "Algo salió mal. Por favor verifica que la tabla exista";
}
