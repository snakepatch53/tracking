<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/panel.component/head.php') ?>
</head>

<body>
    <?php include('./src/templates/panel.component/header.php') ?>
    <?php include('./src/templates/panel.component/sidebar.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.panel/entregas.css">
    <main class="scroll-style">

        <div class="container">



            <section class="section-table">

                <div class="group-title">
                    <h3>Gestionar Entregas 🎁</h3>
                    <button>
                        <span>Nueva Entrega</span>
                        <i class="fas fa-plus"></i>
                    </button>
                </div>

                <table class="table-layout">
                    <thead>
                        <tr>
                            <th class="size-show-1">GUÍAS</th>
                            <th>ENCARGADO</th>
                            <th>CÓDIGO TRACKING</th>
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
                                        <div class="tooltip">Editar</div>
                                        <i class="fas fa-edit"></i>
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
                                        <div class="tooltip">Editar</div>
                                        <i class="fas fa-edit"></i>
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