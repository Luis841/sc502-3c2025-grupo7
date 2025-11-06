<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Iniciar sesión</title>

    <link rel="stylesheet" href="<?php echo $URL_BASE; ?>assets/css/stylesLogin.css" />
</head>

<body>

    <div class="login-container">
        <div class="login-panel">
            <div>
                <h1 class="titulo">PURA</h1>
                <h2 class="titulo2">NUMISMÁTICA</h2>
                <p class="titulo3">Costa Rica</p>
            </div>


            <form id="form">
                <div>
                    <label class="labels" for="email">Correo Electrónico</label>
                    <input class="inputs" type="email" id="email" name="email" placeholder="Ingresa tu correo">
                </div>

                <div>
                    <label class="labels" for="password">Contraseña</label>
                    <input class="inputs" type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
                </div>

                <button type="submit" class="btnLogin">Iniciar Sesión</button>

                <div class="opciones">
                    <a href="#" class="contraseña">¿Olvidaste tu contraseña?</a>
                    <a href="#" class="registrar">¿Aún no te registras?</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>