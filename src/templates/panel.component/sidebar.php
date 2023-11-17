<div class="sidebar">
    <div class="container">

        <div class="img logo">
            <img src="<?= $DATA['http_domain'] ?>public/img/logo2.png" alt="Logo de Vaya Llevando">
        </div>

        <div class="img photo">
            <img src="<?= $DATA['http_domain'] ?>public/img.user/<?= $_SESSION['user_photo'] ?>" alt="Foto del usuario">
            <label><?= $_SESSION['user_name'] . " " . $_SESSION['user_lastname'] ?></label>
        </div>

        <div class="options options-nav">

            <?php if ($_SESSION['user_type'] == 1 or $_SESSION['user_type'] == 2) { ?>
                <a href="<?= $DATA['http_domain'] ?>panel/personal" class="option">
                    <i class="fas fa-user"></i>
                    <label>Personal</label>
                </a>
            <?php } ?>

            <a href="<?= $DATA['http_domain'] ?>panel/paquetes" class="option active">
                <i class="fas fa-box-open"></i>
                <label>Paquetes</label>
            </a>

            <a href="<?= $DATA['http_domain'] ?>panel/entregas" class="option">
                <i class="fa-regular fa-handshake"></i>
                <label>Gerstionar entregas</label>
            </a>

            <a href="<?= $DATA['http_domain'] ?>panel/tracking" class="option">
                <i class="fas fa-map-marked-alt"></i>
                <label>Tracking</label>
            </a>

            <a href="<?= $DATA['http_domain'] ?>panel/historial" class="option">
                <i class="fas fa-history"></i>
                <label>Historial</label>
            </a>

            <a href="<?= $DATA['http_domain'] ?>panel/faq" class="option">
                <i class="fas fa-question-circle"></i>
                <label>¿Cómo funciona?</label>
            </a>

        </div>

        <div class="options options-btn">
            <?php
            foreach ($DATA['locker'] as $locker) {
                if ($locker['locker_popup']) {
            ?>
                    <button class="option"><?= $locker['locker_name'] ?></button>
            <?php }
            } ?>
            <label class="mark">Llega a</label>
            <?php
            foreach ($DATA['locker'] as $locker) {
                if (!$locker['locker_popup']) {
            ?>
                    <label class="option"><?= $locker['locker_name'] ?></label>
            <?php }
            } ?>
        </div>

    </div>
</div>