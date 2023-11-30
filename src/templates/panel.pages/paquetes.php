<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/panel.component/head.php') ?>
</head>

<body>
    <?php include('./src/templates/panel.component/header.php') ?>
    <?php include('./src/templates/panel.component/sidebar.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.panel/paquetes.css">
    <main class="scroll-style">

        <div class="container">

            <section class="section-state">
                <div class="item">
                    <span>En bodegas de Estados Unidos</span>
                    <div class="icon"><i class="fas fa-box-open"></i></div>
                    <div class="arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <div class="item active">
                    <span>En tránsito a aeropuerto de USA</span>
                    <div class="icon"><i class="fas fa-bus"></i></div>
                    <div class="arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <div class="item">
                    <span>En Ruta a Ecuador</span>
                    <div class="icon"><i class="fas fa-plane"></i></div>
                    <div class="arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <div class="item">
                    <span>Llegando a Ecuador</span>
                    <div class="icon"><i class="fas fa-ship"></i></div>
                    <div class="arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <div class="item">
                    <span>En bodegas de Ecuador</span>
                    <div class="icon"><i class="fas fa-boxes"></i></div>
                    <div class="arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <div class="item">
                    <span>En ruta de entrega</span>
                    <div class="icon"><i class="fas fa-truck"></i></div>
                    <div class="arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </section>

            <section class="section-table">


                <table class="table-layout">
                    <thead>
                        <tr>
                            <th class="size-show-1">GUÍAS</th>
                            <th>DESCRIPCIÓN</th>
                            <th>TRACKING</th>
                            <th class="size-show-1">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="size-show-1">65456</td>
                            <td>Pack de pacman xdd</td>
                            <td>En tránsito a aeropuerto USA</td>
                            <td class="size-show-1">
                                <div class="btn-group">
                                    <button class="btn btn-primary">
                                        <div class="tooltip">Traking</div>
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="size-show-1">65456</td>
                            <td>Mi caja de cajas 😅</td>
                            <td>Llegando a Ecuador</td>
                            <td class="size-show-1">
                                <div class="btn-group">
                                    <button class="btn btn-primary">
                                        <div class="tooltip">Traking</div>
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
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