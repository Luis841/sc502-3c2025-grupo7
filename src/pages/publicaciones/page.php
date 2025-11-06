<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo $URL_BASE; ?>assets/css/stylesPublicaciones.css" />
</head>

<body>

    <div class="contenido">
        <div class="busqueda">
            <div class="barra">
                <input type="text" class="inputs" placeholder="Busca billetes, monedas y más...">
                <button class="btnBuscar">
                    <i class="fa-solid fa-search"></i> Buscar
                </button>
            </div>
        </div>

        <div class="filtros">
            <div class="grupo">
                <label class="labels">País</label>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Todos
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Todos</a></li>
                        <li><a class="dropdown-item" href="#">Costa Rica</a></li>
                        <li><a class="dropdown-item" href="#">México</a></li>
                        <li><a class="dropdown-item" href="#">Estados Unidos</a></li>
                        <li><a class="dropdown-item" href="#">España</a></li>
                    </ul>
                </div>
            </div>

            <div class="grupo">
                <label class="labels">Moneda</label>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Todas
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Todas</a></li>
                        <li><a class="dropdown-item" href="#">Colón Costarricense</a></li>
                        <li><a class="dropdown-item" href="#">Peso Mexicano</a></li>
                        <li><a class="dropdown-item" href="#">Dólar Estadounidense</a></li>
                        <li><a class="dropdown-item" href="#">Euro</a></li>
                    </ul>
                </div>
            </div>

            <div class="grupo">
                <label class="labels">Tipo de pieza</label>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Todos
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Todos</a></li>
                        <li><a class="dropdown-item" href="#">Moneda</a></li>
                        <li><a class="dropdown-item" href="#">Billete</a></li>
                        <li><a class="dropdown-item" href="#">Suministro</a></li>
                    </ul>
                </div>
            </div>

            <div class="grupo">
                <label class="labels">Certificada</label>
                <div class="opciones">
                    <input type="checkbox" id="certificada" class="checkbox">
                    <label for="certificada" class="checkbox-label">Solo certificadas</label>
                </div>
            </div>

            <div class="grupo">
                <label class="labels">Calidad</label>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Todas
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Todas</a></li>
                        <li><a class="dropdown-item" href="#">UNC - Sin circular</a></li>
                        <li><a class="dropdown-item" href="#">XD - Excelente buena conservación</a></li>
                        <li><a class="dropdown-item" href="#">AU - Casi sin circular</a></li>
                        <li><a class="dropdown-item" href="#">NU - Nuevo</a></li>
                    </ul>
                </div>
            </div>

            <div class="grupo">
                <label class="labels">Ordenar por:</label>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        -- Seleccionar --
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">País (A-Z)</a></li>
                        <li><a class="dropdown-item" href="#">País (Z-A)</a></li>
                        <li><a class="dropdown-item" href="#">Precio (Menor a mayor)</a></li>
                        <li><a class="dropdown-item" href="#">Precio (Mayor a menor)</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="card border-0 shadow-sm p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">Todas las publicaciones</h4>
                </div>

                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="50 Piastras Egipto">
                            <div class="card-body">
                                <h6 class="card-title">50 Piastras | Egipto | Billete de Reemplazo</h6>
                                <p class="fw-bold text-dark mb-1">₡1,000</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">Egipto</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Piastra Egipcio</span></p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="100 Dinares Yugoslavia">
                            <div class="card-body">
                                <h6 class="card-title">100 Dinares | Yugoslavia | Nicolas Tesla</h6>
                                <p class="fw-bold text-dark mb-1">₡1,000</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">Yugoslavia</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Dinar Yugoslavo</span></p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="10 Sen Indonesia">
                            <div class="card-body">
                                <h6 class="card-title">10 Sen | Indonesia | Reemplazo</h6>
                                <p class="fw-bold text-dark mb-1">₡1,000</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">Indonesia</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Sen Indonesio</span></p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="2000 Rials Irán">
                            <div class="card-body">
                                <h6 class="card-title">2000 Rials | Irán</h6>
                                <p class="fw-bold text-dark mb-1">₡1,500</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">Irán</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Rial Iraní</span></p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="200 Ouguiya Mauritania">
                            <div class="card-body">
                                <h6 class="card-title">200 Ouguiya | Mauritania</h6>
                                <p class="fw-bold text-dark mb-1">₡2,000</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">Mauritania</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Ouguiya Mauritano</span></p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="100 Colones Costa Rica">
                            <div class="card-body">
                                <h6 class="card-title">100 Colones | Costa Rica | Conmemorativa</h6>
                                <p class="fw-bold text-dark mb-1">₡800</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">Costa Rica</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Colón Costarricense</span>
                                </p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="10 Pesos México">
                            <div class="card-body">
                                <h6 class="card-title">10 Pesos | México | Bimetálica</h6>
                                <p class="fw-bold text-dark mb-1">₡700</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">México</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Peso Mexicano</span></p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm border-0" style="min-width: 260px;">
                            <img src="" class="card-img-top" alt="100 Yen Japón">
                            <div class="card-body">
                                <h6 class="card-title">100 Yen | Japón | Plata 1964</h6>
                                <p class="fw-bold text-dark mb-1">₡1,200</p>
                                <p class="small mb-1">Vendedor: <a href="#"
                                        class="text-primary text-decoration-none">Numismática El
                                        Manatí</a></p>
                                <p class="small mb-1">País: <span class="text-secondary">Japón</span></p>
                                <p class="small mb-2">Moneda: <span class="text-secondary">Yen Japonés</span></p>
                                <a href="#" class="btn btn-success w-100">
                                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-dark rounded-pill px-4 py-2">Cargar más</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>