<?php declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';



error_log('aufruf login.php');

render('login.php', [

    'loginform' => $_POST,
    
]);
