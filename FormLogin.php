<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Incluir los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Iniciar Sesión</h2>
                </div>
                <div class="card-body">
                    <?php
                    // Mostrar mensaje de error si existe
                    if (isset($_GET['error']) && $_GET['error'] == 1) {
                        echo '<div class="alert alert-danger" role="alert">
                                Credenciales incorrectas. Inténtalo de nuevo.
                              </div>';
                    }
                    ?>

                    <form action="procesar_login.php" method="post">
                        <div class="form-group">
                            <label for="nombre_usuario">Nombre de Usuario:</label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="contrasena_usuario">Contraseña:</label>
                            <input type="password" class="form-control" id="contrasena_usuario" name="contrasena_usuario" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Incluir los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

