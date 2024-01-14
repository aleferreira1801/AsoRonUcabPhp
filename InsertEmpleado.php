
<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...

include_once("connection.php");
$rif_persona_juridica = $_POST["rif_persona_juridica"]; 
$denom_comercial_juridica = $_POST["denom_comercial_juridica"]; 
$razon_social_juridica =$_POST["razon_social_juridica"]; 
$pagina_web_juridica = $_POST["pagina_web_juridica"];
$capital_disponible_juridica =  $_POST["capital_disponible_juridica"];
$direc_fiscal_juridica=  $_POST["direc_fiscal_juridica"];
$direc_fisica_principal_juridica =  $_POST["direc_fisica_principal_juridica"];
$fk_id_lugar =  $_POST["fk_id_lugar"];
$fk_id_lugar_2 = $_POST["fk_id_lugar_2"];




/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare(" INSERT INTO persona_juridica (
    rif_persona_juridica,
    denom_comercial_juridica,
    razon_social_juridica,
    pagina_web_juridica,
    capital_disponible_juridica,
    direc_fiscal_juridica,
    direc_fisica_principal_juridica,
    fk_id_lugar,
    fk_id_lugar_2
  )
  VALUES (?, ?,?,?,?,?,?,?,?);");

$resultadoPersonaJuridica = $sentencia->execute(
    [
      $rif_persona_juridica,
      $denom_comercial_juridica,
      $razon_social_juridica,
      $pagina_web_juridica,
      $capital_disponible_juridica,
      $direc_fiscal_juridica,
      $direc_fisica_principal_juridica,
      $fk_id_lugar,
      $fk_id_lugar_2
      
    ]
  );
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar


if ($resultadoPersonaJuridica === true) {
   
	header("Location: ListarPersonaJuridica.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}