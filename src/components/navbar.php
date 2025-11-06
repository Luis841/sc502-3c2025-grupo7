<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $URL_BASE; ?>">
                <img src="https://www.puranumismatica.cr/_next/image?url=%2Fimages%2Flogo.png&w=640&q=75" width="350px" alt="Logo" class="me-2">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-semibold text-white" href="<?php echo $URL_BASE; ?>publicaciones/">Publicaciones</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold text-white" href="#">Rifas</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold text-white" href="#">Vendedores</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="nav-link fw-semibold text-white d-flex align-items-center" href="<?php echo $URL_BASE; ?>login/">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>