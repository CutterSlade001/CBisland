<?php declare(strict_types=1);

require dirname(__DIR__) . '/config/config.php';
require APP_ROOT         . '/services/helper.php';

render('index.php', [
    'msg' => 'Works !',
]);
