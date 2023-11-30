<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/panel.component/head.php') ?>
</head>

<body>
    <?php include('./src/templates/panel.component/header.php') ?>
    <?php include('./src/templates/panel.component/sidebar.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.panel/historial.css">
    <main class="scroll-style">

        <div class="container">



            <section class="section-table">

                <div class="group-title">
                    <h3>Hitorial ⌛</h3>
                </div>

                <table class="table-layout">
                    <thead>
                        <tr>
                            <th class="size-show-1">FECHA</th>
                            <th>ENCARGADO</th>
                            <th>CÓDIGO TRACKING</th>
                            <th class="size-show-1">ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="size-show-1">65456</td>
                            <td>Pack de pacman xdd</td>
                            <td>En tránsito a aeropuerto USA</td>
                            <td class="size-show-1">ENTREGADO</td>
                        </tr>
                        <tr>
                            <td class="size-show-1">65456</td>
                            <td>Mi caja de cajas 😅</td>
                            <td>Llegando a Ecuador</td>
                            <td class="size-show-1">ENTREGADO</td>
                        </tr>
                    </tbody>
                </table>

            </section>

        </div>

    </main>
</body>
<foot>
    <?php include('./src/templates/panel.component/foot.php') ?>
</foot>

</html>