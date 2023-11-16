<!DOCTYPE html>
<html lang="<?= $_ENV['HTML_LANG'] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/animate.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.general/config.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.general/theme1.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.panel/login.css">
    <link rel="icon" href="<?= $DATA['http_domain'] ?>public/img/icon.png">
    <title><?= $DATA['title'] ?> ⚙️ Login</title>
    <script>
        const http_domain = '<?= $DATA['http_domain'] ?>';
    </script>
</head>

<body class="loading">
    <main>
        <form id="element-loginform">
            <h1>Bienvenido a</h1>
            <div class="logo">
                <img src="<?= $DATA['http_domain'] ?>public/img/logo.png" alt="Logo de VoyLlevando">
            </div>
            <div class="input">
                <label for="user">DNI / Email</label>
                <input type="text" name="user_user" id="user" placeholder="Ingrese su Usuario">
            </div>
            <div class="input">
                <label for="password">Contraseña</label>
                <input type="password" name="user_pass" id="password" placeholder="Ingrese su Contraseña">
            </div>
            <div class="input input-btn">
                <button type="submit">INICIAR SESION</button>
            </div>
            <div class="input input-line">
                <div class="line"></div>
                <span>O</span>
                <div class="line"></div>
            </div>
            <div class="input input-or">
                <span>¿Eres Nuevo?</span>
                <a href="<?= $DATA['http_domain'] ?>panel/register">REGISTRATE GRATIS</a>
            </div>
        </form>
    </main>
</body>
<foot>
    <script src="<?= $DATA['http_domain'] ?>public/js.general/fetch.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.panel/login.js"></script>
</foot>

</html>