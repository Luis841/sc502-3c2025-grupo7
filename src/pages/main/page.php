<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container my-5">
        <div class="container my-5">
            <div class="card border-0 shadow-sm p-4">
                <div class="mb-3">
                    <h4 class="fw-bold mb-1">Billetes de Costa Rica y del mundo</h4>
                    <h5 class="fw-bold">Destacados</h5>
                </div>
                <div class="text-end mb-3">
                    <a href="#" class="text-primary text-decoration-none">Ver todo</a>
                </div>

                <div class="d-flex gap-3 overflow-auto pb-3">

                    <?php
                    for ($i = 0; $i < 6; $i++):
                        include 'components/itemPublicacion.php';
                    endfor; ?>
                    ?>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="card border-0 shadow-sm p-4">
                <div class="mb-3">
                    <h4 class="fw-bold mb-1">Monedas de Costa Rica y del mundo</h4>
                    <h5 class="fw-bold">Destacados</h5>
                </div>
                <div class="text-end mb-3">
                    <a href="#" class="text-primary text-decoration-none">Ver todo</a>
                </div>

                <div class="d-flex gap-3 overflow-auto pb-3">

                    <?php
                    for ($i = 0; $i < 6; $i++):
                        include 'components/itemPublicacion.php';
                    endfor; ?>
                    ?>

                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h3 class="card-title mb-3">Rifas</h3>
                    <p>Participa en nuestras rifas y gana increíbles premios</p>
                    <a href="#" class="btn btn-primary">Ver todas las Rifas</a>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="card shadow border-0 mb-5">
                <div class="card-body text-center">
                    <h3 class="card-title mb-3">Vendedores verificados</h3>
                    <p>Conoce a nuestros revendedores oficiales y compra con seguridad</p>
                    <a href="#" class="btn btn-primary">Ver todos los Vendedores</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>