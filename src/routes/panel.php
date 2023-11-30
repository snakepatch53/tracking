<?php
$_TEMPLATE_PANEL_PATH = './src/templates/panel.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PANEL_PATH, $_ENV['HTTP_DOMAIN']);

// $radapter->getHTML('/panel', 'login', function ($DATA) {
// });

$radapter->getHTML('/panel/login', 'login', fn () => middlewareSessionLogout(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

$radapter->getHTML('/panel', 'home', fn () => middlewareSessionLogin(), fn () => header('Location: ./panel/paquetes'));

$radapter->getHTML('/panel/paquetes', 'paquetes', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'title' => 'Paquetes',
        'locker' => (new LockerDao($DATA['mysqlAdapter']))->select(),
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

$radapter->getHTML('/panel/entregas', 'entregas', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'title' => 'Entregas',
        'locker' => (new LockerDao($DATA['mysqlAdapter']))->select(),
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// $radapter->getHTML('/panel/tracking', 'paquetes', fn () => middlewareSessionLogin(), function ($DATA) {
//     return [
//         'title' => 'Tracking',
//         'locker' => (new LockerDao($DATA['mysqlAdapter']))->select(),
//         'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
//     ];
// });

$radapter->getHTML('/panel/historial', 'historial', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'title' => 'Historial',
        'locker' => (new LockerDao($DATA['mysqlAdapter']))->select(),
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

$radapter->getHTML('/panel/faq', 'paquetes', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'title' => 'Faq',
        'locker' => (new LockerDao($DATA['mysqlAdapter']))->select(),
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});
