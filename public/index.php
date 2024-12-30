<?php declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';


render('index.php', [
    'msg' => 'Works !',
]);
