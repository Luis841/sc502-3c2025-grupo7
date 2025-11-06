<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>404 — Página no encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
        }

        .error-illustration {
            max-width: 320px;
            opacity: 0.95;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <main class="flex-grow-1 d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-12 text-center text-lg-start">
                    <h1 class="display-3 fw-bold text-danger">404</h1>
                    <h2 class="h4 fw-semibold mb-3">Página no encontrada</h2>
                    <p class="lead text-muted mb-4">
                        Lo sentimos, la página que buscas no existe o ha sido movida. Puedes volver al inicio o probar una búsqueda.
                    </p>

                    <div class="d-flex flex-column flex-sm-row gap-2">
                        <a href="<?php echo $URL_BASE?>" class="btn btn-primary btn-lg">
                            <i class="fa-solid fa-house-chimney me-2"></i> Volver al inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>