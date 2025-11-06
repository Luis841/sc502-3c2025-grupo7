<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (opcional para iconos) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Evita márgenes indeseados */
        body {
            margin: 0;
        }

        /* Footer fijo en la parte inferior */
        footer.sticky-footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 1030;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-4 mb-4 mb-md-0 text-center text-md-start">
                    <img src="https://www.puranumismatica.cr/_next/image?url=%2Fimages%2Flogo.png&w=828&q=75" alt="Logo Pura Numismática"
                        height="80" class="mb-2">
                    <p class="text-light small mb-0">&copy; Todos los derechos reservados.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <h6 class="fw-bold mb-3 text-white">Información</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-decoration-none text-light">Sobre nosotros</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Términos y condiciones</a></li>
                    </ul>
                </div>

                <div class="col-md-4 text-center text-md-end">
                    <h6 class="fw-bold mb-3 text-white">Contacto</h6>
                    <p class="small mb-1">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:info@puranumismatica.cr" class="text-decoration-none text-light">Email:
                            info@puranumismatica.cr</a>
                    </p>
                    <p class="small mb-3">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+50670920242" class="text-decoration-none text-light">Tel: +506 7092-0242</a>
                    </p>
                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                        <a href="#" class="text-success fs-5"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" class="text-primary fs-5"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-danger fs-5"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>