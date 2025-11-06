<?php include 'init.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pura Numismática</title>

    <link rel="icon" type="image/x-icon" href="<?php echo $URL_BASE; ?>public/favicon.ico" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <!-- Incluimos el Navbar -->
    <?php include 'src/components/navbar.php'; ?>

    <!-- Validamos que ruta es la que está accediendo -->
    <?php

    // Se obtiene la ruta que se está accediendo
    $ruta = isset($_GET['ruta']) ? trim(filter_var($_GET['ruta'], FILTER_SANITIZE_URL), '/') : 'main';
    $segments = $ruta === '' ? [] : explode('/', $ruta);
    $base = count($segments) ? array_shift($segments) : 'main';
    $action = count($segments) ? array_shift($segments) : null;
    $routeKey = $action ? "{$base}/{$action}" : $base;

    // Obtenemos y limpiamos los parámetros desde query string
    $params = [];
    foreach ($_GET as $k => $v) {
        if ($k === 'ruta') continue; // omitimos el parámetro de ruta
        $key = trim(filter_var($k, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        if (is_array($v)) {
            $clean = [];
            foreach ($v as $item) {
                $clean[] = trim(filter_var($item, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            }
            $params[$key] = $clean;
        } else {
            $params[$key] = trim(filter_var($v, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        }
    }

    // Rutas permitidas
    $rutasPermitidas = [
        'main',
        'publicacion',
        'publicacion/agregar',
        'login/logout',
        'publicaciones',
        'login',
        'rifa',
    ];

    if (in_array($routeKey, $rutasPermitidas)) {
        include "src/pages/{$routeKey}/page.php";
    } else {
        include "src/pages/404.php";
    }

    ?>

    <!-- Incluimos el Footer -->
    <?php include 'src/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>