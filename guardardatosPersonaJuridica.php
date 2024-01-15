<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo guarda los datos del formulario
en donde se editan
================================
*/
?>

<?php

#Salir si alguno de los datos no está presente


#Si todo va bien, se ejecuta esta parte del código...

include_once "connection.php";
$id_persona_juridica = $_POST["id_persona_juridica"]; 
$rif_persona_juridica = $_POST["rif_persona_juridica"]; 
$denom_comercial_juridica = $_POST["denom_comercial_juridica"]; 
$razon_social_juridica =$_POST["razon_social_juridica"]; 
$pagina_web_juridica = $_POST["pagina_web_juridica"];
$capital_disponible_juridica =  $_POST["capital_disponible_juridica"];
$direc_fiscal_juridica=  $_POST["direc_fiscal_juridica"];
$direc_fisica_principal_juridica =  $_POST["direc_fisica_principal_juridica"];
$fk_id_lugar =  $_POST["fk_id_lugar"];
$fk_id_lugar_2 =  $_POST["fk_id_lugar_2"];


$sentencia = $base_de_datos->prepare(
    "UPDATE persona_juridica
    SET
        rif_persona_juridica = ?,
        denom_comercial_juridica = ?,
        razon_social_juridica = ?,
        pagina_web_juridica = ?,
        capital_disponible_juridica = ?,
        direc_fiscal_juridica = ?,
        direc_fisica_principal_juridica = ?,
        fk_id_lugar = ?,
        fk_id_lugar_2 = ?
    WHERE id_persona_juridica = ?;");
$resultado = $sentencia->execute([ $rif_persona_juridica , $denom_comercial_juridica,$razon_social_juridica,$pagina_web_juridica,
$capital_disponible_juridica, $direc_fiscal_juridica, $direc_fisica_principal_juridica,$fk_id_lugar,$fk_id_lugar_2, $id_persona_juridica]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: ListarPersonaJuridica.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}