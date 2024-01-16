<?php

#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$denominacion_efectivo = $_POST["denominacion_efectivo"];

$sentencia = $base_de_datos->prepare("INSERT INTO metodo_pago_efectivo(denominacion_efectivo) values (?);");
$resultado = $sentencia->execute([$denominacion_efectivo]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
  # Redireccionar a la lista
  header("Location: Listefectivo.php");
} else {
  echo "Algo salió mal. Por favor verifica que la tabla exista";
}

