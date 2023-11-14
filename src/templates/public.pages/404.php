<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/404.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <div class="container">
            <h2>404</h2>
            <p>Pagina no encontrada</p>
            <a href="<?= $DATA['http_domain'] ?>">
                <i class="fas fa-globe-americas"></i>
                <span>Ir al Inicio</span>
            </a>
        </div>

    </main>

    <!-- <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer> -->
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>