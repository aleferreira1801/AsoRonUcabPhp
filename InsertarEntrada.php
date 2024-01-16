
<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...

include_once("connection.php");

$nombre_entrada = $_POST["nombre_entrada"];
$descripcion_entrada = $_POST["descripcion_entrada"];
$precio_entrada = $_POST["precio_entrada"];
$codigo_entrada = $_POST["codigo_entrada"];
$fk_id_evento = $_POST["fk_id_evento"];
$cantidad_entrada = $_POST["cantidad_entrada"];





/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(
    "INSERT into entrada (
        nombre_entrada,
        descripcion_entrada,
        precio_entrada,
        codigo_entrada,
        fk_id_evento,
        cantidad_entrada
    ) values (?, ?, ?, ?, ?, ?);");

$resultadoCompra = $sentencia->execute(
    [
        $nombre_entrada,
        $descripcion_entrada,
        $precio_entrada,
        $codigo_entrada,
        $fk_id_evento,
        $cantidad_entrada,
    ]
);

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultadoCompra === true) {
    header("Location: ListarEntrada.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


