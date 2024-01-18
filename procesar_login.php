<?php
#Salir si alguno de los datos no está presente

 

#Si todo va bien, se ejecuta esta parte del código...
include_once("connection.php");



// Recibir datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena_usuario = $_POST['contrasena_usuario'];

// Llamar al procedimiento almacenado
$sql = "SELECT verificar_credenciales(:nombre_usuario, :contrasena_usuario) AS resultado";
$stmt = $base_de_datos->prepare($sql);
$stmt->bindParam(':nombre_usuario', $nombre_usuario);
$stmt->bindParam(':contrasena_usuario', $contrasena_usuario);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificar el resultado del procedimiento almacenado
if ($resultado['resultado'] > 0) {
    // Iniciar sesión o redirigir según tus necesidades
    session_start();
    $_SESSION['id_usuario'] = $resultado['resultado'];
    header("Location: pagina_principal.php");
} else {
    // Credenciales incorrectas, redirigir o mostrar mensaje de error
    header("Location: FormLogin.php?error=1");
}
