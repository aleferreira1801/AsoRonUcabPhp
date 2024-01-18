<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Home AsoRonucab</title>
    <!-- Incluir los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
            padding: 2rem;
            margin-bottom: 0;
        }
        .ron-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Asoronucab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Catálogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Encabezado (Jumbotron) -->
<div class="jumbotron">
    <h1 class="display-4">¡Bienvenido a nuestra tienda de AsoRonucab!</h1>
    <p class="lead">Descubre la mejor selección de rones premium.</p>
</div>

<!-- Contenido principal -->
<div class="container">
    <div class="row">
        <!-- Tarjeta de Ron 1 -->
        <div class="col-md-4 ron-card">
            <div class="card">
                <img src="https://elestimulo.com/wp-content/uploads/2022/10/DIPLOMATICO-1000x572.png" class="card-img-top" alt="Ron 1"   width="300px" height="300px">
                <div class="card-body">
                    <h5 class="card-title">Ron Diplomatico</h5>
                    <p class="card-text">  Ron Diplomático es un ron venezolano que se produce con caña de azúcar de alta calidad y agua pura. La destilería fue fundada en 1959 por Don Juancho Nieto Meléndez. 
Ron Diplomático Reserva Exclusiva es una mezcla de rones añejados hasta 12 años. Se destila en alambiques de cobre y se envejece en barricas de roble. 

</p>
                    <a href="#" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Ron 2 -->
        <div class="col-md-4 ron-card">
            <div class="card">
                <img src="https://www.roncarupano.com/wp-content/uploads/2023/08/ron-carupano-portada1.jpg" class="card-img-top" alt="Ron 2" width="300px" height="300px">
                <div class="card-body">
                    <h5 class="card-title">Ron Carupano</h5>
                    <p class="card-text">Tiene un color caoba con destellos cobrizos y anaranjado intenso, denso y brillante. Sus aromas incluyen frutos negros, nueces y almendras tostadas, frutas confitadas, uvas pasas y dátiles, plátano horneado, chocolate, sarrapia, caja de puros, recuerda una bodega de envejecimiento, notas salinas y yodadas.</p>
                    <a href="#" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Ron 3 -->
        <div class="col-md-4 ron-card">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdWx_zxK8qKsIbpyUTcQj4Naj-waUFYeOTxQ&usqp=CAU" class="card-img-top" alt="Ron 3" width="300px" height="300px">
                <div class="card-body">
                    <h5 class="card-title">Ron Santa Teresa</h5>
                    <p class="card-text">El ron Santa Teresa es un ron venezolano que se elabora con melazas de caña de azúcar. Se destila en alambiques y columnas y se cría en barricas de roble blanco americano y francés Limousin. Un ron envejecido hasta 5 años en barricas de roble. Suave y ligero, pero con carácter; firme y terso al paladar.</p>
                    <a href="#" class="btn btn-primary">Ver detalles</a>
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
